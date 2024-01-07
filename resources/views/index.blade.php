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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- END STYLE --}}
</head>

<body id="home">
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
                        <h3 class="title" data-aos="fade-right" data-aos-duration="1600">Handpicked Recommendations Just for You</h3>
                    </div>
                    <div class="col-lg-5">
                        <p class="paragraph" data-aos="fade-left" data-aos-duration="1600">Explore our handpicked featured collection, showcasing the best books
                            across various genres. From captivating novels to insightful non-fiction</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-left" data-aos-duration="1600">
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
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-left" data-aos-duration="1600" data-aos-delay="600">
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
                    <div class="col-md-6 col-lg-3 mb-4 mb-md-0" data-aos="fade-left" data-aos-duration="1600" data-aos-delay="1200">
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
                    <div class="col-md-6 col-lg-3" data-aos="fade-left" data-aos-duration="1600" data-aos-delay="1800">
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
                            <p class="paragraph d-lg-none d-xl-inline-block">At our digital library, we believe that
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

        {{-- COLLECTION SECTION --}}
        <section class="collection section-gap" id="collection">
            <div class="container">
                <div class="row align-items-end justify-content-between row-gap">
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <h3 class="title">Endless Possibilities, Boundless Books</h3>
                    </div>
                    <div class="col-lg-5">
                        <p class="paragraph">Welcome to our extensive digital collection of books. Immerse yourself in
                            a world of captivating narratives, engaging non-fiction, and thought-provoking literature.
                        </p>
                    </div>
                </div>
                <div class="row row-gap">
                    <div class="col-lg-6 mb-4">
                        <div class="card-default d-flex align-items-center gap-4">
                            <img src="{{ asset('assets/img/collection/collection-1.svg') }}"
                                class="d-none d-md-inline-block img-collection img-fluid" alt="Collection Image">
                            <div class="wrapper">
                                <p class="author">Nisrina Putri Utami</p>
                                <h5 style="margin: 6px 0 10px;">A.dap.ta.si</h5>
                                <p class="paragraph-small" style="margin-bottom: 20px;">Seperti bumi yang terus
                                    berputar, perubahan akan selalu
                                    hadir menghampiri kita. Siap tidak siap, suka tidak suka, kita akan menghadapi
                                    perubahan dalam tiap fase kehidupan.</p>
                                <div class="wrapper d-flex flex-column gap-2">
                                    <a href="#" class="text-center button-default" style="width: 100%;">Buy
                                        Now</a>
                                    <a href="#" class="text-center button-reverse" style="width: 100%;">Online
                                        Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="card-default d-flex align-items-center gap-4">
                            <img src="{{ asset('assets/img/collection/collection-2.svg') }}"
                                class="d-none d-md-inline-block img-collection img-fluid" alt="Collection Image">
                            <div class="wrapper">
                                <p class="author">Devi Ardiyanti</p>
                                <h5 style="margin: 6px 0 10px;">Life Has Its Time</h5>
                                <p class="paragraph-small" style="margin-bottom: 20px;">Energi yang terkuras hari ini
                                    masih bisa terisi seusai beristirahat. Akan tetapi, pengetahuan yang habis hari ini
                                    tanpa diisi kembali, maka ia akan kosong. Kekosongan yang terjadi ...</p>
                                <div class="wrapper d-flex flex-column gap-2">
                                    <a href="#" class="text-center button-default" style="width: 100%;">Buy
                                        Now</a>
                                    <a href="#" class="text-center button-reverse" style="width: 100%;">Online
                                        Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="card-default d-flex align-items-center gap-4">
                            <img src="{{ asset('assets/img/collection/collection-3.svg') }}"
                                class="d-none d-md-inline-block img-collection img-fluid" alt="Collection Image">
                            <div class="wrapper">
                                <p class="author">Jeong Moon Jeong</p>
                                <h5 style="margin: 6px 0 10px;">Bahagia Tanpa Tapi</h5>
                                <p class="paragraph-small" style="margin-bottom: 20px;">Tak perlu sempurna untuk
                                    meraih kehidupan yang diidamkan Bahagia tanpa tapi... mungkinkah? Hidup dalam
                                    masyarakat yang menetapkan standar tertentu sering menempatkan kita ...</p>
                                <div class="wrapper d-flex flex-column gap-2">
                                    <a href="#" class="text-center button-default" style="width: 100%;">Buy
                                        Now</a>
                                    <a href="#" class="text-center button-reverse" style="width: 100%;">Online
                                        Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="card-default d-flex align-items-center gap-4">
                            <img src="{{ asset('assets/img/collection/collection-4.svg') }}"
                                class="d-none d-md-inline-block img-collection img-fluid" alt="Collection Image">
                            <div class="wrapper">
                                <p class="author">Paul Pearsall</p>
                                <h5 style="margin: 6px 0 10px;">Toxic Success</h5>
                                <p class="paragraph-small" style="margin-bottom: 20px;">Di tengah dunia yang riuh,
                                    “berisik”, serba cepat, dan penuh stimulasi berlebih, kita menjadi sering
                                    terombang-ambing. Kita berlari ke sana-ke mari berusaha gesit untuk mendapatkan
                                    lebih ...</p>
                                <div class="wrapper d-flex flex-column gap-2">
                                    <a href="#" class="text-center button-default" style="width: 100%;">Buy
                                        Now</a>
                                    <a href="#" class="text-center button-reverse" style="width: 100%;">Online
                                        Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="card-default d-flex align-items-center gap-4">
                            <img src="{{ asset('assets/img/collection/collection-5.svg') }}"
                                class="d-none d-md-inline-block img-collection img-fluid" alt="Collection Image">
                            <div class="wrapper">
                                <p class="author">Devi Ardiyanti & Mirna Rahmasari</p>
                                <h5 style="margin: 6px 0 10px;">Love Your Self First</h5>
                                <p class="paragraph-small" style="margin-bottom: 20px;">Hidup dengan ekspektasi dan
                                    tuntutan orang lain akan membuat tubuh, hati, dan pikiran kita lelah. Tidak akan
                                    memuaskan siapapun atas semua pencapaian yang sudah kita peroleh.</p>
                                <div class="wrapper d-flex flex-column gap-2">
                                    <a href="#" class="text-center button-default" style="width: 100%;">Buy
                                        Now</a>
                                    <a href="#" class="text-center button-reverse" style="width: 100%;">Online
                                        Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-default d-flex align-items-center gap-4">
                            <img src="{{ asset('assets/img/collection/collection-6.svg') }}"
                                class="d-none d-md-inline-block img-collection img-fluid" alt="Collection Image">
                            <div class="wrapper">
                                <p class="author">Devi Ardiyanti & Yazid Attafsir</p>
                                <h5 style="margin: 6px 0 10px;">The Potential Dream</h5>
                                <p class="paragraph-small" style="margin-bottom: 20px;">Apakah impianmu akan tercapai
                                    begitu saja? Manusia terlahir ke dunia dengan mimpi-mimpi hebatnya. Ada banyak
                                    untaian doa yang disampaikan pada bayi kecil agar kelak ia ...</p>
                                <div class="wrapper d-flex flex-column gap-2">
                                    <a href="#" class="text-center button-default" style="width: 100%;">Buy
                                        Now</a>
                                    <a href="#" class="text-center button-reverse" style="width: 100%;">Online
                                        Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <a href="#" class="button-reverse">View More</a>
                    </div>
                </div>
            </div>
        </section>
        {{-- END COLLECTION SECTION --}}

        {{-- ADVENTAGE SECTION --}}
        <section class="adventage d-flex align-items-center py-4 py-lg-0 position-relative" id="adventage">
            <div
                class="banner-image-reverse position-absolute d-none d-lg-flex ps-lg-4 ps-xxl-5 justify-content-start">
                <img src="{{ asset('assets/img/banner/adventage-banner.svg') }}" class="img-fluid"
                    alt="Adventage Banner Image">
            </div>
            <div class="container position-relative">
                <div class="row align-items-center pe-xl-4">
                    <div class="col-lg-6 col-xxl-7 pe-xxl-4">
                        <h3 class="title" style="margin-bottom: 26px;">Unlock the Advantages of Digital Reading
                        </h3>
                        <p class="paragraph" style="margin-bottom: 42px;">Our digital library offers a host of
                            advantages that enhance your
                            reading experience. Access a vast collection of books anytime, anywhere, and enjoy
                            features like adjustable font sizes, personalized bookmarks, and interactive
                            annotations.</p>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-12 col-xxl-6 d-flex gap-3 mb-4">
                                <div class="wrapper-icon">
                                    <div class="checklist-icon"></div>
                                </div>
                                <div class="wrapper">
                                    <h6 style="margin-bottom: 6px;">Unlimited Access</h6>
                                    <p class="paragraph-small">Enjoy the advantage of unlimited access to a vast
                                        collection of digital books, spanning various genres</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12 col-xxl-6 d-flex gap-3 mb-4 d-lg-none d-xl-flex">
                                <div class="wrapper-icon">
                                    <div class="checklist-icon"></div>
                                </div>
                                <div class="wrapper">
                                    <h6 style="margin-bottom: 6px;">Anytime, Anywhere Reading</h6>
                                    <p class="paragraph-small">Experience the freedom of reading anytime and anywhere
                                        with our digital library</p>
                                </div>
                            </div>
                            <div
                                class="col-12 col-md-6 col-lg-12 col-xxl-6 d-flex gap-3 mb-4 mb-md-0 d-lg-none d-xxl-flex">
                                <div class="wrapper-icon">
                                    <div class="checklist-icon"></div>
                                </div>
                                <div class="wrapper">
                                    <h6 style="margin-bottom: 6px;">Interactive and Engaging</h6>
                                    <p class="paragraph-small">Immerse yourself in an interactive and engaging reading
                                        experience in our digital library</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12 col-xxl-6 d-flex gap-3 d-lg-none d-xxl-flex">
                                <div class="wrapper-icon">
                                    <div class="checklist-icon"></div>
                                </div>
                                <div class="wrapper">
                                    <h6 style="margin-bottom: 6px;">Discoverability</h6>
                                    <p class="paragraph-small">Our digital library, discover new books and expand your
                                        literary horizons effortlessly</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- END ADVENTAGE SECTION --}}

        {{-- TEAM SECTION --}}
        <section class="team section-gap" id="team">
            <div class="container">
                <div class="row align-items-end justify-content-between row-gap">
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <h3 class="title">Meet Our Team of Digital Book Enthusiasts</h3>
                    </div>
                    <div class="col-lg-5">
                        <p class="paragraph">Our team is composed of digital book enthusiasts who are passionate about
                            literature and technology. We are dedicated to creating an exceptional digital reading
                            experience for you.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="card-default">
                            <div class="row align-items-end">
                                <div class="col-md-8 order-2 order-lg-1">
                                    <h6>John Thompson</h6>
                                    <p class="paragraph-small" style="margin: 2px 0 12px;">Chief Librarian and
                                        Technology Strategist</p>
                                    <p class="paragraph-blur">With a background in library sciences and a passion for
                                        technology, John leads our team with his expertise in curating digital
                                        collections and implementing innovative solutions.</p>
                                </div>
                                <div class="col-4 order-1 order-lg-2 d-none d-md-inline-block">
                                    <img src="{{ asset('assets/img/team/team-1.svg') }}" class="img-fluid img-team"
                                        alt="Team Profile Image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="card-default">
                            <div class="row align-items-end">
                                <div class="col-md-8 order-2 order-lg-1">
                                    <h6>Sarah Adams</h6>
                                    <p class="paragraph-small" style="margin: 2px 0 12px;">Content Curator and
                                        Bookworm Extraordinaire</p>
                                    <p class="paragraph-blur">As a voracious reader and book enthusiast, Sarah brings
                                        her deep love for literature to our team. With her keen eye for quality and
                                        diverse reading tastes, she carefully selects.</p>
                                </div>
                                <div class="col-4 order-1 order-lg-2 d-none d-md-inline-block">
                                    <img src="{{ asset('assets/img/team/team-2.svg') }}" class="img-fluid img-team"
                                        alt="Team Profile Image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4 mb-4 mb-lg-0">
                        <div class="card-default">
                            <div class="row align-items-end">
                                <div class="col-md-8 order-2 order-lg-1">
                                    <h6>Mark Anderson</h6>
                                    <p class="paragraph-small" style="margin: 2px 0 12px;">User Experience Designer
                                    </p>
                                    <p class="paragraph-blur">Mark is a skilled UX designer with a passion for creating
                                        intuitive and visually appealing interfaces. He works closely with our team to
                                        design and optimize the user experience of our digital library.</p>
                                </div>
                                <div class="col-4 order-1 order-lg-2 d-none d-md-inline-block">
                                    <img src="{{ asset('assets/img/team/team-3.svg') }}" class="img-fluid img-team"
                                        alt="Team Profile Image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-default">
                            <div class="row align-items-end">
                                <div class="col-md-8 order-2 order-lg-1">
                                    <h6>Emma Ramirez</h6>
                                    <p class="paragraph-small" style="margin: 2px 0 12px;">Customer Support Specialist
                                    </p>
                                    <p class="paragraph-blur">Emma is the friendly face behind our customer support
                                        team. With her excellent communication skills and dedication to customer
                                        satisfaction, she ensures that our users have a smooth.</p>
                                </div>
                                <div class="col-4 order-1 order-lg-2 d-none d-md-inline-block">
                                    <img src="{{ asset('assets/img/team/team-4.svg') }}" class="img-fluid img-team"
                                        alt="Team Profile Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- END TEAM SECTION --}}

        {{-- TESTIMONI SECTION --}}
        <section class="testimoni d-flex align-items-center py-4 py-lg-0 position-relative" id="testimoni">
            <div class="banner-image position-absolute d-none d-lg-flex pe-lg-4 pe-xxl-5 justify-content-start">
                <img src="{{ asset('assets/img/banner/testimonial-banner.svg') }}" class="testimoni-banner img-fluid"
                    alt="Testimoni Banner Image">
            </div>
            <div class="container position-relative">
                <div class="row align-items-center pe-xl-4">
                    <div class="offset-lg-6 offset-xxl-5 col-lg-6 col-xxl-7 ps-xxl-4">
                        <h3 class="title" style="margin-bottom: 26px;">Hear What Our Readers Have to Say
                        </h3>
                        <p class="paragraph" style="margin-bottom: 42px;">Don't just take our word for it. Read what
                            our readers have to say
                            about their experience with our digital library. From the convenience of accessing their
                            favorite books to the joy of discovering new authors, our testimonials highlight the
                            positive impact our digital library has made on the reading lives of our users.</p>
                        <div class="wrapper position-relative">
                            <div class="swiper mySwiper position-relative">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="wrapper-testimoni">
                                            <div class="wrapper-profile d-flex gap-3 align-items-center"
                                                style="margin-bottom: 14px;">
                                                <img src="{{ asset('assets/img/testimoni/testimoni-1.svg') }}"
                                                    class="img-fluid img-testimoni" alt="Testimoni Profile Image">
                                                <div class="wrapper">
                                                    <h6>Sarah Collins</h6>
                                                    <p class="paragraph-small" style="font-size: 0.875rem;">Marketing
                                                        Manager</p>
                                                </div>
                                            </div>
                                            <p class="paragraph-blur">"I have been a member of this digital library for
                                                over a year
                                                now, and it has truly transformed my reading experience. As a busy
                                                marketing executive,
                                                finding time to visit physical libraries became a challenge. But with
                                                this digital
                                                library, I can access a vast collection of books anytime, anywhere.”</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="wrapper-testimoni">
                                            <div class="wrapper-profile d-flex gap-3 align-items-center"
                                                style="margin-bottom: 14px;">
                                                <img src="{{ asset('assets/img/testimoni/testimoni-1.svg') }}"
                                                    class="img-fluid img-testimoni" alt="Testimoni Profile Image">
                                                <div class="wrapper">
                                                    <h6>Sarah Collins</h6>
                                                    <p class="paragraph-small" style="font-size: 0.875rem;">Marketing
                                                        Manager</p>
                                                </div>
                                            </div>
                                            <p class="paragraph-blur">"I have been a member of this digital library for
                                                over a year
                                                now, and it has truly transformed my reading experience. As a busy
                                                marketing executive,
                                                finding time to visit physical libraries became a challenge. But with
                                                this digital
                                                library, I can access a vast collection of books anytime, anywhere.”</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrapper-button position-absolute d-flex">
                                <div
                                    class="button-swiper-reverse swiper-button-next d-flex justify-content-center align-items-center order-2">
                                    <img src="{{ asset('assets/img/icon/arrow-light.svg') }}" class="img-fluid"
                                        alt="Arrow Icon">
                                </div>
                                <div
                                    class="button-swiper swiper-button-prev d-flex justify-content-center align-items-center order-1">
                                    <img src="{{ asset('assets/img/icon/arrow-dark.svg') }}" class="img-fluid"
                                        alt="Arrow Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- END TESTIMONI SECTION --}}

        {{-- BLOG SECTION --}}
        <section class="blog section-gap" id="blog">
            <div class="container">
                <div class="row align-items-end justify-content-between row-gap">
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <h3 class="title">Unlock Knowledge in Our Digital Library Blog</h3>
                    </div>
                    <div class="col-lg-5">
                        <p class="paragraph">Delve into the literary universe with our digital library blog. Discover a
                            curated collection of articles that uncover the stories behind the books, explore literary
                            themes.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card-default">
                            <img src="{{ asset('assets/img/blog/blog-1.svg') }}" class="img-fluid w-100 img-blog"
                                alt="Blog Image">
                            <h6 style="margin: 18px 0 6px;">Exploring the World of Mystery and Thrillers</h6>
                            <p class="paragraph-small" style="margin-bottom: 22px;">Join us on a thrilling adventure
                                as we dive deep into the world
                                of mystery and thrillers. Our blog explores the history, subgenres, and standout authors
                                within this captivating genre.</p>
                            <a href="#" class="button-default text-center" style="width: 100%;">Buy Now</a>
                        </div>

                        <div class="card-default mt-4">
                            <img src="{{ asset('assets/img/blog/blog-4.svg') }}" class="img-fluid w-100 img-blog"
                                alt="Blog Image">
                            <h6 style="margin: 18px 0 6px;">Literary Inspiration, How Books Influence Art, Music, and
                                Film</h6>
                            <p class="paragraph-small" style="margin-bottom: 22px;">Immerse yourself in the
                                intersection of literature and other art forms in our blog series on literary
                                inspiration. Discover how books have influenced and shaped art, music, and film
                                throughout history.</p>
                            <a href="#" class="button-default text-center" style="width: 100%;">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4 mt-md-0">
                        <div class="card-default">
                            <img src="{{ asset('assets/img/blog/blog-2.svg') }}" class="img-fluid w-100 img-blog"
                                alt="Blog Image">
                            <h6 style="margin: 18px 0 6px;">Conversations with the Masters of Storytelling</h6>
                            <p class="paragraph-small" style="margin-bottom: 22px;">Immerse yourself in our blog's
                                Author Spotlight series, where we engage in insightful conversations with the masters of
                                storytelling. Delve into the minds of renowned authors.</p>
                            <a href="#" class="button-default text-center" style="width: 100%;">Buy Now</a>
                        </div>

                        <div class="card-default mt-4">
                            <img src="{{ asset('assets/img/blog/blog-5.svg') }}" class="img-fluid w-100 img-blog"
                                alt="Blog Image">
                            <h6 style="margin: 18px 0 6px;">Engaging Discussions and Reading Recommendations</h6>
                            <p class="paragraph-small" style="margin-bottom: 22px;">Join our virtual book club through
                                our blog's Book Club Corner series. Engage in thought-provoking discussions about
                                popular book club picks, and delve into character analysis.</p>
                            <a href="#" class="button-default text-center" style="width: 100%;">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-4 d-none d-lg-inline-block">
                        <div class="card-default">
                            <img src="{{ asset('assets/img/blog/blog-3.svg') }}" class="img-fluid w-100 img-blog"
                                alt="Blog Image">
                            <h6 style="margin: 18px 0 6px;">Exploring the World of Mystery and Thrillers</h6>
                            <p class="paragraph-small" style="margin-bottom: 22px;">Join us on a thrilling adventure
                                as we dive deep into the world of mystery and thrillers. Our blog explores the history,
                                subgenres, and standout authors within this captivating genre.</p>
                            <a href="#" class="button-default text-center" style="width: 100%;">Buy Now</a>
                        </div>

                        <div class="card-default mt-4">
                            <img src="{{ asset('assets/img/blog/blog-6.svg') }}" class="img-fluid w-100 img-blog"
                                alt="Blog Image">
                            <h6 style="margin: 18px 0 6px;">Books that Inspire, Empower, and Transform</h6>
                            <p class="paragraph-small" style="margin-bottom: 22px;">Our blog series on reading for
                                personal growth explores the transformative power of books. Discover self-help and
                                motivational titles, and memoirs that inspire resilience.</p>
                            <a href="#" class="button-default text-center" style="width: 100%;">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- END BLOG SECTION --}}

        {{-- CTA --}}
        <section class="cta">
            <div class="row justify-content-center">
                <div
                    class="col-md-9 col-lg-8 col-xl-7 col-xxl-6 text-md-center d-md-flex flex-md-column align-items-md-center">
                    <h3 class="title" style="margin-bottom: 26px;">Start Your Digital Reading Journey Today!!
                    </h3>
                    <p class="paragraph" style="margin-bottom: 42px;">Ready to dive into the world of digital reading?
                        Sign up now and start your digital reading journey with our vast collection of books. Whether
                        you're seeking knowledge, entertainment, or inspiration, our digital library provides a
                        convenient and immersive reading experience that fits your lifestyle.</p>
                    <div class="wrapper d-flex align-items-center gap-2">
                        <a href="#about" class="button-default">Explore Again</a>
                        <a href="#collection" class="button-reverse d-flex align-items-center gap-2">
                            Check Out Now
                            <div class="arrow-icon"></div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        {{-- END CTA --}}

        {{-- FOOTER --}}
        <footer class="footer" id="footer">
            <div class="container">
                <div class="row" style="margin-bottom: 100px">
                    <div class="col-6 col-md-3 mb-5 mb-md-0">
                        <a class="footer-brand d-inline-block" href="#home" style="margin-bottom: 18px;">
                            <img src="{{ asset('assets/img/logo/logo-brand.svg') }}" class="img-fluid w-100"
                                alt="Logo Brand">
                        </a>
                        <p class="paragraph-small" style="margin-bottom: 30px;">Welcome to Chroma, the ultimate
                            destination for digital art enthusiasts and creators.</p>
                        <div class="wrapper-sosmed d-flex gap-2">
                            <a href="https://id-id.facebook.com/" target="_blank"
                                class="sosmed-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/icon/facebook-icon.svg') }}" class="img-fluid"
                                    alt="Facebook Icon" width="16">
                            </a>
                            <a href="https://www.whatsapp.com/" target="_blank"
                                class="sosmed-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/icon/whatsapp-icon.svg') }}" class="img-fluid"
                                    alt="Whatsapp Icon" width="16">
                            </a>
                            <a href="https://twitter.com/?lang=id" target="_blank"
                                class="sosmed-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/icon/twitter-icon.svg') }}" class="img-fluid"
                                    alt="Twitter Icon" width="16">
                            </a>
                        </div>
                    </div>

                    <div class="offset-lg-2 offset-xl-1 col-6 col-md-3 col-lg-2 mb-5 mb-md-0">
                        <h6 style="margin-bottom: 20px">Quick Links</h6>
                        <div class="wrapper d-flex flex-column gap-3">
                            <a href="#home" class="paragraph-small">Home</a>
                            <a href="#about" class="paragraph-small">About Us</a>
                            <a href="#collection" class="paragraph-small">Collection Book</a>
                            <a href="#team" class="paragraph-small">Our Team</a>
                        </div>
                    </div>
                    <div class="col-lg-2 d-none d-xl-inline-block">
                        <h6 style="margin-bottom: 20px">Our Featured</h6>
                        <div class="wrapper d-flex flex-column gap-3">
                            <a href="#featured" class="paragraph-small">The Digital Revolution</a>
                            <a href="#featured" class="paragraph-small">The Power of Imagination</a>
                            <a href="#featured" class="paragraph-small">Literature's Hidden Meanings</a>
                            <a href="#featured" class="paragraph-small">The Adventures of Digibot</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-xl-2">
                        <h6 style="margin-bottom: 20px">Our Adventage</h6>
                        <div class="wrapper d-flex flex-column gap-3">
                            <a href="#adventage" class="paragraph-small">Unlimited Access</a>
                            <a href="#adventage" class="paragraph-small">Anytime, Anywhere Reading</a>
                            <a href="#adventage" class="paragraph-small">Interactive and Engaging</a>
                            <a href="#adventage" class="paragraph-small">Discoverability</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2">
                        <h6 style="margin-bottom: 20px">Help & guide</h6>
                        <div class="wrapper d-flex flex-column gap-3">
                            <a href="#" class="paragraph-small">Terms & Conditions</a>
                            <a href="#" class="paragraph-small">Privacy Policy</a>
                            <a href="#" class="paragraph-small">Contact Us</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 copyright text-center">
                        <p>Copyright © 2023 Digibooks. All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        {{-- END FOOTER --}}
    </main>


    {{-- SCRIPT JS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script>
        AOS.init();
    </script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                prevEl: ".swiper-button-prev",
                nextEl: ".swiper-button-next",
            },
        });
    </script>
</body>

</html>
