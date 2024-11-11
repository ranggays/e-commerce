<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== FAVICON ===============-->
      <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
     
      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">

      <title>E-Commerce</title>
   </head>
   <body>
      <!--==================== HEADER ====================-->
      <header class="header" id="header">
         <nav class="nav container">
            <a href="#" class="nav__logo">
               E-Commerce
            </a>
            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <li class="nav__item">
                     <a href="" class="nav__link active-link">Home</a>
                  </li>
                  
                  <li class="nav__item">
                     <a href="{{url('about')}}" class="nav__link">Article</a>
                  </li>
                  
                  <li class="nav__item">
                     <a href="{{url('product')}}" class="nav__link">Product</a>
                  </li>
                  
                  @if (Auth::check())
                  <!-- Form logout -->
                  <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                     @csrf
                  </form>

                  <!-- Tombol logout -->
                  <li class="nav__item">
                     <a href="#" class="nav__link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="ri-user-line"></i>
                     </a>
                  </li>
                  @else
                  <!-- Tombol login -->
                  <li class="nav__item">
                     <a href="{{ url('/login') }}" class="nav__link">
                        <i class="ri-user-line"></i>
                     </a>
                  </li>
                  @endif

               </ul>

               <!-- Close button -->
                <div class="nav__close" id="nav-close">
                  <i class="ri-close-line"></i>
                </div>
            </div>

            <!-- Toggle button -->
            <div class="nav__toggle" id="nav-toggle">
               <i class="ri-menu-line"></i>
            </div>
         </nav>
      </header>

      <!--==================== MAIN ====================-->
      <main class="main">
         <!--==================== HOME ====================-->
         <section class="home section" id="home">
            <img src="assets/img/Frame 6.png" alt="home image" class="home__bg">
            <div class="home__shadow"></div>
         
            <div class="home__container container grid">
               <div class="home__data">
                  <h3 class="home__subtitle">
                     Welcome To Our E-Commerce
                  </h3>

                  <h1 class="home__title">
                     The Potent of <br>
                     Our Brand
                  </h1>

                  <p class="home__description">
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui voluptatem facilis ullam deserunt, non perferendis ipsum? Excepturi ullam, doloribus voluptate quidem earum, corrupti voluptatibus facilis, veniam illo dolore eaque necessitatibus?
                  </p>

                  <a href="#" class="button">
                     Lanjutkan <i class="ri-arrow-right-line"></i>
                  </a>
               </div>
