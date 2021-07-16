<?php

function button_render($settings, $mods = []){
	$classes = 'default-class';
	if(isset($mods['classes'])){
		$classes = $mods['classes'];
	}
	echo '<a href="'.$settings['btn_url'].'" class="'.$classes.'">'.$settings['btn_text'].'</a>';
}

function button_control($widget){

	$widget->add_control(
		'btn_text',
		[
			'label' => 'Button text',
			'type' => \Elementor\Controls_Manager::TEXT,
			'input_type' => 'text',
			'placeholder' => 'Click Here!',
		]
	);
	
	$widget->add_control(
		'btn_url',
		[
			'label' => 'Button URL',
			'type' => \Elementor\Controls_Manager::TEXT,
			'input_type' => 'url',
			'placeholder' => 'https://your-link.com',
		]
	);
	
}


add_action('elementor/widgets/widgets_registered', function(){
	require_once get_stylesheet_directory() . '/widgets/test-widget-1.php';
	\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Test_Widget_1());
	require_once get_stylesheet_directory() . '/widgets/test-widget-2.php';
	\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Test_Widget_2());
}, 100);
