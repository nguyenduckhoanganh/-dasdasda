<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>

    @include("admin.admincss")

  </head>
  <body>
    <div class="container-scroller">

    @include("admin.navbar")


    <h1>Customer Orders</h1>

    <table>
        <tr align="center">
            <th style="padding: 15px">Name</th>
            <th style="padding: 15px">Phone</th>
            <th style="padding: 15px">Address</th>
            <th style="padding: 15px">Food Name</th>
            <th style="padding: 15px">Price</th>
            <th style="padding: 15px">Quantity</th>
            <th style="padding: 15px">Total Price</th>
        </tr>
        @foreach($data as $data)
        <tr align="center" bgcolor="black">
            <td>{{$data->name}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->foodname}}</td>
            <td>{{$data->price}}$</td>
            <td>{{$data->quantity}}</td>
            <td>{{$data->price * $data->quantity}}$</td>
        </tr>
        @endforeach
    </table>


    
    </div>
    @include("admin.adminjs")

  </body>
</html>