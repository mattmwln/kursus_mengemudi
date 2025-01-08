<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="mt-4">Dashboard Admin</h1>
            <p>Selamat datang di halaman Admin Dashboard!</p>
        </div>
    </div>

    <!-- Admin Cards -->
    <div class="row">
        <!-- Card: Manajemen Kursus -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title">Manajemen Kursus</h5>
                </div>
                <div class="card-body">
                    <p>Kelola data kursus di sini.</p>
                    <a href="<?= base_url('/admin/courses'); ?>" class="btn btn-primary btn-sm">
                        <i class="fas fa-book"></i> Lihat Kursus
                    </a>
                </div>
            </div>
        </div>

        <!-- Card: Manajemen Pengguna -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h5 class="card-title">Manajemen Pengguna</h5>
                </div>
                <div class="card-body">
                    <p>Kelola data pengguna di sini.</p>
                    <a href="<?= base_url('/admin/users'); ?>" class="btn btn-success btn-sm">
                        <i class="fas fa-users"></i> Lihat Pengguna
                    </a>
                </div>
            </div>
        </div>

        <!-- Card: Laporan -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-warning text-dark">
                    <h5 class="card-title">Laporan</h5>
                </div>
                <div class="card-body">
                    <p>Lihat dan kelola laporan.</p>
                    <a href="<?= base_url('/admin/reports'); ?>" class="btn btn-warning btn-sm">
                        <i class="fas fa-chart-line"></i> Lihat Laporan
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistik -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <h5 class="card-title">Statistik Pengguna</h5>
                </div>
                <div class="card-body">
                    <p>Statistik singkat tentang aktivitas pengguna dan kursus.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Total Kursus:</strong> 15</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Total Pengguna:</strong> 120</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
