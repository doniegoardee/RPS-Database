@include('rps-database.contents.header')

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">

    <div class="flex-grow-1 overflow-auto">
        <h1 class="h3 mb-4 text-gray-800">Document Comparison Chart</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <canvas id="docsChart" width="400" height="200"></canvas>
            </div>
        </div>
    </div>

</div>

@include('rps-database.contents.footer')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ctx = document.getElementById('docsChart').getContext('2d');

        const data = {
            labels: ['Tenurial Instrument', 'Foreshore', 'API / PPI'],
            datasets: [{
                label: 'Document Comparison',
                data: [
                    {{ $data['Tenurial Instrument'] }},
                    {{ $data['Foreshore'] }},
                    {{ $data['API / PPI'] }}
                ],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(255, 99, 132, 0.7)',
                    'rgba(75, 192, 192, 0.7)'
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        };

        const options = {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        };

        new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
        });
    });
</script>
