@extends('admin.nhaphang.index')

@section('table-content')
    <form
        action="{{ isset($chiTietPhieuNhap) ? route('chitietphieunhap.update', $chiTietPhieuNhap->MaChiTietPhieuNhap) : route('chitietphieunhap.store') }}"
        method="POST">
        @csrf
        @if (isset($chiTietPhieuNhap))
            @method('PUT')
        @endif
        <div class="container mt-4">
            <h3>{{ isset($chiTietPhieuNhap) ? 'Cập Nhật' : 'Thêm Mới' }} Chi Tiết Phiếu Nhập</h3>

            <div class="form-group">
                <label for="MaSP">Sách</label>
                <select name="MaSP" class="form-control">
                    <option value="">Chọn Sách</option>
                    @foreach ($sachs as $sach)
                        <option value="{{ $sach->IDSach }}"
                            {{ old('MaSP', $chiTietPhieuNhap->MaSP ?? '') == $sach->IDSach ? 'selected' : '' }}>
                            {{ $sach->TenSach }}
                        </option>
                    @endforeach
                </select>
                @error('MaSP')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="MaPhieuNhap">Ngày Nhập</label>
                <select name="MaPhieuNhap" class="form-control">
                    <option value="">Chọn Ngày Nhập</option>
                    @foreach ($phieuNhaps as $phieuNhap)
                        <option value="{{ $phieuNhap->MaPhieuNhap }}"
                            {{ old('MaPhieuNhap', $chiTietPhieuNhap->MaPhieuNhap ?? '') == $phieuNhap->MaPhieuNhap ? 'selected' : '' }}>
                            {{ $phieuNhap->NgayNhap }}
                        </option>
                    @endforeach
                </select>
                @error('MaPhieuNhap')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="SoLuongNhap">Số Lượng Nhập</label>
                <input type="number" name="SoLuongNhap" class="form-control"
                    value="{{ old('SoLuongNhap', $chiTietPhieuNhap->SoLuongNhap ?? '') }}">
                @error('SoLuongNhap')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="NgayBan">Ngày Bán</label>
                <input type="date" name="NgayBan" class="form-control"
                    value="{{ old('NgayBan', $chiTietPhieuNhap->NgayBan ?? '') }}">
                @error('NgayBan')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">{{ isset($chiTietPhieuNhap) ? 'Cập Nhật' : 'Lưu' }}</button>
            <a href="{{ route('admin.chitietphieunhap') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </form>
@endsection
