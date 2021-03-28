    <!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title')-Amerio Grupė</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="icon" type="image/png" sizes="56x56" href="{{asset('assets/images/logo.png')}}">
    <!--== bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <!--== default-theme -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!--== fontawesome -->
    <link  rel="stylesheet" href="{{asset('assets/css/fontawesome-all.css')}}">
</head>
<body data-spy="scroll" data-target="nav">
<div class="header_area py-2">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-12 py-2 d-flex flex-wrap justify-content-between">
                <div class="col-md-5 d-flex col-12 justify-content-md-start justify-content-center m-auto">
                    <a href="/">
                        <div class="header_logo ">
                            <div class="text-center">
                                <img src="{{asset('assets/images/logo.png')}}" width="90"  alt="">
                            </div>
                            <div class="company_name ">
                                <h3 class="amerio">AMERIO <span>GRUPĖ</span></h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class=" header_info col-md-7 col-12 text-md-right text-center">
                    <div class="col-12">
                        <h3 class="header my-md-0">High quality fireproof ceramic product</h3>
                    </div>
                    <div class="info col-12">
                        <ul class=" col-12 p-0 m-0 list-inline">
                            <li class="mx-2 d-md-inline "><a class="d-md-inline"  href="tel:123-456-7890" ><i class="fas fa-phone "></i>+370 675 57342</a></li>
                            <li class="mx-2 d-md-inline"> <a href="mailto:someone@yoursite.com"><i class="far fa-envelope"> </i> sales@ameriogroup.lt</a></li>
                        </ul>
                    </div>
                    <div class="d-sm-flex col-12 flex-wrap justify-content-md-end justify-content-center m-auto pt-2">
                        <div class="header_social_link  d-flex flex-column justify-content-md-end">

                            <div class="viber">
                                <ul class="  px-0 list-inline d-flex flex-wrap justify-content-md-end justify-content-center m-auto ">
                                    <li class="mx-2 d-flex align-items-center">
                                        <i  class="fab fa-viber"> </i>
                                        <a   href="tel:123-456-7890" >
                                            <p class="mb-0 ml-1">  Viber, WhatsApp</p>
                                        </a>
                                    </li>
                                </ul>
                                <a   href="tel:123-456-7890" >
                                    +370 671 53387
                                </a>

                            </div>
                        </div>
                        <span class="d-sm-block divider d-none px-2"> |</span>
                        <div class=" x text-center ">
                            <button type="button" class="btn modal_btn py-1" data-toggle="modal" data-target="#exampleModal">
                                Ask for Price List
                            </button>
                        </div>
                    </div>

                    <!-- Button trigger modal -->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ask for Price List</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control "id="email_price" placeholder="Email Address" name="Email" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control " id="tel_price" placeholder="Tel" name="tel" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control " id="cname_price" placeholder="Company Name" name="cname" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control " id="site_price" placeholder="Site Url" name="site">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group text-left">
                                                    <select name="country" id="country_partner" class="form-control ">
                                                        <option value="" class="disabled-selected" disabled selected>Select Country</option>
                                                        @foreach($countries as $country)
                                                            <option value="{{$country}}">{{$country}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group text-left">
                                                    <label for="text_area">Message:</label>
                                                    <textarea name="" id="text_area" class="form-control " rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn save_price  btn-block text-uppercase">Send</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Menu-->
<nav id="navbar" class="navbar  navbar-expand-lg navbar-fixed-top navbar-dark  px-5 py-lg-0">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav" >
        <ul class="navbar-nav nav  text-center col-12 d-lg-flex justify-content-between">
            <li class="nav-item p-lg-2">
                <a class="nav-link " href="#about"><i class="fas fa-user"></i> About Us </a>
            </li>
            <li class="nav-item p-lg-2">
                <a class="nav-link" href="#product"><i class="fab fa-product-hunt"></i> View Product</a>
            </li>
            <li class="nav-item  p-lg-2">
                <a class="nav-link" href="#partner"><i class="fas fa-handshake"></i> Become a Partner</a>
            </li>
            <li class="nav-item p-lg-2">
                <a class="nav-link" href="#download"><i class="fas fa-download"></i> Download  Catalog</a>
            </li>
            <li class="nav-item  p-lg-2">
                <a class="nav-link" href="#contact_us"><i class="far fa-address-book"></i> Contact Us</a>
            </li>


        </ul>
    </div>
</nav>
<div class="fire_top ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-0 ">
                <div  class="fire" >
                    <iframe  src="https://player.vimeo.com/video/472568077?autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1&background=1" style="border:0;position:absolute; top:0;left:0;width:100%;height:100%;" alt="flames fire extinguisher servicing company">
                        <img src="{{asset('assets/images/logo.png')}}" alt="">
                    </iframe>
                </div>
                <div class="fire_header col-12" >
                    <div class="text col-12 pb-3">
                        <h3 class="text-center">High quality  fireproof  ceramic product</h3>
                    </div>
                    <div class="fire_top_images d-flex flex-wrap col-12 justify-content-center">
                        <div class="col-12 d-flex justify-content-center">
                            <img  class="img-fluid" src="{{asset('assets/images/fire_images/slide_1.png')}}"  alt="">
                            <img  class="img-fluid" src="{{asset('assets/images/fire_images/slide_2.png')}}"  alt="">
                            <img  class="img-fluid" src="{{asset('assets/images/fire_images/slide_3.png')}}"  alt="">
                            <img  class="img-fluid" src="{{asset('assets/images/fire_images/slide_4.png')}}"  alt="">
                            <img  class="img-fluid" src="{{asset('assets/images/fire_images/slide_5.png')}}"  alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@yield('content')

<footer class="footer">
    <div class="container">
        <div class="footer-content px-5 px-md-0 py-5">
            <div class="row">
                <div class="col-xl-4 col-md-6 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo text-center">
                            <a href="/">
                                <img src="{{asset('assets/images/logo.png')}}" width="50" class="img-fluid" alt="logo">
                            </a>
                        </div>
                        <div class="footer-text">
                            <p>We are specializing on out-put of Ceramic fire-proof Crucibles Offering product which manufacture is carried out on its own Exclusive technology .</p></div>
                    </div>
                    <div class="footer_info pt-3">
                        <div class="single-cta ">
                            <i class="fab fa-viber"></i>
                            <div class="cta-text">
                                <h4>Viber</h4>
                                <a   href="tel:370 671 53387" ><span>+370 671 53387 (Viber, WhatsApp)</span></a>

                            </div>
                        </div>
                        <div class="single-cta mt-3">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <a   href="+370 675 57342" ><span>+370 675 57342 (lt)</span></a>
                            </div>
                        </div>
                        <div class="single-cta mt-3">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <a   href="sales@ameriogroup.lt" ><span>sales@ameriogroup.lt</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 m-auto pt-3">
                    <div class="footer-widget ">
                        <div class="footer-widget-heading">
                            <h3>Useful Links</h3>
                        </div>

                        <ul class="d-flex flex-column">
                            <li><a href="#about">About Us</a></li>
                            <li><a href="" data-toggle="modal" data-target="#exampleModal">Ask for Price List</a></li>
                            <li><a href="#product">View Product</a></li>
                            <li><a href="#download">Download Catalog</a></li>
                            <li><a href="#partner">Become a Partner</a></li>
                            <li><a href="#contact_us">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4   m-auto pt-3">
                    <div class="footer-widget ">
                        <div class="footer-widget-heading">
                            <h3>Social Link</h3>
                        </div>
                        <div class="footer-social-icon">
                            <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                            <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class=" col-lg-4 col-12 text-center text-lg-left m-auto">
                    <div class="copyright-text ">
                        <p>Copyright &copy; <?php echo date('Y'); ?>,AMERIO GRUPĖ</p>
                    </div>
                </div>
                <div class="col-lg-8 col-12 text-lg-right text-center">
                    <div class="footer-menu">
                        <ul class="m-auto">
                            <li class="pt-md-0 pt-2"><a href=""><img src="{{asset('assets/images/card/paypal_PNG13.png')}}" width="70"  alt=""></a></li>
                            <li class="pt-md-0 pt-2"><a href=""><img src="{{asset('assets/images/card/mastercard_PNG7.png')}}" width="70" alt=""></a></li>
                            <li class="pt-md-0 pt-2"><a href=""><img src="{{asset('assets/images/card/seb-bankas.webp')}}" width="70" alt=""></a></li>
                            <li class="pt-md-0 pt-2"><a href=""><img src="{{asset('assets/images/card/visa_PNG11.png')}}" width="70" alt=""></a></li>
                            <li class="pt-md-0 pt-2"><a href=""><img src="{{asset('assets/images/card/Paysera_logo.png')}}" width="70" alt=""></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Scroll to top-->
<a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-angle-up"></i></a>

<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>

@yield('scripts')

</body>
</html>

