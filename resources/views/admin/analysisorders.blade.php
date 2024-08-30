<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Analysis</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @include("admin.admincss")
</head>

<body>
    <div class="container-scroller">
        @include("admin.navbar")

        <div class="container">
            <h1>Orders Analysis</h1>
            <form id="search-form">
                <input type="text" id="search-input" placeholder="Search by Category">
                <button type="submit">Search</button>
            </form>
            <!-- <canvas id="revenueChart" width="400" height="200"></canvas>
            Reduced size for the pie chart -->
            <!-- <canvas id="categoryChart" width="100" height="100"></canvas>
            <canvas id="statusChart" width="400" height="200"></canvas>
            <canvas id="customerChart" width="400" height="200"></canvas> --> 

            <canvas id="revenueChart" width="1398" height="699" style="display: block; box-sizing: border-box; height: 349px; width: 699px;"></canvas>
            <canvas id="categoryChart" width="1398" height="699" style="display: block; box-sizing: border-box; height: 349px; width: 699px;"></canvas>
            <canvas id="statusChart" width="1398" height="699" style="display: block; box-sizing: border-box; height: 349px; width: 699px;"></canvas>
            <canvas id="customerChart" width="1398" height="699" style="display: block; box-sizing: border-box; height: 349px; width: 699px;"></canvas>
        </div>

        <script>
            async function fetchData() {
                try {
                    const response = await fetch('http://127.0.0.1:8000/analysisorders-api');
                    if (!response.ok) throw new Error('Network response was not ok');
                    const data = await response.json();
                    console.log('Fetched Data:', data); // Debugging: check if data is fetched correctly
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
                        animation: {
                            duration: 500, // Reduce the animation duration
                            easing: 'easeOutQuad' // Change the easing option for a less fluid effect
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

            document.getElementById('search-form').addEventListener('submit', async (e) => {
                e.preventDefault();
                const searchQuery = document.getElementById('search-input').value;
                try {
                    const response = await fetch(`/analysisorders/search?search=${searchQuery}`);
                    if (!response.ok) throw new Error('Network response was not ok');
                    const data = await response.json();
                    console.log('Fetched Search Data:', data); // Debugging: check if search data is fetched correctly
                    const analysis = analyzeData(data);
                    renderCharts(analysis);
                } catch (error) {
                    console.error('Error fetching search data:', error);
                }
            });
        </script>

    </div>
</body>

</html>