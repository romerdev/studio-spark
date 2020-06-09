<?php

namespace Website\Controllers;

/**
 * Class WebsiteController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class WebsiteController {

	public function home() {

//	    echo "Welkom op de homepage!";

        $users = getUsers();

		$template_engine = get_template_engine();
		echo $template_engine->render('homepage', ['users' => $users]);

	}

    public function projects() {

        echo "Hier komen mijn projecten!";

    }

    public function contact() {

        echo "Hier komt mijn contact pagina!";

    }

}

