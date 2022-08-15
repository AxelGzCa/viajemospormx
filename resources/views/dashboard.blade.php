<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienvenido') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{--AQUI VA LA INFO --}}
                <!-- Navbar Start -->
                <div class="nav-bar">
                    <div class="w-100">
                        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
                            <nav
                                class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                                <a href="" class="navbar-brand">
                                    <h4 class="m-0 text-success"><span class="text-dark">Viajemos por </span>Mexico</h1>
                                </a>
                                <button type="button" class="navbar-toggler" data-toggle="collapse"
                                    data-target="#navbarCollapse">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="col-12 collapse navbar-collapse justify-content-between px-3"
                                    id="navbarCollapse">
                                    <div class="navbar-nav ml-auto py-0">
                                        <a href="index.html" class="nav-item nav-link active text-success">Home</a>
                                        <a href="#about" class="nav-item nav-link">About</a>
                                        <a href="#package" class="nav-item nav-link">Tour Packages</a>
                                        <form class="d-flex justify-content-between mr-2 p-2 mt-3">
                                            <a href="login.html" class="form-control btn btn-success"
                                                role="button">Login</a>
                                        </form>
                                        <form class="d-flex justify-content-between mr-2 p-2 mt-3">
                                            <a href="register.html" class="form-control btn btn-success"
                                                role="button">Register</a>
                                        </form>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Navbar End -->
                <!-- Carousel Start -->
                <div class="container-fluid p-0">
                    <div id="header-carousel" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                                <div
                                    class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 900px;">
                                        <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                                        <h1 class="display-3 text-white mb-md-4">Let's Discover <span
                                                class="text-green">Mexico</span> Together</h1>
                                        <a href="" class="btn btn-success py-md-3 px-md-5 mt-2">Register Now!</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                                <div
                                    class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 900px;">
                                        <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                                        <h1 class="display-3 text-white mb-md-4">Let's Discover <span
                                                class="text-green">Mexico</span> Together</h1>
                                        <a href="" class="btn btn-success py-md-3 px-md-5 mt-2">Register Now!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                                <span class="carousel-control-prev-icon mb-n2"></span>
                            </div>
                        </a>
                        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                                <span class="carousel-control-next-icon mb-n2"></span>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Carousel End -->
                <!-- About Start -->
                <a name="about"></a>
                <div class="container-fluid py-5">
                    <div class="container pt-5">
                        <div class="row">
                            <div class="col-lg-6" style="min-height: 500px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute w-100 h-100" src="img/about-1.jpg"
                                        style="object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-lg-6 pt-5 pb-lg-5">
                                <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                                    <h6 class="text-success text-uppercase" style="letter-spacing: 5px;">About Us</h6>
                                    <h1 class="mb-3">We Provide Best Tour Packages In Your Budget</h1>
                                    <p>Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit
                                        rebum labore
                                        sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut.
                                        Erat duo eos et
                                        erat sed diam duo</p>
                                    <div class="row mb-4">
                                        <div class="col-6">
                                            <img class="img-fluid" src="img/about-2.jpg" alt="">
                                        </div>
                                        <div class="col-6">
                                            <img class="img-fluid" src="img/about-3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About End -->
                <!-- Feature Start -->
                <div class="container-fluid pb-5">
                    <div class="container pb-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="d-flex mb-4 mb-lg-0">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-success mr-3"
                                        style="height: 100px; width: 100px;">
                                        <i class="fa fa-2x fa-money-check-alt text-white"></i>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <h5 class="">Competitive Pricing</h5>
                                        <p class="m-0">Magna sit magna dolor duo dolor labore rebum amet elitr est diam
                                            sea</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex mb-4 mb-lg-0">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-success mr-3"
                                        style="height: 100px; width: 100px;">
                                        <i class="fa fa-2x fa-award text-white"></i>
                                    </div>
                                    <div class="d-flex flex-column mr-6">
                                        <h5 class="">Best Services</h5>
                                        <p class="m-0">Magna sit magna dolor duo dolor labore rebum amet elitr est diam
                                            sea</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex mb-4 mb-lg-0">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-success mr-3"
                                        style="height: 100px; width: 100px;">
                                        <i class="fa fa-2x fa-globe text-white"></i>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <h5 class="">Worldwide Coverage</h5>
                                        <p class="m-0">Magna sit magna dolor duo dolor labore rebum amet elitr est diam
                                            sea</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Feature End -->
                <!-- Packages Start -->
                <a name="package"></a>
                <div class="container-fluid py-5">
                    <div class="container pt-5 pb-3">
                        <div class="text-center mb-3 pb-3">
                            <h6 class="text-success text-uppercase" style="letter-spacing: 5px;">Packages</h6>
                            <h1>Pefect Tour Packages</h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="package-item bg-white mb-2">
                                    <img class="img-fluid" src="img/package-1.jpg" alt="">
                                    <div class="p-4">
                                        <a class="h5 text-decoration-none text-success" href="">Discover amazing places
                                            of Mexico with us</a>
                                        <div class="border-top mt-4 pt-4">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="m-0"><i class="fa fa-star text-success mr-2"></i> 4.5
                                                    <small>(250)</small>
                                                </h6>
                                                <h5 class="m-0">$350</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="package-item bg-white mb-2">
                                    <img class="img-fluid" src="img/package-2.jpg" alt="">
                                    <div class="p-4">
                                        <a class="h5 text-decoration-none text-success" href="">Discover amazing places
                                            of Mexico with us</a>
                                        <div class="border-top mt-4 pt-4">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="m-0"><i class="fa fa-star text-success mr-2"></i> 4.5
                                                    <small>(250)</small>
                                                </h6>
                                                <h5 class="m-0">$350</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="package-item bg-white mb-2">
                                    <img class="img-fluid" src="img/package-3.jpg" alt="">
                                    <div class="p-4">
                                        <a class="h5 text-decoration-none text-success" href="">Discover amazing places
                                            of Mexico with us</a>
                                        <div class="border-top mt-4 pt-4">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="m-0"><i class="fa fa-star text-success mr-2"></i> 4.5
                                                    <small>(250)</small>
                                                </h6>
                                                <h5 class="m-0">$350</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Packages End -->
                <!-- Footer Start -->
                <div class="container-fluid bg-dark text-white border-top py-2 px-sm-3 px-md-5"
                    style="border-color: rgba(256, 256, 256, .1) !important;">
                    <div class="row">
                        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                            <div class="container-fluid bg-dark text-white py-2 px-sm-3 px-md-3"
                                style="border-color: rgba(256, 256, 256, .1) !important;">
                                <div class="row">
                                    <a href="" class="navbar-brand">
                                        <h4 class="text-success"><span class="text-white">Viajemos por </span>Mexico
                                            </h1>
                                    </a>
                                    <div class="d-flex justify-content-center text-md-left">
                                        <a class="btn btn-outline-success btn-square mr-2" href="#"><i
                                                class="fab fa-twitter"></i></a>
                                        <a class="btn btn-outline-success btn-square mr-2" href="#"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-outline-success btn-square mr-2" href="#"><i
                                                class="fab fa-linkedin-in"></i></a>
                                        <a class="btn btn-outline-success btn-square" href="#"><i
                                                class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End -->
            </div>
        </div>
    </div>
</x-app-layout>
