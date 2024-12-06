<?php

namespace App\Http\Controllers;

use App\Models\PhieuNhap;
use App\Models\ChiTietPhieuNhap;
use App\Models\Sach;
use Illuminate\Http\Request;

class ChiTietPhieuNhapController extends Controller
{
    public function index()
    {
        // Lấy dữ liệu chi tiết phiếu nhập và phân trang
        $chiTietPhieuNhaps = ChiTietPhieuNhap::with('phieuNhap')->paginate(5);
        return view('admin.nhaphang.chitietphieunhap.index', compact('chiTietPhieuNhaps'));
    }

    public function create()
    {
        // Lấy danh sách phiếu nhập và sách
        $phieuNhaps = PhieuNhap::all();
        $sachs = Sach::all();
        return view('admin.NhapHang.ChiTietPhieuNhap.form', compact('phieuNhaps', 'sachs'));
    }

    public function store(Request $request)
    {
        // Gọi phương thức validateChiTietPhieuNhap để xác nhận dữ liệu
        $validatedData = $this->validateChiTietPhieuNhap($request);
    
        // Sau khi validate thành công, tạo chi tiết phiếu nhập mới
        ChiTietPhieuNhap::create([
            'MaPhieuNhap' => $validatedData['MaPhieuNhap'],  // Lưu MaPhieuNhap
            'MaSP' => $validatedData['MaSP'],
            'SoLuongNhap' => $validatedData['SoLuongNhap'],
            'NgayBan' => $validatedData['NgayBan'],
        ]);
    
        return redirect()->route('admin.chitietphieunhap')->with('success', 'Thêm chi tiết phiếu nhập thành công!');
    }

    public function edit($id)
    {
        $chiTietPhieuNhap = ChiTietPhieuNhap::findOrFail($id);
        $phieuNhaps = PhieuNhap::all();
        $sachs = Sach::all();
        return view('admin.nhaphang.chitietphieunhap.form', compact('chiTietPhieuNhap', 'phieuNhaps', 'sachs'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $this->validateChiTietPhieuNhap($request);

        // Cập nhật chi tiết phiếu nhập
        $chiTietPhieuNhap = ChiTietPhieuNhap::findOrFail($id);
        $chiTietPhieuNhap->update($validatedData);

        return redirect()->route('admin.chitietphieunhap')->with('success', 'Cập nhật chi tiết phiếu nhập thành công!');
    }

    public function destroy($id)
    {
        // Xóa chi tiết phiếu nhập
        $chiTietPhieuNhap = ChiTietPhieuNhap::findOrFail($id);
        $chiTietPhieuNhap->delete();

        return redirect()->route('admin.chitietphieunhap')->with('success', 'Xóa chi tiết phiếu nhập thành công!');
    }

    // Phương thức validateChiTietPhieuNhap đã gộp lại
    private function validateChiTietPhieuNhap(Request $request)
    {
        $rules = [
            'MaPhieuNhap' => 'required|exists:phieunhap,MaPhieuNhap',
            'MaSP' => 'required|exists:sach,IDSach',
            'SoLuongNhap' => 'required|integer|min:1',
            'NgayBan' => 'required|date',
        ];

        $messages = [
            'MaPhieuNhap.required' => 'Ngày nhập không được để trống.',
            'MaPhieuNhap.exists' => 'Ngày nhập không tồn tại trong hệ thống.',
            'MaSP.required' => 'Tên sách không được để trống.',
            'MaSP.exists' => 'Tên sách không tồn tại.',
            'SoLuongNhap.required' => 'Số lượng nhập không được để trống.',
            'SoLuongNhap.integer' => 'Số lượng nhập phải là một số nguyên.',
            'SoLuongNhap.min' => 'Số lượng nhập phải lớn hơn hoặc bằng 1.',
            'NgayBan.required' => 'Ngày bán không được để trống.',
            'NgayBan.date' => 'Ngày bán không hợp lệ.',
        ];

        // Gọi validate và trả về dữ liệu đã validate
        return $request->validate($rules, $messages);
    }
}