<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>
<div class="additional_info">
<div class="container">
	<div class="sap_tabs">
		<div id="horizontalTab1" style="display: block; width: 100%; margin: 0px;">
			<ul class="tabs wc-tabs">
				<?php $i = 0; foreach ( $tabs as $key => $tab ) : ?>
					<li class="<?php echo esc_attr( $key ); ?>_tab resp-tab-item" aria-controls="tab_item-<?=$i?>" role="tab">
						<span><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?></span>
					</li>
				<?php $i++; endforeach; ?>
			</ul>
			<?php $j = 0; foreach ( $tabs as $key => $tab ) : ?>
				<div class="tab-<?=$j+1; ?> resp-tab-content additional_info_grid" id="tab-<?php echo esc_attr( $key ); ?>" aria-labelledby="tab_item-<?=$j?>">
					<?php call_user_func( $tab['callback'], $key, $tab ); ?>
				</div>
			<?php $j++; endforeach; ?>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab1').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
		</div>
</div>
<?php endif; ?>
