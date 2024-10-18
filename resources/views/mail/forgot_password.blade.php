@extends('index')

@section('content')
<div class="container">
    <h1>فراموشی رمز عبور</h1>
    <h1>
        برای بازیابی
        <a href="{{ route('reset_password_show', $link) }}">
            اینجا
        </a>
        را کلیک کنید
    </h1>
</div>
@endsection