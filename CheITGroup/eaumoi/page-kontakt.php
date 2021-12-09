<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kontakt Magazin eaumoi</title>

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="css/amy-slider.css">
    <link rel="stylesheet" href="css/styles.css">

    <script>
        const assetsPath = '';
    </script>
</head>
<body class="page-kontakt">

<?php include 'header.php'; ?>

<section class="kontakt-freude">
    <div class="container-xl">
        <div class="freude-body">
            <div class="eine-freude">
                <div class="wasser-title freude-titl">
                    <span class="wasser-title__italic">Post für uns?</span> <br>
                    Eine Freude!
                </div>
                <div class="freude-entry">
                    Wir lieben Anfragen, Aufgaben und Anregungen. Wie dürfen wir dir helfen?
                </div>
                <div class="freude-cincin">
                    <div class="freude-cincin__title">
                        Cin Cin
                    </div>
                    <div class="freude-cincin__entry">
                        die Innovationsplattform <br>
                        der Rivella AG <br>
                        Neue Industriestrasse 10 <br>
                        4852 Rothrist <br>
                        shop@eau-et-moi.ch
                    </div>
                </div>
                <div class="freude-folge">
                    <div class="freude-folge__title">
                        Folge deinem Durst
                    </div>
                    <ul class="gutten-social">
                        <li><a class="social social-facebook" href="#"></a></li>
                        <li><a class="social social-instagram" href="#"></a></li>
                        <li><a class="social social-linkedin" href="#"></a></li>
                    </ul>
                </div>
            </div>

            <div class="freude-form">
                <form action="#" class="freude-kontaktform">
                    <div class="freude-person">
                        <div class="login-bleiben">
                            <input type="radio" class="login-bleiben__radio" id="Frau" name="person">
                            <label for="Frau">Frau</label>
                        </div>
                        <div class="login-bleiben">
                            <input type="radio" class="login-bleiben__radio" id="Herr" name="person">
                            <label for="Herr">Herr</label>
                        </div>
                        <div class="login-bleiben">
                            <input type="radio" class="login-bleiben__radio" id="Divers" name="person">
                            <label for="Divers">Divers</label>
                        </div>
                    </div>
                    <div class="freude-formtype col-2">
                        <div class="col">
                            <div class="freude-forminput">
                                <input class="freude-input rq-vorname" id="Vorname" type="text" name="Vorname">
                                <label class="freude-label" for="Vorname">Vorname*</label>

                                <div class="freude-formerror">
                                    Bitte prüfe deine Eingabe
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="freude-forminput">
                                <input class="freude-input rq-name" id="Name" type="text" name="Name">
                                <label class="freude-label" for="Name">Name*</label>
                                <div class="freude-formerror">
                                    Bitte prüfe deine Eingabe
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="freude-formtype">
                        <div class="freude-forminput">
                            <input class="freude-input" id="Firma" type="text" name="Firma">
                            <label class="freude-label" for="Firma">Firma</label>
                            <div class="freude-formerror">
                                Bitte prüfe deine Eingabe
                            </div>
                        </div>
                    </div>
                    <div class="freude-formtype col-2">
                        <div class="col">
                            <div class="freude-forminput">
                                <input class="freude-input" id="Telefonnummer" type="tel" name="Telefonnummer">
                                <label class="freude-label" for="Telefonnummer">Telefonnummer</label>
                                <div class="freude-formerror">
                                    Bitte prüfe deine Eingabe
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="freude-forminput">
                                <input class="freude-input rq-email" id="Email" type="email" name="Email">
                                <label class="freude-label" for="Email">Email*</label>
                                <div class="freude-formerror">
                                    Bitte prüfe deine Eingabe
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="freude-formtype">
                        <div class="freude-forminput">
                            <textarea class="freude-input rq-nachricht" rows="1" name="Nachricht" id="Nachricht"></textarea>
                            <label class="freude-label" for="Nachricht">Deine Nachricht*</label>
                            <div class="freude-formerror">
                                Bitte prüfe deine Eingabe
                            </div>
                        </div>
                    </div>

                    <div class="freude-button">
                        <button type="submit" class="button-link">senden</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>

</body>
</html>

