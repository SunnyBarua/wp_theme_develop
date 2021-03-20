<?php

if(class_exists('CSF')){
    $prefix= 'sunny_options';

    CSF::createOptions($prefix,array(
        'menu_title'=> __('Sunny Options','sunny'),
        'menu_slug'=>__ ('Sunny-options'),
        'framework_title'=>'Sunny Options - <small>Sunny</small>',
        'menu_parent'=>'themes.php',
        'menu_type'=>'submenu'
    ));
    CSF::createSection($prefix,array(
        'id'=> 'header_options',
        'title'=> 'Header Options',
        'icon'=>'fas fa-address-card'
    ));
    CSF::createSection($prefix,array(
        'parent'=>'header_options',
        'title'=>__('Header Left','sunny'),
        'icon'=>'fas fa-arrow-right',
        'fields'=>array(
            array(
                'id'=>'header_email',
                'type'=>'text',
                'title'=>__('Email Address','sunny')
            ),
            array(
                'id'=>'header_phone',
                'type'=>'text',
                'title'=> __('Phone Number','sunny')
            )
        )
            ));
            CSF::createSection($prefix,array(
                'title'=>'Header Icons',
                'parent'=>'header_options',
                'icon'=>'fas fa-arrow-right',
                'fields'=>array(
                    array(
                        'id'=>'header_icons',
                        'type'=> 'group',
                        'title'=> __('Header Icons','sunny'),
                        'button_title'=>__('Add New Social Box', 'sunny'), 
                        'fields'=>array(
                            array(
                                'id'=>__('social_title','sunny'),
                                'type'=>'text',
                                'title'=>'Social Title'
                            ),
                            array(
                                'id'=>'social_link',
                                'type'=>'text',
                                'title'=>__('Social Link','sunny')
                            ),
                            array(
                                'id'=>'social_icon',
                                'type'=>'icon',
                                'title'=>__('Social Icon','sunny')
                            )
                        )
                    ),
                   
                )
                    ));

                    CSF::createSection($prefix,array(
                        'parent'=>'header_options',
                        'title'=>'Logo',
                        'icon'=>'fas fa-arrow-right',
                        'fields'=>array(
                            array(
                            'id'=>'logo',
                            'type'=>'media',
                            'title'=>__('Upload Logo','sunny')
                            ),
                            array(
                                'id'=>'favicon',
                                'type'=>'media',
                                'title'=>__('Upload Favicon','sunny')
                                )

                        )

                    ));


                    CSF::createSection($prefix,array(
                        'parent'=>'header_options',
                        'icon'=>'fas fa-arrow-right',
                        'title'=>__('Header Styling','sunny'),
                        'fields'=>array(
                            array(
                                'id'=>'header_background',
                                'type'=>'background',
                                'title'=>__('Header Background Color / Image','sunny'),
                                'output'=>array('.header-top')
                            ),
                            array(
                                'id'=>'header_color',
                                'type'=>'color',
                                'title'=>__('Header Color','sunny'),
                                'output'=>array('.header-top a')
                            ),
                            array(
                                'id'=>'header_typography',
                                'type'=>'typography',
                                'title'=>__('Header Typography','sunny'),
                                'output'=>array('.header-top a')
                            ),
                            array(
                                'id'=>'header_link_hover',
                                'type'=>'color',
                                'title'=>__('Header Link Hover','sunny'),
                                'output'=>array('.header-top a:hover')
                            )
                            
                        )
                            ));


                    CSF::createSection($prefix,array(
                        'id'=>'about_options',
                        'title'=>__('About Section','sunny'),
                        'icon'=>'fas fa-arrow-right',

                    ));
                    CSF::createSection($prefix,array(
                        'parent'=>'about_options',
                        'title'=>__('About Section Title','sunny'),
                        'fields'=>array(
                            array(
                                'id'=>'about_sec_subtitle',
                                'title'=>__('Sub Title','sunny'),
                                'type'=>'text',
                                'desc'=>__('Write about section subtitle here','sunny')
                            ),
                            array(
                                'id'=>'about_sec_title',
                                'title'=>__('Title','sunny'),
                                'type'=>'text'
                            ),
                            array(
                                'id'=>'about_sec_desc',
                                'title'=>__('Description','sunny'),
                                'type'=>'textarea'
                            )
                        )
                            ));

                            CSF::createSection($prefix,array(
                                'parent'=>'about_options',
                                'title'=>__('About Page Content','sunny'),
                                'fields'=>array(
                                    array(
                                        'id'=>'about_page_title',
                                        'title'=>__('Title','sunny'),
                                        'type'=>'text',
                                        'desc'=>__('Write About Page title here','sunny')
                                    ),
                                    array(
                                        'id'=>'about_page_desc',
                                        'title'=>__('About Page Description','sunny'),
                                        'type'=>'textarea'
                                    ),
                                    array(
                                        'id'=>'about_page_btn',
                                        'title'=>__('About Page Link','sunny'),
                                        'type'=>'text'
                                    )
                                )
                                    ));

                                    CSF::createSection($prefix,array(
                                        'parent'=>'about_options',
                                        'title'=>__('About Page Features','sunny'),
                                        'fields'=>array(
                                            array(
                                                'id'=>'about_page_features',
                                                'title'=>__('About Features','sunny'),
                                                'type'=>'group',
                                                'button_title'=>__('Add New Features','sunny'),
                                                'desc'=>__('Write About Page title here','sunny'),
                                                'fields'=>array(
                                                    array(
                                                        'id'=>'features_title',
                                                        'title'=>__('About Features Title','sunny'),
                                                        'type'=>'text'
                                                    ),
                                                    array(
                                                        'id'=>'features_icon',
                                                        'title'=>__('About Features Icon','sunny'),
                                                        'type'=>'icon'
                                                    ),
                                                    array(
                                                        'id'=>'features_desc',
                                                        'title'=>__('About Features Description','sunny'),
                                                        'type'=>'textarea'
                                                    )
                                                )
                                            )
                                          
                                        )
                                            ));

            CSF::createSection($prefix,array(
                'parent'=>'about_options',
                'title'=>__('About Skill','sunny'),
                'fields'=>array(
                    array(
                        'id'=>'about_skill_list',
                        'title'=>__('About Skill','sunny'),
                        'type'=>'group',
                        'button_title'=>__('Add New Skill','sunny'),
                        'fields'=>array(
                            array(
                                'id'=>'skill_title',
                                'title'=>__('Skill Title','sunny'),
                                'type'=>'text'
                            ),
                            array(
                                'id'=>'skill_numb',
                                'title'=>__('Skill Number','sunny'),
                                'type'=>'text'
                            )
                        )

                    )
                )

                            ));

                            CSF::createSection($prefix,array(
                                'parent'=>'about_options',
                                'title'=>__('About Info','sunny'),
                                'fields'=>array(
                                    array(
                                        'id'=>'about_faq_list',
                                        'title'=>__('About Faq','sunny'),
                                        'type'=>'group',
                                        'button_title'=>__('Add New FAQ','sunny'),
                                        'fields'=>array(
                                            array(
                                                'id'=>'faq_title',
                                                'title'=>__('Faq Title','sunny'),
                                                'type'=>'text'
                                            ),
                                            array(
                                                'id'=>'faq_desc',
                                                'title'=>__('Faq Description','sunny'),
                                                'type'=>'textarea'
                                            )
                                        )
                
                                    )
                                )
                
            ));

            CSF::createSection($prefix,array(
                'id'=>'counter_options',
                'title'=>__('Counter Options','sunny'),
                'icon'=>'fas fa-rocket',
                'fields'=>array(
                    array(
                        'id'=>'counter_lists',
                        'title'=>__('Counter Lists','sunny'),
                        'type'=>'group',
                        'button_title'=>__('Add New Counter'),
                        'fields'=>array(
                            array(
                                'id'=>'counter_title',
                                'type'=>'text',
                                'title'=>__('Counter Title','sunny')
                            ),
                            array(
                                'id'=>'counter_numb',
                                'type'=>'number',
                                'title'=>__('Counter Number','sunny')
                            ),
                            array(
                                'id'=>'counter_icon',
                                'type'=>'icon',
                                'title'=>__('Counter Icon','sunny')
                            ),
                            
                            
                        )
                    )
                )
                        ));

                        CSF::createSection($prefix,array(
                            'id'=>'cta_options',
                            'title'=>__('CTA Options','sunny'),
                            'icon'=>'fas fa-bullhorn',
                            'fields'=>array(
                                array(
                                 'id'=>'cta_switch',
                                 'type'=>'switcher',
                                 'title'=>__('Show CTA?','sunny'),
                                 'default'=>true
                                ),
                                array(
                                    'id'=>'cta_title',
                                    'type'=>'text',
                                    'title'=>__('CTA Title','sunny'),
                                    'default'=>__('best sollution for your business','sunny'),
                                    'help'=>__('Write CTA Title Here','sunny'),
                                    'dependency'=>array('cta_switch','==','true')
                                ),
                                array(
                                    'id'=>'cta_subtitle',
                                    'type'=>'textarea',
                                    'title'=>__('CTA Sub Title','sunny'),
                                    'default'=>__('the can be used on larger scale projectss as well as small scale projectss','sunny'),
                                    'dependency'=>array('cta_switch','==','true')
                                ),
                                array(
                                    'id'=>'cta_btn_txt',
                                    'type'=>'text',
                                    'title'=>__('CTA Button Text','sunny'),
                                    'default'=>__('contact us','sunny'),
                                    'dependency'=>array('cta_switch','==','true')
                                ),
                                array(
                                    'id'=>'cta_btn_url',
                                    'type'=>'text',
                                    'title'=>__('CTA Button Url','sunny'),
                                    'default'=>'https://google.com',
                                    'dependency'=>array('cta_switch','==','true')
                                )
                            )
                                )); 

             CSF::createSection($prefix,array(
                 'id'=>'contact_options',
                 'title'=>__('Contact Options','sunny'),
                 'icon'=>'fas fa-bullhorn',
                 'fields'=>array(
                     array(
                         'id'=>'contact_info',
                         'title'=>__('Contact Info','sunny'),
                         'type'=>'group',
                         'button_title'=>__('Add New Contact Items','sunny'),
                         'fields'=>array(
                             array(
                                 'id'=>'contact_info_title',
                                 'type'=>'text',
                                 'title'=>__('Contact Info Title','sunny')
                             ),
                             array(
                                'id'=>'contact_info_icon',
                                'type'=>'icon',
                                'title'=>__('Contact Info Icon','sunny')
                            ),
                            array(
                                'id'=>'contact_info_des',
                                'type'=>'text',
                                'title'=>__('Contact Info Description','sunny')
                            ),
                         )
                        ),
                        array(
                            'id'=>'contact_map',
                            'type'=>'map',
                            'title'=>__('Contact Map','sunny')
                        )

                 )
                        ));                   


            CSF::createSection($prefix,array(
                'id'=>'footer_options',
                'title'=>__('Footer Options','sunny'),
                'icon'=>'fas fa-rocket',
                'fields'=>array(
                    array(
                        'id'=>'footer_text',
                        'type'=>'text',
                        'title'=>__('Copyright Text','sunny'),
                        'default'=>__('&copy; All Rights Reserved 2020','sunny')
                    ),
                    array(
                        'id'=>'footer_social',
                        'type'=>'group',
                        'title'=>__('Footer Social Links','sunny'),
                        'button_title'=>__('Add New Link','sunny'),
                        'fields'=>array(
                            array(
                                'id'=>'footer_social_title',
                                'type'=>'text',
                                'title'=>__('Footer Link Title','sunny')

                            ),
                            array(
                                'id'=>'footer_social_icon',
                                'type'=>'icon',
                                'title'=>__('Footer Link Icon','sunny')

                            ),
                            array(
                                'id'=>'footer_social_url',
                                'type'=>'text',
                                'title'=>__('Footer Link URL','sunny')

                            ),
                            array(
                                'id'=>'footer_link_target',
                                'type'=>'select',
                                'title'=>__('Select Link Target','sunny'),
                                'options'=>array(
                                    '_self'=>__('Option in Same Tab','sunny',),
                                    '_blank'=>__('Option in New Tab','sunny',),
                                    '_window'=>__('Option in New Window','sunny')
                                ),
                                'default'=>'_blank'
                            )
                        )
                    )
                )
                            ));
}

?>