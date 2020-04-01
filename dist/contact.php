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


    <!-- Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">



</head>
<body>

<!-- Navigation -->
<a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
</a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a class="js-scroll-trigger" href="index.html#page-top">Ikomeye Design</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="index.html#page-top">Home</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="index.html#about">Over ons</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="index.html#team">Het team</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="index.html#portfolio">Portfolio</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="index.html#contact">Contacteer ons</a>
        </li>
    </ul>
</nav>


<section class="content-section" id="contactgegevens">
    <div class="container text-center contactgegevens">
        <h1>
            Uw gegevens zijn goed ontvangen!
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
                    echo "<td class=\"text-right\">" . $_POST["bericht"] . "</td>\n";
                }
                if (isset($_POST["nieuwsbrief"])) {
                    echo " <tr> <th class=\"text-left\">Nieuwsbrief</th>";
                    if (empty($_POST["nieuwsbrief"]))
                        echo "<td class=\"right\"> Ingeschreven</td>\n";
                    else
                        echo "<td class=\"text-right\">Niet Ingeschreven</td>\n";
                }
                ?>
            </table>
        </div>
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="index.html">Terug naar hoofdpagina</a>

    </div>
</section>

<!-- JS: jQuery, Bootstrap, stylish portfolio -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="js/stylish-portfolio.min.js"></script>

</body>
</html>

