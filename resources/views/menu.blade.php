<nav>
    @if (auth()->guard('peoples')->check())
        <a href=" {{ route('Home_page') }} ">صفحه اصلی</a>
        <a href=" {{ route('tasks_show') }} ">تسک‌ها</a>
        <a href="#">تنظیمات</a>
        <a href="{{ route('logout') }}">خروج</a>
    @else        
        <a href=" {{ route('Home_page') }} ">صفحه اصلی</a>
        <a href=" {{ route('login_show') }} ">ورود</a>
        <a href="{{ route('register_show') }}">ثبت نام</a>
    @endif
</nav>