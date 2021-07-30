<?php
function customizer_repeater_register( $wp_customize ) {

	require_once( get_template_directory().'/customizer-repeater/class/customizer-repeater-control.php' );

	$wp_customize->add_setting( 'customizer_repeater_example', array(
		'sanitize_callback' => 'customizer_repeater_sanitize'
	 ));
	 $wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'customizer_repeater_example', array(
   'label'   => esc_html__('v','customizer-repeater'),
   'section' => 'setting_services',
   'priority' => 1,
   'customizer_repeater_image_control' => false,
   'customizer_repeater_icon_control' => true,
   'customizer_repeater_title_control' => true,
   'customizer_repeater_subtitle_control' => false,
   'customizer_repeater_text_control' => true,
   'customizer_repeater_link_control' => false,
   'customizer_repeater_shortcode_control' => false,
   'customizer_repeater_repeater_control' => false
) ) );


}
add_action( 'customize_register', 'customizer_repeater_register' );

function customizer_repeater_sanitize($input){

	
	$input_decoded = json_decode($input,true);

	if(!empty($input_decoded)) {
		foreach ($input_decoded as $boxk => $box ){
			foreach ($box as $key => $value){

					$input_decoded[$boxk][$key] = wp_kses_post( force_balance_tags( $value ) );

			}
		}
		return json_encode($input_decoded);
	}
	return $input;
}
