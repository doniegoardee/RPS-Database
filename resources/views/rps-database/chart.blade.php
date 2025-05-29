@include('rps-database.contents.header')

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">
    <div class="flex-grow-1 overflow-auto">
        <h1 class="h3 mb-4 text-gray-800">Document Charts</h1>

        <div class="card shadow mb-4">
            <div class="card-header text-white" style="background: #36A2EB;">
                <h5 class="mb-0">Tenurial Instrument</h5>
            </div>
            <div class="card-body">
                <div style="width: 80%; max-width: 600px; margin: auto;">
                    <canvas id="tenurialChart"></canvas>
                </div>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header text-white" style="background: #FF9F40;">
                <h5 class="mb-0">Permit Chart</h5>
            </div>
            <div class="card-body">
                <div style="width: 80%; max-width: 600px; margin: auto;">
                    <canvas id="permitChart"></canvas>
                </div>
            </div>
        </div>

        <div class="card shadow mb-4">
    <div class="card-header text-white" style="background: #28A745;">
        <h5 class="mb-0">Lands Chart</h5>
    </div>
    <div class="card-body">
        <div style="width: 80%; max-width: 600px; margin: auto;">
            <canvas id="landsTypeChart"></canvas>
        </div>
    </div>
</div>

    </div>
</div>



@include('rps-database.contents.footer')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        fetch("{{ route('chart.tenurial.data') }}")
            .then(response => response.json())
            .then(data => {
                const ctx = document.getElementById('tenurialChart').getContext('2d');
                new Chart(ctx, {
                    type: 'pie', // Already pie
                    data: {
                        labels: data.labels,
                        datasets: [{
                            data: data.counts,
                            backgroundColor: [
                                '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0',
                                '#9966FF', '#FF9F40', '#FF6384', '#36A2EB'
                            ],
                            hoverOffset: 6
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'bottom',
                                labels: {
                                    font: {
                                        size: 14
                                    }
                                }
                            }
                        }
                    }
                });
            });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        fetch("{{ route('chart.permit.data') }}")
            .then(response => response.json())
            .then(data => {
                const ctx = document.getElementById('permitChart').getContext('2d');
                new Chart(ctx, {
                    type: 'pie', // CHANGED from 'doughnut' to 'pie'
                    data: {
                        labels: data.labels,
                        datasets: [{
                            data: data.counts,
                            backgroundColor: [
                                '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0',
                                '#9966FF', '#FF9F40'
                            ],
                            hoverOffset: 6
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'bottom',
                                labels: {
                                    font: {
                                        size: 14
                                    }
                                }
                            }
                        }
                    }
                });
            });
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        fetch("{{ route('chart.lands.type.data') }}")
            .then(response => response.json())
            .then(data => {
                const ctx = document.getElementById('landsTypeChart').getContext('2d');
                new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: data.labels,
                        datasets: [{
                            data: data.counts,
                            backgroundColor: [
                                '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0',
                                '#9966FF', '#FF9F40', '#FF6384', '#36A2EB'
                            ],
                            hoverOffset: 6
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'bottom',
                                labels: {
                                    font: {
                                        size: 14
                                    }
                                }
                            }
                        }
                    }
                });
            });
    });
</script>
