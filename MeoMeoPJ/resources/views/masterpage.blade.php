<!doctype html>
<html lang="en">

<head>
    <title>MeoMeo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main_style.css') }}">
</head>

<body>
    <div class="container-fluid box-header">

        <div class="input-group header-box">
            <h2 style="margin-top: 25px; padding-right: 10px"><a class="home" href="{{ route('home') }}">KayukiBook</a></h2>
            <input type="text" class="form-control search-box" placeholder="Search">
            <a name="Cart" id="" class="btn btn-primary login-button" href="{{ route('cart') }}" role="button">Giỏ hàng</a>
            {{-- Tài khoản - Đăng nhập + Đăng kí --}}
            {{-- Nếu đã đăng nhập thì chuyển sang: Tài khoản -> Tên tài khoản --}}
            <a name="Login" id="" class="btn btn-primary login-button" href="{{ route('login') }}" role="button">Đăng nhập</a>
            <a name="Regiter" id="" class="btn btn-primary regiter-button" href="{{ route('register') }}" role="button">Đăng kí</a>
        </div>
    </div>

    {{-- HIỆN THÔNG BÁO ĐĂNG KÍ THÀNH CÔNG --}}
        {{-- THÔNG BÁO SẼ BIẾN MẤT SAU 3S --}}
    @if (session('success'))
        <div id="success-alert" class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    
    <script>
        // Sử dụng JavaScript để ẩn thông báo sau 3 giây
        document.addEventListener('DOMContentLoaded', function () {
            const successAlert = document.getElementById('success-alert');
            if (successAlert) {
                setTimeout(() => {
                    successAlert.style.display = 'none'; // Ẩn thông báo sau 3 giây
                }, 3000);
            }
        });
    </script>
    

    <div class="container-fluid box-menu">
        <a href="#">Danh mục</a>
        {{-- Tạo danh mục dropdown theo thể loại --}}
        {{-- Tạo danh sách sản phẩm theo kiểu trên web --}}
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
