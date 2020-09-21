<?php

namespace Website\Controllers;

/**
 * Class ContactController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class ContactController {

	public function showContactForm() {

		$template_engine = get_template_engine();
        echo $template_engine->render('contactpage');

	}

    public function handleContactForm() {

        $from_name = $_POST['from_name'];
        $from_email = filter_var($_POST['from_email'], FILTER_VALIDATE_EMAIL);
        $contact_message = $_POST['contact_message'];

        if($from_email === false){
            echo "Foutief emailadres;";
            exit;
        }
//
//        $mailer = getSwiftMailer();

    }

}

