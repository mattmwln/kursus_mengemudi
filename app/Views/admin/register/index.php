<!-- app/Views/admin/schedules/index.php -->

<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>

<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-semibold mb-6">Daftar Pendaftaran</h1>
    

    <!-- Table -->
    <div class="overflow-x-auto bg-white rounded-lg shadow-md">
        <table class="min-w-full table-auto text-sm text-gray-700 border-separate border-spacing-0 border border-gray-200">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-6 py-3 border-b border-gray-300 text-left">No</th>
                    <th class="px-6 py-3 border-b border-gray-300 text-left">Nama</th>
                    <th class="px-6 py-3 border-b border-gray-300 text-left">Nomor Hp</th>
                    <th class="px-6 py-3 border-b border-gray-300 text-left">Jenis Kelamin</th>
                    <th class="px-6 py-3 border-b border-gray-300 text-left">Paket Kursus</th>
                    <th class="px-6 py-3 border-b border-gray-300 text-left">Instruktur</th>
                    <th class="px-6 py-3 border-b border-gray-300 text-left">Bukti Bayar</th>
                    <th class="px-6 py-3 border-b border-gray-300 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php if (count($registers) > 0): ?>
                    <?php foreach ($registers as $register): ?>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-3 border-b border-gray-200 text-sm"><?= $no++; ?></td>
                            <td class="px-6 py-3 border-b border-gray-200 text-sm"><?= $register['name']; ?></td>
                            <td class="px-6 py-3 border-b border-gray-200 text-sm"><?= $register['no_hp']; ?></td>
                            <td class="px-6 py-3 border-b border-gray-200 text-sm"><?= $register['gender']; ?></td>
                            <td class="px-6 py-3 border-b border-gray-200 text-sm"><?= $register['course_name']; ?> | <?= date('d F Y', strtotime($register['schedule_date'])); ?> | <?= $register['schedule_time']; ?></td>
                            <td class="px-6 py-3 border-b border-gray-200 text-sm"><?= $register['instructors_name']?></td>
                            <td class="px-6 py-3 border-b border-gray-200 text-sm">
                                <a href="<?= base_url($register['payment_image']); ?>" target="_blank" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                            </td>
                            <td class="px-6 py-3 border-b border-gray-200 text-sm">
    <form action="<?= base_url('admin/register/update-status/' . $register['id']); ?>" method="POST">
        <!-- CSRF Token -->
        <?= csrf_field(); ?>

        <!-- Dropdown untuk memilih status -->
        <select name="status" class="form-select px-4 py-2 border rounded-md">
            <option value=""><?= $register['status']?></option>
            <option value="PENDING" <?= ($register['status'] == 'PENDING') ? 'selected' : ''; ?>>PENDING</option>
            <option value="PROSES" <?= ($register['status'] == 'PROSES') ? 'selected' : ''; ?>>PROSES</option>
            <option value="SELESAI" <?= ($register['status'] == 'SELESAI') ? 'selected' : ''; ?>>SELESAI</option>
        </select>

        <!-- Tombol submit dengan warna Bootstrap yang beragam -->
        <button type="submit" class="btn btn-primary mt-2">
            Update Status
        </button>
    </form>
</td>

                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="px-4 py-2 text-center">Tidak ada data untuk ditampilkan</td>
                    </tr>
                <?php endif; ?>

            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>
