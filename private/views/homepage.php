<?php //foreach ($users as $user):?>
<!--    --><?php //echo $user['voornaam']?>
<?php //endforeach;?>

<?php $this->layout('website');?>

<div class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h1 class="font-weight-light">Wij hebben een creatieve oplossing</h1>
                <p class="lead">Nu nog het probleem..</p>
            </div>
        </div>
    </div>
</div>

<section class="container pt-5 pb-3">
    <div class="row pb-5">
        <div class="col-12 text-center">
            <h1>Let's make creative spark!</h1>
        </div>
    </div>

    <div class="row py-2">
        <div class="col-lg-4 pb-3">
            <div class="card">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1496167117681-944f702be1f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1489&q=80" alt="Card image cap">
                <div class="card-img-overlay d-flex">
                    <a href="#" class="btn btn-primary mt-auto mx-auto px-5 py-2">Lees Meer</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 pb-3">
            <div class="card">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1496167117681-944f702be1f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1489&q=80" alt="Card image cap">
                <div class="card-img-overlay d-flex">
                    <a href="#" class="btn btn-primary mt-auto mx-auto px-5 py-2">Lees Meer</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 pb-3">
            <div class="card">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1496167117681-944f702be1f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1489&q=80" alt="Card image cap">
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
                    <img class="card-img w-50 waarde-image" src="<?php echo site_url('/images/noun_dynamic_2048497.svg') ?>" alt="Card image cap">
                    <div class="card-img-bottom text-center pt-2">
                        <h3>Dynamisch</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card waarde align-items-center my-auto">
                    <img class="card-img w-50 waarde-image" src="<?php echo site_url('/images/noun_connect_1737835.svg') ?>" alt="Card image cap">
                    <div class="card-img-bottom text-center pt-2">
                        <h3>Verbindend</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card waarde align-items-center my-auto">
                    <img class="card-img w-50 waarde-image" src="<?php echo site_url('/images/noun_explode_72135.svg') ?>" alt="Card image cap">
                    <div class="card-img-bottom text-center pt-2">
                        <h3>Effectief</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="container py-5">
        <div class="row d-flex">
            <div class="col-lg-6 image mx-auto">
                <img src="https://images.unsplash.com/photo-1496167117681-944f702be1f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1489&q=80" height="auto" class="w-100 final-image"/>
            </div>
            <div class="col-lg-6">
                <div class="textbox p-5">
                    <p>Hier komt genoeg tekst om het hele vakje mee op te vullen. Gewoon een laatste pakkende tekst. Ohja f*** er moet ook nog een knop in..</p>
                    <div class="d-flex">
                        <a href="#" class="btn btn-primary textbox-btn ml-auto mt-4 px-5 py-2">Lees Meer</a>
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="container py-5">
    <div class="row d-flex">
        <div class="mx-auto">
            <div class="col-md-12 d-flex">
                <h2>Geïnteresseerd? Bekijk dan onze diensten</h2>
                <a href="<?php echo url( 'diensten' ) ?>" class="btn btn-primary ml-3 px-5 py-2">Diensten</a>
            </div>
        </div>
    </div>
</section>

