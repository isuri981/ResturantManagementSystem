<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">

<head>


  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
  


  @include("admin.admincss")



</head>

<body>


  <div class="container-scroller">

    @include("admin.navbar")

    <div class="container mt-2">

      <h1>Food Chefs</h1>

      <a class="btn btn-primary btn btn-sm" href="{{ route('AddChef')}}">+Add Chef</a>

      <div style="position: relative; top: 30px; right: -100px ">

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

            <td>
              <a class="btn btn-success" href="{{ url('/updatechef', $data->id) }}" title="Edit">
                <i class="fas fa-edit"></i>
              </a>
            </td>

            <td>
              <a class="btn btn-danger" href="{{ url('/deletechef', $data->id) }}" title="Delete" onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this item?')) { document.getElementById('delete-form-{{ $data->id }}').submit(); }">
                <i class="fas fa-trash"></i>
              </a>
              <form id="delete-form-{{ $data->id }}" action="{{ url('/deletechef', $data->id) }}" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
              </form>
            </td>


          </tr>

          @endforeach


        </table>
      </div>

    </div>

    @include("admin.adminscript")

  </div>
</body>

</html>