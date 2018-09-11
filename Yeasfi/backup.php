<?php
// create custom plugin settings menu
add_action('admin_menu', 'baw_create_menu');

function baw_create_menu() {

	//create new top-level menu
	add_menu_page('BAW Plugin Settings', 'Theme Settings', 'administrator', __FILE__, 'baw_settings_page',plugins_url('/img/icon.png', __FILE__));

	//call register settings function
	add_action( 'admin_init', 'register_mysettings' );
}

function register_mysettings() {
	//register our settings
	register_setting( 'baw-settings-group', 'phone' );
	register_setting( 'baw-settings-group', 'social' );
	register_setting( 'baw-settings-group', 'email' );
	register_setting( 'baw-settings-group', 'address' );
	register_setting( 'baw-settings-group', 'facebook' );
	register_setting( 'baw-settings-group', 'gplus' );
    register_setting( 'baw-settings-group', 'twitter' );
    register_setting( 'baw-settings-group', 'linkedin' );
}

function baw_settings_page() {
?>
<div class="wrap">
<h2>Theme Settings</h2>

<form method="post" action="options.php">
    <?php settings_fields( 'baw-settings-group' ); ?>
    <?php do_settings_sections( 'baw-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Phone</th>
        <td><input type="text" name="phone" value="<?php echo esc_attr( get_option('phone') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Email</th>
        <td><input style="width:400px;" type="text" name="email" value="<?php echo esc_attr( get_option('email') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Address</th>
        <td><input style="width:400px;" type="text" name="address" value="<?php echo esc_attr( get_option('address') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Facebook Url</th>
        <td><input style="width:400px;" type="text" name="facebook" value="<?php echo esc_attr( get_option('facebook') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Gplus Url</th>
        <td><input style="width:400px;" type="text" name="gplus" value="<?php echo esc_attr( get_option('gplus') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Twitter Url</th>
        <td><input style="width:400px;" type="text" name="twitter" value="<?php echo esc_attr( get_option('twitter') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Linkedin Url</th>
        <td><input style="width:400px;" type="text" name="linkedin" value="<?php echo esc_attr( get_option('linkedin') ); ?>" /></td>
        </tr>
                
    </table>
    
    <?php submit_button(); ?>

</form>
</div>
<?php } ?>
