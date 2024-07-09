<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')
    <style>
        label{
            display: inline-block;
            width: 200px;
        }
        .div_deg{
            padding-top: 10px;
        }
        .div_center{
            margin-left: 300px;
            padding-top: 40px;
        }
    </style>
  </head>
  <body>
   @include('admin.header')

   @include('admin.sidebar')
   <div class="page-content">
    <div class="page-header">
      <div class="container-fluid">

        <div class="div_center">
            <h1 style="font-size: 30px; font-weight: bold;">Add Rooms</h1>
            <form action="{{url('add_room')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="div_deg">
                    <label for="">Room Title</label>
                    <input type="text" name="title" placeholder="Room Title" required>
                </div>
                <div class="div_deg">
                    <label for="">Description</label>
                    <textarea name="description" placeholder="Enter Room Description"></textarea>
                </div>
                <div class="div_deg">
                    <label for="">Price</label>
                    <input type="number" name="price" placeholder="Enter Price" required>
                </div>
                <div class="div_deg">
                    <label for="">Room Type</label>
                    <select name="type" id="">
                        <option value="regular" selected>Regular</option>
                        <option value="premium">Premium</option>
                        <option value="deluxe">Deluxe</option>
                    </select>
                </div>
                <div class="div_deg">
                    <label for="">Free WiFi</label>
                    <select name="wifi" id="">
                        <option value="yes" selected>Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div class="div_deg">
                    <label for="">Upload Image</label>
                    <input type="file" name="image" required>
                </div>
                <div class="div_deg">
                    <input class="btn btn-primary" type="submit" value="Add Room">
                </div>
            </form>
        </div>

      </div>
    </div>
   </div>
    @include('admin.footer')
  </body>
</html>
