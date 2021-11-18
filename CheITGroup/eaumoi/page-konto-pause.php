<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konto Abos – Pausieren - eaumoi</title>

    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/air-datepicker@3.0.1/air-datepicker.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="page-pausieren">

<section class="abos-pausieren">
    <div class="pausieren-container">
        <div class="abos-title">
            Du möchtest dein Abo pausieren?
        </div>
        <div class="abos-description">
            Lass uns eine kleine Pause machen. In welchem Zeitraum möchtest du dein Abo pausieren?
        </div>

        <div class="abos-timer col-2">
            <div class="col">
                <div class="abos-timer__item">
                    <input type="text" class="input-time input-time__min" placeholder="Von">
                    <i class="input-time__ico"></i>
                </div>
            </div>
            <div class="col">
                <div class="abos-timer__item">
                    <input type="text" class="input-time input-time__max" placeholder="Bis">
                    <i class="input-time__ico"></i>
                </div>
            </div>
        </div>

        <div class="abos-description">
            Nach Ablauf dieser Frist wird dein Abo automatisch reaktiviert und du erhältst wie gewohnt dein Geschmack für dein Wasser.
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