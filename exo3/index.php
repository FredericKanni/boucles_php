<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    $nbr = 100;
    $nbr2=5;
    while(!($nbr <= 10)){
            $num3 = $nbr * $nbr2;
            echo"num3 = " . $num3 . "<br>";
            $nbr=$nbr - 1;
            echo"nbr = " .$nbr . "<br>";
    }
    
    ?>
</body>
</html>