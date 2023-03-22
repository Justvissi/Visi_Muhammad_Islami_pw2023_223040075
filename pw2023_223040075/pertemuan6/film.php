<?php 
$film = [
    ['poster' => '<img src="./img/1.png" class="poster">',
    'judul' => 'Carnival Row',
    'tahun' => '2019',
    'genre' => 'fairy',
    'pemeran utama' => ['Orlando Bloom, ','Cara Delevingne'],
    'sutradara' => 'Travis Beacham and René Echevarria'
],
['poster' => '<img src="./img/2.png" class="poster">',
    'judul' => 'Star Trek: Picard',
    'tahun' => '1987',
    'genre' => 'action',
    'pemeran utama' => ['Patrick Stewart, ','Michelle Hurd'],
    'sutradara' => 'Kirsten Beyer, Michael Chabon and Akiva Goldsman'
],
['poster' => '<img src="./img/3.png" class="poster">',
    'judul' => 'The Mandolorian',
    'tahun' => '2019',
    'genre' => 'action',
    'pemeran utama' => ['Pedro Pascal, ', 'Carl Weathers'],
    'sutradara' => 'Jon Favreau'
],
['poster' => '<img src="./img/4.png" class="poster">',
    'judul' =>  'Attak On Titan',
    'tahun' => '2013',
    'genre' => 'action',
    'pemeran utama' => ['Eren Yeager, ','Mikasa Ackerman'],
    'sutradara' => 'Tetsurō Araki'
],
['poster' => '<img src="./img/5.png" class="poster">',
    'judul' => 'Chainsaw man',
    'tahun' => '2022',
    'genre' => 'action',
    'pemeran utama' => ['Denji, ','Aki'],
    'sutradara' => 'Shueisha'
]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Film</title>
    <style>
        img.poster {
            heigh: 100px;
            width: 150px;
        }
    </style>
</head>
<body>
    <h2>Daftar Film</h2>
    <?php foreach($film as $f) { ?>
        <ul>
            <li>poster: <?= $f['poster']; ?></li>
            <li>judul: <?= $f['judul']; ?></li>
            <li>tahun: <?= $f['tahun']; ?></li>
            <li>genre: <?= $f['genre']; ?></li>
            <li>pemeran utama: 
                <?php foreach($f['pemeran utama'] as $pemeran) {
                    echo $pemeran;
                } ?></li>
            <li>sutradara; <?= $f['sutradara'] ?></li>
        </ul>
<?php } ?>
</body>
</html>


