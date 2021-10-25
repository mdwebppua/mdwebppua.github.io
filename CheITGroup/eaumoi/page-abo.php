<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abo - eaumoi</title>

    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="page-abo">

<?php include 'header.php'; ?>

<section class="abo-konfigurieren">
    <div class="container">
        <h2 class="abo-description">
            Dein Abo <i>konfigurieren</i>
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
                    Jederzeit anpassbar
                </div>
            </div>
            <div class="konfigurieren-item">
                <div class="konfigurieren-item__thumb">
                    <img src="img/abo-3.svg" alt="">
                </div>
                <div class="konfigurieren-item__name">
                    Jederzeit kündbar
                </div>
            </div>
            <div class="konfigurieren-item">
                <div class="konfigurieren-item__thumb">
                    <img src="img/abo-4.svg" alt="">
                </div>
                <div class="konfigurieren-item__name">
                    keine Versandkosten
                </div>
            </div>

            <div class="konfigurieren-item">
                <div class="konfigurieren-item__thumb">
                    <img src="img/abo-5.svg" alt="">
                </div>
                <div class="konfigurieren-item__name">
                    mit Kreditkarte bezahlbar
                </div>
            </div>
        </div>

        <div class="konfigurieren-step">
            <ol class="konfigurieren-stepline tabs">
                <li class="current"><a href="#"><span>Menge</span></a></li>
                <li><a href="#"><span>Geschmack</span></a></li>
                <li><a href="#"><span>Zusammenfassung</span></a></li>
            </ol>

            <div class="konfigurieren-tab">
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
                                <input type="radio" id="beutel15" name="beutel" value="15">
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
                                <input type="radio" id="jedewoche" name="woche" value="Jede">
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

            <div class="konfigurieren-tab">
                <div class="bittle-wahle">
                    <div class="bittle-wahle__title">
                        <span class="current">Bitte wähle 15 Beutel</span>
                        <span class="current-none">Du hast 15 Beutel gwählt</span>
                    </div>

                </div>

            </div>

            <div class="konfigurieren-trinkst">
                Tipp: Mit 10 Beuteln pro Woche trinkst du <i>ca. 50% der empfohlenen Trinkmenge pro Tag</i> mit feinem und natürlichem Aroma.
            </div>
            <div class="konfigurieren-button">
                <button class="button-link">
                    weiter
                </button>
            </div>
        </div>

    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>

