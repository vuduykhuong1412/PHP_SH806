@extends('layout.master')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Quản Lý Nhập Hàng</h5>
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="{{ route('admin.phieunhap') }}"
                            class="list-group-item list-group-item-action {{ request()->is('admin/nhaphang/phieunhap') ? 'active' : '' }}">
                            Phiếu Nhập
                        </a>
                        <a href="{{ route('admin.chitietphieunhap') }}"
                            class="list-group-item list-group-item-action {{ request()->is('admin/nhaphang/chitietphieunhap') ? 'active' : '' }}">
                            Chi Tiết Phiếu Nhập
                        </a>
                    </div>
                </div>
            </div>

            <!-- Table Content -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">@yield('table-title')</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @yield('table-content') <!-- Nội dung bảng sẽ được render tại đây -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
