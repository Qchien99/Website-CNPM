<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
   
</head>
<body>
        <div class="wrapper">
            <nav class="navbar">
                <img class="logo" src="{{asset('logo.png')}}">
                <ul>
                    <li><a href="{{route('index')}}">Trang chủ</a></li>
                    <li><a href="{{route('home')}}">Đăng nhập Trang Quản lý</a></li>
                    <li><a href="{{route('dangnhap')}}">Đăng nhập Khách Hàng</a></li>
                    <li><a href="{{route('dangky')}}">Đăng Ký Khách Hàng</a></li>
                </ul>
            </nav>
            <div class="center">
                <h2>Bán sản phẩm</h2>
                <h1>Đồ điện tử</h1>
                <div class="buttons">
                    <button2 class="btn2">Dự Án</button2>
                    <button2 class="btn2">Nhóm 10</button2>
                </div>
            </div>
        </div>

</body>
</html>