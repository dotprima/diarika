<!DOCTYPE html>
<html class="no-js" lang="zxx">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Diarika</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Diarika">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
        content="bootstrap, ecommerce, ecommerce html, beauty, cosmetic shop, beauty products, cosmetic, beauty shop, cosmetic store, shop, beauty store, spa, cosmetic, cosmetics, beauty salon" />
    <meta name="author" content="codecarnival" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{env('APP_URL')}}/assets/images/favicon.webp">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <link rel="canonical" href="{{env('APP_URL')}}" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Diarika Kosmetik" />
    <meta property="og:description"
        content="Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis" />
    <meta property="og:url" content="{{env('APP_URL')}}" />
    <meta property="og:site_name" content="Diarika Kosmetik" />
    <meta property="article:modified_time" content="2022-08-18T01:56:38+00:00" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:label1" content="Estimasi waktu membaca" />
    <meta name="twitter:data1" content="7 menit" />
    @yield('css')
    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="{{env('APP_URL')}}/assets/css/vendor/bootstrap.min.css">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="{{env('APP_URL')}}/assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{env('APP_URL')}}/assets/css/plugins/font-awesome.min.css">
    <link rel="stylesheet" href="{{env('APP_URL')}}/assets/css/plugins/fancybox.min.css">
    <link rel="stylesheet" href="{{env('APP_URL')}}/assets/css/plugins/range-slider.css">
    <link rel="stylesheet" href="{{env('APP_URL')}}/assets/css/plugins/nice-select.css">
    @livewireStyles
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{env('APP_URL')}}/assets/css/style.min.css">


</head>

<body>

    <!--== Wrapper Start ==-->
    <div class="wrapper">

        <!--== Start Header Wrapper ==-->
        @include('component.header')
        <!--== End Header Wrapper ==-->

        @yield('content')

        <!--== Start Footer Area Wrapper ==-->
        @include('component.footer')
        <!--== End Footer Area Wrapper ==-->

        <!--== Scroll Top Button ==-->
        <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-up"></span></div>

        @include('component.modal')

    </div>
    <!--== Wrapper End ==-->

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/635facc3b0d6371309cc71ad/1ggmrln41';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- JS Vendor, Plugins & Activation Script Files -->

    <script src="{{env('APP_URL')}}/assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="{{env('APP_URL')}}/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/plugins/fancybox.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/plugins/range-slider.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/plugins/jquery.nice-select.min.js"></script>

    <!-- Custom Main JS -->
    <script src="{{env('APP_URL')}}/assets/js/main.js"></script>
    @livewireScripts
    @yield('js')

</body>



</html>