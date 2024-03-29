<?php
include 'konekcija.php';

function prikaziJela(){
    global $conn;
    
    $sql = "SELECT * FROM jela";
    mysqli_set_charset($conn,"utf8");
    $rez = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($rez) > 0) {
        while ($row = mysqli_fetch_assoc($rez)) {
       echo '<tr>
                
                <td>'.$row['naziv'].'</td>
                <td>'.$row['vrsta'].'</td>
                <td>'.$row['opis'].'</td>
                
                
                
                
                <td>
                    <a class="btn btn-primary" href="pogledaj_jelo.php?view='.$row['id'].'">Pogledaj</a> 
                    <a class="btn btn-secondary" href="izmjeni_jelo.php?update='.$row['id'].'">Izmijeni</a> 
                    <a class="btn btn-danger" href="index.php?delete='.$row['id'].'">Izbriši</a> 
                </td>
            </tr>';
        }
    }else{
        echo "<p>Nema rezultata.</p>";
    }
}


function dodajJelo(){
    global $conn;
    
    if(isset($_POST['addjelo'])){
        $naziv     = $_POST['naziv'];
        $vrsta     = $_POST['vrsta'];
        $opis      = $_POST['opis'];
        $sastojci  = $_POST['sastojci'];
        $postupak  = $_POST['postupak'];
        $komentar     = $_POST['komentar'];
        
        $sql = "INSERT INTO jela (naziv, vrsta, opis, sastojci, postupak, komentar) 
                VALUES ('$naziv', '$vrsta', '$opis', '$sastojci', '$postupak','$komentar')";

        mysqli_set_charset($conn,"utf8");       
        $rez = mysqli_query($conn, $sql);
        
        if(!$rez){
            die("Upis u bazu nije uspio" . mysqli_error($conn));
        }else{
            echo "<p style='color:green; margin-top:10px;'>Jelo uspješno dodano u meni.</p>";
        }
    }
}


function izbrisiJelo(){
    global $conn;

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];

        $sql = "DELETE from jela WHERE id = $id";
        header("Location:index.php");
        mysqli_query($conn, $sql);
    }
}


// funkcije
function pogledajJelo(){
    global $conn;

    if(isset($_GET['view'])){
        $id = $_GET['view'];

    $sql = "SELECT * FROM jela WHERE id=$id";
        mysqli_set_charset($conn,"utf8");
        $rez = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($rez)) {

    echo
     '<tr>
        <th width="20%" class="noborders">Naziv jela</th>
        <td class="noborders pl-15">'.$row['naziv'].'</td>
     <tr>';
    echo 
    '<tr>
        <th class="noborders">Vrsta jela</th>
        <td class="noborders pl-15">'.$row['vrsta'].'</td>
     <tr>';
    echo 
    '<tr>
        <th class="noborders">Kratak opis jela</th>
        <td class="noborders pl-15">'.$row['opis'].'</td>
    <tr>';
    echo
     '<tr>
        <th class="noborders">Sastojci</th>
        <td class="noborders pl-15">'.$row['sastojci'].'</td>
     <tr>';
    echo 
     '<tr>
        <th class="noborders">Postupak pravljenja</th>
        <td class="noborders pl-15">'.$row['postupak'].'</td>   
     <tr>';
    echo 
    '<tr>
        <th class="noborders">Komentar</th>
        <td class="noborders pl-15">'.$row['komentar'].'</td> 
     <tr>';
}
}
}

?>