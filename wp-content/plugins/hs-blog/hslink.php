<?php
/*
Plugin Name: HubSpot connector
Plugin URI: http://www.effedodici.com
Description: Integrate easily HubSpot into Wordpress
Version: 1.1.7
Author: Marco Stranieri (Effedodici Srl)
Author URI: http://www.effedodici.com
*/

add_action( 'admin_init', 'hslink_settings_init' );


function hslink_settings_init() {
    register_setting( 'hslink', 'hslink_options' );


 add_settings_section(
 'hslink_section_developers',
 __( '', 'hslink' ),
 'hslink_section_developers_cb',
 'hslink'
 );

  add_settings_section(
 'hslink_section_blog',
 __( '', 'hslink' ),
 'hslink_section_blog_cb',
 'hslink'
 );

 add_settings_field(
    'hslink_field_api',
    __( 'HubSpot API-KEY', 'hslink' ),
    'hslink_field_api_fn',
    'hslink',
    'hslink_section_developers',
    array(
        'label_for' => 'hslink_field_api',
        'class' => 'hslink_row',
        'hslink_custom_data' => 'custom',
    )
 );

  add_settings_field(
    'hslink_siteid',
    __( 'HubSpot site ID', 'hslink' ),
    'hslink_siteid_fn',
    'hslink',
    'hslink_section_developers',
    array(
        'label_for' => 'hslink_siteid',
        'class' => 'hslink_row',
        'hslink_custom_data' => 'custom',
    )
 );


  add_settings_field(
    'hslink_field_listblogs',
    __( 'Select your blog', 'hslink' ),
    'hslink_field_listblogs_fn',
    'hslink',
    'hslink_section_blog',
    array(
        'label_for' => 'hslink_field_listblogs',
        'class' => 'hslink_row',
        'hslink_custom_data' => 'custom',
    )
 );

  add_settings_field(
    'hslink_field_count',
    __( 'Number of articles to show', 'hslink' ),
    'hslink_field_count_fn',
    'hslink',
    'hslink_section_blog',
    array(
        'label_for' => 'hslink_field_count',
        'class' => 'hslink_row',
        'hslink_custom_data' => 'custom',
    )
 );

   add_settings_field(
    'hslink_field_cols',
    __( 'Number of columns', 'hslink' ),
    'hslink_field_cols_fn',
    'hslink',
    'hslink_section_blog',
    array(
        'label_for' => 'hslink_field_cols',
        'class' => 'hslink_row',
        'hslink_custom_data' => 'custom',
    )
 );

 add_settings_field(
    'hslink_field_blogexcerpt',
    __( 'Show blog text?', 'hslink' ),
    'hslink_field_blogexcerpt_fn',
    'hslink',
    'hslink_section_blog',
    array(
        'label_for' => 'hslink_field_blogexcerpt',
        'class' => 'hslink_row',
        'hslink_custom_data' => 'custom',
    )
 );





}

add_action('init', 'register_script');

function register_script() {
    wp_register_script( 'js', plugins_url('hslink.js', __FILE__), false, '1.0.0' );
    wp_register_style( 'css', plugins_url('hslink.css', __FILE__), false, '1.0.0', 'all');
}


function enqueue_style(){
    wp_enqueue_script('js');
    wp_enqueue_style( 'css' );

    $options = get_option( 'hslink_options' );

    if ($options['hslink_siteid'] != '' && $options['hslink_field_api'] != '') {

        wp_register_script( 'jstrack', plugins_url('hstrack.js', __FILE__), false, '1.0.3' );
        wp_localize_script( 'jstrack', 'hsvars', array('siteid' => $options['hslink_siteid']));
        wp_enqueue_script('jstrack');
    }
}

add_action('wp_enqueue_scripts', 'enqueue_style');


function load_custom_wp_admin_style() {
    if ( $_GET['page'] != 'hslink' ) {
        return;
    }

    wp_enqueue_style( 'bootstrap', plugin_dir_url( __FILE__ ) . '/bootstrap.min.css', false, '3.3.7');
    wp_enqueue_style( 'css-admin', plugin_dir_url( __FILE__ ) . '/hslink_admin.css', false, '1.0.0');
    wp_enqueue_style( 'fa', plugin_dir_url( __FILE__ ) . '/font-awesome.min.css', false, '4.7.0');

}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );


