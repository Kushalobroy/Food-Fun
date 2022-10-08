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

      <div  style="position: relative; top:60px; right:-150px">
        
        <form style="background-color: lightblue; color:black; border-radius:4px;" action="{{url('/uploadfood')}} " method="post" enctype="multipart/form-data">
          <h1>Enter Food's</h1>
            @csrf
            
            <div>
                <label >Title</label>
                <input style="color:black" type="text" name="title" placeholder="Write a Title " required>
            </div>

            <div>
                <label >Price</label>
                <input style="color:black" type="num" name="price" placeholder="Price" required>
            </div>

            <div>
                <label >Image</label>
                <input  type="file" name="image" placeholder="Write a Title " required>
            </div>

            <div>
                <label >Description</label>
                <input style="color:black" type="text" name="description" placeholder="Description" required>
            </div>

            <div>
                <input class="btn btn-success" type="submit" value="Save">
            </div>

        </form>
        <br>
        <div>
            <table style="background-color: lightblue; color:black; border-radius:4px;">
                    <h2><center>Food List</center></h2>
                  <tr>
                    <th  style="padding: 30px" >Food Name</th>
                    <th  style="padding: 30px">Price</th>
                    <th  style="padding: 30px">Description</th>
                    <th  style="padding: 30px">Image</th>
                    <th  style="padding: 30px">Action</th>
                    <th  style="padding: 30px">Update</th>
                  </tr>
                  @foreach ($data as $data)
                      
                  
                  <tr align="center">
                    <td>{{$data->title}} </td>
                    <td>{{$data->price}} </td>
                    <td>{{$data->description}} </td>
                    <td><img height="200" width="200" src="/foodimage/{{$data->image}}"></td>
                    <td ><a class="btn btn-danger" href="{{url('/deletemenu', $data->id)}} ">Delete</a></td>
                    <td><a class="btn btn-primary" href="{{url('/updateview', $data->id)}} ">Update</a></td>
                  </tr>
                  @endforeach
            </table>

        </div>


      </div>
</div>
    @include('admin.adminscript')
    
  </body>
</html>