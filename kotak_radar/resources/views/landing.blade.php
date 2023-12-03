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
                <a href="{{ route('mail.show') }}">Kotak Surat</a>
            </div>
            <div>
                <a href="/aboutUs">About Us</a>
            </div>
            <div>
                <a href="{{ route('policy.show') }}">Policy Brief</a>
            </div>

        </div>
        <div class="nav-right-content">
            @if($user)
            <div>
                <a href="/logout">Logout</a>
            </div>
            <div class="name">
                <p>Selamat Datang, {{ $user->name}}</p>
            </div>
            @else
            <div>
                <a href="{{ route('login.show') }}">Login</a>
            </div>
            <div class="name">
                <p>Selamat Datang!</p>
            </div>
            @endif

        </div>
    </nav>
        </header>

        <main class="l-main">
            <section class="share section bd-container" id="share">
                <div class="share__container bd-grid">
                <div class="share__img">
                        <img src="{{ asset('images/bg.png') }}" alt="" data-aos="fade-right">
                    </div>
                    <div class="share__data" data-aos="fade-left">
                        <h2 class="section-title-center">Radar Politik</h2>
                        <p class="share__description">Membentuk Masa Depan: Radar Politik, Wadah Digital untuk Generasi Muda yang Peduli Politik</p>
                        <a href="/home" class="button">Telusuri</a>
                    </div>
                </div>
            </section>
            <h2 class="section-title" id='mechanism'>Mekanisme Pemilu</h2>
            <section class="container">
         <div class="card__container swiper">
            <div class="card__content">
               <div class="swiper-wrapper">

                  <article class="card__article swiper-slide">
                     <div class="card__image">
                        <a href="{{ route('tatacara.show', ['picture' => '1.svg']) }}"><img src="{{ asset('images/tata-cara/1.svg') }}" alt="tata_cara_1" class="card__img"></a>
                     </div>
                  </article>

                  <article class="card__article swiper-slide">
                     <div class="card__image">
                        <a href="{{ route('tatacara.show', ['picture' => '2.svg']) }}"><img src="{{ asset('images/tata-cara/2.svg') }}" alt="tata_cara_2" class="card__img"></a>
                     </div>
                  </article>

                  <article class="card__article swiper-slide">
                     <div class="card__image">
                        <a href="{{ route('tatacara.show', ['picture' => '3.svg']) }}"><img src="{{ asset('images/tata-cara/3.svg') }}" alt="tata_cara_3" class="card__img"></a>
                     </div>
                  </article>

                  <article class="card__article swiper-slide">
                     <div class="card__image">
                        <a href="{{ route('tatacara.show', ['picture' => '4.svg']) }}"><img src="{{ asset('images/tata-cara/4.svg') }}" alt="tata_cara_4" class="card__img"></a>
                     </div>
                  </article>

                  <article class="card__article swiper-slide">
                     <div class="card__image">
                        <a href="{{ route('tatacara.show', ['picture' => '5.svg']) }}"><img src="{{ asset('images/tata-cara/5.svg') }}" alt="tata_cara_5" class="card__img"></a>
                     </div>
                  </article>

                  <article class="card__article swiper-slide">
                     <div class="card__image">
                        <a href="{{ route('tatacara.show', ['picture' => '6.svg']) }}"><img src="{{ asset('images/tata-cara/6.svg') }}" alt="tata_cara_6" class="card__img"></a>
                     </div>
                  </article>

                  <article class="card__article swiper-slide">
                     <div class="card__image">
                        <a href="{{ route('tatacara.show', ['picture' => '7.svg']) }}"><img src="{{ asset('images/tata-cara/7.svg') }}" alt="tata_cara_7" class="card__img"></a>
                     </div>
                  </article>

                  <article class="card__article swiper-slide">
                     <div class="card__image">
                        <a href="{{ route('tatacara.show', ['picture' => '8.svg']) }}"><img src="{{ asset('images/tata-cara/8.svg') }}" alt="tata_cara_8" class="card__img"></a>
                     </div>
                  </article>

                  <article class="card__article swiper-slide">
                     <div class="card__image">
                        <a href="{{ route('tatacara.show', ['picture' => '9.svg']) }}"><img src="{{ asset('images/tata-cara/9.svg') }}" alt="tata_cara_9" class="card__img"></a>
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
            <div class="wrap-container">
            <div class="wrap">
                <img src="{{ asset('images/timeline/timeline-1.svg') }}" alt="jadwal-pemilu">
                <img src="{{ asset('images/timeline/timeline-2.svg') }}" alt="jadwal-pemilu">
            </div>
            </div>
        </div>

      </section>
        </main>

        <!--========== FOOTER ==========-->
        <footer class="footer section">
            <!-- <div class="footer__container bd-container bd-grid">
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
            </div> -->

            <p class="footer__copy">&#169; 2023 Radar Politik. All right reserved</p>
        </footer>

        <script src="{{ URL::asset('js/swiper.js'); }} "></script>
        <script src="{{ URL::asset('js/swiperPage.js'); }} "></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>AOS.init();</script>

    </body>
</html>
