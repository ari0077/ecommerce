<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  <body>
    <div class="container-scroller">
    @include('admin.sidebar')
    @include('admin.header')
    
    <div class="main-panel">
        <div class="content-wrapper">

            <table>
                <tr>
                    <th>Product title</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Discount price</th>
                </tr>
            </table>
        </div>
    </div>
    @include('admin.script')
  </body>
</html>