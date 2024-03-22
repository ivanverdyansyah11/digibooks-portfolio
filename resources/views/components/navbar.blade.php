{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg py-3 navbar-dark position-relative" data-aos-once="true" data-aos="fade-down"
    data-aos-duration="1000">
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
