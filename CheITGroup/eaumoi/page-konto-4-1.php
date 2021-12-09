<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konto Adressen Anpassen - eaumoi</title>

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
                <div class="adressen-top">
                    <div class="adressen-top__title">
                        Rechnungsadresse
                    </div>
                </div>
                <div class="konto-npassen">
                    <form action="#" class="login-form">
                        <div class="login-form__type col-2">
                            <div class="col">
                                <input class="login-form__input" type="text" placeholder="Vorname*" required>
                            </div>
                            <div class="col">
                                <input class="login-form__input" type="text" placeholder="Name*" required>
                            </div>
                        </div>
                        <div class="login-form__type col-2">
                            <div class="col">
                                <input class="login-form__input" type="text" placeholder="Firma">
                            </div>
                            <div class="col">
                                <input class="login-form__input" type="number" placeholder="Telefnonummer*" required>
                            </div>
                        </div>
                        <div class="login-form__type">
                            <input class="login-form__input" type="text" placeholder="Adresse*">
                        </div>
                        <div class="login-form__type">
                            <input class="login-form__input" type="text" placeholder="Adresszusatz">
                        </div>
                        <div class="login-form__type col-2">
                            <div class="col">
                                <input class="login-form__input" type="text" placeholder="Ort*" required>
                            </div>
                            <div class="col">
                                <input class="login-form__input" type="number" placeholder="PLZ*" required>
                            </div>
                        </div>

                        <div class="erneut-box">
                            <button class="button-dark button-erneut">
                                Adresse speichern
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>