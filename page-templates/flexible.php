<?php /* Template Name: Flexible */

use \Timber\Timber;

get_header();

$data = Timber::get_context();
$data['post'] = \LeanNs\Patterns::get_post();
Timber::render( 'templates/page-flexible.twig', $data );

get_footer();