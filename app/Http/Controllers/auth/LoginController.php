<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\People;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        if (Auth::guard('peoples')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->route('tasks_show');
        }

        throw ValidationException::withMessages(['password' => 'رمزعبور اشتباه است']);
    }

    public function logout()
    {
        Auth::guard('peoples')->logout();
        return redirect()->back();
    }
}