function hslink_options_page() {
  $page_title = 'HubSpot connector for Wordpress';
  $menu_title = 'HubSpot <strong><i class="fa fa-link" aria-hidden="true"></i></strong>';
  $capability = 'manage_options';
  $menu_slug  = 'hslink';
  $function   = 'hslink_options_page_html';
  $icon_url   = plugins_url( 'hs.png', __FILE__ );
  $position   = 1;

  add_menu_page( $page_title,
                 $menu_title, 
                 $capability, 
                 $menu_slug, 
                 $function, 
                 $icon_url, 
                 $position );
}

add_action( 'admin_menu', 'hslink_options_page' );

function hslink_section_developers_cb( $args ) {
 ?>

<p id="hubspot_banner"><img src="<?php echo plugins_url( 'banner.jpg', __FILE__ ); ?>" /></p>

<h3>HubSpot settings</h3>

<p id="hslink_connection">
<?php if(hslink_check_status() == true) { ?>
    <div class="alert alert-success" role="alert"><strong><i class="fa fa-check-circle" aria-hidden="true"></i> HubSpot is connected!</strong></div>
<?php } else { ?>
    <div class="alert alert-danger" role="alert"><strong><i class="fa fa-times" aria-hidden="true"></i> HubSpot is disconnected!</strong></div>
<?php } ?>
</p>

<?php
}

function hslink_section_blog_cb( $args ) {
 ?>
<hr style="border: 0; border-bottom: 1px dashed #ccc; background: #999;" />

<h3>Blog settings</h3>

<h4 class="display-3">How can I implement blog? Integrating the blog is really simple and does not require any programming skills. There are two ways to integrate the blog: through shortcode or PHP.</h4>

<div id="hubspot_blog_implement">
    <div class="hs-jumbotron">
    <?php
        $options = get_option( 'hslink_options' );
        $blogid = $options['hslink_field_listblogs'];
        $limit = $options['hslink_field_count'];
        $cols = $options['hslink_field_cols'];
        $showtext = $options['hslink_field_blogexcerpt'];
        if(!$showtext) { $showtext = "0"; }
        $shortcode = "[hs-blog id=$blogid limit=$limit cols=$cols showtext=$showtext]";
    ?>
      <?php if($options['hslink_field_api'] == "") { ?>
        <div class="alert alert-warning">
          <strong>Warning:</strong> no shortcode available, you need to connect HubSpot first!
        </div>
     <?php } else { ?>
        <p>Shortcode snippet: <code><?php echo $shortcode; ?></code></p>
        <p>PHP snippet: <code><?php echo htmlspecialchars('<?php echo do_shortcode(\'' . $shortcode . '\'); ?>'); ?></code></p>
     <?php } ?>
    </div>
</div>

<?php
}

 
function hslink_field_api_fn( $args ) {
 $options = get_option( 'hslink_options' );
 ?>

 <input value="<?php echo esc_attr( $options['hslink_field_api'] ); ?>" placeholder="zdra0000-****-****-****-************" id="<?php echo esc_attr( $args['label_for'] ); ?>"
 data-custom="<?php echo esc_attr( $args['hslink_custom_data'] ); ?>"
 name="hslink_options[<?php echo esc_attr( $args['label_for'] ); ?>]" />
 

 <p class="description">
 <?php _e( 'Please provide a valid API-KEY. For more information click <a href="https://knowledge.hubspot.com/articles/kcs_article/integrations/how-do-i-get-my-hubspot-api-key" target="_blank">here</a>.', 'hslink' ); ?>
 </p>
 <?php
}

function hslink_field_count_fn( $args ) {
 $options = get_option( 'hslink_options' );
 ?>

 <input <?php if($options['hslink_field_api'] == "") { echo 'disabled'; } ?> value="<?php echo esc_attr( $options['hslink_field_count'] ); ?>" id="<?php echo esc_attr( $args['label_for'] ); ?>"
 data-custom="<?php echo esc_attr( $args['hslink_custom_data'] ); ?>"
 name="hslink_options[<?php echo esc_attr( $args['label_for'] ); ?>]" />
 
 <p class="description">
 <?php _e( 'How many articles do you want to show?', 'hslink' ); ?>
 </p>
 <?php
}

