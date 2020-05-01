<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Internfo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="{{url('apple-touch-icon.png')}}">


        <link rel="stylesheet" href="{{url('assets/css/fonticons.css')}}">
        <link rel="stylesheet" href="{{url('assets/fonts/stylesheet.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('assets/extras/crud.css')}}">


        <!--For Plugins external css-->
        <link rel="stylesheet" href="{{url('assets/css/plugins.css')}}" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="{{url('assets/css/style.css')}}">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{url('assets/css/responsive.css')}}" />

        <script src="{{url('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>

        <!-- <link rel="stylesheet" href="{{url('/assets/library/bootstrap-4.4.1/css/bootstrap.css')}}"> -->
        <!-- <link rel="stylesheet" href="{{url('/assets/library/fontawesome-5.13.0/css/fontawesome.css')}}">
        <link rel="stylesheet" href="{{url('/assets/library/fontawesome-5.13.0/css/solid.css')}}">
        <link rel="stylesheet" href="{{url('/assets/style.css')}}"> -->
    
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        @include('header_perusahaan')

        <section id="home" class="home" >
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        
                        
                        <div class="col-sm-6">
                        <p class="titles">Lowongan</p>
                        </div>

                        <div class="col-sm-12 ">
                            <div class="container_card">
                                <div class="card3">
                                    <div class="form2">
                                        <form action="/action_page.php">
                                            <div class="row">
                                                <div class="col-15">
                                                    <img src="{{url('assets/images/logo/ex_layout.png')}}" alt="" class="profile">
                                                </div>
                                                <div class="col-60">
                                                    <label class="title_detail">JAKE PERALTA</label>
                                                </div>
                                                <div class="col-25">
                                                    <a href="/perusahaan/lowongan/pendaftar/detail" type="button" class="btn-black btn-sm"><img src="{{url('assets/images/logo/detail.png')}}" alt="" class="detail_images"></a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="card3">
                                    <div class="form2">
                                        <form action="/action_page.php">
                                            <div class="row">
                                                <div class="col-15">
                                                    <img src="{{url('assets/images/logo/ex_layout.png')}}" alt="" class="profile">
                                                </div>
                                                <div class="col-60">
                                                    <label class="title_detail">JAKE PERALTA</label>
                                                </div>
                                                <div class="col-25">
                                                    <a href="/perusahaan/lowongan/pendaftar/detail" type="button" class="btn-black btn-sm"><img src="{{url('assets/images/logo/detail.png')}}" alt="" class="detail_images"></a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="card3">
                                    <div class="form2">
                                        <form action="/action_page.php">
                                            <div class="row">
                                                <div class="col-15">
                                                    <img src="{{url('assets/images/logo/ex_layout.png')}}" alt="" class="profile">
                                                </div>
                                                <div class="col-60">
                                                    <label class="title_detail">JAKE PERALTA</label>
                                                </div>
                                                <div class="col-25">
                                                    <a href="/perusahaan/lowongan/pendaftar/detail" type="button" class="btn-black btn-sm"><img src="{{url('assets/images/logo/detail.png')}}" alt="" class="detail_images"></a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>



        @include('footer_perusahaan')

        <script src="{{url('assets/js/vendor/jquery-1.11.2.min.js')}}"></script>
        <script src="{{url('assets/js/vendor/bootstrap.min.js')}}"></script>

        <script src="{{url('assets/js/jquery.easypiechart.min.js')}}"></script>
        <script src="{{url('assets/js/jquery.mixitup.min.js')}}"></script>
        <script src="{{url('assets/js/jquery.easing.1.3.js')}}"></script>

        <script src="{{url('assets/js/plugins.js')}}"></script>
        <script src="{{url('assets/js/main.js')}}"></script>

    </body>
</html>
