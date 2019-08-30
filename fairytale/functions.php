<?php 
/*
Theme Name :  fairytale
*/

get_template_part('phpmailer/class.phpmailer');
get_template_part('phpmailer/class.smtp');


function fairytale_setup() {
add_theme_support( 'custom-header', array(
    'video' => true
) );	
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_post_type_support( 'page', 'excerpt' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
//set_post_thumbnail_size( 825, 510, true );
add_theme_support( 'html5', array(
'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
) );
add_theme_support( 'page','post-formats', array(
'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
) );
}
add_action( 'after_setup_theme', 'fairytale_setup' );

// function tree_menu()
// { 
// register_nav_menus(array(
// 'main_menu' => 'Main Menu',
// //'footer-menu' => 'Footer Menu',
// ));
// }
// add_action('init','tree_menu');

// if ( function_exists( 'add_theme_support' ) ) {

//     add_image_size( 'icondetails', 329, 355,true);
    
// }






function add_theme_scripts(){

wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css', array(),'1.1','all'); 
wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/css/font-awesome.min.css', array(),'1.1','all');
wp_enqueue_style( 'owl-theme', get_template_directory_uri() .'/css/owl.theme.default.min.css', array(),'1.1','all');
wp_enqueue_style( 'owl-carousel', get_template_directory_uri() .'/css/owl.carousel.min.css', array(),'1.1','all');
wp_enqueue_style( 'main', get_template_directory_uri() .'/css/style.css', array(),'1.1','all');
wp_enqueue_style( 'easy-responsive-tabs', get_template_directory_uri() .'/css/easy-responsive-tabs.css', array(),'1.1','all');
wp_enqueue_style( 'fancybox', get_template_directory_uri() .'/css/fancybox.min.css', array(),'1.1','all');
wp_enqueue_style( 'responsive', get_template_directory_uri() .'/css/responsive.css', array(),'1.1','all');  

    


}

add_action('wp_enqueue_scripts','add_theme_scripts');


// function mytheme_setup() {
//     add_theme_support('custom-logo');
// }
// add_action('after_setup_theme', 'mytheme_setup');
// add_image_size('mytheme-logo');
// add_theme_support('custom-logo', array(
//     'size' => 'mytheme-logo'
// ));



add_action('init','fairytale_post_type');
function fairytale_post_type()
{

 register_post_type( 'slider',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Slider' ),
                'singular_name' => __( 'Slider' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-welcome-view-site',
            'supports'  => array('title','editor','thumbnail','custom-fields'),
            
        )
    );


 register_post_type( 'bhubaneswar',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Tomorrow Bhubaneswar' ),
                'singular_name' => __( 'Tomorrow Bhubaneswar' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-admin-settings',
            'supports'  => array('title','editor','thumbnail','custom-fields'),
            
        )
    );


 register_post_type( 'project',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Project Highlights' ),
                'singular_name' => __( 'Project Highlights' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-welcome-learn-more',
            'supports'  => array('title','editor','thumbnail','custom-fields'),
            
        )
    );


  register_post_type( 'gallery',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Gallery' ),
                'singular_name' => __( 'Gallery' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-desktop',
            'supports'  => array('title','editor','thumbnail','custom-fields'),
            
        )
    );


 register_post_type( 'plan',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Plans' ),
                'singular_name' => __( 'Plans' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-share-alt',
            'supports'  => array('title','editor','thumbnail','custom-fields'),
            
        )
    );


 register_post_type( 'construction',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Construction' ),
                'singular_name' => __( 'Construction' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-admin-multisite',
            'supports'  => array('title','editor','thumbnail','custom-fields'),
            
        )
    );


 register_post_type( 'icon',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Travel form Fairytale' ),
                'singular_name' => __( 'Travel form Fairytale' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-sort',
            'supports'  => array('title','editor','thumbnail','custom-fields'),
            
        )
    );


 register_post_type( 'town',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Best Part of Town' ),
                'singular_name' => __( 'Best Part of Town' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-album',
            'supports'  => array('title','editor'),
            
        )
    );



 register_post_type( 'map',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Map Image' ),
                'singular_name' => __( 'Map Image' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-admin-site-alt2',
            'supports'  => array('title','editor','thumbnail'),
            
        )
    );


 register_post_type( 'contact',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Contact' ),
                'singular_name' => __( 'Contact' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-email-alt2',
            'supports'  => array('title','editor'),
            
        )
    );



}


    add_action( 'init', 'crunchify_create_deals_custom_taxonomy', 0 );
 
//create a custom taxonomy name it "type" for your posts
function crunchify_create_deals_custom_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Types' ),
    'all_items' => __( 'All Types' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Edit Type' ), 
    'update_item' => __( 'Update Type' ),
    'add_new_item' => __( 'Add New Type' ),
    'new_item_name' => __( 'New Type Name' ),
    'menu_name' => __( 'Types' ),
  );    
 
  register_taxonomy('types',array('gallery'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));
}



add_action( 'init', 'create_subcategory_plans', 0 );
 
