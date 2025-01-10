<?= $this->extend('layouts/app');?>

<?= $this->section('content');?>
    <div class="hero-wrap" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
            <div class="col-lg-8 ftco-animate">
                <<div class="text w-100 text-center mb-md-5 pb-md-5">
                    <h1 class="mb-4">Selesaikan Pembayaranmu</h1>
                    <p style="font-size: 18px;">Kami membantu Anda menjadi pengemudi yang handal dengan langkah-langkah praktis dan aman. Bersama kami, belajar mengemudi jadi lebih menyenangkan dan penuh percaya diri!</p>
                </div>
            </div>
            </div>
        </div>
    </div>


<div class="container my-5">
        <div class="row">
            <!-- Left Column: User Data -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="text-light">Data Pembeli</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Nama:</strong> <?= esc($register['name']); ?></p>
                        <p><strong>Jenis Kelamin:</strong> <?= esc($register['gender']); ?></p>
                        <p><strong>Alamat:</strong> <?= esc($register['address']); ?></p>
                        <p><strong>Nomor Telepon:</strong> <?= esc($register['no_hp']); ?></p>
                    </div>
                </div>
            </div>

            <!-- Right Column: Checkout Total -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h5>Detail Paket</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Jadwal
                                <span>Tanggal <?= date('d F Y' , strtotime(esc($schedule['schedule_date']))); ?> | Pukul <?= esc($schedule['schedule_time'])?> </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Paket
                                <span><?= esc($course['name']); ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Instruktur
                                <span><?= esc($instructor['name']); ?></span>
                            </li>
                        </ul>
                        <h6 class="text-end text-danger"><strong>Total : </strong>Rp <?= number_format($course['price'], 0, ',', '.'); ?></h6>
                        <form action="<?= base_url('checkout-page/'. $register['id']);?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="image">Upload Bukti Pembayaran</label>
                                <input type="file" name="payment_image" id="" class="form-control">
                            </div>
                            <button class="btn btn-primary w-100 mt-3">Konfirmasi Pembayaran</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection();?>