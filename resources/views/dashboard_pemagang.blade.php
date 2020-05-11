<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('/assets/library/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('/assets/library/fontawesome/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{url('/assets/library/extras/dashboard.css')}}">
    <link rel="stylesheet" href="{{url('/assets/css/sidebar.css')}}">
    <title>{{$title}}</title>
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
            <a class="nav-link" href="/pemagang">Internship</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">{{$session['nama']}}</a>
          </li>
          <li class="nav-item">
            <a href="{{url('/sign-out')}}" type="button" class="btn btn-logout">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="bg-primarys py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
            <center>
                    <img src="{{url('/assets/images/logo/Inferno_type_whi.png')}}" alt="" class="title"><br><br>
                    <p class="subtitle">Mari Ciptakan lapangan Pekerjaan dengan bantuan Internfo</p>
                    <a href="/pemagang" type="button" class="btn btn-black">Lihat</a>
            </center>
        </div>
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-md-6 mb-5">
        <center> 
            <img src="{{url('/assets/images/logo/hire.svg')}}" alt="" class="title2"><br><br>
        </center>
      </div>
      <div class="col-md-6 mb-5">
            <img src="{{url('/assets/images/logo/tentang.png')}}" alt="" class="title3"><br><br>
            <a href="/signup" type="button" class="btn btn-black2">About Us</a>
      </div>
    </div>
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>



</body>
</html>


