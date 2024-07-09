<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Daftar</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logos/logo.png') }}">

    {{-- style css --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>


<body style="background-color: #EEF3FD">
    <div class="container d-flex align-items-center justify-content-center" style="color: #546677; min-height: 90vh">
        <div class="card px-4 py-4 shadow">
            <div>
                <div class="d-flex mb-2 justify-content-center align-items-center">
                    <img src="https://www.bimbelbrawijaya.com/wp-content/uploads/2020/11/LOGO-plus-TAGLINE-scaled.jpg"
                        alt="logo" class="logo-img" style="width: 220px; border-radius: 8px">
                    <img src="https://www.bimbelbrawijaya.com/wp-content/uploads/2020/11/MASCOT-PNG-.png" alt="mascot"
                        class="logo-img" style="width: 42px; margin-left: 24px">
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-center my-2">
                <h2>Daftar</h2>
                <a href="{{ route('login') }}"
                    style="color: #B83336; text-decoration: none; font-size: 18px; font-weight: 500">Masuk</a>
            </div>

            <p>Silahkan isi form untuk membuat akun baru.</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                {{-- name --}}
                <div class="form-group mb-3">
                    <label for="name" class="font-weight-bold">Nama</label>
                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- email --}}
                <div class="form-group mb-3">
                    <label for="email" class="font-weight-bold">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" placeholder="bimbelbrawijaya@gmail.com" required
                        autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- password --}}
                <div class="form-group mb-3">
                    <label for="password" class="font-weight-bold">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" name="password" placeholder="*****" required autocomplete="new-password"
                            value="{{ old('password') }}">

                        <div class="input-group-append">
                            <span class="input-group-text" id="password-addon"
                                onclick="togglePasswordVisibility('password', 'password-addon')"
                                style="background-color: #e9e9e9">
                                <i class="bi-eye-slash"></i>
                            </span>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group mb-2">
                    <label for="konfirmasi-password" class="font-weight-bold">Konfirmasi Password</label>
                    <div class="input-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password" placeholder="*****"
                            value="{{ old('password_confirmation') }}" required>

                        <div class="input-group-append">
                            <span class="input-group-text" id="password-confirm-addon"
                                onclick="togglePasswordVisibility('password-confirm', 'password-confirm-addon')"
                                style="background-color: #e9e9e9">
                                <i class="bi-eye-slash"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <button type="submit" class="btn btn-block px-5"
                        style="background-color: #B83336; color:#f8f9fa">Daftar</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function togglePasswordVisibility(inputId, addonId) {
            const passwordInput = document.getElementById(inputId);
            const passwordAddon = document.getElementById(addonId);
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;
            passwordAddon.innerHTML = `<i class="bi ${type === 'password' ?  'bi-eye-slash' : 'bi-eye' }"></i>`;
        }
    </script>
</body>

</html>
