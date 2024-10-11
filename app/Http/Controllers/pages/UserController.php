<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function settings()
    {
        $user = auth()->guard('peoples')->user();
        return view('pages.settings', compact('user'));
    }
    
    public function update(UserRequest $request, $setting)
    {
        $validate_data = $request->validated();
        $user = People::findOrFail($setting );
        
        $user->update([
            'username' => $validate_data['username'],
            'email' => $validate_data['email'],
            'password' => Hash::make($validate_data['new_password']),
        ]);
    
        return redirect()->route('settings_show')->with('success', 'تنظیمات با موفقیت به‌روزرسانی شد.');
    }
}
