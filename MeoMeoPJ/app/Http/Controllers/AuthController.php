<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
// PHẦN ĐĂNG NHẬP
    // Hiển thị trang đăng nhập
    public function showLoginForm() {
        return view('auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'TaiKhoan' => 'required',
            'MatKhau' => 'required',
        ]);

        $khachHang = KhachHang::where('TaiKhoan', $request->TaiKhoan)->first();

        if ($khachHang && Hash::check($request->MatKhau, $khachHang->MatKhau)) {
            // Lưu thông tin đăng nhập vào session
            session(['khachHang' => $khachHang]);
            
            return redirect()->route('TrangChu')->with('Succes', 'Đăng nhập thành công');
        }

        return back()->withErrors(['login' => 'Tài khoản hoặc mật khẩu không chính xác']);
    }

// PHẦN ĐĂNG XUẤT
    public function logout() {
        session()->forget(('khachHang'));
        return redirect()->route('home')->with('success', 'Đăng xuất thành công!');
    }

// PHẦN ĐĂNG KÍ
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'TenKH' => 'required|string|max:255',
            'TaiKhoan' => 'required|string|max:255|unique:Khachhang,TaiKhoan',
            'MatKhau' => 'required|string|min:6|confirmed',
            'DiaChi' => 'required|string|max:255',
            'SDT' => 'required|digits_between:10,15',
            'Ngaysinh' => 'required|date',
            'Gender' => 'required|in:0,1,2',
        ]);
    
        // Tạo mới khách hàng
        $khachHang = KhachHang::create([
            'TenKH' => $request->TenKH,
            'TaiKhoan' => $request->TaiKhoan,
            'MatKhau' => Hash::make($request->MatKhau), // Băm mật khẩu
            'DiaChi' => $request->DiaChi,
            'SDT' => $request->SDT,
            'Ngaysinh' => $request->Ngaysinh,
            'Gender' => $request->Gender,
        ]);
    
        // Đăng nhập người dùng ngay sau khi đăng ký
        session(['khachHang' => $khachHang]);
    
        // Chuyển hướng đến trang dashboard hoặc bất kỳ đâu bạn muốn
        return redirect()->route('home')->with('success', 'Đăng ký thành công!');
    }
    
}
