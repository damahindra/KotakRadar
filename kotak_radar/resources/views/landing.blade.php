<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ URL::asset('css/landing.css'); }}">
        <link rel="stylesheet" href="{{ URL::asset('css/swiper.css'); }}">
        <link rel="stylesheet" href="{{ URL::asset('css/navbar.css'); }}">
        <link rel="stylesheet" href="{{ URL::asset('css/swiperPage.css'); }}">

        <title>Radar Politik</title>
    </head>
    <body>

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
                        <img src="{{ asset('images/illustration.svg') }}" alt="">
                    </div>
                    <div class="share__data">
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
                        <a href="{{ route('tatacara.show', ['picture' => '1.png']) }}"><img src="{{ asset('images/tata-cara/1.png') }}" alt="tata_cara_1" class="card__img"></a>
                     </div>
                  </article>

                  <article class="card__article swiper-slide">
                     <div class="card__image">
                        <a href="{{ route('tatacara.show', ['picture' => '2.png']) }}"><img src="{{ asset('images/tata-cara/2.png') }}" alt="tata_cara_2" class="card__img"></a>
                     </div>
                  </article>

                  <article class="card__article swiper-slide">
                     <div class="card__image">
                        <a href="{{ route('tatacara.show', ['picture' => '3.png']) }}"><img src="{{ asset('images/tata-cara/3.png') }}" alt="tata_cara_3" class="card__img"></a>
                     </div>
                  </article>

                  <article class="card__article swiper-slide">
                     <div class="card__image">
                        <a href="{{ route('tatacara.show', ['picture' => '4.png']) }}"><img src="{{ asset('images/tata-cara/4.png') }}" alt="tata_cara_4" class="card__img"></a>
                     </div>
                  </article>

                  <article class="card__article swiper-slide">
                     <div class="card__image">
                        <a href="{{ route('tatacara.show', ['picture' => '5.png']) }}"><img src="{{ asset('images/tata-cara/5.png') }}" alt="tata_cara_5" class="card__img"></a>
                     </div>
                  </article>

                  <article class="card__article swiper-slide">
                     <div class="card__image">
                        <a href="{{ route('tatacara.show', ['picture' => '6.png']) }}"><img src="{{ asset('images/tata-cara/6.png') }}" alt="tata_cara_6" class="card__img"></a>
                     </div>
                  </article>

                  <article class="card__article swiper-slide">
                     <div class="card__image">
                        <a href="{{ route('tatacara.show', ['picture' => '7.png']) }}"><img src="{{ asset('images/tata-cara/7.png') }}" alt="tata_cara_7" class="card__img"></a>
                     </div>
                  </article>

                  <article class="card__article swiper-slide">
                     <div class="card__image">
                        <a href="{{ route('tatacara.show', ['picture' => '8.png']) }}"><img src="{{ asset('images/tata-cara/8.png') }}" alt="tata_cara_8" class="card__img"></a>
                     </div>
                  </article>

                  <article class="card__article swiper-slide">
                     <div class="card__image">
                        <a href="{{ route('tatacara.show', ['picture' => '9.png']) }}"><img src="{{ asset('images/tata-cara/9.png') }}" alt="tata_cara_9" class="card__img"></a>
                     </div>
                  </article>
               </div>
            </div>
            <div class="swiper-pagination"></div>
         </div>
      </section>
      <section>
        <div class="jadwal">
            <h2>Jadwal Pemilu</h2>
            <div class="wrap-container">
            <div class="wrap">
                <img src="{{ asset('images/timeline/timeline-1.png') }}" alt="jadwal-pemilu">
                <img src="{{ asset('images/timeline/timeline-2.png') }}" alt="jadwal-pemilu">
            </div>
            </div>
        </div>

      </section>
        </main>

        <footer class="footer section">

            <p class="footer__copy">&#169; 2023 Radar Politik. All right reserved</p>
        </footer>

        <script src="{{ URL::asset('js/swiper.js'); }} "></script>
        <script src="{{ URL::asset('js/swiperPage.js'); }} "></script>

    </body>
</html>
