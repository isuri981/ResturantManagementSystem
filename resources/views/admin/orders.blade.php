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
        <style>
            .container {
                max-width: 1200px;
                margin: 50px auto;
                padding: 50px;
                background-color: #fff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
            }

            h1 {
                font-size: 30px;
                color: #333;
                text-align: left;
                margin-top: 20px;
                margin-bottom: 20px;
            }

            form {
                text-align: center;
                margin-bottom: 50px;
            }

            input[type="text"] {
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
                width: 200px;
                color: blue;
            }

            input[type="submit"] {
                background-color: #28a745;
                color: white;
                border: none;
                padding: 10px 20px;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
                background-color: white;

            }

            table th,
            table td {
                padding: 15px;
                text-align: center;
            }

            table th {
                background-color: greenyellow;
                color: black;
            }

            table td {
                background-color: #fff;
                color: #333;
            }

            table tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            table tr:hover {
                background-color: #f2f2f2;
                color: #333;
            }
        </style>
        </head>

        <body>
            <div class="container">
                <h1>Customers Orders</h1>
                <br>

                <form action="{{url('/search')}}" method="get">
                    @csrf
                    <input type="text" name="search" placeholder="Search by Name" style="width: 400px; right:-60px; color:blue;">
                    <input type="submit" value="Search" class="btn btn-success">
                </form>

                <div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Food Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Status</th>
                            <th>Change Status</th>
                            <th>print PDF</th>



                        </tr>
                        @foreach($data as $order)
                        <tr>
                            <td>{{$order->name}}</td>
                            <td>{{$order->phone}}</td>
                            <td>{{$order->address}}</td>
                            <td>{{$order->foodname}}</td>
                            <td>{{$order->price}}</td>
                            <td>{{$order->quantity}}</td>
                            <td>{{$order->price * $order->quantity}}$</td>
                            <td>

                                @if($order->payment_status== 'in progress')

                                <span style="color: red">{{$order->payment_status}}</span>
                                
                                @elseif($order->payment_status== 'On the way')

                                <span style="color:yellow;" >{{$order->payment_status}}</span>
                                
                                @else

                                <span style="color:skyblue;" >{{$order->payment_status}}</span>

                                
                                @endif

                            </td>
                            
                            <td>

                            <a class="btn btn-primary btn btn-sm" href="{{ url('on_the_way', $order->id) }}">On the way</a>

                            <br>

                                <a class="btn btn-success btn btn-sm"  href="{{ url('deliverd', $order->id ) }}">Deliverd</a>




                            </td>

                            <td>

                            <a class="btn btn-secondary" href="{{url('print_pdf',$order->id)}}" >Print PDF</a>

                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>

    </div>


    @include("admin.adminscript");









</body>

</html>