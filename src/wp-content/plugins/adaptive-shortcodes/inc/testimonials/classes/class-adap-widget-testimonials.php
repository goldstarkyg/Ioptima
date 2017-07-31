<?php
if (!defined('ABSPATH') || !function_exists('adap_testimonials')) exit; // Exit if accessed directly.

/**
 * protected $adap_widget_cssclass
 * protected $adap_widget_description
 * protected $adap_widget_idbase
 * protected $adap_widget_title
 *
 * - __construct()
 * - widget()
 * - update()
 * - form()
 * - get_orderby_options()
 */
class Adap_Widget_Testimonials extends WP_Widget
{
	protected $adap_widget_cssclass;
	protected $adap_widget_description;
	protected $adap_widget_idbase;
	protected $adap_widget_title;

	/**
	 * Constructor function.
	 * @since  1.0.0
	 * @return  void
	 */
	public function __construct()
	{
		/* Widget variable settings. */
		$this->adap_widget_cssclass = 'widget_adap_testimonials';
		$this->adap_widget_description = __('Recent testimonials on your site.', 'adap_sc');
		$this->adap_widget_idbase = 'adap_testimonials';
		$this->adap_widget_title = __('Testimonials', 'adap_sc');

		/* Widget settings. */
		$widget_ops = array('classname' => $this->adap_widget_cssclass, 'description' => $this->adap_widget_description);

		/* Widget control settings. */
		$control_ops = array('width' => 250, 'height' => 350, 'id_base' => $this->adap_widget_idbase);

		/* Create the widget. */
		$this->WP_Widget($this->adap_widget_idbase, $this->adap_widget_title, $widget_ops, $control_ops);
	} // End __construct()

	/**
	 * Display the widget on the frontend.
	 * @since  1.0.0
	 * @param  array $args     Widget arguments.
	 * @param  array $instance Widget settings for this instance.
	 * @return void
	 */
	public function widget($args, $instance)
	{
		extract($args, EXTR_SKIP);

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'], $instance, $this->id_base);

		/* Before widget (defined by themes). */
		$args = array();

		$args['before'] = $before_widget;
		$args['after'] = $after_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ($title) {
			$args['before_title'] = $before_title;
			$args['title'] = $title;
			$args['after_title'] = $after_title;
		}

		/* Widget content. */
		// Add actions for plugins/themes to hook onto.
		do_action($this->adap_widget_cssclass . '_top');

		// Integer values.
		if (isset($instance['limit']) && (0 < count($instance['limit']))) {
			$args['limit'] = intval($instance['limit']);
		}
		if (isset($instance['specific_id']) && (0 < count($instance['specific_id']))) {
			$args['id'] = intval($instance['specific_id']);
		}
		if (isset($instance['size']) && (0 < count($instance['size']))) {
			$args['size'] = intval($instance['size']);
		}
		if (isset($instance['category']) && is_numeric($instance['category'])) $args['category'] = intval($instance['category']);

		// Boolean values.
		if (isset($instance['display_author']) && (1 == $instance['display_author'])) {
			$args['display_author'] = true;
		} else {
			$args['display_author'] = false;
		}
		if (isset($instance['display_avatar']) && (1 == $instance['display_avatar'])) {
			$args['display_avatar'] = true;
		} else {
			$args['display_avatar'] = false;
		}
		if (isset($instance['display_url']) && (1 == $instance['display_url'])) {
			$args['display_url'] = true;
		} else {
			$args['display_url'] = false;
		}

		// Select boxes.
		if (isset($instance['orderby']) && in_array($instance['orderby'], array_keys($this->get_orderby_options()))) {
			$args['orderby'] = $instance['orderby'];
		}
		if (isset($instance['order']) && in_array($instance['order'], array_keys($this->get_order_options()))) {
			$args['order'] = $instance['order'];
		}

		// Display the testimonials.
		adap_testimonials($args);

		// Add actions for plugins/themes to hook onto.
		do_action($this->adap_widget_cssclass . '_bottom');
	} // End widget()

