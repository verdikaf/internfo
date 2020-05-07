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

        @include('header_pemagang')


        <section id="home" class="home" >
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        
                    <p class="titles">Attachment</p>
                        <div class="col-sm-12 ">

                            <div class="container_card">
                                <div class="card6">
                                
                                    <div class="form">
                                        <form action="{{url('/pemagang/requirements/action')}}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        @foreach($lowongan as $l)
                                        <input type="hidden" name="id_lowongan" value="{{$l->id}}">
                                        <input type="hidden" name="perusahaan" value="{{$l->nama_perusahaan}}">
                                        @endforeach
                                        @foreach($data_apply as $d)
                                        <input type="hidden" name="id_data_apply" value="{{$d->id}}">
                                        @endforeach
                                        <input type="hidden" name="pelamar" value="{{$session['nama']}}">
                                            <div class="row">
                                                <div class="col-25">
                                                    <label class="label-pemagang">Berkas</label>
                                                </div>
                                                <div class="col-75">
                                                    <input type="file" id="berkas" name="berkas"><br>
                                                    <p class="keterangan">*Masukan Berkas CV & KHS dalam satu file.</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label class="label-pemagang">Portofolio</label>
                                                </div>
                                                <div class="col-75">
                                                    <input type="file" id="berkas" name="portofolio"><br>
                                                    <p class="keterangan">*Masukan Portofolio dalam satu file.</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <input type="submit" value="SEND">
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
