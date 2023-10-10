<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/dfb2727f7d.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="../../resources/Images/ava-web.png">
    <title>Trang chủ - SugmaStadium</title>
    <style>
        #intro {
            background-image: url("https://m.media-amazon.com/images/I/61wbDovWcpL.jpg");
            height: 100vh;
            background-size: cover;
        }
    </style>
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
</head>
<body>
<!-- Navbar -->
<div id="intro" class="bg-image">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
        <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color:#05b50b">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('customer.index')}}"><img src="../../resources/Images/ava-web.png" alt="" height=10% width=10%> SugmaStadium</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offset-md-5 collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-2">
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="{{route('customer.index')}}">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('admin.index') }}">Quản trị</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Đặt sân</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Liên hệ</a>
                        </li>
                    </ul>
                    {{--                <div id="register" class="col-2">--}}
                    {{--                    <a type="button" class="btn btn-outline-success" href="#">Đăng ký</a>--}}
                    {{--                    <a type="button" class="btn btn-outline-primary" href="#">Đăng nhập</a>--}}
                    {{--                </div>--}}
                </div>
            </div>
        </nav>
        <!-- End navbar -->
        <div class="container-fluid" style="background-color: white; color: black">
            <marquee behavior="" direction="right" scrollamount="15">Trang web cho thuê sân bóng đá số 1 Châu Phi moidaden</marquee>
        </div>
        <div class="container-fluid my-md-3 bd-layout">
            <div class="row">
                <div class="col col-sm-3 col-lg-2 sidebar">
                    <nav class="nav menu" aria-label="Docs navigation">
                        <ul class="list-unstyled mb-0 py-3 pt-md-1">
                            <li class="mb-1 text-white">
                                <b>Tỉ số</b><br>
                                <p><img src="../../resources/Images/Manchester-United.ico" alt="" height=10% width=10%>
                                    MU 3-4 BM
                                    <img src="../../resources/Images/Bayern_Munchen.ico" alt="" height=10% width=10%>
                                </p>
                                <p><img src="../../resources/Images/Manchester-United.ico" alt="" height=10% width=10%>
                                    MU 1-3 Brighton
                                    <img src="../../resources/Images/Brighton.ico" alt="" height=10% width=10%>
                                </p>
                                <p><img src="../../resources/Images/Arsenal.ico" alt="" height=10% width=10%>
                                    Arsenal 3-1 MU
                                    <img src="../../resources/Images/Manchester-United.ico" alt="" height=10% width=10%>
                                </p>
                                <p><img src="../../resources/Images/Tottenham.ico" alt="" height=10% width=10%>
                                    Tottenham 2-0 MU
                                    <img src="../../resources/Images/Manchester-United.ico" alt="" height=10% width=10%>
                                </p>
                                <p><img src="../../resources/Images/Manchester-United.ico" alt="" height=10% width=10%>
                                    MU 2-3 Dortmund
                                    <img src="../../resources/Images/Dortmund.ico" alt="" height=10% width=10%>
                                </p>
                                <p><img src="../../resources/Images/Real-Madrid.ico" alt="" height=10% width=10%>
                                    RM 2-0 MU
                                    <img src="../../resources/Images/Manchester-United.ico" alt="" height=10% width=10%>
                                </p>
                                <p><img src="../../resources/Images/Manchester-United.ico" alt="" height=10% width=10%>
                                    MU 1-3 Wrexham
                                    <img src="../../resources/Images/Wrexham.ico" alt="" height=10% width=10%>
                                </p>
                                <p><img src="../../resources/Images/Sevilla.ico" alt="" height=10% width=10%>
                                    Sevilla 3-0 MU
                                    <img src="../../resources/Images/Manchester-United.ico" alt="" height=10% width=10%>
                                </p>
                                <p><img src="../../resources/Images/Liverpool.ico" alt="" height=10% width=10%>
                                    Liverpool 7-0 MU
                                    <img src="../../resources/Images/Manchester-United.ico" alt="" height=10% width=10%>
                                </p>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col">
                    <div class="col-5 col-md-8 offset-md-1">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img height="300" src="https://backyardsidekick.com/wp-content/uploads/2020/04/soccer-field-with-white-marks.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img height="300" src="https://dxbhsrqyrr690.cloudfront.net/sidearm.nextgen.sites/ung.sidearmsports.com/images/2023/3/28/IMG_8243_F57vK.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img height="300" src="https://yoursoccerhome.com/wp-content/uploads/2019/09/AdobeStock_264249960-1024x682.jpeg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img height="300" src="https://patch.com/img/cdn20/users/103600/20210910/073254/styles/patch_image/public/turf-field-opens-goal-___10185029396.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="row mt-3" style="background-color: #05b50b">
                        <b class="text-white" style="font-size: x-large">ĐẶT SÂN</b>
                    </div>
                    <div class="row" style="background-color: white">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
