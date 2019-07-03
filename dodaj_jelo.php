<?php include 'include/functions.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dodaj jelo</title>
    <meta name="author" content="Mersad Delić">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h2>Dodaj jelo</h2>
    <form action="dodaj_jelo.php" method="POST">
        <table border="0" cellpadding="0" cellspacing="0" class="table table-bordered table-dark">
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
                <td class="noborders"><textarea rows="11" cols="97" name="postupak"></textarea></td>
            </tr>
            <tr>
                <td class="noborders">Komentar</td>
                <td class="noborders"><input type="text" name="komentar"></td>
            </tr>
            <tr>
                <td colspan="2" class="noborders">
                    <input style="width:200px; text-align: center;" class="btn btn-primary" type="submit" name="addjelo" value="Dodaj jelo">
                    <a class="btn btn-warning" href="index.php">Početna</a>
                </td>
            </tr>
        </table>

        <?php dodajJelo(); ?>
    </form>
</body>
</html>
