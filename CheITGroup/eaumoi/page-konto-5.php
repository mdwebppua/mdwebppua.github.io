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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/air-datepicker@3.0.1/air-datepicker.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php include 'header.php'; ?>

<section class="konto-dashboard">
    <div class="container-xl">
        <div class="konto-container">
            <?php include 'sidebar-konto.php'; ?>

            <div class="konto-body">
                <div class="konto-npassen konto-details">
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
                            <div class="col">
                                <div class="login-form__type-name">
                                    Vorname*
                                </div>
                                <input class="login-form__input" type="text" placeholder="Vorname*" required>
                            </div>
                            <div class="col">
                                <div class="login-form__type-name">
                                    Name*
                                </div>
                                <input class="login-form__input" type="text" placeholder="Name*" required>
                            </div>

                        </div>
                        <div class="login-form__type col-2">
                            <div class="col">
                                <div class="login-form__type-name">
                                    Firma
                                </div>
                                <input class="login-form__input" type="text" placeholder="Firma">
                            </div>
                            <div class="col">
                                <div class="login-bleiben">
                                    <input type="checkbox" class="login-bleiben__checkbox" id="MwSt" name="MwSt">
                                    <label for="MwSt">MwSt-Kunde</label>
                                </div>
                            </div>
                        </div>
                        <div class="login-form__type">
                            <div class="login-form__type-name">
                                Geburtsdatum
                            </div>
                            <input class="login-form__input input-time__enter" type="text" placeholder="0000-00-00">
                        </div>
                        <div class="login-form__type">
                            <div class="login-form__type-name">
                                Email*
                            </div>
                            <input class="login-form__input" type="text" placeholder="Email*" required>
                        </div>
                        <div class="login-form__type">
                            <div class="login-form__type-name">
                                Aktuelles Passwort
                            </div>
                            <div class="login-form__password">
                                <input class="login-form__input" type="password">
                                <button class="show-password"></button>
                            </div>
                        </div>
                        <div class="login-form__type">
                            <div class="login-form__type-name">
                                Neues Passwort
                            </div>
                            <div class="login-form__password">
                                <input class="login-form__input" type="password">
                                <button class="show-password"></button>
                            </div>
                        </div>
                        <div class="login-form__type">
                            <div class="login-form__type-name">
                                Neues Passwort bestätigen
                            </div>
                            <div class="login-form__password">
                                <input class="login-form__input" type="password">
                                <button class="show-password"></button>
                            </div>
                        </div>

                        <div class="login-enter">
                            <button class="button-dark button-erneut">
                                Änderungen speichern
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