<!-- 
               <h2 class="section__title">
                  Catalog Product
               </h2> -->

               <div class="home__cards grid">
                  <article class="home__card">
                     <img src="assets/img/sepatu.jpg" alt="home image" class="home__card-img">
                     <h3 class="home__card-title">Sepatu Gunung</h3>
                     <div class="home__card-shadow"></div>
                  </article>
                  
                  <article class="home__card">
                     <img src="assets/img/jaket2.jpg" alt="home image" class="home__card-img">
                     <h3 class="home__card-title">Jaket Gunung</h3>
                     <div class="home__card-shadow"></div>
                  </article>
                  
                  <article class="home__card">
                     <img src="assets/img/tas.jpg" alt="home image" class="home__card-img">
                     <h3 class="home__card-title">Tas Gunung</h3>
                     <div class="home__card-shadow"></div>
                  </article>
                  
                  <article class="home__card">
                     <img src="assets/img/wa.avif" alt="home image" class="home__card-img">
                     <h3 class="home__card-title">Trecking Pole</h3>
                     <div class="home__card-shadow"></div>
                  </article>
               </div>
            </div>
         </section>

         <!--==================== ABOUT ====================-->
         <section class="about section" id="about">
            <div class="about__container container grid">
               <div class="about__data">
                  <h2 class="section__title">
                     Sepatu <br>
                     Gunung
                  </h2>
                  <p class="about__description">
                     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro nihil cumque ut ex distinctio iure error, sit adipisci, quis fuga asperiores tempore quod voluptas atque ea exercitationem eos? Ducimus, quia.
                  </p>
                  <a href="#" class="button">
                     Jelajahi <i class="ri-arrow-right-line"></i>
                  </a>
               </div>

               <div class="about__image">
                  <img src="assets/img/sepatu.jpg" alt="about image" class="about__img">
                  <div class="about__shadow"></div>
               </div>
            </div>
         </section>

         <!--==================== POPULAR ====================-->
         <section class="popular section" id="popular">
            <h2 class="section__title">
               Katalog Produk <br>
               UMKM
            </h2>
            <div class="popular__container container grid">

            @foreach($product as $products)

               <article class="popular__card">
                  <div class="popular__image">
                     <img src="products/{{$products->image}}" alt="popular image" class="popular__img">
                     <div class="popular__shadow"></div>
                  </div>

                  <h2 class="popular__title" >
                  {{$products->title}}
                  </h2>

                  <div class="popular__location">
                     <i class="ri-map-pin-line"></i>
                     <span>{{$products->price}}</span>
                  </div>
               </article>

               @endforeach
               
               
            </div>
            <div class="container__view">
               <a href="#" class="button" id="button1">
                  Lihat Lebih <i class="ri-arrow-right-line"></i>
               </a>
            </div>
         </section>
         
      </main>

      <!--==================== FOOTER ====================-->
      <footer class="footer">
         <div class="footer__container container grid">
            <div class="footer__content grid">
               <div>
                  <a href="#" class="footer__logo">E-commerce</a>

                  <p class="footer__description">
                     Buy in our platform. <br>
                     Its feels special
                  </p>
               </div>

               <div class="footer__data grid">
                  <div>
                     <h3 class="footer__title">About</h3>
                  
                     <ul class="footer__links">
                        <li>
                           <a href="#" class="footer__link">About Us</a>
                        </li>
                        
                        <li>
                           <a href="#" class="footer__link">Features</a>
                        </li>
                        
                        <li>
                           <a href="#" class="footer__link">News & Blog</a>
                        </li>
                     </ul>
                  </div>

                  <div>
                     <h3 class="footer__title">Company</h3>
                  
                     <ul class="footer__links">
                        <li>
                           <a href="#" class="footer__link">FAQs</a>
                        </li>
                        
                        <li>
                           <a href="#" class="footer__link">History</a>
                        </li>
                        
                        <li>
                           <a href="#" class="footer__link">Testimonials</a>
                        </li>
                     </ul>
                  </div>
                  
                  <div>
                     <h3 class="footer__title">Contact</h3>
                  
                     <ul class="footer__links">
                        <li>
                           <a href="#" class="footer__link">Call Center</a>
                        </li>
                        
                        <li>
                           <a href="#" class="footer__link">Support Center</a>
                        </li>
                        
                        <li>
                           <a href="#" class="footer__link">Contact Us</a>
                        </li>
                     </ul>
                  </div>
                  
                  <div>
                     <h3 class="footer__title">Support</h3>
                  
                     <ul class="footer__links">
                        <li>
                           <a href="#" class="footer__link">Privacy Policy</a>
                        </li>
                        
                        <li>
                           <a href="#" class="footer__link">Terms & Services</a>
                        </li>
                        
                        <li>
                           <a href="#" class="footer__link">Payments</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>

            <div class="footer__group">
               <div class="footer__social">
                  <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                     <i class="ri-facebook-line"></i>
                  </a>
                  
                  <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                     <i class="ri-instagram-line"></i>
                  </a>
                  
                  <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                     <i class="ri-twitter-x-line"></i>
                  </a>
                  
                  <a href="https://www.youtube.com/" target="_blank" class="footer__social-link">
                     <i class="ri-youtube-line"></i>
                  </a>
               </div>

               <span class="footer__copy">
                  &#169; Copyright RanggaYS. All rights reserved
               </span>
            </div>
         </div>
      </footer>

      <!--========== SCROLL UP ==========-->
      <a href="#" class="scrollup" id="scroll-up">
         <i class="ri-arrow-up-line"></i>
      </a>

      <!--=============== SCROLLREVEAL ===============-->
      <script src=""></script>

      <!--=============== MAIN JS ===============-->
      <script src="{{asset('assets/js/main.js')}}"></script>
   </body>
</html>