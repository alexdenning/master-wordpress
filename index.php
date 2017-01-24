<?php

define( 'DECACHE_CSS', 12 );

require 'flight/Flight.php';
require 'library/routes.php';
require 'library/template.php';

$environment = 'prod';

// Enable debug on localhost.
if ( 'localhost' === $_SERVER[ 'HTTP_HOST' ] ) {
	error_reporting( -1 );
	ini_set( 'display_errors', 'On' );
	$environment = 'dev';
}

Flight::start();
