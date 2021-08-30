<?php
//
//function custom_editor_styles() {
//    add_editor_style( 'my-editor-styles.css');
//}
//
//add_action( 'admin_init', 'custom_editor_styles' );

function lwp_body_callout($wp_customize)
{
    $wp_customize->add_section('lwp-body-callout-section', array(
        'title' => 'Body content'
    ));
    $wp_customize->add_section('lwp-body-callout-display', array(
        'default' => 'No'
    ));
    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'lwp-body-callout-display-control', array(
        'label' => 'Dysplay this section?',
        'section' => 'lwp-body-callout-section',
        'settings' => 'lwp-body-callout-display',
        'type' => 'select',
        'choices' => array('No' => 'No', 'Yes' => 'Yes'),
    )));


    $wp_customize->add_setting('lwp-body-callout-first-text', array(
        'default' => 'Example Text!'
    ));
    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'lwp-body-callout-first-text-control', array(
        'label' => 'Text',
        'section' => 'lwp-body-callout-section',
        'settings' => 'lwp-body-callout-first-text',
        'type' => 'textarea',
    )));
    $wp_customize->add_setting('lwp-body-callout-announcements', array(
        'default' => 'Example Text!'
    ));
    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'lwp-body-callout-announcements-control', array(
        'label' => 'Text',
        'section' => 'lwp-body-callout-section',
        'settings' => 'lwp-body-callout-announcements',
        'type' => 'textarea',
    )));
    $wp_customize->add_setting('lwp-body-callout-image');
    $wp_customize->add_control(new WP_Customize_Cropped_image_Control($wp_customize, 'lwp-body-callout-image-control', array(
        'label' => 'Image',
        'section' => 'lwp-body-callout-section',
        'settings' => 'lwp-body-callout-image',
        'width' => 400,
        'height' => 500,
    )));


    $wp_customize->add_section('lwp-recent-callout-section', array(
        'title' => 'Recent Work Notices'
    ));
    $wp_customize->add_section('lwp-recent-callout-display', array(
        'default' => 'No'
    ));
    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'lwp-recent-callout-display-control', array(
        'label' => 'Dysplay this section?',
        'section' => 'lwp-recent-callout-section',
        'settings' => 'lwp-recent-callout-display',
        'type' => 'select',
        'choices' => array('No' => 'No', 'Yes' => 'Yes'),
    )));


    $wp_customize->add_setting('lwp-recent-callout-1-text', array(
        'default' => 'text'
    ));
    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'lwp-recent-callout-1-text-control', array(
        'label' => 'Nadpis 1',
        'section' => 'lwp-recent-callout-section',
        'settings' => 'lwp-recent-callout-1-text',
        'type' => 'text',
    )));
    $wp_customize->add_setting('lwp-recent-callout-1-textarea', array(
        'default' => 'text'
    ));
    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'lwp-recent-callout-1-control', array(
        'label' => 'Text 1',
        'section' => 'lwp-recent-callout-section',
        'settings' => 'lwp-recent-callout-1-textarea',
        'type' => 'textarea',
    )));


    $wp_customize->add_setting('lwp-recent-callout-2-text', array(
        'default' => 'text'
    ));
    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'lwp-recent-callout-2-text-control', array(
        'label' => 'Nadpis 2',
        'section' => 'lwp-recent-callout-section',
        'settings' => 'lwp-recent-callout-2-text',
        'type' => 'text',
    )));
    $wp_customize->add_setting('lwp-recent-callout-2-textarea', array(
        'default' => 'text'
    ));
    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'lwp-recent-callout-2-control', array(
        'label' => 'Text 2',
        'section' => 'lwp-recent-callout-section',
        'settings' => 'lwp-recent-callout-2-textarea',
        'type' => 'textarea',
    )));


    $wp_customize->add_setting('lwp-recent-callout-3-text', array(
        'default' => 'text'
    ));
    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'lwp-recent-callout-3-text-control', array(
        'label' => 'Nadpis 3',
        'section' => 'lwp-recent-callout-section',
        'settings' => 'lwp-recent-callout-3-text',
        'type' => 'text',
    )));
    $wp_customize->add_setting('lwp-recent-callout-3-textarea', array(
        'default' => 'text'
    ));
    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'lwp-recent-callout-3-control', array(
        'label' => 'Text 3',
        'section' => 'lwp-recent-callout-section',
        'settings' => 'lwp-recent-callout-3-textarea',
        'type' => 'textarea',
    )));


    $wp_customize->add_setting('lwp-recent-callout-4-text', array(
        'default' => 'text'
    ));
    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'lwp-recent-callout-4-text-control', array(
        'label' => 'Nadpis 4',
        'section' => 'lwp-recent-callout-section',
        'settings' => 'lwp-recent-callout-4-text',
        'type' => 'text',
    )));
    $wp_customize->add_setting('lwp-recent-callout-4-textarea', array(
        'default' => 'text'
    ));
    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'lwp-recent-callout-4-control', array(
        'label' => 'Text 4',
        'section' => 'lwp-recent-callout-section',
        'settings' => 'lwp-recent-callout-4-textarea',
        'type' => 'textarea',
    )));


    $wp_customize->add_setting('lwp-recent-callout-5-text', array(
        'default' => 'text'
    ));
    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'lwp-recent-callout-5-text-control', array(
        'label' => 'Nadpis 5',
        'section' => 'lwp-recent-callout-section',
        'settings' => 'lwp-recent-callout-5-text',
        'type' => 'text',
    )));
    $wp_customize->add_setting('lwp-recent-callout-5-textarea', array(
        'default' => 'text'
    ));
    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'lwp-recent-callout-5-control', array(
        'label' => 'Text 5',
        'section' => 'lwp-recent-callout-section',
        'settings' => 'lwp-recent-callout-5-textarea',
        'type' => 'textarea',
    )));


    $wp_customize->add_setting('lwp-recent-callout-6-text', array(
        'default' => 'text'
    ));
    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'lwp-recent-callout-6-text-control', array(
        'label' => 'Nadpis 6',
        'section' => 'lwp-recent-callout-section',
        'settings' => 'lwp-recent-callout-6-text',
        'type' => 'text',
    )));
    $wp_customize->add_setting('lwp-recent-callout-6-textarea', array(
        'default' => 'text'
    ));
    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'lwp-recent-callout-6-control', array(
        'label' => 'Text 6',
        'section' => 'lwp-recent-callout-section',
        'settings' => 'lwp-recent-callout-6-textarea',
        'type' => 'textarea',
    )));


    $wp_customize->add_setting('lwp-recent-callout-7-text', array(
        'default' => 'text'
    ));
    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'lwp-recent-callout-7-text-control', array(
        'label' => 'Nadpis 7',
        'section' => 'lwp-recent-callout-section',
        'settings' => 'lwp-recent-callout-7-text',
        'type' => 'text',
    )));
    $wp_customize->add_setting('lwp-recent-callout-7-textarea', array(
        'default' => 'text'
    ));
    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'lwp-recent-callout-7-control', array(
        'label' => 'Text 7',
        'section' => 'lwp-recent-callout-section',
        'settings' => 'lwp-recent-callout-7-textarea',
        'type' => 'textarea',
    )));


    $wp_customize->add_setting('lwp-recent-callout-8-text', array(
        'default' => 'text'
    ));
    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'lwp-recent-callout-8-text-control', array(
        'label' => 'Nadpis 8',
        'section' => 'lwp-recent-callout-section',
        'settings' => 'lwp-recent-callout-8-text',
        'type' => 'text',
    )));
    $wp_customize->add_setting('lwp-recent-callout-8-textarea', array(
        'default' => 'text'
    ));
    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'lwp-recent-callout-8-control', array(
        'label' => 'Text 8',
        'section' => 'lwp-recent-callout-section',
        'settings' => 'lwp-recent-callout-8-textarea',
        'type' => 'textarea',
    )));
}

