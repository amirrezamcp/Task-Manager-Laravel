<?php
namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmailRequest;
use App\Mail\forgotPassword;
use App\Models\People;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function forgotPassword()
    {
        return view('auth.forgot_password');
    }

    public function sendResetLink(EmailRequest $request)
    {
        $user = People::where('email', $request->email)->firstOrFail();
        $link = bin2hex(random_bytes(8));
        $user->reset_token = $link;
        $user->save();

        Mail::to(['email' => $user->email])->send(new forgotPassword($link));
        return redirect()->back()->with('success', 'لینک بازیابی رمز عبور به ایمیل شما ارسال شد');
    }
}
