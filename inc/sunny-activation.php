<?php

require_once get_template_directory().'/inc/class-tgm-plugin-activation.php';

function sunny_activation(){
    $plugins=array(
        array(
            'name'=>__('Advanced Custom Fields','sunny'),
            'slug'=>'advanced-custom-fields',
            'required'=>true
        )
        );
        $config=array(
           'id'=>'sunny_plugins_activation',
           'menu'=>'sunny-plugins-activation',
           'parent_slug'=>'themes.php',
           'has_notice'=>true 
        );
        tgmpa($plugins,$config);

}
add_action('tgmpa_register','sunny_activation');

?>