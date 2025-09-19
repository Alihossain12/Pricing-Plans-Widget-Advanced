<?php

class MAK_CORE_Heading_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mak_core_heading_widget';
	}

	public function get_title() {
		return esc_html__( 'MAK Heading Widget', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-heading';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'mak', 'heading' ];
	}

	protected function register_controls() {

		// Content Tab Start
		$this->start_controls_section(
			'mak_heading_section',
			[
				'label' => esc_html__( 'MAK Heading', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'mak_title',
			[
				'label'   => esc_html__( 'Title', 'elementor-addon' ),
				'type'    => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'This is a sample heading from MAK Core', 'elementor-addon' ),
			]
		);
		$this->add_control(
			'mak_subtitle',
			[
				'label'   => esc_html__( 'Sub Title', 'elementor-addon' ),
				'type'    => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'This is a sample Sub Title', 'elementor-addon' ),
			]
		);


		$this->end_controls_section();

		// Content Tab End


		// Style Tab Start

		$this->start_controls_section(
			'mak_title_style',
			[
				'label' => esc_html__( 'Title', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'mak_title_color',
			[
				'label' => esc_html__( 'Title Color', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} h2' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} h2',
			]
		);
		
		$this->add_control(
			'mak_subtitle_color',
			[
				'label' => esc_html__( 'Sub Title Color', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} span' => 'color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$heading = $settings['mak_title'];
		$subtitle = $settings['mak_subtitle'];
		?>
		<h2><?php echo $heading ?></h2>
		<span><?php echo $subtitle ?></span>
		<?php
	}

}