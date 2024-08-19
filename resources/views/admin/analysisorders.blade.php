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

        <h1>Orders Analysis</h1>
        <form id="search-form">
            <input type="text" id="search-input" placeholder="Search by Category">
            <button type="submit">Search</button>
        </form>
        <canvas id="revenueChart" width="400" height="200"></canvas>
        <canvas id="categoryChart" width="400" height="200"></canvas>

        <script>
            async function fetchData() {
                try {
                    const response = await fetch('http://127.0.0.1:8000/analysisorders'); // Ensure this matches your defined route
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
                        orderCounts: {}
                    };
                }

                let totalRevenue = 0;
                let orderCounts = {};

                orders.forEach(order => {
                    if (order.total_amount && order.category) {
                        totalRevenue += order.total_amount;

                        if (order.category in orderCounts) {
                            orderCounts[order.category]++;
                        } else {
                            orderCounts[order.category] = 1;
                        }
                    }
                });

                return {
                    totalRevenue,
                    orderCounts
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