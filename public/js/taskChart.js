document.addEventListener('DOMContentLoaded', function () {
    const totalTasks = parseInt(document.getElementById('totalTasks').value);
    const completedTasks = parseInt(document.getElementById('completedTasks').value);
    const pendingTasks = parseInt(document.getElementById('pendingTasks').value);

    const ctx = document.getElementById('taskChart').getContext('2d');
    const taskChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['تعداد کل تسک‌ها', 'تعداد تسک‌های کامل شده', 'تعداد تسک‌های در حال انجام'],
            datasets: [{
                label: 'آمار تسک‌ها',
                data: [totalTasks, completedTasks, pendingTasks],
                backgroundColor: [
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)'
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
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
});
