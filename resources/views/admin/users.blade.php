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



            <h1>Users</h1>


            <form action="{{url('/search')}}" method="get">

                @csrf

                <div>


                    <input type="text" name="search" placeholder="Search by User" style="width: 300px; right:-120px; color:blue;">

                    <input type="submit" value="Search" class="btn btn-success">
                </div>

            </form>



            <a href="{{ route('adduser') }}" class="btn btn-primary btn btn-sm" style="width: 150px;">+Add users</a>

            <div style="position: relative; top: 30px; right: -100px ">



                <table>

                    <tr align="center">

                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                        <th>Action 2</th>

                    </tr>

                    @foreach($data as $data)
                    <tr align="center">
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>

                        <td><a class="btn btn-success" href="{{url('/editteuser',$data->id)}}">Edit</a></td>

                        @if($data->usertype=="1")

                        <td><a class="btn btn-danger" href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
                        @else

                        <td><a>Not Allowed</a></td>
                        @endif

                    </tr>

                    @endforeach
                </table>

            </div>


        </div>
        @include("admin.adminscript")
    </div>








</body>


</html>