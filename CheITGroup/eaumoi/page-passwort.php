<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Passwort vegessen? - eaumoi</title>

    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">

    <script>
        const assetsPath = '';
    </script>
</head>
<body>

<?php include 'header.php'; ?>

<section class="login-shop">
    <div class="container-shop">
        <div class="login-header">
            <div class="login-title">
                Passwort vergessen?
            </div>
        </div>
        <div class="login-description">
            Bitte gebe unten deine E-Mail-Adresse ein, um einen Link für die Zurücksetzung des Passworts zu erhalten.
        </div>
        <form action="#" class="passwortzur-form">
            <div class="login-form__type">
                <input class="login-form__input" type="text" placeholder="Email*">
            </div>

            <div class="login-enter">
                <a href="page-neuespasswort.php" class="button-dark login-button">
                    Passwort zurücksetzen
                </a>
            </div>

        </form>
    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>