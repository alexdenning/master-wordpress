<?php

// Home
Flight::route( '/', function() {

    $template = 'splash.php';

    $date_now = time();
    $date_start = strtotime( '28th September 2016 4pm' );
    $date_end = strtotime( '30th September 2016 11pm' );

    if ( $date_now > $date_start && $date_now < $date_end ) {
        $template = 'preorder.php';
    }

    Flight::render(
        $template
    );

} );


// Nearly Done
Flight::route( '/nearly-done/', function() {

    Flight::render(
        'nearly-done.php'
    );

} );


// Thank you
Flight::route( '/thank-you/', function() {

    Flight::render(
        'thank-you.php'
    );

} );


// Preorder
Flight::route( '/preorder/', function() {

    Flight::render(
        'preorder.php'
    );

} );

// Terms and Conditions.
Flight::route( '/terms-and-conditions/', function() {

    Flight::render(
        'terms.php'
    );

} );


// Splash screen.
Flight::route( '/splash/', function() {

    Flight::render(
        'splash.php'
    );

} );


