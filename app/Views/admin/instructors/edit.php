<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Edit Instruktur</h1>
    <form action="<?= base_url('admin/instructors/update/' . $instructor['id']); ?>" method="POST" class="space-y-4" enctype="multipart/form-data">
        <div>
            <label for="name" class="form-label">Nama</label>
            <input type="text" id="name" name="name" value="<?= $instructor['name']; ?>" class="form-input" required>
        </div>
        <div class="form-group">
            <label for="image" class="form-label">Foto</label>
            <input type="file" class="form-input" id="image" name="image" required>
        </div>
        <div>
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" value="<?= $instructor['email']; ?>" class="form-input" required>
        </div>
        <div>
            <label for="phone" class="form-label">Telepon</label>
            <input type="text" id="phone" name="phone" value="<?= $instructor['phone']; ?>" class="form-input" required>
        </div>
        <div>
            <label for="expertise" class="form-label">Keahlian</label>
            <input type="text" id="expertise" name="expertise" value="<?= $instructor['expertise']; ?>" class="form-input" required>
        </div>
        <div class="flex space-x-2 mt-4">
            <button type="submit" class="btn-primary">Update</button>
            <a href="<?= base_url('admin/instructors'); ?>" class="btn-secondary">Kembali</a>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>
