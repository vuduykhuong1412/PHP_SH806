<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Truy vấn doanh thu hàng tháng
        $salesData = DB::table('ChiTietHoaDon')
            ->join('HoaDon', 'ChiTietHoaDon.MaHoaDon', '=', 'HoaDon.MaHoaDon')
            ->join('Sach', 'ChiTietHoaDon.MaSP', '=', 'Sach.IDSach')
            ->selectRaw("DATE_FORMAT(HoaDon.NgayBan, '%Y-%m') as Month, SUM(ChiTietHoaDon.SoLuongBan * Sach.Gia) as TotalSales")
            ->groupBy('Month')
            ->orderBy('Month', 'ASC')
            ->get();

        // Chuẩn bị dữ liệu cho Chart.js
        $months = $salesData->pluck('Month')->toArray();
        $sales = $salesData->pluck('TotalSales')->toArray();

        // Truyền dữ liệu vào view
        return view('admin.dashboard', compact('months', 'sales'));
    }
}

