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
  .th_dig
  {
    padding: 30px;
  }


  </style>
  <body>
    <div class="container-scroller">
    @include('admin.sidebar')
    @include('admin.header')
    
    <div class="main-panel">
        <div class="content-wrapper">

            @if(session()->has('message'))

               <div class="alert alert-success">

                <button type="button" class="close" data-dismiss="alert"
                aria-hidden="true">X</button>
                {{session()->get('message')}}

               </div>
                @endif

            <h2 class="font_size">All product</h2>

            <table class="center">
                <tr class="tr_color">
                    <th class="th_dig">Product title</th>
                    <th class="th_dig">Description</th>
                    <th class="th_dig">Quantity</th>
                    <th class="th_dig">Price</th>
                    <th class="th_dig">Discount price</th>
                    <th class="th_dig">Product image</th>
                    <th class="th_dig">delete</th>
                    <th class="th_dig">edit</th>
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

                    <td>
                        <a class="btn btn-danger" onclick="return confirm('are you sure')" href="{{url('delete_product, $product->id')}}">delete</a>
                    </td>

                    <td>
                        <a class="btn btn-success" onclick="return confirm('apa kamu yakin?')" href="{{url('edit_product, $product->id')}}">edit</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    @include('admin.script')
  </body>
</html>