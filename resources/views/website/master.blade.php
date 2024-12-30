<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Priyanshu Enterprises - Maha eSeva Kendra, Baramati </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('website/img/title-image.png') }}">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('website/lib/animate/animate.min.css') }}" />
    <link href="{{ asset('website/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('website/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('website/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid topbar bg-light px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-flex flex-wrap">
                    <a href="#" class="text-muted small me-4"><i
                            class="fas fa-map-marker-alt text-primary me-2"></i>Baramati, Pune</a>
                    <a href="tel:+01234567890" class="text-muted small me-4"><i
                            class="fas fa-phone-alt text-primary me-2"></i>+91 8625072647 / +91 9823222043</a>
                    <a href="mailto:example@gmail.com" class="text-muted small me-0"><i
                            class="fas fa-envelope text-primary me-2"></i>priyanshuenterprises@outlook.com</a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="#"><small class="mx-3 text-dark"><i
                                class="fab fa-facebook text-primary "></i></small></a>
                    <a href="#"><small class="mx-3 text-dark"><i
                                class="fab fa-whatsapp text-primary "></i></small></a>
                    <a href="#"><small class="mx-3 text-dark"><i
                                class="fab fa-twitter text-primary "></i></small></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <img src="{{ asset('website/img/logo.jpg') }}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link {{ Request::path() == '/' ? 'active' : '' }}">Home</a>
                    <a href="/about"
                        class="nav-item nav-link {{ Request::path() == 'about' ? 'active' : '' }}">About</a>
                    <a href="/services"
                        class="nav-item nav-link {{ Request::path() == 'services' ? 'active' : '' }}">Services</a>
                    <a href="/contact"
                        class="nav-item nav-link {{ Request::path() == 'contact' ? 'active' : '' }}">Contact
                        Us</a>
                </div>
                <a href="https://app.mahaeseva.in"
                    class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Apply Now</a>
            </div>
        </nav>


    </div>
    <!-- Navbar & Hero End -->


    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5 border-start-0 border-end-0"
            style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item">
                        <a href="index.html" class="p-0">
                            <img src="{{ asset('website/img/Priyanshu-Enterprises-wahite.png') }}" class="img-fluid  "
                                alt="Logo">
                        </a>

                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <h3>
                        <i class="fas fa-map-marker-alt text-primary me-2"></i>
                        <h4 class="text-primary">Address</h4>
                    </h3>
                    <p class="text-white mt-3 mb-4">प्रियांशु इंटरप्रायजेस, महा ई-सेवा केंद्र, शॉप नं.४ रम्यनगरी,
                        तांदुळवाडी रोड,
                        रेल्वे पुलाजवळ, आबासाहेब सातव चौक, बारामती, पुणे - 413102​</p>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-2">
                    <div class="footer-item text-white">
                        <h4 class="text-white mb-4">Quick Links</h4>
                        <a href="/"><i class="fas fa-angle-right me-2"></i> Home</a>
                        <a href="/mahaeseva/about"><i class="fas fa-angle-right me-2"></i> About Us</a>
                        <a href="/mahaeseva/services"><i class="fas fa-angle-right me-2"></i> Services</a>
                        <a href="/mahaeseva/contact"><i class="fas fa-angle-right me-2"></i> Contact Us</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Contact Info</h4>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-envelope text-primary me-3"></i>
                            <p class="text-white mb-0">priyanshuenterprises@outlook.com</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fa fa-phone-alt text-primary me-3"></i>
                            <p class="text-white mb-0">+91 8625072647 <br> +91 9823222043</p>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="fab fa-whatsapp  text-primary me-3"></i>
                            <p class="text-white mb-0">+91 8625072647</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-body"><a href="#" class="border-bottom text-white"><i
                                class="fas fa-copyright text-light me-2"></i>mahaeseva</a>, All right reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end text-body">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom text-white" href="https://ajspire.com/">Ajspire Technologies
                        Pvt.Ltd</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('website/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('website/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('website/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('website/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('website/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('website/lib/owlcarousel/owl.carousel.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('website/js/main.js') }}"></script>
</body>

</html>
