<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('/assets/library/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('/assets/library/fontawesome/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{url('/assets/library/extras/dashboard.css')}}">
    <link rel="stylesheet" href="{{url('/assets/css/sidebar.css')}}">
    <title>INTERNFO</title>
</head>
<body>

      <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top">
    <div class="container">
        <img src="{{url('/assets/images/logo/Inferno_Type_whi.png')}}" alt="" class="headlogo" style="">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/perusahaan/lowongan">Lowongan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a href="{{url('/login')}}" type="button" class="btn btn-logout">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="bg-primarys2 py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
            <center>
                    <img src="{{url('/assets/images/logo/Inferno_type_co.png')}}" alt="" class="title2"><br><br>
                    <p class="subtitle2">Situs pencarian Magang untuk mahasiswa tervalid</p>
                    
            </center>
        </div>
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-md-6 mb-5">
            <p class="sidetitle">Apa Itu <br> Internfo ?</p>
            <br>
            <p class="sidesubtitle">Inferno adalah Website untuk menjembatani mahasiswa yang akan magang dengan perusahaan.</p>
            <br>
            <a href="/login" type="button" class="btn btn-black3" style="margin-left:30px">Sign In</a><a href="/signup" type="button" class="btn btn-black3" style="margin-left:30px">Sign Up</a>
      </div>
      <div class="col-md-6 mb-5">
        <center> 
            <img src="{{url('/assets/images/logo/hire.svg')}}" alt="" class="title2"><br><br>
        </center>
      </div>
    </div>
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Internfo 2020</p>
    </div>
    <!-- /.container -->
  </footer>



</body>
</html>


