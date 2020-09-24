<?php //foreach ($users as $user):?>
<!--    --><?php //echo $user['voornaam']?>
<?php //endforeach;?>

<?php $this->layout('website');?>

<section class="container">
    <div class="mt-3">
        <h1>Portfolio</h1>
        <div class="indicator">
            <a class="nav-indicator-link" href="<?php echo url( 'home' ) ?>">Studio Spark</a>
            &nbsp; - &nbsp;
            <span class="nav-indicator-active">Portfolio</span>
        </div>
    </div>
</section>
<hr>

<section class="container">
<div class="row py-4">
    <div class="col-12 text-center">
        <h3>Klik op een afbeelding voor meer informatie.</h3>
    </div>
</div>
</section>

<section class="container">
    <div class="row py-2">
        <div class="col-lg-6 pb-3 w-100">
            <div class="card">
                <img class="card-img-top portfolio-image" src="<?php echo site_url('/images/portfolio/Portfolio_Beau.jpg') ?>">
            </div>
        </div>
        <div class="col-lg-6 pb-3">
            <div class="card">
                <img class="card-img-top portfolio-image" src="<?php echo site_url('/images/portfolio/Portfolio_Romer.jpg') ?>">
            </div>
        </div>

        <div class="col-lg-6 pb-3">
            <div class="card">
                <img class="card-img-top portfolio-image" src="<?php echo site_url('/images/portfolio/Portfolio_Bram.png') ?>">
            </div>
        </div>
        <div class="col-lg-6 pb-3">
            <div class="card">
                <img class="card-img-top portfolio-image" src="<?php echo site_url('/images/portfolio/Portfolio_Luc.png') ?>">
            </div>
        </div>
    </div>
</section>