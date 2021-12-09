<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Newsletter Anmeldung - eaumoi</title>

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
                Newsletter Anmeldung
            </div>
        </div>
        <form action="#" class="newsletter-form">
            <div class="login-form__type col-2">
                <div class="col">
                    <input class="login-form__input" type="text" placeholder="Vorname*" required>
                </div>
                <div class="col">
                    <input class="login-form__input" type="text" placeholder="Name*" required>
                </div>
            </div>
            <div class="login-form__type">
                <input class="login-form__input" type="text" placeholder="Email*" required>
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