@extends('index')

@section('content')
<div class="container">
    <h1>بازیابی رمز عبور</h1>
    <form action="{{ route('update_Password') }}" method="POST">
        @csrf
        <input type="hidden" name="link" value="{{ $link }}">
        @error('link')
            <span style="color: red">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="password">رمز عبور جدید:</label>
            <input type="password" name="password" id="password">
            @error('password')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="confirm_password">تأیید رمز عبور:</label>
            <input type="password" name="confirm_password" id="confirm_password">
            @error('confirm_password')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn">بازیابی رمز عبور</button>
    </form>
    <div class="login-redirect">
        <p>به صفحه ورود بروید؟ <a href="{{ route('login_show') }}">اینجا کلیک کنید</a></p>
    </div>
</div>
@endsection
