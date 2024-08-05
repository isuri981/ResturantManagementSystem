<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe </title>
    <!--
    



-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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
                            <img src="assets/images/klassy-logo.png" align="klassy cafe">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>

                            <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
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
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>


                            <li class="scroll-to-section" style="background-color: red;">

                                @auth

                                <a href="{{url('/showcart', Auth::user()->id)}}">

                                    Cart{{$count}}

                                </a>

                                @endauth

                                @guest

                                Cart[0]

                                @endguest


                            </li>


                            <li>

                                @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                    @auth
                            <li>
                                <x-app-layout>

                                </x-app-layout>

                            </li>
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
                <!-- <a class='menu-trigger'>
                            <span>Menu</span>
                        </a> -->
                <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
        </div>
    </header>

    <br>
    <br>
    <br>
    <br>
    <section class="section-5 pt-3 pb-3 mb-3 bg-white">
        <div class="container">
            <div class="light-font">
                <ol class="breadcrumb primary-color mb-0">
                    <li class="breadcrumb-item"><a class="white-text" href="#">Cart</a></li>

                </ol>
            </div>
        </div>
    </section>


    <section class=" section-9 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="table-responsive">
                        <table class="table" id="cart" style="padding: 15px; border: 4px solid #000;">
                            <thead>
                                <tr>
                                    <th style="background-color: orange;">Item</th>
                                    <th style="background-color: orange;">Price</th>
                                    <th style="background-color: orange;">Quantity</th>
                                    <th style="background-color: orange;">Total</th>
                                    <th style="background-color: orange;">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @csrf

                                @foreach($data as $item)

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">


                                            <input type="text" name="foodname[]" value="{{ $item->title }}" hidden>
                                            {{ $item->title }}

                                        </div>
                                    </td>
                                    <td><input type="text" name="price[]" value="{{ $item->price }}" hidden>
                                        ${{ $item->price }}
                                    </td>
                                    <td>
                                        <div class="input-group quantity mx-auto" style="width: 100px;">
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-dark btn-minus p-2 pt-1 pb-1 sub">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                            </div>

                                            <input type="text" class="form-control form-control-sm  border-0 text-center" value="{{ $item->quantity_id }}" hidden>
                                            {{ $item->quantity_id }}

                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-dark btn-plus p-2 pt-1 pb-1 add">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        ${{ $item->price*$item->quantity_id}}
                                    </td>

                                    <td>
                                    <a href="{{ url('/remove', $item->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                                    </td>

                                   

                                </tr>


                            </tbody>

                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card cart-summery">
                        <div class="sub-title mt-3">
                            <h2 class="bg-white">Cart Summery</h3>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between pb-2">
                                <div>Subtotal</div>
                                <div>$8400</div>
                            </div>
                            <div class="d-flex justify-content-between pb-2">
                                <div>Shipping</div>
                                <div>$0</div>
                            </div>
                            <div class="d-flex justify-content-between summery-end">
                                <div>Total</div>
                                <div>$8400</div>
                            </div>

                            <br>
                            <div style="padding: 10px;">

                                <button class="btn-dark btn btn-block w-100 type=" button" id="order">Order Now</button>

                            </div>



                            <div id="appear" align="center" style="padding: 10px; display:none;">

                                <div style="padding: 10px;">

                                    <label>Name</label>
                                    <input type="text" name="name" placeholder="Name">

                                </div>

                                <div style="padding: 10px;">

                                    <label>Phone</label>
                                    <input type="number" name="phone" placeholder="Phone Number">

                                </div>

                                <div style="padding: 10px;">

                                    <label>Address</label>
                                    <input type="text" name="address" placeholder="Address">

                                </div>

                                <div style="padding: 10px;">

                                    <input class="btn btn-success" type="submit" value="Cash On Delivery">

                                    <a class="btn btn-primary" href="{{url('stripe')}}">Pay Using Card</a>

                                </div>

                            </div>

                            </form>





                        </div>


                        <script type="text/javascript">
                            $("#order").click(

                                function() {
                                    $("#appear").show();
                                }
                            );

                            $("#close").click(

                                function() {
                                    $("#appear").hide();
                                }
                            );
                        </script>

                    </div>
                </div>
                <!-- <div class="input-group apply-coupan mt-4">
                        <input type="text" placeholder="Coupon Code" class="form-control">
                        <button class="btn btn-dark" type="button" id="button-addon2">Apply Coupon</button>
                    </div> -->


            </div>
        </div>
        </div>
    </section>

    <section>
        <script>
            $('.add').onclick(function() {
                var quantity_idElement = $(this).parent().prev(); //Qty Input
                var quantity_idValue = parseInt(quantity_idElement.val());
                if (quantity_idValue < 10) {
                    quantity_idElement.val(quantity_idValue + 1);
                }
            });

            $('.sub').onclick(function() {
                var quantity_idElement = $(this).parent().next();
                var quantity_idValue = parseInt(quantity_idElement.val());
                if (quantity_idValue > 1) {
                    quantity_idElement.val(quantity_idValue - 1);
                }
            });
        </script>
    </section>




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