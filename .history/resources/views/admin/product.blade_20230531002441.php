<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')

  <style type="text/css">

.div_center
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
label
{
    display: inline-block;
    width: 200px;
}
.div_design
{
padding-bottom: 15px;
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
                <form>
                <div class="div_design">
                <label>Product Title</label>

                <input class="text_color" type="text" name="title" placeholder="Write a title" required="">
            </div>
            <div class="div_design">
                <label>Product Description</label>

                <input class="text_color" type="text" name="description" placeholder="Write a description" required="">
            </div>
            <div class="div_design">
                <label>Product Price</label>

                <input class="text_color" type="number" name="price" placeholder="Write a price" required="">
            </div>
            <div class="div_design">
                <label>Product Quantity</label>

                <input class="text_color" type="number" min="0" name="quantity" placeholder="Write a quantity" required="">
            </div>
            

            <div class="div_design">
                <label>Discount Price</label>

                <input class="text_color" type="number" name="dis_price" placeholder="Write a discount price" >
            </div>
            <div class="div_design">
                

                <label>Product Catagory :</label>
                <select class="text_color" name="catagory" required="">
                    <option value="" selected="">Add a catagory here</option>
                    <option>Tshirt</option>
                    
                </select>
                
            </div>
            <div class="div_design">
                <label>Product image here :</label>
                <input type="file" name="image" required="">
            </div>
            <div>
                <input type="submit" value="Add product" class="btn btn-primary">
            
            </div>

            
            </div>
    @include('admin.script')
  </body>
</html>