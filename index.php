<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>PDO CRUD</title>
</head>
<body>
    <h1>Maak je eigen pizza</h1>

    <form action="create.php" method="post">
        <label for="bodem">Bodemformaat</label><br>
        <select name="centimeter" id="centimeter">
            <option value="maak je keuze">Maak je keuze</option>
            <option value="20">20 cm</option>
            <option value="25">25 cm</option>
            <option value="30">30 cm</option>
            <option value="35">35 cm</option>
            <option value="40">40 cm</option>
        </select><br><br>

        <label for="saus">Saus</label><br>
        <select name="centimeter" id="centimeter">
            <option value="keuze">Maak je keuze</option>
            <option value="tomatensaus">Tomatensaus</option>
            <option value="extratomatensaus">Extra Tomatensaus</option>
            <option value="spicyTomatensaus">Spicy Tomatensaus</option>
            <option value="bbqsaus">BBQ saus</option>
            <option value="cremefraiche">Créme fraiche</option>
        </select><br><br>

        <label for="pizzatoppings">Pizzatoppings</label><br>
        <input type="radio" name="vegan" id="vegan">
        <label for="vegan">vegan</label><br>
        <input type="radio" name="vegetarisch" id="vegetarisch">
        <label for="vegetarisch">vegetarisch</label><br>
        <input type="radio" name="vlees" id="vlees">
        <label for="vlees">vlees</label><br><br>
        
        <label for="kruiden">Kruiden</label><br>
        <input type="checkbox" name="peterselie" id="peterselie">
        <label for="peterselie">Peterselie</label><br><br>

        <input type="submit" value="Bestel">
    </form>
</body>
</html>