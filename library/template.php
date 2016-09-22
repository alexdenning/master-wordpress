<?php
/**
 * Set or display the site title
 *
 * @param string [$new_title       = ''] If set changes the title, if empty the site title is output
 */
function site_title( $new_title = '' ) {

    if ( ! empty( $new_title ) ) {

        Flight::set( 'site.title', $new_title );

    } else {

        echo Flight::get( 'site.title' );

    }

}


/**
 * Return the css path for the specified file
 *
 * @param  string [$path       = ''] CSS url to retrieve
 * @return sring  Completed url
 */
function css_path( $path = '' ) {

    return path( 'assets/css/' . $path . '?d=' . DECACHE_CSS );

}



/**
 * Return the css path for the specified file
 *
 * @param  string [$path       = ''] CSS url to retrieve
 * @return sring  Completed url
 */
function scripts_path( $path = '' ) {

    return path( 'assets/scripts/' . $path . '?d=' . DECACHE_CSS );

}


/**
 * Return the image path for the specified file
 *
 * @param  string [$path       = ''] Image path to retrieve
 * @return string Completed image path
 */
function image_path( $path = '' ) {

    return path( 'assets/images/' . $path . '?d=' . DECACHE_CSS );

}


/**
 * A reusable helper that generates the path with the correct parent location
 *
 * @param  string [$path       = ''] Path value to get complete url for
 * @return string Completed url
 */
function path( $path = '' ) {

    $path = ltrim( $path, '/' );

    return get_base() . '/' . $path;

}


/**
 * Get the base directory for the site
 *
 * by default the Flight request object returns a / for site root and no / for directories - so this keeps things consistent
 * @return string Completed url
 */
function get_base() {

    return rtrim( Flight::request()->base, '/' );

}


/**
 * Include a view (as long as it exists)
 *
 * @param string $path      File in the views directory to include
 * @param array  $variables Variables to make accessible to included file
 */
function site_include_view( $path, $variables = array() ) {

    $path = site_view_path( $path );

    if ( file_exists( $path ) ) {

        // if variables are set then make them usable
        if ( ! empty( $variables ) ) {

            extract( $variables );

        }

        // include file
        include( $path );

    }

}


/**
 * Get a file path relative to the view directory
 *
 * @param  string $path File path to retrieve
 * @return string Completed file path
 */
function site_view_path( $path ) {

    return Flight::get( 'flight.views.path' ) . '/' . $path;

}


/**
 * Determine if we are on the specified page.
 *
 * @param  string  $page The url of the page we want to check.
 * @return boolean true if the url is the one specified in page. False otherwise.
 */
function page_is( $page ) {

    return ( $page === Flight::request()->url );

}


/**
 * Output a twitter share link
 *
 * @param string [$message       = ''] Message to display in Twitter share link
 */
function twitter_share_link( $message = '' ) {

    $args = array(
        'text' => $message,
        'url' => 'https://masterwp.co',
        'related' => 'binarymoon,alexdenning',
    );

    $link = 'http://twitter.com/intent/tweet?';

    echo $link . http_build_query( $args, '', '&amp;' );

}


/**
 * Output a facebook share link
 *
 * @param string [$message       = ''] Message to display in Twitter share link
 */
function facebook_share_link( $message = '' ) {

    $args = array(
        'u' => 'https://masterwp.co',
        't' => $message,
    );

    $link = 'http://www.facebook.com/sharer.php?';

    echo $link . http_build_query( $args, '', '&amp;' );

}



// Default site title.
site_title( 'Master WordPress' );
