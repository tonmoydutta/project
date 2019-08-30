<?php
/*
Template Name:Home
*/ 

get_header();
?>


<button type="button" class="btn sideLinkBtn" > <i class="fa fa-angle-right arrow1"></i> </button>
    <div class="open" id="sideLink">
    	<div class="boxHead">Quick Links  <button class="sideLinkClose"> <i class="fa fa-angle-left fa-lg"></i> </button></div>
        <ul>
            <li><a href="#"  data-toggle="modal" data-target="#Construction"><i class="fa fa-building-o fa-lg"></i> Construction Update</a></li>
            <li><a href="#"><i class="fa fa-search fa-lg"></i> Apartment Finder</a></li>
            <li><a href="#" data-toggle="modal" data-target="#Enrollment"><i class="fa fa-file-text-o fa-lg"></i> Enrollment form</a></li>
            <!-- <li><a href="#" data-toggle="modal" data-target="#Enquiry"><i class="fa fa-file-text fa-lg"></i> Enquiry form</a></li> -->
            <li><a href="#" data-toggle="modal" data-target="#Request"><i class="fa fa-phone fa-lg"></i> Request a Call Back</a></li>            
            <li><a href="#" data-toggle="modal" data-target="#Brochure" ><i class="fa fa-cloud-download fa-lg"></i> Download Brochure</a></li>
            
       </ul>
    </div>
    
  <div class="hero"> <a class="navbar-brand" href="<?=site_url();?>"> <img  src="<?php echo get_template_directory_uri();?>/img/logo.png" alt=""> </a>
    <div class="owl-carousel owl-theme heroCarousel">
      
      
      <?php  query_posts('posts_per_page=-1&post_type=slider&post_status=publish&order=ASC');
           while(have_posts()) : the_post(); 

    $box_text=get_post_meta($post->ID,'box_text',true);

            ?>

      <div class="item">
        <div class="hero__slide"><?php the_post_thumbnail(1349,759);?> <!-- <img class="img-fluid;?>" src="<?php echo get_template_directory_uri();?>/img/banner3.jpg" alt=""> -->
          <div class="hero__slideContent text-center dn_regalia">
             <h1><?=$box_text;?></h1>
            <p><?php the_content();?></p>
            <a class="btn btn--leftBorder btn--rightBorder" href="#/">Details</a> <span class="hero__slideContent--right"></span> </div>
        </div>
      </div>
    
    <?php  
          endwhile; 
          wp_reset_postdata(); 
      ?>
    </div>
  </div>
</header>
<section id="about" class="about section-margin mb-5">
  <div class="container-fluid">
  <?php  query_posts('posts_per_page=1&post_type=bhubaneswar&post_status=publish&order=ASC');
           while(have_posts()) : the_post(); 

    $year=get_post_meta($post->ID,'year',true);
    $text=get_post_meta($post->ID,'text',true);

            ?>  
    <div class="row align-items-center">
      <div class="col-md-5 ">
        <div class="about__img text-center text-md-left mb-5 mb-md-0">
          <div class="about__slideContent text-center"> 
            <!--<h1>Dream Heaven City</h1>
              <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
							<a class="btn btn--leftBorder btn--rightBorder" href="#/">Details</a>		--> 
            <a href="#/" class="about__img__date text-center">
            <h3><?=$year;?></h3>
            <p><?=$text;?></p>
            </a> <span class="about__slideContent--right"></span> </div>
        </div>
      </div>
      <div class="col-md-7 pl-xl-5 about_rightsec">
        <div class="section-intro">
          <h2><?php the_title();?></h2>
          <!--<h2 class="section-intro__subtitle">We've been creating <br>-->
           <!-- Awesome Since 1992</h2>-->
        </div>
        <p class="dtails_text"><?php the_content();?></p>
        <a class="btn btn_2  btn--rightBorder2 mt-4" href="#/">Read More</a> 
        <p class="bubble_padding" style="padding: 80px 0; display: block;"></p>
      </div>
        

    </div>
  <?php  
          endwhile; 
          wp_reset_postdata(); 
      ?>

  </div>

  
  <ul class="bg-bubbles">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
