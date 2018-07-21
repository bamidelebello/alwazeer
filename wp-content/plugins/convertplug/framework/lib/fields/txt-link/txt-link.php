<?php
/**
 * Prohibit direct script loading.
 *
 * @package Convert_Plus.
 */

// Add new input type "txt-link".
if ( function_exists( 'smile_add_input_type' ) ) {
	smile_add_input_type( 'txt-link', 'txt_link_settings_field' );
}

/**
 * Function Name:txt_link_settings_field Function to handle new input type "txt-link".
 *
 * @param  string $name     settings provided when using the input type "txt_link".
 * @param  string $settings holds the default / updated value.
 * @param  string $value    html output generated by the function.
 * @return string           html output generated by the function.
 */
function txt_link_settings_field( $name, $settings, $value ) {
	$input_name = $name;
	$link       = isset( $settings['link'] ) ? $settings['link'] : '';
	$class      = isset( $settings['class'] ) ? $settings['class'] : '';
	$output     = '<div class="link-title ' . $class . '">';
	$output    .= $link;
	$output    .= '</div>';
	return $output;
}