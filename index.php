<?php include 'include/functions.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kuhinja-recepti</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="author" content="Mersad Delić">
    
</head>
<body>
<h1>TRADICIONALNI RECEPTI ZA KOLAČE</h1><br>

    <table class="table table-dark">

        <tr>
           
            <th>Naziv</th>
            <th>Vrsta</th>
            <th>Kratak opis</th>
            <th>Opcije</th>
            
            
        </tr>
        <?php prikaziJela(); ?>
        <?php izbrisiJelo(); ?>
    </table>

    <div class="link">
<a class="btn btn-success" href="dodaj_jelo.php">Dodaj novu poslasticu</a>
</div>
</body>
</html>
