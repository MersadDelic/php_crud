<?php 
    
    if((isset($_GET['update']))){
    $id = $_GET['update'];
    include 'include/konekcija.php';
 
    $sql = "SELECT * FROM jela WHERE id=$id";
    mysqli_set_charset($conn,"utf8");
    $rez = mysqli_query($conn, $sql);
    
    while ($row = mysqli_fetch_assoc($rez)){
        $naziv     = $row['naziv'];
        $vrsta     = $row['vrsta'];
        $opis      = $row['opis'];
        $sastojci  = $row['sastojci'];
        $postupak  = $row['postupak'];
        $komentar     = $row['komentar'];
    }
} 


    if(isset($_POST['Update'])){
    include 'include/konekcija.php';
    
    $update_id = $_POST['id'];
    $naziv     = $_POST['naziv'];
    $vrsta     = $_POST['vrsta'];
    $opis      = $_POST['opis'];
    $sastojci  = $_POST['sastojci'];
    $postupak  = $_POST['postupak'];
    $komentar     = $_POST['komentar'];
    
    $sql = "UPDATE jela SET naziv='$naziv', vrsta='$vrsta', opis='$opis', sastojci='$sastojci', postupak='$postupak', komentar='$komentar' WHERE id=$update_id";

    mysqli_set_charset($conn,"utf8");

    $rez = mysqli_query($conn, $sql);
    
    if(!$rez){

        die("Upis u bazu nije uspio" . mysqli_error($conn));

    }else{

        echo "<p style='color:green; margin-top:10px;'>Jelo uspješno izmijenjeno.</p>";

    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Izmjena jela</title>
    <meta name="author" content="Mersad Delić">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h2>Izmjeni jelo</h2>
    <form action="izmjeni_jelo.php" method="POST">
        <table border="0" cellpadding="0" cellspacing="0" class="table table-bordered table-dark">
            <tr>
                <td class="noborders">Naziv</td>
                <td class="noborders"><input type="text" name="naziv" value="<?php echo $naziv; ?>"></td>
            </tr>
            <tr>
                <td class="noborders">Vrsta</td>
                <td class="noborders"><input type="text" name="vrsta" value="<?php echo $vrsta; ?>"></td>
                </tr>
            <tr>
                <td class="noborders">Kratak opis</td>
                <td class="noborders"><input type="text" name="opis" value="<?php echo $opis; ?>"></td>
            </tr>
            <tr>
                <td class="noborders">Sastojci</td>
                <td class="noborders"><input type="text" name="sastojci" value="<?php echo $sastojci; ?>"></td>
            </tr>
            <tr>
                <td class="noborders">Postupak</td>
                <td class="noborders"><textarea rows="11" cols="97" name="postupak" ><?php echo $postupak ?></textarea></td>
            </tr>
            <tr>
                <td class="noborders">Komentar</td>
                <td class="noborders"><input type="text"  name="komentar" value="<?php echo $komentar; ?>"></td>
            </tr>
            <tr>
                <td colspan="2" class="noborders">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <input type="submit" class="btn btn-primary" name="Update" value="Spasi izmjene" /> 
                    <a class="btn btn-warning" href="index.php">Početna</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html> 
