<?php $this->layout('website');?>

<!--<img class="masthead" src="--><?php //echo site_url('/images/mast/mast-image-diensten.jpg') ?><!--" alt="Card image cap">-->

<video class="masthead" autoplay muted loop controls>
    <source src="<?php echo site_url('/images/promo.mp4') ?>" type="video/mp4">
</video>

<div class="background-home">

<section class="container pt-5 pb-3">
    <div class="row pb-3">
        <div class="col-12 text-center">
            <h1>Let's make creativity spark!</h1>
            <h3><small class="text-muted">Zie hier ons laatste werk</small></h3>
        </div>
    </div>

    <div class="row py-2">
        <div class="col-lg-4 pb-3">
            <div class="card">
                <div class="card-header text-center">Wireframe</div>
                <img class="card-img-top" src="<?php echo site_url('/images/portfolio/Portfolio_Beau.jpg') ?>" alt="Card image cap">
                <div class="card-img-overlay d-flex">
                    <a href="#" class="btn btn-primary mt-auto mx-auto px-5 py-2">Lees Meer</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 pb-3">
            <div class="card">
                <div class="card-header text-center">Gallery</div>
                <img class="card-img-top" src="<?php echo site_url('/images/portfolio/Portfolio_Romer.jpg') ?>" alt="Card image cap">
                <div class="card-img-overlay d-flex">
                    <a href="#" class="btn btn-primary mt-auto mx-auto px-5 py-2">Lees Meer</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 pb-3">
            <div class="card">
                <div class="card-header text-center">Trots</div>
                <img class="card-img-top" src="<?php echo site_url('/images/portfolio/Portfolio_Luc.png') ?>" alt="Card image cap">
                <div class="card-img-overlay d-flex">
                    <a href="#" class="btn btn-primary mt-auto mx-auto px-5 py-2">Lees Meer</a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="lighter-background">
    <section class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card waarde align-items-center my-auto">
                    <img class="card-img w-50 pb-2" src="<?php echo site_url('/images/dynamic.svg') ?>" alt="Card image cap">
                    <div class="card-img-bottom text-center py-2">
                        <h3>Dynamisch</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card waarde align-items-center my-auto">
                    <img class="card-img w-50 pb-2" src="<?php echo site_url('/images/connect.svg') ?>" alt="Card image cap">
                    <div class="card-img-bottom text-center py-2">
                        <h3>Verbindend</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card waarde align-items-center my-auto">
                    <img class="card-img w-50 pb-2" src="<?php echo site_url('/images/effective.svg') ?>" alt="Card image cap">
                    <div class="card-img-bottom text-center py-2">
                        <h3>Effectief</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="container pt-5">
        <div class="row d-flex">
            <div class="col-lg-6 image mx-auto">
                <img src="<?php echo site_url('/images/home/s2-1.jpg') ?>" height="auto" class="w-100 final-image"/>
            </div>
            <div class="col-lg-6">
                <div class="textbox p-5">
                    <p class="reset">Benieuwd wat we voor jou kunnen betekenen? Kijk dan snel op onze diensten pagina om te zien wat de mogelijkheden zijn.</p>
                    <div class="d-flex">
                        <a href="<?php echo url( 'diensten' ) ?>" class="btn btn-primary ml-auto mt-4 px-5 py-2" id="textbox-btn">Diensten</a>
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="container py-5" id="interesse-container">
    <div class="row d-flex">
        <div class="mx-auto">
            <div class="col-md-12 text-center" id="interesse">
                <h2>Geïnteresseerd? Stuur ons een bericht!</h2>
                <div>
                    <a href="<?php echo url( 'contact.show' ) ?>" class="btn btn-primary ml-3 px-5 py-2">Neem contact op</a>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
