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
                    <th style="padding: 30px">Action</th>
                    <th style="padding: 30px">Action2</th>

                    

                </tr>

                @foreach($data as $data)

                <tr align="center">
                    <td>{{$data->title}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->description}}</td>
                    <td><img height="200px" width="200" src="/foodimage/{{$data->image}}"></td>
                    
                    <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                    
                    <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>
                
                </tr>

                @endforeach

            </table>

        </div>

        </div>

    </div>

    @include("admin.adminscript")









</body>

</html>