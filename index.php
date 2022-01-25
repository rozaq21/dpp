
<!doctype html>
<html lang="en">

<!-- reab9cFmSda^AWiT -->

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Sistem Bendahara LPTQNT</title>
    <link rel="shortcut icon"  href="assets/img/logop.png">
<script src="load.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
<main class="form-signin">
  <form action="config/cek_login.php" method="post">
    <img class="mb-4" src="assets/img/logop.png" alt="" width="72px" height="72px">
    <h1 class="h3 mb-3 fw-normal">Silahkan Login</h1>

    <div class="form-floating">
      <input type="text"  name="username" class="form-control" placeholder="user231" id="floatingInput">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <input type="submit" class="w-100 btn btn-lg btn-primary" value="Login">
    <p class="mt-5 mb-3 text-muted">&copy;NTDeveloper <?= date("Y") ?></p>
  </form>
</main>


    
  </body>
</html>
