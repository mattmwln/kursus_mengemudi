<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>
<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-semibold mb-6">Daftar Jadwal Kursus</h1>
    
    <!-- Add Schedule Button -->
    <a href="<?= base_url('admin/schedules/create'); ?>" class="btn-primary mb-4 inline-block">Tambah Jadwal</a>

    <!-- Bulk Delete Form -->
    <form id="bulkDeleteForm" method="POST" action="<?= base_url('admin/schedules/bulk-delete'); ?>">
        <button type="submit" class="mb-4 btn-danger mt-4 px-4 py-2 rounded-md hover:bg-red-600" onclick="return confirm('Yakin ingin menghapus jadwal yang dipilih?')">
            <i class="bi bi-trash mr-1"></i>
        </button>

        <div class="overflow-x-auto bg-white rounded-lg shadow-md">
            <table class="min-w-full table-auto text-sm text-gray-700 border-separate border-spacing-0 border border-gray-200">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 border-b border-gray-300 text-left">
                            <input type="checkbox" id="selectAll">
                        </th>
                        <th class="px-4 py-2 border-b border-gray-300 text-left">No</th>
                        <th class="px-4 py-2 border-b border-gray-300 text-left">Kursus</th>
                        <th class="px-4 py-2 border-b border-gray-300 text-left">Instruktur</th>
                        <th class="px-4 py-2 border-b border-gray-300 text-left">Tanggal</th>
                        <th class="px-4 py-2 border-b border-gray-300 text-left">Waktu</th>
                        <th class="px-4 py-2 border-b border-gray-300 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($schedules as $schedule): ?>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 border-b border-gray-200 text-sm">
                                <input type="checkbox" name="selected_schedules[]" value="<?= $schedule['id']; ?>">
                            </td>
                            <td class="px-4 py-2 border-b border-gray-200 text-sm"><?= $no++; ?></td>
                            <td class="px-4 py-2 border-b border-gray-200 text-sm"><?= esc($schedule['getCourse']->name); ?></td>
                            <td class="px-4 py-2 border-b border-gray-200 text-sm"><?= esc($schedule['getInstructor']->name); ?></td>
                            <td class="px-4 py-2 border-b border-gray-200 text-sm"><?= $schedule['schedule_date']; ?></td>
                            <td class="px-4 py-2 border-b border-gray-200 text-sm"><?= $schedule['schedule_time']; ?></td>
                            <td class="px-4 py-2 border-b border-gray-200 text-sm flex gap-2">
                                <a href="<?= base_url('admin/schedules/edit/' . $schedule['id']); ?>" 
                                   class="btn-primary btn-sm px-4 py-2 rounded-md hover:bg-blue-600">
                                    <i class="bi bi-pencil mr-1"></i>
                                </a>
                                <a href="<?= base_url('admin/schedules/delete/' . $schedule['id']); ?>" 
                                   class="btn-danger btn-sm px-4 py-2 rounded-md hover:bg-red-600"
                                   onclick="return confirm('Yakin ingin menghapus jadwal ini?')">
                                    <i class="bi bi-trash mr-1"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </form>
</div>

<script>
    // Select all checkboxes
    document.getElementById('selectAll').addEventListener('click', function () {
        const checkboxes = document.querySelectorAll('input[name="selected_schedules[]"]');
        checkboxes.forEach(checkbox => checkbox.checked = this.checked);
    });
</script>

<?= $this->endSection(); ?>
