<div>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


        <style type="text/css">
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #ffffff;
                /* Set background color to white */
            }

            .container-fluid {
                padding: 50px;
            }

            .row {
                display: flex;
                flex-wrap: nowrap;
                /* Keep all boxes in a single row */
                margin: -10px;
                justify-content: space-between;
                /* Add space between boxes */
            }

            .col-xl-3 {
                flex: 1 0 23%;
                /* Adjust the width to keep them in a row with some spacing */
                margin: 0 10px;
                box-sizing: border-box;
            }

            .card {
                background: #ffffff;
                border-radius: 10px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                transition: box-shadow 0.3s ease;
                margin-bottom: 20px;
            }

            .card:hover {
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            }

            .card-content {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .card-content h3 {
                margin: 0;
                font-size: 2rem;
                color: #000000;
            }

            .card-content p {
                margin: 0;
                color: #000000;
            }

            .icon-box-success {
                border-radius: 50%;
                width: 50px;
                height: 50px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            /* Specific Card Styles */
            .card-food-menu {
                background-color: #FB6356;
                /* Dark blue */
            }

            .card-food-menu .icon-box-success {
                background-color: #000000;
                /* Blue */
                color: #ffffff;
            }

            .card-chefs {
                background-color: #1e88e5;

                /* Dark green */
            }

            .card-chefs .icon-box-success {
                background-color: #000000;
                /* Green */
                color: #ffffff;
            }

            .card-orders {
                background-color: #41e727;
                /* Light  */
            }

            .card-orders .icon-box-success {
                background-color: #000000;
                /* Lime */
                color: #ffffff;
            }

            .card-reservation {
                background-color: #e72710;
                /* Dark color for the last box */
            }

            .card-reservation .icon-box-success {
                background-color: #000000;
                /* Darker gray for the icon */
                color: #ffffff;
            }

            .text-success {
                color: #28a745;
            }

            .text-muted {
                color: #000000;
            }

            .font-weight-medium {
                font-weight: 500;
            }

            /* General Table Styling */
            .table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 1rem;
                color: #212529;
                background-color: #ffffff;
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }

            .table th,
            .table td {
                padding: 1rem;
                text-align: left;
                vertical-align: middle;
                border-bottom: 1px solid #dee2e6;
            }

            .table thead th {
                background-color: #007bff;
                color: #ffffff;
                text-transform: uppercase;
                font-size: 0.875rem;
                letter-spacing: 0.05rem;
                text-align: center;
            }

            .table tbody tr {
                transition: background-color 0.2s ease;
            }

            .table tbody tr:hover {
                background-color: #f1f1f1;
            }

            .table .text-right {
                text-align: right;
            }

            .flag-icon {
                font-size: 1.5rem;
                margin-right: 10px;
            }

            /* Responsive Styling */
            @media (max-width: 768px) {

                .table th,
                .table td {
                    padding: 0.75rem;
                    font-size: 0.875rem;
                }
            }
        </style>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3">
                    <div class="card card-food-menu">
                        <div class="card-body">
                            <div class="card-content">
                                <div class="d-flex align-items-center">
                                    <h3 class="mb-0">$12.34</h3>
                                    <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                                </div>
                                <div class="icon-box-success">
                                    <a href="/foodmenu">
                                        <i class="mdi mdi-silverware-fork-knife"></i>
                                    </a>
                                </div>
                            </div>
                            <h6 class="text-muted font-weight-normal">Food Menu</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="card card-chefs">
                        <div class="card-body">
                            <div class="card-content">
                                <div class="d-flex align-items-center">
                                    <h3 class="mb-0">$17.34</h3>
                                    <p class="text-success ms-2 mb-0 font-weight-medium">+11%</p>
                                </div>
                                <div class="icon-box-success">
                                    <a href="/viewchef">
                                        <i class="mdi mdi-account-tie"></i>
                                    </a>
                                </div>
                            </div>
                            <h6 class="text-muted font-weight-normal">Chefs</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="card card-orders">
                        <div class="card-body">
                            <div class="card-content">
                                <div class="d-flex align-items-center">
                                    <h3 class="mb-0">$12.34</h3>
                                    <p class="text-success ms-2 mb-0 font-weight-medium">+12.4%</p>
                                </div>
                                <div class="icon-box-success">
                                    <a href="/orders">
                                        <i class="mdi mdi-receipt"></i>
                                    </a>
                                </div>
                            </div>
                            <h6 class="text-muted font-weight-normal">Orders</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="card card-reservation">
                        <div class="card-body">
                            <div class="card-content">
                                <div class="d-flex align-items-center">
                                    <h3 class="mb-0">$31.53</h3>
                                    <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                                </div>
                                <div class="icon-box-success">
                                    <a href="/viewreservation">
                                        <i class="mdi mdi-calendar-check"></i>
                                    </a>
                                </div>
                            </div>
                            <h6 class="text-muted font-weight-normal">Reservation</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Visitors by Countries</h4>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-us"></i>
                                                </td>
                                                <td>USA</td>
                                                <td class="text-right"> 1500 </td>
                                                <td class="text-right font-weight-medium"> 56.35% </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-de"></i>
                                                </td>
                                                <td>Germany</td>
                                                <td class="text-right"> 800 </td>
                                                <td class="text-right font-weight-medium"> 33.25% </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-au"></i>
                                                </td>
                                                <td>Australia</td>
                                                <td class="text-right"> 760 </td>
                                                <td class="text-right font-weight-medium"> 15.45% </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-gb"></i>
                                                </td>
                                                <td>United Kingdom</td>
                                                <td class="text-right"> 450 </td>
                                                <td class="text-right font-weight-medium"> 25.00% </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-ro"></i>
                                                </td>
                                                <td>Romania</td>
                                                <td class="text-right"> 620 </td>
                                                <td class="text-right font-weight-medium"> 10.25% </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-br"></i>
                                                </td>
                                                <td>Brasil</td>
                                                <td class="text-right"> 230 </td>
                                                <td class="text-right font-weight-medium"> 75.00% </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>




        <div class="row ">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Order Status</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check form-check-muted m-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                    <i class="input-helper"></i></label>
                                            </div>
                                        </th>
                                        <th> Client Name </th>
                                        <th> Order No </th>
                                        <th> Product Cost </th>
                                        <th> Project </th>
                                        <th> Payment Mode </th>
                                        <th> Start Date </th>
                                        <th> Payment Status </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-muted m-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                    <i class="input-helper"></i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="assets/images/faces/face1.jpg" alt="image">
                                            <span class="ps-2">Henry Klein</span>
                                        </td>
                                        <td> 02312 </td>
                                        <td> $14,500 </td>
                                        <td> Dashboard </td>
                                        <td> Credit card </td>
                                        <td> 04 March 2024 </td>
                                        <td>
                                            <div class="badge badge-outline-success">Approved</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-muted m-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                    <i class="input-helper"></i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="assets/images/faces/face2.jpg" alt="image">
                                            <span class="ps-2">Estella Bryan</span>
                                        </td>
                                        <td> 02312 </td>
                                        <td> $14,500 </td>
                                        <td> Website </td>
                                        <td> Cash on delivered </td>
                                        <td> 04 Aprial 2024 </td>
                                        <td>
                                            <div class="badge badge-outline-warning">Pending</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-muted m-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                    <i class="input-helper"></i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="assets/images/faces/face5.jpg" alt="image">
                                            <span class="ps-2">Lucy Abbott</span>
                                        </td>
                                        <td> 02312 </td>
                                        <td> $14,500 </td>
                                        <td> App design </td>
                                        <td> Credit card </td>
                                        <td> 04 May 2024 </td>
                                        <td>
                                            <div class="badge badge-outline-danger">Rejected</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-muted m-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                    <i class="input-helper"></i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="assets/images/faces/face3.jpg" alt="image">
                                            <span class="ps-2">Peter Gill</span>
                                        </td>
                                        <td> 02312 </td>
                                        <td> $14,500 </td>
                                        <td> Development </td>
                                        <td> Online Payment </td>
                                        <td> 06 May 2024 </td>
                                        <td>
                                            <div class="badge badge-outline-success">Approved</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-muted m-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                    <i class="input-helper"></i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="assets/images/faces/face4.jpg" alt="image">
                                            <span class="ps-2">Sallie Reyes</span>
                                        </td>
                                        <td> 02312 </td>
                                        <td> $14,500 </td>
                                        <td> Website </td>
                                        <td> Credit card </td>
                                        <td> 12 June 2024 </td>
                                        <td>
                                            <div class="badge badge-outline-success">Approved</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</div>
</div>
</div>
</div>
</div>

</html>
</div>