<?php include 'include/functions.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kuhinja-recepti</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
    <meta name="author" content="Mersad Delić">
    
</head>
<body>
<h1>TRADICIONALNI RECEPTI</h1>
<a class="addbutton" href="dodaj_jelo.php">Dodaj novu poslasticu</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Naziv</th>
            <th>Vrsta</th>
            <th>Kratak opis</th>
            
            <th>Opcije</th>
            
            
        </tr>
        <?php prikaziJela(); ?>
        <?php izbrisiJelo(); ?>
    </table>
</body>
</html>
