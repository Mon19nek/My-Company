<!DOCTYPE html>
<html>
<head>
    <title>My Company</title>
    <link rel="stylesheet" href="{{ asset('../app.css') }}">
    <link rel="stylesheet" href="/bootstrap-5.0.2-dist/css/bootstrap.css">
    
</head>
<body>
    <!-- Gọi code trang header -->
    @include('master.header')

    <!-- Nơi chứa nội dung thay đổi -->
    @yield('content')
    
    <!-- Gọi code trang footer -->
    @include('master.footer')
</body>
</html>