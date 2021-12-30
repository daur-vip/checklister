<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>





    <link href="{{ asset('coreui4/css/simplebar.css') }}"  rel="stylesheet">

    <link href="{{ asset('coreui4/css/coreui.min.css') }}" rel="stylesheet">

    <link href="{{ asset('coreui4/css/coreui-chartjs.css') }}" rel="stylesheet">


</head>

<body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card-group d-block d-md-flex row">
                        <div class="card col-md-7 p-4 mb-0">
                            <div class="card-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('coreui4/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('coreui4/js/simplebar.min.js') }}"></script>



    <script src="{{ asset('coreui4/js/chart.min.js') }}"></script>
    <script src="{{ asset('coreui4/js/coreui-chartjs.js') }}"></script>
    <script src="{{ asset('coreui4/js/coreui-utils.js') }}"></script>
    <script src="{{ asset('coreui4/js/main.js') }}"></script>

</body>

</html>
