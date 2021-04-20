
<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <!--Google fonts-->
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

   <!--Font awesome-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

   <!--Main stylesheet-->
   <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">
   
</head>
<body id="about">
   

    <!--Scroll up arrow-->
    <div class="up">
      <a href="#about"><i class="fas fa-chevron-up"></i></a>
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

   <!-- Showcase -->
   <section class="contacts">
      <div class="container">
         <h1 class="contacts__header" style="text-transform: unset;">{{__('lang.About Company')}}</h1>
         <div class="divider"></div>
      </div>
   </section>

   <!-- Company goals & info -->
   <section class="about">
      <div class="container">

         <div class="about__info">
            <h1>{{__('lang.Why are we the Best?')}}</h1>
            <div class="divider"></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore vel laboriosam, dolorem, neque voluptatum incidunt ipsa quo aspernatur eaque voluptates, eum facere debitis laborum sed.</p>

            <div class="icon-descr">
               <i class="fas fa-fire-alt"></i>
               <span class="strong">{{__('lang.We have the best product')}}</span>
            </div>
            
            <div class="icon-descr">
               <i class="fas fa-users"></i>
               <span class="strong">{{__('lang.We have the most friendly team')}}</span>
            </div>

            <div class="icon-descr">
               <i class="fas fa-globe-americas"></i>
               <span class="strong">{{__('lang.We have 3 branches')}}</span>
            </div>

            <div class="icon-descr">
               <i class="fas fa-bolt"></i>
               <span class="strong">{{__('lang.We are always charged')}}</span>
            </div>
            
         </div>

         <div class="about__img">
            <img src="https://i5.walmartimages.com/asr/e30d7609-90c2-4e9e-98e2-241df6cc7b8c_1.dc5df62531f5c6e82da593830dca9a91.jpeg" alt="About">
         </div>

      </div>
   </section>

   <!-- Цифры -->
   <section class="numbers">
      <div class="container">

         <div>
            <i class="far fa-check-square"></i>
            <span class="amount">{{__('lang.Only Original Products')}}</span>
         </div>

         <div>
            <i class="fas fa-home"></i>
            <span class="amount">{{__('lang.3 Branches')}}</span>
         </div>

         <div>
            <i class="fas fa-users"></i>
            <span class="amount">{{__('lang.200+ employees')}}</span>
         </div>

         <div>
            <i class="fas fa-percent"></i>
            <span class="amount">{{__('lang.Always have Discounts')}}</span>
         </div>

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

   </footer>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script>
      $(function() {
         $(document).scroll(function() {
         let $nav = $(".header");
         $nav.toggleClass('header-scrolled', $(this).scrollTop() > $nav.height());
         });
      });
   </script>
</body>
</html>