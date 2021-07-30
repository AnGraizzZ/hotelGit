<?php
//require_once get_template_directory() .'/inc/customize-controls/customize-repeater-control.php';
$spCC = new SP_Customizer();

$args = array(
 	'name' 	=> 'SP_Customizer',
 	'priority' => 99,
 	'title' => 'SP Customizer',
 	'description' => 'testing',
 	'section' => array(
    ///////////////////////////////////////////
        'section_0' => array(
            'name' 	=> 'Name_site',
            'title' => 'Имя сайта',
            'fields' => array(
                '0' => array(
                    'name' => 'bg_name',
                    'type' => 'input', 
                    'label' => 'Название сайта',
                    'sanitize' => 'y',
                ),
                '1' => array(
                    'name' => 'bg_name_dop',
                    'type' => 'input', 
                    'label' => 'Краткое описание',
                    'sanitize' => 'y',
                ),
                	
            ),
        ),
        /////////////////////////////////////////////////////////
 		'section_1' => array(
	 		'name' 	=> 'bg_image',
	 		'title' => 'Фоновые изображения',
	 		'fields' => array(
	 			'01' => array(
                     'name' => 'bg_img_1',
	 				'type' => 'image', 
	 				'label' => 'Изображение 1',
	 				'sanitize' => 'y',
	 			),
	 			'02' => array(
                    'name' => 'bg_text_1',
                    'type' => 'input', 
                    'label' => 'Текст 1',
                    'sanitize' => 'y',
	 			),
	 			'03' => array(
                    'name' => 'bg_button_name_1',
                    'type' => 'input', 
                    'label' => 'Нзвание кнопки 1',
                    'sanitize' => 'y',
	 			),
	 			'04' => array(
                    'name' => 'bg_button_link_1',
                    'type' => 'input', 
                    'label' => 'Ссылка кнопки 1',
                    'sanitize' => 'y',
	 			),
                '11' => array(
                    'name' => 'bg_img_2',
                    'type' => 'image', 
                    'label' => 'Изображение 2',
                    'sanitize' => 'y',
                ),
                '12' => array(
                   'name' => 'bg_text_2',
                   'type' => 'input', 
                   'label' => 'Текст 2',
                   'sanitize' => 'y',
                ),
                
	 			'13' => array(
                    'name' => 'bg_button_name_2',
                    'type' => 'input', 
                    'label' => 'Нзвание кнопки 2',
                    'sanitize' => 'y',
	 			),
	 			'14' => array(
                    'name' => 'bg_button_link_2',
                    'type' => 'input', 
                    'label' => 'Ссылка кнопки 2',
                    'sanitize' => 'y',
	 			),
                '31' => array(
                    'name' => 'bg_img_3',
                    'type' => 'image', 
                    'label' => 'Изображение 3',
                    'sanitize' => 'y',
                ),
                '32' => array(
                   'name' => 'bg_text_3',
                   'type' => 'input', 
                   'label' => 'Текст 3',
                   'sanitize' => 'y',
                ),	
                
	 			'33' => array(
                    'name' => 'bg_button_name_3',
                    'type' => 'input', 
                    'label' => 'Нзвание кнопки 3',
                    'sanitize' => 'y',
	 			),
	 			'44' => array(
                    'name' => 'bg_button_link_3',
                    'type' => 'input', 
                    'label' => 'Ссылка кнопки 3',
                    'sanitize' => 'y',
	 			),
	 		),
	 	),
         //////////////////////////////////////////////
         'section_2' => array(
            'name' 	=> 'setting_services',
            'title' => 'Сервис',
            'fields' => array(
                
                	
            ),
        ),

 	),
);

$spCC->sp_create_customizer($args);
?>