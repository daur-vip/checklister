<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">


    <title>CoreUI Free Bootstrap Admin Template</title>

    @livewireStyles

    <link href="{{ asset('coreui4/css/simplebar.css') }}" rel="stylesheet">

    <link href="{{ asset('coreui4/css/coreui.min.css') }}" rel="stylesheet">

    <link href="{{ asset('coreui4/css/coreui-chartjs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/my.css') }}" rel="stylesheet">


</head>

<body>

    @include('partials.sidebar')


    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <svg class="icon icon-lg">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
                    </svg>
                </button>

                <ul class="header-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">
                            <svg class="icon icon-lg">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-bell') }}"></use>
                            </svg></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">
                            <svg class="icon icon-lg">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-list-rich') }}">
                                </use>
                            </svg></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">
                            <svg class="icon icon-lg">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-envelope-open') }}">
                                </use>
                            </svg></a></li>
                </ul>
                <ul class="header-nav ms-3">
                    <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#"
                            role="button" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-md"><img class="avatar-img"
                                    src="https://coreui.io/demo/4.0/free/assets/img/avatars/8.jpg" alt="user@email.com">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <div class="dropdown-header bg-light py-2">
                                <div class="fw-semibold">Account</div>
                            </div><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-bell') }}">
                                    </use>
                                </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a
                                class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use
                                        xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-envelope-open') }}">
                                    </use>
                                </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a
                                class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-task') }}">
                                    </use>
                                </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a
                                class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use
                                        xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-comment-square') }}">
                                    </use>
                                </svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
                            <div class="dropdown-header bg-light py-2">
                                <div class="fw-semibold">Settings</div>
                            </div><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user') }}">
                                    </use>
                                </svg> Profile</a><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-settings') }}">
                                    </use>
                                </svg> Settings</a><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use
                                        xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-credit-card') }}">
                                    </use>
                                </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a
                                class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-file') }}">
                                    </use>
                                </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use
                                        xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-lock-locked') }}">
                                    </use>
                                </svg> Lock Account</a><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use
                                        xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}">
                                    </use>
                                </svg> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>

        </header>
        <div class="body flex-grow-1 px-3">


            @yield('content')


        </div>
        <footer class="footer">
            <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> © 2021
                creativeLabs.</div>
            <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/bootstrap/ui-components/">CoreUI UI
                    Components</a></div>
        </footer>
    </div>

    <script src="{{ asset('coreui4/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('coreui4/js/simplebar.min.js') }}"></script>



    <script src="{{ asset('coreui4/js/chart.min.js') }}"></script>
    <script src="{{ asset('coreui4/js/coreui-chartjs.js') }}"></script>
    <script src="{{ asset('coreui4/js/coreui-utils.js') }}"></script>
    <script src="{{ asset('coreui4/js/main.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>

    @yield('scripts')
</body>

</html>
