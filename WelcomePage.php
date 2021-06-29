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
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Welcome</h1>
    <?php
    if (isset($_SESSION["bookpage"]) && $_SESSION["bookpage"] > 0) {
 
    ?>
        <form method="GET">
            <input type="hidden" name="page" value=<?=$_SESSION["bookpage"]?>>
            <input type="submit" value="next" name="next">
        </form>
        <form method="GET">
            <input type="hidden" name="page" value=<?=$_SESSION["bookpage"]?>>
            <input type="submit" value="previous" name="previous">
        </form>
    <?php
    } else {
    ?>
        <form method="GET">
            <input type="hidden" name="page" value=0>
            <input type="submit" value="next">
        </form>
    <?php
 
    }
    print $_SESSION["bookpage"];
    ?>

</body>
</html>