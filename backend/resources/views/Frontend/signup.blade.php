<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">

</head>
<body>
    
    <div class="container">
        <nav class="navbar">       
                <img class="logo" src="{{asset('logo.png')}}">
                <ul>
                    <li><a href="{{route('index')}}">Trang chủ</a></li>
                    <li><a href="{{route('home')}}">Đăng nhập Trang Quản lý</a></li>
                    <li><a href="{{route('dangnhap')}}">Đăng nhập Khách Hàng</a></li>
                    <li><a href="{{route('dangky')}}">Đăng Ký Khách Hàng</a></li>
                </ul>
        </nav>
    </div>
    
        <div class="pagecontainer">
            <form action="action_page.php" style="border:5px solid #ccc">
                @csrf
                <div class="container">
                    <h1>Đăng ký tài khoản</h1>
                    <p>Hãy hoàn tất thông tin trong ô trống để đăng ký tài khoản.</p>
                    <hr>

                    <label for="Email"><b>Email</b></label>
                    <input type="Email" placeholder="Điền email" name="Email" required>

                    <label for="password"><b>Mật khẩu</b></label>
                    <input type="password" placeholder="Điền mật khẩu" name="password" required>

                    <label for="psw-repeat"><b>Nhập lại mật khẩu</b></label>
                    <input type="password" placeholder="Nhập lại mật khẩu" name="psw-repeat" required>

                    <label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Nhớ mật khẩu
                    </label>

                    <p>Tạo tài khoản bạn đồng nghĩa với việc bạn đồng ý với <a href="#" style="color:dodgerblue">Điều khoản và luật pháp</a>.</p>

                    <div class="clearfix">
                        <button type="button" class="cancelbtn">Hủy bỏ</button>
                        <button type="submit" name="sbm" class="signupbtn">Đăng ký</button>
                    </div>
                </div>
            </form>
        </div>
</body>
</html>