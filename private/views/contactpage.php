<?php //foreach ($users as $user):?>
<!--    --><?php //echo $user['voornaam']?>
<?php //endforeach;?>

<?php $this->layout('website');?>

<section class="container pt-5">
    <div class="row pb-5">
        <div class="col-12">
            <h1>Contact</h1>
        </div>
    </div>
</section>

<section class="container py-3">
    <div class="row py-2x">
        <div class="col-lg-6">
            <h4>Adres</h4>
            <p>Contactweg 36, 1014 AN, Amsterdam</p>
            <h4>Mail</h4>
            <p>info@spark.nl</p>
            <h4>Telefoon</h4>
            <p>020 850 9500</p>
            <div id="map">

            </div>
        </div>

        <div class="col-lg-6">
            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email@voorbeeld.nl">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Naam</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jan Jansen">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Onderwerp</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jouw Onderwerp">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Telefoon</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="06 12345678">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Jouw bericht</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary px-5 py-2">Verzenden</button>
            </form>
        </div>
    </div>
</section>