<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Du har en ny besked fra en bruger',
    'email_message' => 'Du har en ny besked fra Gaming4Life Hjemmesiden',
    'success_redirect' => '',
    'email' => array(
        'from' => 'from Nicepage-Gaming4Life @Gaming4Life.com',
        'to' => 'Gaming4life.s@yahoo.com'
    ),
    'fields' => array(
        'name' => array(
            'order' => 1,
            'type' => 'string',
            'label' => 'Name',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Name\' is required.'
            )
        ),
        'email' => array(
            'order' => 2,
            'type' => 'email',
            'label' => 'Email',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Email\' is required.'
            )
        ),
        'message' => array(
            'order' => 3,
            'type' => 'string',
            'label' => 'Message',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Message\' is required.'
            )
        ),
        'agree' => array(
            'order' => 4,
            'type' => 'checkbox',
            'label' => 'Jeg acceptere hjemmesiden Gaming4Life og tilhørende siders Vilkår og Betingelser',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Jeg acceptere hjemmesiden Gaming4Life og tilhørende siders Vilkår og Betingelser\' is required.'
            )
        ),
    )
);

$processor = new FormProcessor();
$processor->process($form);

?>