function hslink_field_cols_fn( $args ) {
 $options = get_option( 'hslink_options' );
 ?>

 <input <?php if($options['hslink_field_api'] == "") { echo 'disabled'; } ?> value="<?php echo esc_attr( $options['hslink_field_cols'] ); ?>" id="<?php echo esc_attr( $args['label_for'] ); ?>"
 data-custom="<?php echo esc_attr( $args['hslink_custom_data'] ); ?>"
 name="hslink_options[<?php echo esc_attr( $args['label_for'] ); ?>]" />
 
 <p class="description">
 <?php _e( 'How many columns do you want to show?', 'hslink' ); ?>
 </p>
 <?php
}

function hslink_field_blogexcerpt_fn( $args ) {
 $options = get_option( 'hslink_options' );
 ?>

<input <?php if($options['hslink_field_api'] == "") { echo 'disabled'; } ?> name="hslink_options[<?php echo esc_attr( $args['label_for'] ); ?>]" 
    type="checkbox" id="<?php echo esc_attr( $args['label_for'] ); ?>" 
    value="1" <?php if ($options['hslink_field_blogexcerpt']) { echo "checked"; } ?> />


 <?php
}

function hslink_siteid_fn( $args ) {
 $options = get_option( 'hslink_options' );
 ?>

 <input <?php if($options['hslink_field_api'] == "") { echo 'disabled'; } ?> value="<?php echo esc_attr( $options['hslink_siteid'] ); ?>" placeholder="1234567" id="<?php echo esc_attr( $args['label_for'] ); ?>"
 data-custom="<?php echo esc_attr( $args['hslink_custom_data'] ); ?>"
 name="hslink_options[<?php echo esc_attr( $args['label_for'] ); ?>]" />
 <p class="description">
 <?php _e( 'If you insert your site ID, we will grab all website data to yout HubSpot account.', 'hslink' ); ?>
 </p>

 <?php
}

function hslink_field_listblogs_fn( $args ) {
 $options = get_option( 'hslink_options' );
 ?>

<select <?php if($options['hslink_field_api'] == "") { echo 'disabled'; } ?> name="hslink_options[<?php echo esc_attr( $args['label_for'] ); ?>]" 
        id="<?php echo esc_attr( $args['label_for'] ); ?>"> 

<?php
    $content = file_get_contents('https://api.hubapi.com/content/api/v2/blogs?hapikey=' . esc_attr( $options['hslink_field_api'] ));
    $data = json_decode($content);
    
    foreach($data->objects as $blog) {
    ?>
        <option value="<?php echo $blog->id; ?>" <?php if ($options['hslink_field_listblogs'] == $blog->id) { echo "selected"; } ?> >
            <?php echo $blog->name ?>
        </option>
    <?php
    }
?>
 
</select>

 <p class="description">
 <?php _e( 'This option is only for generate shortcode. If you want to create a new blog, click <a href="https://app.hubspot.com/content/3030015/settings/blog" target="_blank">here</a>.', 'hslink' ); ?>
 </p>
 <?php
}

 
function hslink_options_page_html() {
if ( ! current_user_can( 'manage_options' ) ) {
    return;
}
 
if ( isset( $_GET['settings-updated'] ) ) {
    add_settings_error( 'hslink_messages', 'hslink_message', __( 'Settings Saved', 'hslink' ), 'updated' );
}
 
 settings_errors( 'hslink_messages' );
 ?>
 <div class="wrap">
 <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
 <form action="options.php" method="post">
 <?php
 settings_fields( 'hslink' );
 do_settings_sections( 'hslink' );
 submit_button( 'Save HubSpot settings' );
 ?>
 </form>



 </div>
 <?php
}

function hslink_check_status() {
    $options = get_option( 'hslink_options' );

    $content = file_get_contents('https://api.hubapi.com/content/api/v2/blog-posts?hapikey=' . esc_attr( $options['hslink_field_api'] ));
    $data = json_decode($content);

    if($data) {
        return true;
    }

    return false;
}


