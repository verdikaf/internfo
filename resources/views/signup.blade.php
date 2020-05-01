
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    
    <link rel="stylesheet" href="{{url('/assets/library/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('/assets/library/fontawesome/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{url('/assets/library/extras/login.css')}}">
    <link rel="stylesheet" href="{{url('/assets/css/sidebar.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
</head>
<body>
   <div class="sidenav">
      <div class="login-main-text">
         <center>
            <img src="{{url('/assets/images/logo/undraw_resume_folder_2_arse.svg')}}" alt="" class="img-title1">
            <br>
            <img src="{{url('/assets/images/logo/Inferno_type_whi.png')}}" alt="" class="img-title2">
         </center> 
      </div>
   </div>
   <div class="main">
   <div class="login-main-form2">
            <center><h1>Register Pelamar.</h1></center>
            <form action="{{url('/signup/action')}}" method="POST" enctype="multipart/form-data">
               <input type="hidden" name="_token" value="{{csrf_token()}}">
               <div class="form-group">
                  <input type="text" class="form-control" name="nama" placeholder="Nama" required v-model="nama">
               </div>
               <div class="form-group">
                  <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat lahir" required v-model="tampat_lahir">
               </div>
               <div class="form-group">
                  <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal lahir" required v-model="tgl_lahir">
               </div>
               <div class="form-group">
                  <input type="text" class="form-control" name="alamat" placeholder="Alamat" required v-model="alamat">
               </div>
               <div class="form-group">
                  <input type="number" class="form-control" name="telp" placeholder="Telepon" required v-model="telp">
               </div>
               <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email" required v-model="email">
               </div>
               <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password" required v-model="password">
               </div>
               <div class="form-group">
                  <!-- <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Foto</span>
                     </div>
                     <div class="custom-file">
                        <input type="file" name="file" class="form-control">
                     </div>
                  </div> -->
                  <input type="file" class="form-control" name="file" placeholder="Foto" required>
               </div>
               <div class="row">
                  <div class="col-md-12">
                        <button type="submit" class="btn btn-black">Register</button>
                  </div>
                  <!-- <div class="col-md-3">
                        <a href="{{url('/login')}}" type="button" class="btn btn-black">Login</a>
                  </div> -->
               </div>
            </form>
         </div>
   </div>
</body>
</html>