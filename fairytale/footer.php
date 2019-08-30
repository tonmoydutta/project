<section id="footer" class="footer bg-dark">
<div class="container-fluid">
    <!-- <div class="row">
      <div class="col-sm-3">
        <h3>Menu</h3>
        <ul class="fmenu">
          <li><a href="#">Specifications</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Projrct</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="col-sm-3">
        <h3>Plan</h3>
        <ul class="fmenu">
          <li><a href="#">Floor Plan</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Interior</a></li>
          <li><a href="#">Exterior</a></li>
        </ul>
      </div>
      <div class="col-sm-3">
        <h3>Quick View</h3>
        <ul class="fmenu">
          <li><a href="#">360 View</a></li>
          <li><a href="#">Aerial View</a></li>
          <li><a href="#">Virtual Reality</a></li>
          <li><a href="#">Augmented Reality</a></li>
         </ul>
      </div>
      <div class="col-sm-3">
        <h3>Follow Us</h3>
        <ul class="social">
          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li> 
          <div class="clearfix"></div>
        </ul>
      </div>
    </div>

    <hr> -->
    <div class="row copyWrite">
      <div class="col-sm-6">
        <p>
          DN Fairytale | Copyright © 2019<br/>
          Designed by <a href="#">Mayabious Art</a></p>
      </div>
      <div class="col-sm-6">
        <ul class="social">
          <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li> 
          <div class="clearfix"></div>
          </ul>
      </div>


</div>
</section>
<!----------- Construction Update------------->
<div class="modal fade modal-fullscreen" id="Construction" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
      <div class="container-fluid">
      <h2 class="modal-title cons_update">Construction Update</h2>
      </div>
        
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="font-size:30px;">&times;</button>
         </div>
      <div class="modal-body">
        <div class="container-fluid">
        
<?php  query_posts('posts_per_page=-1&post_type=construction&post_status=publish&order=ASC');
            while(have_posts()) : the_post(); 
       $image = get_the_post_thumbnail_url(get_the_ID());
       $image1 = get_the_post_thumbnail_url(get_the_ID());
       $pid=get_the_id();
            ?>
        <div class="row">
        
 
        <div class="col-xl-6 align-items-center mb-5">
          <h1><?php the_title();?></h1>
        <?php the_content();?>
        
        </div>
        <div class="col-xl-6 text-center ">
          <div id="carouselExampleControls_<?=$pid;?>" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">

 <?php $meta_keys = array('featured_image_1','featured_image_2','featured_image_3');

   $i=1;
    foreach($meta_keys as $meta_key){

      if($i==1){
        $class='active';
      }else{
        $class='';
      }
        $image_meta_val=get_post_meta( $post->ID, $meta_key, true);
        
        if($image_meta_val!=''){

        ?>
            
            <div class="carousel-item <?=$class;?>">

              <img class="d-block" src="<?php echo ($image_meta_val!=''?wp_get_attachment_image_src( $image_meta_val)[0]:''); ?>" alt="First slide" width="700px;"height="300px;">
            </div>
    <?php 
  }
$i++;
  } ?>   
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls_<?=$pid;?>" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls_<?=$pid;?>" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- <a href="<?=$image1;?>" data-fancybox="cons_update" data-caption="image title"> <img  class="img-fluid" src="<?=$image;?>" alt="construction" width="450px;"
          height="244px;"></a> -->
        </div>
        <div class="liner mb-5 mt-5"></div>
        

        
        </div>

        <?php  
           endwhile; 
           wp_reset_postdata(); 
      ?>

    

        </div>
      </div>
      </div>
  </div>
</div>



<!-- Apartment modal -->
<div class="modal fade" id="Apartment" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title" id="myModalLabel">Apartment Finder</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
       <input type="text" placeholder="Name">
        <input type="email" placeholder="Email">
        <input type="text" placeholder="Phone No">
        <textarea placeholder="Message"></textarea>
       </form>
      </div>
      <div class="modal-footer">
     <button type="button" class="btn btn-outline-secondary">Submit</button>
      </div>
    </div>
  </div>
