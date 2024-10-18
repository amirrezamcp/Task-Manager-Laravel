@extends('index')

@section('content')
    <div class="container">
        <h2>ورود به حساب کاربری</h2>
        <form action=" {{ route('login_user') }} " method="POST">
            @csrf
            <div class="login-task-maneger">
                <input type="text" id="username" name="username" placeholder="نام کاربری">
                    @error('username')
                    <span style="color: red"> {{ $message }} </span>
                    @enderror
                <input type="password" id="password" name="password" placeholder="گذرواژه">
                    @error('password')
                    <span style="color: red"> {{ $message }} </span>
                    @enderror
                <button type="submit">ورود</button>
            </div>
        </form>
        <div class="login-redirect">
            <p> حساب کاربری نداری؟ <a href=" {{ route('register_show') }} "> ساخت حساب </a></p>
            <p> رمز عبور خود را فراموش کرده اید ؟<a href=" {{ route('forgot_password_show') }} "> فراموشی رمز عبور </a></p>
        </div>
    </div>
@endsection