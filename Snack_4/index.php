<?php
    $newArray = [];

    while (count($newArray) < 15 ){
        $number = rand(1,50);

        if(!in_array($number, $newArray)){
            $newArray[]= $number;
        }
    
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>
<?php foreach($newArray as $randomNumber) {?>
        
            <h2><?php echo $randomNumber ?></h2>
        
    <?php } ?>
</body>
</html>