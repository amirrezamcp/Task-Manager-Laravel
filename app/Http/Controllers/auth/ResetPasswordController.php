<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResetPasswordRequest;
use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{

    public function resetPassword($link)
    {
        return view('auth.reset_password', compact('link'));
    }

    public function updatePassword(ResetPasswordRequest $request)
    {
        $user = People::where('reset_token', $request->link)->firstOrFail();
        $user->password = Hash::make($request->password);
        $user->reset_token = null;
        $user->save();
        
        return redirect()->route('login_show')->with('status', 'رمز عبور با موفقیت تغییر کرد.');
    }
}
