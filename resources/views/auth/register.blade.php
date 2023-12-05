<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Register</title>

    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS via CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Feather Icons via CDN -->
    <link rel="stylesheet" href="https://unpkg.com/feather-icons/dist/feather.css">

    <!-- Font Awesome CSS via CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/register-style.css') }}">
</head>

<body>

<div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                
                <h1>Sign Up</h1>
                <p class="account-subtitle">Enter account details</p>

                <div class="loginbox row">
                    <div class="login-left col-lg-6">
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Full Name <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="name" value="{{ old('name') }}"
                                    required autocomplete="name" autofocus>
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Email <span class="login-danger">*</span></label>
                                <input class="form-control" type="email" name="email" value="{{ old('email') }}"
                                    required autocomplete="email">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Password <span class="login-danger">*</span></label>
                                <input class="form-control pass-input" type="password" name="password" required
                                    autocomplete="new-password">
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Confirm password <span class="login-danger">*</span></label>
                                <input class="form-control pass-confirm" type="password"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                    </div>

                    <div class="login-right col-lg-6">
                        <div class="login-right-wrap">
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select id="role" name="role" class="form-control" required>
                                    <option value="siswa">Siswa</option>
                                    <option value="guru">Guru</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>

                            <div id="siswaInput" class="form-group">
                                <label for="SiswaID">Siswa ID</label>
                                <input type="text" id="SiswaID" name="SiswaID" class="form-control">
                            </div>

                            <div id="guruInput" class="form-group">
                                <label for="GuruID">Guru ID</label>
                                <input type="text" id="GuruID" name="GuruID" class="form-control">
                            </div>

                            <div id="adminInput" class="form-group">
                                <label for="AdminID">Admin ID</label>
                                <input type="text" id="AdminID" name="AdminID" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="dont-have">Already Registered? <a href="{{ route('login') }}">Login</a></div>
                <div class="form-group mb-0">
                    <button class="btn btn-primary btn-block" type="submit">Register</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery via CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS via CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <!-- Feather Icons JS via CDN -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
