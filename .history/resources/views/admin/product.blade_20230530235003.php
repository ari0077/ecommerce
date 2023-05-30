<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')

  <style type="text/css">

.div center
{
    text-align: center;
    padding-top: 40px;
}
.font_size
{
    font-size: 40px;
    padding-bottom: 40px;
}
.text_color
{
    color: black;
    padding-bottom: 20px;
}
  </style>
  <body>
    <div class="container-scroller">
    @include('admin.sidebar')
    @include('admin.header')
    
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="div_center">

                <h1 class="font_size">Add Product</h1>
                <div>
                <label>Product Title</label>

                <input class="text_color" type="text" name="title" placeholder="Write a title">
            </div>
            <div>
                <label>Product Description</label>

                <input class="text_color" type="text" name="description" placeholder="Write a description">
            </div>
            <div>
                <label>Product Price</label>

                <input class="text_color" type="number" name="number" placeholder="Write a title">
            </div>
            <div>
                <label>Product Quantity</label>

                <input class="text_color" type="number" min="0" name="title" placeholder="Write a title">
            </div>
            <div>
                

                <label>Product Catagory</label>

                
            </div>

            <div>
                <label>Discount Price</label>

                <input class="text_color" type="number" name="discount_price" placeholder="Write a title">
            </div>
            <div>
                

                <label>Product Catagory :</label>
                <select class="text_color">
                    <option>Tshirt</option>
                </select>
                
            </div>
            <div>
                <label>Product image here :</label>
                <input type="file" name="image">
            </div>

            <div>
                <label>Product Title</label>

                <input type="text_color" name="title" placeholder="Write a title">
            </div>
            <div>
                <label>Product Title</label>

                <input type="text_color" name="title" placeholder="Write a title">
            </div>
            </div>
    @include('admin.script')
  </body>
</html>