<!DOCTYPE html>
<html lang="nl">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stylish-portfolio - Bootstrap Theme</title>

    <!-- CSS: Bootstrap, stylish portfolio, FA5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="css/stylish-portfolio.min.css">

    <!-- CSS: eigen stylesheet -->
    <link rel="stylesheet" href="css/webBureau.css">

</head>
<body>

<!--TODO: header van index.html overzetten-->

<div>
    <?php
    if (isset($_POST["voornaam"]) && $_POST["voornaam"] != "") {
        echo "<p> Voornaam: " . $_POST["voornaam"] . "</p>\n";
    } else {
        echo "<p> Voornaam: Niet opgegeven </p>\n";
    }

    if (isset($_POST["achternaam"]) && $_POST["achternaam"] != "") {
        echo "<p> Achternaam: " . $_POST["achternaam"] . "</p>\n";
    } else {
        echo "<p> Achternaam: Niet opgegeven </p>\n";
    }

    if (isset($_POST["email"]) && $_POST["email"] != "") {
        echo "<p> Email: " . $_POST["email"] . "</p>\n";
    } else {
        echo "<p> Email: Niet opgegeven </p>\n";
    }


    if (isset($_POST["bericht"]) && $_POST["bericht"] != "") {
        echo "<p> Bericht: <br>" . $_POST["bericht"] . "</p>\n";
    } else {
        echo "<p> Bericht: Niet opgegeven </p>\n";
    }
    ?>
</div>

</body>
</html>

