<?php

add_action( 'wp_ajax_send_message', 'send_message' );
add_action( 'wp_ajax_nopriv_send_message', 'send_message' );

function send_message()
{
    $userName = $_POST['userName'];
    $userSecondName = $_POST['userSecondName'];
    $userMail = $_POST['userMail'];
    $userPhone = $_POST['userPhone'];
    $userMessage = $_POST['userMessage'];
    $userSubject = $_POST['userSubject'];
    $userDisponibility = $_POST['userDisponibility'];
    $donotreply = $_POST['donotreply'];

    if($userName && $userSecondName && $userMail && $userPhone && $userSubject && $userDisponibility && !$donotreply){

        $messageImport = 'Nom : ' . $userName . '<br/>';
        $messageImport .= 'Prénom : ' . $userSecondName . '<br/>';
        $messageImport .= 'Mail : ' . $userMail . '<br/>';
        $messageImport .= 'Téléphone : ' . $userPhone . '<br/>';
        $messageImport .= 'Sujet : ' . $userSubject . '<br/>';
        $messageImport .= 'Disponibilités : ' . $userDisponibility . '<br/>';
        $messageImport .= 'Informations complémentaires : ' . $userMessage;

        $newPost = array(
            'post_title' => $userName . ' | ' . $userSecondName,
            'post_type' => 'appointment',
            'post_status' => 'publish'
        );
        $newPostImported = wp_insert_post($newPost);

        update_field( 'post_appointment_name', $userName, $newPostImported );
        update_field( 'post_appointment_sub_name', $userSecondName, $newPostImported );
        update_field( 'post_appointment_mail', $userMail, $newPostImported );
        update_field( 'post_appointment_phone', $userPhone, $newPostImported );
        update_field( 'post_appointment_subject', $userSubject, $newPostImported );
        update_field( 'post_appointment_disponibility', $userDisponibility, $newPostImported );
        update_field( 'post_appointment_informations', $userMessage, $newPostImported );

        $to = get_field('params_mail_address', 'option');
        $subject = $userName . ' ' . $userSecondName . ' vous a envoyé(e) un message';



        $headers = array('Content-Type: text/html; charset=UTF-8');

        wp_mail( $to, $subject, $messageImport, $headers);

        $returnDatas['message'] = 'Votre message a bien été envoyé';
        $returnDatas['code'] = 200;
    }else{
        $returnDatas['message'] = 'Une erreur est survenue lors de l’envoi du message';
        $returnDatas['code'] = 300;
    }

    wp_send_json( $returnDatas );
}
