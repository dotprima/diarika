@extends('component.wrapper')

@section('content')

<main class="main-content">

    <!--== Start Contact Area Wrapper ==-->
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="offset-lg-6 col-lg-6">
                    <div class="section-title position-relative">
                        <h2 class="title">Get in touch</h2>
                        <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing aliquam, purus sit
                            amet luctus venenatis</p>
                        <div class="line-left-style mt-4 mb-1"></div>
                    </div>
                    <!--== Start Contact Form ==-->
                    <div class="contact-form">
                        <form id="contact-form" action="https://whizthemes.com/mail-php/raju/arden/mail.php"
                            method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="con_name"
                                            placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" type="email" name="con_email"
                                            placeholder="Email address">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="con_message"
                                            placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-0">
                                        <button class="btn btn-sm" type="submit">SUBMIT</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--== End Contact Form ==-->

                    <!--== Message Notification ==-->
                    <div class="form-message"></div>
                </div>
            </div>
        </div>
        <div class="contact-left-img" data-bg-img="assets/images/FPK202206213-removebg-preview.png"></div>
    </section>
    <!--== End Contact Area Wrapper ==-->

    <!--== Start Contact Area Wrapper ==-->
    <section class="section-space">
        <div class="container">
            <div class="contact-info">
                <div class="contact-info-item">
                    <img class="icon" src="icon/whatsapp.png" width="25" height="25" alt="Icon">
                    <a href="https://wa.me/6281395121992">+62 813-9512-1992</a>
                    <a href="https://wa.me/6281395112011">+62 813-9511-2011</a>
                </div>
                <div class="contact-info-item">
                    <img class="icon" src="assets/images/icons/2.webp" width="30" height="30" alt="Icon">
                    <a href="mailto://diarikabeautyc@gmail.com">diarikabeautyc@gmail.com</a>
                </div>
                <div class="contact-info-item mb-0">
                    <img class="icon" src="assets/images/icons/3.webp" width="30" height="30" alt="Icon">
                    <p>Tanjungmulya, Kec. Panumbangan, Kabupaten Ciamis, Jawa Barat 46263</p>
                </div>
            </div>
        </div>
    </section>
    <!--== End Contact Area Wrapper ==-->

    <div class="map-area">
        <iframe
            src="https://maps.google.com/maps?q=diarika&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
    </div>

</main>

@endsection