@extends('admin.nhaphang.index')

@section('title', 'Phiếu Nhập')

@section('table-content')
    <div class="container mt-4">
        <h3>Danh Sách Phiếu Nhập</h3>
        <a href="{{ route('phieunhap.create') }}" class="btn btn-primary mb-3">Thêm Mới Phiếu Nhập</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Mã Phiếu Nhập</th>
                    <th>Ngày Nhập</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($phieuNhaps as $phieuNhap)
                    <tr>
                        <td>{{ $phieuNhap->MaPhieuNhap }}</td>
                        <td>{{ $phieuNhap->NgayNhap }}</td>
                        <td>
                            <a href="{{ route('phieunhap.edit', $phieuNhap->MaPhieuNhap) }}"
                                class="btn btn-warning btn-sm">Sửa</a>
                            <form action="{{ route('phieunhap.destroy', $phieuNhap->MaPhieuNhap) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Xác nhận xóa?')">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Không có dữ liệu.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <!-- Phân trang -->
        <div class="d-flex justify-content-center">
            {{ $phieuNhaps->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
