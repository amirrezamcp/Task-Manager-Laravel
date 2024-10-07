@extends('index')

@section('content')
<div class="container">
    <h1>تنظیمات کاربر</h1>

    @if (Session::has('success'))
    <div class="success-message">
        <span>
            {!! Session::get('success') !!}
        </span>
    </div>  
@endif

    <form action="{{ route('settings_update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="username">نام کاربری</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}">
            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="email">ایمیل</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="current_password">پسورد فعلی</label>
            <input type="password" class="form-control" id="current_password" name="current_password">
            @error('current_password')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="new_password">پسورد جدید</label>
            <input type="password" class="form-control" id="new_password" name="new_password">
            @error('new_password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="password_confirmation">تایید پسورد</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            @error('password_confirmation')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">ذخیره تغییرات</button>
    </form>
</div>
@endsection
