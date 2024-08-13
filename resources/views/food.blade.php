 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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

     .quantity-input {
         width: 80px;
         padding: 8px;
         border: 2px solid #f0ad4e;
         border-radius: 5px;
         text-align: center;
         font-size: 16px;
         outline: none;
         transition: border-color 0.3s ease-in-out;
     }

     .quantity-input:focus {
         border-color: #d9534f;
     }

     .quantity-input::-webkit-inner-spin-button,
     .quantity-input::-webkit-outer-spin-button {
         -webkit-appearance: none;
         margin: 0;
     }

     .quantity-input:hover {
         border-color: #d9534f;
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
                         <h2>Our selection of shorteats with quality taste</h2>
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

                             <input type="number" name="quantity" min="2" value="1" class="quantity-input">




                             <button class="btn btn-warning add-cart-button" title="Add to cart">
                                 <i class="fas fa-shopping-cart"></i>
                             </button>



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