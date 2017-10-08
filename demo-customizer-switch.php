<?php
/*
*Class Name:demo_Customize_Switch_Control
*/
if(class_exists( 'WP_Customize_control')):
	class demo_Customize_Switch_Control extends WP_Customize_Control {
		public $type = 'switch';
		public function render_content() {
			?>
			<label>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<div class="switch_options">
					<span class="switch_enable"><?php esc_html_e('Yes','demo'); ?></span>
					<span class="switch_disable"><?php esc_html_e('No','demo'); ?></span>  
					<input type="hidden" id="switch_yes_no" <?php $this->link(); ?> value="<?php print $this->value(); ?>" />
				</div>
			</label>
			<?php
		}
	}
	endif;