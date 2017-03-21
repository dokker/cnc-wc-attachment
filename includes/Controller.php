<?php
namespace cncWATT;
class Controller {
	public function __construct()
	{
		require_once('ACF.php');
		new ACF();
		add_action('woocommerce_product_meta_end', [$this, 'addAttachmentField']);

		$this->plugin_url = plugin_dir_url(dirname(__FILE__));
		add_action('wp_enqueue_scripts', [$this, 'registerStyles']);
	}

	public function addAttachmentField()
	{
		?>
		<div class="attachment">
			<?php $wcatt = get_field('cnc-wc-attachment'); ?>
			<a href="<?php echo $wcatt['url']; ?>" target="_blank"><?php echo (!empty($wcatt['caption'])) ? $wcatt['caption'] : $wcatt['name']; ?></a>
		</div>
		<?php
	}

	/**
	 * Register styles for events related pages
	 */
	public function registerStyles() {
		wp_enqueue_style( 'cnc-wcatt-style' , $this->plugin_url . 'assets/style.css');
	}
}
