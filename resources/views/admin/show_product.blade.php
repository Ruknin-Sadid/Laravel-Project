<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">

    .center
    {
        margin: auto;
        width: 80%;
        border: 7px solid magenta;
        text-align: center;
        margin-top: 40px;
        
    }

    .font_size
    {
        text-align: center;
        font-size: 40px;
        padding-top:20px;
    
    }

    .img_size
    {
        width: 150px;
        height: 150px;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 0px;
        padding-right: 0px;
    }

    .th_color
    {
        background-color:antiquewhite;
        color: black;
    }

    .th_design
    {
        padding: 15px;
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
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}

                </div>



                @endif

                
                <h2 class="font_size">
                    All Products
                </h2>
                <table class="center">
                    <tr class="th_color">
                        <th class="th_design">Product title</th>
                        <th class="th_design">Description</th>
                        <th class="th_design">Quantity</th>
                        <th class="th_design">Catagory</th>
                        <th class="th_design">Price</th>
                        <th class="th_design">Discount Price</th>
                        <th class="th_design">Product Image</th>
                        <th class="th_design">Delete</th>
                        <th class="th_design">Edit</th>
                    </tr>

                    @foreach($product as $product)

                    <tr>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->catagory}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->discount_price}}</td>
                        <td>
                            <img class="img_size" src="/product/{{$product->image}}" >
                        </td>

                        <td>
                            <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')" href="{{url('delete_product',$product->id)}}">Delete</a>
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a>
                        </td>
                    </tr>

                    @endforeach

                </table>



            </div>
        </div>    
        

 
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>