</div>
<!-- Enrollment modal -->
<div class="modal fade" id="Enrollment" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title" id="myModalLabel">Enrollment Form</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form id="enrollment_form">
       <input type="text" placeholder="Name" id="enroll_name">
       <div id="error_ename"></div>
        <input type="email" placeholder="Email" id="enroll_email">
        <div id="error_eemail"></div>
        <input type="text" placeholder="Phone No" id="enroll_phone">
        <div id="error_ephone"></div>
        <textarea placeholder="Message" id="enroll_message"></textarea>
         <div id="error_emessage"></div>
         <!-- <button type="submit" class="btn btn-outline-secondary">Submit</button> -->
         
      </div>
      <div class="modal-footer">
     <button type="submit" class="btn btn-outline-secondary">Submit <span id="loading_image_club" style="display: none;"><i class="fa fa-spinner fa-spin" style="font-size:24px;"></i></span></button>
     <div id="success_enroll" style="color:green;"></div>                            
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Enquiry modal -->
<div class="modal fade" id="Enquiry" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title" id="myModalLabel">Enquiry Form</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
       <input type="text" placeholder="Name">
        <input type="email" placeholder="Email">
        <input type="text" placeholder="Phone No">
        <textarea placeholder="Message"></textarea>
       </form>
      </div>
      <div class="modal-footer">
     <button type="button" class="btn btn-outline-secondary">Submit</button>
      </div>
    </div>
  </div>
</div>
<!-- Request modal -->
<div class="modal fade" id="Request" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title" id="myModalLabel"> Request a Call Back</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
       <input type="text" placeholder="Name">
        <input type="email" placeholder="Email">
        <input type="text" placeholder="Phone No">
        <textarea placeholder="Message"></textarea>
       </form>
      </div>
      <div class="modal-footer">
     <button type="button" class="btn btn-outline-secondary">Submit</button>
      </div>
    </div>
  </div>
</div>

<!-- Brochure modal -->
<div class="modal fade" id="Brochure" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title" id="myModalLabel"> Download Brochure</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
       <input type="text" placeholder="Name">
        <input type="email" placeholder="Email">
        <input type="text" placeholder="Phone No">
        <textarea placeholder="Message"></textarea>
       </form>
      </div>
      <div class="modal-footer">
     <button type="button" class="btn btn-outline-secondary">Submit</button>
      </div>
    </div>
  </div>
</div>


<script src="<?php echo get_template_directory_uri();?>/js/jquery-3.2.1.min.js"></script> 
<script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script> 

<script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js"></script> 
<script src="<?php echo get_template_directory_uri();?>/js/slick.js"></script> 
<script src="<?php echo get_template_directory_uri();?>/js/easyResponsiveTabs.js"></script> 
<script src="<?php echo get_template_directory_uri();?>/js/script.js"></script> 
<script src="<?php echo get_template_directory_uri();?>/js/fancybox.min.js"></script>



<script type="text/javascript">
  
