<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe </title>






    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <style type="text/css">
    /* Center the table container */
    .div_center {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 100px;
    }

    /* Table styling */
    table {
        border-collapse: collapse;
        width: 80%;
        max-width: 1000px;
        background: linear-gradient(145deg, #fff, #f1f1f1);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        overflow: hidden;
        margin-top: 50px;
        font-family: 'Poppins', sans-serif;
    }

    th, td {
        padding: 15px;
        text-align: center; /* Center align text */
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #333;
        color: #fff;
        font-size: 18px;
        text-transform: uppercase;
    }

    td {
        font-size: 16px;
        color: #333;
    }

    /* Hover effects */
    tr:hover {
        background-color: #f5f5f5;
        transform: scale(1.01);
        transition: all 0.2s ease-in-out;
    }

    /* Image styling */
    td img {
        display: block;
        margin: 0 auto; /* Center image horizontally */
        border-radius: 8px;
        transition: transform 0.3s ease;
    }

    td img:hover {
        transform: scale(1.1);
    }

    /* Additional styling for responsiveness */
    @media (max-width: 768px) {
        table {
            width: 100%;
            font-size: 14px;
        }

        th, td {
            padding: 10px;
        }

        td img {
            width: 80px;
            height: 80px;
        }
    }

    @media (max-width: 480px) {
        th, td {
            padding: 8px;
            font-size: 12px;
        }

        td img {
            width: 60px;
            height: 60px;
        }
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
                            <img src="assets/images/klassy-logo.png" align="klassy cafe">

                            <a class="menu-trigger">

                                <span>Menu</span>

                            </a>

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


                            <li class="scroll-to-section"><a href="{{ url('/myorders') }}">
                                    My Orders</a></li>


                            <li class="scroll-to-section" style="background-color: red;">

                                @auth



                                <a href="{{ url('/showcart', Auth::user()->id) }}">

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

    <div class="div_center">

        <table class="table">
            <tr>

                <th style="background-color: dark;">Food Name</th>
                <th style="background-color: dark;">Price</th>
                <th style="background-color: dark;">Delivery status</th>
                <th style="background-color: dark;">Image</th>
            </tr>

            @foreach($order as $order)

            <tr>
               
                <td>{{$order->foodname}}</td>
                <td>{{$order->price}}</td>
                <td>{{$order->payment_status}}</td>
                <td>
                    <img height="100" width="100" src="/foodimage/1719994387.jpg">
                </td>


                
            </tr>


            @endforeach






        </table>

    </div>
    <br>
    <br>
    <br>
    


    <!-- ***** Footer Start ***** -->
     
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/white-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>klassy Cafe

                            <br>Design By Isu &#128147;
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

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