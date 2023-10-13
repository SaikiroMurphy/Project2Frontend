<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    />
    <script src="https://kit.fontawesome.com/dfb2727f7d.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="../../resources/Images/ava-web.png">
    <title>Trang quản trị</title>
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
</head>
<body style="background-color: whitesmoke">
<div class="d-flex flex-nowrap">
        <div class="d-flex flex-column flex-shrink-0 bg-success bg-gradient border-end border-black border-1 ps-2">
            <a href="{{ route('customer.index') }}" class="link-dark" style="width: 83px">
                <img src="../../resources/Images/ava-web.png" style="width: 100%">
            </a>
            <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                <li class="nav-item">
                    <a href="{{ route('admin.index') }}" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                        <img src="../../resources/Images/bar-chart.png" style="width: 24px; height: 24px">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('field.index') }}" class="nav-link py-3 bg-warning border-bottom border-black border-2" style="width: 83px">
                        <img src="../../resources/Images/football-field.png" style="width: 24px; height: 24px">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                        <img src="../../resources/Images/customer.png" style="width: 24px; height: 24px">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                        <img src="../../resources/Images/clipboard.png" style="width: 24px; height: 24px">
                    </a>
                </li>
            </ul>
            <div class="dropdown border-top">
                <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../../resources/Images/ava-web.png" alt="Admin" width="42" height="42" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small shadow">
                    <li>
                        <a class="dropdown-item" href="#" >Đăng xuất</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col col-11 ps-2">
                <p><a href="{{ route('customer.index') }}" class="link-primary">Trang chủ</a> / <a href="#" class="link-secondary" aria-disabled="true">Quản lý sân</a></p>
            <div>
                <h1 class="text-success mt-4" style="font-family: 'Segoe UI Black'; font-size: xxx-large">QUẢN LÝ SÂN</h1>
            </div>
            <div class="border-top border-success border-4 my-4">
{{--            Nhập dữ liệu vào đây đi tk loz--}}
            </div>
        </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

