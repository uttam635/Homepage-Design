<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Real Estate</title>
    <link rel="stylesheet" href="{{ asset('css/realEstateStyle.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        .hero {
            background-image: url('{{ asset('img/estate_hero_bg1.jpg') }}');
        }

        .subscribe {
            background-image: url('{{ asset('img/subscribe_bg.jpg') }}');
        }
    </style>
</head>

<body>
    <header class="fixed-top">
        <div class="logindiv p-2 container-fluid">
            <a href="" class="nav-link text-decoration-none text-white"><i class="fas fa-user"></i>
                Login/Signup</a>
        </div>

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="logo">
                    <a class="navbar-brand" href="#">
                        <svg width="30" height="38" viewBox="0 0 33 48" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M27.9621 35.4726V13.465L22.8904 14.9235V5.41725L10.1096 0V16.4341L12.7469 15.6788V3.62018L20.2193 6.8497V15.6788L17.8186 16.382V8.04775L15.1814 6.87575V17.1112L5.07172 20.0282V28.9094L0 27.4509V47.9479H17.8186V36.905L15.1814 36.1498V45.7862H2.6373V30.3939L10.1096 32.5296V41.4368H7.70902V34.0141L5.07172 33.2588V43.6245H12.7807V33.3109L30.3627 38.3635V45.8123H22.8904V40.5773L25.291 41.2805V43.6506H27.9283V39.8481L20.2193 37.6343V39.822V48H33V36.9571L27.9621 35.4726ZM25.291 34.7173L17.8186 32.5817V22.8931L20.2193 22.1899V31.1492L22.8566 31.9045V19.2729L15.1475 21.4867V31.8264L7.67521 29.6907V21.4346L10.0758 20.7314V28.2322L12.7131 28.9875V20.0022L25.291 16.408V34.7173Z"
                                fill="#10AC84" />
                        </svg>
                        Anywhere Door
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" id="navbarToggler">
                    <span class="navbar-toggler-icon menu-icon"></span>
                    <span class="btn-close d-none" aria-label="Close"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="navbar-nav d-flex align-items-center justify-content-end gap-0 gap-md-3">
                        <a href="#" class="nav-link active">Home</a>
                        <a href="#" class="nav-link">About Us</a>
                        <a href="#" class="nav-link">Property</a>
                        <a href="#" class="nav-link">Wallet</a>
                        <a href="#" class="nav-link">Contact Us</a>
                        <a href="#" class="nav-link">
                            <svg width="45" height="42" viewBox="0 0 45 42" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.257324" width="43.7557" height="42" fill="#10AC84" />
                                <path d="M12.7593 21H31.5117" stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M12.7593 15H31.5117" stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M12.7593 27H31.5117" stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    {{-- Hero section --}}
    <section>
        <div class="hero d-flex justify-content-center align-items-center">
            <div class="search">
                <h1 class="h1 text-white text-center">Find Your Dream Properties</h1>
                <div class="searchBox bg-white p-4">
                    <h6>Search Your Properties</h6>
                    <hr class="search_hr mt-0">
                    <div class="row searchDropdown">
                        <div class="col">
                            <p>Looking for</p>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle w-100" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Property Type
                                </button>
                                <ul class="dropdown-menu w-100">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <p>Property Size</p>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle w-100" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Type Location
                                </button>
                                <ul class="dropdown-menu w-100">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <p>Property Location</p>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle w-100" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Type Location
                                </button>
                                <ul class="dropdown-menu w-100">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col searchBtnDiv">
                            <span></span><br>
                            <div class="searchBtn">
                                Search
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- our feature property --}}
    <div class="propertyMain">
        <div class="pt-4 pt-md-5 text-center featureProperty">
            <h2>Our Feature Property</h2>
            <h6 class="text-center mx-auto">Anywhere Door provides you a Wide range of Featured Properties, You may
                visit them by Clicking.</h6>
        </div>
        <div class="container my-4 property-row">
            {{-- display on large device --}}
            <div class="row g-1 largeDevice-property-row">
                <div class="col-6 mb-3" data-aos="fade-up">
                    <div class="property-card">
                        <div class="property-image">
                            <img src="{{ asset('img/card1.jpg') }}" alt="property image1" class="img-fluid">
                            <div class="price-tag">$32000</div>
                        </div>
                        <div class="property-details">
                            <h5>Bravo Apollo Apartments</h5>
                            <p>There are many variations of passages of lorem Ipsum available, but the majority have
                                suffered
                                alteration in some form injected.</p>
                            <p>
                                <i class="fa-solid fa-location-dot"></i> 779 6th Ave New York, NY 120400
                            </p>
                            <div class="property-icons d-flex mt-2">
                                <div><i class="fa-solid fa-bed"></i> 4 Bed</div> <span>|</span>
                                <div><i class="fa-solid fa-bath"></i> 3 Bath</div> <span>|</span>
                                <div><i class="fa-solid fa-door-open"></i> 8 Rooms</div> <span>|</span>
                                <div><i class="fa-solid fa-ruler-combined"></i> 1574 sq</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-3" data-aos="fade-up">
                    <div class="property-card">
                        <div class="property-image">
                            <img src="{{ asset('img/card2.jpg') }}" alt="property image2" class="img-fluid">
                            <div class="price-tag">$32000</div>
                        </div>
                        <div class="property-details">
                            <h5>Bravo Apollo Apartments</h5>
                            <p>There are many variations of passages of lorem Ipsum available, but the majority have
                                suffered alteration in some form injected.</p>
                            <p><i class="fa-solid fa-location-dot"></i> 779 6th Ave New York, NY 120400</p>
                            <div class="property-icons d-flex mt-2">
                                <div><i class="fa-solid fa-bed"></i> 4 Bed</div> <span>|</span>
                                <div><i class="fa-solid fa-bath"></i> 3 Bath</div> <span>|</span>
                                <div><i class="fa-solid fa-door-open"></i> 8 Rooms</div> <span>|</span>
                                <div><i class="fa-solid fa-ruler-combined"></i> 1574 sq</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-3" data-aos="fade-up">
                    <div class="property-card">
                        <div class="property-image">
                            <img src="{{ asset('img/card3.jpg') }}" alt="property image1" class="img-fluid">
                            <div class="price-tag">$32000</div>
                        </div>
                        <div class="property-details">
                            <h5>Bravo Apollo Apartments</h5>
                            <p>There are many variations of passages of lorem Ipsum available, but the majority have
                                suffered
                                alteration in some form injected.</p>
                            <p>
                                <i class="fa-solid fa-location-dot"></i> 779 6th Ave New York, NY 120400
                            </p>
                            <div class="property-icons d-flex mt-2">
                                <div><i class="fa-solid fa-bed"></i> 4 Bed</div> <span>|</span>
                                <div><i class="fa-solid fa-bath"></i> 3 Bath</div> <span>|</span>
                                <div><i class="fa-solid fa-door-open"></i> 8 Rooms</div> <span>|</span>
                                <div><i class="fa-solid fa-ruler-combined"></i> 1574 sq</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-3" data-aos="fade-up">
                    <div class="property-card">
                        <div class="property-image">
                            <img src="{{ asset('img/card4.jpg') }}" alt="property image1" class="img-fluid">
                            <div class="price-tag">$32000</div>
                        </div>
                        <div class="property-details">
                            <h5>Bravo Apollo Apartments</h5>
                            <p>There are many variations of passages of lorem Ipsum available, but the majority have
                                suffered
                                alteration in some form injected.</p>
                            <p>
                                <i class="fa-solid fa-location-dot"></i> 779 6th Ave New York, NY 120400
                            </p>
                            <div class="property-icons d-flex mt-2">
                                <div><i class="fa-solid fa-bed"></i> 4 Bed</div> <span>|</span>
                                <div><i class="fa-solid fa-bath"></i> 3 Bath</div> <span>|</span>
                                <div><i class="fa-solid fa-door-open"></i> 8 Rooms</div> <span>|</span>
                                <div><i class="fa-solid fa-ruler-combined"></i> 1574 sq</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- display on 768px and below --}}
            <div class="row g-1 smallDevice-property-row">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="col-6 carousel-item active">
                            <div class="property-card">
                                <div class="property-image">
                                    <img src="{{ asset('img/card1.jpg') }}" alt="property image1" class="img-fluid">
                                    <div class="price-tag">$32000</div>
                                </div>
                                <div class="property-details">
                                    <h5>Bravo Apollo Apartments</h5>
                                    <p>There are many variations of passages of lorem Ipsum available, but the majority
                                        have
                                        suffered
                                        alteration in some form injected.</p>
                                    <p>
                                        <i class="fa-solid fa-location-dot"></i> 779 6th Ave New York, NY 120400
                                    </p>
                                    <div class="property-icons d-flex mt-2">
                                        <div><i class="fa-solid fa-bed"></i> 4 Bed</div> <span>|</span>
                                        <div><i class="fa-solid fa-bath"></i> 3 Bath</div> <span>|</span>
                                        <div><i class="fa-solid fa-door-open"></i> 8 Rooms</div> <span>|</span>
                                        <div><i class="fa-solid fa-ruler-combined"></i> 1574 sq</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 carousel-item">
                            <div class="property-card">
                                <div class="property-image">
                                    <img src="{{ asset('img/card2.jpg') }}" alt="property image2" class="img-fluid">
                                    <div class="price-tag">$32000</div>
                                </div>
                                <div class="property-details">
                                    <h5>Bravo Apollo Apartments</h5>
                                    <p>There are many variations of passages of lorem Ipsum available, but the majority
                                        have
                                        suffered alteration in some form injected.</p>
                                    <p><i class="fa-solid fa-location-dot"></i> 779 6th Ave New York, NY 120400</p>
                                    <div class="property-icons d-flex mt-2">
                                        <div><i class="fa-solid fa-bed"></i> 4 Bed</div> <span>|</span>
                                        <div><i class="fa-solid fa-bath"></i> 3 Bath</div> <span>|</span>
                                        <div><i class="fa-solid fa-door-open"></i> 8 Rooms</div> <span>|</span>
                                        <div><i class="fa-solid fa-ruler-combined"></i> 1574 sq</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 carousel-item">
                            <div class="property-card">
                                <div class="property-image">
                                    <img src="{{ asset('img/card3.jpg') }}" alt="property image1" class="img-fluid">
                                    <div class="price-tag">$32000</div>
                                </div>
                                <div class="property-details">
                                    <h5>Bravo Apollo Apartments</h5>
                                    <p>There are many variations of passages of lorem Ipsum available, but the majority
                                        have
                                        suffered
                                        alteration in some form injected.</p>
                                    <p>
                                        <i class="fa-solid fa-location-dot"></i> 779 6th Ave New York, NY 120400
                                    </p>
                                    <div class="property-icons d-flex mt-2">
                                        <div><i class="fa-solid fa-bed"></i> 4 Bed</div> <span>|</span>
                                        <div><i class="fa-solid fa-bath"></i> 3 Bath</div> <span>|</span>
                                        <div><i class="fa-solid fa-door-open"></i> 8 Rooms</div> <span>|</span>
                                        <div><i class="fa-solid fa-ruler-combined"></i> 1574 sq</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 carousel-item">
                            <div class="property-card">
                                <div class="property-image">
                                    <img src="{{ asset('img/card4.jpg') }}" alt="property image1" class="img-fluid">
                                    <div class="price-tag">$32000</div>
                                </div>
                                <div class="property-details">
                                    <h5>Bravo Apollo Apartments</h5>
                                    <p>There are many variations of passages of lorem Ipsum available, but the majority
                                        have
                                        suffered
                                        alteration in some form injected.</p>
                                    <p>
                                        <i class="fa-solid fa-location-dot"></i> 779 6th Ave New York, NY 120400
                                    </p>
                                    <div class="property-icons d-flex mt-2">
                                        <div><i class="fa-solid fa-bed"></i> 4 Bed</div> <span>|</span>
                                        <div><i class="fa-solid fa-bath"></i> 3 Bath</div> <span>|</span>
                                        <div><i class="fa-solid fa-door-open"></i> 8 Rooms</div> <span>|</span>
                                        <div><i class="fa-solid fa-ruler-combined"></i> 1574 sq</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- indicators --}}
                    <div class="p-3">
                        <ul class="carousel-indicators list-circle">
                            <li data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active">
                            </li>
                            <li data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2"></li>
                            <li data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="3"></li>
                        </ul>
                    </div>
                    {{-- pre - next button --}}
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="fa-solid fa-chevron-left" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="fa-solid fa-chevron-right" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center align-items-center pb-4">
            <div class="text-center property-link my-2">
                <a href="" class="text-decoration-none text-white">See More Property</a>
            </div>
        </div>
    </div>

    {{-- subscribe --}}
    <div class="subscribe text-white p-5">
        <div class="container px-4">
            <div class="row justify-content-center g-4 g-md-5">
                <div class="col-md-4 col-12">
                    <p class="subscribe-text">Subscribe Our Email Address
                        For Future Lettest News & Updates</p>
                </div>
                <div class="col-md-4 col-12 position-relative">
                    <input type="email" class="form-control subscribe-input" id="emailInput"
                        aria-label="Email address" placeholder="Type your email address">
                    <div class="submit-icon">
                        <a href="">
                            <svg width="20" height="18" viewBox="0 0 29 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M28.5586 8.85831L28.5572 8.85677L20.6936 0.469672C20.1045 -0.158634 19.1516 -0.156296 18.5652 0.475156C17.9789 1.10653 17.9812 2.12774 18.5703
                                2.75612L23.8499 8.3871H1.50494C0.673763 8.3871 0 9.10919 0 10C0 10.8908 0.673763 11.6129 1.50494 11.6129H23.8498L18.5703 17.2439C17.9812 17.8723
                                17.979 18.8935 18.5653 19.5248C19.1517 20.1564 20.1046 20.1586 20.6937 19.5303L28.5573 11.1432L28.5587 11.1417C29.1481 10.5112 29.1462 9.48669 28.5586 8.85831Z"
                                    fill="#10AC84" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Recomended for you --}}
    <div class="recomended_main">
        <div class="container py-5 recomended_div">
            <div class="row recommended-section mx-auto">
                <div class="col-md-6 col-12 recomended-heading">
                    <h1>Recomended For You</h1>
                    <p>There are many variations of choosing a property because everyone has their Own perspective.</p>
                </div>

                <div class="col-md-6 col-12 d-flex justify-content-center align-items-center">
                    <div class="text-center property-link">
                        <a href="" class="text-decoration-none text-white">See More Property</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="carouselExample" class="carousel slide position-relative">
            <div class="apartment-bg"></div>
            <div class="carousel-inner">
                <div class="justify-content-center align-items-center p-4 carousel-item active">
                    <div class="row d-flex justify-content-center w-100 apartment-row">
                        <div class="col-12 col-md-4 align-items-start pe-md-4 mb-3 apartment-col">
                            <input type="text" value="05/01" readonly class="apartment-number p-2">
                            <h3 class="apartment-name">Bravo Apollo Apartments</h3>
                            <h3 class="apartment-price">$3200</h3>
                            <p class="apartment-p">There are many variations of passages of Lorem Ipsum available, but
                                the majority have suffered alteration in some form by injected humour.</p>
                            <p class="apartment-p"><svg class="location-svg" viewBox="0 0 17 23" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.5 0.202637C3.80534 0.202637 0 3.94982 0 8.57152C0 11.315 2.99488 16.5235 5.42904 20.3038C7.05935 22.8356 9.94065 22.8356 11.571 20.3038C14.0051 16.523 17 11.315 17 8.57152C17 3.94928 13.1947 0.202637 8.5 0.202637ZM8.5 12.5071C6.16563 12.5071 4.27288 10.6435 4.27288 8.34516C4.27288 6.04679 6.16563 4.18324 8.5 4.18324C10.8344 4.18324 12.7271 6.04679 12.7271 8.34516C12.7271 10.6435 10.8344 12.5071 8.5 12.5071Z"
                                        fill="white" />
                                </svg>&nbsp; 779 6th Ave New York, NY 120400
                            </p>
                            <div class="apartment-icons d-flex">
                                <div class="pe-3"><i class="fa-solid fa-bed"></i> 4 Bed</div> <span>|</span>
                                <div class="px-3"><i class="fa-solid fa-bath"></i> 3 Bath</div> <span>|</span>
                                <div class="px-3"><i class="fa-solid fa-door-open"></i> 1574 sq</div> <span>|</span>
                                <div class="px-3"><i class="fa-solid fa-ruler-combined"></i> 8 Rooms</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 ps-md-4 apartment-col">
                            <img src="{{ asset('img/recomended.jpg') }}" alt="recomended img" class="apartment_img">
                        </div>
                    </div>
                </div>
                <div class="justify-content-center align-items-center p-4 carousel-item">
                    <div class="row d-flex justify-content-center w-100 apartment-row">
                        <div class="col-12 col-md-4 align-items-start pe-md-4 mb-3 apartment-col">
                            <input type="text" value="05/02" readonly class="apartment-number p-2">
                            <h3 class="apartment-name">Bravo Apollo Apartments</h3>
                            <h3 class="apartment-price">$3200</h3>
                            <p class="apartment-p">There are many variations of passages of Lorem Ipsum available, but
                                the majority have suffered alteration in some form by injected humour.</p>
                            <p class="apartment-p"><svg width="17" height="23" viewBox="0 0 17 23"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.5 0.202637C3.80534 0.202637 0 3.94982 0 8.57152C0 11.315 2.99488 16.5235 5.42904 20.3038C7.05935 22.8356 9.94065 22.8356 11.571 20.3038C14.0051 16.523 17 11.315 17 8.57152C17 3.94928 13.1947 0.202637 8.5 0.202637ZM8.5 12.5071C6.16563 12.5071 4.27288 10.6435 4.27288 8.34516C4.27288 6.04679 6.16563 4.18324 8.5 4.18324C10.8344 4.18324 12.7271 6.04679 12.7271 8.34516C12.7271 10.6435 10.8344 12.5071 8.5 12.5071Z"
                                        fill="white" />
                                </svg>&nbsp; 779 6th Ave New York, NY 120400
                            </p>
                            <div class="apartment-icons d-flex">
                                <div class="pe-3"><i class="fa-solid fa-bed"></i> 4 Bed</div> <span>|</span>
                                <div class="px-3"><i class="fa-solid fa-bath"></i> 3 Bath</div> <span>|</span>
                                <div class="px-3"><i class="fa-solid fa-door-open"></i> 1574 sq</div> <span>|</span>
                                <div class="px-3"><i class="fa-solid fa-ruler-combined"></i> 8 Rooms</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 ps-md-4">
                            <img src="{{ asset('img/recomended.jpg') }}" alt="recomended img" class="apartment_img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-white d-flex justify-content-center navigator">
                <i class="fa-solid fa-arrow-left m-2" data-bs-target="#carouselExample" data-bs-slide="prev"></i>
                <p class="mt-1 text-white">|</p>
                <i class="fa-solid fa-arrow-right m-2" data-bs-target="#carouselExample" data-bs-slide="next"></i>
            </div>
        </div>
    </div>

    {{-- Find properties --}}
    <div class="find-properties">
        <div class="d-flex flex-column justify-content-center align-items-center find-heading">
            <h1 class="mb-md-3 mb-2">Find Properties In These Cities</h1>
            <h6>Now , you can find Properties in Your Favourite cities</h6>
        </div>

        <div class="container text-center d-flex justify-content-center align-items-center my-md-4 my-3">
            <div class="row g-1 find-properties-row my-md-4 my-3">
                <div class="col-md-4 col-6 mb-md-3 mb-0 find-properties-col" data-aos="fade-up">
                    <div class="find-propertie-wrapper">
                        <img src="{{ asset('img/findPropertie1.jpg') }}" alt="los angeles"
                            class="find-propertie-img">
                        <h6 class=""><svg viewBox="0 0 19 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.5 0C4.25303 0 0 4.08784 0 9.12969C0 12.1226 3.34721 17.8046 6.06775 21.9285C7.88986 24.6905 11.1101 24.6905 12.9322 21.9285C15.6528 17.804 19 12.1226 19 9.12969C19 4.08725 14.747 0 9.5 0ZM9.5 13.423C6.891 13.423 4.77557 11.3901 4.77557 8.88275C4.77557 6.37544 6.891 4.34248 9.5 4.34248C12.109 4.34248 14.2244 6.37544 14.2244 8.88275C14.2244 11.3901 12.109 13.423 9.5 13.423Z"
                                    fill="white" />
                            </svg> Los Angeles
                        </h6>
                    </div>
                </div>
                <div class="col-md-4 col-6 find-properties-col" data-aos="fade-up">
                    <div class="find-propertie-wrapper">
                        <img src="{{ asset('img/findPropertie2.jpg') }}" alt="New York" class="find-propertie-img">
                        <h6 class=""><svg viewBox="0 0 19 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.5 0C4.25303 0 0 4.08784 0 9.12969C0 12.1226 3.34721 17.8046 6.06775 21.9285C7.88986 24.6905 11.1101 24.6905 12.9322 21.9285C15.6528 17.804 19 12.1226 19 9.12969C19 4.08725 14.747 0 9.5 0ZM9.5 13.423C6.891 13.423 4.77557 11.3901 4.77557 8.88275C4.77557 6.37544 6.891 4.34248 9.5 4.34248C12.109 4.34248 14.2244 6.37544 14.2244 8.88275C14.2244 11.3901 12.109 13.423 9.5 13.423Z"
                                    fill="white" />
                            </svg> New York
                        </h6>
                    </div>
                </div>
                <div class="col-md-4 col-6 find-properties-col" data-aos="fade-up">
                    <div class="find-propertie-wrapper">
                        <img src="{{ asset('img/findPropertie3.jpg') }}" alt="san antonio"
                            class="find-propertie-img">
                        <h6 class=""><svg viewBox="0 0 19 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.5 0C4.25303 0 0 4.08784 0 9.12969C0 12.1226 3.34721 17.8046 6.06775 21.9285C7.88986 24.6905 11.1101 24.6905 12.9322 21.9285C15.6528 17.804 19 12.1226 19 9.12969C19 4.08725 14.747 0 9.5 0ZM9.5 13.423C6.891 13.423 4.77557 11.3901 4.77557 8.88275C4.77557 6.37544 6.891 4.34248 9.5 4.34248C12.109 4.34248 14.2244 6.37544 14.2244 8.88275C14.2244 11.3901 12.109 13.423 9.5 13.423Z"
                                    fill="white" />
                            </svg> San Antonio
                        </h6>
                    </div>
                </div>
                <div class="col-md-4 col-6 find-properties-col" data-aos="fade-up">
                    <div class="find-propertie-wrapper">
                        <img src="{{ asset('img/findPropertie4.jpg') }}" alt="san francisco"
                            class="find-propertie-img">
                        <h6 class=""><svg viewBox="0 0 19 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.5 0C4.25303 0 0 4.08784 0 9.12969C0 12.1226 3.34721 17.8046 6.06775 21.9285C7.88986 24.6905 11.1101 24.6905 12.9322 21.9285C15.6528 17.804 19 12.1226 19 9.12969C19 4.08725 14.747 0 9.5 0ZM9.5 13.423C6.891 13.423 4.77557 11.3901 4.77557 8.88275C4.77557 6.37544 6.891 4.34248 9.5 4.34248C12.109 4.34248 14.2244 6.37544 14.2244 8.88275C14.2244 11.3901 12.109 13.423 9.5 13.423Z"
                                    fill="white" />
                            </svg> San Francisco
                        </h6>
                    </div>
                </div>
                <div class="col-md-4 col-6 find-properties-col" data-aos="fade-up">
                    <div class="find-propertie-wrapper">
                        <img src="{{ asset('img/findPropertie5.jpg') }}" alt="las vegas" class="find-propertie-img">
                        <h6 class="text-start"><svg viewBox="0 0 19 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.5 0C4.25303 0 0 4.08784 0 9.12969C0 12.1226 3.34721 17.8046 6.06775 21.9285C7.88986 24.6905 11.1101 24.6905 12.9322 21.9285C15.6528 17.804 19 12.1226 19 9.12969C19 4.08725 14.747 0 9.5 0ZM9.5 13.423C6.891 13.423 4.77557 11.3901 4.77557 8.88275C4.77557 6.37544 6.891 4.34248 9.5 4.34248C12.109 4.34248 14.2244 6.37544 14.2244 8.88275C14.2244 11.3901 12.109 13.423 9.5 13.423Z"
                                    fill="white" />
                            </svg> Las Vegas <br> (We have 53 property)
                        </h6>
                    </div>
                </div>
                <div class="col-md-4 col-6 find-properties-col" data-aos="fade-up">
                    <div class="find-propertie-wrapper">
                        <img src="{{ asset('img/findPropertie6.jpg') }}" alt="san bernardino"
                            class="find-propertie-img">
                        <h6 class=""><svg viewBox="0 0 19 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.5 0C4.25303 0 0 4.08784 0 9.12969C0 12.1226 3.34721 17.8046 6.06775 21.9285C7.88986 24.6905 11.1101 24.6905 12.9322 21.9285C15.6528 17.804 19 12.1226 19 9.12969C19 4.08725 14.747 0 9.5 0ZM9.5 13.423C6.891 13.423 4.77557 11.3901 4.77557 8.88275C4.77557 6.37544 6.891 4.34248 9.5 4.34248C12.109 4.34248 14.2244 6.37544 14.2244 8.88275C14.2244 11.3901 12.109 13.423 9.5 13.423Z"
                                    fill="white" />
                            </svg> San Bernardino
                    </div>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center">
            <div class="text-center property-link mb-md-5 mb-4">
                <a href="" class="text-decoration-none text-white">See All Cities</a>
            </div>
        </div>
    </div>

    {{-- App download --}}
    <div class="app-download">
        <div class="container pt-5">
            <div class="row align-items-center app-download-row">
                <div class="col-6 text-white app-download-col download-col">
                    <div>
                        <h1 class="fw-bold mb-4">Buy property anytime from <br> Anywhere Door<h1>
                                <p class="mb-5">Very soon a App will be launched for Anywhere door , Then you can
                                    easily scroll properties on you Smartphones.</p>
                                <div class="d-flex gap-3 download-btn">
                                    <a href="#"
                                        class="btn btn-light d-flex align-items-center gap-2 px-md-4 py-md-2 px-1 py-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_2_125)">
                                                <path
                                                    d="M21.7509 10.2891L4.20391 0.258971C3.90139 0.0861714 3.56459 0 3.22779 0C3.22094 0 3.21419 0.000914286 3.20745 0.000914286C3.16219 0.00137143 3.11705 0.00365714 3.07202 0.0072C3.05168 0.0088 3.03145 0.0109714 3.01111 0.0132571C2.97591 0.0171429 2.94082 0.0220571 2.90585 0.0278857C2.89316 0.0300571 2.88036 0.0307429 2.86768 0.0331429L2.86836 0.0340571C2.64974 0.0744 2.43636 0.151429 2.23808 0.266514C1.63076 0.618857 1.25694 1.26789 1.25694 1.96994V22.0302C1.25694 22.7322 1.63076 23.3813 2.23808 23.7336C2.43625 23.8487 2.64962 23.9258 2.86825 23.9662L2.86768 23.967C2.87911 23.9691 2.89065 23.9698 2.90196 23.9717C2.93956 23.9781 2.97728 23.9833 3.01511 23.9873C3.03408 23.9894 3.05294 23.9914 3.07191 23.9929C3.11636 23.9965 3.16071 23.9985 3.20528 23.9991C3.21282 23.9992 3.22025 24.0001 3.22779 24.0001C3.56459 24.0001 3.90139 23.9139 4.20391 23.7411L21.7509 13.7109C22.3644 13.3601 22.743 12.7078 22.743 12.0009C22.743 12.0009 22.743 12.0006 22.743 12.0005C22.743 12.0005 22.743 12.0001 22.743 12C22.743 12 22.743 11.9997 22.743 11.9995C22.743 11.9995 22.743 11.9992 22.743 11.9991C22.743 11.2923 22.3644 10.64 21.7509 10.2891ZM14.8117 8.29726L13.067 10.5861L8.62814 4.76251L14.8117 8.29726ZM20.9001 12.2225L8.62814 19.2375L16.312 9.1568L20.9 11.7793C20.9795 11.8247 21.0288 11.9097 21.0288 12.0008C21.0287 12.0922 20.9793 12.1773 20.9001 12.2225Z"
                                                    fill="#10AC84" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_2_125">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        Google Play
                                    </a>
                                    <a href="#"
                                        class="btn btn-outline-light d-flex align-items-center gap-2 px-md-4 py-md-2 px-1 py-1 Apple">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.4989 0C15.2195 0.0884995 13.724 0.907495 12.8525 1.97399C12.0575 2.94148 11.4035 4.37847 11.6585 5.77497C13.0565 5.81847 14.501 4.97997 15.338 3.89548C16.121 2.88598 16.7134 1.45799 16.4989 0Z"
                                                fill="white" />
                                            <path
                                                d="M21.5554 8.05167C20.327 6.51118 18.6005 5.61719 16.97 5.61719C14.8175 5.61719 13.907 6.64768 12.4115 6.64768C10.8695 6.64768 9.69801 5.62019 7.83652 5.62019C6.00803 5.62019 4.06105 6.73768 2.82655 8.64867C1.09106 11.3397 1.38806 16.3991 4.20055 20.7086C5.20704 22.2506 6.55103 23.9846 8.30902 23.9996C9.87351 24.0146 10.3145 22.9961 12.434 22.9856C14.5535 22.9736 14.9555 24.0131 16.517 23.9966C18.2765 23.9831 19.694 22.0616 20.7004 20.5196C21.4219 19.4141 21.6904 18.8576 22.2499 17.6096C18.1805 16.0601 17.528 10.2732 21.5554 8.05167Z"
                                                fill="white" />
                                        </svg>
                                        Apple Store
                                    </a>
                                </div>
                    </div>
                </div>
                <div class="col-6 app-download-col mobile-col">
                    <div class="mobile-col-img">
                        <img src="{{ asset('img/mobile1.png') }}" alt="Mobile 1" class="mobile1">
                        <img src="{{ asset('img/mobile2.png') }}" alt="Mobile 2" class="mobile2">
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Property News --}}
    <div class="propertyRadial">
        {{-- Property news for medium device --}}
        <div>
            <div class="container text-center p-md-5 p-4 news-heading">
                <h1 class="mb-md-4 mb-1">Our Latest Property News</h1>
                <h6>In this section, We are adding latest properties that are listed on Anywhere door.</h6>
            </div>
            <div class="property-news">
                <div class="my-3 container d-flex justify-content-center">
                    <div class="row g-4 slider">
                        <div class="col-4 d-flex justify-content-center" data-aos="zoom-in">
                            <div class="card border-top-0 border-end-0 border-start-0 rounded-0 border-2 cardBorder"
                                style="width: 18rem;">
                                <img src="{{ asset('img/news1.jpg') }}" class="card-img-top" alt="...">
                                <div class="position-absolute news-date mt-4 ms-3 p-2 text-center text-white">
                                    <h6 class="">20 April</h6>
                                </div>
                                <div class="card-body px-0">
                                    <h6 class="mb-3">Appartment</h6>
                                    <h5 class="card-title mb-3">Top Title Insurer Exposed.</h5>
                                    <p class="card-text">It is a long established fact that a reader is will be
                                        distracted by the readable....</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 d-flex justify-content-center" data-aos="zoom-in">
                            <div class="card border-top-0 border-start-0 border-end-0 border-2 rounded-0 cardBorderActive active"
                                style="width: 18rem;">
                                <img src="{{ asset('img/news2.jpg') }}" class="card-img-top" alt="...">
                                <div class="position-absolute news-date mt-4 ms-3 p-2 text-center text-white">
                                    <h6 class="">19 April</h6>
                                </div>
                                <div class="card-body px-0">
                                    <h6 class="mb-3">Appartment</h6>
                                    <h5 class="card-title mb-3">Top Title Insurer Exposed.</h5>
                                    <p class="card-text">It is a long established fact that a reader is will be
                                        distracted
                                        by the readable....</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 d-flex justify-content-center" data-aos="zoom-in">
                            <div class="card border-top-0 border-end-0 border-start-0 border-2 rounded-0 cardBorder"
                                style="width: 18rem;">
                                <img src="{{ asset('img/news3.jpg') }}" class="card-img-top" alt="...">
                                <div class="position-absolute news-date mt-4 ms-3 p-2 text-center text-white">
                                    <h6 class="">18 April</h6>
                                </div>
                                <div class="card-body px-0">
                                    <h6 class="mb-3">Appartment</h6>
                                    <h5 class="card-title mb-3">Top Title Insurer Exposed.</h5>
                                    <p class="card-text">It is a long established fact that a reader is will be
                                        distracted
                                        by the readable....</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        {{-- 425px and below --}}
        <div class="property-news-426">
            <div id=" carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center">
                            <div class="card border-0" style="width: 18rem;">
                                <img src="{{ asset('img/news1.jpg') }}" class="card-img-top" alt="...">
                                <div class="position-absolute news-date mt-4 ms-3 p-2 text-center text-white">
                                    <h6 class="">20 April</h6>
                                </div>
                                <div class="card-body px-0">
                                    <h6 class="mb-3">Appartment</h6>
                                    <h5 class="card-title mb-3">Top Title Insurer Exposed.</h5>
                                    <p class="card-text">It is a long established fact that a reader is will be
                                        distracted by the readable....</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <div class="card border-0" style="width: 18rem;">
                                <img src="{{ asset('img/news2.jpg') }}" class="card-img-top" alt="...">
                                <div class="position-absolute news-date mt-4 ms-3 p-2 text-center text-white">
                                    <h6 class="">19 April</h6>
                                </div>
                                <div class="card-body px-0">
                                    <h6 class="mb-3">Appartment</h6>
                                    <h5 class="card-title mb-3">Top Title Insurer Exposed.</h5>
                                    <p class="card-text">It is a long established fact that a reader is will be
                                        distracted by the readable....</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <div class="card border-0" style="width: 18rem;">
                                <img src="{{ asset('img/news3.jpg') }}" class="card-img-top" alt="...">
                                <div class="position-absolute news-date mt-4 ms-3 p-2 text-center text-white">
                                    <h6 class="">18 April</h6>
                                </div>
                                <div class="card-body px-0">
                                    <h6 class="mb-3">Appartment</h6>
                                    <h5 class="card-title mb-3">Top Title Insurer Exposed.</h5>
                                    <p class="card-text">It is a long established fact that a reader is will be
                                        distracted by the readable....</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br><br>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2" class=""></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3" class=""></button>
                </div>
            </div>
        </div>

        <div class="container d-flex justify-content-center">
            <div class="text-center property-link mt-md-5 mt-4 mb-md-5 mb-4">
                <a href="" class="text-decoration-none text-white">See All Cities</a>
            </div>
        </div>

    </div>

    {{-- Footer --}}
    <footer>
        <div class="firstFooter">
            <div class="container footer py-5">
                <h5><a href="" class="text-decoration-none text-black"><svg class="foterLogo"
                            viewBox="0 0 32 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2_64)">
                                <path
                                    d="M27.1148 42.1466V15.9984L22.1967 17.7313V6.43648L9.80328 0V19.5261L12.3607 18.6287V4.3013L19.6066 8.13844V18.6287L17.2787 19.4642V9.56189L14.7213 8.16938V20.3306L4.91803 23.7964V34.3485L0 32.6156V56.9691H17.2787V43.8485L14.7213 42.9511V54.4007H2.55738V36.1124L9.80328 38.6498V49.2329H7.47541V40.4137L4.91803 39.5163V51.8323H12.3934V39.5782L29.4426 45.5814V54.4316H22.1967V48.2117L24.5246 49.0472V51.8632H27.082V47.3453L19.6066 44.715V47.3143V57.031H32V43.9104L27.1148 42.1466ZM24.5246 41.2492L17.2787 38.7117V27.2003L19.6066 26.3648V37.0098L22.1639 37.9072V22.899L14.6885 25.5293V37.8143L7.44262 35.2769V25.4674L9.77049 24.6319V33.544L12.3279 34.4414V23.7655L24.5246 19.4951V41.2492Z"
                                    fill="#10AC84" />
                            </g>
                            <defs>
                                <clipPath id="clip0_2_64">
                                    <rect width="32" height="57" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        Anywhere Door</a></h5>
                <h6>Let Anywhere Door finds you!</h6>
            </div>

            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4 col-11 bg-white p-2 py-4 rounded shadow-sm">
                        <div class="d-flex px-md-4 px-2 gap-2 mb-3">
                            <div><svg class="footerSVG" viewBox="0 0 60 60" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="30" cy="30" r="30" fill="#10AC84" />
                                    <g clip-path="url(#clip0_2_54)">
                                        <path
                                            d="M40.0742 33.7533C38.6049 33.7533 37.1621 33.5234 35.7949 33.0716C35.125 32.8431 34.3014 33.0528 33.8926 33.4727L31.194 35.5098C28.0644 33.8393 26.1367 31.9121 24.4889 28.8061L26.4661 26.1778C26.9798 25.6648 27.1641 24.9154 26.9433 24.2123C26.4896 22.8379 26.2591 21.3959 26.2591 19.9259C26.2591 18.8639 25.3952 18 24.3333 18H19.9258C18.8639 18 18 18.8639 18 19.9258C18 32.0977 27.9024 42 40.0742 42C41.1361 42 42.0001 41.1361 42.0001 40.0742V35.679C42 34.6172 41.1361 33.7533 40.0742 33.7533Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2_54">
                                            <rect width="24" height="24" fill="white"
                                                transform="translate(18 18)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="call">
                                <h6>Call Now</h6>
                                <h5>+123 454564446</h5>
                            </div>
                        </div>
                        <div class="d-flex px-md-4 px-2 gap-2 mb-3">
                            <div>
                                <svg class="footerSVG" viewBox="0 0 60 60" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="30" cy="30" r="30" fill="#10AC84" />
                                    <g clip-path="url(#clip0_2_46)">
                                        <path
                                            d="M26.75 35.6121V40.2501C26.75 40.5741 26.958 40.8611 27.266 40.9631C27.343 40.9881 27.422 41.0001 27.5 41.0001C27.734 41.0001 27.96 40.8901 28.104 40.6941L30.817 37.0021L26.75 35.6121Z"
                                            fill="white" />
                                        <path
                                            d="M41.685 18.1388C41.455 17.9758 41.153 17.9538 40.903 18.0848L18.403 29.8348C18.137 29.9738 17.98 30.2578 18.002 30.5568C18.025 30.8568 18.224 31.1128 18.507 31.2098L24.762 33.3478L38.083 21.9578L27.775 34.3768L38.258 37.9598C38.336 37.9858 38.418 37.9998 38.5 37.9998C38.636 37.9998 38.771 37.9628 38.89 37.8908C39.08 37.7748 39.209 37.5798 39.242 37.3608L41.992 18.8608C42.033 18.5808 41.915 18.3028 41.685 18.1388Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2_46">
                                            <rect width="24" height="24" fill="white"
                                                transform="translate(18 18)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="email">
                                <h6>Email US</h6>
                                <h5>saxenaanant870@gmail.com</h5>
                            </div>
                        </div>
                        <div class="d-flex px-md-4 px-2 gap-2 mb-3">
                            <div><svg class="footerSVG" viewBox="0 0 60 60" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="30" cy="30" r="30" fill="#10AC84" />
                                    <path
                                        d="M29.5 18C24.253 18 20 22.0878 20 27.1297C20 30.1226 23.3472 35.8046 26.0677 39.9285C27.8899 42.6905 31.1101 42.6905 32.9323 39.9285C35.6528 35.804 39 30.1226 39 27.1297C39 22.0872 34.747 18 29.5 18ZM29.5 31.423C26.891 31.423 24.7756 29.3901 24.7756 26.8827C24.7756 24.3754 26.891 22.3425 29.5 22.3425C32.109 22.3425 34.2244 24.3754 34.2244 26.8827C34.2244 29.3901 32.109 31.423 29.5 31.423Z"
                                        fill="white" />
                                </svg>
                            </div>
                            <div class="office">
                                <h6>Our Office</h6>
                                <h5>Park street New York, USA</h5>
                            </div>
                        </div>
                        <div class="px-4 footerP">
                            <p>There are many variations of passages of Lorem Ipsum available</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-12 footerCol2 d-flex justify-content-center">
                        <div>
                            <h5>About Us</h5>
                            <h6><a href="" class="text-decoration-none text-black">How It Works</a></h6>
                            <h6>Meet Our Team</h6>
                            <h6>Help Desk</h6>
                            <h6>Plans & Pricing</h6>
                        </div>
                    </div>

                    <div class="col-md-4 col-12 footerCol3 d-flex justify-content-center">
                        <div>
                            <h5>Quick Links</h5>
                            <h6>Home</h6>
                            <h6>Our Services</h6>
                            <h6>About Us</h6>
                            <h6>Contact Us</h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="secondFooter text-center text-white">
            <h6 class="p-3">copyright @Uttam parmar</h6>
        </div>
    </footer>

    {{-- back to top --}}
    <button class="btn position-fixed rounded-circle text-white p-2 btn-outline-light" id="btn-back-to-top"
        onclick="topfunction()" title="Go to Top">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <script src="{{ asset('js/realEstateScript.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
