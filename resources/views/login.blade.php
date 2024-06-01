<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-8">
            <div class="card bg-dark text-white">
                <div class="row no-gutters">
                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                        <img src="logo.png" class="img-fluid p-3" alt="Logo">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-center">Login</h5>
                            <form method="POST" action="{{ url('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">E-Mail</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan akun e-mail">
                                    @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </form>
                            <div class="text-center mt-3">
                                <a href="{{ url('register') }}" class="register-link">Belum punya akun? Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div
