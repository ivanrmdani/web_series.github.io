<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!--fontawesome CSS-->
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <!--style CSS-->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/style.css">

    <title>Login</title>
  </head>
  <body style="background-color:dodgerblue;">
    <div class="container" style="width:30%;">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header" style="text-align: center;">POLIKLINIK</div>
      <div class="card-body">
        <form action="input-aksi.php" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="index.html">Login</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
       
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="assets/bootstrap/js/jquery-3.4.1.slim.min.js"></script>
  <script src="assets/bootstrap/js/popper.min.js" ></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>