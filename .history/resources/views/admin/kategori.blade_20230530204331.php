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
</style>
  </head>
    <body>
      <div class="container-scroller">
        @include('admin.sidebar')
        @include('admin.header')

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="div_center">
                    <h2 class="">tambahkan kategori</h2>
                </div>
            </div>
        </div>
        
        @include('admin.script')
  </body>
</html>