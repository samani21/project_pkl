<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h1>
                <span>PUSKESMAS BERUNTUNG RAYA</span>
            </h1>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ url('admin/home') }}" class="{{ request()->is('admin/home')?'active' :'' }}">
                        <span class="las la-tachometer-alt"></span>
                        <span>dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="">
                        <span class="las la-user-friends"></span>
                        <span>Pegawai</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/pasien/pasien') }}" class="{{ request()->is('admin/pasien/pasien')?'active' :'' }}">
                        <span class="las la-users"></span>
                        <span>Pasien</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="">
                        <span class="las la-book-medical"></span>
                        <span>Rekam Medis</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="">
                        <span class="las la-capsules"></span>
                        <span>Obat</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="">
                        <span class="las la-notes-medical"></span>
                        <span>Resep</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        @yield('content')
    </div>
</body>
</html>