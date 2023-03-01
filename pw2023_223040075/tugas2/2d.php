<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2d</title>
</head>

<body>

    <table border="1" cellpadding="40" cellspacing="0">
        <?php
        for ($x = 1; $x <= 5; $x++) {
            echo "<tr>";
            for ($y = 1; $y <= 5; $y++) {
                $total = $x + $y;
                if ($total % 2 == 0) {
                    echo "<td height'50px' width'50px style='background:#000'></td>";
                } else {
                    echo "<td height'50px' width'50px style='background:#fff'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>
