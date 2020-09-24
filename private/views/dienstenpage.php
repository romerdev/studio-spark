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

<div class="background-diensten">

<section class="container py-5">
    <div class="row d-flex">
        <div class="col-lg-6 image mx-auto">
            <img src="<?php echo site_url('/images/home/s1-1.jpg') ?>" height="auto" class="w-100 diensten-image"/>
        </div>
        <div class="col-lg-6">
            <div class="diensten-textbox-blue p-4">
                <h2>Digitaal Design</h2>
                <div class="d-flex">
                    <a href="<?php echo url( 'diensten.digitaal' ) ?>" class="btn btn-primary textbox-btn ml-auto mt-4 px-5 py-2">Lees Verder</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex pt-5">
        <div class="col-lg-6 image mx-auto">
            <img src="<?php echo site_url('/images/home/s2-2.jpg') ?>" height="auto" class="w-100 diensten-image"/>
        </div>
        <div class="col-lg-6">
            <div class="diensten-textbox-green p-4">
                <h2>Analoog Design</h2>
                <div class="d-flex">
                    <a href="<?php echo url( 'diensten.analoog' ) ?>" class="btn btn-primary textbox-btn ml-auto mt-4 px-5 py-2">Lees Verder</a>
                </div>
            </div>
        </div>
    </div>
</section>

</div>