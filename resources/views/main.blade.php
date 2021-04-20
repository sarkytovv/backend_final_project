
<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--Google fonts-->
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

   <!--Font awesome-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

   <!--Main stylesheet-->
   <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">

   <title>Home Page</title>
</head>
<body id="main">

   <!--Scroll up arrow-->
   <div class="up">
      <a href="#main"><i class="fas fa-chevron-up"></i></a>
   </div>

   <!--Modal-->
   <div class="modal">
      <div class="modal-block">
         <div class="exit-btn">&times;</div>
         <div class="header__logo"><i class="fas fa-watch"></i></div>
      </div>
   </div>

   <!--Header-->
   <header class="header">
      <div class="container">

         <!-- Hamburger menu -->
         <div class="h-menu">
            <span></span>
            <span></span>
            <span></span>
         </div>

         <div class="header__logo"><i class="fas fa-gem"></i></div>

         <nav class="header__nav">
            <ul class="header__list">
            <li class="header__item">
                  <a href="{{route('main', ['lang'])}}" class="header__link current">{{__('lang.Home')}}</a>
               </li>
               
               <li class="header__item">
                  <a href="{{route('about', ['lang'])}}" class="header__link">{{__('lang.About Us')}}</a>
               </li>

               <li class="header__item">
                  <a href="#showcase" class="header__link">{{__('lang.To Order')}}</a>
               </li>

               <li class="header__item">
                  <a href="{{route('contacts')}}" class="header__link">{{__('lang.Contacts')}}</a>
               </li>
            </ul>
         </nav>

         <div class="header__log">
            <input type="text" placeholder="Search">
            <i class="fas fa-search"></i>
            <i class="fas fa-user"></i>
            <a href="{{route('auth')}}" class="log">{{__('lang.Sign In')}}</a>
         </div>
      </div>
   </header>

   <!--Promo-->
   <section class="promo">
      <div class="container">
         <div class="promo__content">
            <h2 style="color:goldenrod">{{__('lang.Choose the best watch for yourself')}}<span class="promo__word"></span></h2>
            <div class="divider"></div>
            <p>{{__('lang.New Rolex available')}}</p>

            <div class="promo__btns">
               <button>{{__('lang.To Order')}}</button>
               <button data-modal>{{__('lang.Follow')}}</button>
            </div>
         </div>
      </div>
   </section>

   <!--Slider-->
   <section class="carousel">
      <div class="container">
      
         <div class="carousel__wrapper">

            <div class="slide_block slide_block_current">
               <img src="https://images3.alphacoders.com/115/115815.jpg" alt="Slide1">
            </div>

            <div class="slide_block">
               <img src="https://7star.pk/watchnews/wp-content/uploads/2018/04/6310227-watch-wallpaper.jpg" alt="Slide2">
            </div>

            <div class="slide_block">
               <img src="https://watchbox-blog.imgix.net/wp-content/uploads/2020/03/Journe_Desktop_1024x768.jpg?max-w=1024&q=50&auto=format,compress&usm=10&usmrad=3" alt="Slide3">
            </div>

         </div>

         <div class="carousel__arrows">
            <button class="next"><i class="fas fa-chevron-right"></i></button>
            <button class="prev"><i class="fas fa-chevron-left"></i></button>
         </div>
      </div>
   </section>

   <!--Sneakers-->
   <section class="store">
      <div class="container">
         
         

         <!--First tab-->
         <div class="store__wrapper store__wrapper-active" id="b1">  

            <div class="store__block">
               <img src="https://static.patek.com/images/articles/thumbs/twitter/5270P_001.jpg" alt="watch">
               <div class="block-info">
                  <h3>Patek Philippe Geneve</h3>
                  <span class="price">$299</span>
                  <span class="descr">Men's lifestyle</span>
                  <span class="avail">{{__('lang.Available in 2 colors')}}</span>
               </div>
            </div>

            <div class="store__block">
               <img src="https://static.patek.com/images/articles/thumbs/twitter/5327J_001.jpg" alt="watch">
               <div class="block-info">
                  <h3>Patek Philippe Geneve</h3>
                  <span class="price">$239</span>
                  <span class="descr">Men's lifestyle</span>
                  <span class="avail">{{__('lang.Available in 3 colors')}}</span>
               </div>
            </div>

            <div class="store__block">
               <img src="https://minutashop.ru/image/cache/data/brands/casio/9e/f8/mtp-v300d-1a/mtp-v300d-1a-1000x1000.jpg" alt="watch">
               <div class="block-info">
                  <h3>Casio Collection MTP-V300D-1A</h3>
                  <span class="price">$199</span>
                  <span class="descr">Men's lifestyle</span>
                  <span class="avail">{{__('lang.Available in 1 color')}}</span>
               </div>
            </div>

            <div class="store__block">
               <img src="https://12-24.info/upload/iblock/ad8/ad86624f2277498821c4e301cc66bb20/b0fba40c89eff1edfd45c7e176bffbb0.png" alt="watch">
               <div class="block-info">
                  <h3>Rolex Datejust 126334-0001</h3>
                  <span class="price">$279</span>
                  <span class="descr">Men's lifestyle</span>
                  <span class="avail">{{__('lang.Available in 2 colors')}}</span>
               </div>
            </div>

            <div class="store__block">
               <img src="https://www.montredo.com/wp-content/uploads/2020/06/Longines-Master-44mm-Chronograph-Silver-Dial-L28594783-19639_2-1.jpg" alt="watch">
               <div class="block-info">
                  <h3>Longines Master Collection</h3>
                  <span class="price">$199</span>
                  <span class="descr">Men's lifestyle</span>
                  <span class="avail">{{__('lang.Available in 1 color')}}</span>
               </div>
            </div>

            <div class="store__block">
               <img src="https://www.tissotwatches.com/media/catalog/product/cache/aaadd316e453df5b08f7f4246fad1a9c/T/1/T101.410.11.031.00_R.png" alt="watch">
               <div class="block-info">
                  <h3>Tissot PR 100 Collection</h3>
                  <span class="price">$199</span>
                  <span class="descr">Men's lifestyle</span>
                  <span class="avail">{{__('lang.Available in 1 color')}}</span>
               </div>
            </div>

         </div>

         

         <button class="btn-more">
            {{__('lang.Show more')}} <i class="fas fa-chevron-right"></i> 
         </button>
      </div>
   </section>

   <!-- Showcase -->
   <section class="showcase" id="showcase">
      <div class="container">

         <div class="showcase__descr">
            <h1>{{__('lang.Order our Watches')}}</h1>
            <p>
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores omnis velit suscipit iste ut at, vitae numquam expedita debitis sit praesentium. Reiciendis excepturi esse suscipit sequi iusto nam sunt obcaecati ab officiis, harum nobis impedit?
            </p>
            <button class="btn btn-primary">{{__('lang.Make an Order')}}</button>
         </div>

         <img src="https://f.vividscreen.info/soft/041fd6cc137225fa2a4c569673163d4f/Titanium-Watch-Rolex-1920x1200.jpg" alt="watch">

      </div>
   </section>

   <!-- Footer -->
   <footer class="footer">
      <div class="container">

         <div class="footer__logo">
            <h2>{{__('lang.Watch')}} <span>{{__('lang.Store')}}</span> </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime beatae sapiente ex deserunt ipsum nihil.</p>

            <div>Copyright &copy; 2021</div>
         </div>

         <div class="footer__links">
            <h3>{{__('lang.Menu')}}</h3>
            <div class="divider"></div>
            <ul>
               <li><a href="#">{{__('lang.About Us')}}</a></li>
               <li><a href="#">{{__('lang.Order & Sales')}}</a></li>
               <li><a href="#">{{__('lang.Get Cashback')}}</a></li>
               <li><a href="#">{{__('lang.Contacts')}}</a></li>
            </ul>
         </div>

         <div class="footer__links">
            <h3>{{__('lang.New Products')}}</h3>
            <div class="divider"></div>

            <ul>
               <li><a href="#">{{__('lang.For Women')}}</a></li>
               <li><a href="#">{{__('lang.For Men')}}</a></li>
               <li><a href="#">{{__('lang.For Kids')}}</a></li>
               <li><a href="#">{{__('lang.NEW')}}</a></li>
            </ul>
         </div>

         <div class="footer__links">
            <h3>{{__('lang.Help')}}</h3>
            <div class="divider"></div>

            <ul>
               <li><a href="#">{{__('lang.Our Email')}}</a></li>
               <li><a href="#">{{__('lang.Call Us')}}</a></li>
               <li><a href="auth.html">{{__('lang.Sign In/Sign Up')}}</a></li>
               <li><a href="#">{{__('lang.Contacts')}}</a></li>
            </ul>
         </div>

      </div>
   </footer>


   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <!-- <script src="public/js/script.js"></script>
   <script src="\public\script\slider.js"></script>
   <script src="js/hMenu.js"></script> -->

   <script src="{{ URL::asset('/script/slider.js') }}"></script>
   
</body>
</html>