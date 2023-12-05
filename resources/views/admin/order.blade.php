<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
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
          <h1 style="text-align: center; font-size: 25px; font-weight: bold; padding-bottom: 40px;">All Orders</h1>
          <div style="padding-left: 400px; padding-bottom: 30px;">
            <form action="{{url('search')}}" method="get">
              @csrf
              <input type="text" name="search" placeholder="search for something" style="color: black;">
              <input type="submit" value="Search" class="btn btn-outline-primary">
            </form>
          </div>
          <table style="border: 2px solid white; width: 80%; margin: auto; text-align: center;">
            <tr style="background-color: skyblue;">
              <th style="padding: 10px;">Name</th>
              <th style="padding: 10px;">Email</th>
              <th style="padding: 10px;">Address</th>
              <th style="padding: 10px;">Phone</th>
              <th style="padding: 10px;">Product Title</th>
              <th style="padding: 10px;">Quantity</th>
              <th style="padding: 10px;">Price</th>
              <th style="padding: 10px;">Payment Status</th>
              <th style="padding: 10px;">Delivery Status</th>
              <th style="padding: 10px;">Image</th>
              <th style="padding: 10px;">Delivered</th>
              <th style="padding: 10px;">Print PDF</th>
              <th style="padding: 10px;">Send Email</th>
            </tr>
            @forelse($order as $order)
            <tr>
              <td>{{$order->name}}</td>
              <td>{{$order->email}}</td>
              <td>{{$order->address}}</td>
              <td>{{$order->phone}}</td>
              <td>{{$order->product_title}}</td>
              <td>{{$order->quantity}}</td>
              <td>{{$order->price}}</td>
              <td>{{$order->payment_status}}</td>
              <td>{{$order->delivery_status}}</td>
              <td>
                <img src="/product/{{$order->image}}" width="200" height="100">
              </td>
              <td>
                @if($order->delivery_status=='processing')
                <a href="{{url('delivered',$order->id)}}" class="btn btn-primary" onclick="return confirm('Are you sure this product is delivered ?')">Delivered</a>
                @else
                <p style="color: green;">Delivered</p>
                @endif
              </td>
              <td>
                <a href="{{url('print_pdf',$order->id)}}" class="btn btn-secondary">Print PDF</a>
              </td>
              <td>
                <a href="{{url('send_email',$order->id)}}" class="btn btn-info">Send Email</a>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="16">No Data Found</td>
            </tr>
            @endforelse
          </table>
        </div>
      </div>    

    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>