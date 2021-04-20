
<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Authorization</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

   <!--Google fonts-->
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

   <!--Font awesome-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

   <!--Main stylesheet-->
   <link rel="stylesheet" href="{{asset('css/style.css') }}">
   
</head>
<body id="auth">
   

    <!--Scroll up arrow-->
    <div class="up">
      <a href="#auth"><i class="fas fa-chevron-up"></i></a>
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
                  <a href="{{route('main', ['lang'])}}" class="header__link current">Home</a>
               </li>
               
               <li class="header__item">
                  <a href="{{route('about', ['lang'])}}" class="header__link">About Us</a>
               </li>

               <li class="header__item">
                  <a href="#showcase" class="header__link">To Order</a>
               </li>

               <li class="header__item">
                  <a href="{{route('contacts')}}" class="header__link">Contacts</a>
               </li>
            </ul>
         </nav>

         <div class="header__log">
            <input type="text" placeholder="Search">
            <i class="fas fa-search"></i>
            <i class="fas fa-user"></i>
            <a href="{{route('auth')}}" class="log">Sign In</a>
         </div>
      </div>
   </header>


   <!-- Form -->
   <main class="main">
      <div class="container">

         <div id="main-wrapper">
            <nav class="form-nav">
               <button id="login" class="tab active-btn" data-tab="login" action="{{route('auth')}}" method="POST">Sign In</button>
               <button id="signup" class="tab" data-tab="signup" action="{{route('client')}}" method="POST">Sign Up</button>
            </nav>
            
            <div class="sign-form sign-form_active" id="login-form">
               <form action="{{route('auth')}}" method="POST" enctype='multipart/form-data'>
               @csrf
                  <div class="form-block">
                     <label for="email">Email: </label>
                     <input type="email" name="email">
                  </div>
   
                  <div class="form-block">
                     <label for="password">Password: </label>
                     <input type="password"  name="password">
                  </div>
   
                  <div class="d-flex">
                     <div>
                        <input type="checkbox">
                        <p>Remember me</p>
                     </div>
                     <a href="#">Forgot password?</a>
                  </div>
   
                  <button class="sign-btn">Sign In</button>
               </form>
            </div>
   
            <div class="sign-form" id="signup-form">
               <form action="{{route('client')}}" method="POST" enctype='multipart/form-data'>
                    
               @csrf
                  <div class="form-block">
                     <label for="name">Name:</label>
                     <input type="text" name="name">
                  </div>
   
                  <div class="form-block">
                     <label for="surname">Surname:</label>
                     <input type="text"  name="surname">
                  </div>

                  <div class="form-block">
                     <label for="email">Email: </label>
                     <input type="email"  name="email">
                  </div>

                  <div class="form-block">
                     <label for="password">Password: </label>
                     <input type="password"  name="password">
                  </div>
   
                  <button class="sign-btn">Create Account</button>
               </form>`

               <ul id="reqs">
                  <h4>Password must consist of:</h4>
                  <li>At least 1 digit</li>
                  <li>At least 1 capital letter</li>
                  <li>At least 10 characters</li>

               </ul>
            </div>
         </div>

         

      </div>
   </main>  

   <!-- Footer -->
   <footer class="footer">
      <div class="container">

      <div class="footer__logo">
            <h2>Watch <span>Store</span> </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime beatae sapiente ex deserunt ipsum nihil.</p>

            <div>Copyright &copy; 2021</div>
         </div>

         <div class="footer__links">
            <h3>Menu</h3>
            <div class="divider"></div>
            <ul>
               <li><a href="#">About Us</a></li>
               <li><a href="#">Order & Sales</a></li>
               <li><a href="#">Get Cashback</a></li>
               <li><a href="#">Contacts</a></li>
            </ul>
         </div>

         <div class="footer__links">
            <h3>New Products</h3>
            <div class="divider"></div>

            <ul>
               <li><a href="#">For Women</a></li>
               <li><a href="#">For Men</a></li>
               <li><a href="#">For Kids</a></li>
               <li><a href="#">NEW</a></li>
            </ul>
         </div>

         <div class="footer__links">
            <h3>Help</h3>
            <div class="divider"></div>

            <ul>
               <li><a href="#">Our Email</a></li>
               <li><a href="#">Call Us</a></li>
               <li><a href="auth.html">Sign In/Sign Up</a></li>
               <li><a href="#">Contacts</a></li>
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

      const tabs = document.querySelectorAll('.tab')
      const blocks = document.querySelectorAll('.sign-form')
      
      tabs.forEach(tab => {
         tab.addEventListener('click', () => {
            let currentTab = tab
            let attr = currentTab.getAttribute('data-tab')
            let currentBlock = document.getElementById(`${attr}-form`)
            
            tabs.forEach(tab => tab.classList.remove('active-btn'))
            blocks.forEach(block => block.classList.remove('sign-form_active'))

            currentTab.classList.add('active-btn')
            currentBlock.classList.add('sign-form_active')
         });
      });

   </script>
</body>
</html>