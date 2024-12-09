<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Hệ Thống Quản Lý')</title>

    <!-- Bootstrap 4 CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header class="bg-primary text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="text-uppercase mb-0">Hệ thống quản lý</h1>
            @if (auth()->check())
                <div>
                    <p class="mb-0">Xin chào: <strong>{{ auth()->user()->Fullname }}</strong></p>
                    <a href="{{ route('admin.logout') }}" class="btn btn-danger btn-sm ml-2">Đăng Xuất</a>
                </div>
            @else
                <a href="{{ route('admin.loginForm') }}" class="btn btn-light btn-sm">Đăng Nhập</a>
            @endif
        </div>
    </header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">Quản lý bán hàng</a>
                    </li>
                    <li class="nav-item {{ request()->is('admin/nhaphang*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.phieunhap') }}">Thông tin nhập hàng</a>
                    </li>
                    <li class="nav-item {{ request()->is('admin/products*') ? 'active' : '' }}">
                        <a class="nav-link" href="#">Thông tin sản phẩm</a>
                    </li>
                    <li class="nav-item {{ request()->is('admin/accounts*') ? 'active' : '' }}">
                        <a class="nav-link" href="#">Thông tin tài khoản</a>
                    </li>
                    <li class="nav-item {{ request()->is('admin/invoices*') ? 'active' : '' }}">
                        <a class="nav-link" href="#">Thông tin hóa đơn</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        @yield('content') <!-- Nội dung trang -->
    </div>

    <!-- Footer -->
    <footer class="bg-primary text-light py-3 mt-5">
        <div class="container text-center">
            <p class="mb-0">© Hệ thống bán hàng online</p>
            <p class="mb-0">Mọi chi tiết liên hệ admin Tạ Văn Phúc - SĐT: 0966920973</p>
            <p class="mb-0">Địa chỉ: Đại Học Bách Khoa Hà Nội</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
