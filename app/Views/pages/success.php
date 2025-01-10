<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Success</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="text-center">
            <!-- Icon sukses -->
            <i class="fas fa-check-circle fa-5x text-success mb-3"></i>
            <h1 class="display-4">Transaction Successful</h1>
            <p class="lead">Your payment has been processed successfully. Thank you for your purchase!</p>
            <a href="<?= base_url('/')?>" class="btn btn-primary">Go to Dashboard</a>
        </div>
    </div>

    <!-- Bootstrap JS dan dependensi -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
