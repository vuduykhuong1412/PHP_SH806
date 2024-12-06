@extends('admin.nhaphang.index')

@section('table-content')
    <form action="{{ isset($phieuNhap) ? route('phieunhap.update', $phieuNhap->MaPhieuNhap) : route('phieunhap.store') }}"
        method="POST">
        @csrf
        @if (isset($phieuNhap))
            @method('PUT')
        @endif
        <div class="container mt-4">
            <h3>{{ isset($phieuNhap) ? 'Cập Nhật' : 'Thêm Mới' }} Phiếu Nhập</h3>
            <div class="form-group">
                <label for="NgayNhap">Ngày Nhập</label>
                <input type="date" name="NgayNhap" class="form-control"
                    value="{{ old('NgayNhap', $phieuNhap->NgayNhap ?? '') }}">
                @error('NgayNhap')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">{{ isset($phieuNhap) ? 'Cập Nhật' : 'Lưu' }}</button>
            <a href="{{ route('admin.phieunhap') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </form>
@endsection