function hslink_blog_shortcode( $atts, $content = null ) {
    $options = get_option( 'hslink_options' );
    
    
    $parameters = shortcode_atts( array(
        'id'        => 'id',
        'limit'     => 'limit',
        'cols'      => 'cols',
        'showtext'  => 'showtext'
    ), $atts );
    
    // $cols = $options['hslink_field_cols'];
    // $limit = $options['hslink_field_count'];
    $cols = $parameters['cols'];
    $limit = $parameters['limit'];

    $content = file_get_contents('https://api.hubapi.com/content/api/v2/blog-posts?content_group_id=' . $parameters['id'] . '&state=PUBLISHED&limit=' . $parameters['limit'] . '&hapikey=' . esc_attr( $options['hslink_field_api'] ));
    $data = json_decode($content);

    echo '<div class="row">';
    $i = 0;
    $ic = 1;
    foreach($data->objects as $post) {
        // if($post->current_state  == 'PUBLISHED'){

        $scaf = 12 / $cols;

        // if (mb_detect_encoding($post->meta->post_body, 'UTF-8', true) === false) { 
            $body = utf8_decode($post->meta->post_body); 
        // }
    ?>
        <div class="col-md-<?=$scaf?>">
            <article>
                <header>
                    <figure class="hs-blog-image-block">
                        <a target="_blank" href="<?=$post->absolute_url?>"><img class="hs-blog-image" src="<?=$post->featured_image?>" alt="<?=$post->featured_image_alt_text?>" /></a>
                    </figure>
                    <h1 class="entry-title"><a target="_blank" href="<?=$post->absolute_url?>"><?=$post->html_title?></a></h1>
                    <time class="updated" datetime="<?=$post->created_date_time?>" pubdate><?=$post->created_date_time?></time>
                    <!--<p class="byline author vcard">
                        Scritto da <span class="fn"><?=$post->author_name?></span>
                    </p>-->
                </header>

                <?php if($parameters['showtext'] == "1") { //  $options['hslink_field_blogexcerpt'] ?>
                <p><?=hslink_html2text(hslink_truncateHTML($body, 500))?> <a target="_blank" href="<?=$post->absolute_url?>" class="hs-read-more">Leggi tutto</a></p>
                <?php } ?>
            </article>


        </div>

    <?php

                if($ic == $cols || $ic % $cols == 0) {
                    echo '</div><div class="row">';
                }
                $ic++;
        // }

        $i++;
    }

    echo '</br>';

}

add_shortcode('hs-blog','hslink_blog_shortcode');


function hslink_truncateHTML($html, $limit = 20) {
    static $wrapper = null;
    static $wrapperLength = 0;
    $html = trim($html);
    $html = preg_replace("~<!--.*?-->~", '', $html);
    if ((strlen(strip_tags($html)) > 0) && strlen(strip_tags($html)) == strlen($html))  {
        return substr($html, 0, $limit);
    }
    elseif (is_null($wrapper)) {
        if (!preg_match("~^\s*<[^\s!?]~", $html)) {
            $wrapper = 'div';
            $htmlWrapper = "<$wrapper></$wrapper>";
            $wrapperLength = strlen($htmlWrapper);
            $html = preg_replace("~><~", ">$html<", $htmlWrapper);
        }
    }
    $totalLength = strlen($html);
    if ($totalLength <= $limit) {
        if ($wrapper) {
            return preg_replace("~^<$wrapper>|</$wrapper>$~", "", $html);
        }
        return strlen(strip_tags($html)) > 0 ? $html : '';
    }
    $dom = new DOMDocument;
    $dom->loadHTML($html,  LIBXML_HTML_NOIMPLIED  | LIBXML_HTML_NODEFDTD);
    $xpath = new DOMXPath($dom);
    $lastNode = $xpath->query("./*[last()]")->item(0);
    if ($totalLength > $limit && is_null($lastNode)) {
        if (strlen(strip_tags($html)) >= $limit) {
            $textNode = $xpath->query("//text()")->item(0);
            if ($wrapper) {
                $textNode->nodeValue = substr($textNode->nodeValue, 0, $limit );
                $html = $dom->saveHTML();
                return preg_replace("~^<$wrapper>|</$wrapper>$~", "", $html);
            } else {
                $lengthAllowed = $limit - ($totalLength - strlen($textNode->nodeValue));
                if ($lengthAllowed <= 0) {
                    return '';
                }
                $textNode->nodeValue = substr($textNode->nodeValue, 0, $lengthAllowed);
                $html = $dom->saveHTML();
                return strlen(strip_tags($html)) > 0 ? $html : '';
            }
        } else {
            $textNode = $xpath->query("//text()")->item(0);
            $textNode->nodeValue = substr($textNode->nodeValue, 0, -(($totalLength - ($wrapperLength > 0 ? $wrapperLength : 0)) - $limit));
            $html = $dom->saveHTML();
            return strlen(strip_tags($html)) > 0 ? $html : '';
        }
    }
    elseif ($nextNode = $lastNode->nextSibling) {
        if ($nextNode->nodeType === 3 /* DOMText */) {
            $nodeLength = strlen($nextNode->nodeValue);
            if (($totalLength - ($wrapperLength > 0 ? $wrapperLength : 0)) - $nodeLength >= $limit) {
                $nextNode->parentNode->removeChild($nextNode);
                $html = $dom->saveHTML();
                return hslink_truncateHTML($html, $limit);
            }
            else {
                $nextNode->nodeValue = substr($nextNode->nodeValue, 0, ($limit - (($totalLength - ($wrapperLength > 0 ? $wrapperLength : 0)) - $nodeLength)));
                $html = $dom->saveHTML();
                if ($wrapper) {
                    return preg_replace("~^<$wrapper>|</$wrapper>$~", "", $html);
                }
                return $html;
            } 
        }
    }
    elseif ($lastNode->nodeType === 1 /* DOMElement */) {
        $nodeLength = strlen($lastNode->nodeValue);
        if (($totalLength - ($wrapperLength > 0 ? $wrapperLength : 0)) - $nodeLength >= $limit) {
            $lastNode->parentNode->removeChild($lastNode);
            $html = $dom->saveHTML();
            return hslink_truncateHTML($html, $limit);
        }
        else {
            $lastNode->nodeValue = substr($lastNode->nodeValue, 0, ($limit - (($totalLength - ($wrapperLength > 0 ? $wrapperLength : 0)) - $nodeLength)));
            $html = $dom->saveHTML();
            if ($wrapper) {
                return preg_replace("~^<$wrapper>|</$wrapper>$~", "", $html);
            }
            return $html . "...";
        }
    }
}

