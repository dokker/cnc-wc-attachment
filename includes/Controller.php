<?php
namespace cncWATT;
class Controller {
	public function __construct()
	{
		require_once('ACF.php');
		new ACF();
		add_action('woocommerce_product_meta_end', [$this, 'addAttachmentField']);
	}

	public function addAttachmentField()
	{
		?>
		<div class="attachment">
			<?php $wcatt = get_field('cnc-wc-attachment'); ?>
			<a href="<?php echo $wcatt['url']; ?>" target="_blank"><?php echo $wcatt['name']; ?></a>
		</div>
		<?php
	}
}
