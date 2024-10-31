<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
/**
 * Plugin Name: Responsive Check
 * Plugin URI: http://www.kdewindt.com
 * Description: With this plugin you can show the responsiveness of a website very quickly in realtime
 * Version: 0.0.3
 * Author: Kevin Dewindt
 * Author URI: http://www.kdewindt.com
 * License: GPL2
 */
function rspc_check_shortcode($atts)
{
    $url = $atts['url'];
    $form = $atts['form'];
    $buttlabel = $atts['button'];
    $responsiveurl = $url;
    ob_start();
?>

<div class="responsivecheck">
<section class="display">

<div class="mobile">
  <iframe id="mobile" src="<?php echo $responsiveurl; ?>">
  </iframe>
</div>

<div class="tablet">
  <iframe id="tablet" src="<?php echo $responsiveurl; ?>">
  </iframe>
</div>

<div class="laptop">
  <iframe id="laptop" src="<?php echo $responsiveurl; ?>">
  </iframe>
</div>

<div class="desktop">
  <iframe id="desktop" src="<?php echo $responsiveurl; ?>">
  </iframe>
</div>

</section>
<?php if($form == true):
		$butttext = "Check responsive";
		if(!empty($buttlabel)):
			$butttext = $buttlabel;
		endif;
			
?>
<div class="rspcform">
<input id="rspcurl"  type="text" placeholder="Enter your url">
<a href="#" class="rspcbutton"><?php echo $butttext; ?></a>
</div>
<?php endif; ?>

</div>

<?php
return ob_get_clean();
}
add_shortcode('rspcheck', 'rspc_check_shortcode');

function rspc_check_incl()
{
  $dir = plugin_dir_url(__FILE__);
  wp_enqueue_script( 'js', $dir.'js/responsive.js' , array( 'jquery' ), true);
 
  wp_enqueue_style( 'responsive-css', $dir.'css/responsive.css' );
}
add_action( 'wp_enqueue_scripts', 'rspc_check_incl' );

?>