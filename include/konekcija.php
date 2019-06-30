
<?php
    $servername = 'localhost';
    $username   = 'root';
    $password   = '';
    $database   = 'kuhinja';
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if($conn != true){
        echo "Konekcija na bazu nije uspješna";
    }else{
        echo "Konekcija uspješna.";
    }
?>

