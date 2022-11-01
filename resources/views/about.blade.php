@extends('component.wrapper')

@section('content')
<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <section class="page-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 col-lg-7 col-xl-5">
                    <div class="page-header-content">
                        <div class="hero-slide-text-img"><img src="assets/images/slider/test-logo.png" width="200"
                                height="132" alt="Image"></div>
                        <h2 class="page-header-title"></h2>
                        <h4 class="page-header-sub-title"></h4>
                        <p class="page-header-desc">Glow up your skin. Find your truly beauty. (Temukan cantikmu yang
                            sesungguhnya).</p>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5 col-xl-7">
                    <div class="page-header-thumb">
                        <img src="assets/images/FPK202206214-removebg-preview.png" width="570" height="669" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Funfact Area Wrapper ==-->
    <section class="funfact-area section-space">
        <div class="container">
            <div class="row mb-n6">
                <div class="col-sm-6 col-lg-4 mb-6">
                    <!--== Start Funfact Item ==-->
                    <div class="funfact-item">
                        <div class="icon">
                            <img src="assets/images/icons/funfact1.webp" width="110" height="110" alt="Icon">
                        </div>
                        <h2 class="funfact-number">2000+</h2>
                        <h6 class="funfact-title">Pelanggan</h6>
                    </div>
                    <!--== End Funfact Item ==-->
                </div>
                <div class="col-sm-6 col-lg-4 mb-6">
                    <!--== Start Funfact Item ==-->
                    <div class="funfact-item">
                        <div class="icon">
                            <img src="assets/images/icons/funfact2.webp" width="110" height="110" alt="Icon">
                        </div>
                        <h2 class="funfact-number">10.000 +</h2>
                        <h6 class="funfact-title">Terjual</h6>
                    </div>
                    <!--== End Funfact Item ==-->
                </div>
                <div class="col-sm-6 col-lg-4 mb-6">
                    <!--== Start Funfact Item ==-->
                    <div class="funfact-item">
                        <div class="icon">
                            <img src="assets/images/icons/funfact3.webp" width="110" height="110" alt="Icon">
                        </div>
                        <h2 class="funfact-number">1.000 +</h2>
                        <h6 class="funfact-title">Feedback</h6>
                    </div>
                    <!--== End Funfact Item ==-->
                </div>
            </div>
        </div>
    </section>
    <!--== End Funfact Area Wrapper ==-->

    <!--== Start Brand Logo Area Wrapper ==-->
    <div class="section-space">
        <div class="container">
        <a href="http://127.0.0.1:8000/catalog" class="product-banner-item">
                <img src="assets/images/shop/banner/banner.png" width="1170" height="240" alt="Image-HasTech">
            </a>
        </div>
    </div>
    <!--== End Brand Logo Area Wrapper ==-->

    <!--== Start About Area Wrapper ==-->
    <section class="section-space pt-0 mb-n1">
        <div class="container">
            <!-- <div class="about-thumb">
                <img src="assets/images/photos/about2.webp" alt="Image">
            </div> -->
            <div class="about-content">
                <h2 class="title">Tentang Diarika</h2>
                <p class="desc">Diarika Beauty didirikan oleh Ibu Rika Nursanti S.E, pada tanggal 18 Desember 2018 di
                    Jalan Raya Tanjungmulya No.384 Panumbangan Ciamis Jawa Barat.
                    Bearawal dari tahun 2016 dimana owner memiliki beberapa permasalahan kulit yang tak
                    kunjung sembuh. Beragam pengobatan dan jenis skincare telah dicoba namun tidak
                    menunjukkan perubahan yang signifikan. Hingga akhirnya dengan dibantu dokter dan
                    formulator ditemukanlah skincare yang sesuai dan dapat mengatasi permasalahan kulit
                    owner pada saat itu. Berdasarkan pencapaian tersebut Ibu Rika Nursanti S.E berinisiatif
                    untuk dapat membantu mengatasi permasalahan kulit serupa yang banyak dialami
                    orang-orang pada saat ini. Akhir tahun 2018 owner mendirikan perusahaan bernama CV
                    Diarika Beauty, yang dibantu dan diawasi dokter serta formulator sampai saat ini.</p>
            </div>

        </div>
    </section>
    <!--== End About Area Wrapper ==-->

    <!--== Start Feature Area Wrapper ==-->
    <div class="feature-area section-space">
        <div class="container">
            <div class="row mb-n9">
                <div class="about-content">
                    <h2 class="title">Arti dan symbol Merk Diarika Beauty</h2>
                    <p class="desc">Nama Diarika merupakan gabungan nama yang diambil dari nama owner CV Diarika
                        Beauty sendiri yaitu ibu Rika Nursanti, S.E. dan user name facebook beliau. Beauty
                        memiliki arti kecantik atau keindahan, sebagaimana tujuan didirikannya CV Diarika
                        Beauty yakni untuk mempercantik dan memperindah kulit. Kupu-kupu memiliki filosofi
                        perjuangan dan kerja keras, keindahan dan pencapaian yang diraih CV Diarika Beauty
                        sampai saat ini merupakan buah perjuangan dan kerja keras yang telah ditempuh selama
                        bertahun-tahun dan senantiasa berproses.</p>
                </div>
            </div>
        </div>
    </div>
    <!--== End Feature Area Wrapper ==-->

</main>

@endsection

@section('css')
<meta property="og:image" content="{{env('APP_URL')}}/assets/images/tm.png" />
<meta property="og:site_name" content="Diarika Beauty" />
<title>Diarika Beauty - About</title>
<meta property="og:title" content="Diarika Beauty" />
@endsection