//create a custom taxonomy name it "type" for your posts
function create_subcategory_plans() {
 
  $labels = array(
    'name' => _x( 'Bhk', 'taxonomy general name' ),
    'singular_name' => _x( 'Bhk', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Bhk' ),
    'all_items' => __( 'All Types' ),
    'parent_item' => __( 'Parent Bhk' ),
    'parent_item_colon' => __( 'Parent Bhk:' ),
    'edit_item' => __( 'Edit Bhk' ), 
    'update_item' => __( 'Update Bhk' ),
    'add_new_item' => __( 'Add New Bhk' ),
    'new_item_name' => __( 'New Bhk Name' ),
    'menu_name' => __( 'Bhk' ),
  );    
 
  register_taxonomy('bhk',array('plan'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'bhk' ),
  ));
}


// if ( function_exists('register_sidebar') ) {
// register_sidebar(array(
// 'name' => 'social_feeds',
// 'before_widget' => '',
// 'after_widget' => ' ',
// 'before_title' => '',
// 'after_title' => ' ',

// ));

// }

    /*function cc_mime_types($mimes) {
      $mimes['svg'] = 'image/svg+xml';
      return $mimes;
    }
    add_filter('upload_mimes', 'cc_mime_types');*/



    remove_filter( 'the_content', 'wpautop' );
    remove_filter( 'the_excerpt', 'wpautop' );


function send_email(){ 

$uname=$_POST['uname'];
$uemail=$_POST['uemail'];
$uphone=$_POST['uphone'];
$umessage=$_POST['umessage'];


$mail= new PHPMailer();



$mail->IsSMTP();
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port

$mail->Username   = "jhetadey@gmail.com";  // GMAIL username
$mail->Password   = "cool9876";            // GMAIL password

$mail->From       = "info@mayabious.com";
$mail->FromName   = "DN Fairytale";
$mail->Subject    = "Ma : Email Validate";
//$mail->Body       = "This is the HTML message body <b>in bold!</b>";
$mail->AltBody    = "This is the body when user views in plain text format"; //Text Body
$mail->WordWrap   = 50; // set word wrap

$mail->AddReplyTo($uemail,"DN Fairytale");
$mail->AddAddress('webtest@mayabious.com',"Email Validation");
                                                                                                                                             
$mail->IsHTML(true); // send as HTML


         $mail->Body='<div style="width:700px; font-family:Arial; font-size:12px">



<div><br /><br /><br /><br />

General Query Details<br /><br />

<div>


<div style="width:75px; float: left;"><strong>Name:</strong></div>

<div style="float: left;">'.$uname.'</div>

<div style="clear:both;"></div>



<div style="width:75px; float: left;"><strong>Email:</strong></div>

<div style="float: left;">'.$uemail.'</div>

<div style="clear:both;"></div>



<div style="width:75px; float: left;"><strong>Phone:</strong></div>

<div style="float: left;">'.$uphone.'</div>

<div style="clear:both;"></div>



<div style="width:75px; float: left;"><strong>Message:</strong></div>

<div style="float: left; width:320px;">'.$umessage.'</div>

<div style="clear:both; margin-bottom:30px;"></div>





</div>



<div>



Thanks &amp; Regards, <br />



DN Fairytale


</div>



</div>';



//$mail->Body='Test1';

                

                if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
      }

      else{

        echo '<span stle="color:green;">Form submitted successfully</span>';
      }
die();
} 
add_action('wp_ajax_send_email', 'send_email');
add_action('wp_ajax_nopriv_send_email', 'send_email');



function enrollment_form(){

$uname=$_POST['e_name'];
$uemail=$_POST['e_email'];
$uphone=$_POST['e_phone'];
$umessage=$_POST['e_message'];


$mail= new PHPMailer();



$mail->IsSMTP();
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port

$mail->Username   = "jhetadey@gmail.com";  // GMAIL username
$mail->Password   = "cool9876";            // GMAIL password

$mail->From       = "info@mayabious.com";
$mail->FromName   = "DN Fairytale";
$mail->Subject    = "Ma : Enrollment Form";
//$mail->Body       = "This is the HTML message body <b>in bold!</b>";
$mail->AltBody    = "This is the body when user views in plain text format"; //Text Body
$mail->WordWrap   = 50; // set word wrap

$mail->AddReplyTo($uemail,"DN Fairytale");
$mail->AddAddress('webtest@mayabious.com',"Enrollment Form");
                                                                                                                                             
$mail->IsHTML(true); // send as HTML


         $mail->Body='<div style="width:700px; font-family:Arial; font-size:12px">



<div><br /><br /><br /><br />

General Query Details<br /><br />

<div>


<div style="width:75px; float: left;"><strong>Name:</strong></div>

<div style="float: left;">'.$uname.'</div>

<div style="clear:both;"></div>



<div style="width:75px; float: left;"><strong>Email:</strong></div>

<div style="float: left;">'.$uemail.'</div>

<div style="clear:both;"></div>



<div style="width:75px; float: left;"><strong>Phone:</strong></div>

<div style="float: left;">'.$uphone.'</div>

<div style="clear:both;"></div>



<div style="width:75px; float: left;"><strong>Message:</strong></div>

<div style="float: left; width:320px;">'.$umessage.'</div>

<div style="clear:both; margin-bottom:30px;"></div>





</div>



<div>



Thanks &amp; Regards, <br />



DN Fairytale


</div>



</div>';



//$mail->Body='Test1';

                

                if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
      }

      else{

        echo '<span stle="color:green;">Form submitted successfully</span>';
      }

