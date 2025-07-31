<?php
/**
 * Plugin Name:       Central Schema Manager
 * Description:       A simple, reliable plugin to manage page-specific schema from a central settings page.
 * Version:           2.0.0
 * Author:            CCwithAI
 * Author URI:        https://ccwithai.com
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Add the settings page to the admin menu.
 */
function csm_add_settings_page() {
    add_options_page(
        'Page-Specific Schema',          // Page Title
        'Page-Specific Schema',          // Menu Title
        'manage_options',                // Capability
        'central-schema-manager',        // Menu Slug
        'csm_render_settings_page'       // Callback function
    );
}
add_action( 'admin_menu', 'csm_add_settings_page' );

/**
 * Register the plugin's settings.
 */
function csm_register_settings() {
    register_setting(
        'csm_schema_options_group',      // Option group
        'csm_schema_options',            // Option name
        'csm_sanitize_schema_options'    // Sanitization callback
    );
}
add_action( 'admin_init', 'csm_register_settings' );

/**
 * Render the HTML for the settings page.
 */
function csm_render_settings_page() {
    ?>
    <div class="wrap">
        <h1>Page-Specific Schema Manager</h1>
        <p>Manage the JSON-LD schema for your homepage and individual posts/pages from one location.</p>
        <form method="post" action="options.php">
            <?php
            settings_fields( 'csm_schema_options_group' );
            $options = get_option( 'csm_schema_options', array() );
            $homepage_schema = isset( $options['homepage'] ) ? esc_textarea( stripslashes( $options['homepage'] ) ) : '';
            ?>
            
            <h2>Homepage Schema</h2>
            <table class="form-table" role="presentation">
                <tr valign="top">
                    <th scope="row">
                        <label for="csm_schema_homepage">
                            <strong>Homepage</strong><br>
                            <small>This schema will appear on your site's front page.</small>
                        </label>
                    </th>
                    <td>
                        <textarea
                            id="csm_schema_homepage"
                            name="csm_schema_options[homepage]"
                            rows="10"
                            style="width:100%; font-family: monospace;"
                            placeholder="Paste your <script> tag or just the JSON-LD here..."
                        ><?php echo $homepage_schema; ?></textarea>
                    </td>
                </tr>
            </table>

            <hr>

            <h2>Individual Pages & Posts</h2>
            <?php
            $args = array(
                'post_type'   => array( 'post', 'page' ),
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC',
            );
            $posts_and_pages = get_posts( $args );

            if ( $posts_and_pages ) {
                echo '<table class="form-table" role="presentation">';
                foreach ( $posts_and_pages as $post ) {
                    $post_id = $post->ID;
                    $post_title = esc_html( $post->post_title );
                    $post_type = get_post_type_object( $post->post_type )->labels->singular_name;
                    $permalink = get_permalink( $post_id );
                    $value = isset( $options[ $post_id ] ) ? esc_textarea( stripslashes( $options[ $post_id ] ) ) : '';
                    ?>
                    <tr valign="top">
                        <th scope="row">
                            <label for="csm_schema_<?php echo $post_id; ?>">
                                <strong><?php echo $post_title; ?></strong><br>
                                <small>(<?php echo $post_type; ?>)</small><br>
                                <a href="<?php echo esc_url( $permalink ); ?>" target="_blank" style="font-weight:normal; word-break:break-all;"><?php echo esc_html( urldecode( $permalink ) ); ?></a>
                            </label>
                        </th>
                        <td>
                            <textarea
                                id="csm_schema_<?php echo $post_id; ?>"
                                name="csm_schema_options[<?php echo $post_id; ?>]"
                                rows="8"
                                style="width:100%; font-family: monospace;"
                                placeholder="Paste your <script> tag or just the JSON-LD here..."
                            ><?php echo $value; ?></textarea>
                        </td>
                    </tr>
                    <?php
                }
                echo '</table>';
            } else {
                echo '<p>No published posts or pages found.</p>';
            }

            submit_button();
            ?>
        </form>
    </div>
    <?php
}

/**
 * Sanitize the schema options before saving.
 *
 * @param array $input The input from the settings form.
 * @return array The sanitized input.
 */
function csm_sanitize_schema_options( $input ) {
    $new_input = array();
    if ( is_array( $input ) ) {
        foreach ( $input as $key => $schema_code ) {
            // The input is already slashed by WordPress. We just need to validate the keys
            // and return the data as is. No more adding/removing slashes here.
            if ( $key === 'homepage' ) {
                $new_input['homepage'] = $schema_code;
            } else {
                $post_id = intval( $key );
                if ( $post_id > 0 && current_user_can( 'edit_post', $post_id ) ) {
                    $new_input[ $post_id ] = $schema_code;
                }
            }
        }
    }
    return $new_input;
}

/**
 * Renders the custom schema script in the <head> section of the site.
 */
function csm_render_schema_in_head() {
    $options = get_option( 'csm_schema_options' );
    $schema_to_render = '';

    if ( is_front_page() || is_home() ) {
        if ( ! empty( $options['homepage'] ) ) {
            $schema_to_render = $options['homepage'];
        }
    } elseif ( is_singular() ) {
        $post_id = get_the_ID();
        if ( ! empty( $options[ $post_id ] ) ) {
            $schema_to_render = $options[ $post_id ];
        }
    }

    if ( ! empty( $schema_to_render ) ) {
        echo stripslashes( $schema_to_render ) . "\n";
    }
}
add_action( 'wp_head', 'csm_render_schema_in_head' );