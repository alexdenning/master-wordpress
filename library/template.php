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
