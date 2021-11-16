<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konto Bestellungen - eaumoi</title>

    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php include 'header.php'; ?>

<section class="konto-dashboard">
    <div class="container-xl">
        <div class="konto-container">
            <?php include 'sidebar-konto.php'; ?>

            <div class="konto-body">
                <div class="bestellung-title">
                    Bestelldetails
                </div>
                <div class="bestellung-description">
                    Diese freshe Bestellung EM455 vom 00. Monat. 2021 ist aktuell noch in Bearbeitung.
                </div>
                <div class="bestellung-box">
                    <table class="bestelldetails-table">
                        <thead>
                            <tr>
                                <th class="td-produkt">Produkt</th>
                                <th class="td-artikle">Artikel-Nr.</th>
                                <th class="td-summe">Gesamtsumme</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="td-produkt">10 x <a href=""><b>«Summer Breeze»</b></a></td>
                                <td class="td-artikle">99002</td>
                                <td class="td-summe">CHF 25.00</td>
                            </tr>
                            <tr>
                                <td class="td-produkt">10 x <a href=""><b>«Summer Breeze»</b></a></td>
                                <td class="td-artikle">99002</td>
                                <td class="td-summe">CHF 25.00</td>
                            </tr>
                            <tr class="bestellung-item__bold">
                                <td></td>
                                <td class="td-artikle"><b>Zwischensumme</b></td>
                                <td class="td-summe"><b>CHF 50.00</b></td>
                            </tr>
                            <tr class="bestellung-item__bold">
                                <td></td>
                                <td class="td-artikle"><b>Versand</b></td>
                                <td class="td-summe">Kostenlos</td>
                            </tr>
                            <tr class="bestellung-item__bold">
                                <td></td>
                                <td class="td-artikle"><b>Zahlungsmethode</b></td>
                                <td class="td-summe">TWINT</td>
                            </tr>
                            <tr class="bestellung-item__bold">
                                <td></td>
                                <td class="td-artikle"><b>Totalbetrag</b></td>
                                <td class="td-summe"><b>CHF 50.00</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="erneut-box">
                    <a href="#" class="button-dark button-erneut">
                        Erneut bestellen
                    </a>
                </div>

                <div class="bestellung-adresse">
                    <div class="adresse-box">
                        <div class="adresse-title">
                            Rechnungsadresse
                        </div>
                        <div class="adresse-item">
                            John Doe <br>
                            Musterstrasse 1 <br>
                            8000 Zürich <br><br>
                            +78 000 00 00
                        </div>
                    </div>

                    <div class="adresse-box">
                        <div class="adresse-title">
                            Lieferadresse
                        </div>
                        <div class="adresse-item">
                            John Doe <br>
                            Musterstrasse 1 <br>
                            8000 Zürich <br>
                            +78 000 00 00
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