<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Dashboard Admin</h1>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <!-- Total Students -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold text-gray-700">Total Siswa</h2>
            <p class="text-2xl font-bold text-blue-500"><?= $total_students; ?></p>
        </div>

        <!-- Total Courses -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold text-gray-700">Total Kursus</h2>
            <p class="text-2xl font-bold text-green-500"><?= $total_courses; ?></p>
        </div>

        <!-- Total Instructors -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold text-gray-700">Total Instruktur</h2>
            <p class="text-2xl font-bold text-orange-500"><?= $total_instructors; ?></p>
        </div>

        <!-- Total Revenue -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold text-gray-700">Total Pendapatan</h2>
            <p class="text-2xl font-bold text-red-500"><?= $total_revenue; ?> IDR</p>
        </div>
    </div>

    <!-- Chart Section -->
    <div class="bg-white p-6 rounded-lg shadow-md mb-6">
        <h2 class="text-xl font-semibold mb-4">Statistik Kursus dan Pendaftaran</h2>
        <canvas id="statisticsChart"></canvas>
    </div>

    <!-- Recent Activity -->
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Aktivitas Terbaru</h2>
        <ul>
            <?php foreach ($recent_activities as $activity): ?>
                <li class="border-b py-2"><?= esc($activity['description']); ?> - <?= date('d F Y', strtotime($activity['date'])); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Data for the chart (replace with dynamic data from backend)
    const chartData = {
        labels: ['Kursus A', 'Kursus B', 'Kursus C', 'Kursus D'],
        datasets: [{
            label: 'Pendaftaran Kursus',
            data: [50, 80, 40, 60], // Sample data, replace with actual data
            backgroundColor: 'rgba(99, 102, 241, 0.6)',
            borderColor: 'rgba(99, 102, 241, 1)',
            borderWidth: 1
        }]
    };

    // Chart.js Configuration
    const ctx = document.getElementById('statisticsChart').getContext('2d');
    const statisticsChart = new Chart(ctx, {
        type: 'bar',
        data: chartData,
        options: {
            responsive: true,
            scales: {
                x: {
                    beginAtZero: true
                },
                y: {
                    beginAtZero: true
                }
            }
        });
</script>

<?= $this->endSection(); ?>
