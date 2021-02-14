<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>create2.php</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
<header>
    <h1>Woning toevoegen 2</h1>
    <p>
        Een woning toevoegen in de database makelaar
    </p>
</header>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create1.php">Create</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Read</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Delete</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Update</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

</body>
</html>

<?php

include "../mak-connect.php";

if (isset($_POST['submit'])){

    $Stad = $_POST['Stad'];
    $Postcode = $_POST['Postcode'];
    $Straatnaam = $_POST['Straatnaam'];
    $Huisnummer = $_POST['Huisnummer'];
    $Verdiepingen = $_POST['Verdiepingen'];
    $Aantalkamers = $_POST['AantalKamers'];
    $Vierkantemeter = $_POST['Vierkantemeter'];
    $idWoningstatus = $_POST['idWoningstatus'];
    $idWoningsoort = $_POST['idWoningsoort'];
    $idWijk = $_POST['idWijk'];

}

$sql= "INSERT INTO `woningen`
    ( `Stad`, 
      `Postcode`, 
      `Straatnaam`, 
      `Huisnummer`, 
      `Verdiepingen`, 
      `AantalKamers`,
      `Vierkantemeter`,
      `Woningstatus_idWoningstatus`, 
      `Woningsoort_idWoningsoort`, 
      `Wijk_idWijk`) 
VALUES ('$Stad', '$Postcode', '$Straatnaam', '$Huisnummer', '$Verdiepingen', '$Aantalkamers', '$Vierkantemeter','$idWoningstatus',
       '$idWoningsoort', '$idWijk')";

$result = $conn->query($sql);

if ($result == TRUE) {
    echo "Woning toegevoegd";
}else{
    echo "woning is niet toegevoegd". $sql . "<br>" . $conn->error;
}

  $conn = null;

?>

