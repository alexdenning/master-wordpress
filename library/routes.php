<?php

// Home
Flight::route( '/', function() {

    Flight::render(
        'home.php'
    );

} );


// Thanks
Flight::route( '/thanks/', function() {

    Flight::render(
        'message.php'
    );

} );
