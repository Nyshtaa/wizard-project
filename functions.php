<?php
function enqueue_styles() {
    // Підключаємо стилі Bootstrap
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.2/css/bootstrap.min.css');
    // Підключаємо шрифт Inter
    wp_enqueue_style('inter-font', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Підключаємо стилі теми
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}
add_action('wp_enqueue_scripts', 'enqueue_styles');
add_filter('theme_page_templates', function($post_templates) {
    $post_templates['template-wizard.php'] = 'Wizard Page';
    return $post_templates;
});

function enqueue_wizard_scripts() {
    wp_enqueue_script('wizard-steps-script', get_stylesheet_directory_uri() . '/script.js', array('jquery'), null, true);
    echo "<!-- wizard-steps.js is enqueued -->";
}
add_action('wp_enqueue_scripts', 'enqueue_wizard_scripts');

