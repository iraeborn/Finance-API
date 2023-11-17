<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json(['message' => 'Autenticação bem-sucedida'], 200);
        }

        return response()->json(['message' => 'Credenciais inválidas'], 401);
    }

    public function register(Request $request)
    {
        // Lógica para registrar um novo usuário
        // Implemente a lógica de validação e criação do usuário aqui

        // Redirecionar para a página de login após o registro
        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
