<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include("admin.admincss")

  </head>
  <body>
    <div class="container-scroller">

    @include("admin.navbar")

    <form action="{{url('/updatefoodchef', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Chef Name</label>
            <input style="color: black;" type="text" name="name" value="{{$data->name}}">
        </div>
        <div>
            <label>Chef Speciality</label>
            <input style="color: black;" type="text" name="speciality" value="{{$data->speciality}}">
        </div>
        <div>
            <label>Old Image</label>
            <img src="/chefimage/{{$data->image}}" height="200" width="200">
        </div>
        <div>
            <label>New Image</label>
            <input type="file" name="image">
        </div>
        <div>
            <input style="background-color: white; color: black;" type="submit" value="Update Chef">
        </div>


    </form>

    </div>
    @include("admin.adminjs")

  </body>
</html>