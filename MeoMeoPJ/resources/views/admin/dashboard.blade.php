@extends('layout.master')

@section('title', 'Quản Lý Bán Hàng')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center">Thống kê doanh thu theo tháng</h2>

        <div class="card mt-4">
            <div class="card-body">
                <canvas id="salesChart" width="800" height="400"></canvas> <!-- Tăng kích thước biểu đồ -->
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Lấy dữ liệu từ server (dữ liệu này sẽ được gửi từ Controller)
        var months = {!! json_encode($months) !!};
        var sales = {!! json_encode($sales) !!};

        // Cấu hình biểu đồ Chart.js
        var ctx = document.getElementById('salesChart').getContext('2d');
        var salesChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: months,
                datasets: [{
                    label: 'Tổng doanh thu (VND)',
                    data: sales,
                    backgroundColor: 'rgba(54, 162, 235, 0.7)', // Màu nền cho các thanh
                    borderColor: 'rgba(54, 162, 235, 1)', // Màu viền thanh
                    borderWidth: 0 // Loại bỏ viền của thanh
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: {
                        grid: {
                            display: false // Ẩn lưới ở trục x
                        }
                    },
                    y: {
                        grid: {
                            display: false // Ẩn lưới ở trục y
                        },
                        ticks: {
                            beginAtZero: true // Đảm bảo bắt đầu từ 0
                        }
                    }
                },
                elements: {
                    bar: {
                        borderWidth: 0 // Loại bỏ viền của các thanh bar
                    }
                }
            }
        });
    </script>
@endsection
