<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Daftar Kursus</h1>
    <a href="<?= base_url('admin/courses/create'); ?>" class="btn-primary inline-block">Tambah Kursus</a>

    <form id="bulkDeleteForm" method="POST" action="<?= base_url('admin/courses/bulk-delete'); ?>">
        <button type="submit" class=" mb-4 btn-danger mt-4" onclick="return confirm('Yakin ingin menghapus kursus yang dipilih?')"> <i class="bi bi-trash"></i> <!-- Ikon hapus --></button>
        <div class="table-container">
            <table class="w-full text-sm text-left text-gray-700">
                <thead class="table-header">
                    <tr>
                        <th class="px-4 py-2"><input type="checkbox" id="selectAll"></th>
                        <th class="px-4 py-2">No</th>
                        <th class="px-4 py-2">Judul</th>
                        <th class="px-4 py-2">Deskripsi</th>
                        <th class="px-4 py-2">Harga</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($courses as $index => $course): ?>
                        <tr class="table-row">
                            <td class="px-4 py-2">
                                <input type="checkbox" name="selected_courses[]" value="<?= $course['id']; ?>">
                            </td>
                            <td class="px-4 py-2"><?= $index + 1 ?></td>
                            <td class="px-4 py-2"><?= $course['name'] ?></td>
                            <td class="px-4 py-2"><?= $course['description'] ?></td>
                            <td class="px-4 py-2"><?= $course['price'] ?></td>
                            <td class="px-4 py-2 flex gap-2">
                                <a href="<?= base_url('admin/courses/edit/' . $course['id']); ?>" class="btn-secondary btn-sm"> <i class="bi bi-pencil"></i> <!-- Ikon hapus --></a>
                                <a href="<?= base_url('admin/courses/delete/' . $course['id']); ?>" class="btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus kursus ini?')"> <i class="bi bi-trash"></i> <!-- Ikon hapus --></a>
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
