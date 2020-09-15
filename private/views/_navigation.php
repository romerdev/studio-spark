<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">SPARK</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="white-color"><i class="fas fa-bars" style="font-size:24px; color: white;"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url( 'about' ) ?>"<?php if ( current_route_is( 'about' ) ): ?> class="active"<?php endif ?>>Over Ons</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url( 'diensten' ) ?>"<?php if ( current_route_is( 'diensten' ) ): ?> class="active"<?php endif ?>>Diensten</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url( 'portfolio' ) ?>"<?php if ( current_route_is( 'portfolio' ) ): ?> class="active"<?php endif ?>>Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url( 'contact' ) ?>"<?php if ( current_route_is( 'contact' ) ): ?> class="active"<?php endif ?>>Contact</a>
                </li>
            </ul>
        </div>
</nav>