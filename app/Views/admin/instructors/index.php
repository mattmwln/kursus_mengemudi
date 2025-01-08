<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Daftar Instruktur</h1>
    <a href="<?= base_url('admin/instructors/create'); ?>" class="btn-primary mb-4 inline-block">Tambah Instruktur</a>
    <div class="table-container">
        <table class="w-full text-sm text-left text-gray-700">
            <thead class="table-header">
                <tr>
                    <th class="px-4 py-2">No</th>
                    <th class="px-4 py-2">Nama</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Telepon</th>
                    <th class="px-4 py-2">Keahlian</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($instructors as $index => $instructor): ?>
                    <tr class="table-row">
                        <td class="px-4 py-2"><?= $index + 1 ?></td>
                        <td class="px-4 py-2"><?= $instructor['name'] ?></td>
                        <td class="px-4 py-2"><?= $instructor['email'] ?></td>
                        <td class="px-4 py-2"><?= $instructor['phone'] ?></td>
                        <td class="px-4 py-2"><?= $instructor['expertise'] ?></td>
                        <td class="px-4 py-2 flex gap-2">
                            <a href="<?= base_url('admin/instructors/edit/' . $instructor['id']); ?>" class="btn-secondary btn-sm">Edit</a>
                            <a href="<?= base_url('admin/instructors/delete/' . $instructor['id']); ?>" class="btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus instruktur ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>
