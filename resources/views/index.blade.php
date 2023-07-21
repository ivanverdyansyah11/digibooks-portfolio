<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- STYLE CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body id="home" style="padding-bottom: 100px">

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg py-3 navbar-dark position-relative">
        <div class="container d-flex justify-content-between">
            <div class="collapse navbar-collapse order-lg-1 order-3" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link py-2 py-lg-0 px-lg-3 active" href="#home">Home</a>
                    <a class="nav-link py-2 py-lg-0 px-lg-3" href="#about">About</a>
                    <a class="nav-link py-2 py-lg-0 px-lg-3" href="#collection">Collection</a>
                </div>
            </div>
            <a class="navbar-brand order-lg-2 order-1" href="#home">
                <img src="{{ asset('assets/img/logo/logo-brand.svg') }}" alt="Logo Brand" width="123">
            </a>
            <button class="navbar-toggler order-2 order-lg-3" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="wrapper-width d-none d-lg-flex justify-content-end order-4">
                <div class="wrapper d-flex gap-2">
                    <button class="button-icon d-flex justify-content-center align-items-center">
                        <div class="user-icon"></div>
                    </button>
                    <button class="button-icon d-flex justify-content-center align-items-center">
                        <div class="cart-icon"></div>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    {{-- END NAVBAR --}}

    <main>

        {{-- HERO SECTION --}}
        <section class="hero d-flex align-items-center py-4 py-lg-0 position-relative" id="hero">
            <div class="banner-image-reverse position-absolute d-none d-lg-inline-block pe-lg-4 pe-xxl-5 pt-4">
                <img src="{{ asset('assets/img/banner/hero-banner.svg') }}" class="img-fluid w-100 h-100"
                    alt="hero Banner Image">
            </div>
            <div class="container position-relative">
                <div class="row align-items-center pe-xl-4">
                    <div class="col-lg-7 pe-lg-5">
                        <h1 class="headline" style="margin-bottom: 26px;">The Digital Library Experience Begins Here
                        </h1>
                        <div class="wrapper-paragraph d-flex flex-column gap-2" style="margin-bottom: 42px;">
                            <p class="paragraph">Welcome to our digital library, where the world of knowledge awaits
                                you. Explore a vast collection of digital books, immerse yourself in captivating
                                stories, and embark on a journey of learning and discovery. Step into a realm where
                                books come to life. Our digital library offers a seamless reading experience with a
                                diverse range of genres and subjects.</p>
                            <p class="paragraph d-none d-md-inline-block">Discover a new way of accessing books with our
                                digital library. Enjoy the convenience of instant access to an extensive collection of
                                titles, from classic literature to contemporary bestsellers. Expand your mind and
                                broaden your horizons.</p>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-3 mb-4 mb-md-0">
                                <h2 style="margin-bottom: 8px;">407+</h2>
                                <p class="caption">Total Book Available</p>
                            </div>
                            <div class="col-6 col-md-3 mb-4 mb-md-0">
                                <h2 style="margin-bottom: 8px;">248+</h2>
                                <p class="caption">Digital Book Online</p>
                            </div>
                            <div class="col-6 col-md-3">
                                <h2 style="margin-bottom: 8px;">12+</h2>
                                <p class="caption">Total Our Team</p>
                            </div>
                            <div class="col-6 col-md-3">
                                <h2 style="margin-bottom: 8px;">145+</h2>
                                <p class="caption">Customers Active</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- END HERO SECTION --}}

        {{-- FEATURED SECTION --}}
        <section class="featured section-gap" id="featured">
            <div class="container">
                <div class="row align-items-end justify-content-between row-gap">
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <h3 class="title">Handpicked Recommendations Just for You</h3>
                    </div>
                    <div class="col-lg-5">
                        <p class="paragraph">Explore our handpicked featured collection, showcasing the best books
                            across various genres. From captivating novels to insightful non-fiction</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card-default">
                            <div class="card-image d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/featured/featured-1.svg') }}" class="img-fluid"
                                    alt="Featured Image" width="28" height="28">
                            </div>
                            <h6 style="margin: 14px 0 6px;">The Digital Revolution</h6>
                            <p class="paragraph-small">Explore the transformative power of the digital age in this
                                thought-provoking book by renowned author John Smith.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card-default">
                            <div class="card-image d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/featured/featured-2.svg') }}" class="img-fluid"
                                    alt="Featured Image" width="28" height="28">
                            </div>
                            <h6 style="margin: 14px 0 6px;">The Power of Imagination</h6>
                            <p class="paragraph-small">Immerse yourself in the enchanting voice of Academy
                                Award-winning
                                actress Emma Thompson as she narrates.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                        <div class="card-default">
                            <div class="card-image d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/featured/featured-3.svg') }}" class="img-fluid"
                                    alt="Featured Image" width="28" height="28">
                            </div>
                            <h6 style="margin: 14px 0 6px;">Literature's Hidden Meanings</h6>
                            <p class="paragraph-small">Delve into the depths of literary analysis with 'Beyond the
                                Pages.' This engaging eBook uncovers the hidden meanings.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card-default">
                            <div class="card-image d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/featured/featured-4.svg') }}" class="img-fluid"
                                    alt="Featured Image" width="28" height="28">
                            </div>
                            <h6 style="margin: 14px 0 6px;">The Adventures of Digibot</h6>
                            <p class="paragraph-small">Introduce young readers to the joy of reading. Join Digibot and
                                his lovable companions on exciting journeys.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- END FEATURED SECTION --}}

        {{-- ABOUT SECTION --}}
        <section class="about d-flex align-items-center py-4 py-lg-0 position-relative" id="about">
            <div class="banner-image position-absolute d-none d-lg-flex pe-lg-4 pe-xxl-5 justify-content-start">
                <img src="{{ asset('assets/img/banner/about-banner.svg') }}" class="img-fluid"
                    alt="About Banner Image">
            </div>
            <div class="container position-relative">
                <div class="row align-items-center pe-xl-4">
                    <div class="offset-lg-6 offset-xxl-5 col-lg-6 col-xxl-7 ps-xxl-4">
                        <h3 class="title" style="margin-bottom: 26px;">Transforming the Way You Access Information
                        </h3>
                        <div class="wrapper-paragraph d-flex flex-column gap-2" style="margin-bottom: 42px;">
                            <p class="paragraph">Welcome to our digital library, a dynamic platform dedicated to
                                empowering individuals through the power of digital reading. With a vast collection of
                                e-books, audiobooks, and interactive resources, we strive to connect readers with
                                knowledge, ideas, and endless learning opportunities.</p>
                            <p class="paragraph">At our digital library, we believe that
                                access to information should know no bounds. Our mission is to provide a convenient,
                                inclusive, and enriching digital reading experience. Discover a treasure trove of books,
                                expand your horizons, and embark on a lifelong journey of discovery.</p>
                        </div>
                        <div class="wrapper d-flex align-items-center gap-2">
                            <a href="#team" class="button-default">Discover Team</a>
                            <a href="#adventage" class="button-reverse d-flex align-items-center gap-2">
                                Our Adventages
                                <div class="arrow-icon"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- END ABOUT SECTION --}}

    </main>


    {{-- SCRIPT JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20
                }
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>

</html>
