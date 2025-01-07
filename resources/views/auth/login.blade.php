<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Log in</title>
    @vite('resources/css/app.css')
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">
    <style>
        /* Style untuk popup alert */
        .popup-alert {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #f44336;
            color: white;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: none;
            z-index: 9999;
            font-size: 16px;
            max-width: 80%;
            text-align: center;
        }

        /* Animasi fade-in */
        .popup-alert.show {
            display: block;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translate(-50%, -50%) scale(0.5);
            }

            to {
                opacity: 1;
                transform: translate(-50%, -50%) scale(1);
            }
        }
    </style>

</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-primary flex justify-center">
            <div class="flex justify-center py-3">
                <img src="{{ url('img/logo-bmti.png') }}" alt="Logo" class="w-20 h-20">
            </div>
            <div class="card-header text-center">
                <a href="{{ route('dashboard') }}" class="h1"><b>SARPRAS</b> BMTI</a>
            </div>

            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember" name="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Log In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="adminlte/dist/js/adminlte.min.js"></script>

    <!-- JavaScript untuk alert -->
    <script>
        // Fungsi untuk menampilkan dan menghapus alert pop-up
        function showPopupAlert(message) {
            // Membuat elemen pop-up alert
            const popup = document.createElement('div');
            popup.classList.add('popup-alert');
            popup.innerHTML = message;

            document.body.appendChild(popup);

            // Menampilkan alert dengan animasi
            setTimeout(() => {
                popup.classList.add('show');
            }, 100);

            // Menghilangkan alert setelah 5 detik
            setTimeout(() => {
                popup.classList.remove('show');
                setTimeout(() => {
                    popup.remove();
                }, 50);
            }, 3000);
        }

        // Mengecek jika ada error dan menampilkan alert
        @if ($errors->any())
            const errorMessages = @json($errors->all());
            const errorMessage = errorMessages.join("\n");

            showPopupAlert(errorMessage);
        @endif
    </script>


</body>

</html>
