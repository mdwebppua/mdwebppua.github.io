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

<section class="konfigurieren-page">
    <div class="container">
        <h1>Mein Abeau konfigurieren</h1>

        <div class="konfigurieren-list">
            <div class="konfigurieren-list__item">
                <div class="konfigurieren-list__thumb">
                    img
                </div>
                <div class="konfigurieren-list__name">
                    20% günstiger
                </div>
            </div>
            <div class="konfigurieren-list__item">
                <div class="konfigurieren-list__thumb">
                    img
                </div>
                <div class="konfigurieren-list__name">
                    Jederzeit anpassbar
                </div>
            </div>
            <div class="konfigurieren-list__item">
                <div class="konfigurieren-list__thumb">
                    img
                </div>
                <div class="konfigurieren-list__name">
                    Jederzeit kündbar
                </div>
            </div>
            <div class="konfigurieren-list__item">
                <div class="konfigurieren-list__thumb">
                    img
                </div>
                <div class="konfigurieren-list__name">
                    keine Versandkosten
                </div>
            </div>

            <div class="konfigurieren-list__item">
                <div class="konfigurieren-list__thumb">
                    img
                </div>
                <div class="konfigurieren-list__name">
                    mit Kreditkarte bezahlbar
                </div>
            </div>
        </div>

        <div class="row konfigurieren-step">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-12">
                        <ul class="konfigurieren-stepline">
                            <li><span>Menge</span></li>
                            <li class="active"><span>Geschmack</span></li>
                            <li><span>Zusammenfassung</span></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="konfigurieren-step2">
                            <div class="warenkorb-head">
                                <div class="warenkorb-title">15 Beutel wählen</div>
                            </div>
                            <div class="warenkorb-status"><div></div></div>
                            <div class="warenkorb-status__info">8 von 15</div>


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
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="konfigurieren-buttonbox">
                            <button class="warenkorb-deine konfigurieren-button">
                                Weiter
                            </button>
                        </div>
                    </div>
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