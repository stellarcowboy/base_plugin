<?php
/* Plugin Name: sprclldr Custom Widget
Plugin URI: http://sprclldr.com
Description: The sprclldr widget framework
Version: 1.0
Author: Kenneth White
*/
class sprclldrWidget extends WP_Widget {
	function sprClassName() {
        $widget_ops = array(
	        'classname' => 'sprClassName',
	        'description' => 'A description for your widget'
		);
		$this->WP_Widget(
	        'sprClassName',
	        'The Widget Name',
	        $widget_ops
		);
	}
	function widget($args, $instance) { // widget sidebar output
        extract($args, EXTR_SKIP);
        echo $before_widget; // pre-widget code from theme
		
		// Presentation code here

        echo $after_widget; // post-widget code from theme
	}
}
add_action(
          'widgets_init',
          create_function('','return register_widget("sprclldrWidget");')
);