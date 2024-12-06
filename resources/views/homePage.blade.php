<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        @font-face {
            font-family: 'GT Walsheim Pro1';
            src: url('{{ asset('fonts/gt-walsheim-pro/GTWalsheimPro-Regular.woff2') }}') format('woff2');
            font-style: normal;
        }

        @font-face {
            font-family: 'GT Walsheim Pro2';
            src: url('{{ asset('fonts/gt-walsheim-pro/GTWalsheimPro-Medium.woff2') }}') format('woff2');
            font-style: bold;
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company Website Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary" id="navbar-scrollspy">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/logo.png') }}" alt="logo" class="img-fluid">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-lable="toggle navigation" id="navbarToggler">
                <span class="navbar-toggler-icon open-icon"></span>
                <span class="d-none btn-close py-5 px-2" aria-label="Close"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 justify-content-center gap-4 ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#our-services">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service-map">Service Map</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto justify-content-end signin_Url">
                    <li class="nav-item">
                        <a class="btn btn-outline rounded-pill sign_in" href="#">Sign in</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    {{-- homepage --}}
    <main data-bs-spy="scroll" data-bs-target="#navbar-scrollspy" data-bs-offset="50" tabindex="0"
        data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true">
        <div class="container p-3 hero" id="home">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 learn_more_426">
                    <h2 class="h2 heading2 fw-bold">Providing Industry Leading Solutions for</h2>
                    <p class="paragraph1 mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitant cras
                        morbi
                        hendrerit nunc vel
                        sapien. In habitasse at diam suspendisse non vitae fermentum, pharetra arcu. Viverra a morbi ut
                        donec in. Ac diam, at sed cras nisi. </p>
                    <a href="" class="text-decoration-none rounded-pill learn_more mt-4">Learn More <i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>
                <div class="col-12 col-md-6 text-md-end mt-4 mt-md-0">
                    <img src="{{ asset('img/homepage_img.png') }}" alt="" class="img-fluid homepage_img">
                </div>
            </div>
        </div>

        {{-- About Company --}}
        <div class="container my-5" id="about">
            <div class="row about-section rounded-pill container p-3 text-center align-items-center">
                <div
                    class="col-md-4 about-heading d-flex justify-content-center text-center text-md-start align-items-center about_border">
                    <h3 class="h3 fw-bold">About <br> Company</h3>
                </div>
                <div class="col-md-8 text-center text-md-start p-4 p-md-5 about-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget duis mi nunc bibendum. Tellus
                        elementum
                        nec lorem eget dictumst. Risus in gravida eu, enim lorem. Sed consequat ut suspendisse eros.
                        Nunc
                        nunc accumsan, viverra enim. Mi.</p>
                </div>
            </div>
        </div>

        {{-- Our Services --}}
        <section class="container my-5" id="our-services">
            <div class="text-center services_heading mb-4">
                <h3 class="h3 fw-bold">Our Services</h3>
            </div>

            {{-- display on larger screen --}}
            <div id="services">
                <div class="container">
                    <div class="row non-it-service1">
                        <div class="col non-it-col1 pt-2 pt-md-3 pt-lg-4 pt-xl-4">
                            <h5 class="h5 fw-bold not-it-heading">Non-IT enterprises</h5>
                            <p class="p non-it-p mt-3 mt-md-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.
                                Consequat bibendum sit felis, sollicitudin
                                et. Nulla aliquet integer hac ac morbi.</p>
                            <a href=""
                                class="text-decoration-none learn_more2 btn rounded-pill mt-3 mt-md-4">Learn
                                More
                                <i class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                        <div class="col non-it-col2 pt-2 pt-md-3 pt-lg-4 pt-xl-4">
                            <img src="{{ asset('img/service1.png') }}" alt="" class="img_service1 img-fluid">
                        </div>
                    </div>
                </div>

                <div class="container mt-4">
                    <div class="row software-service2">
                        <div class="col software-col1 pt-2 pt-md-3 pt-lg-4 pt-xl-4">
                            <img src="{{ asset('img/service2(1).png') }}" alt=""
                                class="img_service2 p-1 img-fluid">
                        </div>
                        <div class="col software-col2 pt-2 pt-md-3 pt-lg-4 pt-xl-4">
                            <h5 class="h5 fw-bold software-heading">Software product companies</h5>
                            <p class="p software-p mt-3 mt-md-4 mb-1">Lorem ipsum dolor sit amet, consectetur
                                adipiscing
                                elit.
                                Blandit viverra porta tortor, elementum
                                ultrices. Blandit quam nec aliquam.</p>
                            <a href=""
                                class="text-decoration-none learn_more2 learn_more3 btn rounded-pill mt-3 mt-md-4">Learn
                                More <i class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>

                <div class="container mt-4">
                    <div class="row non-it-service1">
                        <div class="col non-it-col1 pt-2 pt-md-3 pt-lg-4 pt-xl-4">
                            <h5 class="h5 fw-bold not-it-heading">Non-IT enterprises</h5>
                            <p class="p non-it-p mt-3 mt-md-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.
                                Blandit viverra porta tortor, elementum ultrices. Blandit quam nec aliquam.
                            </p>
                            <a href=""
                                class="text-decoration-none learn_more2 btn rounded-pill mt-3 mt-md-4">Learn
                                More
                                <i class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                        <div class="col non-it-col2 pt-2 pt-md-3 pt-lg-4 pt-xl-4">
                            <img src="{{ asset('img/service1.png') }}" alt="" class="img_service1 img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            {{-- display on mobile device or 426px and below --}}
            <div class="services426">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row non-it-service1">
                                    <div class="col non-it-col1 pt-2 pt-md-3 pt-lg-4 pt-xl-4">
                                        <h5 class="h5 fw-bold not-it-heading">Non-IT enterprises</h5>
                                        <p class="p non-it-p mt-3 mt-md-4 mb-1">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit.
                                            Consequat bibendum sit felis, sollicitudin
                                            et. Nulla aliquet integer hac ac morbi.</p>
                                        <a href=""
                                            class="text-decoration-none learn_more2 btn rounded-pill mt-3 mt-md-4">Learn
                                            More
                                            <i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                    <div class="col non-it-col2 pt-2 pt-md-3 pt-lg-4 pt-xl-4">
                                        <img src="{{ asset('img/service1.png') }}" alt=""
                                            class="img_service1 img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row software-service2">
                                    <div class="col software-col1 pt-2 pt-md-3 pt-lg-4 pt-xl-4">
                                        <img src="{{ asset('img/service2(1).png') }}" alt=""
                                            class="img_service2 p-1 img-fluid">
                                    </div>
                                    <div class="col software-col2 pt-2 pt-md-3 pt-lg-4 pt-xl-4">
                                        <h5 class="h5 fw-bold software-heading">Software product companies</h5>
                                        <p class="p software-p mt-3 mt-md-4 mb-1">Lorem ipsum dolor sit amet,
                                            consectetur
                                            adipiscing elit.
                                            Blandit viverra porta tortor, elementum
                                            ultrices. Blandit quam nec aliquam.</p>
                                        <a href=""
                                            class="text-decoration-none learn_more2 learn_more3 btn rounded-pill mt-3 mt-md-4">Learn
                                            More <i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row non-it-service1">
                                    <div class="col non-it-col1 pt-2 pt-md-3 pt-lg-4 pt-xl-4">
                                        <h5 class="h5 fw-bold not-it-heading">Non-IT enterprises</h5>
                                        <p class="p non-it-p mt-3 mt-md-4 mb-1">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit.
                                            Blandit viverra porta tortor, elementum ultrices. Blandit quam nec aliquam.
                                        </p>
                                        <a href=""
                                            class="text-decoration-none learn_more2 btn rounded-pill mt-3 mt-md-4">Learn
                                            More
                                            <i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                    <div class="col non-it-col2 pt-2 pt-md-3 pt-lg-4 pt-xl-4">
                                        <img src="{{ asset('img/service1.png') }}" alt=""
                                            class="img_service1 img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- indicators --}}
                    <div class="p-3">
                        <ul class="carousel-indicators mt-0 me-0 ms-5">
                            <li data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active">
                            </li>
                            <li data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        {{-- service map --}}
        <section class="container" id="service-map">
            <div class="text-center map_heading mb-4">
                <h3 class="h3 fw-bold">Service Map</h3>
            </div>

            {{-- Display Service map on mobile device or 426px and below --}}
            <div id="carouselExampleAutoplaying serviceMapCarousel" class="carousel slide d-md-none"
                data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container row service_map1">
                            <div
                                class="col-md-4 map1_heading d-flex justify-content-center align-items-center text-center">
                                <h5 class="h5 fw-bold">IT consulting</h5>
                            </div>
                            <div class="col-md-8 map1_content d-flex justify-content-center align-items-center">
                                <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Blandit viverra porta
                                        tortor, elementum
                                        ultrices. Blandit quam nec aliquam.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Blandit viverra porta
                                        tortor, elementum
                                        ultrices. Blandit quam nec aliquam.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container row service_map1">
                            <div
                                class="col-md-4 map1_heading d-flex justify-content-center align-items-center text-center">
                                <h5 class="h5 fw-bold map2">Software Development</h5>
                            </div>
                            <div class="col-md-8 map1_content d-flex justify-content-center align-items-center">
                                <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Blandit viverra porta
                                        tortor, elementum
                                        ultrices. Blandit quam nec aliquam.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Blandit viverra porta
                                        tortor, elementum
                                        ultrices. Blandit quam nec aliquam.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container row service_map1">
                            <div
                                class="col-md-4 map1_heading d-flex justify-content-center align-items-center text-center">
                                <h5 class="h5 fw-bold">Testing and QA</h5>
                            </div>
                            <div class="col-md-8 map1_content d-flex justify-content-center align-items-center">
                                <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Blandit viverra porta
                                        tortor, elementum
                                        ultrices. Blandit quam nec aliquam.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Blandit viverra porta
                                        tortor, elementum
                                        ultrices. Blandit quam nec aliquam.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- indicators --}}
                <div class="p-3">
                    <ul class="carousel-indicators mt-0 me-0 ms-5 listSlideMap">
                        <li data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2"></li>
                    </ul>
                </div>
            </div>

            {{-- display on larger screens --}}
            <div id="serviceMaps">
                <div class="container row service_map1">
                    <div class="col-md-4 map1_heading d-flex justify-content-center align-items-center text-center">
                        <h5 class="h5 fw-bold">IT consulting</h5>
                    </div>
                    <div class="col-md-8 map1_content d-flex justify-content-center align-items-center">
                        <ul>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Blandit viverra porta tortor,
                                elementum
                                ultrices. Blandit quam nec aliquam.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Blandit viverra porta tortor,
                                elementum
                                ultrices. Blandit quam nec aliquam.</li>
                        </ul>
                    </div>
                </div>

                <div class="container row service_map1 mt-3">
                    <div class="col-md-4 map1_heading d-flex justify-content-center align-items-center text-center">
                        <h5 class="h5 fw-bold map2">Software Development</h5>
                    </div>
                    <div class="col-md-8 map1_content d-flex justify-content-center align-items-center">
                        <ul>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Blandit viverra porta tortor,
                                elementum
                                ultrices. Blandit quam nec aliquam.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Blandit viverra porta tortor,
                                elementum
                                ultrices. Blandit quam nec aliquam.</li>
                        </ul>
                    </div>
                </div>

                <div class="container row service_map1 mt-3">
                    <div class="col-md-4 map1_heading d-flex justify-content-center align-items-center text-center">
                        <h5 class="h5 fw-bold">Testing and QA</h5>
                    </div>
                    <div class="col-md-8 map1_content d-flex justify-content-center align-items-center">
                        <ul>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Blandit viverra porta tortor,
                                elementum
                                ultrices. Blandit quam nec aliquam.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Blandit viverra porta tortor,
                                elementum
                                ultrices. Blandit quam nec aliquam.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mt-3 mt-md-4 d-flex justify-content-center align-items-center text-center">
                <a href="" class="view_all_services fw-semibold text-decoration-none">View All Services</a>
            </div>
        </section>

        {{-- contact us --}}
        <section class="container my-5" id="contact">
            <div class="container img-fluid contact_us"
                style="background-image: url('{{ asset('img/contact_us_bg(3).png') }}')">
                <div class="text-center contact_heading mb-3 mb-md-4">
                    <h3 class="h3 fw-bold text-center">Contact Us</h3>
                </div>

                <div class="d-flex flex-column justify-content-center align-items-center contact_form_div">
                    <form action="" class="contact_form">
                        <div class="mb-2 mb-md-3">
                            <input type="text" name="" id="" class="form-control"
                                placeholder="Full Name" required>
                        </div>
                        <div class="mb-2 mb-md-3">
                            <input type="email" name="" id="" class="form-control"
                                placeholder="Email Address" required>
                        </div>
                        <div class="mb-2 mb-md-3">
                            <input type="tel" name="" id="" class="form-control"
                                placeholder="Phone Number" required>
                        </div>
                        <div class="mb-2 mb-md-3">
                            <textarea class="form-control" placeholder="Have anything to say?" name="" id="" rows="5"
                                required></textarea>
                        </div>
                        <button type="submit" class="btn contact_btn">Send</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    {{-- footer --}}
    <footer class="container mt-4 mt-md-5 mb-3 mb-md-4">
        <div class="container align-items-center">
            <div class="row footer">
                <div class="col-md-4">
                    <p>Company Name</p>
                </div>
                <div class="col-md-8">
                    <p>Company , 2022 &copy; All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to top button -->
    <button type="button" class="btn btn-floating btn-light" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/homepage.js') }}"></script>
</body>

</html>
