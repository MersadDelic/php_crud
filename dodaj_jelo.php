<?php include 'include/functions.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dodaj jelo</title>
    <meta name="author" content="Mersad Delić">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
</head>
<body>
    <h2>Dodaj jelo</h2>
    <form action="dodaj_jelo.php" method="POST">
        <table border="0" cellpadding="0" cellspacing="0" class="noborders">
            <tr>
                <td class="noborders">Naziv</td>
                <td class="noborders"><input type="text" name="naziv"></td>
            </tr>
            <tr>
                <td class="noborders">Vrsta</td>
                <td class="noborders"><input type="text" name="vrsta"></td>
            </tr>
            <tr>
                <td class="noborders">Kratak opis</td>
                <td class="noborders"><input type="text" name="opis"></td>
            </tr>
            <tr>
                <td class="noborders">Sastojci</td>
                <td class="noborders"><input type="text" name="sastojci"></td>
            </tr>
            <tr>
                <td class="noborders">Postupak</td>
                <td class="noborders"><input type="text" name="postupak"></td>
            
                </tr>
            <tr>
                <td class="noborders">Slika</td>
                <td class="noborders"><input type="text" name="slika"></td>
            </tr>
            <tr>
                <td colspan="2" class="noborders">
                    <input style="width:100px; text-align: center;" class="addbutton" type="submit" name="addjelo" value="Dodaj jelo">
                    <a class="backbutton" href="index.php">Početna</a>
                </td>
            </tr>
        </table>

        <?php dodajJelo(); ?>
    </form>
</body>
</html>
