<?php
/**
 * No Monkey Biz Footer Widget
 *
 *
 * Lightly forked from the WordPress Widget Boilerplate by @tommcfarlin.
 *
 * @package   NMB_Footer_Widget
 * @author    Clara Ho <claraxinho@gmail.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2018 Clara Ho
 *
 * @wordpress-plugin
 * Plugin Name:       NMB Footer Widget
 * Plugin URI:        @TODO
 * Description:       A handy footer widget.
 * Version:           1.0.0
 * Author:            Clara Ho
 * Author URI:        @TODO
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
	exit;
}

class NMB_Footer_Widget extends WP_Widget {

    /**
     *
     * Unique identifier for your widget.
     *
     * @since    1.0.0
     *
     * @var      string
     */
    protected $widget_slug = 'nmb-footer-widget';

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/

	/**
	 * Specifies the classname and description, and instantiates the widget.
	 */
	public function __construct() {

		// TODO: update description
		parent::__construct(
			$this->get_widget_slug(),
			'NMB Footer Widget',
			array(
				'classname'  => $this->get_widget_slug().'-class',
				'description' => 'A widget for adding footer content.'
			)
		);

	} // end constructor

    /**
     * Return the widget slug.
     *
     * @since    1.0.0
     *
     * @return    Plugin slug variable.
     */
    public function get_widget_slug() {
        return $this->widget_slug;
    }

	/*--------------------------------------------------*/
	/* Widget API Functions
	/*--------------------------------------------------*/

	/**
	 * Outputs the content of the widget.
	 *
	 * @param array $args     The array of form elements
	 * @param array $instance The current instance of the widget
	 */
	public function widget( $args, $instance ) {

		if ( ! isset ( $args['widget_id'] ) ) {
         $args['widget_id'] = $this->id;
      }

		// go on with your widget logic, put everything into a string and …

		extract( $args, EXTR_SKIP );

		$widget_string = $before_widget;

		// Manipulate the widget's values based on their input fields
		$telephone_title = empty( $instance['telephone_title'] ) ? '' : apply_filters( 'widget_telephone_title', $instance['telephone_title'] );
		$telephone_input = empty( $instance['telephone_input'] ) ? '' : apply_filters( 'widget_telephone_input', $instance['telephone_input'] );
		$email_title = empty( $instance['email_title'] ) ? '' : apply_filters( 'widget_email_title', $instance['email_title'] );
		$email_input = empty( $instance['email_input'] ) ? '' : apply_filters( 'widget_email_input', $instance['email_input'] );
		$hours_title = empty( $instance['hours_title'] ) ? '' : apply_filters( 'widget_hours_title', $instance['hours_title'] );
		$hours_input = empty( $instance['hours_input'] ) ? '' : apply_filters( 'widget_hours_input', $instance['hours_input'] );

		ob_start();

		include( plugin_dir_path( __FILE__ ) . 'views/widget.php' );
		$widget_string .= ob_get_clean();
		$widget_string .= $after_widget;

		print $widget_string;

	} // end widget

	/**
	 * Processes the widget's options to be saved.
	 *
	 * @param array $new_instance The new instance of values to be generated via the update.
	 * @param array $old_instance The previous instance of values before the update.
	 */
	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		$instance['telephone_title'] = strip_tags( $new_instance['telephone_title'] );
		$instance['telephone_input'] = strip_tags( $new_instance['telephone_input'] );
		$instance['email_title'] = strip_tags( $new_instance['email_title'] );
		$instance['email_input'] = strip_tags( $new_instance['email_input'] );
		$instance['hours_title'] = strip_tags( $new_instance['hours_title'] );
		$instance['hours_input'] = strip_tags( $new_instance['hours_input'] );

		return $instance;

	} // end widget

	/**
	 * Generates the administration form for the widget.
	 *
	 * @param array $instance The array of keys and values for the widget.
	 */
	public function form( $instance ) {

		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => 'NMB Footer Widget',
				'telephone_title' => '',
				'telephone_input' => '',
				'email_title' => '',
				'email_input' => '',
				'hours_title' => '',
				'hours_input' => ''
			)
		);

		$telephone_title = strip_tags( $instance['telephone_title'] );
		$telephone_input = strip_tags( $instance['telephone_input'] );
		$email_title = strip_tags( $instance['email_title'] );
		$email_input = strip_tags( $instance['email_input'] );
		$hours_title = strip_tags( $instance['hours_title'] );
		$hours_input = strip_tags( $instance['hours_input'] );

		// Display the admin form
		include( plugin_dir_path( __FILE__ ) . 'views/admin.php' );

	} // end form

} // end class

add_action( 'widgets_init', function(){
     register_widget( 'NMB_Footer_Widget' );
});
