<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود به حساب کاربری</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>
    <div class="container">
        <h2>ورود به حساب کاربری</h2>
        <form onsubmit="return login(event)">
            <input type="text" id="username" placeholder="نام کاربری" required>
            <input type="password" id="password" placeholder="گذرواژه" required>
            <button type="submit">ورود</button>
        </form>
        <div class="logout" id="logout" style="display: none;">
            <button onclick="logout()">خروج</button>
        </div>
    </div>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
