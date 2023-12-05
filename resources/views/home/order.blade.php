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
         table,th,td{
            border: 1px solid black;
         }
      </style>
   </head>
   <body>
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         <div style="margin: auto; width: 70%; padding: 30px; text-align: center;">
            <table>
               <tr>
                  <th style="padding: 10px; background-color: skyblue; font-size: 20px; font-weight: bold;">Product Title</th>
                  <th style="padding: 10px; background-color: skyblue; font-size: 20px; font-weight: bold;">Quantity</th>
                  <th style="padding: 10px; background-color: skyblue; font-size: 20px; font-weight: bold;">Price</th>
                  <th style="padding: 10px; background-color: skyblue; font-size: 20px; font-weight: bold;">Payment Status</th>
                  <th style="padding: 10px; background-color: skyblue; font-size: 20px; font-weight: bold;">Delivery Status</th>
                  <th style="padding: 10px; background-color: skyblue; font-size: 20px; font-weight: bold;">Image</th>
                  <th style="padding: 10px; background-color: skyblue; font-size: 20px; font-weight: bold;">Cancel Order</th>
               </tr>
               @foreach($order as $order)
               <tr>
                  <td>{{$order->product_title}}</td>
                  <td>{{$order->quantity}}</td>
                  <td>{{$order->price}}</td>
                  <td>{{$order->payment_status}}</td>
                  <td>{{$order->delivery_status}}</td>
                  <td>
                     <img src="product/{{$order->image}}" height="100" width="180">
                  </td>
                  <td>
                     @if($order->delivery_status == 'processing')
                     <a href="{{url('cancel_order',$order->id)}}" class="btn btn-danger" onclick="return confirm('are you sure to cancel this order ?')">Cancel Order</a>
                     @else
                     <p style="color: blue;">Not Allowed</p>
                     @endif
                  </td>
               </tr>
               @endforeach
            </table>
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