<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>create1.php</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
<header>
    <h1>Woning Toevoegen </h1>
    <p>
        Dit formulier wordt gebruikt om woningen toe te voegen
    </p>
</header>


<form action="create2.php" method="POST">
    <fieldset>
        <legend>Woning informatie: </legend>
        <label for="Stad">Stad: </label>
        <input type="text" id="Stad" name="Stad" placeholder="Voer de stad in" autofocus> <br>

        <label for="Postcode">Postcode: </label>
        <input type="text" id="Postcode" name="Postcode" placeholder="Voer de postcode in" autofocus> <br>

        <label for="Straatnaam">Straatnaam: </label>
        <input type="text" id="Straatnaam" name="Straatnaam" placeholder="Voer de Straatnaam in" autofocus> <br>

        <label for="Huisnummer">Huisnummer: </label>
        <input type="text" id="Huisnummer" name="Huisnummer" placeholder="Voer het Huisnummer in" > <br>

        <label for="Verdiepingen">Verdiepingen: </label>
        <input type="text" id="Verdiepingen" name="Verdiepingen" placeholder="Voer het aantal verdiepingen in" > <br>

        <label for="AantalKamers">AantalKamers: </label>
        <input type="text" id="AantalKamers" name="AantalKamers" placeholder="AantalKamers" > <br>

        <label for="Vierkantemeter">Vierkantemeter: </label>
        <input type="text" id="Vierkantemeter" name="Vierkantemeter" placeholder="Vierkantemeter" > <br>

        <label for="idWoningstatus">idWoningstatus</label>
        <select name="idWoningstatus" id="idWoningstatus">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select> <br>

        <label for="idWoningsoort">idWoningsoort</label>
        <select name="idWoningsoort" id="idWoningsoort">
            <option value="1">1</option>
            <option value="2">2</option>
        </select> <br>

        <label for="idWijk">idWijk</label>
        <select name="idWijk" id="idWijk">
            <option value="1">1</option>
            <option value="2">2</option>
        </select> <br>


        <input type="submit" name="submit" value="submit">

    </fieldset>
</form>

</body>
</html>




