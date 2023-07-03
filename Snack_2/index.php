<?php
    $access = false;
    $details = true;

if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['age'])){

    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];

    $access = true;
  

    if((strlen($name) > 3) && strpos($email, '@') && strpos($email, '.') && is_numeric($age)){

        $details = false; 
        
    }
    

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snack 2</title>
</head>
<body> 
    <form action="index.php" method="GET">
        <input name="name" type="text" placeholder="Inserisci il tuo nome" >
        <input name="email" type="email" placeholder="Inserisci email">
        <input name="age" type="text" placeholder="Inserisci età">
        <button type="submit" >Invia</button>              
    </form>
      
    <div class="<?php echo $access == true ? 'display_block' : 'display_none' ?>">

        <?php echo ($details == false) ? 'Accesso riuscito' : 'Accesso Negato'?>

    </div>
       
   
  
    
</body>
</html>
