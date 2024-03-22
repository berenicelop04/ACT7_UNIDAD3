<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    /**
     * Redirecciona al usuario a la página de autenticación de Google.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtiene la información del usuario de Google y gestiona el inicio de sesión/registro.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleGoogleCallback()
    {
        try {
            $usuario = Socialite::driver('google')->user();

            $usuarioExistente = User::where('google_id', $usuario->id)->first();

            if ($usuarioExistente) {
                // El usuario ya existe, inicia sesión
                Auth::login($usuarioExistente);
                return redirect()->intended('dashboard');
            } else {
                // Crea un nuevo usuario si no existe
                $nuevoUsuario = User::create([
                    'nombre' => $usuario->name,
                    'email' => $usuario->email,
                    'google_id' => $usuario->id,
                    'password' => '', // Se elimina la generación de contraseña aleatoria
                ]);

                Auth::login($nuevoUsuario);
                return redirect()->intended('dashboard');
            }

        } catch (Exception $e) {
            report($e);  // Informa el error para la depuración
            return redirect()->intended('login')->with('error', 'Ocurrió un error durante la autenticación.');
        }
    }
}
