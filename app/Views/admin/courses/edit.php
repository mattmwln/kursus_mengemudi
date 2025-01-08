<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>
<h1 class="text-3xl font-semibold mb-4">Edit Kursus</h1>
<form method="POST" action="<?= base_url('admin/courses/update/' . $course['id']); ?>" class="space-y-4">
    <div class="form-group">
        <label for="title" class="block text-sm font-medium text-gray-700">Judul Kursus</label>
        <input type="text" class="form-control w-full px-4 py-2 border rounded-lg border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" id="name" name="name" value="<?= $course['name']; ?>" required>
    </div>
    <div class="form-group">
        <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi Kursus</label>
        <textarea class="form-control w-full px-4 py-2 border rounded-lg border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" id="description" name="description" required><?= $course['description']; ?></textarea>
    </div>
    <div class="form-group">
        <label for="price" class="block text-sm font-medium text-gray-700">Harga</label>
        <input type="number" class="form-control w-full px-4 py-2 border rounded-lg border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" id="price" name="price" step="0.01" value="<?= $course['price']; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white py-2 px-6 rounded-lg shadow-md">Update</button>
</form>
<?= $this->endSection(); ?>
