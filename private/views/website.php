<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Studio Spark</title>
    <link rel="icon" href="<?php echo site_url('/images/spark-logo-small.svg') ?>" type="image" sizes="64x64">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo site_url( '/css/style.css' ) ?>" media="all">
	<?php if ( $this->section( 'css' ) ): ?>
		<?php echo $this->section( 'css' ) ?>
	<?php endif; ?>
</head>

<body>
        <?php if ( $this->section( 'navigation' ) ): ?>
            <?php echo $this->section( 'navigation' ) ?>
        <?php else: ?>
            <?php echo $this->fetch( '_navigation' ) ?>
        <?php endif ?>

    <main>
        <section class="content">
			<?php echo $this->section( 'content' ) ?>
        </section>
    </main>

    <footer class="page-footer font-small mdb-color pt-4">

        <div class="container text-center text-md-left">

            <div class="row text-center text-md-left mt-3 pb-3">

                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Spark</h6>
                    <p>Wij denken graag met jou mee voor een creatieve oplossing op jouw media-probleem. Van visitekaartjes tot een volledige website. Neem snel contact met ons op voor een offerte.</p>
                </div>

                <hr class="w-100 clearfix d-md-none">

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Navigatie</h6>
                    <p>
                        <a href="<?php echo url( 'home' ) ?>">Home</a>
                    </p>
                    <p>
                        <a href="<?php echo url( 'about' ) ?>">Over Ons</a>
                    </p>
                    <p>
                        <a href="<?php echo url( 'diensten' ) ?>">Diensten</a>
                    </p>
                    <p>
                        <a href="<?php echo url( 'portfolio' ) ?>">Portfolio</a>
                    </p>
                    <p>
                        <a href="<?php echo url( 'contact.show' ) ?>">Contact</a>
                    </p>
                </div>

                <hr class="w-100 clearfix d-md-none">

                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-4">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                    <p>
                        <i class="fas fa-home mr-3"></i> Contactweg 36, 1014 AN, Amsterdam</p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> info@studiospark.net</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> 020 850 9500</p>
                </div>

            </div>

            <hr>

            <div class="row d-flex align-items-center">

                <div class="col-md-7 col-lg-8">

                    <p class="text-center text-md-left">© 2020 Copyright:
                        <a href="<?php echo url( 'home' ) ?>">
                            <strong> studiospark.net</strong>
                        </a>
                    </p>

                </div>

                <div class="col-md-5 col-lg-4 ml-lg-0">

                    <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>

    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script>
        // add padding top to show content behind navbar
        $('body').css('padding-top', $('.navbar').outerHeight() + 'px')

        // detect scroll top or down
        if ($('.smart-scroll').length > 0) { // check if element exists
            var last_scroll_top = 0;
            $(window).on('scroll', function() {
                scroll_top = $(this).scrollTop();
                if(scroll_top < last_scroll_top) {
                    $('.smart-scroll').removeClass('scrolled-down').addClass('scrolled-up');
                }
                else {
                    $('.smart-scroll').removeClass('scrolled-up').addClass('scrolled-down');
                }
                last_scroll_top = scroll_top;
            });
        }
    </script>
</body>
</html>

