<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>. : Azulejo : .</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @yield('css')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <!--[if lt IE 9]>
    <script type="text/javascript">
        document.createElement("nav");
        document.createElement("header");
        document.createElement("footer");
        document.createElement("section");
        document.createElement("article");
        document.createElement("aside");
        document.createElement("hgroup");
    </script>
    <![endif]-->
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<header class="text-center">
    <a href="/">
        <img src="{{asset('img/logo.png')}}" id="logo_top">
    </a>
</header>

<!-- Nav tabs -->
<div id="menu">
    <img class="full_width" src="{{asset('img/hr.png')}}" alt="">
    <div class="container text-center">
    <a>Colección</a>
    <div class="menu-content">
        <div class="container">
            <div class="row">
                @foreach($menu as $item)
                <div class="col-md-3 text-left">
                    <h3><a href="<?= url('/coleccion/' . $item->id . '/' . $item->slugify() . '/') ?>"><strong>{{ $item->title }}</strong></a></h3>
                    @foreach($item->collectionsType as $type)
                    <p><a href="<?= url('/coleccion/' . $item->id . '/' . $item->slugify() . '/') ?>">{{ $type->title }}</a></p>
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="circle-small"></div>
        <a href="<?= url('/nosotros/'); ?>">Nosotros</a>
        <div class="circle-small"></div>
        <a href="<?= url('/nuestro-compromiso/'); ?>">Nuestro Compromiso</a>
        <div class="circle-small"></div>
        <a href="<?= url('/contactanos/'); ?>">Contáctanos</a>
    </div>
    <img class="full_width" src="{{ asset('img/hr.png') }}" alt="">
</div>

<!-- Tab panes -->
<div class="tab-content">
@yield('content')
</div>

<footer>
    <div class="container">
        <img class="hr" src="{{ asset('img/hr.png') }}" alt="">
        <div class="row">
            <div class="col-md-6">
                Siguenos AzulejoJewels
                <a class="redes" href="https://www.facebook.com/AzulejoJewels?ref=ts&fref=ts"><img src="{{ asset('img/facebook-icon.png') }}" alt=""></a>
                <a class="redes" href="http://instagram.com/azulejojewels"><img src="{{ asset('img/instagram-icon.png') }}" alt=""></a>
            </div>
            <div class="col-md-6 text-right">
                <a href="<?= url('/nosotros/'); ?>">Nosotros</a>
                <div class="circle-small"></div>
                <a href="<?= url('/nuestro-compromiso/'); ?>">Nuestro Compromiso</a>
                <div class="circle-small"></div>
                <a href="<?= url('/contactanos/'); ?>">Contáctanos</a>
                <p><small>PRIVACIDAD | TERMINOS LEGALES</small></p>
                <p>Alvaro Gioielli, C.A. <span class="rif">J-31053209-5</span></p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
@yield('js')
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<!--script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
</script-->
</body>
</html>
