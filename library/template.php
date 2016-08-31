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
