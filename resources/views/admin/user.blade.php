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
            .center_table{
                margin: auto;
                width: 550px;
                padding-bottom: 25px;
                border: 2px solid gray;
                text-align: center;
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
            @include('admin.header')

            <div class="padd"></div>
            
            <div class="main-panel">
                <div class="content-wrapper">
                
                    <div class="center_table">
                        <table>
                        <tr>
                            <th class="th-pad">
                                Name
                            </th>
                            <th class="th-pad">Email</th>
                            <th class="th-pad">User Type</th>
                            <th class="th-pad">Delete</th>
                            <th class="th-pad">Edit</th>
                        </tr>
                        @foreach ($data as $data)
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->usertype}}</td>

                            @if($data->usertype=="0")
                            <td><a class="btn btn-danger" href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
                            @else
                            <td>Not Allowed</td>
                            @endif
                            <td><a class="btn btn-success" href="">Edit</a></td>
                            {{-- {{url('/update_user',$user->id)}} --}}
                        </tr>
                        @endforeach
                    </table>
                    </div>

                </div>
            </div>

            <footer class="site-footer" id="site-footer">
                <div class="container">
                    <div class="row pt-5 mt-5 text-center">
                        <div class="col-md-12">
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
