<?php 
    
    if((isset($_GET['update']))){
    $id = $_GET['update'];
    include 'include/konekcija.php';
 
    $sql = "SELECT * FROM kontakti WHERE id=$id";
    mysqli_set_charset($conn,"utf8");
    $rez = mysqli_query($conn, $sql);
    
    while ($row = mysqli_fetch_assoc($rez)){
        $imeprezime = $row['ime'];
        $adresa     = $row['adresa'];
        $grad       = $row['grad'];
        $email      = $row['email'];
        $spol       = $row['spol'];
        $telefon    = $row['telefon'];
    }
} 


    if(isset($_POST['Update'])){
    include 'include/konekcija.php';
    
    $update_id  = $_POST['id'];
    $imeprezime = $_POST['imeprezime'];
    $adresa     = $_POST['adresa'];
    $grad       = $_POST['grad'];
    $email      = $_POST['email'];
    $spol       = $_POST['spol'];
    $telefon    = $_POST['telefon'];
    
    $sql = "UPDATE kontakti SET ime='$imeprezime', adresa='$adresa', grad='$grad', email='$email', spol='$spol', telefon='$telefon' WHERE id=$update_id";

    mysqli_set_charset($conn,"utf8");

    $rez = mysqli_query($conn, $sql);
    
    if(!$rez){

        die("Upis u bazu nije uspio" . mysqli_error($conn));

    }else{

        echo "<p style='color:green; margin-top:10px;'>Kontakt uspješno izmijenjen.</p>";

    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Imenik - izmjeni kontakt</title>
    <meta name="author" content="Mersad Delić">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
</head>
<body>
    <h2>Izmjeni kontakt</h2>
    <form action="izmjeni_kontakt.php" method="POST">
        <table border="0" cellpadding="0" cellspacing="0" class="noborders">
            <tr>
                <td class="noborders">Ime i prezime</td>
                <td class="noborders"><input type="text" name="imeprezime" value="<?php echo $imeprezime; ?>"></td>
            </tr>
            <tr>
                <td class="noborders">Adresa</td>
                <td class="noborders"><input type="text" name="adresa" value="<?php echo $adresa; ?>"></td>
                </tr>
            <tr>
                <td class="noborders">Grad</td>
                <td class="noborders"><input type="text" name="grad" value="<?php echo $grad; ?>"></td>
            </tr>
            <tr>
                <td class="noborders">Email</td>
                <td class="noborders"><input type="email" name="email" value="<?php echo $email; ?>"></td>
            </tr>
            <tr>
                <td class="noborders">Spol</td>
                <td class="noborders">
                    <select name="spol" value="<?php echo $spol; ?>">
                        <option value="M" <?php if($spol=='M') echo "selected"; ?>>M</option>
                        <option value="Ž" <?php if($spol=='Ž') echo "selected"; ?>>Ž</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="noborders">Telefon</td>
                <td class="noborders"><input type="text" name="telefon" value="<?php echo $telefon; ?>"></td>
            </tr>
            <tr>
                <td colspan="2" class="noborders">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <input type="submit" class="addbutton auto" name="Update" value="Izmjeni" /> 
                    <a class="backbutton" href="index.php">Početna</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html> 
