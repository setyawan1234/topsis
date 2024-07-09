<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- title --}}
    <title>@yield('title', 'Spk-Topsis')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{-- style css --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logos/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <script>
        function confirmationDel(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);
        swal({
                title: "Apakah Yakin Ingin Menghapus Data!",
                text: "Data Tidak Akan Kembali Jika Di Hapus",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willCancel) => {
                if (willCancel) {
                    window.location.href = urlToRedirect;
                }
            });
    }
    </script>

    {{-- icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body style="background-color: #F5F5F9">
    {{-- page wrapper --}}
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        <!-- Sidebar -->
        @include('layouts.sidebar')

        <div class="body-wrapper">
            {{-- navbar --}}
            @include('layouts.navbar')

            <div class="mx-9 flex-grow-1">
                {{-- contents --}}
                @if (Session::has('success'))
                    <div class="mt-3 mb-0 alert alert-success">
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                @endif
                @if (Session::has('error'))
                    <div class="mt-3 mb-0 alert alert-danger">
                        {{ Session::get('error') }}
                        @php
                            Session::forget('error');
                        @endphp
                    </div>
                @endif
                @if (Session::has('info'))
                    <div class="mt-3 mb-0 alert alert-info">
                        {{ Session::get('info') }}
                        @php
                            Session::forget('info');
                        @endphp
                    </div>
                @endif
                @yield('contents')
                {{-- footer --}}
            </div>
            @include('layouts.footer')
        </div>
    </div>
    @include('sweetalert::alert')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/sidebarmenu.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/app.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('libs/apexcharts/dist/apexcharts.min.js') }}"></script> --}}
    <script src="{{ asset('libs/simplebar/dist/simplebar.js') }}"></script>
    {{-- <script src="{{ asset('js/dashboard.js') }}"></script> --}}
    <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>

    <script>
        $(document).ready(function() {
            $('#DataTable').DataTable({
                pageLength: 5,
                lengthMenu: [
                    [5, 10, 20],
                    [5, 10, 20],
                ],
                searching: true, // Enable search functionality
            });
        });
    </script>
</body>

</html>
