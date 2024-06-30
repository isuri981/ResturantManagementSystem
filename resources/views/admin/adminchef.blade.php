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

    <div style="position: relative; top:60px; right: -150px ">

        <a href="{{ route('AddChef')}}">Add</a>

   
   <table bgcolor="black">

    <tr>
        <th style="padding: 30px;">Chef Name</th>
        <th style="padding: 30px;">Speciality</th>
        <th style="padding: 30px;">Image</th>
        <th style="padding: 30px;">Action</th>
        <th style="padding: 30px;">Action</th>
    </tr>

    @foreach($data as $data)
   
    <tr align="center">

        <td>{{$data->name}}</td>
        <td>{{$data->specaility}}</td>
        <td><img height="100" width="100" src="/chefimage/{{$data->image}}"></td>
        <td><a href="{{url('/updatechef', $data->id)}}">Update</a></td>
        
        <td><a href="{{url('/deletechef', $data->id)}}">Delete</a></td>

    </tr>

    @endforeach


   </table>

  </div>

  @include("admin.adminscript")









</body>

</html>