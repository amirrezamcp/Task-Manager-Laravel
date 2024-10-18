<?php
namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmailRequest;
use App\Mail\forgotPassword;
use App\Models\People;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function show_reset_password()
    {
        return view('auth.reset_password');
    }
    
    public function forgot_password()
    {
        return view('auth.forgot_password');
    }

    public function sendResetLink(EmailRequest $request)
    {
        $user = People::where('email', $request->email)->firstOrFail();
        $link = Str::random(60);
        $user->reset_token = $link;
        $user->save();

        Mail::to(['email' => $user->email])->send(new forgotPassword($link));
        return back()->with('status', 'لینک بازیابی رمز عبور به ایمیل شما ارسال شد.');
    }
}
