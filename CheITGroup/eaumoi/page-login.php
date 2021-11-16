<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - eaumoi</title>

    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php include 'header.php'; ?>

<section class="login-shop">
    <div class="container-shop">
        <div class="login-header">
            <div class="login-title">
                Log in
            </div>
            <a href="page-neueskonto.php" class="login-nochkein">
                Noch kein Kundenkonto?
            </a>
        </div>
        <form action="#" class="login-form">
            <div class="login-form__type">
                <input class="login-form__input" type="text" placeholder="Email*">
                <input class="login-form__input" type="text" placeholder="Passwort*">
            </div>
            <div class="login-form__col-2">
                <div class="login-bleiben">
                    <input type="checkbox" class="login-bleiben__checkbox" id="bleiben" name="bleiben">
                    <label for="bleiben">Angemeldet bleiben</label>
                </div>

                <a href="page-passwort.php" class="login-vegessen">Passwort vegessen?</a>
            </div>

            <div class="login-enter">
                <button class="button-dark login-button">
                    Anmelden
                </button>
            </div>

        </form>
    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>