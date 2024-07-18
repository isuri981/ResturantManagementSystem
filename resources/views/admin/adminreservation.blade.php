<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->


  @include("admin.admincss")



</head>

<body>


  <div class="container-scroller">

    @include("admin.navbar")

    <div class="container mt-2">

      <h1>Reservation</h1>

      <div style="position: relative; top: 30px; right: -100px ">



        <table bgcolor="gray" border="1px">

          <tr>
            <th >Name</th>
            <th >Email</th>
            <th >Phone</th>
            <th >Date</th>
            <th >Time</th>
            <th >Message</th>

          </tr>

          @foreach($data as $data)

          <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->date}}</td>
            <td>{{$data->time}}</td>
            <td>{{$data->message}}</td>
            <td></td>

          </tr>

          @endforeach
        </table>
      </div>

    </div>

    @include("admin.adminscript")









</body>

</html>