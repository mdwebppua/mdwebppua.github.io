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
                <div class="konto-npassen">
                    <form action="#" class="login-form">
                        <div class="register-person">
                            <div class="login-bleiben">
                                <input type="radio" class="login-bleiben__radio" id="Frau" name="person">
                                <label for="Frau">Frau</label>
                            </div>
                            <div class="login-bleiben">
                                <input type="radio" class="login-bleiben__radio" id="Herr" name="person">
                                <label for="Herr">Herr</label>
                            </div>
                            <div class="login-bleiben">
                                <input type="radio" class="login-bleiben__radio" id="Divers" name="person">
                                <label for="Divers">Divers</label>
                            </div>
                        </div>
                        <div class="login-form__type col-2">
                            <input class="login-form__input" type="text" placeholder="Vorname*" required>
                            <input class="login-form__input" type="text" placeholder="Name*" required>
                        </div>
                        <div class="login-form__type">
                            <input class="login-form__input" type="text" placeholder="Firma">
                        </div>
                        <div class="register-person">
                            <div class="login-bleiben">
                                <input type="checkbox" class="login-bleiben__checkbox" id="MwSt" name="MwSt">
                                <label for="MwSt">MwSt-Kunde</label>
                            </div>
                        </div>
                        <div class="login-form__type">
                            <input class="login-form__input" type="text" placeholder="Adresse*">
                            <input class="login-form__input" type="text" placeholder="Adresszusatz">
                        </div>
                        <div class="login-form__type col-2">
                            <input class="login-form__input" type="text" placeholder="Ort*" required>
                            <input class="login-form__input" type="text" placeholder="PLZ*" required>
                        </div>
                        <div class="login-form__type">
                            <input class="login-form__input" type="text" placeholder="Email*" required>
                            <input class="login-form__input" type="text" placeholder="Passwort*" required>
                            <input class="login-form__input" type="text" placeholder="Passwort wiederholen*" required>
                        </div>

                        <div class="login-enter">
                            <button class="button-dark login-button">
                                Neues Kundenkonto anlegen
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