<?php //foreach ($users as $user):?>
<!--    --><?php //echo $user['voornaam']?>
<?php //endforeach;?>

<?php $this->layout('website');?>

<section class="container">
        <div class="mt-3">
            <h1>Over Ons</h1>
            <div class="indicator">
                <a class="nav-indicator-link" href="<?php echo url( 'home' ) ?>">Studio Spark</a>
                &nbsp; - &nbsp;
                <span class="nav-indicator-active">Over Ons</span>
            </div>
        </div>
</section>
<hr>

<section class="container">
    <div class="row">
        <div class="col-lg-6 py-3">
            <h2>Wie wij zijn</h2>
            <br>
            <p>Wij zijn Studio Spark, een creatief bedrijf en klaar om jouw media-probleem op te lossen.</p>
            <p>Een groep van 2 mediavormgevers en 2 mediadevelopers. Bij elkaar gebracht door het <a href="https://www.ma-web.nl/" target="_blank">Mediacollege Amsterdam</a>. Wat eerst als onbekende tot elkaar begon, werd al snel een waardig team, klaar om het tot uiterste  te gaan.</p>
        </div>
        <div class="col-lg-6 py-3">
            <h2>Onze waarden</h2>
            <br>
            <h5>Dynamisch</h5>
            <p>Toelichting</p>
            <h5>Verbindend</h5>
            <p>Toelichting</p>
            <h5>Effectief</h5>
            <p>Toelichting</p>
        </div>
    </div>
</section>

<section class="container pb-5">
    <div class="row pb-1">
        <div class="col-12">
            <h2>Het Team</h2>
            <br>
            <img class="w-100" src="<?php echo site_url('/images/groep.jpg') ?>" alt="Card image cap">
        </div>
    </div>
</section>