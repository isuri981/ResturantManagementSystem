<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>

<body>


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

            <div class="container">

                <br>
                <h1>Users</h1>

                <br>
                <form action="{{url('/search')}}" method="get">

                    @csrf

                    <input type="text" name="search" style="color: blue;">

                    <input type="submit" value="Search" class="btn btn-success">

                </form>

                <div style="position: relative; top: 60px; right: -60px ">

                <table bgcolor="light blue" border="3px">
                    <tr align="center">
                        <th style="padding: 30px" text>Name</th>
                        <th style="padding: 30px">Email</th>
                        <th style="padding: 30px">Action</th>
                    </tr>

                    @foreach($data as $data)
                    <tr align="center">
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>

                        @if($data->usertype=="0")

                        <td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
                        @else

                        <td><a>Not Allowed</a></td>
                        @endif

                    </tr>

                    @endforeach
                </table>

            </div>


        </div>
        @include("admin.adminscript")









    </body>

    </html>
</body>

</html>