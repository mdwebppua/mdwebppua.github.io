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

<section class="deckel-page">
    <div class="container">
            <h1>Bambus-Deckel personalisieren</h1>
            <div class="description-center">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <br>
                Aenean commodo ligula eget dolor. Lieferzeit 1-2 Wochen.
            </div>
        <div class="row">
            <div class="col-md-4 deckel-stepline">
                <ul class="konfigurieren-stepline">
                    <li><span>Vorlage wählen</span></li>
                    <li class="active"><span>Anpassen</span></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 deckel-full">
                <div class="row">
                    <div class="col-md-6">
                        <div class="deckel-listtype">
                            <div class="deckel-type">
                                <select class="deckel-type__select">
                                    <option>Schriftart</option>
                                    <option>Schriftart1</option>
                                    <option>Schriftart2</option>
                                    <option>Schriftart3</option>
                                </select>
                            </div>
                            <div class="deckel-type">
                                <select class="deckel-type__select">
                                    <option>Muster</option>
                                    <option>Muster1</option>
                                    <option>Muster2</option>
                                    <option>Muster3</option>
                                </select>
                            </div>
                            <div class="deckel-type">
                                <input class="deckel-type__text" type="text" placeholder="Eigenes Logo / Grafik hochladen">
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="deckel-figure">
                            <div class="deckel-figure__thumb">
                                <span>img</span>
                            </div>
                            <div class="deckel-btnenter">
                                <div class="warenkorb-current">
                                    <input class="warenkorb-input" type="number" min="0" value="1" readonly="">
                                    <div class="warenkorb-current__button">
                                        <button class="warenkorb-plus" type="button"><svg class="svg-inline--fa fa-angle-up fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M177 159.7l136 136c9.4 9.4 9.4 24.6 0 33.9l-22.6 22.6c-9.4 9.4-24.6 9.4-33.9 0L160 255.9l-96.4 96.4c-9.4 9.4-24.6 9.4-33.9 0L7 329.7c-9.4-9.4-9.4-24.6 0-33.9l136-136c9.4-9.5 24.6-9.5 34-.1z"></path></svg><!-- <i class="fas fa-angle-up"></i> Font Awesome fontawesome.com --></button>
                                        <button class="warenkorb-minus" type="button"><svg class="svg-inline--fa fa-angle-down fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z"></path></svg><!-- <i class="fas fa-angle-down"></i> Font Awesome fontawesome.com --></button>
                                    </div>
                                </div>
                                    <button class="button deckel-button">In den Warenkorb</button>
                            </div>
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