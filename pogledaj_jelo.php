<?php include 'include/functions.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Pregled jela</title>
    <meta name="author" content="Mersad Delić">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
</head>
<body>
    
    <h2 style="font-family:'uni sans bold'; border:1px solid black; border-radius:5px; text-align:center; background-color: #ff45;" >Detaljan pregled jela</h2>
    <table class="noborders">
    <?php pogledajJelo(); ?>
    </table>
    <img style="float:right; vertical-align:top; width:200px; position:absolute; top:120px; right:100px" src="include/h1.jpg">
    <br>
    <a class="backbutton" href="index.php">Početna</a>

    
</body>
</html>