<?php $this->layout('email_layout', ['message' => $message]); ?>

<p>
    Jo man! Er is weer een nieuw bericht binnengekomen via de Spark website. Kijk maar of je er zelf uitkomt, anders kan je de rest natuurlijk roepen.
</p>

<p>
    <strong>Naam:</strong> <?php echo $from_name?><br />
    <strong>Emailadres:</strong> <?php echo $from_email?><br />
    <strong>Bericht:</strong><br />
    <?php echo $contact_message?><br />
</p>