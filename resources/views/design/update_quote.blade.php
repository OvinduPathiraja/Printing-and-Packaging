<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="/public">
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="author" content="Untree.co" />

        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <style>
            .center2{
                margin: auto;
                width: 50%;
                text-align: center;
                margin-top: 30px;
                border: 3px solid black;
            }
            .div_center{
                text-align: center;
            }
            .font_size{
                font-size: 40px;
                padding-bottom: 40px;
            }
            .text_color{
                color: black;
                padding-bottom: 20px;
            }
            label{
                display: inline-block;
                width: 200px;
            }
            .div_design{
                padding-bottom: 15px;
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
            
            <div class="main-panel">
                <div class="content-wrapper">
                    @if(session()->has('message'))
                    <div class="alert alert-light">
                        <button type="button" class="close" dat-dismiss="alert" aria-hidden="true">x</button>
                        {{session()->get('message')}} 
                    </div>
                    @endif
                    <div class="div_center">
                        @if(session()->has('message'))
                    <div class="alert alert-light">
                        <button type="button" class="close" dat-dismiss="alert" aria-hidden="true">x</button>
                        {{session()->get('message')}} 
                    </div>
                    @endif
                        <h1 class="font_size">
                            Edit quote
                        </h1>
                        <form action="{{url('/update_quote_confirm',$quote->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div>
                            <div class="div_design">
                                <label>quote Description</label>
                                <input class="text_color" type="text" name="description" placeholder="Write a Description" id="" required="" value="{{$quote->description}}">
                            </div>
                            <div class="div_design">
                                <label>quote Quantity</label>
                                <input class="text_color" type="number" min="0" name="quantity" placeholder="" id="" required="" value="{{$quote->quantity}}">
                            </div>
                            <div class="div_design">
                                <label>quote Category</label>
                                <select class="text_color" name="category" id="" required="" >
                                    <option value="{{$quote->category}}" selected>{{$quote->category}}</option>
                                    @foreach($category as $category )
                                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                             <div class="div_design">
                                <label>Phone Number</label>
                                <input class="text_color" type="number" name="price" placeholder="" id="" required="" value="{{$quote->mobile}}">
                            </div>
                            <div class="div_design">
                                <input type="submit" value="Add quote" class="btn btn-outline-primary">
                            </div>
                        </div>
                        </form>
                    </div>

                </div>
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
