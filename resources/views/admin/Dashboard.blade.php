<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="author" content="Untree.co" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <style></style>

        <link rel="stylesheet" href="https://unpkg.com/@adminkit/core@latest/dist/css/app.css">
        <script src="https://unpkg.com/@adminkit/core@latest/dist/js/app.js"></script>

        {{-- Links --}}
        @include('home.links')
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <div class="site-wrap">
            <div class="site-mobile-menu site-navbar-target">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>

            {{-- Header --}}
            @include('admin.header')
            <div class="padd"></div>

            <!-- ... Your HTML code ... -->

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <!-- Customize width and height of the pie chart with inline styles -->
                        <canvas id="chartjs-line" style="width: 1500px; height: 1000px;"></canvas>
                    </div>
                </div>
            </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Customize width and height of the pie chart with inline styles -->
            <canvas id="chartjs-pie" style="width: 500px; height: 500px;"></canvas>
        </div>
    </div>
</div>

<div class="container">
    <h2>Order Summary</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Total Quantity</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order as $item)
                <tr>
                    <td>{{ $item->product_title }}</td>
                    <td>{{ $item->total_quantity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Customize width and height of the doughnut chart with inline styles -->
            <canvas id="chartjs-doughnut" style="width: 500px; height: 500px;"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Extracting product_ids and total_quantities from the $order variable
    var productIds = {!! json_encode($order->pluck('product_title')) !!};
    var totalQuantities = {!! json_encode($order->pluck('total_quantity')) !!};

    new Chart(document.getElementById("chartjs-pie"), {
        type: "pie",
        data: {
            labels: productIds,
            datasets: [{
                data: totalQuantities,
                backgroundColor: [
                    window.theme.primary,
                    window.theme.success,
                    window.theme.warning,
                    "#dee2e6"
                ],
                borderColor: "transparent"
            }]
        },
        options: {
            maintainAspectRatio: false,
            cutoutPercentage: 65,
            responsive: false, // Set to false to prevent resizing
            width: 500,        // Specify width
            height: 500        // Specify height
        }
    });

    new Chart(document.getElementById("chartjs-doughnut"), {
        type: "doughnut",
        data: {
            labels: ["Social", "Search Engines", "Direct", "Other"],
            datasets: [{
                data: [260, 125, 54, 146],
                backgroundColor: [
                    window.theme.primary,
                    window.theme.success,
                    window.theme.warning,
                    "#dee2e6"
                ],
                borderColor: "transparent"
            }]
        },
        options: {
            maintainAspectRatio: false,
            cutoutPercentage: 65,
            responsive: false, // Set to false to prevent resizing
            width: 500,        // Specify width
            height: 500        // Specify height
        }
    });

    var totalorderData = {!! json_encode($totalorder->pluck('total_quantity')) !!};

new Chart(document.getElementById("chartjs-line"), {
    type: "line",
    data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec","Jan", "Feb", "Mar"],
        datasets: [{
            label: "Sales ($)",
            fill: true,
            backgroundColor: "transparent",
            borderColor: window.theme.primary,
            data: totalorderData // Replace with the actual key for sales data in your totalorder array
        }, {
            label: "Orders",
            fill: true,
            backgroundColor: "transparent",
            borderColor: "#adb5bd",
            borderDash: [4, 4],
            data: totalorderData.ordersData // Replace with the actual key for orders data in your totalorder array
        }]
    },
    options: {
        scales: {
            xAxes: [{
                reverse: true,
                gridLines: {
                    color: "rgba(0,0,0,0.05)"
                }
            }],
            yAxes: [{
                borderDash: [5, 5],
                gridLines: {
                    color: "rgba(0,0,0,0)",
                    fontColor: "#fff"
                }
            }]
        }
    }
});
</script>

<!-- ... Your HTML code ... -->

<!-- ... Your HTML code ... -->


            <footer class="site-footer" id="site-footer">
                <div class="container">
                    <!-- Add your footer content here if needed -->
                </div>
            </footer>
        </div>
        <!-- .site-wrap -->

        <!-- Add your other script includes here -->
    </body>
</html>
