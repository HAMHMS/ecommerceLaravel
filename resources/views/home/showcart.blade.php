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
      <style type="text/css">
         .center{
            margin: auto;
            width: 70%;
            text-align: center;
            padding: 30px;
         }
         table,th,td{
            border: 1px solid gray;
         }
         .th_deg{
            font-size: 30px;
            padding: 5px;
            background-color: skyblue;
         }
      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
          @if(session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            {{session()->get('message')}}
          </div>
          @endif
      <div class="center">
         <table>
            <tr>
               <th class="th_deg">Product Title</th>
               <th class="th_deg">Product Quantity</th>
               <th class="th_deg">Price</th>
               <th class="th_deg">Image</th>
               <th class="th_deg">Action</th>
            </tr>
            <?php $totalprice = 0; ?>
            @foreach($cart as $cart)
            <tr>
               <td>{{$cart->product_title}}</td>
               <td>{{$cart->quantity}}</td>
               <td>${{$cart->price}}</td>
               <td><img src="product/{{$cart->image}}" height="200" width="200"></td>
               <td><a href="{{url('remove_cart',$cart->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to remove this product ?')">Remove Product</a></td>
            </tr>
            <?php $totalprice = $totalprice + $cart->price; ?>
            @endforeach
         </table>
         <div>
            <h1 style="font-size: 20px; padding: 40px;">Total Price: ${{$totalprice}}</h1>
         </div>
         <div>
            <h1 style="font-size:25px; padding-bottom: 15px;">Proceed To Oreder</h1>
            <a href="{{url('cash_order')}}" class="btn btn-danger">Cash On Delivery</a>
            <a href="{{url('stripe',$totalprice)}}" class="btn btn-danger">Pay Using Card</a>
         </div>
      </div>
      
      
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