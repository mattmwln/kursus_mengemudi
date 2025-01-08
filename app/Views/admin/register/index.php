<!-- app/Views/admin/schedules/index.php -->

<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>
<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-semibold mb-6">Daftar Pendaftaran</h1>
    

    <!-- Table -->
    <div class="overflow-x-auto bg-white rounded-lg shadow-md">
        <table class="min-w-full table-auto text-sm text-gray-700">
            <thead>
                <tr class="table-header">
                    <th class="px-4 py-2">No</th>
                    <th class="px-4 py-2">Nama</th>
                    <th class="px-4 py-2">Nomor Hp</th>
                    <th class="px-4 py-2">Jenis Kelamin</th>
                    <th class="px-4 py-2">Paket Kursus</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php if (count($registers) > 0): ?>
                    <?php foreach ($registers as $register): ?>
                        <tr class="table-row">
                            <td class="px-4 py-2 text-sm"><?= $no++; ?></td>
                            <td class="px-4 py-2 text-sm"><?= $register['name']; ?></td>
                            <td class="px-4 py-2 text-sm"><?= $register['no_hp']; ?></td>
                            <td class="px-4 py-2 text-sm"><?= $register['gender']; ?></td>
                            <td class="px-4 py-2 text-sm"><?= esc($register['getSchedule']->name); ?></td>
                            <td class="px-4 py-2">
                                <a href="<?= base_url('admin/schedules/edit/' . $schedule['id']); ?>" class="btn-secondary btn-sm">Edit</a>
                                <a href="<?= base_url('admin/schedules/delete/' . $schedule['id']); ?>" class="btn-danger btn-sm ml-2" onclick="return confirm('Yakin ingin menghapus jadwal ini?')">Hapus</a>
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
