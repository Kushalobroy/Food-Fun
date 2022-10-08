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

<div class="container">
<div>
<h1>Customers Oders</h1>
<form  action="{{url('search')}} " method="get">
    @csrf
<table>
    <input type="text" name="search" style="color: blue;">
    <input type="submit" value="Search" class="btn btn-success" >
</table>
</form>
<br>
<table style="background-color: lightblue; border-radius:4px;">
    <tr align="center">
        <th style="padding: 30px;" >Name</th>
        <th style="padding: 30px;">Phone</th>
        <th style="padding: 30px;">Address</th>
        <th style="padding: 30px;">Food Name</th>
        <th style="padding: 30px;">Price</th>
        <th style="padding: 30px;">Quantity</th>
        <th style="padding: 30px;">Total Prices</th>
    </tr>
    @foreach ($data as $data)
   
    <tr align="center" style="background-color:black">
        <td>{{$data->name}} </td>
        <td>{{$data->phone}} </td>
        <td>{{$data->address}} </td>
        <td>{{$data->foodname}} </td>
        <td>{{$data->price}} </td>
        <td>{{$data->quantity}} </td>
        <td>{{$data->price * $data->quantity}} </td>
    </tr>
         
    @endforeach
</table>
</div> 
  </div>    
    @include('admin.adminscript')
    
  </body>
</html>