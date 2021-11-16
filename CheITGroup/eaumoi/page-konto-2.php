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
                <div class="bestellung-box">
                    <table class="bestelldetails-table">
                        <thead>
                            <tr>
                                <th class="td-bestellung">Bestellung</th>
                                <th class="td-datum">Datum</th>
                                <th class="td-status">Status</th>
                                <th class="td-summe">Summe</th>
                                <th class="td-details">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="td-bestellung"><a href="#">#EM4198</a></td>
                                <td class="td-datum">10. August 2021</td>
                                <td class="td-status">In Bearbeitung</td>
                                <td class="td-summe"><a href="#">CHF 25.00</a> für 4 Artikel</td>
                                <td class="td-details"><a href="page-count-2-1.php" class="button-dark button-detail">Anzeigen</a></td>
                            </tr>
                            <tr>
                                <td class="td-bestellung"><a href="#">#EM4198</a></td>
                                <td class="td-datum">10. August 2021</td>
                                <td class="td-status">Abgeschlossen</td>
                                <td class="td-summe"><a href="#">CHF 25.00</a> für 4 Artikel</td>
                                <td class="td-details"><a href="page-count-2-1.php" class="button-dark button-detail">Anzeigen</a></td>
                            </tr>
                            <tr>
                                <td class="td-bestellung"><a href="#">#EM4198</a></td>
                                <td class="td-datum">10. August 2021</td>
                                <td class="td-status">Abgeschlossen</td>
                                <td class="td-summe"><a href="#">CHF 25.00</a> für 4 Artikel</td>
                                <td class="td-details"><a href="page-count-2-1.php" class="button-dark button-detail">Anzeigen</a></td>
                            </tr>
                            <tr>
                                <td class="td-bestellung"><a href="#">#EM4198</a></td>
                                <td class="td-datum">10. August 2021</td>
                                <td class="td-status">Abgeschlossen</td>
                                <td class="td-summe"><a href="#">CHF 25.00</a> für 4 Artikel</td>
                                <td class="td-details"><a href="page-count-2-1.php" class="button-dark button-detail">Anzeigen</a></td>
                            </tr>
                            <tr>
                                <td class="td-bestellung"><a href="#">#EM4198</a></td>
                                <td class="td-datum">10. August 2021</td>
                                <td class="td-status">Abgeschlossen</td>
                                <td class="td-summe"><a href="#">CHF 25.00</a> für 4 Artikel</td>
                                <td class="td-details"><a href="page-count-2-1.php" class="button-dark button-detail">Anzeigen</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>