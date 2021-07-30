
<?php 
/*

Template Name: Комнаты
* Template Post Type: post
*/


$room_type=CFS()->get( 'room_type' );
//echo $room_type. '<br/> ';
///
$room_image = CFS()->get( 'room_array_image' );
foreach ( $room_image as $field ) {
    //echo  $field['room_image']. '<br/>';
}
///
$room_price=CFS()->get( 'room_price' );
//echo $room_price. '<br/>';
///
$room_bed = CFS()->get( 'room_bed' );
foreach ( $room_bed as $term_id ) {
    $the_term = get_term($term_id);
    //echo $the_term->name.'<br/>';
}
///
$room_kol_men=CFS()->get( 'room_kol_men' );
//echo $room_kol_men. '<br/>';
///
$room_appart = CFS()->get( 'room_appart' );
foreach ( $room_appart as $field ) {
    //echo  $field['add_appart']. '<br/>';
}


?>