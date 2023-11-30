<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="{{ URL::asset('css/landing.css'); }}">
        <link rel="stylesheet" href="{{ URL::asset('css/swiper.css'); }}">
        <link rel="stylesheet" href="{{ URL::asset('css/navbar.css'); }}">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="{{ URL::asset('css/swiperPage.css'); }}">

        <title>Radar Politik</title>
    </head>
    <body>

        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
        <nav class="topnav">
        <div class="nav-left-content">
            <div>
                <a href="{{ route('landing.show') }}"><img src="{{ asset('images/Radar Logo.png') }}" alt="" class="radar-logo"></a>
            </div>
            <div>
                <a href="/home">Beranda</a>
            </div>
            <div>
                <a href="/kuis">Kuis</a>
            </div>
            <div>
                <a href="/mail">Kotak Surat</a>
            </div>
            <div>
                <a href="/aboutUs">About Us</a>
            </div>
            <div>
                <a href="#">Policy Brief</a>
            </div>

        </div>
        <div class="nav-right-content">
            <div>
                <a href="/logout">Logout</a>
            </div>
            <div class="name">
                <p>Selamat Datang, {{ $user->name }}</p>
            </div>

        </div>
    </nav>
        </header>

        <main class="l-main">

            <!--========== SHARE ==========-->
            <section class="share section bd-container" id="share">
                <div class="share__container bd-grid">
                <div class="share__img">
                        <img src="{{ asset('images/bg.png') }}" alt="" data-aos="fade-right">
                    </div>
                    <div class="share__data" data-aos="fade-left">
                        <h2 class="section-title-center">Radar Politik</h2>
                        <p class="share__description">Kotak Radar</p>
                        <a href="/home" class="button">Telusuri</a>
                    </div>
                </div>
            </section>
            <h2 class="section-title">Mekanisme Pemilu</h2>
            <section class="container">
         <div class="card__container swiper">
            <div class="card__content">
               <div class="swiper-wrapper">
                
                  <article class="card__article swiper-slide">
                     <div class="card__image">
                        <img src="{{ asset('images/bg.png') }}" alt="image" class="card__img">
                        <div class="card__shadow"></div>
                     </div>
                  </article>

                  <article class="card__article swiper-slide">
                     <div class="card__image">
                        <img src="{{ asset('images/bg.png') }}" alt="image" class="card__img">
                        <div class="card__shadow"></div>
                     </div>
                  </article>

                  <article class="card__article swiper-slide">
                     <div class="card__image">
                        <img src="{{ asset('images/bg.png') }}" alt="image" class="card__img">
                        <div class="card__shadow"></div>
                     </div>
                  </article>

                  <article class="card__article swiper-slide">
                     <div class="card__image">
                        <img src="{{ asset('images/bg.png') }}" alt="image" class="card__img">
                        <div class="card__shadow"></div>
                     </div>
                  </article>

                  <article class="card__article swiper-slide">
                     <div class="card__image">
                        <img src="{{ asset('images/bg.png') }}" alt="image" class="card__img">
                        <div class="card__shadow"></div>
                     </div>
                  </article>
               </div>
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>
         </div>
      </section>
      <section>
        <div class="jadwal">
            <h2>Jadwal Pemilu</h2>
            <img src="{{ asset('images/bg.png') }}" alt="" data-aos="flip-left">
        </div>

      </section>
        </main>

        <!--========== FOOTER ==========-->
        <footer class="footer section">
            <div class="footer__container bd-container bd-grid">
                <div class="footer__content">
                    <h3 class="footer__title">
                        <a href="#" class="footer__logo">Radar Politik</a>
                    </h3>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Layanan Kami</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Surat Kritik</a></li>
                        <li><a href="#" class="footer__link">Kuis</a></li>
                        <li><a href="#" class="footer__link">??</a></li>
                    </ul>
                </div>
                <div class="footer__content">
                    <h3 class="footer__title">Social</h3>
                    <a href="https://www.instagram.com/radarpolitik_/" class="footer__social"><i class='bx bxl-instagram-alt'></i></a>
                </div>
            </div>

            <p class="footer__copy">&#169; 2023 Radar Politik. All right reserved</p>
        </footer>

        <script src="{{ URL::asset('js/swiper.js'); }} "></script>
        <script src="{{ URL::asset('js/swiperPage.js'); }} "></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>AOS.init();</script>

    </body>
</html>
