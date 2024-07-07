<div>
    <html lang="en">

    <head>

        <link rel="shortcut icon" href="assets/images/favicon.png">
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
                            <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
                            <button id="bannerClose" class="btn border-0 p-0">
                                <i class="mdi mdi-close text-white me-0"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- partial:partials/_sidebar.html -->

            <!-- partial -->
            *<div class="container-fluid page-body-wrapper">

                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card corona-gradient-card">
                                    <div class="card-body py-0 px-0 px-sm-3">
                                        <div class="row align-items-center">
                                            <div class="col-4 col-sm-3 col-xl-2">
                                                <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="d-flex align-items-center align-self-start">
                                                    <h3 class="mb-0">$12.34</h3>
                                                    <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="icon icon-box-success ">
                                                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="text-muted font-weight-normal">Potential growth</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="d-flex align-items-center align-self-start">
                                                    <h3 class="mb-0">$17.34</h3>
                                                    <p class="text-success ms-2 mb-0 font-weight-medium">+11%</p>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="icon icon-box-success">
                                                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="text-muted font-weight-normal">Revenue current</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="d-flex align-items-center align-self-start">
                                                    <h3 class="mb-0">$12.34</h3>
                                                    <p class="text-danger ms-2 mb-0 font-weight-medium">-2.4%</p>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="icon icon-box-danger">
                                                    <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="text-muted font-weight-normal">Daily Income</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="d-flex align-items-center align-self-start">
                                                    <h3 class="mb-0">$31.53</h3>
                                                    <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="icon icon-box-success ">
                                                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="text-muted font-weight-normal">Expense current</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <h4 class="card-title">Transaction History</h4>
                                        <canvas id="transaction-history" class="transaction-chart chartjs-render-monitor" width="380" height="190" style="display: block; height: 95px; width: 190px;"></canvas>
                                        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                                            <div class="text-md-center text-xl-left">
                                                <h6 class="mb-1">Transfer to Paypal</h6>
                                                <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                                            </div>
                                            <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                                                <h6 class="font-weight-bold mb-0">$236</h6>
                                            </div>
                                        </div>
                                        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                                            <div class="text-md-center text-xl-left">
                                                <h6 class="mb-1">Tranfer to Stripe</h6>
                                                <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                                            </div>
                                            <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                                                <h6 class="font-weight-bold mb-0">$593</h6>
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
                                                            <td> 04 Dec 2019 </td>
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
                                                            <td> 04 Dec 2019 </td>
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
                                                            <td> 04 Dec 2019 </td>
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
                                                            <td> 04 Dec 2019 </td>
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
                                                            <td> 04 Dec 2019 </td>
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
                            <div class="row">
                                <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-row justify-content-between">
                                                <h4 class="card-title">Messages</h4>
                                                <p class="text-muted mb-1 small">View all</p>
                                            </div>
                                            <div class="preview-list">
                                                <div class="preview-item border-bottom">
                                                    <div class="preview-thumbnail">
                                                        <img src="assets/images/faces/face6.jpg" alt="image" class="rounded-circle">
                                                    </div>
                                                    <div class="preview-item-content d-flex flex-grow">
                                                        <div class="flex-grow">
                                                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                                <h6 class="preview-subject">Leonard</h6>
                                                                <p class="text-muted text-small">5 minutes ago</p>
                                                            </div>
                                                            <p class="text-muted">Well, it seems to be working now.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="preview-item border-bottom">
                                                    <div class="preview-thumbnail">
                                                        <img src="assets/images/faces/face8.jpg" alt="image" class="rounded-circle">
                                                    </div>
                                                    <div class="preview-item-content d-flex flex-grow">
                                                        <div class="flex-grow">
                                                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                                <h6 class="preview-subject">Luella Mills</h6>
                                                                <p class="text-muted text-small">10 Minutes Ago</p>
                                                            </div>
                                                            <p class="text-muted">Well, it seems to be working now.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="preview-item border-bottom">
                                                    <div class="preview-thumbnail">
                                                        <img src="assets/images/faces/face9.jpg" alt="image" class="rounded-circle">
                                                    </div>
                                                    <div class="preview-item-content d-flex flex-grow">
                                                        <div class="flex-grow">
                                                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                                <h6 class="preview-subject">Ethel Kelly</h6>
                                                                <p class="text-muted text-small">2 Hours Ago</p>
                                                            </div>
                                                            <p class="text-muted">Please review the tickets</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="preview-item border-bottom">
                                                    <div class="preview-thumbnail">
                                                        <img src="assets/images/faces/face11.jpg" alt="image" class="rounded-circle">
                                                    </div>
                                                    <div class="preview-item-content d-flex flex-grow">
                                                        <div class="flex-grow">
                                                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                                <h6 class="preview-subject">Herman May</h6>
                                                                <p class="text-muted text-small">4 Hours Ago</p>
                                                            </div>
                                                            <p class="text-muted">Thanks a lot. It was easy to fix it .</p>
                                                        </div>
                                                    </div>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </html>
</div>