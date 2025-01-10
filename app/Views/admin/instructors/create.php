<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Tambah Instruktur</h1>
    <form action="<?= base_url('admin/instructors/store'); ?>" method="POST" class="space-y-6" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-input" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="image" class="form-label">Foto</label>
            <input type="file" class="form-input" id="image" name="image" required>
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-input" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone" class="form-label">Telepon</label>
            <input type="text" class="form-input" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="expertise" class="form-label">Keahlian</label>
            <input type="text" class="form-input" id="expertise" name="expertise" required>
        </div>
        <div class="flex space-x-4">
            <button type="submit" class="btn-primary py-2 px-6 rounded-lg">Simpan</button>
            <a href="<?= base_url('admin/instructors'); ?>" class="btn-secondary py-2 px-6 rounded-lg">Kembali</a>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>
