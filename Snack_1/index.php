<?php
$matches=[
    [
        'match' => 'Italia - Romania',
        'score' => '50 - 78'
    ],
        [
        'match' => 'Germania - Inghilterra',
        'score' => '67 - 59'
    ],
        [
        'match' => 'Spagna - Fracia',
        'score' => '87 -89'
    ],
        [
        'match' => 'USA - Messico',
        'score' => '55 - 87'
    ],
        [
        'match' => 'Australia - Nuova Zelanda',
        'score' => '79 - 47'
    ],
        [
        'match' => 'Norvegia - Svezia',
        'score' => '102 - 99'
    ],
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <ul>
        <?php foreach($matches as $games){ ?>
        <li>
            <?php echo $games['match']. " | " .$games['score']; ?> 
        </li>
        <?php } ?>
    </ul>
</body>
</html>