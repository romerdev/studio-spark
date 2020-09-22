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

	    $errors = [];
	    $success = [];

        $from_name = $_POST['from_name'];
        $from_email = filter_var($_POST['from_email'], FILTER_VALIDATE_EMAIL);
        $contact_message = $_POST['contact_message'];

        if( $from_email === false ) {
            $errors['email'] = 'Geen geldig emailadres ingevuld.';
        }

        if( strlen( $from_name ) <= 0 ) {
            $errors['name'] = 'Dit veld is verplicht!';
        }

        if( strlen( $contact_message ) <= 0 ) {
            $errors['message'] = 'Dit veld is verplicht!';
        }

        if( count( $errors ) === 0 ) {
            $mailer = getSwiftMailer();

            $message = createEmailMessage('28746@ma-web.nl', 'SPARK | Contact Form Response', $from_name, $from_email);

            $template_engine = get_template_engine();

            $data =[
                'message' => $message,
                'from_name' => $from_name,
                'from_email' => $from_email,
                'contact_message' => $contact_message,
            ];

            $html = $template_engine->render('email', $data);

            $message->setBody($html, 'text/html');
            $message->addPart("Bericht van " . $from_name . ': ' . $contact_message, 'text/plain');

            $aantal_verstuurd = $mailer->send( $message );

            $success['send'] = "Bedankt, uw bericht is verzonden.";

            $template_engine = get_template_engine();
            echo $template_engine->render('contactpage', ['success' => $success]);
            exit;

        }

        $template_engine = get_template_engine();
        echo $template_engine->render('contactpage', ['errors' => $errors]);

    }

}

