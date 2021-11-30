<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konto Adressen - eaumoi</title>

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
                <div class="konto-adressen">
                    <div class="adressen-top">
                        <div class="adressen-top__title">
                            Rechnungsadresse
                        </div>
                        <a class="adressen-top__neue" href="#">neue Adresse hinzufügen</a>
                    </div>
                    <div class="adressen-body">
                        John Doe <br>
                        Musterstrasse 1 <br>
                        8000 Zürich
                        <br><br>
                        +78 000 00 00
                    </div>
                    <div class="erneut-box">
                        <a href="page-konto-4-1.php" class="button-dark button-erneut">
                            Adresse anpassen
                        </a>
                    </div>
                </div>

                <div class="konto-adressen">
                    <div class="adressen-top">
                        <div class="adressen-top__title">
                            Lieferadresse
                        </div>
                        <a class="adressen-top__neue" href="#">neue Adresse hinzufügen</a>
                    </div>
                    <div class="adressen-body">
                        John Doe <br>
                        Musterstrasse 1 <br>
                        8000 Zürich
                        <br><br>
                        +78 000 00 00
                    </div>
                    <div class="erneut-box">
                        <a href="page-konto-4-1.php" class="button-dark button-erneut">
                            Adresse anpassen
                        </a>
                        <a href="page-konto-4-1.php" class="button-link button-erneut">
                            Adresse löschen
                        </a>
                    </div>
                </div>

                <div class="konto-adressen">
                    <div class="adressen-body">
                        John Doe <br>
                        Musterstrasse 1 <br>
                        8000 Zürich
                        <br><br>
                        +78 000 00 00
                    </div>
                    <div class="erneut-box">
                        <a href="page-konto-4-1.php" class="button-dark button-erneut">
                            Adresse anpassen
                        </a>
                        <a href="page-konto-4-1.php" class="button-link button-erneut">
                            Adresse löschen
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>