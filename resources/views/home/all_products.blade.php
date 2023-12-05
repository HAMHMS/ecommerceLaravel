<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="{{asset('home')}}/images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="{{asset('home')}}/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home')}}/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home')}}/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->      
      <!-- product section -->
      @include('home.product_view')
      <!-- end product section -->
      <div class="cpy_">
         <p>© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a></p>
      </div>
      <!-- jQery -->
      <script src="{{asset('home')}}/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="{{asset('home')}}/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="{{asset('home')}}/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="{{asset('home')}}/js/custom.js"></script>
   </body>
</html>