$(document).ready(function(){
$("#register_form").submit(function(){

var user_name=$("#username").val();
var user_email=$("#useremail").val();
var user_phone=$("#userphone").val();
var user_message=$("#usermessage").val();
var filter = /^[0-9-+]+$/;

var modalurl = '<?php echo admin_url('admin-ajax.php'); ?>';

if(user_name==""){

  $("#error_name").show().html('<span style="color:red;"> Please enter your name.</span>');
  return false;
}

if(user_email==""){

  $("#error_email").show().html('<span style="color:red;"> Please enter your email.</span>');
  return false;
}

if (!ValidateEmail($("#useremail").val())) {

$("#error_email").show().html('<span style="color:red;">Please enter a valid email address.');
  return false;
  }


if(user_phone==""){

  $("#error_phone").show().html('<span style="color:red;"> Please enter your phone.</span>');
  return false;
}

if (!filter.test(user_phone) || (user_phone.length != 10)) {

  $("#error_phone").show().html('<span style="color:red">Please enter a valid mobile number.</span>');

return false;

}

if(user_message==""){

  $("#error_message").show().html('<span style="color:red;"> Please enter your message.</span>');
  return false;
}
else{

     $("#loading_image_club").show();

          $.ajax({

                           
                            url: modalurl,
                            type:'POST',
                            data: ({ 
                            action: 'send_email',
                            'uname' :user_name,
                            'uemail':user_email,
                            'uphone':user_phone,
                            'umessage':user_message
                          }),
                          success:function(result){
                            $("#loading_image_club").hide();
                           //$("#school_fee_ajax_modal").show();
                           $("#success_message").html(result);
                               }
                             });
                       
  return false;
}

});

//////////////Enrollment Form/////////////////

$("#enrollment_form").submit(function(){

var ename=$("#enroll_name").val();
var eemail=$("#enroll_email").val();
var ephone=$("#enroll_phone").val();
var emessage=$("#enroll_message").val();
var filter = /^[0-9-+]+$/;

var modalurl = '<?php echo admin_url('admin-ajax.php'); ?>';

if(ename==""){

  $("#error_ename").show().html('<span style="color:red;"> Please enter your name.</span>');
  return false;
}

if(eemail==""){

  $("#error_eemail").show().html('<span style="color:red;"> Please enter your email.</span>');
  return false;
}

if (!ValidateEmail($("#enroll_email").val())) {

$("#error_eemail").show().html('<span style="color:red;">Please enter a valid email address.');
  return false;
  }


if(ephone==""){

  $("#error_ephone").show().html('<span style="color:red;"> Please enter your phone.</span>');
  return false;
}

if (!filter.test(ephone) || (ephone.length != 10)) {

  $("#error_ephone").show().html('<span style="color:red">Please enter a valid mobile number.</span>');

return false;

}

if(emessage==""){

  $("#error_emessage").show().html('<span style="color:red;"> Please enter your message.</span>');
  return false;
}


  else{

        
           $("#loading_image_club").show();

          $.ajax({

                           
                            url: modalurl,
                            type:'POST',
                            data: ({ 
                            action: 'enrollment_form',
                            'e_name' :ename,
                            'e_email':eemail,
                            'e_phone':ephone,
                            'e_message':emessage
                          }),
                          success:function(result){
                            $("#loading_image_club").hide();
                           //$("#school_fee_ajax_modal").show();
                           $("#success_enroll").html(result);
                               }
                             });
                       
  return false;

  }


  });

});

function ValidateEmail(email) {

        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
  return expr.test(email);

    };

</script>

<?php wp_footer();?>
</body>
</html>





<div id="slider">          
    <?php    
        // Checks if post has a feature image, grabs the feature-image and outputs that along with thumbnail SRC as a REL attribute 
        if (has_post_thumbnail()) { // checks if post has a featured image and then outputs it.     
            $image_id = get_post_thumbnail_id ($post->ID );  
            $image_thumb_url = wp_get_attachment_image_src( $image_id,'small-thumb');                               
            $attr = array(
                'class' => "folio-sample",                                   
                'rel' => $image_thumb_url[0], // REL attribute is used to show thumbnails in the Nivo slider, can be skipped if you don't want thumbs or using other slider
            );
            the_post_thumbnail ('feature-image', $attr);                                            
        }
        if (class_exists('MultiPostThumbnails')) {                              
        // Loops through each feature image and grabs thumbnail URL
        $i=1;
            while ($i<=5) {
                $image_name = 'feature-image-'.$i;  // sets image name as feature-image-1, feature-image-2 etc.
                if (MultiPostThumbnails::has_post_thumbnail('folio', $image_name)) { 
                    $image_id = MultiPostThumbnails::get_post_thumbnail_id( 'folio', $image_name, $post->ID );  // use the MultiPostThumbnails to get the image ID
                    $image_thumb_url = wp_get_attachment_image_src( $image_id,'small-thumb');  // define thumb src based on image ID
                    $image_feature_url = wp_get_attachment_image_src( $image_id,'feature-image' ); // define full size src based on image ID
                    $attr = array(
                        'class' => "folio-sample",      // set custom class
                        'rel' => $image_thumb_url[0],   // sets the url for the image thumbnails size
                        'src' => $image_feature_url[0], // sets the url for the full image size 
                    );                                                                                      
                    // Use wp_get_attachment_image instead of standard MultiPostThumbnails to be able to tweak attributes
                    $image = wp_get_attachment_image( $image_id, 'feature-image', false, $attr );                     
                    echo $image;
                }                           
                $i++;
            }                            
         
        }; // end if MultiPostThumbnails 
     ?>
</div><!-- end #slider -->