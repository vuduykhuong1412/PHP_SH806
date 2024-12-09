@extends('admin.nhaphang.index')

@extends('admin.nhaphang.index')

@section('table-content')
    <div class="container mt-4">
        <h3>Danh Sách Chi Tiết Phiếu Nhập</h3>
        <a href="{{ route('chitietphieunhap.create') }}" class="btn btn-primary mb-3">Thêm Mới Chi Tiết Phiếu Nhập</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Mã Chi Tiết</th>
                    <th>Tên Sách</th>
                    <th>Ngày Nhập</th>
                    <th>Số Lượng Nhập</th>
                    <th>Ngày Bán</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($chiTietPhieuNhaps as $chiTiet)
                    <tr>
                        <td>{{ $chiTiet->MaChiTietPhieuNhap }}</td>
                        <td>{{ $chiTiet->sach->TenSach }}</td>
                        <td>{{ $chiTiet->phieuNhap->NgayNhap }}</td>
                        <td>{{ $chiTiet->SoLuongNhap }}</td>
                        <td>{{ $chiTiet->NgayBan }}</td>
                        <td>
                            <a href="{{ route('chitietphieunhap.edit', $chiTiet->MaChiTietPhieuNhap) }}"
                                class="btn btn-warning btn-sm">Sửa</a>
                            <form action="{{ route('chitietphieunhap.destroy', $chiTiet->MaChiTietPhieuNhap) }}"
                                method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Xác nhận xóa?')">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Không có dữ liệu.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Phân trang -->
        <div class="d-flex justify-content-center">
            {{ $chiTietPhieuNhaps->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
