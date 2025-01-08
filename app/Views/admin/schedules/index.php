<!-- app/Views/admin/schedules/index.php -->

<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>
<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-semibold mb-6">Daftar Jadwal Kursus</h1>
    
    <!-- Add Schedule Button -->
    <a href="<?= base_url('admin/schedules/create'); ?>" class="btn-primary mb-4 inline-block">Tambah Jadwal</a>

    <!-- Table -->
    <div class="overflow-x-auto bg-white rounded-lg shadow-md">
        <table class="min-w-full table-auto text-sm text-gray-700">
            <thead>
                <tr class="table-header">
                    <th class="px-4 py-2">No</th>
                    <th class="px-4 py-2">Kursus</th>
                    <th class="px-4 py-2">Instruktur</th>
                    <th class="px-4 py-2">Tanggal</th>
                    <th class="px-4 py-2">Waktu</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($schedules as $schedule): ?>
                    <tr class="table-row">
                        <td class="px-4 py-2 text-sm"><?= $no++; ?></td>
                        <td class="px-4 py-2 text-sm"><?= esc($schedule['getCourse']->name); ?></td>
                        <td class="px-4 py-2 text-sm"><?= esc($schedule['getInstructor']->name); ?></td>
                        <td class="px-4 py-2 text-sm"><?= $schedule['schedule_date']; ?></td>
                        <td class="px-4 py-2 text-sm"><?= $schedule['schedule_time']; ?></td>
                        <td class="px-4 py-2">
                            <a href="<?= base_url('admin/schedules/edit/' . $schedule['id']); ?>" class="btn-secondary btn-sm">Edit</a>
                            <a href="<?= base_url('admin/schedules/delete/' . $schedule['id']); ?>" class="btn-danger btn-sm ml-2" onclick="return confirm('Yakin ingin menghapus jadwal ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>
