@extends('index')

@section('content')
<div class="container">
    <h1>فراموشی رمز عبور</h1>
    <form action="{{ route('reset_password_show') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">ایمیل:</label>
            <input type="email" name="email" id="email">
            @error('email')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn">ارسال لینک بازیابی رمز عبور</button>
    </form>
    <div class="login-redirect">
        <p>به صفحه ورود بروید؟ <a href="{{ route('login_show') }}">اینجا کلیک کنید</a></p>
    </div>
</div>
@endsection