 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Klassy Cafe </title>
 </head>
 <style>
     /* Base button styling */
     .btn {
         display: inline-block;
         font-size: 16px;
         font-weight: 600;
         text-align: center;
         text-decoration: none;
         cursor: pointer;
         border: none;
         border-radius: 5px;
         padding: 10px 20px;
         transition: all 0.3s ease;
     }

     /* Warning button styling */
     .btn-warning {
         background-color: #f39c12;
         color: #fff;
     }

     .btn-warning:hover {
         background-color: #e67e22;
         color: #fff;
     }

     .btn-warning:active {
         background-color: #d35400;
         color: #fff;
     }

     /* Add custom class for specific styling */
     .add-cart-button {
         box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
     }

     .add-cart-button:focus {
         outline: none;
         box-shadow: 0 0 0 2px rgba(243, 156, 18, 0.5);
     }
 </style>

 <body>



     <!-- ***** Menu Area Starts ***** -->
     <section class="section" id="menu">
         <div class="container">
             <div class="row">
                 <div class="col-lg-4">
                     <div class="section-heading">
                         <h6>Our Menu</h6>
                         <h2>Our selection of cakes with quality taste</h2>
                     </div>
                 </div>
             </div>
         </div>
         <div class="menu-item-carousel">
             <div class="col-lg-12">
                 <div class="owl-menu-item owl-carousel">

                     @foreach($data as $data)

                     <form action="{{url('/addcart', $data->id)}}" method="post">

                         @csrf

                         <div class="item">
                             <div style="background-image: url('/foodimage/{{ $data->image }}')" class="card">

                                 <div class="price">
                                     <h6>${{$data->price}}</h6>
                                 </div>
                                 <div class='info'>
                                     <h1 class='title'>{{$data->title}}</h1>
                                     <p class='description'>{{$data->description}}</p>
                                     <div class="main-text-button">
                                         <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                                     </div>
                                 </div>
                             </div>

                             <input type="number" name="quantity" min="2" value="1" style="width: 80px;">



                             <input class="btn btn-warning add-cart-button" type="submit" value="Add to Cart">


                         </div>

                     </form>

                     @endforeach





                 </div>



             </div>
         </div>
     </section>
     <!-- ***** Menu Area Ends ***** -->

 </body>

 </html>