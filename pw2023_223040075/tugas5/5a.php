<?php
$mahasiswa = [
    [
        'NRP' => 223040095,
        'Nama' => 'Visi Muhammad Islami',
        'Kelas' => 'C',
        'Jurusan' => 'Teknik Informatika',
        'Semester' => 2
    ],
    [
        'NRP' => 223040088,
        'Nama' => 'Bima Hafit Prakoso',
        'Kelas' => 'C',
        'Jurusan' => 'Teknik Informatika',
        'Semester' => 2
    ],
    [
        'NRP' => 223040093,
        'Nama' => 'Haidar Ali',
        'Kelas' => 'C',
        'Jurusan' => 'Teknik Informatika',
        'Semester' => 2
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5a - Daftar Data Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php
    array_push(
        $mahasiswa,
        [
            'NRP' => 223040072,
            'Nama' => 'Dzikri Setiawan',
            'Kelas' => 'C',
            'Jurusan' => 'Teknik Informatika',
            'Semester' => 2
        ],
        [
            'NRP' => 223040090,
            'Nama' => 'Aldi Maulana Fadilah',
            'Kelas' => 'C',
            'Jurusan' => 'Teknik Informatika',
            'Semester' => 2
        ],
        [
            'NRP' => 223040078,
            'Nama' => 'Adi Rachmansyah',
            'Kelas' => 'C',
            'Jurusan' => 'Teknik Informatika',
            'Semester' => 2
        ],
        [
            'NRP' => 223040076,
            'Nama' => 'Irsan Moch. Taufik Febrian',
            'Kelas' => 'C',
            'Jurusan' => 'Teknik Informatika',
            'Semester' => 2
        ],
        [
            'NRP' => 223040087,
            'Nama' => 'Kaka Praditha Putra',
            'Kelas' => 'C',
            'Jurusan' => 'Teknik Informatika',
            'Semester' => 2
        ],
        [
            'NRP' => 223040094,
            'Nama' => 'M.Robby.A',
            'Kelas' => 'C',
            'Jurusan' => 'Teknik Informatika',
            'Semester' => 2
        ],
        [
            'NRP' => 223040098,
            'Nama' => 'Meutuah Dicco Linge',
            'Kelas' => 'C',
            'Jurusan' => 'Teknik Informatika',
            'Semester' => 2
        ]
    );
    sort($mahasiswa);
    foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>NRP :<?= $mhs['NRP']; ?></li>
            <li>Nama :<?= $mhs['Nama']; ?></li>
            <li>Kelas :<?= $mhs['Kelas']; ?></li>
            <li>Jurusan :<?= $mhs['Jurusan']; ?></li>
            <li>Semester :<?= $mhs['Semester']; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>