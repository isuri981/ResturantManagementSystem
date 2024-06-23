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

        <a href="{{ route('AddFood')}}">Add</a>

        <div>

            <table bgcolor="black">
                <tr>
                    <th style="padding: 30px">Food Name</th>
                    <th style="padding: 30px">Price</th>
                    <th style="padding: 30px">Description</th>
                    <th style="padding: 30px">Image</th>

                    

                </tr>

                @foreach($data as $data)

                <tr align="center">
                    <td>{{$data->title}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->description}}</td>
                    <td><img width="60px" class="img-fluid" src="/foodimage/{{$data->image}}"></td>
                </tr>

                @endforeach

            </table>

        </div>

        </div>

    </div>

    @include("admin.adminscript")









</body>

</html>