<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>
<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-semibold mb-6">Tambah Kursus</h1>
    <form action="<?= base_url('admin/courses/store'); ?>" method="POST" class="space-y-6">
        <div>
            <label for="name" class="form-label">Nama Kursus</label>
            <input type="text" id="name" name="name" class="form-input" required>
        </div>
        <div>
            <label for="description" class="form-label">Deskripsi</label>
            <textarea id="description" name="description" class="form-input" required></textarea>
        </div>
        <div>
            <label for="price" class="form-label">Harga</label>
            <input type="number" id="price" name="price" step="0.01" class="form-input" required>
        </div>
        <div class="flex space-x-4">
            <button type="submit" class="btn-primary">Simpan</button>
            <a href="<?= base_url('admin/courses'); ?>" class="btn-secondary">Kembali</a>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>
