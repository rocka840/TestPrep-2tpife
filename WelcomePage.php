<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Welcome Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
  

<?php

if(isset($_SESSION["nextpage"]) && $_SESSION["nextpage"]){
    
}
print $_SESSION["nextpage"];

?>


<h1>Welcome</h1>

<form method="GET">
    <input type="hidden" value="0">
    <input type="submit" value="submit"> 
</form>



</body>
</html>