<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="author" content="Untree.co" />
        <link rel="shortcut icon" href="favicon.png" />

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

            @include('home.header2');

            <section class="site-section" id="blog-section">
                <div class="container">
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-8 text-center">
                            <h2 class="site-section-heading text-center">
                                Portfolio
                            </h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                            <div class="h-entry">
                                <img
                                    src="images/design2.png"
                                    alt="Image"
                                    class="img-fluid"
                                />
                                <h2 class="font-size-regular">
                                    <a href="#"
                                        >Create a quote</a
                                    >
                                </h2><br/>
                                <p>
                                    Request a quote based on your requirements. Simply fill out the form below with the necessary details for printing and
                                    packaging or other services, and we’ll get back to you with a customised quote. For further inquiries, please contact us.
                                </p>
                                <p><a href="#" style="color:darkblue">Visit....</a></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                            <div class="h-entry">
                                <img
                                    src="images/design4.png"
                                    alt="Image"
                                    class="img-fluid"
                                />
                                <h2 class="font-size-regular">
                                    <a href="#"
                                        >Request a design</a
                                    >
                                </h2><br/>
                                <p>
                                    Our design solutions range from adhesive label designing to sophisticated value added printing artworks. Our
                                    team works on the approved design to ensure it fits into the packaging, inner or outer carton effectively without any defects.
                                </p>
                                <p><a href="#" style="color:darkblue">Visit....</a></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                            <div class="h-entry">
                                <img
                                    src="images//design3.png"
                                    alt="Image"
                                    class="img-fluid"
                                />
                                <h2 class="font-size-regular">
                                    <a href="#"
                                        >Reorder</a
                                    >
                                </h2><br/>
                                <p>
                                    You can reorder a previous quota simply through this platform, From positioning of key messages of your product to finding the right colour and style of your brand, we work together to
                                    create the final design that’s functional and appealing. Once the final changes are done, they’ll be sent to you for approval, before it goes into the printing process.
                                </p>
                                <p><a href="#" style="color: darkblue">Visit...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="site-section" id="work-section">
                <div class="container-fluid">
                    <div class="row">
                        @foreach ($product as $products)
                            <div class="col-md-6 col-lg-4">
                                <a href="product/{{$products->image}}" class="media-3" data-fancybox="gallery">
                                    <img src="product/{{$products->image}}" alt="Image" class="img-fluid w-95 h-50 mx-auto" />
                                </a>
                                <div class="d-flex flex-column align-items-center pt-4">
                                    <h5>{{$products->title}}</h5>
                                    <h6>{{$products->description}}</h6><br/>
                                    <p>Rs. {{$products->price}}</p>
                                    <div class="mb-2 col-8">
                                        <a class="btn btn-primary btn-block" href="{{url('product_details',$products->id)}}">Product Details</a>
                                    </div>
                                    <div class="row-mb-2">
                                        <form action="{{url('add_cart',$products->id)}}" method="POST">
                                            @csrf
                                            <input type="number" value="1" min="1" >
                                            <input type="submit" value="Add To Cart" class="btn btn-outline-secondary btn-block mt-2">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <span class="col-3 text-center pl-5 pt-1">
                            {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
                        </span>
                    </div>
                </div>
            </section>

            <footer class="site-footer" id="site-footer">
                <div class="container">
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
