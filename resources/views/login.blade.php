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
            <div class="login-main-form">
            <center><h1>Log In</h1></center>
                <form>
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="User Name">
                  </div>
                  <div class="form-group">
                     <input type="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                     <select class="form-control" id="">
                         <option value="#">Masuk Sebagai</option>
                         <option value="1">Pemagang</option>
                         <option value="2">Perusahaan</option>
                         <option value="3">Admin</option>
                     </select>
                  </div>

                  <div class="row">
                     <div class="col-md-9">
                           <button type="submit" class="btn btn-black">Sign In</button>
                     </div>
                     <div class="col-md-3">
                              <a href="/signup" type="button" class="btn btn-black">SIGNUP</a>
                     </div>
                  </div>
               </form>
            </div>
   </div>
</body>
</html>