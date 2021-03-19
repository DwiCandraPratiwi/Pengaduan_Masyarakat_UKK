<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Registrasi Akun Masyarakat</title>

    <!-- Bootstrap core CSS -->
<link href="{{ asset('vendor') }}/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ asset('vendor') }}/bootstrap/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<form class="form-signin" action="/registerProses" method="POST">
    @csrf
  <img class="mb-4" src="{{ asset('vendor') }}/bootstrap/examples/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>

  <label for="" class="sr-only">NIK</label>
  <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukkan nik" required autofocus>

  <label for="" class="sr-only">Nama</label>
  <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Lengkap" required>

  <label for="" class="sr-only">Username</label>
  <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username" required>

  <label for="" class="sr-only">Telp</label>
  <input type="text" name="telp" id="telp" class="form-control" placeholder="Telepon" required>

  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

  

  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
  <p class="mt-5 mb-3 text-muted">Sudah punya akun?<a href="{{ route('login') }}">LOGIN</a></p>
  <p class="mt-5 mb-3 text-muted">&copy; Dwi Candra UKK</p>
</form>


    
  </body>
</html>