function plugin_myContentFilter($content)
{
    // Take the existing content and return a subset of it
    return wp_trim_words($content, 25);
//    return substr($content, 0, 150).'...';
}

function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'JON data external 1',
        'id'            => 'home_json_data_1',
    ) );
    register_sidebar( array(
        'name'          => 'JON data external 2',
        'id'            => 'home_json_data_2',
    ) );

}
function json_data_get_api() {
    $url = 'https://data.cityofnewyork.us/resource/9d9t-bmk7.json';
    $arguments = array(
        'method' => 'GET'
    );
    $response = wp_remote_get($url, $arguments);

    if(is_wp_error($response)){
        $error_message = $response->get_error_message();
        echo 'Error:'.$error_message;
    }
    $results = json_decode(wp_remote_retrieve_body($response));
    $data = $results[0]->facility_name;
    return '<div class="home_get_img_1"><div style="padding-left: 30px">Alternate Side Parking: '.$data.'</div> ';
}
function json_data_get_api_2() {
    $url = 'https://data.cityofnewyork.us/resource/9d9t-bmk7.json';
    $arguments = array(
        'method' => 'GET'
    );
    $response = wp_remote_get($url, $arguments);

    if(is_wp_error($response)){
        $error_message = $response->get_error_message();
        echo 'Error:'.$error_message;
    }
    $results = json_decode(wp_remote_retrieve_body($response));
    $data = $results[0]->borough;
    return '<div class="home_get_img_2"><div style="padding-left: 30px">Collections: '.$data.'</div> ';
}


add_shortcode('external_data','json_data_get_api');
add_shortcode('external_data_2','json_data_get_api_2');
add_action('widgets_init', 'arphabet_widgets_init' );

//add_filter('widget_text','php_execute',100);

add_filter("the_content", "plugin_myContentFilter");
add_action('customize_register', 'lwp_body_callout');
add_action('customize_recent', 'lwp_recent_callout');
