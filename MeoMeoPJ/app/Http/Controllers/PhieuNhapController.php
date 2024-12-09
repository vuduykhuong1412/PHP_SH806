<?php

namespace App\Http\Controllers;

use App\Models\PhieuNhap;
use Illuminate\Http\Request;

class PhieuNhapController extends Controller
{
    public function index()
    {
        $phieuNhaps = PhieuNhap::paginate(5); // Lấy dữ liệu và phân trang
        return view('admin.NhapHang.PhieuNhap.index', compact('phieuNhaps'));
    }

    public function create()
    {
        return view('admin.NhapHang.PhieuNhap.form');
    }

    public function store(Request $request)
    {
        // Gọi phương thức validatePhieuNhap để xác nhận dữ liệu
        $validatedData = $this->validatePhieuNhap($request);

        // Sau khi validate thành công, tạo mới phiếu nhập
        PhieuNhap::create($validatedData);

        return redirect()->route('admin.phieunhap')->with('success', 'Thêm phiếu nhập thành công!');
    }

    public function edit($id)
    {
        $phieuNhap = PhieuNhap::findOrFail($id);
        return view('admin.NhapHang.PhieuNhap.form', compact('phieuNhap'));
    }

    public function update(Request $request, $id)
    {
        // Gọi phương thức validatePhieuNhap để xác nhận dữ liệu
        $validatedData = $this->validatePhieuNhap($request);

        $phieuNhap = PhieuNhap::findOrFail($id);
        $phieuNhap->update($validatedData);

        return redirect()->route('admin.phieunhap')->with('success', 'Cập nhật phiếu nhập thành công!');
    }

    public function destroy($id)
    {
        $phieuNhap = PhieuNhap::findOrFail($id);
        $phieuNhap->delete();

        return redirect()->route('admin.phieunhap')->with('success', 'Xóa phiếu nhập thành công!');
    }

    // Phương thức validatePhieuNhap đã gộp lại
    private function validatePhieuNhap(Request $request)
    {
        $rules = [
            'NgayNhap' => 'required|date',
        ];

        $messages = [
            'NgayNhap.required' => 'Ngày nhập không được để trống.',
            'NgayNhap.date' => 'Ngày nhập không hợp lệ.',
        ];

        // Gọi validate và trả về dữ liệu đã validate
        return $request->validate($rules, $messages);
    }
}