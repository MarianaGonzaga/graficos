<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chart Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div style="width: 50%; margin: auto;">
        <canvas id="barChart"></canvas>
    </div>
    <div style="width: 50%; margin: auto;">
        <canvas id="lineChart"></canvas>
    </div>
    <div style="width: 50%; margin: auto;">
        <canvas id="lineChart2"></canvas>
    </div>
    <script>
        var ctx = document.getElementById('barChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($data['labels']),
                datasets: [{
                    label: 'Data',
                    data: @json($data['data']),
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
    </script>
    <script>
    var ctx = document.getElementById('lineChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: @json($data['labels']),
                datasets: [{
                    label: 'Data',
                    data: @json($data['data']),
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
    </script>
    <!-- testando mapa 2 linhas -->
      <script>
    var ctx = document.getElementById('lineChart2').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: @json($data['labels']),
                datasets: [{
                    label: 'Data',
                    data: @json($data['data']),
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                },
                { 
                    label: 'Data',
                    data: [95, 87, 10, 18, 66, 100 ],
                    backgroundColor: 'rgba(0, 19, 192, 1)',
                    borderColor: 'rgba(0, 25, 30, 1)',
                    borderWidth: 1
                }, 
                { 
                    label: 'Data',
                    data: [12, 30, 70, 10, 80, 100 ],
                    backgroundColor: 'rgba(0, 19, 192, 1)',
                    borderColor: 'rgba(0, 25, 30, 1)',
                    borderWidth: 1
                }
            ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    
    </body>
</html>