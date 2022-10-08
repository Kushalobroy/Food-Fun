<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
   
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
   @include('admin.navbar')
       
    <div style="position: relative; top:60px;right:-60px;" >
      <h1><center>Registered User's</center></h1>
        <table bgcolor="grey" border="3px" style="background-color:lightblue; color:black; border-radius:4px; ">
            <tr>
                <th style="padding:30px">Name</th>
                <th style="padding:30px">Email</th>
                <th style="padding:30px">Action</th>
            </tr>
            @foreach ($data as $data)
                
   
            <tr align="center">
                <td >{{$data->name}}</td>
                <td >{{$data->email}}</td>

                @if ($data->usertype=='0')
                  <td ><a class="btn btn-danger" href="{{url('/deleteuser',$data->id)}} "> Delete</a> </td>
                @else 
                <td ><a > Not Allowed </a> </td>
                @endif
                
            </tr>
            @endforeach
        </table>
    </div>
    </div>
    @include('admin.adminscript')
   
  </body>
</html>