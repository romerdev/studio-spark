<nav class="navbar smart-scroll navbar-expand-lg navbar-dark py-3">
    <div class="container">
        <a class="navbar-brand" href="<?php echo url( 'home' ) ?>">
            <img src="<?php echo site_url('/images/spark-logo-zwart.svg') ?>" height="20" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="white-color"><i class="fas fa-bars" style="font-size:24px; color: white;"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link pl-4" href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> id="active"<?php endif ?>>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-4" href="<?php echo url( 'about' ) ?>"<?php if ( current_route_is( 'about' ) ): ?> id="active"<?php endif ?>>Over Ons</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-4" href="<?php echo url( 'diensten' ) ?>"<?php if ( current_route_is( 'diensten' ) ): ?> id="active"<?php endif ?>>Diensten</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-4" href="<?php echo url( 'portfolio' ) ?>"<?php if ( current_route_is( 'portfolio' ) ): ?> id="active"<?php endif ?>>Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-4" href="<?php echo url( 'contact.show' ) ?>"<?php if ( current_route_is( 'contact.show' ) ): ?> id="active"<?php endif ?>>Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>