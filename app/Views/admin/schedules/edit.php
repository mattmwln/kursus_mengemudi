<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>
<h1>Edit Jadwal Kursus</h1>
<form action="<?= base_url('admin/schedules/update/' . $schedule['id']); ?>" method="POST">
    <label for="course_id">Kursus:</label>
    <select name="course_id" id="course_id" class="form-control">
        <?php foreach ($courses as $course): ?>
            <option value="<?= $course['id']; ?>" <?= ($schedule['course_id'] == $course['id']) ? 'selected' : ''; ?>>
                <?= $course['name']; ?>
            </option>
        <?php endforeach; ?>
    </select>

    <label for="instructor_id">Instruktur:</label>
    <select name="instructor_id" id="instructor_id" class="form-control">
        <?php foreach ($instructors as $instructor): ?>
            <option value="<?= $instructor['id']; ?>" <?= ($schedule['instructor_id'] == $instructor['id']) ? 'selected' : ''; ?>>
                <?= $instructor['name']; ?>
            </option>
        <?php endforeach; ?>
    </select>

    <label for="schedule_date">Tanggal:</label>
    <input type="date" name="schedule_date" id="schedule_date" class="form-control" value="<?= $schedule['schedule_date']; ?>">

    <label for="schedule_time">Waktu:</label>
    <input type="time" name="schedule_time" id="schedule_time" class="form-control" value="<?= $schedule['schedule_time']; ?>">

    <button type="submit" class="btn btn-primary mt-3">Simpan Perubahan</button>
    <a href="<?= base_url('admin/schedules'); ?>" class="btn btn-secondary mt-3">Batal</a>
</form>
<?= $this->endSection(); ?>
