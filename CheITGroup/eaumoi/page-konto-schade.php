<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konto Abos – Künden - eaumoi</title>

    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/air-datepicker@3.0.1/air-datepicker.css">
    <link rel="stylesheet" href="css/styles.css">

    <script>
        const assetsPath = '';
    </script>
</head>
<body class="page-pausieren">

<section class="abos-pausieren">
    <div class="pausieren-container">
        <div class="abos-title">
            Konto Abos – Künden
        </div>
        <div class="abos-description">
            Sagst du uns noch, weshalb du das Abo kündigst?
        </div>

        <div class="schade-list">
            <div class="login-bleiben">
                <input type="radio" class="login-bleiben__radio" id="Ich1" name="schade">
                <label for="Ich1">Ich hab’s nicht mehr gern</label>
            </div>
            <div class="login-bleiben">
                <input type="radio" class="login-bleiben__radio" id="Ich2" name="schade">
                <label for="Ich2">Ich möchte andere Geschmackssorten</label>
            </div>
            <div class="login-bleiben">
                <input type="radio" class="login-bleiben__radio" id="Ich3" name="schade">
                <label for="Ich3">Ich hatte zu viele Sachets im Abo</label>
            </div>
            <div class="login-bleiben">
                <input type="radio" class="login-bleiben__radio" id="Ich4" name="schade">
                <label for="Ich4">Ich hatte zu wenig Sachets im Abo</label>
            </div>
            <div class="login-bleiben">
                <input type="radio" class="login-bleiben__radio" id="Ich5" name="schade">
                <label for="Ich5">
                    <input type="text" class="schade-other">
                </label>
            </div>
        </div>

        <div class="abos-description">
            Dein Abo wird innerhalb der nächsten 24h gelöscht.
        </div>

        <div class="abos-enter">
            <button class="button-dark button-erneut">
                Abo pausieren
            </button>
        </div>
    </div>
</section>

<?php include 'footer-none.php'; ?>

</body>
</html>