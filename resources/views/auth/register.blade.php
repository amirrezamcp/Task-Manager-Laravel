@extends('index')

@section('content')
    <div class="container">
        <h2>ساخت حساب کاربری</h2>
        <form action=" {{ route('register_add') }} " method="POST">
            @csrf
            <div class="register-task-maneger">
                <input type="text" id="username" name="username" placeholder="نام کاربری" >
                    @error('username')
                    <span style="color: red"> {{ $message }} </span>
                    @enderror
                <input type="email" id="email" name="email" placeholder="ایمیل" >
                    @error('email')
                    <span style="color: red"> {{ $message }} </span>
                    @enderror
                <input type="password" id="password" name="password" placeholder="گذرواژه" >
                    @error('password')
                    <span style="color: red"> {{ $message }} </span>
                    @enderror
                <input type="password" id="confirm_password" name="confirm_password" placeholder="تأیید گذرواژه" >
                    @error('confirm_password')
                    <span style="color: red"> {{ $message }} </span>
                    @enderror
                <button type="submit">ساخت حساب</button>
            </div>
        </form>
        <div class="login-redirect">
            <p>قبلاً حساب دارید؟ <a href="/login">ورود به حساب</a></p>
        </div>
    </div>
@endsection