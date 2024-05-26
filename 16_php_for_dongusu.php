<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>For Dongusu</title>
</head>
<body>
    <?php
        // for($i=0;$<100;$i++){}
        echo "<p style='font-size:40px'>";
        $i = 1;
        $faktoriyel = 1;
        $s = 5;

        for($i=1; $i<=$s; $i++){
            $faktoriyel *= $i;
        }

        echo $s."! = ".$faktoriyel;

        echo "</p>";
    ?>
</body>
</html>