@include('rps-database.contents.header')

<div class="container-fluid d-flex flex-column" style="height: 100vh; overflow: hidden;">
    <div class="flex-grow-1 overflow-auto">
        <h1 class="h3 mb-4 text-gray-800">Document Comparison Charts</h1>

        <div class="card shadow mb-4">
            <div class="card-header text-white" style="background: #36A2EB;">
                <h5 class="mb-0">Tenurial Instrument Count</h5>
            </div>
            <div class="card-body">
                <canvas id="tenurialChart"></canvas>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header text-white" style="background: #FF6384;">
                <h5 class="mb-0">Permit & GSUP Count</h5>
            </div>
            <div class="card-body">
                <canvas id="permitGsupChart"></canvas>
            </div>
        </div>
    </div>
</div>

@include('rps-database.contents.footer')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        function generateColors(count) {
            const colors = [
                'rgba(54, 162, 235, 0.7)',
                'rgba(255, 99, 132, 0.7)',
                'rgba(75, 192, 192, 0.7)',
                'rgba(255, 206, 86, 0.7)',
                'rgba(153, 102, 255, 0.7)',
                'rgba(255, 159, 64, 0.7)'
            ];
            return colors.slice(0, count);
        }

        new Chart(document.getElementById('tenurialChart').getContext('2d'), {
            type: 'bar',
            data: {
                labels: {!! json_encode($tenurialData->keys()) !!},
                datasets: [{
                    label: 'Tenurial Instrument',
                    data: {!! json_encode($tenurialData->values()) !!},
                    backgroundColor: generateColors({{ $tenurialData->count() }}),
                    borderColor: generateColors({{ $tenurialData->count() }}).map(color => color.replace('0.7', '1')),
                    borderWidth: 1
                }]
            },
            options: { responsive: true, scales: { y: { beginAtZero: true } } }
        });

        new Chart(document.getElementById('permitGsupChart').getContext('2d'), {
            type: 'bar',
            data: {
                labels: {!! json_encode($permitData->keys()) !!},
                datasets: [
                    {
                        label: 'Permit Type',
                        data: {!! json_encode($permitData->values()) !!},
                        backgroundColor: generateColors({{ $permitData->count() }}),
                        borderColor: generateColors({{ $permitData->count() }}).map(color => color.replace('0.7', '1')),
                        borderWidth: 1
                    },
                    {
                        label: 'GSUP',
                        data: [{{ $gsupCount }}],
                        backgroundColor: 'rgba(0, 128, 128, 0.7)',
                        borderColor: 'rgba(0, 128, 128, 1)',
                        borderWidth: 1
                    }
                ]
            },
            options: { responsive: true, scales: { y: { beginAtZero: true } } }
        });
    });
</script>
