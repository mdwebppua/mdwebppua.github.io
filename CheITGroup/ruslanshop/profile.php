<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php include 'header.php'; ?>

<section class="profile-page">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-sidebar">
                    <ul class="profile-sidenav">
                        <li class="active"><a href="#">Konto</a></li>
                        <li><a href="#">Bestellungen</a></li>
                        <li><a href="#">Abeau</a></li>
                        <li><a href="#">Adressen</a></li>
                        <li><a href="#">Zahlungsmethoden</a></li>
                        <li><a href="#">Konto Details</a></li>
                    </ul>
                    <div class="profile-back">
                        Abmelden
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="profile-main">
                    <p>Hallo <b>maxmustermann</b></p>
                    <p>
                        In deiner Konto-Übersicht kannst du deine
                        <a href="#">letzten Bestellungen</a> ansehen, dein
                        <a href="#">Abo, Liefer- und Rechnungsadresse</a>
                        verwalten und dein <a href="#">Passwort und die Kontodetails bearbeiten</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="basket-short">
    <div class="warenkorb-head">
        <div class="warenkorb-title">Warenkorb</div>
        <div class="warenkorb-close"><i class="fas fa-times"></i></div>
    </div>
    <div class="warenkorb-insert">
        15 Beutel wählen
    </div>
    <div class="warenkorb-status"><div></div></div>
    <div class="warenkorb-status__info">11 von 15</div>

    <div class="warenkorb-main">
        <div class="warenkorb-short">
            <div class="warenkorb-thumb">
                img
            </div>
            <div class="warenkorb-info">
                <div class="warenkorb-name">
                    Yellow Booster
                </div>
                <div class="warenkorb-price">
                    CHF 1.25 / Stk.
                </div>
            </div>
            <div class="warenkorb-current">
                <input class="warenkorb-input" type="number" min="0" value="1" readonly>
                <div class="warenkorb-current__button">
                    <button class="warenkorb-plus" type="button"><i class="fas fa-angle-up"></i></button>
                    <button class="warenkorb-minus" type="button"><i class="fas fa-angle-down"></i></button>
                </div>
            </div>
        </div>

        <div class="warenkorb-short">
            <div class="warenkorb-thumb">
                img
            </div>
            <div class="warenkorb-info">
                <div class="warenkorb-name">
                    Yellow Booster
                </div>
                <div class="warenkorb-price">
                    CHF 1.25 / Stk.
                </div>
            </div>
            <div class="warenkorb-current">
                <input class="warenkorb-input" type="number" min="0" value="1" readonly>
                <div class="warenkorb-current__button">
                    <button class="warenkorb-plus" type="button"><i class="fas fa-angle-up"></i></button>
                    <button class="warenkorb-minus" type="button"><i class="fas fa-angle-down"></i></button>
                </div>
            </div>
        </div>

        <div class="warenkorb-short">
            <div class="warenkorb-thumb">
                img
            </div>
            <div class="warenkorb-info">
                <div class="warenkorb-name">
                    Yellow Booster
                </div>
                <div class="warenkorb-price">
                    CHF 1.25 / Stk.
                </div>
                <a href="#" class="warenkorb-flasche">Flasche personalisieren</a>

            </div>
            <div class="warenkorb-current">
                <input class="warenkorb-input" type="number" min="0" value="1" readonly>
                <div class="warenkorb-current__button">
                    <button class="warenkorb-plus" type="button"><i class="fas fa-angle-up"></i></button>
                    <button class="warenkorb-minus" type="button"><i class="fas fa-angle-down"></i></button>
                </div>
            </div>
        </div>

        <button class="warenkorb-deine">
            Möchtest du deine Flasche Personalisieren?
        </button>

    </div>

    <div class="warenkorb-main">
        <div class="warenkorb-title">
            Hast du schon eine Flasche?
        </div>
        <div class="warenkorb-short">
            <div class="warenkorb-thumb">
                img
            </div>
            <div class="warenkorb-info">
                <div class="warenkorb-name">
                    Yellow Booster
                </div>
                <div class="warenkorb-price">
                    CHF 1.25 / Stk.
                </div>
            </div>
            <div class="warenkorb-current">
                <input class="warenkorb-input" type="number" min="0" value="1" readonly>
                <div class="warenkorb-current__button">
                    <button class="warenkorb-plus" type="button"><i class="fas fa-angle-up"></i></button>
                    <button class="warenkorb-minus" type="button"><i class="fas fa-angle-down"></i></button>
                </div>
            </div>
        </div>

        <div class="warenkorb-short">
            <div class="warenkorb-thumb">
                img
            </div>
            <div class="warenkorb-info">
                <div class="warenkorb-name">
                    Yellow Booster
                </div>
                <div class="warenkorb-price">
                    CHF 1.25 / Stk.
                </div>
            </div>
            <div class="warenkorb-current">
                <input class="warenkorb-input" type="number" min="0" value="1" readonly>
                <div class="warenkorb-current__button">
                    <button class="warenkorb-plus" type="button"><i class="fas fa-angle-up"></i></button>
                    <button class="warenkorb-minus" type="button"><i class="fas fa-angle-down"></i></button>
                </div>
            </div>
        </div>

        <div class="warenkorb-short">
            <div class="warenkorb-thumb">
                img
            </div>
            <div class="warenkorb-info">
                <div class="warenkorb-name">
                    Yellow Booster
                </div>
                <div class="warenkorb-price">
                    CHF 1.25 / Stk.
                </div>
            </div>
            <div class="warenkorb-current">
                <input class="warenkorb-input" type="number" min="0" value="1" readonly>
                <div class="warenkorb-current__button">
                    <button class="warenkorb-plus" type="button"><i class="fas fa-angle-up"></i></button>
                    <button class="warenkorb-minus" type="button"><i class="fas fa-angle-down"></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="warenkorb-gratis">
        <div class="warenkorb-gratis__title">
            Lieferung gratis
        </div>
        <div class="warenkorb-gratis__price">
            CHF 00.00
        </div>
    </div>

    <div class="warenkorb-total">
        <div class="warenkorb-total__title">
            Total
        </div>
        <div class="warenkorb-total__price">
            CHF 45.00
        </div>
    </div>

    <div class="warenkorb-confirm">
        <button class="warenkorb-confirm__button">Zur Zahlung</button>
    </div>
</section>

<?php include 'footer.php'; ?>
</body>
</html>