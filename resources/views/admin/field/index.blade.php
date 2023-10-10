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
<div class="container-fluid pt-1">
    <div class="row">
        <div class="col col-1 bg-success bg-gradient border-end border-black border-1">
            <a href="{{ route('customer.index') }}" class="link-dark">
                <img src="../../resources/Images/ava-web.png" style="width: 100%">
            </a>
            <ul class="nav nav-pills mb-auto text-center">
                <li class="nav-item">
                    <a href="{{ route('admin.index') }}" class="nav-link py-3 border-bottom border-black border-2">
                        <img src="../../resources/Images/bar-chart.png" style="width: 80%">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('field.index') }}" class="nav-link py-3 bg-warning border-bottom border-black border-2">
                        <img src="../../resources/Images/football-field.png" style="width: 80%">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link py-3 border-bottom border-black border-2">
                        <img src="../../resources/Images/customer.png" style="width: 80%">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link py-3 border-bottom border-black border-2">
                        <img src="../../resources/Images/clipboard.png" style="width: 80%">
                    </a>
                </li>
            </ul>
        </div>
        <div class="col col-11">
            <div class="" style="background-color: #e0e0e0">
                <p><a href="{{ route('customer.index') }}" class="link-primary">Trang chủ</a> / <a href="#" class="link-secondary" aria-disabled="true">Quản lý sân</a></p>
            </div>
            <div>
                <h1 class="text-success mt-4" style="font-family: 'Segoe UI Black'; font-size: xxx-large">QUẢN LÝ SÂN</h1>
            </div>
            <div class="border-top border-success border-4 my-4">
{{--            Nhập dữ liệu vào đây đi tk loz--}}
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

