<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Neues Konto anlegen - eaumoi</title>

    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php include 'header.php'; ?>

<section class="neuskonto-shop">
    <div class="container-shop">
        <div class="login-header register-header">
            <div class="login-title">
                Neues Konto anlegen
            </div>
            <a href="page-login.php" class="login-nochkein">
                Login
            </a>
        </div>
        <form action="#" class="neueskonto-form">
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
                    <div class="login-bleiben">
                        <input type="checkbox" class="login-bleiben__checkbox" id="MwSt" name="MwSt">
                        <label for="MwSt">MwSt-Kunde</label>
                    </div>
                </div>

            </div>
            <div class="login-form__type">
                <input class="login-form__input" type="text" placeholder="Geburtsdatum*">
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
                    <input class="login-form__input" type="text" placeholder="PLZ*" required>
                </div>
            </div>
            <div class="login-form__type type-select">
                <select class="login-form__select select-js">
                    <option>Land</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                </select>
                <div class="loginform-reqinfo">
                    Versand nur innerhalb der Schweiz und nach Liechtenstein
                </div>
            </div>
            <div class="login-form__type">
                <input class="login-form__input" type="text" placeholder="Email*" required>
            </div>
            <div class="login-form__type">
                <input class="login-form__input" type="text" placeholder="Passwort*" required>
            </div>
            <div class="login-form__type">
                <input class="login-form__input" type="text" placeholder="Passwort wiederholen*" required>
            </div>

            <div class="login-enter">
                <button class="button-dark login-button">
                    Neues Kundenkonto anlegen
                </button>
            </div>

        </form>
    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>