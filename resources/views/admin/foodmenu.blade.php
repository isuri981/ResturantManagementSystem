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

            <h1>FoodMenu</h1>




            <a class="btn btn-primary btn btn-sm" href="{{ route('AddFood')}}">+Add foods</a>

            <div style="position: relative; top: 60px; right: -100px ">

                <table>
                    <tr align="center">
                        <th>Food Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                        <th>Action2</th>



                    </tr>

                    @foreach($data as $data)

                    <tr align="center">
                        <td>{{$data->title}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->description}}</td>
                        <td><img height="100px" width="100" src="/foodimage/{{$data->image}}"></td>

                        <td><a class="btn btn-success" href="{{url('/updateview',$data->id)}}">Edit</a></td>

                        <td>
                            <button class="btn btn-danger" onclick="event.preventDefault();
        if (confirm('Are you sure you want to delete this item?')) {
            document.getElementById('delete-form-{{ $data->id }}').submit();
        }">
                                Delete
                            </button>
                            <form id="delete-form-{{ $data->id }}" action="{{ url('/deletemenu', $data->id) }}" method="POST" style="display: none;">
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









</body>

</html>