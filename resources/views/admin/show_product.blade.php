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
        <style>
            .center_table{
                margin: auto;
                width: 50%;
                border: 2px solid gray;
                text-align: center;
            }
            .h1-font{
                text-align: center;
                font-size: 35px;
                padding-bottom: 20px;
            }
            .img_size{
                width: 150px;
                height: 150px;
            }
            .th-pad{
                padding: 30px;
            }
        </style>

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

            {{-- Header --}}
            @include('home.header3')

            <div class="padd"></div>

            <section class="site-section">
                <div class="container">
                    @if(session()->has('message'))
                    <div class="alert alert-light">
                        <button type="button" class="close" dat-dismiss="alert" aria-hidden="true">x</button>
                        {{session()->get('message')}}
                    </div>
                    @endif
                    <h1 class="h1-font">All Products</h1>

                    <table class="center_table">
                        <tr style="background-color: rgba(248, 248, 250, 0.755);padding-bottom: 20px;">
                            <th class="th-pad">Product Title</th>
                            <th class="th-pad">Quantity</th>
                            <th class="th-pad">Category</th>
                            <th class="th-pad">Price</th>
                            <th class="th-pad">Product Image</th>
                            <th class="th-pad">Delete</th>
                            <th class="th-pad">Edit</th>
                        </tr>
                        @foreach ($product as $product )
                        <tr>
                            <td>{{$product->title}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->category}}</td>
                            <td>{{$product->price}}</td>
                            <td>
                                <img src="/product/{{$product->image}}" class="img_size" alt="">
                            </td>
                            <td>
                                <a class="btn btn-danger" onclick="return confirm('Are you sure want to delete')" href="{{url('delete_product',$product->id)}}">Delete</a>
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>

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
