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
            @include('home.header')

            <div class="particlehead"></div>
            <!-- <div class="container"> -->
            <div class="site-blocks-cover">
                <div class="container">
                    <div
                        class="row align-items-center justify-content-center text-center"
                    >
                        <div
                            class="col-md-12"
                            data-aos="fade-up"
                            data-aos-delay="400"
                        >
                            <div class="row justify-content-center mb-4">
                                <div class="col-md-10 text-center">
                                    <h1>
                                        Are you looking for the best service in
                                        <span class="typed-words"></span>
                                    </h1>
                                    <p class="lead mb-5">
                                        Online and in-person, you can find
                                        printing & design services to fit your
                                        needs.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-section" id="about-section">
                <div class="container">
                    <div class="row mb-5">
                        <div
                            class="col-md-5 ml-auto mb-5 order-md-2"
                            data-jarallax-element="50"
                        >
                            <img
                                src="images/Products.jpg"
                                alt="Image"
                                class="img-fluid rounded"
                            />
                        </div>
                        <div
                            class="col-md-6 order-md-1"
                            data-jarallax-element="-50"
                        >
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-left pb-1">
                                        <h2 class="site-section-heading">
                                            About Us
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <p class="lead">
                                        Offering you convenience, efficiency and the best quality in the market, we are your one-stop printing company for all your design, print and packaging needs. With over
                                        30 years of experience transforming the print packaging industry, print&box continues to be a leading service provider for local and global brands.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="site-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 mb-lg-0 mb-4">
                            <div class="box-with-humber bg-white p-5">
                                <span
                                    class="icon icon-format_paint mr-2 text-primary h3 mb-3 d-block"
                                ></span>
                                <h2 class="text-primary">Designing</h2>
                                <p class="mb-4">
                                    No Design? No Problem. Let Our Expert
                                    Designers Help You Turn Your Dreams Into
                                    Reality
                                </p>
                                <ul class="list-unstyled ul-check primary">
                                    <li>Packaging Design</li>
                                    <li>Commercial Design</li>
                                    <li>Logo Design</li>
                                    <li>Structural Design</li>
                                </ul>
                            </div>
                        </div>

                        <div
                            class="col-md-6 col-lg-4 mb-lg-0 mb-4"
                            data-jarallax-element="-50"
                        >
                            <div class="box-with-humber bg-white p-5">
                                <span
                                    class="icon icon-palette mr-2 text-primary h3 mb-3 d-block"
                                ></span>

                                <h2 class="text-primary">Packaging</h2>
                                <p class="mb-4">
                                    Our customer service team is eager to assist you with your latest packaging project. We offer fast turn arounds for products like,
                                </p>
                                <ul class="list-unstyled ul-check primary">
                                    <li>Blister Cards</li>
                                    <li>Custom Boxes</li>
                                    <li>Skinboards</li>
                                    <li>Clamshell Inserts</li>
                                </ul>
                            </div>
                        </div>

                        <div
                            class="col-md-6 col-lg-4 mb-lg-0 mb-4"
                            data-jarallax-element="20"
                        >
                            <div class="box-with-humber bg-white p-5">
                                <span
                                    class="icon icon-laptop2 mr-2 text-primary h3 mb-3 d-block"
                                ></span>

                                <h2 class="text-primary">Sustainable Design</h2>
                                <p class="mb-4">
                                    Sourcing from sustainably managed forests
                                    and investing in carbon-neutral equipment. We adopted and gradually developed a sustainability framework in our operations allowing us to meet the international standards by identifying, managing, and controlling social,
                                    economic and environmental impact.
                                </p>
                                <!-- <ul class="list-unstyled ul-check primary">
                                    <li>Social Media</li>
                                    <li>Paid Campaigns</li>
                                    <li>Marketing &amp; SEO</li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <section class="site-section">
                <div class="container">
                    <div class="row align-items-center justify-content-around">
                        <div class="col-lg-5" data-jarallax-element="-50">
                            <h2 class="text-primary">Web Design</h2>
                            <p class="mb-4">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Et praesentium eos nulla qui
                                commodi consectetur beatae fugiat. Veniam iste
                                rerum perferendis.
                            </p>
                            <ul class="list-unstyled ul-check primary">
                                <li>Social Media</li>
                                <li>Paid Campaigns</li>
                                <li>Marketing &amp; SEO</li>
                            </ul>
                        </div>

                        <div class="col-lg-6" data-jarallax-element="50">
                            <img
                                src="images/img_2.jpg"
                                alt="Image"
                                class="img-fluid"
                            />
                        </div>
                    </div>
                </div>
            </section> -->




            <section class="site-section" id="work-section">
                <div class="container">
                    <div class="row mb-5 justify-content-center">
                        <div class="col-md-8 text-center">
                            <h2 class="site-section-heading text-center">
                                Our Works
                            </h2>
                            <p class="lead">
                                Different industries demand different solutions. The best product packaging solutions should meet the international standards of each industry.
                                With years of experience and skill, we provide a variety of bespoke packaging and business printing solutions to suit your industry’s needs.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <a
                                href="images/product1.webp"
                                class="media-1"
                                data-fancybox="gallery"
                            >
                                <img
                                    src="images/product1.webp"
                                    alt="Image"
                                    class="img-fluid"
                                />
                                <div class="media-1-content">
                                    <h2>Tea Packaging</h2>
                                    <span class="category"
                                        >Quality and design that preserves the delicate flavours, aroma and freshness of tea.</span
                                    >
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <a
                                href="images/product2.webp"
                                class="media-1"
                                data-fancybox="gallery"
                            >
                                <img
                                    src="images/product2.webp"
                                    alt="Image"
                                    class="img-fluid"
                                />
                                <div class="media-1-content">
                                    <h2>Confectionary Packaging</h2>
                                    <span class="category">Attractive print packaging solutions are essential for the industry, especially to
                                      communicate your brand story and ensure you stand out on a supermarket shelf.</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <a
                                href="images/product3.webp"
                                class="media-1"
                                data-fancybox="gallery"
                            >
                                <img
                                    src="images/product3.webp"
                                    alt="Image"
                                    class="img-fluid"
                                />
                                <div class="media-1-content">
                                    <h2>Food Packaging</h2>
                                    <span class="category">Empowering the food industry with premium, eco-friendly carton packaging that elevates product appeal, preserves food safety, and demonstrates sustainability.</span>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <a
                                href="images/product4.webp"
                                class="media-1"
                                data-fancybox="gallery"
                            >
                                <img
                                    src="images/product4.webp"
                                    alt="Image"
                                    class="img-fluid"
                                />
                                <div class="media-1-content">
                                    <h2>Pharmaceutical Packaging</h2>
                                    <span class="category"
                                        >Adhering to industry standards that guarantee longer shelf life and preservation of pharmaceutical products.</span
                                    >
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <a
                                href="images/product5.webp"
                                class="media-1"
                                data-fancybox="gallery"
                            >
                                <img
                                    src="images/product5.webp"
                                    alt="Image"
                                    class="img-fluid"
                                />
                                <div class="media-1-content">
                                    <h2>Apparel Packaging</h2>
                                    <span class="category">Durable and attractive packaging solutions for your apparel products.</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <a
                                href="images/product6.webp"
                                class="media-1"
                                data-fancybox="gallery"
                            >
                                <img
                                    src="images/product6.webp"
                                    alt="Image"
                                    class="img-fluid"
                                />
                                <div class="media-1-content">
                                    <h2>Personal Protective Equipment Packaging</h2>
                                    <span class="category">Specialised PPE products from facemasks, gloves and more.</span>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <a
                                href="images/product7.webp"
                                class="media-1"
                                data-fancybox="gallery"
                            >
                                <img
                                    src="images/product7.webp"
                                    alt="Image"
                                    class="img-fluid"
                                />
                                <div class="media-1-content">
                                    <h2>Gift Packaging</h2>
                                    <span class="category"
                                        >First impressions count. Impress them with our customised gift packages.</span
                                    >
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <a
                                href="images/product8.webp"
                                class="media-1"
                                data-fancybox="gallery"
                            >
                                <img
                                    src="images/product8.webp"
                                    alt="Image"
                                    class="img-fluid"
                                />
                                <div class="media-1-content">
                                    <h2>Fast Moving Consumer Goods (FMCGs) Packaging</h2>
                                    <span class="category">Cost-effective, high-quality and functional packaging that meets industry standards.</span>
                                </div>
                            </a>
                        </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="site-section border-bottom" id="services-section">
                <div class="container">
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-8 text-center" data-aos="fade-up">
                            <h2 class="site-section-heading text-center">
                                Our Process
                            </h2>
                        </div>
                    </div>
                    <div class="row align-items-stretch">
                        <div
                            class="col-md-6 col-lg-4 mb-4 mb-lg-4"
                            data-aos="fade-up"
                        >
                            <div class="unit-4 d-flex">
                                <div class="unit-4-icon mr-4">
                                    <span
                                        class="text-primary icon-laptop2"
                                    ></span>
                                </div>
                                <div>
                                    <h3>Design</h3>
                                    <p>
                                        Partner with our talented design team at the first stage of our process to bring your vision to life. Collaborate with us to finalize your designs, ensuring that every detail is perfect before it goes to print. With our team's expertise and your unique vision, we will
                                        create designs that stand out and make a lasting impact. Experience seamless communication and unmatched creativity as we work together towards achieving your desired outcomes.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div
                            class="col-md-6 col-lg-4 mb-4 mb-lg-4"
                            data-aos="fade-up"
                            data-aos-delay="100"
                        >
                            <div class="unit-4 d-flex">
                                <div class="unit-4-icon mr-4">
                                    <span
                                        class="text-primary icon-shopping_cart"
                                    ></span>
                                </div>
                                <div>
                                    <h3>Sample</h3>
                                    <p>
                                        Once the design is approved, we print out samples of your final product to test its
                                        compatibility, functionality, artwork, etc. When the samples are given the green-light, then we proceed to the next stage of our process.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div
                            class="col-md-6 col-lg-4 mb-4 mb-lg-4"
                            data-aos="fade-up"
                            data-aos-delay="200"
                        >
                            <div class="unit-4 d-flex">
                                <div class="unit-4-icon mr-4">
                                    <span
                                        class="text-primary icon-question_answer"
                                    ></span>
                                </div>
                                <div>
                                    <h3>Print</h3>
                                    <p>
                                        The printing process starts by developing plates for package design layouts. Then the samples are
                                        printed, colour tested and sent for approval. Once approved, the mass production phase begins. Quality control screenings are carried out at each stage of the printing process.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div
                            class="col-md-6 col-lg-4 mb-4 mb-lg-4"
                            data-aos="fade-up"
                            data-aos-delay="300"
                        >
                            <div class="unit-4 d-flex">
                                <div class="unit-4-icon mr-4">
                                    <span
                                        class="text-primary icon-format_paint"
                                    ></span>
                                </div>
                                <div>
                                    <h3>Quality Control</h3>
                                    <p>
                                        Our quality control mechanisms in place at each stage of production manually and with the use of modern
                                        technology check each product. The colour quality control process starts from the pre-press and continues throughout the production.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div
                            class="col-md-6 col-lg-4 mb-4 mb-lg-4"
                            data-aos="fade-up"
                            data-aos-delay="400"
                        >
                            <div class="unit-4 d-flex">
                                <div class="unit-4-icon mr-4">
                                    <span
                                        class="text-primary icon-extension"
                                    ></span>
                                </div>
                                <div>
                                    <h3>Quality Assuarnce</h3>
                                    <p>
                                        We release the final products only once they pass the required QA tests handled by our expert team. The screening machines on the production line remove defects by evaluating them on various
                                        criteria including colour reproduction accuracy and cutting precision. At the end of the production process, the QA team manually checks each carton before approving it for delivery.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div
                            class="col-md-6 col-lg-4 mb-4 mb-lg-4"
                            data-aos="fade-up"
                            data-aos-delay="500"
                        >
                            <div class="unit-4 d-flex">
                                <div class="unit-4-icon mr-4">
                                    <span
                                        class="text-primary icon-phonelink"
                                    ></span>
                                </div>
                                <div>
                                    <h3>Shipping</h3>
                                    <p>
                                        Once the printing process is completed, we arrange the product for delivery.
                                        If there’s a requirement for storage, SC Printing offers solutions to store your products in a safe and secure warehouse until you need them.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