function hslink_html2text($Document) {
    $Rules = array ('@<script[^>]*?>.*?</script>@si',
                    '@<[\/\!]*?[^<>]*?>@si',
                    '@([\r\n])[\s]+@',
                    '@&(quot|#34);@i',
                    '@&(amp|#38);@i',
                    '@&(lt|#60);@i',
                    '@&(gt|#62);@i',
                    '@&(nbsp|#160);@i',
                    '@&(iexcl|#161);@i',
                    '@&(cent|#162);@i',
                    '@&(pound|#163);@i',
                    '@&(copy|#169);@i',
                    '@&(reg|#174);@i',
                    '@&#(d+);@e'
             );
    $Replace = array ('',
                      '',
                      '',
                      '',
                      '&',
                      '<',
                      '>',
                      ' ',
                      chr(161),
                      chr(162),
                      chr(163),
                      chr(169),
                      chr(174),
                      'chr()'
                );
  return preg_replace($Rules, $Replace, $Document);
}




function hslink_warning_fn() { 
    if ( !class_exists('HubSpotTrackingCode')) {
    ?>
    
    <div class="notice notice-success is-dismissible">
        <p><?php _e('Keep in touch with us, in next HubSpot connector version we introduce significative new features! <a href="http://www.effedodici.com/inbound" target="_blank"><strong>Read more</strong></a>.', 'hslink_warning'); ?></p>
    </div>
    
    <?php 
    }
}

add_action('admin_notices', 'hslink_warning_fn');






add_action( 'admin_bar_menu', function( \WP_Admin_Bar $bar ) {

    $iconurl = plugins_url( 'hs.png', __FILE__ );
    $iconspan = '<span class="custom-icon" style=" float:left; width:26px !important; height:26px !important; margin-right: 5px!important; margin-left: 10px !important; margin-top: 5px !important; background-image:url(\''.$iconurl.'\');"></span>';

    $title = __( 'HubSpot', 'hslink' );

    $bar->add_menu( array(
        'id'     => 'wpse',
        'title'  => $iconspan.$title,
        'href' => get_site_url() . '/wp-admin/admin.php?page=hslink', 
        'meta'   => array(
            'target'   => '_self',
            'title'    => __( 'HubSpot', 'hslink' ),
            'html'     => '',
        ),
    ) );
}, 999 ); 
?>
