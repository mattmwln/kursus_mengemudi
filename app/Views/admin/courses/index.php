<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Daftar Kursus</h1>
    <a href="<?= base_url('admin/courses/create'); ?>" class="btn-primary inline-block mb-4">Tambah Kursus</a>

    <form id="bulkDeleteForm" method="POST" action="<?= base_url('admin/courses/bulk-delete'); ?>">
        <button type="submit" class="btn-danger mb-4 inline-block px-4 py-2 rounded-md hover:bg-red-600" onclick="return confirm('Yakin ingin menghapus kursus yang dipilih?')">
            <i class="bi bi-trash mr-1"></i>
        </button>
        <div class="overflow-x-auto bg-white rounded-lg shadow-md">
            <table class="min-w-full table-auto text-sm text-gray-700 border-separate border-spacing-0 border border-gray-200">
                <thead class="bg-gray-100">
                    <tr class="table-header">
                        <th class="px-4 py-2 border-b border-gray-300 text-left">
                            <input type="checkbox" id="selectAll">
                        </th>
                        <th class="px-4 py-2 border-b border-gray-300 text-left">No</th>
                        <th class="px-4 py-2 border-b border-gray-300 text-left">Judul</th>
                        <th class="px-4 py-2 border-b border-gray-300 text-left">Deskripsi</th>
                        <th class="px-4 py-2 border-b border-gray-300 text-left">Harga</th>
                        <th class="px-4 py-2 border-b border-gray-300 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($courses as $index => $course): ?>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 border-b border-gray-200">
                                <input type="checkbox" name="selected_courses[]" value="<?= $course['id']; ?>">
                            </td>
                            <td class="px-4 py-2 border-b border-gray-200"><?= $index + 1 ?></td>
                            <td class="px-4 py-2 border-b border-gray-200"><?= esc($course['name']) ?></td>
                            <td class="px-4 py-2 border-b border-gray-200"><?= esc($course['description']) ?></td>
                            <td class="px-4 py-2 border-b border-gray-200"><?= esc($course['price']) ?></td>
                            <td class="px-4 py-2 border-b border-gray-200 flex gap-2">
                                <a href="<?= base_url('admin/courses/edit/' . $course['id']); ?>" class="btn-primary btn-sm px-4 py-2 rounded-md hover:bg-blue-600">
                                    <i class="bi bi-pencil mr-1"></i>
                                </a>
                                <a href="<?= base_url('admin/courses/delete/' . $course['id']); ?>" class="btn-danger btn-sm px-4 py-2 rounded-md hover:bg-red-600" onclick="return confirm('Yakin ingin menghapus kursus ini?')">
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
    // Pilih semua checkbox
    document.getElementById('selectAll').addEventListener('click', function () {
        const checkboxes = document.querySelectorAll('input[name="selected_courses[]"]');
        checkboxes.forEach(checkbox => checkbox.checked = this.checked);
    });
</script>

<?= $this->endSection(); ?>
