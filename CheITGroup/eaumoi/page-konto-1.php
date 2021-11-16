<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konto Dashboard - eaumoi</title>

    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php include 'header.php'; ?>

<section class="konto-dashboard">
    <div class="container-xl">
        <div class="konto-container">
            <?php include 'sidebar-konto.php'; ?>

            <div class="konto-body">
                <div class="konto-hello">
                    <strong>Hallo maxmustermann</strong>
                    <br><br>
                    Du befindest dich in deinem persönlichen Geschmacks-Konto. Hier kannst du deine freshen <b>Bestellungen</b> ansehen, dein <b>Abo</b> verwalten, <b>Liefer- und Rechnungsadresse</b> bestimmen, die <b>Zahlungsmethoden</b> wählen und dein Passwort in den <b>Kontodetails</b> bearbeiten.
                </div>
            </div>
        </div>

    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>