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
            <a class="nav-link" href="/dashboard/pemagang">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pemagang">Jobs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/aboutus1">About Us</a>
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
  <header class="bg-primarys2 py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
            <center>
                <p class="subtitle2" style="padding-bottom:0px">Welcome to</p><br>
                <img src="{{url('/assets/images/logo/Inferno_type_whi.png')}}" alt="" class="titleboutus">        
            </center>
        </div>
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container-fluid wrapaboutus">
    <div class="row">
      <div class="col-md-6 mb-5">
            <p class="sidetitle-aboutus">Tujuan Kami</p>
            <br>
            <p class="sidesubtitle-aboutus">Tujuan kami hadir disini adalah untuk mempermudah para 
                mahasiswa yang kesulitan mencari tempat yang memang menyediakan program magang</p>
            <br>
      </div>
      <div class="col-md-6 mb-5">
            <p class="sidetitle-aboutus">Fokus Kami</p>
            <br>
            <p class="sidesubtitle-aboutus">Terus melakukan pengembangan inovasi agar mempermudah 
              masyarakat dalam melakukan kegiatan</p>
            <br>
      </div>
    </div>
  </div>

  <div class="container-fluid wrapaboutus2">
  <p class="sidetitle-aboutus" style="margin-bottom:50px">Team Kami</p>
    <div class="row">
      <div class="col-md-4 mb-5">
      <center>
            <img src="assets/images/logo/Asset 2.png" class="circular-square" alt="">
            <p class="sideteam-aboutus">Verdika Fajar S.</p>
      </center>
            
            <br>
      </div>
      <div class="col-md-4 mb-5">
      <center>
            <img src="assets/images/logo/Asset 2.png" class="circular-square" alt="">
            <p class="sideteam-aboutus">Dyah Ayu P.</p>
      </center>
      </div>
      <div class="col-md-4 mb-5">
      <center>
            <img src="assets/images/logo/Asset 2.png" class="circular-square" alt="">
            <p class="sideteam-aboutus">Galang indra V.</p>
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


