<!DOCTYPE html>
<html>
<head>
    <title>Data Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            text-align: center;
            padding: 10px 20px;
            border-bottom: 2px solid #000;
            margin-bottom: 20px;
        }
        .header img {
            height: 80px;
        }
        .header h1 {
            margin: 5px 0;
            font-size: 24px;
        }
        .header p {
            margin: 5px 0;
            font-size: 16px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f44336;
            color: white;
        }
        .text-muted {
            color: #888;
        }
        .img-thumbnail {
            width: 100px;
            height: auto;
            border: 1px solid #ddd;
            padding: 5px;
        }
    </style>
</head>
<body>
    <!-- Kop Surat -->
    <div class="header">
        <h1>Angle Driving</h1>
        <p>Kota Palembang</p>
        <p>Email: info@angledaely.my.id</p>
    </div>

    <h2 class="text-center">Data Register</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Paket Kursus</th>
                <th>Instruktur</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registers as $index => $register): ?>
                <tr>
                    <td><?= $index + 1; ?></td>
                    <td><?= esc($register['name']); ?></td>
                    <td><?= esc($register['address']); ?></td>
                    <td><?= esc($register['gender']); ?></td>
                    <td><?= esc($register['no_hp']); ?></td>
                    <td><?= $register['course_name']; ?> | <?= date('d F Y', strtotime($register['schedule_date'])); ?> | <?= $register['schedule_time']; ?></td>
                    <td><?= $register['instructors_name']?></td>
                    <td><?= esc($register['status']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
