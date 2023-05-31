<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')

  <style type="text/css">
  .center
  {
    margin: auto;
    width: 50%;
    border: 2px solid white;
    text-align: center;
    margin-top: 40px;
  }
  .font_size
  {
    text-align: center;
    font-size: 40px;
    padding-top: 20px; 
  }
  .image_size
  {
    width: 150px;
    height: 150px;
  }
  .tr_color
  {
    background: skyblue;
  }


  </style>
  <body>
    <div class="container-scroller">
    @include('admin.sidebar')
    @include('admin.header')
    
    <div class="main-panel">
        <div class="content-wrapper">

            <h2 class="font_size">All product</h2>

            <table class="center">
                <tr class="tr_color">
                    <th>Product title</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Discount price</th>
                    <th>Product image</th>
                </tr>
                @foreach ($product as $product )
                    
                
                <tr>
                    <th>{{$product->title}}</th>
                    <th>{{$product->description}}</th>
                    <th>{{$product->quantity}}</th>
                    <th>{{$product->price}}</th>
                    <th>{{$product->discount_price}}</th>
                    <th>
                        <td>
                            <img class="img_size" src="/product/{{$product->image}}" alt="">
                        </td>
                    </th>

                </tr>
                @endforeach
            </table>
        </div>
    </div>
    @include('admin.script')
  </body>
</html>