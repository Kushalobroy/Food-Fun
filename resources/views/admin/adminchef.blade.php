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
  
<div style="position: relative; top:60px; right:-150px">
  <div>
<form style="background-color: lightblue; color:black; border-radius:4px;" action="{{url('/uploadchef')}} " method="post" enctype="multipart/form-data" >
  <h1>Enter New Chef</h1>
  @csrf
   
    <div >

    <label >Name</label>
    <input style="color: blue" type="text" name="name" placeholder="Enter name" required>
</div>
<div>

    <label >Speciality</label>
    <input style="color: blue" type="text" name="speciality" placeholder="Enter name" required>
</div>
<div>
    <label >Image</label>
    <input style="color: blue" type="file" name="image"  required>
</div>
<div>
    <input class="btn btn-success" type="submit" value="Save" >
</div>

</form>
</div>
<br>
<table style="background-color: lightblue; color:black; border-radius:4px;">
  <h2><center>Chef's List</center></h2>
    <tr>
        <th style="padding: 30px" >Chef Name</th>
        <th style="padding: 30px" >Speciality</th>
        <th style="padding: 30px" >Image</th>
        <th style="padding: 30px" >Action</th>
        <th style="padding: 30px" >Action2</th>
    </tr>
    @foreach ($data as $data)
        
  
    <tr align="center">
      <td>{{$data->name}} </td>
      <td>{{$data->speciality}}</td>
      <td><img height="100" width="100" src="/chefimage/{{$data->image}} " alt=""> </td>
      <td><a class="btn btn-danger" href="{{url('/updatechef',$data->id)}} ">Update</a> </td>
      <td><a class="btn btn-primary" href="{{url('/deletechef',$data->id)}} ">Delete</a> </td>
    </tr>
    @endforeach
</table> 
    </div> 
   </div>
  </div> 
  
 
    @include('admin.adminscript')
    
  </body>
</html>