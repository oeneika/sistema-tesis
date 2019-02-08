<!DOCTYPE html>
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Bienvenido al Sistema-Tesis</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
    <link href="assets/plugins/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
    <link href="assets/plugins/animate/animate.min.css" rel="stylesheet" />
    <link href="assets/css/default/style.min.css" rel="stylesheet" />
    <link href="assets/css/default/style-responsive.min.css" rel="stylesheet" />
    <link href="assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->
    
    <!-- ================== BEGIN PAGE CSS STYLE ================== -->
    <link href="assets/plugins/jquery.countdown/jquery.countdown.css" rel="stylesheet" />
    <!-- ================== END PAGE CSS STYLE ================== -->

    <link href="assets/css/estilos.css" rel="stylesheet" />
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="assets/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body class="bg-white p-t-0 pace-top">
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show"><span class="spinner"></span></div>
    <!-- end #page-loader -->
    
    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!-- begin coming-soon -->
        <div class="coming-soon">
            <!-- begin coming-soon-header -->
            <div class="coming-soon-header">
                <div class="bg-cover"></div>
                <div class="brand">
                    <span class="logo"></span> <b>Sistema</b>-Tesis
                </div>
                <div class="desc">
                    Desarrollado por: Greg Gómez y Alexander De Azevedo. <br>
                    Este sistema está hecho para la Universidad Catolica Andrés Bello
                </div>
            </div>
            <!-- end coming-soon-header -->
            <!-- begin coming-soon-content -->
            <div class="coming-soon-content">
                <div class="desc">
                    Te invitamos a que inicies sesión o te registres en nuestro sistema</b>.
                </div>
                 @if (Route::has('login'))
                 <div class="contenedor">
                     <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}" class="btn btn-success btn-block btn-lg">Tablero Principal</a>
                        @else
                        <div class="row">
                            <div class="col-sm-6">
                               <a href="{{ route('login') }}" class="btn btn-success btn-block btn-lg">Iniciar sesión</a>
                            </div>
                            <div class="col-sm-6">
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-success btn-block btn-lg">Registrarse</a>
                                @endif
                            </div>
                        </div>
                        @endauth
                    </div>
                 </div>
                
                @endif
            </div>
            <!-- end coming-soon-content -->
        </div>
        <!-- end coming-soon -->
        
    </div>
    <!-- end page container -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="assets/plugins/jquery/jquery-3.2.1.min.js"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/plugins/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/plugins/js-cookie/js.cookie.js"></script>
    <script src="assets/js/theme/default.min.js"></script>
    <script src="assets/js/apps.min.js"></script>
    <!-- ================== END BASE JS ================== -->
    
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="assets/plugins/jquery.countdown/jquery.plugin.js"></script>
    <script src="assets/plugins/jquery.countdown/jquery.countdown.js"></script>
    <script src="assets/js/demo/coming-soon.demo.min.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->
    
    <script>
        $(document).ready(function() {
            App.init();
            ComingSoon.init();
        });
    </script>
</body>

</html>

