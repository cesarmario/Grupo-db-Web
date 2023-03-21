<?PHP
include('php/det_inmueble.php');
include('php/list_inmuebles_destacados');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Grupo DB</title>
    <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/img-logos/Iso-CMYK.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/fontello.css">
    <link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icheck.min_all.css">
    <link rel="stylesheet" href="assets/css/price-range.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/lightslider.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
</head>

<body>

    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- Body content -->

    <div class="header-connect">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-8  col-xs-12">
                    <div class="header-half header-call">
                        <p>
                            <span><i class="pe-7s-call"></i> +54 264 570-2451</span>
                            <span><i class="pe-7s-mail"></i> inmobiliaria@grupo-db.com.ar</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12">
                    <div class="header-half header-social">
                        <ul class="list-inline">
                            <li><a href="https://www.facebook.com/grupodb" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/grupodbcorredoresinmobiliarios/?hl=es" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End top header -->

    <nav class="navbar navbar-default ">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="assets/img-logos/Isologo-RGB1.png" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse yamm" id="navigation">

                <ul class="main-nav nav navbar-nav navbar-right">

                    <ul class="main-nav nav navbar-nav navbar-right">

                        <li class="wow fadeInDown" data-wow-delay="0.3s">
                            <a class="" href="index.php">Inicio</a>
                        </li>

                        <li class="wow fadeInDown" data-wow-delay="0.5s">
                            <a class="" href="nosotros.html">Nosotros</a>
                        </li>

                        <li class="wow fadeInDown" data-wow-delay="0.7s">
                            <a class="" href="servicios.html">Servicios</a>
                        </li>

                        <li class="wow fadeInDown" data-wow-delay="0.9s">
                            <a class="active" href="inmuebles.php">Inmuebles</a>
                        </li>

                        <li class="wow fadeInDown" data-wow-delay="1.1s">
                            <a class="" href="preguntas.html">Preguntas</a>
                        </li>

                        <li class="wow fadeInDown" data-wow-delay="1.3s">
                            <a href="contacto.html">Contacto</a>
                        </li>

                    </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- End of nav bar -->

    <div class="page-head">
        <div class="container">
            <div class="row">
                <div class="page-head-content">
                    <h1 class="page-title">Detalle del Inmueble </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End page header -->

    <!-- property area -->
    <div class="content-area single-property" style="background-color: #FCFCFC;">&nbsp;
        <div class="container">

            <div class="clearfix padding-top-40">

                <div class="col-md-8 single-property-content prp-style-1 ">
                    <div class="row">
                        <div class="light-slide-item">
                            <div class="clearfix">
                                <div class="favorite-and-print">
                                    <!-- <a class="add-to-fav" href="#login-modal" data-toggle="modal">
                                            <i class="fa fa-star-o"></i>
                                        </a> -->
                                    <a class="printer-icon " href="javascript:window.print()">
                                        <i class="fa fa-print"></i>
                                    </a>
                                </div>

                                <!-- <ul id="image-gallery" class="gallery list-unstyled cS-hidden"> -->
                                <?PHP echo $listadoImg; ?>
                                <!-- </ul> -->
                            </div>
                        </div>
                    </div>

                    <div class="single-property-wrapper">
                        <div class="single-property-header">
                            <h1 class="property-title pull-left"><?PHP echo $tituloInmueble; ?></h1>
                            <span class="property-price pull-right"><?PHP echo $valorInmueble; ?></span>
                        </div>

                        <div class="property-meta entry-meta clearfix ">

                            <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                <span class="property-info-icon icon-tag">
                                    <img src="assets/img/icon/sale-orange.png">
                                </span>
                                <span class="property-info-entry">
                                    <span class="property-info-label">Operación</span>
                                    <span class="property-info-value"><?PHP echo $nombreOperacion; ?></span>
                                </span>
                            </div>

                            <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                <span class="property-info icon-area">
                                    <img src="assets/img/icon/room-orange.png">
                                </span>
                                <span class="property-info-entry">
                                    <span class="property-info-label">Superficie</span>
                                    <span class="property-info-value"><?PHP echo $superficieCubiertaInmueble; ?></span>
                                </span>
                            </div>

                            <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                <span class="property-info-icon icon-bed">
                                    <img src="assets/img/icon/bed-orange.png">
                                </span>
                                <span class="property-info-entry">
                                    <span class="property-info-label">Habitaciones</span>
                                    <span class="property-info-value"><?PHP echo $habitacionesInmueble; ?></span>
                                </span>
                            </div>

                            <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                <span class="property-info-icon icon-bed">
                                    <img src="assets/img/icon/cars-orange.png">
                                </span>
                                <span class="property-info-entry">
                                    <span class="property-info-label">Cochera</span>
                                    <span class="property-info-value"><?PHP echo $cocheraInmueble; ?></span>
                                </span>
                            </div>

                            <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                <span class="property-info-icon icon-bath">
                                    <img src="assets/img/icon/os-orange.png">
                                </span>
                                <span class="property-info-entry">
                                    <span class="property-info-label">Mejoras</span>
                                    <span class="property-info-value"><?PHP echo $mejorasInmueble; ?></span>
                                </span>
                            </div>

                            <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                <span class="property-info-icon icon-garage">
                                    <img src="assets/img/icon/room-orange.png">
                                </span>
                                <span class="property-info-entry">
                                    <span class="property-info-label">Sup. Total</span>
                                    <span class="property-info-value"><?PHP echo $superficieTotalInmueble; ?></span>
                                </span>
                            </div>

                            <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                <span class="property-info-icon icon-garage">
                                    <img src="assets/img/icon/shawer-orange.png">
                                </span>
                                <span class="property-info-entry">
                                    <span class="property-info-label">Baños</span>
                                    <span class="property-info-value"><?PHP echo $banosInmueble; ?></span>
                                </span>
                            </div>


                        </div>
                        <!-- .property-meta -->

                        <div class="section">
                            <h4 class="s-property-title">Ubicacion</h4>
                            <div class="s-property-content">
                                <p> <?PHP echo $domicilio; ?>
                                    <?PHP echo $nombreLocalidad; ?>
                                </p>
                                <?PHP if (!empty($ubicacionInmueble)) { ?>
                                    <!-- <div id="myMap" name="myMap" style="height: 400px" required></div> -->
                                    <a href="https://www.google.com/maps?q=<?PHP echo $ubicacionInmueble; ?>&z=17&hl=es" target="_blank" class="btn btn-info">Ver en el Mapa</a>
                                <?PHP } ?>
                            </div>
                        </div>
                        <div class="section">
                            <h4 class="s-property-title">Descripción</h4>
                            <div class="s-property-content">
                                <p><?PHP echo $descripcionInmueble; ?>
                                </p>
                            </div>
                        </div>
                        <!-- End description area  -->

                        <div class="section additional-details">

                            <h4 class="s-property-title">Detalles Adicionales</h4>

                            <ul class="additional-details-list clearfix">
                                <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Cloaca</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry"><?PHP echo $cloacaInmueble; ?></span>
                                </li>

                                <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Red de Gas Natural</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry"><?PHP echo $gasNaturalInmueble; ?></span>
                                </li>

                                <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Tipo de Agua Caliente</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry"><?PHP echo $tipoAguaCalienteInmueble; ?></span>
                                </li>

                                <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Agua corriente</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry"><?PHP echo $aguaCorrienteInmueble; ?></span>
                                </li>

                                <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Pavimento</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry"><?PHP echo $pavimentoInmueble; ?></span>
                                </li>
                                <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Frente del terreno</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry"><?PHP echo $frenteTerrenoInmueble; ?></span>
                                </li>

                                <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Largo del terreno</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry"><?PHP echo $largoTerrenoInmueble; ?></span>
                                </li>

                                <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Antigüedad </span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry"><?PHP echo $antiguedadInmueble; ?></span>
                                </li>

                                <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Estado del inmueble:</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry"><?PHP echo $estadoInmueble; ?></span>
                                </li>

                                <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Tipo Cochera:</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry"><?PHP $tipoCocheraInmueble; ?></span>
                                </li>
                            </ul>
                        </div>
                        <!-- End additional-details area  -->


                        <!-- End features area  -->




                        <?PHP
                        $video = "/gestion/assets/videos/" . str_pad($_REQUEST['idInmueble'], 8, "0", STR_PAD_LEFT) . ".mp4";
                        if (file_exists($_SERVER['DOCUMENT_ROOT'] . $video)) { ?>
                            <div class="section property-video">
                                <h4 class="s-property-title">Video de la Propiedad</h4>
                                <div class="video-thumb">
                                    <a class="video-popup" href="<?PHP echo $video; ?>" title="Virtual Tour">
                                        <video src="<?PHP echo $video; ?>" class="img-responsive wp-post-image" alt="Exterior">
                                    </a>
                                </div>
                            </div>
                            <!-- End video area  -->
                        <?PHP } ?>
                    </div>
                </div>


                <div class="col-md-4 p0">
                    <aside class="sidebar sidebar-property blog-asside-right">
                        <div class="dealer-widget">
                            <div class="dealer-content">
                                <div class="inner-wrapper">

                                    <div class="clear">
                                        <div class="col-xs-4 col-sm-4 dealer-face">
                                            <a href="">
                                                <img src="assets/img/favicon-db.JPG" class="img-circle">
                                            </a>
                                        </div>
                                        <div class="col-xs-8 col-sm-8 ">
                                            <h3 class="dealer-name">
                                                <a href="">GRUPO DB</a>
                                                <span>Corredores Inmobiliarios</span>
                                            </h3>
                                            <div class="dealer-social-media">
                                                <!-- <a class="twitter" target="_blank" href="">
                                                        <i class="fa fa-twitter"></i>
                                                    </a> -->
                                                <a class="facebook" target="_blank" href="https://www.facebook.com/grupodb" target="_blank">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                                <!-- <a class="gplus" target="_blank" href="">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a> -->
                                                <!-- <a class="linkedin" target="_blank" href="">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a>  -->
                                                <a class="instagram" target="_blank" href="https://www.instagram.com/grupodbcorredoresinmobiliarios/?hl=es" target="_blank">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="clear">
                                        <ul class="dealer-contacts">
                                            <li><i class="pe-7s-map-marker strong"> </i>Segundino Navarro 601 (Sur) -
                                                Capital, San Juan</li>
                                            <li><i class="pe-7s-mail strong"> </i> inmobiliaria@grupo-db.com.ar</li>
                                            <li><i class="pe-7s-call strong"> </i> +54 264 570-2451</li>
                                        </ul>
                                        <p align="justify">Nuestra Inmobiliaria se encuentra habilitada por el Colegio
                                            Público de Corredores Inmobiliarios de la Provincia de San Juan (CPCISJ
                                            Digesto 1108-A) Bajo la Matrícula profesional Nº 137 a nombre de C.I. Javier
                                            Blanco y Matrícula profesional N° 122 a nombre de C.I. Pablo Domínguez,
                                            integrantes y miembros activos de la Comisión Directiva, Comisión de
                                            Estadísticas y Comisión de Redes Sociales del Colegio de Corredores
                                            Inmobiliarios.</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default sidebar-menu similar-property-wdg wow fadeInRight animated">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?PHP echo $tituloDestacado ?></h3>
                            </div>
                            <div class="panel-body recent-property-widget">
                                <ul>
                                    <?PHP echo $destacado; ?>
                                </ul>
                            </div>
                        </div>

                        <!-- <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Ads her  </h3>
                                </div>
                                <div class="panel-body recent-property-widget">
                                    <img src="assets/img/ads.jpg">
                                </div>
                            </div> -->

                        <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                            <!-- <div class="panel-heading">
                                    <h3 class="panel-title">Smart search</h3>
                                </div>
                                <div class="panel-body search-widget">
                                    <form action="" class=" form-inline"> 
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <input type="text" class="form-control" placeholder="Key word">
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <div class="row">
                                                <div class="col-xs-6">

                                                    <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select Your City">

                                                        <option>New york, CA</option>
                                                        <option>Paris</option>
                                                        <option>Casablanca</option>
                                                        <option>Tokyo</option>
                                                        <option>Marraekch</option>
                                                        <option>kyoto , shibua</option>
                                                    </select>
                                                </div>
                                                <div class="col-xs-6">

                                                    <select id="basic" class="selectpicker show-tick form-control">
                                                        <option> -Status- </option>
                                                        <option>Rent </option>
                                                        <option>Boy</option>
                                                        <option>used</option>  

                                                    </select>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset class="padding-5">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <label for="price-range">Price range ($):</label>
                                                    <input type="text" class="span2" value="" data-slider-min="0" 
                                                           data-slider-max="600" data-slider-step="5" 
                                                           data-slider-value="[0,450]" id="price-range" ><br />
                                                    <b class="pull-left color">2000$</b> 
                                                    <b class="pull-right color">100000$</b>                                                
                                                </div>
                                                <div class="col-xs-6">
                                                    <label for="property-geo">Property geo (m2) :</label>
                                                    <input type="text" class="span2" value="" data-slider-min="0" 
                                                           data-slider-max="600" data-slider-step="5" 
                                                           data-slider-value="[50,450]" id="property-geo" ><br />
                                                    <b class="pull-left color">40m</b> 
                                                    <b class="pull-right color">12000m</b>                                                
                                                </div>                                            
                                            </div>
                                        </fieldset>                                

                                        <fieldset class="padding-5">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <label for="price-range">Min baths :</label>
                                                    <input type="text" class="span2" value="" data-slider-min="0" 
                                                           data-slider-max="600" data-slider-step="5" 
                                                           data-slider-value="[250,450]" id="min-baths" ><br />
                                                    <b class="pull-left color">1</b> 
                                                    <b class="pull-right color">120</b>                                                
                                                </div>

                                                <div class="col-xs-6">
                                                    <label for="property-geo">Min bed :</label>
                                                    <input type="text" class="span2" value="" data-slider-min="0" 
                                                           data-slider-max="600" data-slider-step="5" 
                                                           data-slider-value="[250,450]" id="min-bed" ><br />
                                                    <b class="pull-left color">1</b> 
                                                    <b class="pull-right color">120</b>

                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset class="padding-5">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="checkbox">
                                                        <label> <input type="checkbox" checked> Fire Place</label>
                                                    </div> 
                                                </div>

                                                <div class="col-xs-6">
                                                    <div class="checkbox">
                                                        <label> <input type="checkbox"> Dual Sinks</label>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </fieldset>

                                        <fieldset class="padding-5">
                                            <div class="row">
                                                <div class="col-xs-6"> 
                                                    <div class="checkbox">
                                                        <label> <input type="checkbox" checked> Swimming Pool</label>
                                                    </div>
                                                </div>  
                                                <div class="col-xs-6"> 
                                                    <div class="checkbox">
                                                        <label> <input type="checkbox" checked> 2 Stories </label>
                                                    </div>
                                                </div>  
                                            </div>
                                        </fieldset>

                                        <fieldset class="padding-5">
                                            <div class="row">
                                                <div class="col-xs-6"> 
                                                    <div class="checkbox">
                                                        <label><input type="checkbox"> Laundry Room </label>
                                                    </div>
                                                </div>  
                                                <div class="col-xs-6"> 
                                                    <div class="checkbox">
                                                        <label> <input type="checkbox"> Emergency Exit</label>
                                                    </div>
                                                </div>  
                                            </div>
                                        </fieldset>

                                        <fieldset class="padding-5">
                                            <div class="row">
                                                <div class="col-xs-6"> 
                                                    <div class="checkbox">
                                                        <label>  <input type="checkbox" checked> Jog Path </label>
                                                    </div>
                                                </div>  
                                                <div class="col-xs-6"> 
                                                    <div class="checkbox">
                                                        <label>  <input type="checkbox"> 26' Ceilings </label>
                                                    </div>
                                                </div>  
                                            </div>
                                        </fieldset>

                                        <fieldset class="padding-5">
                                            <div class="row">
                                                <div class="col-xs-12"> 
                                                    <div class="checkbox">
                                                        <label>  <input type="checkbox"> Hurricane Shutters </label>
                                                    </div>
                                                </div>  
                                            </div>
                                        </fieldset>

                                        <fieldset >
                                            <div class="row">
                                                <div class="col-xs-12">  
                                                    <input class="button btn largesearch-btn" value="Search" type="submit">
                                                </div>  
                                            </div>
                                        </fieldset>                                     
                                    </form> -->
                        </div>
                </div>

                </aside>
            </div>
        </div>

    </div>
    </div>


    <!-- Footer area-->
    <div class="footer-area">

        <div class=" footer">
            <div class="container">
                <div class="row">

                    <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                        <div class="single-footer">
                            <h4>nosotros </h4>
                            <div class="footer-title-line"></div>

                            <img src="assets/img-logos/Isologo-RGB.png" alt="" class="wow pulse" data-wow-delay="1s">
                            <p>Excelencia en negocios inmobiliarios. <br>
                                Nos destacamos por el asesoramiento de calidad para nuestros clientes.</p>
                            <ul class="footer-adress">
                                <li><i class="pe-7s-map-marker strong"> </i> Calle Segundino Navarro 601 (Sur), Capital,
                                    San Juan</li>
                                <li><i class="pe-7s-mail strong"> </i> inmobiliaria@grupo-db.com.ar</li>
                                <li><i class="pe-7s-call strong"> </i> +54 264 570-2451</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                        <div class="single-footer">
                            <h4>Navegación </h4>
                            <div class="footer-title-line"></div>
                            <ul class="footer-menu">
                                <li><a href="index.php">Inicio</a> </li>
                                <li><a href="nosotros.html">Acerca de</a></li>
                                <li><a href="servicios.html">Servicios</a> </li>
                                <li><a href="inmuebles.php">Inmuebles</a> </li>
                                <li><a href="contacto.html">Contacto</a></li>
                                <li><a href="preguntas.html">Preguntas Frecuentes</a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Últimas entradas</h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-blog">
                                    <li>
                                        <div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0">
                                            <a href="detalle-inmueble.php">
                                                <img src="assets/img/casa10.jpeg">
                                            </a>
                                            <span class="blg-date">15/10/2022</span>

                                        </div>
                                        <div class="col-md-8  col-sm-8 col-xs-8  blg-entry">
                                            <h6> <a href="detalle-inmueble.php">Terreno 100 ha </a></h6> 
                                            <p style="line-height: 17px; padding: 8px 2px;">Terreno apto para desarrollo inmobiliario</p>
                                        </div>
                                    </li> 

                                    <li>
                                        <div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0">
                                            <a href="#">
                                                <img src="assets/img/casa9.jpeg">
                                            </a>
                                            <span class="blg-date">20/09/2022</span>

                                        </div>
                                        <div class="col-md-8  col-sm-8 col-xs-8  blg-entry">
                                            <h6> <a href="#">Casa en Bº Privado </a></h6> 
                                            <p style="line-height: 17px; padding: 8px 2px;">Casa en alquiler de 3 habitaciones</p>
                                        </div>
                                    </li> 

                                    <li>
                                        <div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0">
                                            <a href="#">
                                                <img src="assets/img/casa8.jpeg">
                                            </a>
                                            <span class="blg-date">08/09/2022</span>

                                        </div>
                                        <div class="col-md-8  col-sm-8 col-xs-8  blg-entry">
                                            <h6> <a href="#">Llave de negocio </a></h6> 
                                            <p style="line-height: 17px; padding: 8px 2px;">Ferretería completa, listo para trabajar</p>
                                        </div>
                                    </li> 


                                </ul>
                            </div>
                        </div> -->
                    <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                        <div class="single-footer news-letter">
                            <h4>Cont&aacute;ctanos</h4>
                            <div class="footer-title-line"></div>
                            <p></p>

                            <div class="social pull-right">
                                <ul>
                                    <li><a class="wow fadeInUp animated" href="https://www.facebook.com/grupodb" target="_blank" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a class="wow fadeInUp animated" href="https://www.instagram.com/grupodbcorredoresinmobiliarios/?hl=es" target="_blank" data-wow-delay="0.4s"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li><a class="wow fadeInUp animated" href="mailto:inmobiliaria@grupo-db.com.ar" target="_blank" data-wow-delay="0.6s"><i class="fa fa-envelope"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-copy text-center">
            <div class="container">
                <div class="row">
                    <div class="pull-left">
                        <span> (C) <a href="index.php">Grupo DB - Corredores Inmobiliarios</a> , Todos los derechos
                            reservados 2023 </span>
                    </div>
                    <div class="bottom-menu pull-right">
                        <ul>
                            <li><a class="wow fadeInUp animated" href="index.php" data-wow-delay="0.2s">Inicio</a></li>
                            <li><a class="wow fadeInUp animated" href="inmuebles.php" data-wow-delay="0.3s">Inmuebles</a></li>
                            <li><a class="wow fadeInUp animated" href="preguntas.html" data-wow-delay="0.4s">Preguntas
                                    Frecuentes</a></li>
                            <li><a class="wow fadeInUp animated" href="contacto.html" data-wow-delay="0.6s">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="assets/js/jquery-1.10.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/bootstrap-hover-dropdown.js"></script>
    <script src="assets/js/easypiechart.min.js"></script>
    <script src="assets/js/jquery.easypiechart.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/icheck.min.js"></script>
    <script src="assets/js/price-range.js"></script>
    <script type="text/javascript" src="assets/js/lightslider.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
        $(document).ready(function() {

            $('#image-gallery').lightSlider({
                gallery: true,
                item: 1,
                thumbItem: 9,
                slideMargin: 0,
                speed: 500,
                auto: true,
                loop: true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }
            });
        });
    </script>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin="">
    </script>
    <!--script src="assets/js/mapview.js"></script-->

    <script>
        const tilesProvider = "	https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"

        var latlng = "<?= $ubicacionInmueble ?>";
        //console.log("Ubicacion: " + latlng); 

        let coordenadas = latlng.split(',')
        let myMap = L.map('myMap').setView(coordenadas, 15)

        //let myMap = L.map('myMap').setView([-31.5373, -68.5251], 14)

        L.tileLayer(tilesProvider, {
            maxZoom: 18,
        }).addTo(myMap)

        let marker = L.marker(coordenadas).addTo(myMap)
    </script>

</body>

</html>