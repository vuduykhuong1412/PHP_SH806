<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="{{ asset('css/main_style.css') }}">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    {{-- HEARDER --}}
    <div class="container-fluid box-header">
        <div class="input-group header">
            <h2 style="margin-top: 25px; padding-right: 10px"><a class="home" href="{{ route('home') }}">KayukiBook</a></h2>
        </div>
    </div>

    <div class="container">
        <h2>ĐĂNG KÍ</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="TenKH">Họ và tên:</label>
                <input type="text" name="TenKH" id="TenKH" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="TaiKhoan">Tên tài khoản:</label>
                <input type="text" name="TaiKhoan" id="TaiKhoan" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="MatKhau">Mật khẩu:</label>
                <input type="password" name="MatKhau" id="MatKhau" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="MatKhau_confirmation">Xác nhận mật khẩu:</label>
                <input type="password" name="MatKhau_confirmation" id="MatKhau_confirmation" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="DiaChi">Địa chỉ:</label>
                <input type="text" name="DiaChi" id="DiaChi" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="SDT">Số điện thoại:</label>
                <input type="text" name="SDT" id="SDT" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="Ngaysinh">Ngày sinh:</label>
                <input type="date" name="Ngaysinh" id="Ngaysinh" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="Gender">Giới tính:</label>
                <select name="Gender" id="Gender" class="form-control" required>
                    <option value="0">Không xác định</option>
                    <option value="1">Nam</option>
                    <option value="2">Nữ</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Đăng ký</button>
        </form>
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