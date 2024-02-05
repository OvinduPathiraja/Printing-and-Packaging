<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="author" content="Untree.co" />

        <meta name="description" content="" />
        <meta name="keywords" content="" />


        {{-- Links --}}
        @include('home.links')

    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <div class="site-wrap">
            <div class="site-mobile-menu site-navbar-target">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>

            <div class="top-bar py-2" id="home-section">
                <div class="container">
                    <div class="row">
                        <div
                            class="col-md-6 text-center text-lg-right order-lg-2"
                        >
                            <ul class="social-media m-0 p-0">
                                <li>
                                    <a href="#" class="p-2"
                                        ><span class="icon-facebook"></span
                                    ></a>
                                </li>
                                <li>
                                    <a href="#" class="p-2"
                                        ><span class="icon-twitter"></span
                                    ></a>
                                </li>
                                <li>
                                    <a href="#" class="p-2"
                                        ><span class="icon-instagram"></span
                                    ></a>
                                </li>
                                <li>
                                    <a href="#" class="p-2"
                                        ><span class="icon-linkedin"></span
                                    ></a>
                                </li>
                            </ul>
                        </div>
                        <div
                            class="col-md-6 text-center text-lg-left order-lg-1"
                        >
                            <p class="mb-0 d-inline-flex">
                                <span class="mr-3"
                                    ><a
                                        href="tel://#"
                                        class="d-flex align-items-center"
                                        ><span class="icon-phone mr-2"></span
                                        ><span>+1 234 5678 9101</span></a
                                    ></span
                                >
                                <span
                                    ><a
                                        href="tel://#"
                                        class="d-flex align-items-center"
                                        ><span class="icon-envelope mr-2"></span
                                        ><span>info@domain.com</span></a
                                    ></span
                                >
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Header --}}
            @include('home.header2')

            <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
                <div class="site-wrap">
                    <div class="site-section" id="about-section">
                        <div class="container pt-5">
                            <div class="row mb-1">
                                <div class="col-md-6 order-md-1" data-jarallax-element="50">
                                    <img src="{{ asset('product/' . $product->image) }}" alt="Image" class="w-100" />
                                </div>

                                <div class="col-md-6 order-md-2" data-jarallax-element="50">
                                    <div class="col-12">
                                        <div class="text-left pb-1">
                                            <h2 class="site-section-heading">
                                                {{$product->title}}
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <p class="lead">
                                            {{$product->description}}
                                        </p><br/>
                                        <p>Rs. {{$product->price}}.00</p>

                                        <div class="mb-2 col-8">
                                            <form action="{{url('add_cart',$product->id)}}" method="POST">
                                                @csrf
                                                <input type="number" min="1" name="quantity" value="1">
                                                <input type="submit" value="Add To Cart" class="btn btn-outline-secondary btn-block mt-2">
                                            </form>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </body>


            <footer class="site-footer" id="site-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-3 ml-auto">
                                    <h2 class="footer-heading mb-4">
                                        Features
                                    </h2>
                                    <ul class="list-unstyled">
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h2 class="footer-heading mb-4">
                                        Follow Us
                                    </h2>
                                    <a href="#" class="pl-0 pr-3"
                                        ><span class="icon-facebook"></span
                                    ></a>
                                    <a href="#" class="pl-3 pr-3"
                                        ><span class="icon-twitter"></span
                                    ></a>
                                    <a href="#" class="pl-3 pr-3"
                                        ><span class="icon-instagram"></span
                                    ></a>
                                    <a href="#" class="pl-3 pr-3"
                                        ><span class="icon-linkedin"></span
                                    ></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h2 class="footer-heading mb-4">
                                Subscribe Newsletter
                            </h2>
                            <form
                                action="#"
                                method="post"
                                class="subcription-form"
                            >
                                <div class="input-group mb-3">
                                    <input
                                        type="text"
                                        class="form-control border-secondary text-white bg-transparent"
                                        placeholder="Enter Email"
                                        aria-label="Enter Email"
                                        aria-describedby="button-addon2"
                                    />
                                    <div class="input-group-append">
                                        <button
                                            class="btn btn-primary text-white"
                                            type="button"
                                            id="button-addon2"
                                        >
                                            Send
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row pt-5 mt-5 text-center">
                        <div class="col-md-12">
                            <div class="border-top pt-5">
                                <p>
                                    Copyright &copy;
                                    <script>
                                        document.write(
                                            new Date().getFullYear()
                                        );
                                    </script>
                                    . All Rights Reserved.
                                    <!-- License information: https://untree.co/license/ -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- .site-wrap -->

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery-migrate-3.0.1.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/bootstrap-datepicker.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.fancybox.min.js"></script>
        <script src="js/jarallax.min.js"></script>
        <script src="js/jarallax-element.min.js"></script>
        <script src="js/lozad.min.js"></script>
        <script src="js/modernizr.min.js"></script>
        <script src="js/three.min.js"></script>
        <script src="js/TweenMax.min.js"></script>
        <script src="js/OBJLoader.js"></script>
        <script src="js/ParticleHead.js"></script>

        <script src="js/jquery.sticky.js"></script>

        <script src="js/typed.js"></script>
        <script>
            var typed = new Typed(".typed-words", {
                strings: [
                    "Package Printing",
                    " Design Services",
                    " Commercial Printing",
                    "Structural Designs",
                ],
                typeSpeed: 80,
                backSpeed: 80,
                backDelay: 4000,
                startDelay: 1000,
                loop: true,
                showCursor: true,
            });
        </script>

        <script src="js/main.js"></script>
    </body>
</html>
