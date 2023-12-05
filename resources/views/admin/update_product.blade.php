<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.css')
    <style type="text/css">
      .div_center{
        text-align: center;
        padding-top: 40px;
      }
      .font_size{
        font-size: 40px;
        padding-bottom: 40px;
      }
      .text_color{
        color: black;
      }
      label{
        display: inline-block;
        width: 200px;
      }
      .div_design{
        padding-bottom: 15px;
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
            <div class="div_center">
              <h2 class="font_size">Update Product</h2>
              <form action="{{url('/update_product_confirm',$product->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="div_design">
                    <label>Product Title:</label>
                    <input type="text" name="title" placeholder="write a title" class="text_color" required value="{{$product->title}}">
                </div>
                <div class="div_design">
                    <label>Product Description:</label>
                    <input type="text" name="desc" placeholder="write a descrition" class="text_color" required value="{{$product->description}}">
                </div>
                <div class="div_design">
                    <label>Product Price:</label>
                    <input type="number" name="price" placeholder="write a price" class="text_color" required value="{{$product->price}}">
                </div>
                <div class="div_design">
                    <label>Discount Price:</label>
                    <input type="number" name="discount" placeholder="write a discount" class="text_color" value="{{$product->dicount_price}}">
                </div>
                <div class="div_design">
                    <label>Product Quantity:</label>
                    <input type="number" name="quantity" placeholder="write a quantity" min="0" class="text_color" required value="{{$product->quantity}}">
                </div>
                <div class="div_design">
                    <label>Product Category:</label>
                    <select class="text_color" name="category" required>
                      <option value="{{$product->category}}" selected>{{$product->category}}</option>
                       @foreach($category as $category)
                      <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="div_design">
                    <label>Current Product Image:</label>
                    <img style="margin:auto;" height="100" width="100" src="/product/{{$product->image}}">
                </div>
                <div class="div_design">
                    <label>Change Product Image:</label>
                    <input type="file" name="image">
                </div>
                <div class="div_design">
                  <input type="submit" value="Update Product" class="btn btn-primary">
                </div>
            </form>
            </div>
          </div>
        </div>    
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>