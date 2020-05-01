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
    <!-- <script src="{{url('/assets/library/jquery/jquery.js')}}"></script>
    <script src="{{url('/assets/library/vue/vue.js')}}"></script> -->
</head>
<body>
   <div id="dw">
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
         <div class="card">
            <div class="form-group">
               <input type="radio"  value="1" v-model="type"> Daftar </input>
               <input type="radio" v-model="type" value="0" > Login </input>
            </div>
         </div>
      </div>
      <div class="main" v-if="type == 0">
         <div class="login-main-form">
            <center><h1>Log In.</h1></center>
            <form action="{{url('/login/action')}}" method="POST">
               <input type="hidden" name="_token" value="{{csrf_token()}}">
               <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="User Name" required v-model="email">
               </div>
               <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password" required v-model="password">
               </div>
               <div class="form-group">
                  <select class="form-control" id="" name="hak_akses" required>
                        <option disabled selected="selected">Masuk Sebagai</option>
                        <option value="1">Pemagang</option>
                        <option value="2">Perusahaan</option>
                        <option value="3">Admin</option>
                  </select>
               </div>
               <div class="row">
                  <div class="col-md-12">
                        <button type="submit" class="btn btn-black">Sign In</button>
                  </div>
                  <!-- <div class="col-md-3">
                        <a href="{{url('/signup')}}" type="button" class="btn btn-black">Register</a>
                  </div> -->
               </div>
            </form>
         </div>
      </div>
      <div class="main" v-if="type == 1">
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
                  <input type="file" name="file">
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
   </div>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
   <script>
        new Vue({
            el: '#dw',
            data: {
                type: '',
                nama: '',
                email: '',
                password: '',
                alamat: ''
            },
            methods: {
               resetForm() {
                  this.nama = ''
                  this.email = ''
                  this.password = ''
                  this.alamat = ''
               }
            },
            computed: {
               changeTitle() {
                  this.resetForm()
                  return this.type == 0 ? 'Daftar':'Login'
               }
            }
        })
    </script>
</body>
</html>