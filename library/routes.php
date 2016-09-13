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

