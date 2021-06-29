<?php
session_start();
if(!isset($_SESSION["hiddenItems"])){
    $_SESSION["hiddenItems"] = [];
}
$arrayOfItems=["Ducks","Pinguins","Birds"];
 
$order=["Birds","Pinguins","Ducks"];
 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Array Display</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Guess the code:</h1>
    
<?php
        //var_dump($_POST);
        for ($i = 0; $i < sizeof($arrayOfItems); $i++) {
            if (isset($_POST[$arrayOfItems[$i]])) {
                array_push($_SESSION["hiddenItems"], $i);
            }
        }
        //var_dump($_SESSION["hiddenItems"]);
        
        for ($i = 0; $i < sizeof($arrayOfItems); $i++) {    
            if(!in_array($i,$_SESSION["hiddenItems"])){
?>
        <form method="post">
            <input type="hidden" name="<?=$arrayOfItems[$i]?>" value=<?=$arrayOfItems[$i]?>>
            <input type="submit" value=<?=$arrayOfItems[$i]?>></br>
            </form>
<?php      
        }
    }
    echo implode(', ', $_SESSION["hiddenItems"]);
?>
        
</body>
</html>