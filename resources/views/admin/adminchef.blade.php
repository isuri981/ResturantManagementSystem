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

    <div class="container">

      <h1>Food Chefs</h1>

      <a class="btn btn-primary btn btn-sm" href="{{ route('AddChef')}}">+Add Chef</a>

      <div style="position: relative; top: 60px; right: -100px ">

        <table>

          <tr align="center">
            <th>Chef Name</th>
            <th>Speciality</th>
            <th>Image</th>
            <th>Action</th>
            <th>Action2</th>
          </tr>

          @foreach($data as $data)

          <tr align="center">

            <td>{{$data->name}}</td>
            <td>{{$data->speciality}}</td>
            <td><img height="100" width="100" src="/chefimage/{{$data->image}}"></td>

            <td><a class="btn btn-success" href="{{url('/updatechef', $data->id)}}">Edit</a></td>

            <td><a class="btn btn-danger" href="{{url('/deletechef', $data->id)}}">Delete</a></td>

          </tr>

          @endforeach


        </table>
      </div>

    </div>

    @include("admin.adminscript")

  </div>
</body>

</html>