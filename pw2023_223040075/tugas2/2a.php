<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$n_depan = " Visi";
$n_belakang = " Islami";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 15 == 0) {
        echo "$n_depan $n_belakang <br>";
    } elseif ($i % 5 == 0) {
        echo "$n_belakang <br>";
    } elseif ($i % 3 == 0) {
        echo "$n_depan <br>";
    } else {
        echo "$i <br>";
    }
}
?>

</body>
</html>