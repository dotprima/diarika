<!DOCTYPE html>
<html class="no-js" lang="id">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
        content="Diarika Beauty, Diarikabeauty, perawatan kulit, serum wajah, facial wash, moisturizer, cleansing milk, toner, kulit bersih, kulit cerah, kulit sehat, TikTok, tips perawatan kulit, testimoni perawatan kulit"
        itemprop="keywords" />
    <meta name="author" content="Diarika Beauty" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ env('APP_URL') }}/assets/images/favicon.webp">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />


    <meta property="og:url" content="{{ url()->current() }}" />


    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="googlebot-news" content="index, follow" />

    @yield('css')
    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/css/vendor/bootstrap.min.css">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/css/plugins/font-awesome.min.css">
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/css/plugins/fancybox.min.css">
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/css/plugins/range-slider.css">
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/css/plugins/nice-select.css">
    @livewireStyles
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/css/style.min.css">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WD3QG2G40C"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-WD3QG2G40C');
    </script>
</head>

<body>

    <!--== Wrapper Start ==-->
    <div class="wrapper">
        <div id="myId" class="d-none">
            <img src="/diarikabeautyheader1.png" alt="Diarika Beauty Official Website">
            <img src="/diarikabeautyheader2.png" alt="Diarika Beauty Official Website">
            <img src="/diarikabeautyheader3.png" alt="Diarika Beauty Official Website">
        </div>
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

    <!-- JS Vendor, Plugins & Activation Script Files -->

    <script src="{{ env('APP_URL') }}/assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="{{ env('APP_URL') }}/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/plugins/fancybox.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/plugins/range-slider.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/plugins/jquery.nice-select.min.js"></script>

    <!-- Custom Main JS -->
    <script src="{{ env('APP_URL') }}/assets/js/main.js"></script>
    @livewireScripts
    @yield('js')
    {{ \TawkTo::widgetCode() }}
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5QTCDVR" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>



</html>
