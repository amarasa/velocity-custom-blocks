<?php
/*
Plugin Name: Kal Custom Blocks
Plugin URI: http://kaleidico.com
Description: A brief description of the Plugin.
Version: 1.0
Author: Angelo Marasa
Author URI: http://kaleidico.com
License: GPL2
*/

// Updated
require 'puc/plugin-update-checker.php';

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
    'https://github.com/amarasa/velocity-custom-blocks',
    __FILE__,
    'velocity-custom-blocks'
);

//Set the branch that contains the stable release.
//$myUpdateChecker->setBranch('stable-branch-name');

//Optional: If you're using a private repository, specify the access token like this:
// $myUpdateChecker->setAuthentication('your-token-here');

/* -------------------------------------------------------------------------------------- */

add_action('admin_enqueue_scripts', 'kal_custom_blocks_admin_styles');

function kal_custom_blocks_admin_styles($hook)
{
    if ($hook != 'settings_page_kal_custom_blocks') {
        return;
    }
    wp_enqueue_style('kal-custom-blocks-admin', plugin_dir_url(__FILE__) . 'admin-style.css', [], '1.0.0');
}



add_action('init', 'register_acf_blocks');
function register_acf_blocks()
{
    $enabled_blocks = get_option('kal_enabled_blocks', []);
    $all_blocks = kal_get_blocks();

    foreach ($all_blocks as $block) {
        if (in_array($block, $enabled_blocks)) {
            register_block_type(plugin_dir_path(__FILE__) . 'blocks/' . $block . '/block.json');
        }
    }
}


add_action('admin_menu', 'kal_custom_blocks_add_admin_menu');
function kal_custom_blocks_add_admin_menu()
{
    add_options_page(
        'Kal Custom Blocks Settings',
        'Kal Custom Blocks',
        'manage_options',
        'kal_custom_blocks',
        'kal_custom_blocks_options_page'
    );
}

function kal_get_blocks()
{
    $blocks_dir = plugin_dir_path(__FILE__) . 'blocks/';
    $blocks = array_filter(glob($blocks_dir . '*'), 'is_dir');
    $block_names = array_map('basename', $blocks);
    return $block_names;
}

function kal_custom_blocks_options_page()
{
    $blocks = kal_get_blocks();
    $enabled_blocks = get_option('kal_enabled_blocks', []);

    // Calculate counts
    $total_blocks = count($blocks);
    $enabled_count = count(array_intersect($blocks, $enabled_blocks));
    $disabled_count = $total_blocks - $enabled_count;

?>
    <div class="wrap">
        <h2>Kal Custom Blocks Settings</h2>

        <!-- Display counts -->
        <p>Total Blocks: <?php echo $total_blocks; ?></p>
        <p>Enabled Blocks: <?php echo $enabled_count; ?></p>
        <p>Disabled Blocks: <?php echo $disabled_count; ?></p>

        <form action="<?php echo admin_url('options.php'); ?>" method="post">
            <?php
            settings_fields('kal_custom_blocks_options_group');
            do_settings_sections('kal_custom_blocks');
            foreach ($blocks as $block) {
                $is_checked = in_array($block, $enabled_blocks) ? 'checked' : '';
                echo '<div class="toggle-switch-wrapper">';
                echo "<div class='toggle-switch'>";
                echo "<input type='checkbox' id='{$block}' name='kal_enabled_blocks[]' value='{$block}' {$is_checked}>";
                echo "<label for='{$block}' class='slider'></label>";
                echo '</div>';
                echo '<div>';

                echo "<span class='block-name'>{$block}</span>";

                // Read and display block description
                $json_data = file_get_contents(plugin_dir_path(__FILE__) . 'blocks/' . $block . '/block.json');
                $block_data = json_decode($json_data, true);
                $block_description = isset($block_data['description']) ? $block_data['description'] : 'No description available.';
                echo "<span class='block-description'>{$block_description}</span>";

                echo '</div>';
                echo '</div>';
            }
            submit_button();
            ?>
        </form>
    </div>
<?php
}


add_action('admin_init', 'kal_custom_blocks_settings_init');
function kal_custom_blocks_settings_init()
{
    register_setting(
        'kal_custom_blocks_options_group',
        'kal_enabled_blocks',
        [
            'sanitize_callback' => 'kal_sanitize_enabled_blocks',
            'default' => []
        ]
    );

    add_settings_section(
        'kal_custom_blocks_main_section',
        'Block Settings',
        function () {
            echo 'Enable or disable blocks below:';
        },
        'kal_custom_blocks'
    );

    add_settings_field(
        'kal_custom_blocks_blocks_field',
        'Blocks',
        function () {
        },
        'kal_custom_blocks',
        'kal_custom_blocks_main_section'
    );
}

function kal_sanitize_enabled_blocks($input)
{
    if (!is_array($input)) {
        $input = [];
    }
    $blocks = kal_get_blocks();
    return array_filter($input, function ($block_name) use ($blocks) {
        return in_array($block_name, $blocks);
    });
}

?>