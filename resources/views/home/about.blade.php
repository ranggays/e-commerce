<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== FAVICON ===============-->
      <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
     
      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="assets/css/styles.css">
    
      <title>Document</title>
</head>
<body>
    <header class="header" id="header">
        <nav class="nav container">
           <a href="#" class="nav__logo">
              StartUp
           </a>
           <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                     <a href="{{('/dashboard')}}" class="nav__link active-link">Home</a>
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

     <main class="main">
        <section class="article section container" id="articles">
            <h2 class="article__title" id="title">
                Article
            </h2>

            <div class="articles__container">
                <div class="articles__data">
                    <img src="assets/img/home-beach.jpg" alt="articles image" class="article__img">
                    <div class="articles__content">
                        <h2 class="articles__title">Judul Artikel</h2>
                        <p class="articles__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Debitis voluptatem dolorem est dicta iste nulla quidem in! Ullam quidem eveniet illum, illo temporibus explicabo aliquam quasi ea animi quis perferendis.</p>
                        <a href="content.html" class="button" id="button__article">
                            Selanjutnya <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>

                <div class="articles__data">
                    <img src="assets/img/home-mountain.jpg" alt="articles image" class="article__img">
                    <div class="articles__content">
                        <h2 class="articles__title">Judul Artikel</h2>
                        <p class="articles__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Debitis voluptatem dolorem est dicta iste nulla quidem in! Ullam quidem eveniet illum, illo temporibus explicabo aliquam quasi ea animi quis perferendis.</p>
                        <a href="content.html" class="button" id="button__article">
                            Selanjutnya <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>

                <div class="articles__data">
                    <img src="assets/img/home-lake.jpg" alt="articles image" class="article__img">
                    <div class="articles__content">
                        <h2 class="articles__title">Judul Artikel</h2>
                        <p class="articles__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Debitis voluptatem dolorem est dicta iste nulla quidem in! Ullam quidem eveniet illum, illo temporibus explicabo aliquam quasi ea animi quis perferendis.</p>
                        <a href="content.html" class="button" id="button__article">
                            Selanjutnya <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>

                <div class="articles__data">
                    <img src="assets/img/home-mountain.jpg" alt="articles image" class="article__img">
                    <div class="articles__content">
                        <h2 class="articles__title">Judul Artikel</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Debitis voluptatem dolorem est dicta iste nulla quidem in! Ullam quidem eveniet illum, illo temporibus explicabo aliquam quasi ea animi quis perferendis.</p>
                        <a href="content.html" class="button" id="button__article">
                            Selanjutnya <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>

                <div class="articles__data">
                    <img src="assets/img/home-trees.jpg" alt="articles image" class="article__img">
                    <div class="articles__content">
                        <h2 class="articles__title">Judul Artikel</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Debitis voluptatem dolorem est dicta iste nulla quidem in! Ullam quidem eveniet illum, illo temporibus explicabo aliquam quasi ea animi quis perferendis.</p>
                        <a href="content.html" class="button" id="button__article">
                            Selanjutnya <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
     </main>

     <footer class="footer">
        <div class="footer__container container grid">
           <div class="footer__content grid">
              <div>
                 <a href="#" class="footer__logo">Travel</a>

                 <p class="footer__description">
                    Travel with us and explore <br> 
                    the world without limits.
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

    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
     </a>

     <!--=============== SCROLLREVEAL ===============-->
     <script src=""></script>

     <!--=============== MAIN JS ===============-->
     <script src="assets/js/main.js"></script>
</body>
</html>