<?php include 'include/functions.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Pregled jela</title>
    <meta name="author" content="Mersad Delić">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
</head>
<body>
    
    <h2 style="font-family:'uni sans bold'; border:1px solid black; border-radius:5px; text-align:center; background-color: #ff45;" >Detaljan pregled jela</h2>
    <table class="table table-dark">
    <?php pogledajJelo(); ?>
    </table>
    
    <br>
    <a class="btn btn-success" href="index.php">Početna</a>

    
</body>
</html>