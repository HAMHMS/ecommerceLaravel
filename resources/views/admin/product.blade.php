<!DOCTYPE html>
<html lang="en">
  <head>
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
              <h2 class="font_size">Add Product</h2>
              <form action="{{url('/add_product')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="div_design">
                    <label>Product Title:</label>
                    <input type="text" name="title" placeholder="write a title" class="text_color" required>
                </div>
                <div class="div_design">
                    <label>Product Description:</label>
                    <input type="text" name="desc" placeholder="write a descrition" class="text_color" required>
                </div>
                <div class="div_design">
                    <label>Product Price:</label>
                    <input type="number" name="price" placeholder="write a price" class="text_color" required>
                </div>
                <div class="div_design">
                    <label>Discount Price:</label>
                    <input type="number" name="discount" placeholder="write a discount" class="text_color">
                </div>
                <div class="div_design">
                    <label>Product Quantity:</label>
                    <input type="number" name="quantity" placeholder="write a quantity" min="0" class="text_color" required>
                </div>
                <div class="div_design">
                    <label>Product Category:</label>
                    <select class="text_color" name="category" required>
                      <option value="" selected>Add a Category</option>
                      @foreach($category as $category)
                      <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="div_design">
                    <label>Product Image:</label>
                    <input type="file" name="image" required>
                </div>
                <div class="div_design">
                  <input type="submit" value="Add Product" class="btn btn-primary">
                </div>
            </form>
            </div>
          </div>
        </div>    
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>