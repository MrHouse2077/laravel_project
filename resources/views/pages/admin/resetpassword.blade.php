<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="/assets/images/favicon-32x32.png" type="image/png" />
  <!-- Bootstrap CSS -->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/assets/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="/assets/css/style.css" rel="stylesheet" />
  <link href="/assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- loader-->
	<link href="/assets/css/pace.min.css" rel="stylesheet" />

  <title>Onedash - Bootstrap 5 Admin Template</title>
</head>

<body>

  <!--start wrapper-->
  <div class="wrapper">
    
       <!--start content-->
       <main class="authentication-content">
        <div class="container-fluid">
          <div class="authentication-card">
            <div class="card shadow rounded-0 overflow-hidden">
              <div class="row g-0">
                <div class="col-lg-6 d-flex align-items-center justify-content-center border-end">
                  <img src="/assets/images/error/forgot-password-frent-img.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6">
                  <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title">Genrate New Password</h5>
                    <p class="card-text mb-5">We received your reset password request. Please enter your new password!</p>
                    <form class="form-body" action="{{route('adminResetPassRequest')}}" method="POST">
                        @csrf
                        <div class="row g-3">
                          <div class="col-12">
                            <label for="inputNewPassword" class="form-label">New Password</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                              <input type="hidden" name="id" value="{{$id}}">
                              <input type="password" name="password" class="form-control radius-30 ps-5" id="inputNewPassword" placeholder="Enter New Password">
                            </div>
                          </div>
                          <div class="col-12">
                            <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                              <input type="password" name="password_confirmation" class="form-control radius-30 ps-5" id="inputConfirmPassword" placeholder="Confirm Password">
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="d-grid gap-3">
                              <button type="submit" class="btn btn-primary radius-30">Change Password</button>
							  <button type="submit" class="btn btn-light radius-30">Back to Login</button>
                            </div>
                          </div>
                        </div>
                    </form>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </main>
        
       <!--end page main-->

  </div>
  <!--end wrapper-->


  <!--plugins-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/pace.min.js"></script>


</body>

</html>