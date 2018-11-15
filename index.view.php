<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Tugas Hari ini</h1>
    <ul>
        <li>
            <strong>Name: </strong><?= $tugas['judul']; ?>
        </li>
        <li>
            <strong>Tanggal waktu: </strong><?= $tugas['waktu']; ?>
        </li>
        <li>
            <strong>Penanggung jawab: </strong><?= $tugas['pelaksana']; ?>
        </li>
        <li>
            <strong>Status: </strong>

            <?= $tugas['terlaksana'] ? 'selesai' : 'belum tergarap'; ?>

        </li>
    </ul>
</body>
</html>