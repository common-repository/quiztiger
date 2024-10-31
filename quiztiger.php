<?

/*
Plugin Name: QuizTiger
Description: Add a quiz from QuizTiger.com using a shortcode.
Version:     1.0
Author:      Anders Petersson / QuizTiger.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

// USAGE: [quiztiger id="QUIZID"]

function quiztigertag_func( $atts ) {
  $html = "<iframe src='https://www.quiztiger.com/iframe/{$atts['id']}/' width='100%' frameborder='0' scrolling='no'></iframe>";
  $html = $html . "<script type='text/javascript' src='https://cdn.quizme.se/iframe.js'></script>";
  return $html;
}

add_shortcode( 'quiztiger', 'quiztigertag_func' );

?>
