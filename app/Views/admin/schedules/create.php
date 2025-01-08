<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>

<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Tambah Schedule</h1>
    <form action="<?= base_url('admin/schedules/store'); ?>" method="POST">
    <div class="form-group">
        <label class="form-label">Kursus:</label>
        <select name="course_id" class="form-input">
                <option value="">Pilih Kursus</option>
            <?php foreach ($courses as $course): ?>
                <option value="<?= $course['id']; ?>"><?= $course['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <label>Instruktur:</label>
    <select name="instructor_id" class="form-input">
        <option value="">Pilih Instuktur</option>
        <?php foreach ($instructors as $instructor): ?>
            <option value="<?= $instructor['id']; ?>"><?= $instructor['name']; ?></option>
        <?php endforeach; ?>
    </select>

    <label>Tanggal:</label>
    <input type="date" name="schedule_date" class="form-input">

    <label>Waktu:</label>
    <input type="time" name="schedule_time" class="form-input">

    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
</form>
</div>
<?= $this->endSection(); ?>
