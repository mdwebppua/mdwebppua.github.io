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

<section class="chekout-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="chekout-inform">
                    <div class="chekout-inform__item">
                        Hast du bereits ein Kundenkonto? Klicke <a href="#">hier</a> um dich anzumelden
                    </div>
                    <div class="chekout-inform__item">
                        Neues Kundenkonto <a href="#">eröffnen</a>
                    </div>
                    <div class="chekout-inform__item">
                        Als Gast fortfahren
                    </div>
                </div>

                <div class="chekout-form">
                    <div class="chekout-form__title">
                        Rechnungsadressse
                    </div>
                    <div class="chekout-type">
                        <div class="row">
                            <div class="col-lg-6">
                                <input class="chekout-type__input" type="text" placeholder="Vorname*">
                            </div>
                            <div class="col-lg-6">
                                <input class="chekout-type__input" type="text" placeholder="Name*">
                            </div>
                        </div>
                    </div>
                    <div class="chekout-type">
                        <input class="chekout-type__input" type="text" placeholder="Firma">
                    </div>
                    <div class="chekout-type">
                        <input class="chekout-type__input" type="text" placeholder="Addresse*">
                    </div>
                    <div class="chekout-type">
                        <div class="row">
                            <div class="col-lg-6">
                                <input class="chekout-type__input" type="text" placeholder="Ort*">
                            </div>
                            <div class="col-lg-6">
                                <input class="chekout-type__input" type="text" placeholder="PLZ*">
                            </div>
                        </div>
                    </div>
                    <div class="chekout-type">
                        <input class="chekout-type__input" type="text" placeholder="Email*">
                    </div>
                    <div class="chekout-type">
                        <input type="checkbox" class="chekout-type__checkbox" id="happy" name="happy" value="yes">
                        <label for="happy">Für Newsletter anmelden</label>
                    </div>
                    <div class="chekout-type">
                        <textarea class="chekout-type__textarea" name="msg" id="" cols="30" rows="5" placeholder="Anmerkung zur Bestellung"></textarea>
                    </div>
                    <div class="chekout-type">
                        <input type="checkbox" class="chekout-type__checkbox" id="happy2" name="happy" value="yes">
                        <label for="happy2">Lieferadresse an eine andere Adresse?</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="chekout-deine">
                    <div class="chekout-form__title">
                        Deine Bestellung weiter einkaufen
                    </div>
                    <div class="chekout-listen">
                        <div class="chekout-short">
                            <div class="chekout-delete">
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="warenkorb-thumb">
                                img
                            </div>
                            <div class="warenkorb-info">
                                <div class="warenkorb-name">
                                    Yellow Booster
                                </div>
                                <div class="warenkorb-stk">
                                    Mango, Yuzu, Kurkuma 5 Stk.
                                </div>
                            </div>
                            <div class="warenkorb-current">
                                <input class="warenkorb-input" type="number" min="0" value="1" readonly>
                                <div class="warenkorb-current__button">
                                    <button class="warenkorb-plus" type="button"><i class="fas fa-angle-up"></i></button>
                                    <button class="warenkorb-minus" type="button"><i class="fas fa-angle-down"></i></button>
                                </div>
                            </div>
                            <div class="chekout-sale">
                                CHF 12.50
                            </div>
                        </div>

                        <div class="chekout-short">
                            <div class="chekout-delete">
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="warenkorb-thumb">
                                img
                            </div>
                            <div class="warenkorb-info">
                                <div class="warenkorb-name">
                                    Yellow Booster
                                </div>
                                <div class="warenkorb-stk">
                                    Mango, Yuzu, Kurkuma 5 Stk.
                                </div>
                            </div>
                            <div class="warenkorb-current">
                                <input class="warenkorb-input" type="number" min="0" value="1" readonly>
                                <div class="warenkorb-current__button">
                                    <button class="warenkorb-plus" type="button"><i class="fas fa-angle-up"></i></button>
                                    <button class="warenkorb-minus" type="button"><i class="fas fa-angle-down"></i></button>
                                </div>
                            </div>
                            <div class="chekout-sale">
                                CHF 12.50
                            </div>
                        </div>

                        <div class="chekout-short">
                            <div class="chekout-delete">
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="warenkorb-thumb">
                                img
                            </div>
                            <div class="warenkorb-info">
                                <div class="warenkorb-name">
                                    Yellow Booster
                                </div>
                                <div class="warenkorb-stk">
                                    Mango, Yuzu, Kurkuma 5 Stk.
                                </div>
                            </div>
                            <div class="warenkorb-current">
                                <input class="warenkorb-input" type="number" min="0" value="1" readonly>
                                <div class="warenkorb-current__button">
                                    <button class="warenkorb-plus" type="button"><i class="fas fa-angle-up"></i></button>
                                    <button class="warenkorb-minus" type="button"><i class="fas fa-angle-down"></i></button>
                                </div>
                            </div>
                            <div class="chekout-sale">
                                CHF 12.50
                            </div>
                        </div>
                    </div>
                    <form class="chekout-rabattcode">
                        <input type="text" class="chekout-rabattcode__input" placeholder="Hast du einen Rabattcode?">
                        <button class="chekout-rabattcode__button">Anwenden</button>
                    </form>
                    <ul class="chekout-total">
                        <li>
                            <div class="chekout-total__title">
                                Zwischensumme:
                            </div>
                            <div class="chekout-total__price">
                                55.40
                            </div>
                        </li>
                        <li class="chekout-total__rabattcode active">
                            <div class="chekout-total__title">
                                Rabatt:
                            </div>
                            <div class="chekout-total__price">
                                - CHF 05.40
                            </div>
                        </li>
                        <li>
                            <div class="chekout-total__title">
                                Versand:
                            </div>
                            <div class="chekout-total__price">
                                CHF 00.00
                            </div>
                        </li>
                        <li>
                            <div class="chekout-total__title">
                                MwSt.:
                            </div>
                            <div class="chekout-total__price">
                                CHF 02.30
                            </div>
                        </li>
                        <li class="chekout-total__buy">
                            <div class="chekout-total__title">
                                Total:
                            </div>
                            <div class="chekout-total__price">
                                CHF 55.40
                            </div>
                        </li>
                    </ul>
                    <div class="chekout-buylist">
                        <div class="chekout-type">
                            <input type="checkbox" class="chekout-type__checkbox" id="happy3" name="happy" value="yes">
                            <label for="happy3">LKreditkarte</label>
                        </div>
                        <div class="chekout-type">
                            <input type="checkbox" class="chekout-type__checkbox" id="happy4" name="happy" value="yes">
                            <label for="happy4">TWINT</label>
                        </div>
                    </div>
                    <button class="warenkorb-deine chekout-bestellen">
                        Bestellen
                    </button>
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