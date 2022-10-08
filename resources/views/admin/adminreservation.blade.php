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

<div style="position: relative; top:70px; right:-150">
    <table style="background-color: lightblue; color:black; border-radius:4px;">
        <tr style="background-color:white; color:black; ">
            <th style="padding: 30px;">Name</th>
            <th style="padding: 30px;">E-mail</th>
            <th style="padding: 30px;">No. of Guest</th>
            <th style="padding: 30px;">Phone</th>
            <th style="padding: 30px;">Date</th>
            <th style="padding: 30px;">Time</th>
            <th style="padding: 30px;">Message </th>
            
        </tr>
        @foreach ($data as $data)
            
      
        <tr align="center">
            <td>{{$data->name}} </td>
            <td>{{$data->email}} </td>
            <td>{{$data->guest}} </td>
            <td>{{$data->phone}} </td>
            <td>{{$data->date}} </td>
            <td>{{$data->time}} </td>
            <td>{{$data->message}} </td>

        </tr>
        @endforeach
    </table>
</div>
   
  </div>    
    @include('admin.adminscript')
    
  </body>
</html>