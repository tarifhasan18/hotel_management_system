<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')
  </head>
  <body>
   @include('admin.header')

   @include('admin.sidebar')

   <div class="page-content">
    <div class="page-header">
      <div class="container-fluid">
          <center>
        <h1 style="font-size: 40px; font-weight:bold; color: white">Gallery</h1>

        <form action="{{url('upload_gallery')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding: 30px">
                <label for="">Upload Image</label>
                <input type="file" name="image" required>
                <input class="btn btn-primary" type="submit" value="Add Image">
            </div>
        </form>
    </center>
    <div class="row">
        @foreach($gallery as $g)
        <div class="col-md-4">
            <img style="width: 300px!important; height:300px!imortant;" src="/gallery/{{$g->image}}" alt="">
            <div style="padding: 10px">
                <a class="btn btn-danger" href="{{url('delete_gallery',$g->id)}}">Delete Image</a>
            </div>
        </div>
        @endforeach
    </div>
      </div>
    </div>
   </div>

    @include('admin.footer')
  </body>
</html>
