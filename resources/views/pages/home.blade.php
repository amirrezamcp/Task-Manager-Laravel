@extends('index')

@section('content')
    <div class="content">
        <h2> به تسک منیجر خوش امدید </h2>

        <div class="login-redirect">
            <p> حساب کاربری نداری؟ <a href="{{ route('register_show') }}"> ساخت حساب </a></p>
            <p>قبلاً حساب دارید؟ <a href="{{ route('login_show') }}">ورود به حساب</a></p>
        </div>
    </div>
@endsection
