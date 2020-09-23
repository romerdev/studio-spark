<?php //foreach ($users as $user):?>
<!--    --><?php //echo $user['voornaam']?>
<?php //endforeach;?>

<?php $this->layout('website');?>

<img class="masthead" src="<?php echo site_url('/images/mast/mast-image-diensten.jpg') ?>" alt="Card image cap">

<section class="container">
    <div class="mt-3">
        <h1>Diensten</h1>
        <div class="indicator">
            <a class="nav-indicator-link" href="<?php echo url( 'home' ) ?>">Studio Spark</a>
            &nbsp; - &nbsp;
            <span class="nav-indicator-active">Diensten</span>
        </div>
    </div>
</section>
<hr>

<section class="container">
    <div class="row">
        <div class="col-lg-12 py-3">
            <p>Hier komt alle content over onze diensten.</p>
        </div>
    </div>
</section>