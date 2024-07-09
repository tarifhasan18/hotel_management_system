<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')
    <style>
        .table_deg{
            margin: auto;
            width: 90%;
            text-align: center;
            margin-top: 40px;
            border-collapse: collapse;
        }
        .th_deg{
            background-color: #04AA6D;
            padding: 15px;
            color: white;
            text-align: center;
        }
        th, td {
              text-align: center;
              padding: 8px;
        }
        td{
            color: black;
        }
        tr:nth-child(even){
            background-color: #f2f2f2
        }
        tr:nth-child(odd){
            background-color: white;
        }
        tr:hover {background-color: #ddd;}
    </style>
  </head>
  <body>
   @include('admin.header')

   @include('admin.sidebar')

   <div class="page-content">
    <div class="page-header">
      <div class="container-fluid">

        <table class="table_deg">
            <tr>
                <th class="th_deg">Room Title</th>
                <th class="th_deg">Description</th>
                <th class="th_deg">Price</th>
                <th class="th_deg">WiFi</th>
                <th class="th_deg">Room Type</th>
                <th class="th_deg">Image</th>
                <th class="th_deg">Delete</th>
                <th class="th_deg">Update</th>
            </tr>
            @foreach($data as $d)
                <tr>
                    <td>{{$d->room_title}}</td>
                    <td>{!! Str::limit($d->description, 100) !!}</td>
                    <td>{{$d->price}}</td>
                    <td>{{$d->wifi}}</td>
                    <td>{{$d->room_type}}</td>
                    <td>
                        <img src="room/{{$d->image}}" width="60" alt="">
                    </td>
                    <td>
                        <a onclick="return confirm('Are you sure to delete?');" href="{{url('room_delete',$d->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                    <td>
                        <a href="{{url('room_update',$d->id)}}" class="btn btn-warning">Update</a>
                    </td>
                </tr>
            @endforeach
        </table>
      </div>
    </div>
   </div>
    @include('admin.footer')
  </body>
</html>
