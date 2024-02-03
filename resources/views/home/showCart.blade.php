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


            <div>
                <section class="site-section">
                    <div class="container">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{session('message')}}
                            </div>

                        @endif
                        <table class="center_table">
                            <tr style="padding-bottom: 20px;">
                                <th>Product Title</th>
                                <th>Product Quantity</th>
                                <th>Product Price</th>
                                <th>Product Image</th>
                                <th>Action</th>
                            </tr>
                            <?php $total_amount = 0; ?>
                            @foreach ($cart as $cart)

                            <tr>
                                <td>{{$cart->product_title}}</td>
                                <td>{{$cart->quantity}}</td>
                                <td>{{$cart->price}}</td>
                                <td>
                                    <img
                                        src="{{asset('product/'.$cart->image)}}"
                                        alt="Image"
                                        class="img-fluid"
                                        style="width: 100px; height: 100px;"
                                    />
                                </td>
                                <td>
                                    <a
                                        href="{{url('delete_cart/'.$cart->id)}}"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this item?')"
                                        >Delete</a
                                    >
                                </td>
                            </tr>
                            <?php $total_amount = $total_amount + ($cart->price * $cart->quantity); ?>


                            @endforeach
                            <tr>
                                <td colspan="2" align="right">Total Amount</td>
                                <td>{{$total_amount}}</td>
                            </tr>
                            <tr>
                                <td colspan="2" align="right">
                                    <a
                                        href="{{url('cash_order')}}"
                                        class="btn btn-outline-primary btn-sm"
                                        >Cash on Delivery</a
                                    >
                                </td>
                                <td>
                                    <a
                                        href="{{url('stripe',$total_amount)}}"
                                        class="btn btn-outline-primary btn-sm"
                                        >Pay by Card</a
                                    >
                                </td>
                        </table>
                    </div>

                </section>
            </div>


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
