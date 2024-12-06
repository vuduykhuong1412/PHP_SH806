<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ChiTietPhieuNhapController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\PhieuNhapController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TrangCaNhanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// ADMIN
Route::prefix('/admin')->group(function () {
    // Route login và xử lý login không cần auth
    Route::get('/login', [UserController::class, 'showLoginForm'])->name('admin.loginForm');
    Route::post('/login', [UserController::class, 'login'])->name('admin.login');

    // Nếu đã đăng nhập, chuyển hướng tới dashboard
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });

    // Tất cả các route còn lại cần phải đăng nhập
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/logout', [UserController::class, 'logout'])->name('admin.logout');
        // Routes cho Nhập hàng
        Route::prefix('/nhaphang')->group(function () {
            // Routes cho Phiếu Nhập
            Route::get('/phieunhap', [PhieuNhapController::class, 'index'])->name('admin.phieunhap');
            Route::get('/phieunhap/create', [PhieuNhapController::class, 'create'])->name('phieunhap.create');
            Route::post('/phieunhap/store', [PhieuNhapController::class, 'store'])->name('phieunhap.store');
            Route::get('/phieunhap/edit/{id}', [PhieuNhapController::class, 'edit'])->name('phieunhap.edit');
            Route::put('/phieunhap/update/{id}', [PhieuNhapController::class, 'update'])->name('phieunhap.update');
            Route::delete('/phieunhap/destroy/{id}', [PhieuNhapController::class, 'destroy'])->name('phieunhap.destroy');
            // Routes cho Chi Tiết Phiếu Nhập
            Route::get('/chitietphieunhap', [ChiTietPhieuNhapController::class, 'index'])->name('admin.chitietphieunhap');
            Route::get('/chitietphieunhap/create', [ChiTietPhieuNhapController::class, 'create'])->name('chitietphieunhap.create');
            Route::post('/chitietphieunhap/store', [ChiTietPhieuNhapController::class, 'store'])->name('chitietphieunhap.store');
            Route::get('/chitietphieunhap/edit/{id}', [ChiTietPhieuNhapController::class, 'edit'])->name('chitietphieunhap.edit');
            Route::put('/chitietphieunhap/update/{id}', [ChiTietPhieuNhapController::class, 'update'])->name('chitietphieunhap.update');
            Route::delete('/chitietphieunhap/destroy/{id}', [ChiTietPhieuNhapController::class, 'destroy'])->name('chitietphieunhap.destroy');
        });
    });
});

// KHACH HANG
Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('home');
});

Route::prefix('')->group(function (){
    // Trang chủ
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    
    Route::get('/dashboard', function () {
        if (!session('khachHang')) { // Kiểm tra xem session 'khachHang' có tồn tại không
            return redirect()->route('login'); // Nếu không, chuyển hướng người dùng đến trang login
        }
        return view('TrangChu'); // Nếu tồn tại, trả về view 'home'
    })->name('TrangChu');

    // ĐĂNG NHẬP - ĐĂNG XUẤT
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // ĐĂNG KÍ
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    //Giỏ hàng
    Route::get('/cart', [CartController::class, 'index'])->name('cart');

    // Trang cá nhân (Sau khi đăng nhập)
    Route::get('/TrangCaNhan', [TrangCaNhanController::class, 'index'])->name('TrangCaNhan');
});
