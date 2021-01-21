<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="De centrale pagina van Studio Drift om de kunstwerken bij jou thuis te ervaren.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.min.css" integrity="sha512-8M8By+q+SldLyFJbybaHoAPD6g07xyOcscIOQEypDzBS+sTde5d6mlK2ANIZPnSyxZUqJfCNuaIvjBUi8/RS0w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo site_url( '/css/drift.css' ) ?>">
    <title>Studio Drift</title>
</head>
<body>

<div id="fullPage">

    <div class="section s1">
        <div class="row title-wrapper m-0">
            <div class="col-lg-12 d-flex">
                <h1 class="m-auto">STUDIO DRIFT</h1>
            </div>
        </div>
        <div class="container">
            <div class="row content-wrapper-top">
                <div class="col-lg-7 d-flex">
                    <div class="m-auto iframe-container">
                        <iframe src="https://www.youtube.com/embed/RUl5lv9FT5Q?rel=0" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-5 d-flex responsive-padding">
                    <div class="m-auto">
                        <h2 class="mb-4">Thuismuseum</h2>
                        <p class="mb-4">
                            Helaas is het wegens de omstandigheden waarin we zitten niet mogelijk om onze kunstwerken fysiek te bezoeken. Haal daarom het kunstwerk bij jou in huis!
                            <br>
                            Reserveer de goodiebox of download de AR app!
                        </p>
                        <div class="d-flex">
                            <a href="#goodiebox"><button class="btn button-primary" id="buttonBox">GOODIEBOX</button></a>
                            <a href="#app" style="padding-left: 15px;"><button class="btn button-secondary" id="buttonBox">APP</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section s2 scrollelement1" style="background-color: rgba(0, 0, 0, 0.02);">
        <div class="container">
            <div class="row column-reverse">
                <div class="col-lg-6 d-flex responsive-padding">
                    <div class="my-auto form-wrapper" style="width: 80%;">
                        <h2 class="mb-1">Reserveer een Goodiebag</h2>
                        <small>Maximaal 1 p.p. - <b>€15,00</b></small>
                        <form class="mt-4">
                            <div class="row row-reverse">
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="firstname">Voornaam</label>
                                        <input type="name" class="form-control" id="firstname" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="lastname">Achternaam</label>
                                        <input type="lastname" class="form-control" id="lastname" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label for="address">Adres</label>
                                        <input type="text" class="form-control" id="address" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-reverse">
                                <div class="col-sm-6 mb-3 ">
                                    <div class="form-group">
                                        <label for="country">Land</label>
                                        <select class="form-control" id="country">
                                            <option>Nederland</option>
                                            <option>België</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="state">Provincie</label>
                                        <input type="text" class="form-control" id="state" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="zip">Postcode</label>
                                        <input type="text" class="form-control" id="zip" required>
                                    </div>
                                </div>
                            </div>
                            <small class="text-danger">Helaas is het momenteel is het niet mogelijk om te reserveren.</small>
                            <br><br>
                            <button type="submit" class="btn button-primary" disabled>RESERVEER</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <video class="goodiebag" data-autoplay>
                        <source src="<?php echo site_url('/images/studiodrift/goodiebox.mp4') ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

            </div>
        </div>
    </div>

    <div class="section s3 scrollelement2">
        <div class="container">
            <div class="row content-wrapper">
                <div class="col-lg-5 d-flex">
                    <div class="m-auto">
                        <h2 class="mb-4">AR App</h2>
                        <p class="mb-4">Download hier alvast de app, in jouw goodiebox zit straks een QR-Code waarmee je de Studio Drift Experience in de app kan openen.</p>
                        <div class="d-flex">
                            <img class="download" src="<?php echo site_url('/images/studiodrift/appstore.svg') ?>" alt="Download in de Appstore">
                            <img class="download" src="<?php echo site_url('/images/studiodrift/playstore.png') ?>" alt="Download in de Play Store" style="padding-left: 15px;">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 d-flex responsive-padding">
                    <div class="mx-auto mt-auto">
                        <img style="max-width: 100%;" src="<?php echo site_url('/images/studiodrift/phone.png') ?>" alt="App Voorbeeld">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section s3 fp-auto-height">
        <footer class="bg-light text-center text-lg-start">
            <div class="text-center p-3" style="background-color: black; color: white;">
                © 2021 Copyright:
                <a style="color: white" href="https://studiospark.net/">studiospark.net</a>
            </div>
        </footer>
    </div>


</div>

<script>
    if (screen && screen.width > 991) {
        document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.extensions.min.js" integrity="sha512-pci5WG2+7QnpsinWWpGUd3RgI61fU1bWlQQQegC2mVqwOQC/+Xp0ROGO0AYB6dvoLBYRxwm+t+DWOVRkxmlcdQ==" crossorigin="anonymous"><\/script>');
    }

    if (screen && screen.width < 991) {

        var x = document.getElementsByClassName("scrollelement1")[0];
        x.id="goodiebox"

        var y = document.getElementsByClassName("scrollelement2")[0];
        y.id="app"

        document.getElementsByTagName("video")[0].setAttribute("autoplay", true);

    }

</script>

<script>

    new fullpage('#fullPage',  {
        autoScrolling: true,
        navigation: true,
        anchors: ['home', 'goodiebox', 'app', 'copyright']
    });

</script>

</body>
</html>