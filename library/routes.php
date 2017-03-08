<?php

// Home
Flight::route( '/', function() {

	$template = 'weekly.php';

	// $date_now = (int) gmdate( 'U' );
	//
	// // +3 hours for server time offset.
	// $date_start = strtotime( '28th September 2016 6pm GMT', $date_now ); // 3pm GMT
	// $date_end = strtotime( '1st October 2016 2am GMT', $date_now ); // 10pm GMT
	//
	// if ( $date_now > $date_start && $date_now < $date_end ) {
	//     $template = 'preorder.php';
	// }

	Flight::render(
		$template
	);

} );

// Home
Flight::route( '/newsletter/', function() {

	$template = 'weekly.php';

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


// Weekly
Flight::route( '/preorder/', function() {

	Flight::render(
		'weekly.php'
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
