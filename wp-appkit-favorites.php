<?php
/*
  Plugin Name: WP AppKit Favorites Addon
  Description: Add favorites list management module to WP AppKit plugin
  Version: 0.1
 */

if ( !class_exists( 'WpAppKitFavorites' ) ) {

    class WpAppKitFavorites {

        const slug = 'wp-appkit-favorites';

        public static function hooks() {
            add_filter( 'wpak_addons', array( __CLASS__, 'wpak_addons' ) );
        }

        public static function wpak_addons( $addons ) {
            $addon = new WpakAddon( 'WP AppKit Favorites', self::slug );

            $addon->set_location( __FILE__ );

            $addon->add_js( 'js/wpak-favorites.js', 'module' );

            $addons[] = $addon;

            return $addons;
        }

    }

    WpAppKitFavorites::hooks();
}