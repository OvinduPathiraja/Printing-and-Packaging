<header
                class="site-navbar py-4 js-sticky-header site-navbar-target"
                role="banner"
            >
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-11 col-xl-2">
                            <h1 class="mb-0 site-logo">
                                <a href="index.html" class="mb-0"
                                    >Pack&Box<span class="text-primary">.</span>
                                </a>
                            </h1>
                        </div>
                        <div class="col-12 col-md-10 d-none d-xl-block">
                            <nav
                                class="site-navigation position-relative text-right"
                                role="navigation"
                            >
                                <ul
                                    class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block"
                                >
                                    <li class="has-children">
                                        <a
                                        style="color: darkred"
                                            href="#about-section"
                                            class="nav-link"
                                            >Workspace</a
                                        >
                                        <ul class="dropdown">
                                            <li>
                                           <x-app-layout></x-app-layout>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/redirect" class="nav-link"
                                            >Home</a
                                        >
                                    </li>
                                    <li>
                                        <a href="{{url('/view_quote')}}" class="nav-link"
                                            >Quote</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            href="{{url('/show_cart')}}"
                                            class="nav-link"
                                            >Cart</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            href="{{url('/show_cart')}}"
                                            class="nav-link"
                                            >History</a
                                        >
                                    </li>


                                </ul>
                            </nav>
                        </div>

                        <div
                            class="d-inline-block d-xl-none ml-md-0 mr-auto py-3"
                            style="position: relative; top: 3px"
                        >
                            <a
                                href="#"
                                class="site-menu-toggle js-menu-toggle text-black"
                                ><span class="icon-menu h3"></span
                            ></a>
                        </div>
                    </div>
                </div>
            </header>
