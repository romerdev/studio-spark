<?php $this->layout('website');?>

<section class="container pt-5">
    <div class="row pb-5">
        <div class="col-12">
            <h1>Contact</h1>
        </div>
    </div>
</section>

<section class="container pb-3">
    <div class="row py-2x">
        <div class="col-lg-6">
            <h4>Adres</h4>
            <p>Contactweg 36, 1014 AN, Amsterdam</p>
            <h4>Mail</h4>
            <p>info@spark.nl</p>
            <h4>Telefoon</h4>
            <p>020 850 9500</p>
            <div>
                <iframe id="map" src="https://maps.google.com/maps?q=Contactweg%2036&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>

        <div class="col-lg-6">
            <form action="<?php echo url('contact.handle')?>" method="POST">
                <div class="form-group">
                    <label for="">Email address</label>
                    <input type="email" name="from_email" class="form-control" id="form-input" required placeholder="email@voorbeeld.nl">
                </div>
                <div class="form-group">
                    <label for="">Naam</label>
                    <input type="text" name="from_name" class="form-control" id="form-input" required placeholder="Jan Jansen">
                </div>
                <div class="form-group">
                    <label for="">Jouw bericht</label>
                    <textarea class="form-control" name="contact_message" id="form-area" required rows="6"></textarea>
                </div>
                <button type="submit" class="btn btn-primary px-5 py-2">Verzenden</button>
            </form>
        </div>
    </div>
</section>