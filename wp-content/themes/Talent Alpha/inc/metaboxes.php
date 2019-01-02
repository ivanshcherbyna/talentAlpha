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
                'type'   => 'editor',
                'description'  => __( 'Content')
            ),
            array(
				'id'     => 'left-button',
				'type'   => 'text',
				'title'  => __( 'text of left button')
			),
            array(
                'id'     => 'left-link-head-text',
                'type'   => 'text',
                'title'  => __( 'url')
            ),
            array(
                'id'     => 'right-button',
                'type'   => 'text',
                'title'  => __( 'text of right button')
            ),
            array(
                'id'     => 'right-link-head-text',
                'type'   => 'text',
                'title'  => __( 'url')
            ),

		)
	);
        $homepage_fields2 = array(
            'title' => 'Second part block',
            'icon_class'    => 'icon-large',
            'icon'          => 'el-icon-list-alt',
            'fields' => array(
                array(
                    'id'     => 'second-section-string-text',
                    'type'   => 'text',
                    'title'  => __( 'Heading text',THEME_OPT)
                ),
                array(
                    'id'     => 'second-string-text',
                    'type'   => 'editor',
                    'title'  => __( 'Content')
                ),
                array(
                    'id'     => 'second-shchedule-link',
                    'type'   => 'text',
                    'title'  => __( 'url')
                ),

            )
        );
        $homepage_fields3 = array(
            'title' => 'Third part block',
            'icon_class'    => 'icon-large',
            'icon'          => 'el-icon-list-alt',
            'fields' => array(
                array(
                    'id' => '1-section-start',
                    'type' => 'section',
                    'subtitle' => __('1 section ', THEME_OPT),
                    'indent' => true
                ),

                        array(
                            'id'       => 'first-step-title',
                            'type'     => 'text',
                            'title'    => __('Name step', THEME_OPT),
                        ),
                        array(
                            'id'       => 'first-step-description',
                            'type'     => 'editor',
                            'title'    => __('description of step', THEME_OPT),
                        ),
                        array(
                            'id'       => 'step-image-one',
                            'type'     => 'media',
                            'title'    => __('image of step', THEME_OPT),
                        ),

                array(
                    'id' => '2-section-start',
                    'type' => 'section',
                    'subtitle' => __('2 section', THEME_OPT),
                    'indent' => true
                ),

                        array(
                            'id'       => 'second-step-title',
                            'type'     => 'text',
                            'title'    => __('Name step', THEME_OPT),
                        ),
                        array(
                            'id'       => 'second-step-description',
                            'type'     => 'editor',
                            'title'    => __('description of step', THEME_OPT),
                        ),
                        array(
                            'id'       => 'step-image-two',
                            'type'     => 'media',
                            'title'    => __('image of step', THEME_OPT),
                        ),
                array(
                            'id'       => 'step-image-two-2',
                            'type'     => 'media',
                            'title'    => __('image of step', THEME_OPT),
                        ),
                array(
                    'id' => '3-section-start',
                    'type' => 'section',
                    'subtitle' => __('3 section', THEME_OPT),
                    'indent' => true
                ),

                        array(
                            'id'       => 'third-step-title',
                            'type'     => 'text',
                            'title'    => __('Name step', THEME_OPT),
                        ),
                        array(
                            'id'       => 'third-step-description',
                            'type'     => 'editor',
                            'title'    => __('description of step', THEME_OPT),
                        ),
                        array(
                            'id'       => 'third-step-image-one',
                            'type'     => 'media',
                            'title'    => __('image of step', THEME_OPT),
                        ),
                        array(
                            'id'       => 'third-step-image-two',
                            'type'     => 'media',
                            'title'    => __('image of step', THEME_OPT),
                        ),
                array(
                    'id' => '4-section-start',
                    'type' => 'section',
                    'subtitle' => __('4 section', THEME_OPT),
                    'indent' => true
                ),

                array(
                    'id'       => 'four-step-title',
                    'type'     => 'text',
                    'title'    => __('Name step', THEME_OPT),
                ),
                array(
                    'id'       => 'four-step-description',
                    'type'     => 'editor',
                    'title'    => __('description of step', THEME_OPT),
                ),
                array(
                    'id'       => 'four-step-image-one',
                    'type'     => 'media',
                    'title'    => __('image of step', THEME_OPT),
                ),
                array(
                    'id'       => 'four-step-image-two',
                    'type'     => 'media',
                    'title'    => __('image of step', THEME_OPT),
                ),
                array(
                    'id'       => 'four-step-image-three',
                    'type'     => 'media',
                    'title'    => __('image of step', THEME_OPT),
                ),
                array(
                    'id'       => 'four-step-link',
                    'type'     => 'text',
                    'title'    => __('URL schedule link', THEME_OPT),
                ),
                array(
                    'id'     => '4-section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),

                    )

        );
        $homepage_fields4 = array(
            'title' => 'Fourth part block',
            'icon_class'    => 'icon-large',
            'icon'          => 'el-icon-list-alt',
            'fields' => array(
                array(
                    'id'     => 'four-part-head-text',
                    'type'   => 'text',
                    'title'  => __( 'Heading text',THEME_OPT)
                ),
                array(
                    'id'             => 'section-four-repeater-items',
                    'type'           => 'repeatable_list',
                    'accordion'      => true,
                    'title'          => __('Elements Grid:', THEME_OPT),
                    'add_button'     => __( 'Add Item', THEME_OPT),
                    'remove_button'  => __( 'Remove Item', THEME_OPT),
                    'fields'         => array(
                        array(
                            'id'       => 'info-list-item-img',
                            'type'     => 'media',
                            'title'    => __('image', THEME_OPT),
                        ),
                        array(
                            'id'       => 'info-list-item-header',
                            'type'     => 'text',
                            'title'    => __('text header', THEME_OPT),
                        ),
                        array(
                            'id'       => 'info-list-item-text',
                            'type'     => 'editor',
                            'title'    => __('description', THEME_OPT),
                        ),
                        array(
                            'id'       => 'info-list-item-link',
                            'type'     => 'text',
                            'title'    => __('URL link', THEME_OPT),
                        ),
                    )
                ),

            )
        );
        $homepage_fields5 = array(
            'title' => 'Fifth part block',
            'icon_class'    => 'icon-large',
            'icon'          => 'el-icon-list-alt',
            'fields' => array(
                array(
                    'id'     => 'five-part-head-text',
                    'type'   => 'text',
                    'title'  => __( 'Heading text',THEME_OPT)
                ),
                array(
                    'id' => '5-section-start',
                    'type' => 'section',
                    'subtitle' => __('left block', THEME_OPT),
                    'indent' => true
                ),
                array(
                    'id'     => 'five-left-img',
                    'type'   => 'media',
                    'title'  => __( 'left head image ',THEME_OPT)
                ),
                array(
                    'id'     => 'five-left-head',
                    'type'   => 'text',
                    'title'  => __( 'Head text',THEME_OPT)
                ),
                array(
                    'id'     => 'five-left-list',
                    'type'   => 'multi_text',
                    'title'  => __( 'List text',THEME_OPT)
                ),
                array(
                    'id'     => 'five-left-button-text',
                    'type'   => 'text',
                    'title'  => __( 'Button text',THEME_OPT)
                ),
                array(
                    'id'     => 'five-left-button-link',
                    'type'   => 'text',
                    'title'  => __( 'Button URL',THEME_OPT)
                ),
                array(
                    'id' => '6-section-start',
                    'type' => 'section',
                    'subtitle' => __('right block', THEME_OPT),
                    'indent' => true
                ),
                array(
                    'id'     => 'five-right-img',
                    'type'   => 'media',
                    'title'  => __( 'left head image ',THEME_OPT)
                ),
                array(
                    'id'     => 'five-right-head',
                    'type'   => 'text',
                    'title'  => __( 'Head text',THEME_OPT)
                ),
                array(
                    'id'     => 'five-right-list',
                    'type'   => 'multi_text',
                    'title'  => __( 'List text',THEME_OPT)
                ),
                array(
                    'id'     => 'five-right-button-text',
                    'type'   => 'text',
                    'title'  => __( 'Button text',THEME_OPT)
                ),
                array(
                    'id'     => 'five-right-button-link',
                    'type'   => 'text',
                    'title'  => __( 'Button URL',THEME_OPT)
                ),
            )
        );
        $homepage_fields6 = array(
            'title' => 'Sixth part block',
            'icon_class'    => 'icon-large',
            'icon'          => 'el-icon-list-alt',
            'fields' => array(
                array(
                    'id'     => 'sixth-part-head-text',
                    'type'   => 'text',
                    'title'  => __( 'Heading text',THEME_OPT)
                ),
                array(
                    'id' => '7-section-start',
                    'type' => 'section',
                    'subtitle' => __('founder block', THEME_OPT),
                    'indent' => true
                ),
                array(
                    'id'     => 'team-founder1-name',
                    'type'   => 'editor',
                    'title'  => __( 'First founder name',THEME_OPT)
                ),
                array(
                    'id'     => 'team-founder1-img',
                    'type'   => 'media',
                    'title'  => __( 'Founder first photo',THEME_OPT)
                ),
                array(
                    'id'     => 'team-founder1-link',
                    'type'   => 'text',
                    'title'  => __( 'Founder first link',THEME_OPT)
                ),
                array(
                    'id' => '8-section-start',
                    'type' => 'section',
                    'subtitle' => __('founder block', THEME_OPT),
                    'indent' => true
                ),
                array(
                    'id'     => 'team-founder2-name',
                    'type'   => 'editor',
                    'title'  => __( 'Second founder name',THEME_OPT)
                ),
                array(
                    'id'     => 'team-founder2-img',
                    'type'   => 'media',
                    'title'  => __( 'Founder second photo',THEME_OPT)
                ),
                array(
                    'id'     => 'team-founder2-link',
                    'type'   => 'text',
                    'title'  => __( 'Founder second link',THEME_OPT)
                ),

                array(
                    'id' => '9-section-start',
                    'type' => 'section',
                    'subtitle' => __('founder block', THEME_OPT),
                    'indent' => true
                ),
                array(
                    'id'     => 'team-founder3-name',
                    'type'   => 'editor',
                    'title'  => __( 'Third founder name',THEME_OPT)
                ),
                array(
                    'id'     => 'team-founder3-img',
                    'type'   => 'media',
                    'title'  => __( 'Founder third photo',THEME_OPT)
                ),
                array(
                    'id'     => 'team-founder3-link',
                    'type'   => 'text',
                    'title'  => __( 'Founder third link',THEME_OPT)
                ),
                array(
                    'id' => '10-section-start',
                    'type' => 'section',
                    'subtitle' => __('Platform Team block', THEME_OPT),
                    'indent' => true
                ),
                array(
                    'id'     => 'team-platform-head',
                    'type'   => 'text',
                    'title'  => __( 'Head text',THEME_OPT)
                ),
                array(
                    'id'             => 'team-repeater-items',
                    'type'           => 'repeatable_list',
                    'accordion'      => true,
                    'title'          => __('Team list:', THEME_OPT),
                    'add_button'     => __( 'Add Person', THEME_OPT),
                    'remove_button'  => __( 'Remove Person', THEME_OPT),
                    'fields'         => array(
                        array(
                            'id'       => 'team-item-img',
                            'type'     => 'media',
                            'title'    => __('Person image', THEME_OPT),
                        ),
                        array(
                            'id'       => 'team-item-name',
                            'type'     => 'text',
                            'title'    => __('Person name', THEME_OPT),
                        ),
                        array(
                            'id'       => 'team-item-link',
                            'type'     => 'text',
                            'title'    => __('Person link', THEME_OPT),
                        )

                    )
                ),
                array(
                    'id' => '11-section-start',
                    'type' => 'section',
                    'subtitle' => __('Advisors block', THEME_OPT),
                    'indent' => true
                ),
                array(
                    'id'     => 'advisors-head',
                    'type'   => 'text',
                    'title'  => __( 'Head text',THEME_OPT)
                ),
                array(
                    'id'             => 'advisors-repeater-items',
                    'type'           => 'repeatable_list',
                    'accordion'      => true,
                    'title'          => __('Advisors list:', THEME_OPT),
                    'add_button'     => __( 'Add Person', THEME_OPT),
                    'remove_button'  => __( 'Remove Person', THEME_OPT),
                    'fields'         => array(
                        array(
                            'id'       => 'advisors-item-img',
                            'type'     => 'media',
                            'title'    => __('Person image', THEME_OPT),
                        ),
                        array(
                            'id'       => 'advisors-item-name',
                            'type'     => 'text',
                            'title'    => __('Person name', THEME_OPT),
                        ),
                        array(
                            'id'       => 'advisors-item-link',
                            'type'     => 'text',
                            'title'    => __('Person link', THEME_OPT),
                        )

                    )
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
        

	return $metaboxes;
  }
  add_action("redux/metaboxes/{$redux_opt_name}/boxes", 'redux_add_metaboxes');
endif;

