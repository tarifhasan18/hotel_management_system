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
                    <th class="th_deg">Name</th>
                    <th class="th_deg">Email</th>
                    <th class="th_deg">Phone</th>
                    <th class="th_deg">Messages</th>
                    <th class="th_deg">Send Mail</th>
                </tr>
                @foreach($contact as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->message}}</td>
                        <td>
                            <a class="btn btn-success" href="{{url('send_mail',$data->id)}}">Send</a>
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
