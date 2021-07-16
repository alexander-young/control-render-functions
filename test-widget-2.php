<?php


class Test_Widget_2 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'test-widget-2';
    }

    public function get_title()
    {
        return 'Test Widget 2';
    }

    public function get_icon()
    {
        return 'fa facode';
    }

    public function get_categories()
    {
        return ['general'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'plugin-name' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		button_control($this);

		$this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        button_render($settings, [
            'classes' => 'im-button-two'
        ]);
    }

}
