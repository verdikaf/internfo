
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
            <center><h1>Sign Up.</h1></center>
                <form>
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                     <input type="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                     <input type="password" class="form-control" placeholder="Nama">
                  </div>
                  <div class="form-group">
                     <input type="password" class="form-control" placeholder="Alamat">
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01"
                                aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-black">Create</button>
                    </div>
                  </div>
                    

               </form>
        </div>



         <!-- <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form>
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" class="form-control" placeholder="User Name">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-black">Login</button>
                  <button type="submit" class="btn btn-secondary">Register</button>
               </form>
            </div>
         </div> -->
      </div>
</body>
</html>