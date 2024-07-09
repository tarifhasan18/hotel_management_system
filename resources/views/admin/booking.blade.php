<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')
    <style>
        .table_deg{
            margin: auto;
            width: 100%;
            /* text-align: center; */
            margin-top: 40px;
            border-collapse: collapse;
        }
        .th_deg{
            background-color: #04AA6D;
            padding: 10px;
            color: white;
            text-align: center;
        }
        th, td {
              text-align: center;
              padding: 4px;
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
                <th class="th_deg">Room ID</th>
                <th class="th_deg">Customer Name</th>
                <th class="th_deg">Email</th>
                <th class="th_deg">Phone</th>
                <th class="th_deg">Arrival Date</th>
                <th class="th_deg">Leaving Date</th>
                <th class="th_deg">Status</th>
                <th class="th_deg">Room Title</th>
                <th class="th_deg">Price</th>
                <th class="th_deg">Image</th>
                <th class="th_deg">Delete</th>
                <th class="th_deg">Status Update</th>
            </tr>
          @foreach($data as $d)
            <tr>
                <td>{{$d->room_id}}</td>
                <td>{{$d->name}}</td>
                <td>{{$d->email}}</td>
                <td>{{$d->phone}}</td>
                <td>{{$d->start_date}}</td>
                <td>{{$d->end_date}}</td>
                {{-- <td>{{$d->status}}</td> --}}
                <td>
                    @if($d->status == 'approved')
                        <span style="color: blue">Approved</span>
                    @endif

                    @if($d->status == 'rejected')
                        <span style="color: red"> Rejected</span>
                    @endif

                    @if($d->status == 'waiting')
                        <span style="color: rgb(219, 8, 201)">Waiting</span>
                    @endif
                </td>
                <td>{{$d->room->room_title}}</td>
                <td>{{$d->room->price}}</td>
                <td>
                    <img src="/room/{{$d->room->image}}" alt="" style="width: 200px; height:50px;">
                </td>
                <td>
                    <a onclick="return confirm('Are you sure to delete?');" class="btn btn-danger" href="{{url('delete_booking',$d->id)}}">Delete</a>
                </td>
                <td>
                   <span style="padding: 10px">
                    <a class="btn btn-success" href="{{url('approve_book',$d->id)}}">Approve</a>
                   </span>
                    <a class="btn btn-warning" href="{{url('reject_book',$d->id)}}">Rejected</a>
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
