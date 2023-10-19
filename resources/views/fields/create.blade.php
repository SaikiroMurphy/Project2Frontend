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
    <title>Trang quản trị - Quản lý sân</title>
</head>
<body style="background-color: whitesmoke">
<div class="d-flex flex-nowrap">
    <div class="d-flex flex-column flex-shrink-0 bg-success bg-gradient border-end border-black border-1 ps-2">
        <a href="{{ route('customers.index') }}" class="link-dark" style="width: 83px">
            <img src="../../../resources/Images/ava-web.png" style="width: 100%">
        </a>
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
            <li class="nav-item">
                <a href="{{ route('admin.index') }}" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                    <img src="../../../resources/Images/bar-chart.png" style="width: 24px; height: 24px">
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link py-3 bg-warning border-bottom border-black border-2" style="width: 83px">
                    <img src="../../../resources/Images/football-field.png" style="width: 24px; height: 24px">
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.customers') }}" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                    <img src="../../../resources/Images/customer.png" style="width: 24px; height: 24px">
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                    <img src="../../../resources/Images/clipboard.png" style="width: 24px; height: 24px">
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
                <li class="breadcrumb-item"><a href="{{ route('fields.index') }}">Quản lý sân</a></li>
                <li class="breadcrumb-item active" aria-current="page">Thêm sân</li>
            </ol>
        </nav>
        <div>
            <h1 class="text-success mt-4" style="font-family: 'Segoe UI Black'; font-size: xxx-large">THÊM SÂN</h1>
        </div>
        <div class="border-top border-success border-4 my-4">
            {{--            Nhập dữ liệu vào đây đi tk loz--}}
            <form method="post" action="{{ route('fields.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-5 mx-3">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control mt-3" id="floatingName" placeholder="Tên sân" name="name">
                            <label for="floatingName">Tên sân</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control mt-3" id="floatingDesc" placeholder="Mô tả" name="description"></textarea>
                            <label for="floatingDesc">Mô Tả</label>
                        </div>
                        <div class="form-floating mb-3">
                            @foreach($field_types as $typeitem)
                                <div class="form-check form-check-inline mt-3">
                                    <input class="form-check-input" type="radio" name="type_id" value="{{ $typeitem->id }}">
                                    <label class="form-check-label" for="type_id">{{ $typeitem->type }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-5 mx-3 my-3">
                        Chọn ảnh sân: <input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)">
                        <img class="mt-1" id="output" width="500">
                    </div>
                </div>
                <button class="btn btn-success btn-lg mt-3">Thêm sân</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
</body>
</html>

