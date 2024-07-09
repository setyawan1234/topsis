<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .container {
            color: #546677;
            min-height: 90vh;
        }

        .logo-img {
            width: 220px;
            border-radius: 8px;
        }
    </style>
</head>

<body style="background-color: #EEF3FD">
    <div class="container d-flex align-items-center justify-content-center">
        <div class="card px-4 py-4 shadow">
            <div class="d-flex mb-2 justify-content-center align-items-center">
                <img src="https://www.bimbelbrawijaya.com/wp-content/uploads/2020/11/LOGO-plus-TAGLINE-scaled.jpg"
                    alt="logo" class="logo-img">
                <img src="https://www.bimbelbrawijaya.com/wp-content/uploads/2020/11/MASCOT-PNG-.png" alt="mascot"
                    class="logo-img" style="width: 42px; margin-left: 24px">
            </div>
            <div class="d-flex justify-content-between align-items-center mt-2">
                <h2>Masuk</h2>
                <a href="{{ route('register') }}" style="color: #B83336; text-decoration: none; font-size: 18px; font-weight: 500">Daftar</a>
            </div>

            <p class="mb-3">Silahkan masukkan email dan password <br> untuk menuju halaman dashboard.</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                {{-- email --}}
                <div class="form-group mb-3">
                    <label for="email" class="font-weight-bold">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="bimbelbrawijaya@gmail.com" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                {{-- password --}}
                <div class="form-group mb-2">
                    <label for="password" class="font-weight-bold">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="*****" required autocomplete="current-password">
                        <div class="input-group-append">
                            <span class="input-group-text" id="password-addon" onclick="togglePasswordVisibility()" style="background-color: #e9e9e9">
                                <i class="bi bi-eye-slash"></i>
                            </span>
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group form-check d-flex justify-content-between align-items-center mb-4">
                    <div class="custom-control custom-checkbox">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="remember">Remember Me</label>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-block px-5" style="background-color: #B83336; color:#f8f9fa">Masuk</button>
                </div>
            </form>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const passwordAddon = document.getElementById('password-addon');
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;
            passwordAddon.innerHTML = `<i class="bi ${type === 'password' ? 'bi-eye-slash':'bi-eye'}"></i>`;
        }
    </script>
</body>

</html>
