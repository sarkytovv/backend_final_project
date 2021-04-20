
<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contacts</title>

   <!--Google fonts-->
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

   <!--Font awesome-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

   <!--Main stylesheet-->
   <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">  

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
   
</head>
<body id="contacts">
   

   <!--Modal after submitting form-->
   <div class="modal">
      <div class="modal_info">
         <p>{{__('lang.Thank you, we will contact you shortly!')}}</p>
      </div>
   </div>

    <!--Scroll up arrow-->
    <div class="up">
      <a href="#contacts"><i class="fas fa-chevron-up"></i></a>
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
         <h1 class="contacts__header">{{__('lang.Communication')}}</h1>
         <div class="divider"></div>
      </div>
   </section>


   <!-- Geo location -->
   <section class="location">
      <div class="container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1455.8489515890444!2d80.25227841991524!3d50.415606803730725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42f265361cd87ef1%3A0x1fb1edc95935201e!2z0KLRgNC40YPQvNGE!5e0!3m2!1sru!2skz!4v1618593258476!5m2!1sru!2skz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
   </section>

    
   <!-- Contacts info -->
   <section class="contact-info">
      <div class="container">
         <div class="contact__wrapper">
            <h2>{{__('lang.If you have Questions:')}}</h2>
            
            <form class="contact-form" action="{{route('contacts')}}" method="POST" enctype='multipart/form-data'>
            @csrf
               <div class="contact_block">
                  <input name="message" type="text" placeholder="Message" class = "message-input" style="width:800px; height:300px">
               </div>

               <div class="contact_block">
                  <input name = "name" type="text" placeholder="Your name" id="mb-10">
                  <input name = "email" type="text" placeholder="Your email">
               </div>
               
               <div class="contact_block">
                  <input name = "subject" type="text" placeholder="Enter subject">
               </div>
               <input type="file" name="image" class="form-controll" >

               <button class="btn send-btn">{{__('lang.Send')}}</button>
            </form>
         </div>

         <div class="contact__wrapper_2">
            <div class="home">
               <i class="fas fa-home"></i>
               <h4 class="descr">Semey, Kazakhstan</h4>
               <span class="index">Shakarim's Avenue</span>
            </div>

            <div class="phone">
               <i class="fas fa-mobile-alt"></i>
               <h4 class="descr">+7 (777) 777 77-77</h4>
               <span class="index">{{__('lang.From Mon - Fri 10:00 - 18:00')}}</span>
            </div>

            <div class="email">
               <i class="far fa-envelope"></i>
               <h4 class="descr">support@gmail.com</h4>
               <span class="index">{{__('lang.We will give feedback to you shortly!')}}</span>
            </div>
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