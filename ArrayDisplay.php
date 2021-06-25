<?php
    session_start();

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
    
<h1>Click A Button To Delete:</h1>

<?php
    $food = array('bread', 'carrot', 'banana', 'zucchini', 'sushi');
        for($i = 0; $i < sizeof($food); $i++){   
?>

<form method="POST">
    <input type="submit" value=<?=$food[$i]?> name="delete">
</form>

<?php
}
    if(isset($_POST["delete"])){
        unset($food[$i]);
    }

    $_SESSION["food"] = [];
   
?>

</body>
</html>