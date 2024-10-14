@extends('index')

@section('content')
    <div class="content">
        <h2>به تسک منیجر خوش آمدید</h2>

        <div class="container">
            <h1>آمار تسک‌ها</h1>
            <div class="chart-container">
                <canvas id="taskChart"></canvas>
            </div>
            <h2>تعداد کاربران: {{ $users }}</h2>
            <input type="hidden" id="totalTasks" value="{{ $totalTasks }}">
            <input type="hidden" id="completedTasks" value="{{ $completedTasks }}">
            <input type="hidden" id="pendingTasks" value="{{ $pendingTasks }}">
        </div>

        @if (!auth()->guard('peoples')->check())
        <div class="login-redirect">
            <p>حساب کاربری نداری؟ <a href="{{ route('register_show') }}">ساخت حساب</a></p>
            <p>قبلاً حساب دارید؟ <a href="{{ route('login_show') }}">ورود به حساب</a></p>
        </div>
        @endif
    </div>
@endsection
