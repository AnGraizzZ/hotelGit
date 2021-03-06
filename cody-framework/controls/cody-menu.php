<?php
if ( ! class_exists( 'WP_Customize_Control' ) )
    return NULL;

/**
 * Class to create a custom menu control
 */
class CF_Menu_Dropdown_Control extends WP_Customize_Control {
    private $menus = false;

    public function __construct($manager, $id, $args = array(), $options = array()) {
        $this->menus = wp_get_nav_menus($options);

        parent::__construct( $manager, $id, $args );
    }
	
	
	/**
	 * Relation to elements with the children class
	 */
	public $relation = '';
	
	
	/**
	 * Multiselect
	 */
	public $multi = 0;
	

    /**
     * Render the content on the theme customizer page
    */
    public function render_content() {
		
		$multiple = '';
		if ( $this->multi == 1 ) {
			$multiple = 'multiple';
		}
		
        if(!empty($this->menus)) {
            ?>
			<div class="<?php echo $this->relation; ?>">
                <label>
					<span class="customize-control-title"><?php echo esc_html($this->label); ?><span class="cody-help" data-title="<?php echo wp_kses_post($this->description); ?>"></span></span>
                    <select name="<?php echo $this->id; ?>" id="<?php echo $this->id; ?>" <?php $this->link(); echo $multiple; ?>>
                    <?php
                        foreach ( $this->menus as $menu ) {
                            printf('<option value="%s" %s>%s</option>', $menu->term_id, selected($this->value(), $menu->term_id, false), $menu->name);
                        }
                    ?>
                    </select>
                </label>
			</div>
            <?php
        }
    }
}