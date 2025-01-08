<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>
<h1>Tambah Jadwal Kursus</h1>
<form action="<?= base_url('admin/schedules/store'); ?>" method="POST">
    <label>Kursus:</label>
    <select name="course_id" class="form-control">
        <?php foreach ($courses as $course): ?>
            <option value="<?= $course['id']; ?>"><?= $course['name']; ?></option>
        <?php endforeach; ?>
    </select>

    <label>Instruktur:</label>
    <select name="instructor_id" class="form-control">
        <?php foreach ($instructors as $instructor): ?>
            <option value="<?= $instructor['id']; ?>"><?= $instructor['name']; ?></option>
        <?php endforeach; ?>
    </select>

    <label>Tanggal:</label>
    <input type="date" name="schedule_date" class="form-control">

    <label>Waktu:</label>
    <input type="time" name="schedule_time" class="form-control">

    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
</form>
<?= $this->endSection(); ?>