</section>

<!--Tab Section-->
<section id="specification" class="aboutContainer sectionPadding">
  <div class="container-fluid">

    <h2>Project Highlights</h2>
      <p class="dtails_text mb-4">Provision of premium facilities make living at DN Fairytale more luxurious and relaxed.</p>

      <div class="owl-carousel owl-theme spec">
<?php  query_posts('posts_per_page=-1&post_type=project&post_status=publish&order=ASC');
           while(have_posts()) : the_post(); 

   $image = get_the_post_thumbnail_url(get_the_ID(),array(390,211)); 

            ?>
    
    <div class="item">
      <img src="<?=$image;?>" class="img-fluid">
      <h3><?php the_title();?></h3>
      <?php the_content();?>
    </div>
      <?php  
          endwhile; 
          wp_reset_postdata(); 
      ?>
     
</div>

      

      
    
  </div>
</section>


<section id="tab" class="aboutContainer sectionPadding">
  <div class="container-fluid">
    <h2>Gallery</h2>
      <p class="dtails_text mb-4">Living at DN Fairytale will elevate your lifestyle. It is an island of magnificent modernity in the middle of pristine surroundings.</p>
      <?php
      $galleryTerms = get_terms('types'); 
     //  print_r($galleryTerms );
      ?>
    <div id="parentHorizontalTab">
      <ul class="resp-tabs-list hor_1">
        <?php foreach($galleryTerms as $galleryTerm) {?>
        <li><?php echo $galleryTerm->name ;?></li>
        <?php  }
        ?>
      </ul>
      <div class="resp-tabs-container hor_1">
     
            <?php 
 
   foreach($galleryTerms as $galleryTerminner) {
?>
       
 <div>
     <div class="row">

<?php 
  $args = array(
'post_type' => 'gallery',
'posts_per_page' => -1,
'post_status'=>'publish',
'order'=>'ASC',
'tax_query' => array(
array(
'taxonomy' => 'types',
'field' => 'slug',
'terms' => $galleryTerminner->slug
)
)
);
//$query = new WP_Query( $args ); // this line is useless in your code
 
// The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
       
      $image = get_the_post_thumbnail_url(get_the_ID());
      $image1 = get_the_post_thumbnail_url(get_the_ID());

      
   ?>    
 <div class="col-lg-4 col-md-6 mb-3">
              <div class="img_hover">
                <div class="project_img"> <a href="<?php echo $image1;?>" data-fancybox="<?=$galleryTerminner->slug;?>" data-caption="<?php the_title();?>"> <img class="img-fluid" src="<?=$image;?>" alt="project"></a> </div>
              </div>
            </div>

    <?php endwhile; ?>
  
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif;  


 ?>
 
          </div>
        </div>
       <?php 
     } 

     ?> 
      

      </div>
    </div>
  </div>
</section>





<!--=============
   Floor Plan
 ===============-->

<section id="floor_plan" class="floor_plan">
  <div class="container-fluid">
    <div class="section-intro">
      <h2 class="text-center">Project Plans</h2>
    </div>
  </div>
