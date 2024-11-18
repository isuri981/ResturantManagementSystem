<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Analysis</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @include("admin.admincss")
    <style>
        /* Container for the search form */
        .search-form {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px 0;
        }

        /* Style for the input field */
        .search-input {
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 5px 0 0 5px;
            outline: none;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        /* Change border color on focus */
        .search-input:focus {
            border-color: #4CAF50;
        }

        /* Style for the search button */
        .search-button {
            padding: 10px 20px;
            border: none;
            border-radius: 0 5px 5px 0;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        /* Change background color on hover */
        .search-button:hover {
            background-color: #45a049;
        }

        /* Add a slight transform effect on active (click) */
        .search-button:active {
            transform: scale(0.98);
        }

        /* Style for chart containers */
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        .chart-container {
            max-width: 600px;
            /* Reduced max width */
            margin: 20px auto;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
            text-align: center;
        }

        /* Make the canvas responsive */
        canvas {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include("admin.navbar")

        <div class="container">
            <h1>Orders Analysis</h1>
            <form id="search-form" class="search-form">
                <input type="text" id="search-input" placeholder="Search by Category" class="search-input">
                <button type="submit" class="btn search-button">Search</button>
            </form>

            <div class="chart-container">
                <canvas id="revenueChart"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="categoryChart"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="statusChart"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="customerChart"></canvas>
            </div>
        </div>

        <script>
            async function fetchData() {
                try {
                    const response = await fetch('http://127.0.0.1:8000/analysisorders-api');
                    if (!response.ok) throw new Error('Network response was not ok');
                    const data = await response.json();
                    console.log('Fetched Data:', data); 
                    return data;
                } catch (error) {
                    console.error('Error fetching data:', error);
                    return [];
                }
            }

            function analyzeData(orders) {
                if (!Array.isArray(orders) || orders.length === 0) {
                    return {
                        totalRevenue: 0,
                        orderCounts: {},
                        paymentStatusCounts: {},
                        customerOrders: {}
                    };
                }

                let totalRevenue = 0;
                let orderCounts = {};
                let paymentStatusCounts = {};
                let customerOrders = {};

                orders.forEach(order => {
                    const price = parseFloat(order.price);
                    const quantity = parseInt(order.quantity);
                    const totalAmount = price * quantity;
                    const category = order.foodname;

                    // Calculate total revenue
                    totalRevenue += totalAmount;

                    // Count orders by category
                    if (category in orderCounts) {
                        orderCounts[category]++;
                    } else {
                        orderCounts[category] = 1;
                    }

                    // Count payment status
                    if (order.payment_status in paymentStatusCounts) {
                        paymentStatusCounts[order.payment_status]++;
                    } else {
                        paymentStatusCounts[order.payment_status] = 1;
                    }

                    // Count orders by customer
                    if (order.name in customerOrders) {
                        customerOrders[order.name]++;
                    } else {
                        customerOrders[order.name] = 1;
                    }
                });

                return {
                    totalRevenue,
                    orderCounts,
                    paymentStatusCounts,
                    customerOrders
                };
            }

            function renderCharts(analysis) {
                const revenueCtx = document.getElementById('revenueChart').getContext('2d');
                new Chart(revenueCtx, {
                    type: 'bar',
                    data: {
                        labels: ['Total Revenue'],
                        datasets: [{
                            label: 'Revenue',
                            data: [analysis.totalRevenue],
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        maintainAspectRatio: false, // Enable responsive resizing
                        aspectRatio: 2, // Control the width/height ratio
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });

                const categoryCtx = document.getElementById('categoryChart').getContext('2d');
                new Chart(categoryCtx, {
                    type: 'pie',
                    data: {
                        labels: Object.keys(analysis.orderCounts),
                        datasets: [{
                            label: 'Orders by Category',
                            data: Object.values(analysis.orderCounts),
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        maintainAspectRatio: false, // Enable responsive resizing
                        aspectRatio: 1, // Adjust aspect ratio for a square shape
                        animation: {
                            duration: 500,
                            easing: 'easeOutQuad'
                        }
                    }
                });

                const statusCtx = document.getElementById('statusChart').getContext('2d');
                new Chart(statusCtx, {
                    type: 'doughnut',
                    data: {
                        labels: Object.keys(analysis.paymentStatusCounts),
                        datasets: [{
                            label: 'Payment Status Distribution',
                            data: Object.values(analysis.paymentStatusCounts),
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        maintainAspectRatio: false, // Enable responsive resizing
                        aspectRatio: 1, // Adjust aspect ratio for a square shape
                        animation: {
                            duration: 500,
                            easing: 'easeOutQuad'
                        }
                    }
                });

                const customerCtx = document.getElementById('customerChart').getContext('2d');
                new Chart(customerCtx, {
                    type: 'bar',
                    data: {
                        labels: Object.keys(analysis.customerOrders),
                        datasets: [{
                            label: 'Orders by Customer',
                            data: Object.values(analysis.customerOrders),
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        maintainAspectRatio: false, // Enable responsive resizing
                        aspectRatio: 1.5, // Adjust aspect ratio for a horizontal layout
                        indexAxis: 'y', // Makes the bar chart horizontal
                        scales: {
                            x: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            }

            async function init() {
                const orders = await fetchData();
                const analysis = analyzeData(orders);
                renderCharts(analysis);
            }

            init();
        </script>
    </div>
</body>

</html>