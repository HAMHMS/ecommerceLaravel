<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style type="text/css">
      .center{
        margin: auto;
        width: 50%;
        border: 2px solid white;
        text-align: center;
        margin-top: 40px;
      }
      .font_size{
        font-size: 40px;
        text-align: center;
        padding-top: 20px;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          @if(session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            {{session()->get('message')}}
          </div>
          @endif
          <h2 class="font_size">All Products</h2>
          <table class="center">
            <tr style="background:skyblue;">
              <th style="padding:30px;">Product Title</th>
              <th style="padding:30px;">Description</th>
              <th style="padding:30px;">Quantity</th>
              <th style="padding:30px;">Category</th>
              <th style="padding:30px;">Price</th>
              <th style="padding:30px;">Discount Price</th>
              <th style="padding:30px;">Product Image</th>
              <th style="padding:30px;">Delete</th>
              <th style="padding:30px;">Edit</th>
            </tr>
            @foreach($product as $product)
            <tr>
              <td>{{$product->title}}</td>
              <td>{{$product->description}}</td>
              <td>{{$product->quantity}}</td>              
              <td>{{$product->category}}</td>
              <td>{{$product->price}}</td>
              <td>{{$product->discount_price}}</td>
              <td>
                <img src="/product/{{$product->image}}" width="130" height="130">
              </td>
              <td><a class="btn btn-danger" href="{{url('/delete_product',$product->id)}}" onclick="return confirm('Are You Sure To Delete This')">Delete</a></td>
              <td><a class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a></td>              
            </tr>
            @endforeach
          </table>
        </div>
      </div>   
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>