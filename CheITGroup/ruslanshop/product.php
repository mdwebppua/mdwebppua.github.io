<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php include 'header.php'; ?>

<section class="speedbar">
    <div class="container">
        <div class="row">
           <div class="col-12">
               <a href="#">eau&moi</a> / <a href="#">Shop</a> / <span>Summer Breeze</span>
           </div>
        </div>
    </div>
</section>

<section class="summer">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="summer-slider">
                    <div class="summer-items">
                        <div class="summer-poster limited">img slick slider</div>
                        <div class="summer-poster">img slick slider</div>
                        <div class="summer-poster">img slick slider</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="summer-main">
                    <h1 class="summer-title">
                        Summer Breeze
                    </h1>
                    <ul class="summer-list">
                        <li>
                            <div class="summer-ico">img</div> Apfel
                        </li>
                        <li>
                            <div class="summer-ico">img</div>Birne
                        </li>
                        <li>
                            <div class="summer-ico">img</div>Ingwer
                        </li>
                        <li>
                            <div class="summer-ico">img</div>Zitrone
                        </li>
                    </ul>
                    <div class="summer-description">
                        Die saftigen und süss-säuerlichen Äpfel und Birnen in Kombination mit der sanften Schärfe des Ingwers und der erfrischenden Zitronenmyrte ergeben eine spritzige Abwechslung für heisse Sommertage.
                    </div>
                    <ul class="summer-bullet">
                        <li><div class="summer-ico">img</div>ohne künstliche Aromen</li>
                        <li><div class="summer-ico">img</div>ohne Zuckerzusatz</li>
                        <li><div class="summer-ico">img</div>ohne Konser- vierungsstoffe</li>
                        <li><div class="summer-ico">img</div>reicht für 5-6dl</li>
                        <li><div class="summer-ico">img</div>ohne Farbstoffe</li>
                        <li><div class="summer-ico">img</div>Laktosefrei</li>
                        <li><div class="summer-ico">img</div>Gluenfrei</li>
                        <li><div class="summer-ico">img</div>Vegan</li>
                    </ul>
                    <div class="rectangle-box">
                        <div class="rectangle-item">
                            <div class="rectangle-title">
                                Einzelbeutel <span>für 5-6 dl</span>
                            </div>
                            <div class="rectangle-price">
                                CHF 1.25
                            </div>
                            <div class="rectangle-sach">
                                Mindestbestellmenge 15 Sachets
                            </div>
                            <form action="#" class="rectangle-form">
                                <div class="rectangle-type">
                                    <button class="rectangle-minus" onclick="this.nextElementSibling.stepDown(); this.nextElementSibling.onchange();">-</button>
                                    <input type="number" value="1" class="rectangle-input">
                                    <button class="rectangle-pluse" onclick="this.previousElementSibling.stepUp(); this.previousElementSibling.onchange();">+</button>
                                </div>
                                <button class="rectangle-button">
                                    In den Warenkorb
                                </button>
                            </form>
                        </div>

                        <div class="rectangle-item">
                            <div class="rectangle-title">
                                Im Abo
                            </div>
                            <div class="rectangle-price">
                                20% günstiger
                            </div>
                            <ul class="rectangle-list">
                                <li>Jederzeit anpassbar</li>
                                <li>Jederzeit kündbar</li>
                            </ul>
                            <form class="rectangle-form">
                                <button class="rectangle-button">
                                    Abo Konfigurieren
                                </button>
                            </form>
                        </div>
                    </div>

                    <form action="#" class="base-select">
                        <select>
                            <option>Inhaltsangaben</option>
                            <option>Inhaltsangaben</option>
                            <option>Inhaltsangaben</option>
                            <option>Inhaltsangaben</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="passt-box">
    <div class="container-none">
        <h2 class="passt-title">
            Passt perfekt dazu
        </h2>
        <div class="passt-items">
            <div class="passt-slider">
                <div class="geschmak-short">
                    <div class="geschmak-poster">
                        img
                    </div>
                    <div class="geschmak-name">
                        Very Berry Extraordinary
                    </div>
                    <div class="geschmak-art">
                        CHF 1.25
                    </div>
                    <a href="#" class="geshmak-link">In den Warenkorb</a>
                </div>
            </div>
            <div class="passt-slider">
                <div class="geschmak-short">
                    <div class="geschmak-poster">
                        img
                    </div>
                    <div class="geschmak-name">
                        Very Berry Extraordinary
                    </div>
                    <div class="geschmak-art">
                        CHF 1.25
                    </div>
                    <a href="#" class="geshmak-link">In den Warenkorb</a>
                </div>
            </div>
            <div class="passt-slider">
                <div class="geschmak-short">
                    <div class="geschmak-poster">
                        img
                    </div>
                    <div class="geschmak-name">
                        Very Berry Extraordinary
                    </div>
                    <div class="geschmak-art">
                        CHF 1.25
                    </div>
                    <a href="#" class="geshmak-link">In den Warenkorb</a>
                </div>
            </div>
            <div class="passt-slider">
                <div class="geschmak-short">
                    <div class="geschmak-poster">
                        img
                    </div>
                    <div class="geschmak-name">
                        Very Berry Extraordinary
                    </div>
                    <div class="geschmak-art">
                        CHF 1.25
                    </div>
                    <a href="#" class="geshmak-link">In den Warenkorb</a>
                </div>
            </div>
            <div class="passt-slider">
                <div class="geschmak-short">
                    <div class="geschmak-poster">
                        img
                    </div>
                    <div class="geschmak-name">
                        Very Berry Extraordinary
                    </div>
                    <div class="geschmak-art">
                        CHF 1.25
                    </div>
                    <a href="#" class="geshmak-link">In den Warenkorb</a>
                </div>
            </div>
            <div class="passt-slider">
                <div class="geschmak-short">
                    <div class="geschmak-poster">
                        img
                    </div>
                    <div class="geschmak-name">
                        Very Berry Extraordinary
                    </div>
                    <div class="geschmak-art">
                        CHF 1.25
                    </div>
                    <a href="#" class="geshmak-link">In den Warenkorb</a>
                </div>
            </div>
            <div class="passt-slider">
                <div class="geschmak-short">
                    <div class="geschmak-poster">
                        img
                    </div>
                    <div class="geschmak-name">
                        Very Berry Extraordinary
                    </div>
                    <div class="geschmak-art">
                        CHF 1.25
                    </div>
                    <a href="#" class="geshmak-link">In den Warenkorb</a>
                </div>
            </div>
            <div class="passt-slider">
                <div class="geschmak-short">
                    <div class="geschmak-poster">
                        img
                    </div>
                    <div class="geschmak-name">
                        Very Berry Extraordinary
                    </div>
                    <div class="geschmak-art">
                        CHF 1.25
                    </div>
                    <a href="#" class="geshmak-link">In den Warenkorb</a>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="review-box">
    <div class="container">
        <h2 class="passt-title">
            Das sagen deine Mitmenschen
        </h2>
        <div class="row review-slider">
            <div class="col-lg-4">
                <div class="review-item">
                    <div class="review-description">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget.
                    </div>
                    <div class="review-info">
                        <div class="review-name">
                            Hanna Muster
                            <p>Zürich</p>
                        </div>
                        <div class="review-rating">
                            SSSSS
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="review-item">
                    <div class="review-description">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget.
                    </div>
                    <div class="review-info">
                        <div class="review-name">
                            Hanna Muster
                            <p>Zürich</p>
                        </div>
                        <div class="review-rating">
                            SSSSS
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="review-item">
                    <div class="review-description">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget.
                    </div>
                    <div class="review-info">
                        <div class="review-name">
                            Hanna Muster
                            <p>Zürich</p>
                        </div>
                        <div class="review-rating">
                            SSSSS
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="review-item">
                    <div class="review-description">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget.
                    </div>
                    <div class="review-info">
                        <div class="review-name">
                            Hanna Muster
                            <p>Zürich</p>
                        </div>
                        <div class="review-rating">
                            SSSSS
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="review-nav">
            <div class="review-prev"><i class="fas fa-chevron-left"></i></div>
            <div class="review-next"><i class="fas fa-chevron-right"></i></div>
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