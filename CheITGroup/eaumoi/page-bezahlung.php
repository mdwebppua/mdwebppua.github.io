<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bezahlung - eaumoi</title>

    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="page-bezahlung">

<?php include 'header.php'; ?>

<section class="bezahlung">
    <div class="container-xl">
        <div class="bezahlung-container">
            <div class="bezahlung-sale">
                <ul class="bezahlung-inform">
                    <li><a href="page-login.php">Hast du bereits ein Kundenkonto?</a></li>
                    <li><a href="page-neueskonto.php">Neues Kundenkonto eröffnen</a></li>
                    <li><a href="#">Als Gast fortfahren</a></li>
                </ul>

                <div class="bezahlung-form">
                    <div class="bezahlung-form__title">
                        Rechnungsadressse
                    </div>
                    <div class="bezahlung-type dfcol-2">
                        <div class="col">
                            <input class="bezahlung-type__input" type="text" placeholder="Vorname*">
                        </div>
                        <div class="col">
                            <input class="bezahlung-type__input" type="text" placeholder="Name*">
                        </div>
                    </div>
                    <div class="bezahlung-type">
                        <input class="bezahlung-type__input" type="text" placeholder="Geburtsdatum">
                    </div>
                    <div class="bezahlung-type radio-chekbox dfcol-2">
                        <div class="col">
                            <input class="bezahlung-type__input" type="text" placeholder="Firma">
                        </div>
                        <div class="col">
                            <input type="checkbox" class="bezahlung-type__radio-chekbox" id="MwSt-Kunde" name="MwSt-Kunde">
                            <label for="MwSt-Kunde">MwSt-Kunde</label>
                        </div>
                    </div>
                    <div class="bezahlung-type">
                        <input class="bezahlung-type__input" type="text" placeholder="Addresse*">
                    </div>
                    <div class="bezahlung-type">
                        <input class="bezahlung-type__input" type="text" placeholder="Addresszusatz">
                    </div>
                    <div class="bezahlung-type dfcol-2">
                        <div class="col">
                            <input class="bezahlung-type__input" type="text" placeholder="Ort*">
                        </div>
                        <div class="col">
                            <input class="bezahlung-type__input" type="text" placeholder="PLZ*">
                        </div>
                    </div>
                    <div class="bezahlung-type">
                        <input class="bezahlung-type__input" type="text" placeholder="Telefonnummer*">
                    </div>
                    <div class="bezahlung-type">
                        <input class="bezahlung-type__input" type="text" placeholder="Email*">
                    </div>
                    <div class="bezahlung-type checkbox">
                        <input type="checkbox" class="bezahlung-type__checkbox" id="happy" name="happy" checked>
                        <label for="happy">Für unseren aromatischen Newsletter anmelden</label>
                    </div>
                    <div class="bezahlung-type">
                        <textarea class="bezahlung-type__textarea" name="msg" id="" cols="30" rows="5" placeholder="Anmerkung zur Bestellung"></textarea>
                    </div>

                    <button class="bezahlung-lieferung">
                        Lieferung an eine andere Adresse?
                    </button>

                    <div class="bezahlung-lieferung__eine">
                        <div class="bezahlung-form__title">
                            Lieferadresse
                        </div>
                        <div class="bezahlung-type dfcol-2">
                            <div class="col">
                                <input class="bezahlung-type__input" type="text" placeholder="Vorname*">
                            </div>
                            <div class="col">
                                <input class="bezahlung-type__input" type="text" placeholder="Name*">
                            </div>
                        </div>
                        <div class="bezahlung-type">
                            <input class="bezahlung-type__input" type="text" placeholder="Firma">
                        </div>
                        <div class="bezahlung-type">
                            <input class="bezahlung-type__input" type="text" placeholder="Addresse*">
                        </div>
                        <div class="bezahlung-type dfcol-2">
                            <div class="col">
                                <input class="bezahlung-type__input" type="text" placeholder="Ort*">
                            </div>
                            <div class="col">
                                <input class="bezahlung-type__input" type="text" placeholder="PLZ*">
                            </div>
                        </div>
                        <div class="bezahlung-type">
                            <input class="bezahlung-type__input" type="text" placeholder="Telefonnummer*">
                        </div>
                    </div>
                </div>
            </div>

            <div class="bezahlung-deine">
                <div class="bezahlung-deine__title">
                    <span>Deine Bestellung</span>
                    <a href="#">weiter einkaufen</a>
                </div>
                <div class="bezahlung-listen">
                    <div class="aboshort-item">
                        <div class="aboshort-delete">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="aboshort-thumb">
                            <img src="img/aboshort-1.png" alt="">
                        </div>
                        <div class="aboshort-info">
                            <div class="aboshort-name">
                                eau&moi Abo
                            </div>
                            <div class="aboshort-flasche">
                                <a href="#">Abo anpassen</a>
                            </div>
                            <div class="aboshort-rabatt">
                                <div class="aboshort-rabatt__inkl">
                                    inkl. 20% Rabatt
                                </div>
                                <form action="#" class="aboshort-form">

                                    <div class="aboshort-button">
                                        CHF 9.00
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="aboshort-item">
                        <div class="aboshort-delete">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="aboshort-thumb">
                            <img src="img/aboshort-2.png" alt="">
                        </div>
                        <div class="aboshort-info">
                            <div class="aboshort-name">
                                Glasflasche
                            </div>
                            <div class="aboshort-flasche">
                                <a href="#">Flasche personalisieren</a>
                            </div>
                            <div class="aboshort-rabatt">
                                <div class="aboshort-rabatt__inkl">
                                    CHF 1.25 / Stk.
                                </div>
                                <form action="#" class="aboshort-form">
                                    <div class="aboshort-type">
                                        <button class="aboshort-minus productCountDown">-</button>
                                        <input type="number" value="1" class="aboshort-input productCount" min="0" max="20">
                                        <button class="aboshort-pluse productCountUp">+</button>
                                    </div>
                                    <div class="aboshort-button">
                                        CHF 39.90
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="aboshort-item">
                        <div class="aboshort-delete">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="aboshort-thumb">
                            <img src="img/aboshort-3.png" alt="">
                        </div>
                        <div class="aboshort-info">
                            <div class="aboshort-name">
                                Around The World
                            </div>
                            <div class="aboshort-flasche">
                                Grapefruit • Datteln • Feigen • Szechuanpfeffer
                            </div>
                            <div class="aboshort-rabatt">
                                <div class="aboshort-rabatt__inkl">
                                    CHF 1.25 / Stk.
                                </div>
                                <form action="#" class="aboshort-form">
                                    <div class="aboshort-type">
                                        <button class="aboshort-minus productCountDown">-</button>
                                        <input type="number" value="1" class="aboshort-input productCount" min="0" max="20">
                                        <button class="aboshort-pluse productCountUp">+</button>
                                    </div>
                                    <div class="aboshort-button">
                                        CHF 18.75
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

                <form class="bezahlung-rabattcode">
                    <input type="text" class="bezahlung-rabattcode__input" placeholder="Hast du einen Rabattcode?">
                    <button class="button-link bezahlung-rabattcode__button">anwenden</button>
                </form>

                <ul class="bezahlung-total">
                    <li class="bezahlung-total__zwischensumme">
                        <div class="chekout-total__title">
                            Zwischensumme:
                        </div>
                        <div class="chekout-total__price">
                            CHF 67.55
                        </div>
                    </li>
                    <li class="bezahlung-total__rabatt active">
                        <div class="chekout-total__title">
                            Rabatt
                        </div>
                        <div class="chekout-total__price">
                            - CHF 00.00
                        </div>
                    </li>
                    <li class="bezahlung-total__versand">
                        <div class="chekout-total__title">
                            Versand
                        </div>
                        <div class="chekout-total__price">
                            CHF 00.00
                        </div>
                    </li>
                    <li class="bezahlung-total__total">
                        <div class="chekout-total__title">
                            <strong>Total</strong> <span>inkl. MwSt.</span>
                        </div>
                        <div class="chekout-total__price">
                            <strong>CHF 67.65</strong>
                        </div>
                    </li>
                </ul>

                <ul class="bezahlung-buylist">
                    <li class="bezahlung-buylist__kreditkarte">
                        <div class="bezahlung-type checkbox">
                            <input type="checkbox" class="bezahlung-type__checkbox" id="Kreditkarte" name="Kreditkarte">
                            <label for="Kreditkarte">Kreditkarte</label>
                        </div>
                        <div class="bezahlung-buylist__ico">
                            <img src="img/visa-1.png" alt="">
                            <img src="img/visa-2.png" alt="">
                        </div>
                    </li>
                    <li class="bezahlung-buylist__twint">
                        <div class="bezahlung-type checkbox">
                            <input type="checkbox" class="bezahlung-type__checkbox" id="TWINT" name="TWINT">
                            <label for="TWINT">TWINT</label>
                        </div>
                        <div class="bezahlung-buylist__ico">
                            <img src="img/visa-3.png" alt="">
                        </div>
                    </li>
                    <li class="bezahlung-buylist__twint">
                        <div class="bezahlung-type checkbox">
                            <input type="checkbox" class="bezahlung-type__checkbox" id="PostFinance" name="PostFinance">
                            <label for="PostFinance">PostFinance</label>
                        </div>
                        <div class="bezahlung-buylist__ico">
                            <img src="img/visa-5.png" alt="">
                        </div>
                    </li>
                    <li class="bezahlung-buylist__twint">
                        <div class="bezahlung-type checkbox">
                            <input type="checkbox" class="bezahlung-type__checkbox" id="POWERPAY" name="POWERPAY">
                            <label for="POWERPAY">POWERPAY</label>
                        </div>
                        <div class="bezahlung-buylist__ico">
                            <img src="img/visa-4.png" alt="">
                        </div>
                    </li>
                </ul>
                <div class="mit-dieser">
                    <div class="bezahlung-type checkbox">
                        <input type="checkbox" class="bezahlung-type__checkbox" id="Mit" name="Mit">
                        <label for="Mit">Mit dieser Bestellung akzeptierst du unsere AGB.</label>
                    </div>
                </div>

                <div class="bezahlung-formsubmit">
                    <button class="button-dark bezahlung-sumit">
                        jetzt bestellen
                    </button>
                </div>

            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>

