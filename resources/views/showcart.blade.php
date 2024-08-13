<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>Klassy Cafe</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Include the CSS styles here -->
    <style>
        /* General Body Styling */
        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            background-color: #f9f9f9;
        }

        /* Preloader Styling */
        #preloader .jumper div {
            background: #333;
        }

        /* Header Styling */
        header {
            background-color: #222;
            color: white;
            padding: 15px 0;
        }

        .header-area .nav a {
            color: white;
            font-size: 16px;
        }

        .header-area .nav a.active {
            color: orange;
        }

        /* Table Styling */
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        .table thead th {
            background-color: #ff5722;
            color: white;
            padding: 12px;
            text-align: center;
        }

        .table tbody td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .table img {
            border-radius: 8px;
            max-width: 100px;
            max-height: 100px;
        }

        .quantity {
            display: flex;
            align-items: center;
        }

        .quantity .form-control {
            text-align: center;
            font-size: 16px;
            width: 50px;
            margin: 0;
            padding: 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .quantity .btn {
            padding: 6px 12px;
            font-size: 14px;
            border-radius: 4px;
        }

        .quantity .btn-dark {
            background-color: #333;
            color: #fff;
        }

        .quantity .btn-dark:hover {
            background-color: #222;
        }

        /* Cart Summary Card */
        .cart-summery {
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background-color: #fff;
        }

        .cart-summery h2 {
            background-color: #ff5722;
            color: white;
            padding: 10px;
            border-radius: 4px;
            margin: 0;
            text-align: center;
        }

        .cart-summery .d-flex {
            margin-bottom: 10px;
        }

        .cart-summery .btn-dark {
            background-color: #333;
            color: white;
        }

        .cart-summery .btn-success {
            background-color: #4CAF50;
            color: white;
        }

        .cart-summery .btn-primary {
            background-color: #007bff;
            color: white;
        }

        /* Input and Button Styling */
        .form-control,
        .btn {
            border-radius: 4px;
        }

        .form-control {
            border: 1px solid #ddd;
            padding: 10px;
        }

        .btn {
            padding: 10px 15px;
            font-size: 16px;
        }

        .btn:hover {
            opacity: 0.9;
        }

        .btn-dark:hover {
            background-color: #222;
        }

        .btn-success:hover {
            background-color: #45a049;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Breadcrumb Styling */
        .breadcrumb {
            background-color: transparent;
            padding: 0;
        }

        .breadcrumb .breadcrumb-item a {
            color: #ff5722;
        }


        .item-image {
            width: 60px;
            height: 60px;
            border-radius: 8px;
            object-fit: cover;
        }

        .item-title {
            font-weight: bold;
        }

        .input-group {
            position: relative;
        }

        .input-group-btn {
            display: flex;
            align-items: center;
        }

        .quantity-input {
            width: 60px;
        }

        .btn-dark {
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
        }

        .btn-dark:hover {
            background-color: #555;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 4px;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }
    </style>

</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" alt="klassy cafe">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>
                            <li class="scroll-to-section" style="background-color: red;">
                                @auth
                                <a href="{{url('/showcart', Auth::user()->id)}}">Cart{{$count}}</a>
                                @endauth
                                @guest
                                Cart[0]
                                @endguest
                            </li>
                            <li>
                                @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                    @auth
                            <li><x-app-layout></x-app-layout></li>
                            @else
                            <li><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>
                            @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                            @endif
                            @endauth
                </div>
                @endif
                </li>
                </ul>
                <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
        </div>
    </header>

    <br>
    <br>

    <!-- Main Content -->
    <section class="section-5 pt-3 pb-3 mb-3 bg-white">
        <div class="container">
            <div class="light-font">
                <ol class="breadcrumb primary-color mb-0">
                    <li class="breadcrumb-item"><a class="white-text" href="#">Cart</a></li>
                </ol>
            </div>
        </div>
    </section>

    <section class="section-9 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="table-responsive">
                        <table class="table" id="cart">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @csrf
                                @foreach($data as $item)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">


                                            <span class="item-title ml-2">{{ $item->title }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="text" name="price[]" value="{{ $item->price }}" hidden>
                                        $<span class="item-price">{{ $item->price }}</span>
                                    </td>
                                    <td>
                                        <div class="input-group quantity mx-auto" style="width: 120px;">
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-dark btn-minus p-2" data-id="{{ $item->id }}">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                            </div>
                                            <input type="text" class="form-control form-control-sm border-0 text-center quantity-input" value="{{ $item->quantity_id }}" readonly>
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-dark btn-plus p-2" data-id="{{ $item->id }}">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        $<span class="item-total">{{ $item->price * $item->quantity_id }}</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-danger remove" data-id="{{ $item->id }}">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card cart-summery">
                        <div class="sub-title mt-3">
                            <h2 class="bg-black">Cart Summary</h2>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between pb-2">
                                <div>Subtotal</div>
                                <div id="subtotal">$8400</div>
                            </div>
                            <div class="d-flex justify-content-between pb-2">
                                <div>Shipping</div>
                                <div>$0</div>
                            </div>
                            <div class="d-flex justify-content-between summery-end">
                                <div>Total</div>
                                <div id="total">$8400</div>
                            </div>
                            <br>
                            <div style="padding: 10px;">
                                <button class="btn-dark btn btn-block w-100" id="order">Order Now</button>
                            </div>
                        </div>

                        <div id="appear" align="center" style="padding: 10px; display:none;">
                            <div style="padding: 10px;">
                                
                                <input type="text" name="name" placeholder="Name" class="form-control">
                            </div>
                            <div style="padding: 10px;">
                                
                                <input type="number" name="phone" placeholder="Phone Number" class="form-control">
                            </div>
                            <div style="padding: 10px;">
                                
                                <input type="text" name="address" placeholder="Address" class="form-control">
                            </div>
                            <div style="padding: 10px;">
                                <input class="btn btn-success" type="submit" value="Cash On Delivery">
                                <a class="btn btn-primary" href="{{url('stripe')}}">Pay Using Card</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- JavaScript for Interactivity -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.btn-plus').click(function() {
                var $input = $(this).siblings('.quantity-input');
                var currentValue = parseInt($input.val());
                $input.val(currentValue + 1);
            });

            $('.btn-minus').click(function() {
                var $input = $(this).siblings('.quantity-input');
                var currentValue = parseInt($input.val());
                if (currentValue > 1) {
                    $input.val(currentValue - 1);
                }
            });
        });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.remove').click(function(e) {
                e.preventDefault();
                var itemId = $(this).data('id');

                if (confirm('Are you sure you want to remove this item?')) {
                    $.ajax({
                        url: '/remove/' + itemId,
                        type: 'GET',
                        success: function(response) {
                            // Optionally, you can update the cart UI or reload the page
                            location.reload();
                        },
                        error: function(xhr) {
                            alert('An error occurred while removing the item.');
                        }
                    });
                }
            });
        });
    </script>




    <script type="text/javascript">
        $("#order").click(function() {
            $("#appear").show();
        });

        $("#close").click(function() {
            $("#appear").hide();
        });

        $('.add').click(function() {
            var quantity_idElement = $(this).parent().prev(); // Qty Input
            var quantity_idValue = parseInt(quantity_idElement.val());
            if (quantity_idValue < 10) {
                quantity_idElement.val(quantity_idValue + 1);
            }
        });

        $('.sub').click(function() {
            var quantity_idElement = $(this).parent().next();
            var quantity_idValue = parseInt(quantity_idElement.val());
            if (quantity_idValue > 1) {
                quantity_idElement.val(quantity_idValue - 1);
            }
        });
    </script>

    <script>
        document.querySelectorAll('.btn-minus').forEach(button => {
            button.addEventListener('click', function() {
                const row = this.closest('tr');
                const input = row.querySelector('.quantity-input');
                let quantity = parseInt(input.value);
                if (quantity > 1) {
                    quantity--;
                    input.value = quantity;
                    updateTotal(row, quantity);
                }
            });
        });

        document.querySelectorAll('.btn-plus').forEach(button => {
            button.addEventListener('click', function() {
                const row = this.closest('tr');
                const input = row.querySelector('.quantity-input');
                let quantity = parseInt(input.value);
                quantity++;
                input.value = quantity;
                updateTotal(row, quantity);
            });
        });

        document.querySelectorAll('.remove').forEach(button => {
            button.addEventListener('click', function() {
                const row = this.closest('tr');
                row.remove();
                // Optionally, update the cart total and perform any additional actions
            });
        });

        function updateTotal(row, quantity) {
            const price = parseFloat(row.querySelector('.item-price').textContent);
            const total = price * quantity;
            row.querySelector('.item-total').textContent = total.toFixed(2);
        }
    </script>







    <!-- <br>
            <form action="{{ url('orderconfirm') }}" method="post">

                @csrf

                @foreach($data as $item)

                <tr align="center">
                    <td style="border: 1px solid #000;">
                        <input type="text" name="foodname[]" value="{{ $item->title }}" hidden>
                        {{ $item->title }}
                    </td>
                    <td style="border: 1px solid #000;">
                        <input type="text" name="price[]" value="{{ $item->price }}" hidden>
                        {{ $item->price }}
                    </td>
                    <td style="border: 1px solid #000;">
                        <input type="text" name="quantity[]" value="{{ $item->quantity_id }}" hidden>
                        {{ $item->quantity_id }}
                    </td>
                    <td style="border: 1px solid #000;">
                        <a href="{{ url('/remove', $item->id) }}" class="btn btn-danger btn btn-sm">Delete</a>
                    </td>
                </tr>

                @endforeach

        </table>

    </div> -->



    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>
</body>

</html>