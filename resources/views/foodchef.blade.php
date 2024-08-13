<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Klassy Cafe</title>

    <style>
        /* Styling for chef images */
        .chef-image {
            height: 360px;
            /* Fixed height */
            width: 341px;
            /* Fixed width */
            object-fit: cover;
            /* Ensure image covers the dimensions */
            border-radius: 8px;
            /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Shadow for depth */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* Smooth transition for hover effect */
        }

        .chef-image:hover {
            transform: scale(1.05);
            /* Slight zoom effect on hover */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
            /* Enhanced shadow on hover */
        }

        .chef-item {
            position: relative;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .chef-item:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }

        .thumb {
            position: relative;
        }

        .social-icons {
            position: absolute;
            top: 15px;
            right: 15px;
            display: flex;
            gap: 10px;
        }

        .social-icons li {
            list-style: none;
        }

        .social-icons a {
            color: #fff;
            font-size: 18px;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #ff9900;
            /* Change to your desired hover color */
        }

        .down-content {
            padding: 15px;
            text-align: center;
        }

        .down-content h4 {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .specialty {
            display: block;
            font-size: 14px;
            color: #666;
            margin-top: 5px;
            font-weight: 400;
        }

        .social-icons {
            list-style: none;
            padding: 0;
            display: flex;
            gap: 15px;
        }

        .social-icons li {
            display: inline-block;
        }

        .social-icons a {
            display: block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            background-color: #f0ad4e;
            color: white;
            text-align: center;
            border-radius: 50%;
            transition: background-color 0.3s ease-in-out;
        }

        .social-icons a:hover {
            background-color: #d9534f;
        }

        .social-icons i {
            font-size: 20px;

        }

        .down-content {
            text-align: center;
            margin: 20px 0;
        }

        .down-content h4 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .specialty {
            display: inline-block;
            padding: 5px 15px;
            background-color: #f0ad4e;
            color: white;
            font-size: 16px;
            border-radius: 20px;
            font-weight: 500;
            transition: background-color 0.3s ease-in-out;
        }

        .specialty:hover {
            background-color: #d9534f;
        }
    </style>
</head>

<body>

    <div class="container">

        <!-- ***** Chefs Area Starts ***** -->
        <section class="section" id="chefs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 offset-lg-4 text-center">
                        <div class="section-heading">
                            <h6>Our Chefs</h6>
                            <h2>We offer the best ingredients for you</h2>
                        </div>
                    </div>
                </div>

                <div class="row">

                    @foreach($data2 as $data2)
                    <div class="col-lg-4">
                        <div class="chef-item">
                            <div class="thumb">
                                <div class="overlay"></div>
                                <ul class="social-icons">
                                    <li><a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fab fa-behance"></i></a></li>
                                </ul>

                                <img class="chef-image" src="chefimage/{{$data2->image}}" alt="Chef #1">
                            </div>
                            <div class="down-content">
                                <h4>{{$data2->name}}</h4>
                                <span class="specialty">{{$data2->speciality}}</span>
                            </div>

                        </div>
                    </div>
                    @endforeach

                    <!-- Example static chefs (if needed) -->
                    <div class="col-lg-4">
                        <div class="chef-item">
                            <div class="thumb">
                                <div class="overlay"></div>
                                <ul class="social-icons">
                                    <li><a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fab fa-behance"></i></a></li>
                                </ul>

                                <img class="chef-image" src="assets/images/chefs-02.jpg" alt="Chef #2">
                            </div>
                            <div class="down-content">
                                <h4>David Martin</h4>
                                <span class="specialty">Cookie Chef</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="chef-item">
                            <div class="thumb">
                                <div class="overlay"></div>
                                <ul class="social-icons">
                                    <li><a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fab fa-behance"></i></a></li>
                                </ul>

                                <img class="chef-image" src="assets/images/chefs-03.jpg" alt="Chef #3">
                            </div>
                            <div class="down-content">
                                <h4>Peter Perkson</h4>
                                <span class="specialty">Pancake Chef</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ***** Chefs Area Ends ***** -->

    </div> <!-- Closing the container div -->

</body>

</html>