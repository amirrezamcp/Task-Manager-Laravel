@extends('index')

@section('content')
    <div class="container">
        <h2>ورود به حساب کاربری</h2>
        <form action="#" method="POST">
            @csrf
            <div class="login-task-maneger">
                <input type="text" id="username" name="username" placeholder="نام کاربری" required>
                <input type="password" id="password" name="password" placeholder="گذرواژه" required>
                <button type="submit">ورود</button>
            </div>
        </form>
        <div class="login-redirect">
            <p> حساب کاربری نداری؟ <a href="#"> ساخت حساب </a></p>
        </div>
    </div>
@endsection