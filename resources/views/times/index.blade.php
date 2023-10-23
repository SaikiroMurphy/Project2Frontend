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
    <link rel="icon" type="image/x-icon" href="../../resources/Images/ava-web.png">
    <title>Trang quản trị - Quản lý sân</title>

</head>
<body style="background-color: whitesmoke">
<div class="d-flex flex-nowrap">

    {{--Sidebar--}}
    <div class="d-flex flex-column flex-shrink-0 bg-success bg-gradient border-end border-black border-1 ps-2">
        <a href="{{ route('customers.index') }}" class="link-dark" style="width: 83px">
            <img src="../../resources/Images/ava-web.png" style="width: 100%">
        </a>
        <ul class=" nav nav-pills nav-flush flex-column mb-auto text-center">
            <li class="nav-item">
                <a href="{{ route('admin.index') }}" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                    <img src="../../resources/Images/bar-chart.png" style="width: 28px; height: 28px">
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('fields.index') }}" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                    <img src="../../resources/Images/football-field.png" style="width: 28px; height: 28px">
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                    <img src="../../resources/Images/scalability.png" style="width: 28px; height: 28px">
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.customers') }}" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                    <img src="../../resources/Images/customer.png" style="width: 28px; height: 28px">
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.orders') }}" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                    <img src="../../resources/Images/clipboard.png" style="width: 28px; height: 28px">
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link bg-warning py-3 border-bottom border-black border-2" style="width: 83px">
                    <img src="../../resources/Images/24-hours.png" style="width: 28px; height: 28px">
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                    <img src="../../resources/Images/setting.png" style="width: 28px; height: 28px">
                </a>
            </li>
        </ul>
        <div class="dropup border-top">
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

    {{--Main--}}
    <div class="col col-11 ps-3">

        {{--        Breadcrumb--}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('customers.index') }}">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Quản lý khung giờ</li>
            </ol>
        </nav>

        {{--        Title--}}
        <div>
            <h1 class="text-success mt-4" style="font-family: 'Segoe UI Black'; font-size: xxx-large">QUẢN LÝ KHUNG GIỜ</h1>
        </div>
        <div class="border-top border-success border-4 my-4">

            {{--            Table--}}
            <table class="table table-success table-striped" border="1px" cellpadding="0" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <a class="btn btn-success btn-lg my-2" href="{{ route('fields.create') }}"><i class="fa-regular fa-square-plus fa-lg fa-bounce"></i></a>
                    <th scope="col">Khung giờ</th>
                    <th scope="col">Tuỳ chọn</th>
                </tr>
                </thead>

                <tbody>
                @foreach($times as $item)
                    <tr>
                        <td>{{ $item -> time }}</td>
                        <td>
                            <a class="btn btn-warning btn-lg my-1" href="{{ route('fields.edit', $item->id) }}"><i class="fa-regular fa-pen-to-square fa-shake"></i></a>
                            <button type="button" class="btn btn-danger btn-lg my-1" data-bs-toggle="modal" data-bs-target="#myModal{{ $item->id }}"><i class="fa-solid fa-dumpster fa-shake"></i></button>

                            {{--Modal--}}
                            <div class="modal fade" id="myModal{{ $item->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Xác nhận xóa</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            Bạn có chắc chắn muốn xóa mục này?
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <div class="modal-footer">
                                                <button class="btn btn-light" data-bs-dismiss="modal">Không</button>
                                                <form method="post" action="{{ route('fields.destroy', $item->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger">Có</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $times->links() }}
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

