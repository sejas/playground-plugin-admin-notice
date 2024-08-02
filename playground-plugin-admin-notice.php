<?php
/**
 * Plugin Name: Playground Admin Notice
 * Plugin URI: https://sejas.es/playground/
 * Description: This plugin displays a custom notice in the admin panel.
 * Version: 0.1.0
 * Author: Antonio Sejas
 * Author URI: https://sejas.es
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: playground-plugin-admin-notice
 */

 add_action('admin_notices', function () {
    $custom_message = get_option('playground_admin_notice', 'Running inside WordPress Playground.');

    ?>
    <div class="notice notice-info">
        <p><?php _e($custom_message, 'playground-plugin-admin-notice'); ?></p>
        <p> This is a test to try the GitHub Deployments (Alexa's version) </p>
    </div>
    <?php
});


