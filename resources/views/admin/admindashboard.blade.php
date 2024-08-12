<div>
    <html lang="en">

    <head>

        <link rel="shortcut icon" href="assets/images/faces/face01.jpeg">
        <style type="text/css">
            /* Chart.js */
            @keyframes chartjs-render-animation {
                from {
                    opacity: .99
                }

                to {
                    opacity: 1
                }
            }

            .chartjs-render-monitor {
                animation: chartjs-render-animation 1ms
            }

            .chartjs-size-monitor,
            .chartjs-size-monitor-expand,
            .chartjs-size-monitor-shrink {
                position: absolute;
                direction: ltr;
                left: 0;
                top: 0;
                right: 0;
                bottom: 0;
                overflow: hidden;
                pointer-events: none;
                visibility: hidden;
                z-index: -1
            }

            .chartjs-size-monitor-expand>div {
                position: absolute;
                width: 1000000px;
                height: 1000000px;
                left: 0;
                top: 0
            }

            .chartjs-size-monitor-shrink>div {
                position: absolute;
                width: 200%;
                height: 200%;
                left: 0;
                top: 0
            }

            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f7f9;
            }

            .container-fluid {
                padding: 20px;
            }

            .row {
                display: flex;
                flex-wrap: wrap;
                margin: -10px;
            }

            .col-xl-3,
            .col-sm-6 {
                padding: 10px;
                box-sizing: border-box;
            }

            .col-xl-3 {
                flex: 1 0 25%;
            }

            .col-sm-6 {
                flex: 1 0 50%;
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
            }

            .card-content p {
                margin: 0;
            }

            .icon-box-success {
                border-radius: 50%;
                width: 50px;
                height: 50px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .card-food-menu {
                background-color: #e3f2fd;
                /* Light blue */
            }

            .card-food-menu .icon-box-success {
                background-color: #1e88e5;
                /* Blue */
                color: #ffffff;
            }

            .card-chefs {
                background-color: #fce4ec;
                /* Light pink */
            }

            .card-chefs .icon-box-success {
                background-color: #e91e63;
                /* Pink */
                color: #ffffff;
            }

            .card-orders {
                background-color: #f0f4c3;
                /* Light lime */
            }

            .card-orders .icon-box-success {
                background-color: #cddc39;
                /* Lime */
                color: #ffffff;
            }

            .card-reservation {
                background-color: #d1c4e9;
                /* Light purple */
            }

            .card-reservation .icon-box-success {
                background-color: #673ab7;
                /* Purple */
                color: #ffffff;
            }

            .text-success {
                color: #28a745;
            }

            .text-muted {
                color: #6c757d;
            }

            .font-weight-medium {
                font-weight: 500;
            }

            .table {
                width: 100%;
                border-collapse: collapse;
                font-size: 0.875rem;
            }

            .table thead th {
                background-color: #f8f9fa;
                color: #495057;
                font-weight: 600;
                padding: 12px;
                border-bottom: 2px solid #dee2e6;
            }

            .table tbody td {
                padding: 12px;
                vertical-align: middle;
                border-bottom: 1px solid #dee2e6;
            }

            .table tbody tr:nth-of-type(even) {
                background-color: #f9f9f9;
            }

            .table tbody tr:hover {
                background-color: #e9ecef;
            }

            .table i.flag-icon {
                width: 24px;
                height: 16px;
                display: inline-block;
                margin-right: 10px;
                vertical-align: middle;
            }

            .table td {
                font-size: 0.875rem;
                color: #333;
            }

            .text-right {
                text-align: right;
            }

            .font-weight-medium {
                font-weight: 500;
            }

            
        </style>
    </head>

    <body>
        <div class="container-scroller">
            <div class="row p-0 m-0 proBanner d-flex" id="proBanner">
                <div class="col-md-12 p-0 m-0">
                    <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                        <div class="ps-lg-1">

                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <a><i class="mdi mdi-home me-3 text-white"></i>Klassy Cafe</a>
                            <button id="bannerClose" class="btn border-0 p-0">
                                <i class="mdi mdi-close text-white me-0"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- partial:partials/_sidebar.html -->

            <!-- partial -->
            <div class="container-fluid page-body-wrapper">

                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card corona-gradient-card">
                                    <div class="card-body py-0 px-0 px-sm-3">
                                        <div class="row align-items-center">


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                                    <div class="card card-food-menu">
                                        <div class="card-body">
                                            <div class="card-content">
                                                <div class="d-flex align-items-center">
                                                    <h3 class="mb-0">$12.34</h3>
                                                    <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                                                </div>
                                                <div class="icon-box-success">
                                                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                                                </div>
                                            </div>
                                            <h6 class="text-muted font-weight-normal">Food Menu</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                                    <div class="card card-chefs">
                                        <div class="card-body">
                                            <div class="card-content">
                                                <div class="d-flex align-items-center">
                                                    <h3 class="mb-0">$17.34</h3>
                                                    <p class="text-success ms-2 mb-0 font-weight-medium">+11%</p>
                                                </div>
                                                <div class="icon-box-success">
                                                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                                                </div>
                                            </div>
                                            <h6 class="text-muted font-weight-normal">Chefs</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                                    <div class="card card-orders">
                                        <div class="card-body">
                                            <div class="card-content">
                                                <div class="d-flex align-items-center">
                                                    <h3 class="mb-0">$12.34</h3>
                                                    <p class="text-success ms-2 mb-0 font-weight-medium">+12.4%</p>
                                                </div>
                                                <div class="icon-box-success">
                                                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                                                </div>
                                            </div>
                                            <h6 class="text-muted font-weight-normal">Orders</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                                    <div class="card card-reservation">
                                        <div class="card-body">
                                            <div class="card-content">
                                                <div class="d-flex align-items-center">
                                                    <h3 class="mb-0">$31.53</h3>
                                                    <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                                                </div>
                                                <div class="icon-box-success">
                                                    <span class="mdi mdi-arrow-top-right icon-item"></span>
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