<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showLoginForm()
    {
        if (auth()->check()) {
            return redirect()->route('admin.dashboard'); // Nếu đã đăng nhập, chuyển hướng về dashboard
        }
        return view('login.form');
    }

    public function login(Request $request)
    {
        // Kiểm tra xem người dùng đã đăng nhập chưa
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
    
        // Thực hiện validate dữ liệu đầu vào
        $validatedData = $this->validateLogin($request);
    
        // Kiểm tra đăng nhập
        if (Auth::attempt(['TaiKhoan' => $validatedData['TaiKhoan'], 'password' => $validatedData['password']])) {
            // Regenerate session để bảo vệ khỏi session fixation attacks
            $request->session()->regenerate();
    
            // Lưu thông tin Fullname vào session (nếu chưa)
            $user = Auth::user();
            session(['my_login' => $user]);
    
            // Redirect về trang dashboard sau khi đăng nhập thành công
            return redirect()->route('admin.dashboard');
        }
    
        // Nếu đăng nhập thất bại, trả về thông báo lỗi
        return back()->with('error', 'Tài khoản hoặc mật khẩu không đúng. Vui lòng thử lại.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.loginForm');
    }

    private function validateLogin(Request $request)
    {
        $rules = [
            'TaiKhoan' => 'required|string|max:50',
            'password' => 'required|string|min:5|max:50',
        ];
        $messages = [
            'TaiKhoan.required' => 'Tên tài khoản không được để trống.',
            'TaiKhoan.max' => 'Tên tài khoản không được vượt quá 50 ký tự.',
            'password.required' => 'Mật khẩu không được để trống.',
            'password.min' => 'Mật khẩu phải có ít nhất 5 ký tự.',
            'password.max' => 'Mật khẩu không được vượt quá 50 ký tự.',
        ];

        return $request->validate($rules, $messages);
    }
}