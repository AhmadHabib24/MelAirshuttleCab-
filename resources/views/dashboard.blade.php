<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Full width card -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="background: rgb(228, 222, 222)">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-dark-200 leading-tight text-center" style="font-weight: 999" >Booking Statics</h2>
                            <!-- Line Chart Container -->
                            <canvas id="lineChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Two cards in a row -->
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="width: 500px;background: rgb(228, 222, 222)">
                            <div class="p-6 text-gray-900 dark:text-gray-100">
                                <!-- Pie Chart Container -->
                                <canvas id="chartCanvas" style="height: 100%"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900 dark:text-gray-100">
                                {{ __('Card 2 content goes here') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!-- Include Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Function to generate random data
    function getRandomData(count, min, max) {
        return Array.from({ length: count }, () => Math.floor(Math.random() * (max - min + 1) + min));
    }

    // Function to generate month labels
    function getMonthLabels(count) {
        const date = new Date();
        return Array.from({ length: count }, (_, i) => {
            const month = new Date(date.setMonth(date.getMonth() - (count - 1 - i)));
            return month.toLocaleString('default', { month: 'long' });
        });
    }

    // Line chart data and configuration
    const DATA_COUNT = 7;
    const lineLabels = getMonthLabels(DATA_COUNT); // Generate month labels
    const lineData = {
        labels: lineLabels,
        datasets: [
            {
                label: 'Dataset 1',
                data: getRandomData(DATA_COUNT, -100, 100), // Generate random data
                borderColor: 'red',
                backgroundColor: 'rgba(255, 0, 0, 0.5)',
            },
            {
                label: 'Dataset 2',
                data: getRandomData(DATA_COUNT, -100, 100), // Generate random data
                borderColor: 'blue',
                backgroundColor: 'rgba(0, 0, 255, 0.5)',
            }
        ]
    };

    const lineConfig = {
        type: 'line',
        data: lineData,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Chart.js Line Chart'
                }
            }
        },
    };

    // Pie chart data and configuration
    const PIE_DATA_COUNT = 5;
    const pieData = {
        labels: ['Red', 'Orange', 'Yellow', 'Green', 'Blue'],
        datasets: [
            {
                label: 'Dataset 1',
                data: [30, 20, 15, 25, 10],  // Static data for simplicity
                backgroundColor: ['red', 'orange', 'yellow', 'green', 'blue'],
            }
        ]
    };

    const pieConfig = {
        type: 'pie',
        data: pieData,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Chart.js Pie Chart'
                }
            }
        },
    };

    // Render both charts
    window.onload = function () {
        var lineCtx = document.getElementById('lineChart').getContext('2d');
        new Chart(lineCtx, lineConfig); // Render Line Chart

        var pieCtx = document.getElementById('chartCanvas').getContext('2d');
        new Chart(pieCtx, pieConfig); // Render Pie Chart
    };
</script>
