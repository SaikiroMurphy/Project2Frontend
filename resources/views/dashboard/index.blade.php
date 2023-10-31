<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    >
    <script src="https://kit.fontawesome.com/dfb2727f7d.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="../resources/Images/ava-web.png">
    <title>Trang quản trị</title>
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
        rel="stylesheet"
    />
</head>
<body style="background-color: whitesmoke">
<div class="d-flex flex-nowrap">
        <div class="d-flex flex-column flex-shrink-0 bg-success bg-gradient border-end border-black border-1 ps-2">
            <a href="{{ route('customers.index') }}" class="link-dark" style="width: 83px">
                <img src="../resources/Images/ava-web.png" style="width: 100%">
            </a>
            <ul class=" nav nav-pills nav-flush flex-column mb-auto text-center">
                <li class="nav-item">
                    <a href="#" class="nav-link bg-warning py-3 border-bottom border-black border-2" style="width: 83px">
                        <img src="../resources/Images/bar-chart.png" style="width: 28px; height: 28px">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('fields.index') }}" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                        <img src="../resources/Images/football-field.png" style="width: 28px; height: 28px">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('field_types.index') }}" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                        <img src="../resources/Images/scalability.png" style="width: 28px; height: 28px">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard.customers') }}" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                        <img src="../resources/Images/customer.png" style="width: 28px; height: 28px">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard.orders') }}" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                        <img src="../resources/Images/clipboard.png" style="width: 28px; height: 28px">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('times.index') }}" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                        <img src="../resources/Images/24-hours.png" style="width: 28px; height: 28px">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.index') }}" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                        <img src="../resources/Images/setting.png" style="width: 28px; height: 28px">
                    </a>
                </li>
            </ul>
            <div class="dropup border-top">
                <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../resources/Images/ava-web.png" alt="Admin" width="42" height="42" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small shadow">
                    <li>
                        <a class="dropdown-item" href="{{ route('dashboard.logout') }}" >Đăng xuất</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col col-11 ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('customers.index') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Thống kê</li>
                </ol>
            </nav>
            <div>
                <h1 class="text-success mt-4" style="font-family: 'Segoe UI Black'; font-size: xxx-large">THỐNG KÊ</h1>
            </div>
            <ul class="list-group list-group-flush border-top border-success border-4 my-4">
                <li class="list-group-item d-flex justify-content-between align-items-start mt-4">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Số sân</div>
                        Tổng số sân
                    </div>
                    <span class="fs-1">{{ $fieldCount }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start mt-4">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Khung giờ</div>
                        Số lượng khung giờ
                    </div>
                    <span class="fs-1">{{ $timeCount }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start mt-4">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Người dùng</div>
                        Số lượng người dùng đã đăng ký
                    </div>
                    <span class="fs-1">{{ $custCount }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start mt-4">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Nhân viên</div>
                        Số lượng nhân viên
                    </div>
                    <span class="fs-1">{{ $adCount }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start mt-4">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Đặt sân</div>
                        Số lượng đơn đặt sân
                    </div>
                    <span class="fs-1">{{ $ordCount }}</span>
                </li>
            </ul>
        </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
