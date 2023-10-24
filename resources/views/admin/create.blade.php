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
    />
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
        rel="stylesheet"
    />
    <script src="https://kit.fontawesome.com/dfb2727f7d.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="../../../resources/Images/ava-web.png">
    <title>Trang quản trị - Thêm nhân viên</title>
</head>
<body style="background-color: whitesmoke">
<div class="d-flex flex-nowrap">
    <div class="d-flex flex-column flex-shrink-0 bg-success bg-gradient border-end border-black border-1 ps-2">
        <a href="{{ route('customers.index') }}" class="link-dark" style="width: 83px">
            <img src="../../../resources/Images/ava-web.png" style="width: 100%">
        </a>
        <ul class=" nav nav-pills nav-flush flex-column mb-auto text-center">
            <li class="nav-item">
                <a href="{{ route('dashboard.index') }}" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                    <img src="../../../resources/Images/bar-chart.png" style="width: 28px; height: 28px">
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('fields.index') }}" class="nav-link bg-warning py-3 border-bottom border-black border-2" style="width: 83px">
                    <img src="../../../resources/Images/football-field.png" style="width: 28px; height: 28px">
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('field_types.index') }}" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                    <img src="../../../resources/Images/scalability.png" style="width: 28px; height: 28px">
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.customers') }}" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                    <img src="../../../resources/Images/customer.png" style="width: 28px; height: 28px">
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.orders') }}" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                    <img src="../../../resources/Images/clipboard.png" style="width: 28px; height: 28px">
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('times.index') }}" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                    <img src="../../../resources/Images/24-hours.png" style="width: 28px; height: 28px">
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.index') }}" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                    <img src="../../../resources/Images/setting.png" style="width: 28px; height: 28px">
                </a>
            </li>
        </ul>
        <div class="dropup border-top">
            <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../../../resources/Images/ava-web.png" alt="Admin" width="42" height="42" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small shadow">
                <li>
                    <a class="dropdown-item" href="#" >Đăng xuất</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col col-11 ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('customers.index') }}">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="#">Quản lý nhân viên</a></li>
                <li class="breadcrumb-item active" aria-current="page">Thêm nhân viên</li>
            </ol>
        </nav>
        <div>
            <h1 class="text-success mt-4" style="font-family: 'Segoe UI Black'; font-size: xxx-large">THÊM NHÂN VIÊN</h1>
        </div>
        <div class="border-top border-success border-4 my-4">
            <form class="needs-validation" method="post" action="{{ route('admin.store') }}" novalidate>
                @csrf
                <div class="row">
                    <div class="col-8 mx-3">
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control mt-3" id="floatingName" placeholder="Tên nhân viên" name="name" required>
                            <label for="floatingName">Tên nhân viên</label>
                            <div class="invalid-feedback">Vui lòng điền thông tin vào ô này</div>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="email" class="form-control mt-3" id="floatingEmail" placeholder="Email" name="email" required>
                            <label for="floatingEmail">Email</label>
                            <div class="invalid-feedback">Vui lòng điền thông tin vào ô này</div>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control mt-3" id="floatingNumber" placeholder="Số điện thoại" name="phonenumber" required>
                            <label for="floatingNumber">Số điện thoại</label>
                            <div class="invalid-feedback">Vui lòng điền thông tin vào ô này</div>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control mt-3" id="floatingPass" placeholder="Mật khẩu" name="password" required>
                            <label for="floatingPass">Mật khẩu</label>
                            <div class="invalid-feedback">Vui lòng điền thông tin vào ô này</div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success btn-lg mt-3">Thêm Nhân viên</button>
            </form>
        </div>
    </div>
</div>
<script src="../../../resources/js/validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>

