<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo site_url( '/css/style.css' ) ?>" media="all">
	<?php if ( $this->section( 'css' ) ): ?>
		<?php echo $this->section( 'css' ) ?>
	<?php endif; ?>
</head>
<body>
    <nav>
		<?php if ( $this->section( 'navigation' ) ): ?>
			<?php echo $this->section( 'navigation' ) ?>
		<?php else: ?>
			<?php echo $this->fetch( '_navigation' ) ?>
		<?php endif ?>
    </nav>
    <main>
        <section class="content">
			<?php echo $this->section( 'content' ) ?>
        </section>
    </main>

    <footer class="page-footer font-small mdb-color lighten-3 pt-4">

        <div class="container text-center text-md-left">

            <div class="row">

                <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

                    <h5 class="font-weight-bold text-uppercase mb-4">Contact</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p>
                                <i class="fas fa-home mr-3"></i> Contactweg 36, 1014 AN Amsterdam</p>
                        </li>
                        <li>
                            <p>
                                <i class="fas fa-envelope mr-3"></i> info@spark.nl</p>
                        </li>
                        <li>
                            <p>
                                <i class="fas fa-phone mr-3"></i> 020 850 9500</p>
                        </li>
                    </ul>

                </div>

                <hr class="clearfix w-100 d-md-none">

                <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

                    <h5 class="font-weight-bold text-uppercase mb-4">Spark</h5>
                    <p>Dit moet nog opgevuld worden met goeie tekst jwz.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet numquam iure provident voluptate
                        esse
                        quasi, veritatis totam voluptas nostrum.</p>

                </div>

                <hr class="clearfix w-100 d-md-none">

                <div class="col-md-2 col-lg-2 text-center mx-auto my-4 social">

                    <h5 class="font-weight-bold text-uppercase mb-4">Volg ons</h5>

                    <a type="button" class="btn-floating btn-fb">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a type="button" class="btn-floating btn-tw">
                        <i class="fab fa-twitter"></i>
                    </a>

                    <a type="button" class="btn-floating btn-gplus">
                        <i class="fab fa-google-plus-g"></i>
                    </a>

                    <a type="button" class="btn-floating btn-dribbble">
                        <i class="fab fa-dribbble"></i>
                    </a>

                </div>

                <hr class="clearfix w-100 d-md-none">

                <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

                    <h5 class="font-weight-bold text-uppercase mb-4">Nieuwsbrief</h5>

                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <button type="submit" class="btn btn-success ">Submit</button>
                    </form>

                </div>

            </div>

        </div>

        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="#"> spark.nl</a>
        </div>

    </footer>

<?php $this->start( 'javascript' ) ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<?php $this->stop(); ?>
</body>
</html>

