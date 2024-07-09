<!DOCTYPE html>
<html>
  <head>
      <base href="/public">
    @include('admin.css')
    <style>
        label{
            display: inline-block;
            width: 200px;
        }
        .div_deg{
            padding-top: 10px;
        }
    </style>
  </head>
  <body>
   @include('admin.header')

   @include('admin.sidebar')

        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                        <center>
                            <h1 style="font-size: 30px; font-weight: bold; ">Send mail to {{$data->name}}</h1>
                        <form action="{{url('mail',$data->id)}}" method="POST">
                            @csrf
                            <div class="div_deg">
                                <label for="">Greeting</label>
                                <input type="text" name="greeting" placeholder="Greetings" required>
                            </div>
                            <div class="div_deg">
                                <label for="">Mail Body</label>
                                <textarea name="body" placeholder="Write Mail Body"></textarea>
                            </div>
                            <div class="div_deg">
                                <label for="">Action Text</label>
                                <input type="text" name="action_text" placeholder="Action Text" required>
                            </div>
                            <div class="div_deg">
                                <label for="">Action Url</label>
                                <input type="text" name="action_url" placeholder="Action Url" required>
                            </div>
                            <div class="div_deg">
                                <label for="">Endline</label>
                                <input type="text" name="endline" placeholder="End Line" required>
                            </div>
                            <div class="div_deg">
                                <input class="btn btn-primary" type="submit" value="Send Mail">
                            </div>
                        </form>
                    </center>
                </div>
            </div>
        </div>
    @include('admin.footer')
  </body>
</html>
