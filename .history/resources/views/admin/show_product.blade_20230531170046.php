<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')

  <style type="text/css">
  .center
  {
    margin: auto;
    width: 50%;
  }

  </style>
  <body>
    <div class="container-scroller">
    @include('admin.sidebar')
    @include('admin.header')
    
    <div class="main-panel">
        <div class="content-wrapper">

            <table class="center">
                <tr>
                    <th>Product title</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Discount price</th>
                    <th>Product image</th>
                </tr>
                <tr>
                    <th>Product title</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Discount price</th>
                    <th>Product image</th>

                </tr>
            </table>
        </div>
    </div>
    @include('admin.script')
  </body>
</html>