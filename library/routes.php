<?php

// Home
Flight::route( '/', function() {

    Flight::render(
        'home.php'
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


