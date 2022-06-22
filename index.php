<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medewerker | Portaal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
        include_once('header.php');
    ?>
    <center>
        <h1>Afspraken lijst</h1>
        <?php include './table.php';
            All()
        ?>
    </center>

    <hr>
    <center>
        <h1>Afspraak inPlannen</h1>
        <form action="./insert.php" method="post">
            <ul>
                <li>
                    <label for="first_name">Voornaam:</label>
                    <input type="text" name="first_name" id="first_name">
                </li>
                <li>
                    <label for="last_name">Achternaam:</label>
                    <input type="text" name="last_name" id="last_name">
                </li>
                <li>
                    <label for="phone">Mobiel:</label>
                    <input type="text" name="phone" id="phone">
                </li>
                <li>
                    <label for="email">Email Address:</label>
                    <input type="text" name="email" id="email">
                </li>
                <li>
                    <label for="date_time">Datum:</label>
                    <input type="date" name="date_time" id="date_time">
                </li>
                <br>
                <label for="descr">Beschrijving:</label>
                <br>
                <textarea for ="descr" name="descr" id="descr" cols="30" rows="10" style="width: 360px; height: 120px;"></textarea>
                <br>
                <input type="submit" value="Verstuur">
            </ul>
        </form>
    </center>
        <hr>
    <center>

    <h1>Afspraak Verwijderen</h1>
    <div class=box1>
        <form action="./alter.php" method="post">
            <p>
                <label for="id_change">afspraak ID:</label>
                <input type="text" name="id_change" id="id_change">
            </p>
            <input type="submit" value="Verstuur">
        </form>
    </div>
    </center>
</body>
</html>