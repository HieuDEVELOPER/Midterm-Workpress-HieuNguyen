<?php

namespace Elementor;

defined('ABSPATH') || exit;

class Ekit_Wb_112 extends Widget_Base {

	public function get_name() {
		return 'ekit_wb_112';
	}


	public function get_title() {
		return esc_html__( 'NewsCard', 'elementskit-lite' );
	}


	public function get_categories() {
		return ['basic'];
	}


	public function get_icon() {
		return 'eicon-cog';
	}


	protected function register_controls() {

		$this->start_controls_section(
			'content_section_112_0',
			array(
				'label' => esc_html__( 'Title', 'elementskit-lite' ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			)
		);

		$this->add_control(
			'ekit_wb_112_media',
			array(
				'label' => esc_html__( 'Media', 'elementskit-lite' ),
				'type'  => Controls_Manager::MEDIA,
				'default' => array(
					'url' => '',
				),
				'show_label' => true,
				'label_block' => true,
			)
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'content_section_112_1',
			array(
				'label' => esc_html__( 'Title', 'elementskit-lite' ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			)
		);

		$this->add_control(
			'ekit_wb_112_title',
			array(
				'label' => esc_html__( 'title', 'elementskit-lite' ),
				'type'  => Controls_Manager::TEXT,
				'default' =>  esc_html( 'Some Text' ),
				'show_label' => true,
				'label_block' => false,
				'input_type' => 'text',
			)
		);

		$this->end_controls_section();

	}


	protected function render() {
		$settings = $this->get_settings_for_display();

		?>
<div class="news-card">
    <img src="<?php echo isset($settings["ekit_wb_112_media"]["url"]) ? $settings["ekit_wb_112_media"]["url"] : ""; ?>" width="300" height="200"/>
    <div class="news-card-title">
        <?php echo isset($settings["ekit_wb_112_title"]) ? $settings["ekit_wb_112_title"] : ""; ?>
    </div>
</div>
		<?php
	}


}