die(); 

}

add_action('wp_ajax_enrollment_form', 'enrollment_form');
add_action('wp_ajax_nopriv_enrollment_form', 'enrollment_form');

///////////////////// Multiple image/////////////////


add_action( 'after_setup_theme', 'custom_postimage_setup' );
function custom_postimage_setup(){
    add_action( 'add_meta_boxes', 'custom_postimage_meta_box' );
    add_action( 'save_post', 'custom_postimage_meta_box_save' );
}

function custom_postimage_meta_box(){

    //on which post types should the box appear?
    $post_types = array('construction','page');
    foreach($post_types as $pt){
        add_meta_box('custom_postimage_meta_box',__( 'Construction Gallery Images', 'yourdomain'),'custom_postimage_meta_box_func',$pt,'side','low');
    }
}

function custom_postimage_meta_box_func($post){

    //an array with all the images (ba meta key). The same array has to be in custom_postimage_meta_box_save($post_id) as well.
    $meta_keys = array('featured_image_1','featured_image_2','featured_image_3','featured_image_4','featured_image_5','featured_image_6');

    foreach($meta_keys as $meta_key){
        $image_meta_val=get_post_meta( $post->ID, $meta_key, true);
        ?>
        <div class="custom_postimage_wrapper" id="<?php echo $meta_key; ?>_wrapper" style="margin-bottom:20px;">
            <img src="<?php echo ($image_meta_val!=''?wp_get_attachment_image_src( $image_meta_val)[0]:''); ?>" style="width:100%;display: <?php echo ($image_meta_val!=''?'block':'none'); ?>" alt="">

            <a class="addimage button" onclick="custom_postimage_add_image('<?php echo $meta_key; ?>');"><?php _e('add image','yourdomain'); ?></a><br>

            <a class="removeimage" style="color:#a00;cursor:pointer;display: <?php echo ($image_meta_val!=''?'block':'none'); ?>" onclick="custom_postimage_remove_image('<?php echo $meta_key; ?>');"><?php _e('remove image','yourdomain'); ?></a>

            <input type="hidden" name="<?php echo $meta_key; ?>" id="<?php echo $meta_key; ?>" value="<?php echo $image_meta_val; ?>" />
        </div>
    <?php } ?>
    <script>
    function custom_postimage_add_image(key){

        var $wrapper = jQuery('#'+key+'_wrapper');

        custom_postimage_uploader = wp.media.frames.file_frame = wp.media({
            title: '<?php _e('select image','yourdomain'); ?>',
            button: {
                text: '<?php _e('select image','yourdomain'); ?>'
            },
            multiple: false
        });
        custom_postimage_uploader.on('select', function() {

            var attachment = custom_postimage_uploader.state().get('selection').first().toJSON();
            var img_url = attachment['url'];
            var img_id = attachment['id'];
            $wrapper.find('input#'+key).val(img_id);
            $wrapper.find('img').attr('src',img_url);
            $wrapper.find('img').show();
            $wrapper.find('a.removeimage').show();
        });
        custom_postimage_uploader.on('open', function(){
            var selection = custom_postimage_uploader.state().get('selection');
            var selected = $wrapper.find('input#'+key).val();
            if(selected){
                selection.add(wp.media.attachment(selected));
            }
        });
        custom_postimage_uploader.open();
        return false;
    }

    function custom_postimage_remove_image(key){
        var $wrapper = jQuery('#'+key+'_wrapper');
        $wrapper.find('input#'+key).val('');
        $wrapper.find('img').hide();
        $wrapper.find('a.removeimage').hide();
        return false;
    }
    </script>
    <?php
    wp_nonce_field( 'custom_postimage_meta_box', 'custom_postimage_meta_box_nonce' );
}

function custom_postimage_meta_box_save($post_id){

    if ( ! current_user_can( 'edit_posts', $post_id ) ){ return 'not permitted'; }

    if (isset( $_POST['custom_postimage_meta_box_nonce'] ) && wp_verify_nonce($_POST['custom_postimage_meta_box_nonce'],'custom_postimage_meta_box' )){

        //same array as in custom_postimage_meta_box_func($post)
        $meta_keys = array('featured_image_1','featured_image_2','featured_image_3','featured_image_4','featured_image_5','featured_image_6');
        foreach($meta_keys as $meta_key){
            if(isset($_POST[$meta_key]) && intval($_POST[$meta_key])!=''){
                update_post_meta( $post_id, $meta_key, intval($_POST[$meta_key]));
            }else{
                update_post_meta( $post_id, $meta_key, '');
            }
        }
    }
}

///////////////////////////////End//////////////////////////////


?>