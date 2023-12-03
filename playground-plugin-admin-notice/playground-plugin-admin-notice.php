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
    ?>
    <div class="notice notice-success is-dismissible">
        <p><?php _e('WordPress running inside the Playground.', 'playground-plugin-admin-notice'); ?></p>
    </div>
    <?php
});

