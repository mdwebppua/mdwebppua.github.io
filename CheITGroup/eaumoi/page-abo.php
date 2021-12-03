<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abo - eaumoi</title>

    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="page-abo">

<?php include 'header.php'; ?>

<section class="abo-konfigurieren">
    <div class="container">
        <div class="abo-container">
            <div class="abo-mobilefirst">
                <h2 class="wasser-title abo-title">
                    Dein Abo
                    <span class="wasser-title__italic">konfigurieren</span>
                </h2>
                <div class="konfigurieren-list">
                    <div class="konfigurieren-item">
                        <div class="konfigurieren-item__thumb">
                            <img src="img/abo-1.svg" alt="">
                        </div>
                        <div class="konfigurieren-item__name">
                            20%<br> günstiger
                        </div>
                    </div>
                    <div class="konfigurieren-item">
                        <div class="konfigurieren-item__thumb">
                            <img src="img/abo-2.svg" alt="">
                        </div>
                        <div class="konfigurieren-item__name">
                            jederzeit <br>
                            anpassbar
                        </div>
                    </div>
                    <div class="konfigurieren-item">
                        <div class="konfigurieren-item__thumb">
                            <img src="img/abo-3.svg" alt="">
                        </div>
                        <div class="konfigurieren-item__name">
                            jederzeit <br>
                            kündbar
                        </div>
                    </div>
                    <div class="konfigurieren-item">
                        <div class="konfigurieren-item__thumb">
                            <img src="img/abo-4.svg" alt="">
                        </div>
                        <div class="konfigurieren-item__name">
                            keine <br>
                            Versandkosten
                        </div>
                    </div>

                    <div class="konfigurieren-item">
                        <div class="konfigurieren-item__thumb">
                            <img src="img/abo-5.svg" alt="">
                        </div>
                        <div class="konfigurieren-item__name">
                            nur mit Kreditkarte bezahlbar
                        </div>
                    </div>
                </div>

                <div class="abo-mobilebutton">
                    <button class="button-link button-abo">
                        weiter
                    </button>
                </div>
            </div>

            <div class="abo-mobilesecond">
                <div class="konfigurieren-step">
                    <ol class="konfigurieren-stepline tabs">
                        <li class="current"><a href="#"><span>Menge</span></a></li>
                        <li><a href="#"><span>Geschmack</span></a></li>
                        <li><a href="#"><span>Zusammenfassung</span></a></li>
                    </ol>

                    <div class="konfigurieren-content">
                        <div class="konfigurieren-tab visible">
                            <div class="konfigurieren-body">
                                <div class="konfigurieren-stepcol">
                                    <div class="konfigurieren-stepitem">
                                        <div class="konfigurieren-step__title">
                                            Menge
                                        </div>
                                        <div class="konfigurieren-stepform">
                                            <div class="konfigurieren-steptype">
                                                <input type="radio" id="beutel10" name="beutel" value="10">
                                                <label for="beutel10">10 Beutel</label>
                                            </div>
                                            <div class="konfigurieren-steptype">
                                                <input type="radio" id="beutel15" name="beutel" value="15" checked>
                                                <label for="beutel15">15 Beutel</label>
                                            </div>
                                        </div>
                                        <div class="konfigurieren-stepinfo">
                                            1 Beutel aromatisiert ca. <br>
                                            5-6 dl Wasser.
                                        </div>
                                    </div>
                                </div>

                                <div class="konfigurieren-stepcol">
                                    <div class="konfigurieren-stepitem">
                                        <div class="konfigurieren-step__title">
                                            Lieferrhythmus
                                        </div>
                                        <div class="konfigurieren-stepform">
                                            <div class="konfigurieren-steptype">
                                                <input type="radio" id="jedewoche" name="woche" value="Jede" checked>
                                                <label for="jedewoche">Jede Woche</label>
                                            </div>
                                            <div class="konfigurieren-steptype">
                                                <input type="radio" id="alle2woche" name="woche" value="Alle 2">
                                                <label for="alle2woche">Alle 2 Wochen</label>
                                            </div>
                                            <div class="konfigurieren-steptype">
                                                <input type="radio" id="allewoche" name="woche" value="Alle">
                                                <label for="allewoche">Alle <input class="allewoche" type="number" min="1" max="12"> Wochen</label>
                                                <div class="allewoche-max">max. 12 Wochen möglich</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="konfigurieren-trinkst">
                                Tipp: Mit 10 Beuteln pro Woche trinkst du <strong>ca. 50% der empfohlenen Trinkmenge pro Tag</strong> mit feinem und natürlichem Aroma.
                            </div>

                            <div class="konfigurieren-button">
                                <button class="button-link step-form">
                                    weiter
                                </button>
                            </div>

                        </div>

                        <div class="konfigurieren-tab">
                            <div class="bittle-wahle">
                                <div class="bittle-wahle__title">
                                    <span class="current">Bitte wähle 15 Beutel</span>
                                    <span class="current-none">Du hast 15 Beutel gewähl</span>
                                </div>
                                <div class="warenkorb-statusbar">
                                    <div class="warenkorb-status">
                                        <div class="warenkorb-status__ico"></div>
                                    </div>
                                    <div class="warenkorb-status__info"><span>8</span> von 15</div>
                                </div>
                                <div class="warenkorb-market">
                                    <div class="warenkorb-short">
                                        <div class="warenkorb-thumb">
                                            <img src="img/warenkorb_2.png" alt="">

                                            <div class="warenkorb-limited">
                                                <div class="warenkorb-limited__text">
                                                    LIMITED EDITION
                                                </div>
                                            </div>
                                        </div>
                                        <div class="warenkorb-inside">
                                            <div class="warenkorb-info">
                                                <div class="warenkorb-name">
                                                    Summer Breeze
                                                </div>
                                                <div class="warenkorb-price">
                                                    Apfel • Birne • Ingwer • Zitronenmyrte
                                                </div>
                                            </div>
                                            <form action="#" class="warenkorb-current">
                                                <div class="warenkorb-type">
                                                    <button class="warenkorb-minus productCountDown">-</button>
                                                    <input type="number" value="0" class="warenkorb-input productCount" min="0">
                                                    <button class="warenkorb-pluse productCountUp">+</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="warenkorb-short">
                                        <div class="warenkorb-thumb">
                                            <img src="img/warenkorb_3.png" alt="">
                                        </div>
                                        <div class="warenkorb-inside">
                                            <div class="warenkorb-info">
                                                <div class="warenkorb-name">
                                                    Summer Breeze
                                                </div>
                                                <div class="warenkorb-price">
                                                    Apfel • Birne • Ingwer • Zitronenmyrte
                                                </div>
                                            </div>
                                            <form action="#" class="warenkorb-current">
                                                <div class="warenkorb-type">
                                                    <button class="warenkorb-minus productCountDown">-</button>
                                                    <input type="number" value="0" class="warenkorb-input productCount" min="0">
                                                    <button class="warenkorb-pluse productCountUp">+</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="warenkorb-short">
                                        <div class="warenkorb-thumb">
                                            <img src="img/warenkorb_4.png" alt="">
                                        </div>
                                        <div class="warenkorb-inside">
                                            <div class="warenkorb-info">
                                                <div class="warenkorb-name">
                                                    Summer Breeze
                                                </div>
                                                <div class="warenkorb-price">
                                                    Apfel • Birne • Ingwer • Zitronenmyrte
                                                </div>
                                            </div>
                                            <form action="#" class="warenkorb-current">
                                                <div class="warenkorb-type">
                                                    <button class="warenkorb-minus productCountDown">-</button>
                                                    <input type="number" value="0" class="warenkorb-input productCount" min="0">
                                                    <button class="warenkorb-pluse productCountUp">+</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="warenkorb-short">
                                        <div class="warenkorb-thumb">
                                            <img src="img/warenkorb_5.png" alt="">
                                        </div>
                                        <div class="warenkorb-inside">
                                            <div class="warenkorb-info">
                                                <div class="warenkorb-name">
                                                    Summer Breeze
                                                </div>
                                                <div class="warenkorb-price">
                                                    Apfel • Birne • Ingwer • Zitronenmyrte
                                                </div>
                                            </div>
                                            <form action="#" class="warenkorb-current">
                                                <div class="warenkorb-type">
                                                    <button class="warenkorb-minus productCountDown">-</button>
                                                    <input type="number" value="0" class="warenkorb-input productCount" min="0">
                                                    <button class="warenkorb-pluse productCountUp">+</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="warenkorb-short">
                                        <div class="warenkorb-thumb">
                                            <img src="img/warenkorb_1.png" alt="">
                                        </div>
                                        <div class="warenkorb-inside">
                                            <div class="warenkorb-info">
                                                <div class="warenkorb-name">
                                                    Summer Breeze
                                                </div>
                                                <div class="warenkorb-price">
                                                    Apfel • Birne • Ingwer • Zitronenmyrte
                                                </div>
                                            </div>
                                            <form action="#" class="warenkorb-current">
                                                <div class="warenkorb-type">
                                                    <button class="warenkorb-minus productCountDown">-</button>
                                                    <input type="number" value="0" class="warenkorb-input productCount" min="0" max="0">
                                                    <button class="warenkorb-pluse productCountUp">+</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="konfigurieren-trinkst du-musst">
                                Du musst noch <span class="min-15">0</span> von 15 Beutel wählen
                            </div>

                            <div class="konfigurieren-button">
                                <button class="button-link step-form">
                                    weiter
                                </button>
                            </div>
                        </div>

                        <div class="konfigurieren-tab">
                            <div class="bittle-wahle">
                                <div class="konfigurieren-step3">
                                    <div class="konfigurieren-total">
                                        <div class="konfigurieren-total__name">
                                            Start Abo
                                        </div>
                                        <div class="konfigurieren-total__price">
                                            30.09.2021
                                        </div>
                                    </div>
                                    <div class="konfigurieren-total">
                                        <div class="konfigurieren-total__name">
                                            Lieferrhythmus
                                        </div>
                                        <div class="konfigurieren-total__price">
                                            Alle 2 Wochen
                                        </div>
                                    </div>
                                    <div class="konfigurieren-total">
                                        <div class="konfigurieren-total__name">
                                            Menge
                                        </div>
                                        <div class="konfigurieren-total__price">
                                            15 Beutel
                                        </div>
                                    </div>
                                    <div class="konfigurieren-total">
                                        <div class="konfigurieren-total__name">
                                            Preis
                                        </div>
                                        <div class="konfigurieren-total__price">
                                            CHF 18.75
                                        </div>
                                    </div>
                                    <div class="konfigurieren-total">
                                        <div class="konfigurieren-total__name">
                                            -20% Rabatt
                                        </div>
                                        <div class="konfigurieren-total__price">
                                            CHF –3.75
                                        </div>
                                    </div>
                                    <div class="konfigurieren-total">
                                        <div class="konfigurieren-total__name">
                                            Versandkosten
                                        </div>
                                        <div class="konfigurieren-total__price">
                                            CHF 0.00
                                        </div>
                                    </div>
                                    <div class="konfigurieren-total">
                                        <div class="konfigurieren-total__name">
                                            Total im Abo
                                        </div>
                                        <div class="konfigurieren-total__price">
                                            CHF 15.00
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="konfigurieren-button">
                                <button class="button-link">
                                    jetzt bestellen
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>

