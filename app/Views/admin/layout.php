<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Admin Dashboard'; ?></title>
    <link rel="stylesheet" href="<?= base_url('adminlte/dist/css/adminlte.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/fontawesome-free/css/all.min.css'); ?>">
    <link href="<?= base_url('css/output.css'); ?>" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed bg-gray-100">
    <?= $this->include('admin/partials/navbar'); ?>

    <div class="wrapper flex">
        <!-- Sidebar -->
        <?= $this->include('admin/partials/sidebar'); ?>

        <!-- Content Wrapper -->
        <div class="content-wrapper flex-1 p-6">
            <!-- Page Header -->
            <section class="content-header mb-4">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="text-2xl font-semibold text-gray-800"><?= $title ?? 'Admin Dashboard'; ?></h1>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main Content -->
            <section class="content">
                <div class="container-fluid bg-white rounded-lg shadow-md p-6">
                    <?= $this->renderSection('content'); ?>
                </div>
            </section>
        </div>
    </div>

    <!-- Footer -->
    <?= $this->include('admin/partials/footer'); ?>

    <script src="<?= base_url('adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('adminlte/dist/js/adminlte.min.js'); ?>"></script>
</body>
</html>