	/**
	 * Method to update the settings from the form() method.
	 * @since  1.0.0
	 * @param  array $new_instance New settings.
	 * @param  array $old_instance Previous settings.
	 * @return array               Updated settings.
	 */
	public function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags($new_instance['title']);

		/* Make sure the integer values are definitely integers. */
		$instance['limit'] = intval($new_instance['limit']);
		$instance['specific_id'] = intval($new_instance['specific_id']);
		$instance['size'] = intval($new_instance['size']);
		$instance['category'] = intval($new_instance['category']);

		/* The select box is returning a text value, so we escape it. */
		$instance['orderby'] = esc_attr($new_instance['orderby']);
		$instance['order'] = esc_attr($new_instance['order']);

		/* The checkbox is returning a Boolean (true/false), so we check for that. */
		$instance['display_author'] = (bool)esc_attr($new_instance['display_author']);
		$instance['display_avatar'] = (bool)esc_attr($new_instance['display_avatar']);
		$instance['display_url'] = (bool)esc_attr($new_instance['display_url']);

		return $instance;
	} // End update()

	/**
	 * The form on the widget control in the widget administration area.
	 * Make use of the get_field_id() and get_field_name() function when creating your form elements. This handles the confusing stuff.
	 * @since  1.0.0
	 * @param  array $instance The settings for this instance.
	 * @return void
	 */
	public function form($instance)
	{

		/* Set up some default widget settings. */
		/* Make sure all keys are added here, even with empty string values. */
		$defaults = array(
			'title' => '',
			'limit' => 5,
			'orderby' => 'menu_order',
			'order' => 'DESC',
			'specific_id' => '',
			'display_author' => true,
			'display_avatar' => true,
			'display_url' => true,
			'effect' => 'fade', // Options: 'fade', 'none'
			'pagination' => false,
			'size' => 50,
			'category' => 0
		);

		$instance = wp_parse_args((array)$instance, $defaults);
		?>
		<!-- Widget Title: Text Input -->
		<p>
			<label
				for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title (optional):', 'adap_sc'); ?></label>
			<input type="text" name="<?php echo $this->get_field_name('title'); ?>"
				   value="<?php echo $instance['title']; ?>" class="widefat"
				   id="<?php echo $this->get_field_id('title'); ?>"/>
		</p>
		<!-- Widget Limit: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id('limit'); ?>"><?php _e('Limit:', 'adap_sc'); ?></label>
			<input type="text" name="<?php echo $this->get_field_name('limit'); ?>"
				   value="<?php echo $instance['limit']; ?>" class="widefat"
				   id="<?php echo $this->get_field_id('limit'); ?>"/>
		</p>
		<!-- Widget Image Size: Text Input -->
		<p>
			<label
				for="<?php echo $this->get_field_id('size'); ?>"><?php _e('Image Size (in pixels):', 'adap_sc'); ?></label>
			<input type="text" name="<?php echo $this->get_field_name('size'); ?>"
				   value="<?php echo $instance['size']; ?>" class="widefat"
				   id="<?php echo $this->get_field_id('size'); ?>"/>
		</p>
		<!-- Widget Order By: Select Input -->
		<p>
			<label for="<?php echo $this->get_field_id('orderby'); ?>"><?php _e('Order By:', 'adap_sc'); ?></label>
			<select name="<?php echo $this->get_field_name('orderby'); ?>" class="widefat"
					id="<?php echo $this->get_field_id('orderby'); ?>">
				<?php foreach ($this->get_orderby_options() as $k => $v) { ?>
					<option
						value="<?php echo $k; ?>"<?php selected($instance['orderby'], $k); ?>><?php echo $v; ?></option>
				<?php } ?>
			</select>
		</p>
		<!-- Widget Order: Select Input -->
		<p>
			<label for="<?php echo $this->get_field_id('order'); ?>"><?php _e('Order Direction:', 'adap_sc'); ?></label>
			<select name="<?php echo $this->get_field_name('order'); ?>" class="widefat"
					id="<?php echo $this->get_field_id('order'); ?>">
				<?php foreach ($this->get_order_options() as $k => $v) { ?>
					<option
						value="<?php echo $k; ?>"<?php selected($instance['order'], $k); ?>><?php echo $v; ?></option>
				<?php } ?>
			</select>
		</p>
		<!-- Widget Display Author: Checkbox Input -->
		<p>
			<input id="<?php echo $this->get_field_id('display_author'); ?>"
				   name="<?php echo $this->get_field_name('display_author'); ?>"
				   type="checkbox"<?php checked($instance['display_author'], 1); ?> />
			<label
				for="<?php echo $this->get_field_id('display_author'); ?>"><?php _e('Display Author', 'adap_sc'); ?></label>
		</p>
		<!-- Widget Display Avatar: Checkbox Input -->
		<p>
			<input id="<?php echo $this->get_field_id('display_avatar'); ?>"
				   name="<?php echo $this->get_field_name('display_avatar'); ?>"
				   type="checkbox"<?php checked($instance['display_avatar'], 1); ?> />
			<label
				for="<?php echo $this->get_field_id('display_avatar'); ?>"><?php _e('Display Avatar', 'adap_sc'); ?></label>
		</p>
		<!-- Widget Display URL: Checkbox Input -->
		<p>
			<input id="<?php echo $this->get_field_id('display_url'); ?>"
				   name="<?php echo $this->get_field_name('display_url'); ?>"
				   type="checkbox"<?php checked($instance['display_url'], 1); ?> />
			<label
				for="<?php echo $this->get_field_id('display_url'); ?>"><?php _e('Display URL', 'adap_sc'); ?></label>
		</p>
		<!-- Widget Category: Select Input -->
		<p>
			<label for="<?php echo $this->get_field_id('category'); ?>"><?php _e('Category:', 'adap_sc'); ?></label>
			<?php
			$dropdown_args = array('taxonomy' => 'testimonial-category', 'class' => 'widefat', 'show_option_all' => __('All', 'adap_sc'), 'id' => $this->get_field_id('category'), 'name' => $this->get_field_name('category'), 'selected' => $instance['category']);
			wp_dropdown_categories($dropdown_args);
			?>
		</p>
		<!-- Widget ID: Text Input -->
		<p>
			<label
				for="<?php echo $this->get_field_id('specific_id'); ?>"><?php _e('Specific ID (optional):', 'adap_sc'); ?></label>
			<input type="text" name="<?php echo $this->get_field_name('specific_id'); ?>"
				   value="<?php echo $instance['specific_id']; ?>" class="widefat"
				   id="<?php echo $this->get_field_id('specific_id'); ?>"/>
		</p>
		<p>
			<small><?php _e('Display a specific testimonial, rather than a list.', 'adap_sc'); ?></small>
		</p>
	<?php
	} // End form()

	/**
	 * Get an array of the available orderby options.
	 * @since  1.0.0
	 * @return array
	 */
	protected function get_orderby_options()
	{
		return array(
			'none' => __('No Order', 'adap_sc'),
			'ID' => __('Entry ID', 'adap_sc'),
			'title' => __('Title', 'adap_sc'),
			'date' => __('Date Added', 'adap_sc'),
			'menu_order' => __('Specified Order Setting', 'adap_sc'),
			'rand' => __('Random Order', 'adap_sc')
		);
	} // End get_orderby_options()

	/**
	 * Get an array of the available order options.
	 * @since  1.0.0
	 * @return array
	 */
	protected function get_order_options()
	{
		return array(
			'ASC' => __('Ascending', 'adap_sc'),
			'DESC' => __('Descending', 'adap_sc')
		);
	} // End get_order_options()
} // End Class

/* Register the widget. */
add_action('widgets_init', create_function('', 'return register_widget("Adap_Widget_Testimonials");'), 1);
?>