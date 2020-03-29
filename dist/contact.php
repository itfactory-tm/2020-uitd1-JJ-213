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

<section class="content-section" id="contactgegevens">
    <div class="container text-center">
        <h1>
            Formulier gegevens
        </h1>
        <div>
            <table class="table">

                <?php
                if (isset($_POST["voornaam"]) && $_POST["voornaam"] != "") {
                    echo " <tr> <th class=\"text-left\">Voornaam</th>";
                    echo "<td class=\"text-right\">" . $_POST["voornaam"] . "</td>\n";
                }

                if (isset($_POST["achternaam"]) && $_POST["achternaam"] != "") {
                    echo " <tr> <th class=\"text-left\">Achternaam</th>";
                    echo "<td class=\"text-right\">" . $_POST["achternaam"] . "</td>\n";
                }
                if (isset($_POST["email"]) && $_POST["email"] != "") {
                    echo " <tr> <th class=\"text-left\">Email</th>";
                    echo "<td class=\"text-right\">" . $_POST["email"] . "</td>\n";
                }
                if (isset($_POST["bericht"]) && $_POST["bericht"] != "") {
                    echo " <tr> <th class=\"text-left\">Bericht</th>";
                    echo "<td class=\"text-center\">" . $_POST["bericht"] . "</td>\n";
                }
                ?>
            </table>
        </div>
    </div>
</section>
</body>
</html>

