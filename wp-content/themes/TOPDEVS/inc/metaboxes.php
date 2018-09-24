<?php

// INCLUDE THIS BEFORE you load your ReduxFramework object config file.


// You may replace $redux_opt_name with a string if you wish. If you do so, change loader.php
// as well as all the instances below.
$redux_opt_name = THEME_OPT;

if ( !function_exists( "redux_add_metaboxes" ) ):
	function redux_add_metaboxes($metaboxes) {

        $homepage_options = array();

        $homepage_fields1 = array(
		'title' => 'Top part',
		'icon_class'    => 'icon-large',
		'icon'          => 'el-icon-list-alt',
		'fields' => array(
			array(
				'id'     => 'head-first-string-text',
                'title'       => __('Top string',THEME_OPT),
				'type'   => 'text',
				'description'  => __( 'Heading text')
			),
            array(
                'id'     => 'head-second-string-text',
                'title'       => __('Bottom string',THEME_OPT),
                'type'   => 'text',
                'description'  => __( 'Heading text')
            ),
            array(
                'id'     => 'head-part-background',
                'type'   => 'media',
                'title'  => __( 'Content image',THEME_OPT)
            ),
            array(
				'id'     => 'head-button',
				'type'   => 'text',
				'title'  => __( 'text of button')
			),
            array(
                'id'     => 'link-head-text',
                'type'   => 'text',
                'title'  => __( 'url')
            ),

		)
	);
        $homepage_fields2 = array(
            'title' => 'Services',
            'icon_class'    => 'icon-large',
            'icon'          => 'el-icon-list-alt',
            'fields' => array(
                array(
                    'id'     => 'second-part-head-text',
                    'type'   => 'text',
                    'title'  => __( 'Heading text',THEME_OPT)
                ),
                array(
                    'id'     => 'more-button',
                    'type'   => 'text',
                    'title'  => __( 'Heading text of button')
                ),
                array(
                    'id'     => 'more-link',
                    'type'   => 'text',
                    'title'  => __( 'url')
                ),

            )
        );
        $homepage_fields3 = array(
            'title' => 'WHAT WE OFFER',
            'icon_class'    => 'icon-large',
            'icon'          => 'el-icon-list-alt',
            'fields' => array(
                array(
                    'id'     => 'third-part-head-text',
                    'type'   => 'text',
                    'title'  => __( 'Heading text',THEME_OPT)
                ),
                array(
                    'id'          => 'offer-sections',
                    'type'        => 'slides',
                    'title'       => __('Section Options',THEME_OPT),
                    'subtitle'    => __('Unlimited slides with drag and drop sortings.',THEME_OPT),
                    'placeholder' => array(
                        'title'           => __('This is a title',THEME_OPT),
                        'description'     => __('Description Here',THEME_OPT),
                        'url'             => __('Give us a link!',THEME_OPT),
                        ),
                )

            )
        );
        $homepage_fields4 = array(
            'title' => 'LATEST WORKS',
            'icon_class'    => 'icon-large',
            'icon'          => 'el-icon-list-alt',
            'fields' => array(
                array(
                    'id'     => 'four-part-head-text',
                    'type'   => 'text',
                    'title'  => __( 'Heading text',THEME_OPT)
                ),
                array(
                    'id'     => 'four-part-button-link',
                    'type'   => 'text',
                    'title'  => __( 'View more link URL',THEME_OPT)
                )
            )
        );
        $homepage_fields5 = array(
            'title' => 'ABOUT US',
            'icon_class'    => 'icon-large',
            'icon'          => 'el-icon-list-alt',
            'fields' => array(
                array(
                    'id'     => 'five-part-head-text',
                    'type'   => 'text',
                    'title'  => __( 'Heading text',THEME_OPT)
                ),
                array(
                    'id'     => 'five-part-content',
                    'type'   => 'editor',
                    'title'  => __( 'Content text',THEME_OPT)
                ),
                array(
                    'id'     => 'five-part-image',
                    'type'   => 'media',
                    'title'  => __( 'Content image',THEME_OPT)
                ),
            )
        );
        $homepage_fields6 = array(
            'title' => 'REQUEST FOR PROPOSAL',
            'icon_class'    => 'icon-large',
            'icon'          => 'el-icon-list-alt',
            'fields' => array(
                array(
                    'id'     => 'six-part-head-text',
                    'type'   => 'text',
                    'title'  => __( 'Heading text',THEME_OPT)
                ),
                array(
                    'id'     => 'six-part-content',
                    'type'   => 'editor',
                    'title'  => __( 'Content text',THEME_OPT)
                ),

            )
        );

	$homepage_options[] = $homepage_fields1;
	$homepage_options[] = $homepage_fields2;
	$homepage_options[] = $homepage_fields3;
	$homepage_options[] = $homepage_fields4;
	$homepage_options[] = $homepage_fields5;
	$homepage_options[] = $homepage_fields6;
	//post services
    $post_services_options = array();

       $post_services_fields = array(
            'title' => 'Post services fields',
            'icon_class'    => 'icon-large',
            'icon'          => 'el-icon-list-alt',
            'fields' => array(
                array(
                    'id'       => 'post-services-color-gradient',
                    'type'     => 'color_gradient',
                    'title'    => __('Header Gradient Color Option', THEME_OPT),
                    'validate' => 'color',
                    'default'  => array(
                        'from' => '#1e73be',
                        'to'   => '#00897e',
                    )
                ),

                array(
                    'id'       => 'post-attr-service-type',
                    'type'     => 'select',
                    'title'    => __('Select Type Services', THEME_OPT),
                    // Must provide key => value pairs for select options
                    'options'  => array(
                        'Business' => 'Business',
                        'Entertainment' => 'Entertainment',
                        'Messangers' => 'Messangers',
                        'Blockchain & Cryptography' => 'Blockchain & Cryptography',
                        'Finance' => 'Finance',
                        'Dating' => 'Dating',
                        'Location tracking' => 'Location tracking',
                        'Healthcare & Wellness' => 'Healthcare & Wellness'
                    ),
                    'default'  => '1',
                ),

            )
        );

    $post_services_options[] = $post_services_fields;

     $post_works_options = array();

        $latest_works_fields = array(
            'title' => 'Post latest works fields',
            'icon_class'    => 'icon-large',
            'icon'          => 'el-icon-list-alt',
            'fields' => array(
                array(
                    'id'       => 'post-works-image-head',
                    'type'     => 'media',
                    'title'    => __('Post head Sample image', THEME_OPT),
                ),
                array(
                    'id'       => 'post-works-color-gradient',
                    'type'     => 'color_gradient',
                    'title'    => __('Header Gradient Color Option', THEME_OPT),
                    'validate' => 'color',
                    'default'  => array(
                        'from' => '#1e73be',
                        'to'   => '#00897e',
                    )
                ),
                array(
                    'id'       => 'post-works-type-select',
                    'type'     => 'select',
                    'title'    => __('Select Type Work', THEME_OPT),
                     // Must provide key => value pairs for select options
                    'options'  => array(
                        'Web' => 'Web',
                        'Mobile' => 'Mobile'
                    ),
                    'default'  => '1'
                ),
                array(
                    'id'       => 'post-service-type',
                    'type'     => 'select',
                    'multi'    => true,
                    'title'    => __('Select Type Services', THEME_OPT),
                    // Must provide key => value pairs for select options
                    'options'  => array(
                        'Business' => 'Business',
                        'Entertainment' => 'Entertainment',
                        'Messangers' => 'Messangers',
                        'Blockchain & Cryptography' => 'Blockchain & Cryptography',
                        'Finance' => 'Finance',
                        'Dating' => 'Dating',
                        'Location tracking' => 'Location tracking',
                        'Healthcare & Wellness' => 'Healthcare & Wellness'
                    ),
                    'default'  => array('1'),
                ),
                array(
                    'id'       => 'post-works-services',
                    'type'     => 'text',
                    'title'    => __('Service', THEME_OPT),
                ),
                array(
                    'id'       => 'post-works-category',
                    'type'     => 'text',
                    'title'    => __('Category ', THEME_OPT),
                ),
                array(
                    'id'       => 'post-works-technology',
                    'type'     => 'editor',
                    'title'    => __('Technologies', THEME_OPT),
                ),
                array(
                    'id'       => 'post-works-image-screen',
                    'type'     => 'media',
                    'title'    => __('Code Sample image-screen', THEME_OPT),
                ),
                array(
                    'id'       => 'post-works-link',
                    'type'     => 'text',
                    'title'    => __('Link ', THEME_OPT),
                ),
                array(
                    'id'               => 'post-works-gallery',
                    'type'             => 'repeatable_list',
                    'accordion'      => true,
                    'title'            => __('Gallery images:', THEME_OPT),
                    'add_button'     => __( 'Add Item'),
                    'remove_button'  => __( 'Remove Item'),
                    'fields'         => array(
                        array(
                            'id'     => 'gallery-image',
                            'type'   => 'media',
                            'title'  => __( 'single-image',THEME_OPT)
                        ),

                    )
                )
            )
        );

     $post_works_options[] = $latest_works_fields;

     $contactpage_options = array();

        $contactpage_fields = array(
            'title' => 'Contact fields',
            'icon_class'    => 'icon-large',
            'icon'          => 'el-icon-list-alt',
            'fields' => array(

                array(
                    'id'     => 'contact-general-text',
                    'type'   => 'editor',
                    'title'  => __( 'Contact general text (left)',THEME_OPT)
                    ),
                array(
                    'id'     => 'contact-background',
                    'type'   => 'color',
                    'title'  => __( 'Color for background right form',THEME_OPT),
                    'default'  => '#FFFFFF'
                    ),
                array(
                    'id'     => 'contact-top-text',
                    'type'   => 'editor',
                    'title'  => __( 'Contact top text',THEME_OPT)
                ),
                )

        );

     $contactpage_options[] =$contactpage_fields;

	$metaboxes[] = array(
		'id'            => 'home-page-options',
		'title'         => __( 'Page options', THEME_OPT ),
		'post_types'    => array( 'page' ),
		'page_template' => array('front-page.php'),
		'position'      => 'normal', // normal, advanced, side
		'priority'      => 'high', // high, core, default, low
		'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
		'sections'      => $homepage_options,
	    );
        $metaboxes[] = array(
            'id'            => 'post-services-options',
            'title'         => __( 'FOR SERVICES OPTIONS', THEME_OPT ),
            'post_types'    => array( 'post' ),
            'page_template' => array('services-post-page.php'),
            'position'      => 'normal', // normal, advanced, side
            'priority'      => 'high', // high, core, default, low
            'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
            'sections'      => $post_services_options,
        );
        $metaboxes[] = array(
            'id'            => 'works-page-options',
            'title'         => __( 'FOR LATEST WORKS OPTIONS', THEME_OPT ),
            'post_types'    => array( 'post' ),
            'page_template' => array('works-single-page.php'),
            'position'      => 'normal', // normal, advanced, side
            'priority'      => 'high', // high, core, default, low
            'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
            'sections'      => $post_works_options,
        );
	$metaboxes[] = array(
		'id'            => 'contact-page-options',
		'title'         => __( 'Page contact options', THEME_OPT ),
		'post_types'    => array( 'page' ),
		'page_template' => array('contact.php'),
		'position'      => 'normal', // normal, advanced, side
		'priority'      => 'high', // high, core, default, low
		'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
		'sections'      => $contactpage_options,
	);

	return $metaboxes;
  }
  add_action("redux/metaboxes/{$redux_opt_name}/boxes", 'redux_add_metaboxes');
endif;