</section>
<section id="unitPlan" class="secHeading ">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="unitPlanContainer">
        <?php  
        $taxonomyName = "bhk";
        $plansparentTerms = get_terms($taxonomyName,array('parent' =>0,'orderby' => 'id','order' => 'ASC','hide_empty' => true));  
        ?> 
          <ul class="nav nav-tabs floor-plans-tab" role="tablist">
            <?php foreach($plansparentTerms as $plansparentTerm) {
              


              ?> 
            <li role="presentation"><a href="#parent<?=$plansparentTerm->term_id;?>" aria-controls="1" role="tab" data-toggle="tab"><?=$plansparentTerm->name;?></a></li>
          <?php } ?>
            
          </ul>   
          <div class="tab-content">
            

            

            <?php foreach($plansparentTerms as $planssubTerm) {
               $childTerms1 = get_terms( $taxonomyName, array( 'parent' => $planssubTerm->term_id, 'orderby' => 'slug', 'hide_empty' => false ) );
               //print_r($childTerms);
               if($childTerms1){
              ?> 
            <div role="tabpanel" class="tab-pane" id="parent<?=$planssubTerm->term_id;?>">
              <ul class="nav nav-tabs twobhkCont" role="tablist">
            <?php 

             $i=1;
            foreach($childTerms1 as $childTerm) { 
             if($i==1){
  $active='active';
 }else{
$active='';
 }

              ?>
                <li role="presentation"><a href="#child<?=$childTerm->term_id;?>" class="<?=$active;?>"  aria-controls="6" role="tab" data-toggle="tab"><?=$childTerm->name;?></a></li>
              <?php 
            $i++;
            } ?>
                
              </ul>
              

              <div class="tab-content">
              <?php 
              $i=1;
              foreach($childTerms1 as $childTerm2) {


 if($i==1){
  $active='active';
 }else{
$active='';
 }

                ?> 
<div role="tabpanel" class="tab-pane <?=$active;?>" id="child<?=$childTerm2->term_id;?>">
<?php 

//print_r($planssubTerm);
  $args1 = array(
'post_type' => 'plan',
'posts_per_page' => -1,
'post_status'=>'publish',
'order'=>'ASC',
'tax_query' => array(
array(
'taxonomy' => 'bhk',
'field' => 'slug',
'terms' => $childTerm2->slug
)
)
);
//$query = new WP_Query( $args ); // this line is useless in your code
 
// The Query
$the_query1 = new WP_Query( $args1 );
if ( $the_query1->have_posts() ) : ?>
    <?php while ( $the_query1->have_posts() ) : $the_query1->the_post(); 
       
      $image = get_the_post_thumbnail_url(get_the_ID(),array(1110,1128));
      $image1 = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
      $image_src=$image1[0];

   ?>   


                
                  <div class="Plan_Content"> <a href="<?=$image_src;?>" data-fancybox="<?=$planssubTerm->slug;?>" data-caption="<?php the_title();?>">
                  <img class="img-fluid" src="<?=$image;?>" class="img-fluid" /></a> </div>
                

                <?php endwhile; ?>
  
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif;  


 ?>
</div>
              <?php
               $i++;
               } ?>
                
              </div>
            
            </div>
            
            <?php 
 }else{ ?>

  <div role="tabpanel" class="tab-pane active" id="parent<?=$planssubTerm->term_id;?>">

    <?php 

//print_r($planssubTerm);
  $args2 = array(
'post_type' => 'plan',
'posts_per_page' => 1,
'post_status'=>'publish',
'order'=>'ASC',
'tax_query' => array(
array(
'taxonomy' => 'bhk',
'field' => 'slug',
'terms' => $planssubTerm->slug
)
)
);
//$query = new WP_Query( $args ); // this line is useless in your code
 
// The Query
$the_query2 = new WP_Query( $args2 );
if ( $the_query2->have_posts() ) : ?>
    <?php while ( $the_query2->have_posts() ) : $the_query2->the_post(); 
       
      $image = get_the_post_thumbnail_url(get_the_ID(),array(1110,1128));
      $image1 = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
      $image_src=$image1[0];

   ?> 
              
              <div class="tab-content">
                <div class="Plan_Content">
                <a href="<?=$image;?>" data-fancybox="<?=$planssubTerm->slug;?>" data-caption="">
                <img src="<?=$image_src;?>" class="img-fluid" style="display: block; margin: 0 auto; text-align: center;"></a>
                </div>
              </div>
            </div>

            <?php endwhile; ?>
  
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif;  


 ?>
 <?php }
          } ?>

            
          


          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="walkthrough" class="sectionPadding">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="section-intro">
      <h2 class="text-center">Walkthrough</h2>  
 </div>
