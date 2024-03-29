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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css">

    <script>
        const assetsPath = '';
    </script>
</head>
<body class="page-bezahlung">

<?php include 'header.php'; ?>

<section class="bezahlung">
    <div class="container-xl">
        <form action="#" class="bezahlung-form">
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
                            <input class="bezahlung-type__input" type="text" name="billing_first_name" placeholder="Vorname*">
                        </div>
                        <div class="col">
                            <input class="bezahlung-type__input" type="text" name="billing_last_name" placeholder="Name*">
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
                        <input class="bezahlung-type__input" type="text" name="billing_address_1" placeholder="Addresse*">
                    </div>
                    <div class="bezahlung-type">
                        <input class="bezahlung-type__input" type="text" placeholder="Addresszusatz">
                    </div>
                    <div class="bezahlung-type dfcol-2">
                        <div class="col">
                            <input class="bezahlung-type__input" type="text" name="billing_city" placeholder="Ort*">
                        </div>
                        <div class="col">
                            <input class="bezahlung-type__input" type="text" name="billing_postcode" placeholder="PLZ*">
                        </div>
                    </div>
                    <div class="bezahlung-type">
                        <select class="bezahlung-type__select select-js" name="billing_country">
                            <option>Land</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                        </select>
                        <div class="bezahlung-reqinfo">
                            Versand nur innerhalb der Schweiz und nach Liechtenstein
                        </div>
                    </div>
                    <div class="bezahlung-type">
                        <input class="bezahlung-type__input" type="text" name="billing_phone" placeholder="Telefonnummer*">
                        <div class="bezahlung-reqinfo">
                            Bitte prüfe deine Eingabe
                        </div>
                    </div>
                    <div class="bezahlung-type">
                        <input class="bezahlung-type__input" type="text" name="billing_email" placeholder="Email*">
                        <div class="bezahlung-reqinfo">
                            Bitte prüfe deine Eingabe
                        </div>
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
                    <div class="bezahlung-item">
                        <div class="bezahlung-delete">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="bezahlung-thumb">
                            <img src="img/aboshort-1.png" alt="">
                        </div>
                        <div class="bezahlung-info">
                            <div class="bezahlung-name">
                                eau&moi Abo
                            </div>
                            <div class="bezahlung-flasche">
                                <a href="#">Abo anpassen</a>
                            </div>
                            <div class="bezahlung-rabatt">
                                <div class="bezahlung-rabatt__inkl">
                                    inkl. 20% Rabatt
                                </div>
                                <form action="#" class="bezahlung-formprice">
                                    <div class="bezahlung-button">
                                        CHF 9.00
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="bezahlung-item">
                        <div class="bezahlung-delete">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="bezahlung-thumb">
                            <img src="img/aboshort-2.png" alt="">
                        </div>
                        <div class="bezahlung-info">
                            <div class="bezahlung-name">
                                Glasflasche
                            </div>
                            <div class="bezahlung-flasche">
                                <a href="#">Flasche personalisieren</a>
                            </div>
                            <div class="bezahlung-rabatt">
                                <div class="bezahlung-rabatt__inkl">
                                    CHF 1.25 / Stk.
                                </div>
                                <form action="#" class="bezahlung-formprice">
                                    <div class="bezahlung-typeprice">
                                        <button class="bezahlung-minus productCountDown">-</button>
                                        <input type="number" value="1" class="bezahlung-input productCount" min="0" max="20">
                                        <button class="bezahlung-pluse productCountUp">+</button>
                                    </div>
                                    <div class="bezahlung-button">
                                        CHF 39.90
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="bezahlung-item">
                        <div class="bezahlung-delete">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="bezahlung-thumb">
                            <img src="img/warenkorb_3.png" alt="">
                        </div>
                        <div class="bezahlung-info">
                            <div class="bezahlung-name">
                                Around The World
                            </div>
                            <div class="bezahlung-flasche">
                                Grapefruit • Datteln • Feigen • Szechuanpfeffer
                            </div>
                            <div class="bezahlung-rabatt">
                                <div class="bezahlung-rabatt__inkl">
                                    CHF 1.25 / Stk.
                                </div>
                                <form action="#" class="bezahlung-formprice">
                                    <div class="bezahlung-typeprice">
                                        <button class="bezahlung-minus productCountDown">-</button>
                                        <input type="number" value="1" class="bezahlung-input productCount" min="0" max="20">
                                        <button class="bezahlung-pluse productCountUp">+</button>
                                    </div>
                                    <div class="bezahlung-button">
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
                    <div class="bezahlung-reqinfo">
                        Dieser Code funktioniert leider nicht, bitte prüfe deine Eingabe!
                    </div>
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
                        <div class="bezahlung-type checkbox-radio">
                            <input type="radio" class="bezahlung-type__checkbox-radio" id="Kreditkarte" name="radio-buy">
                            <label for="Kreditkarte">Kreditkarte</label>
                        </div>
                        <div class="bezahlung-buylist__ico">
                            <img src="img/visa-1.png" alt="">
                            <img src="img/visa-2.png" alt="">
                        </div>
                    </li>
                    <li class="bezahlung-buylist__twint">
                        <div class="bezahlung-type checkbox-radio">
                            <input type="radio" class="bezahlung-type__checkbox-radio" id="TWINT" name="radio-buy">
                            <label for="TWINT">TWINT</label>
                        </div>
                        <div class="bezahlung-buylist__ico">
                            <img src="img/visa-3.png" alt="">
                        </div>
                    </li>
                    <li class="bezahlung-buylist__twint">
                        <div class="bezahlung-type checkbox-radio">
                            <input type="radio" class="bezahlung-type__checkbox-radio" id="PostFinance" name="radio-buy">
                            <label for="PostFinance">PostFinance</label>
                        </div>
                        <div class="bezahlung-buylist__ico">
                            <img src="img/visa-5.png" alt="">
                        </div>
                    </li>
                    <li class="bezahlung-buylist__twint">
                        <div class="bezahlung-type checkbox-radio">
                            <input type="radio" class="bezahlung-type__checkbox-radio" id="POWERPAY" name="radio-buy">
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
                    <button type="submit" class="button-dark bezahlung-sumit">
                        jetzt bestellen
                    </button>
                </div>

            </div>

        </div>
        </form>
    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>

