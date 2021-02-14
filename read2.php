<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Makelaar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body class="page1">
<h1>
    House
</h1>
<p>
    dit zijn alle gegevens uit de tabel woningen van de database makelaar.
</p>

<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>Stad</th>
            <th>Postcode</th>
            <th>Straatnaam</th>
            <th>Huisnummer</th>
            <th>verdiepingen</th>
            <th>aantal kamers</th>
            <th>vierkantemeter</th>
            <th>idwoningstatus</th>
            <th>idwoningsoort</th>
            <th>idwijk</th>
        </tr>
        </thead>

<?php
require_once "../mak-connect.php";

$woningen = $conn->prepare("
        select   idWoningen,
                 Stad,
                 Postcode,
                 Straatnaam,
                 Huisnummer,
                 Verdiepingen,
                 AantalKamers,
                 Vierkantemeter,
                 Woningsoort_idWoningsoort,
                 Woningstatus_idWoningstatus,
                 Wijk_idWijk
         from  woningen
");
$woningen->execute();
echo "<table>";
foreach ($woningen as $woning)
{
    echo "<tr>";
    echo "<td>" . $woning ["idWoningen"]    ."</td>";
    echo "<td>" . $woning ["Stad"]    ."</td>";
    echo "<td>" . $woning ["Postcode"]    ."</td>";
    echo "<td>" . $woning ["Straatnaam"]    ."</td>";
    echo "<td>" . $woning ["Huisnummer"]    ."</td>";
    echo "<td>" . $woning ["Verdiepingen"]    ."</td>";
    echo "<td>" . $woning ["AantalKamers"]    ."</td>";
    echo "<td>" . $woning ["Vierkantemeter"]    ."</td>";
    echo "<td>" . $woning ["Woningsoort_idWoningsoort"]    ."</td>";
    echo "<td>" . $woning ["Woningstatus_idWoningstatus"]    ."</td>";
    echo "<td>" . $woning ["Wijk_idWijk"]    ."</td>";
    echo "</tr>";
}

echo "</table>";
echo "<a href= '../index.php'> terug naar het menu </a>";

?>


</body>
</html>