<iframe width="100%" height="550" src="https://www.youtube.com/embed/OYXUCpvqRkI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
    <!--<video poster="images/video_1_bg.jpg" preload="auto" autoplay id="bgvid" loop muted="">
    <source src="video/5.mp4" type="video/mp4">
    <source src="video/5.m4v" type="video/m4v">
    <source src="video/5.webm" type="video/webm">
    <source src="video/5.ogv" type="video/ogv">
  </video>-->
    </div>
	</div>
    
   
</section>

<section id="location_map" class="location_map">
<div class="container-fluid">
    <div class="row">
<div class="col-lg-6">
 <?php  query_posts('posts_per_page=1&post_type=town&post_status=publish&order=ASC');
           while(have_posts()) : the_post(); 

   
            ?> 
<h2 class="map_heading"><?php the_title();?></h2>
<?php the_content();?>

<?php endwhile;
     wp_reset_postdata(); ?>

<div class="row mt-5">

<?php  query_posts('posts_per_page=3&post_type=icon&post_status=publish&order=ASC');
           while(have_posts()) : the_post(); 

   $image =wp_get_attachment_image_src( get_post_thumbnail_id());

            ?>

<div class="col-sm-4 mb-5">

<img class="img-fluid img-icon" src="<?php echo $image[0];?>" alt="icon">
<p class="text-center"><?php the_content();?></p>

</div>
<?php endwhile;
     wp_reset_postdata(); ?>


</div>

</div>

<?php  query_posts('posts_per_page=1&post_type=map&post_status=publish&order=ASC');
           while(have_posts()) : the_post(); 

   $image4 =wp_get_attachment_image_src( get_post_thumbnail_id());

            ?>
<div class="col-lg-6">
<img class="img-fluid" src="<?php echo $image4[0];?>" alt="map">
</div>

<?php endwhile;
     wp_reset_postdata(); ?>
</div>
    </div>
</section>


<section id="contact" class="contact">
  <div class="container-fluid">
    <div class="section-intro">
      <h2 class="text-center">Contact</h2>
      <h2 class="section-intro__subtitle text-center">Connect with us for any queries</h2>
    </div>
    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">

      <?php  query_posts('posts_per_page=1&post_type=contact&post_status=publish&order=ASC');
           while(have_posts()) : the_post(); 
       
       the_content();
      
      endwhile;
     wp_reset_postdata(); ?>

    </div>
     <div class="col-lg-6 col-md-6 col-sm-12">

    <?php  //echo do_shortcode( '[contact-form-7 id="76" title="Untitled"]' ); ?>
     <form id="register_form">
    <div class="input-container">
   <i class="fa fa-user form_icon"></i>
    <input class="input-field" type="text" placeholder="Name" name="Name" id="username">
   </div>
   <div id="error_name"></div>

  <div class="input-container">
    <i class="fa fa-envelope-o form_icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email" id="useremail">
  </div>
  <div id="error_email"></div>
  
  <div class="input-container">
   <i class="fa fa-phone form_icon"></i>
    <input class="input-field" type="text" placeholder="Ph. No" name="psw" id="userphone">
  </div>
  <div id="error_phone"></div>
  <div class="input-container">
    <i class="fa fa-commenting-o form_icon_big"></i>
    <textarea class="input-field" type="text" placeholder="Massage" name="msg"  id="usermessage"></textarea>
  </div>
  <div id="error_message"></div>

  <button type="submit" class="btn3">Submit <span id="loading_image_club" style="display: none;"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i></span></button>
  <div id="success_message" style="color:green;"></div>
</form> 
    </div>
    </div>

    
 </div>
  
</section>

<section>
  
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d59891.64727067735!2d85.7116258!3d20.2493787!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19a9ad0da165e5%3A0x88bdba9d21eae398!2sDN+FAIRY+TALE!5e0!3m2!1sen!2sin!4v1565790172132!5m2!1sen!2sin" width="100%" height="425" frameborder="0" style="border:0" allowfullscreen></iframe>

</section>


<?php get_footer();?>