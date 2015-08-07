<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<?php global $base_root; ?>
<?php global $base_url; ?>

<!-- CAREERS PAGE -->

<!-- top bar open here -->

<section class="wrapper about-us-wrapper">
  <section class="top-bar-new">
    <!--Header section open here-->
    <header class="top-bar">
     <div class="header">
      <div class="mainHeader container">
        <div class="row">
         <div class="col-lg-2 col-md-2 logo">
          <a href="<?php print $front_page; ?>"> <img
           src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/bridge-logo.png"
           alt="BRIDGE" title="BRIDGE">
         </a> <span><?php print render($page['header_caption']); ?></span>
       </div>
       <div class="col-lg-10 col-md-10">
        <button type="button" class="navbar-toggle" data-toggle="collapse"
        data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span> <span
        class="icon-bar"></span> <span class="icon-bar"></span> <span
        class="icon-bar"></span>
      </button>
      <div class="top-main">
       <ul>
        <!-- <li><b><i class="fa fa-phone"></i> +91 (0) 48 44 05 24 72</b></li> -->
      </ul>
    </div>
    <div class="main-nav">
      <?php if (!empty($secondary_nav)): ?>
        <?php print render($secondary_nav); ?>
      <?php endif; ?>
      <?php if (!empty($primary_nav)): ?>
        <?php //print render($primary_nav); ?>
      <?php endif; ?>
      <?php if (!empty($page['navigation'])): ?>
        <?php //print render($page['navigation']); ?>
      <?php endif; ?>
      <div class="clearfix"></div>
      <?php print render($page['tb_mega_menu']); ?> </div>
    </div>
  </div>
</div>
</div>

</header>
<!--Header section end here-->
</section>

<!-- top bar ends here -->


<!--Header section end here-->
<section class="inner-banner sub-banner">

  <?php print render($page['inner_banner_content']); ?>  
  
</section>
<!--Banner section end here-->

<section class="buttons-wrapp open-position-buttons">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul>
          <li class="open-jobs"><a href="#vacancies">Open positions</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
 
<section class="about-content-wrapp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php //print render($page['career_left_title']); ?>
      </div>

      <div class="col-md-6 col-sm-6">
        <div class="display-content">
          <?php print render($page['career_left_content']); ?>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 career-slider">
        <div class="cycle-slideshow" data-cycle-fx="fadeout" data-cycle-timeout="5000" data-cycle-pause-on-hover="false" data-cycle-prev=".prevControl" data-cycle-next=".nextControl">
          <img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/career-slider/career7.jpg" alt="career7" >
          <img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/career-slider/career8.jpg" alt="career8" >
          <img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/career-slider/career5.jpg" alt="career5" >
          <img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/career-slider/career1.jpg" alt="career1" >
          <img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/career-slider/career2.jpg" alt="career2" >
          <img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/career-slider/career3.jpg" alt="career3" >
          <img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/career-slider/career4.jpg" alt="career4" >
          <img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/career-slider/career6.jpg" alt="career6" >
          <img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/career-slider/career9.jpg" alt="career9" >
          <img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/career-slider/career10.jpg" alt="career10" >
          <img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/career-slider/career11.jpg" alt="career11" >
        </div>
        <span id="page-focus"></span>
      </div>
    </div>
  </div>

</section>

<section id="vacancies" class="vacancies-wrapp">
  <div class="container">

    <div class="col-lg-12 vacancy-choose">
      <h1>See our latest openings and send us your CV now!</h1>
    </div>
    <div class="col-lg-12">
      <ul class="job-title">
        <li>
          <div class="col-md-5">Job Title</div>
          <div class="col-md-3">Experience</div>
          <div class="col-md-4">Location</div>
        </li>
      </ul>
    </div>

    <div class="career-list">
      <div id="wait" style="display:none;background: #fff none repeat scroll 0 0; border:1px solid #ccc; text-align: center;"><img src="http://bridge-global.com/sites/all/themes/bootstrap/images/bridge-loading.gif"></div>
   
     <?php print render($page['career_job_opening_block']); ?>

   </div>

   <div class="col-md-12 upload-resume">
    <?php print render($page['career_upload_cv']); ?>
    <span class="leave-your-cv">Leave your CV / Resume</span>
  </div>

</div>
</section>

<section class="bridge-benefits">
  <div class="container">
    <h1>EMPLOYEE BENEFITS</h1>
    <div class="row">
      <div class="col-md-12 benefits-rep">
        <div class="col-md-3 col-sm-6">
          <img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/lunch.png" alt="lunch" >
          <h2>Free luxury lunch</h2>
        </div>
        <div class="col-md-3 col-sm-6">
          <img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/salary.png" alt="salary" >
          <h2>A competitive base salary</h2>
        </div>
        <div class="col-md-3 col-sm-6">
          <img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/insurance.png" alt="insurance" >
          <h2>Medical insurance</h2>
        </div>
        <div class="col-md-3 col-sm-6">
          <img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/europe.png" alt="insurance" >
          <h2>Possibility to travel around the world</h2>
        </div>
      </div>
      <div class="col-md-12 benefits-rep">
        <div class="col-md-3 col-sm-6">
          <img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/evening-treats.png" alt="insurance" >
          <h2>Evening treats</h2>
        </div>
        <div class="col-md-3 col-sm-6">
          <img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/trips.png" alt="insurance" >
          <h2>Company trips once in 3 months</h2>
        </div>
        <div class="col-md-3 col-sm-6">
          <img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/time.png" alt="insurance" >
          <h2>Flexible working hours</h2>
        </div>
      </div>

    </div>
  </div>
</section> 


<section class="bridgys-testimonial">
  <div class="container">
    <div class="row">

      <div class="col-md-12 testimonilas">
        <h2>What Employees Say</h2>
        <div class="testimonial-content">
          <div class="prevControl"></div>
          <div class="nextControl"></div>
          <?php print render($page['career_employees_say_slider']); ?>
        </div>
      </div>
    </div>
  </div>
</section>
  
<section class="wrapper footer-section">
  <!--Footer section open here-->
  <footer>
    <div class="container">
      <div class="col-md-3 col-xs-6 col-sm-3  footer-list">
        <?php print render($page['footer_menu_block_one']); ?>
      </div>
      <div class="col-md-3 col-xs-6 col-sm-3  footer-list">
        <?php print render($page['footer_menu_block_two']); ?>
      </div>
      <div class="col-md-3 col-xs-6 col-sm-3  footer-list">
        <?php print render($page['footer_menu_block_three']); ?>
      </div>
      <div class="col-md-3 col-xs-12 col-sm-3 footer-list visible-contact">
        <?php print render($page['footer_menu_block_contact']); ?>

      </div>
    </div>
  </footer>
  <div class="copy">
    <div class="container copy-right">
      <div class="col-md-8"><?php echo "Copyright " . date('Y') . " All rights reserved Bridge Global." ?></div>
      <div class="col-md-4">
        <div class="social-media">
          <?php print render($page['footer_social_media']); ?>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <!--Footer section end here-->
</section>
<div title="top of page" class="goto-top"><i class="fa fa-angle-double-up"></i></div>
</section>

<!-- Leave your CV popup open -->
<!-- <div class="popupWrapper"></div> -->
<div class="download-ebook leave-your-cv-popup">
    <div class="book-content  clearfix leave-your-cv-form">
      <?php print render($page['career_leave_your_cv_popup']); ?>
     </div>
  <div class="close-box-inner-page leave-your-cv-popup-close">
    <a href="javascript:void(0);">Close</a>
  </div>
    <span class="popup-close-btn">X</span>
</div>

<div class="overlay-pop-up"></div>

<!-- Leave your CV popup close -->

<!-- Popup block for all inner pages open -->

<!-- Popup block for all inner pages close -->

<script>
jQuery(document).ready(function(){
  jQuery('.menu').addClass( "navigation" );
  jQuery('.views-field-description').addClass('clearfix');
   // Helper function to Fill and Center the HTML5 Video
    jQuery('video, object').maximage('maxcover');

    jQuery(".buttons-wrapp ul li.open-jobs a").click(function(e){
        var topbarH=jQuery("header.top-bar").outerHeight();
        var thisId=jQuery(this).attr("href");
        var scrollPos=jQuery(thisId).offset().top-topbarH;
        jQuery("html, body").animate({ scrollTop: scrollPos+"px" }, 600);
   return false;
     });

    jQuery('.vacancies-wrapp .career-list .career-content').hide();


    jQuery(document).on('click','.vacancies-wrapp .career-list .toggler a',function(){

      console.log("yes");

            jQuery('.vacancies-wrapp .career-list .toggler a.active').removeClass("active");
            jQuery('.vacancies-wrapp .career-list .career-content').slideUp();


            if( jQuery(this).parent().parent(".career-title").next(".career-content").is(':visible'))
            {
                jQuery(this).parent().parent(".career-title").next(".career-content").slideUp();
                jQuery(this).removeClass("active");
            }
            else
            {
              jQuery(this).addClass("active");
              jQuery(this).parent().parent(".career-title").next(".career-content").slideDown();
            }

      return false;
    });

    jQuery('input[type=file]').change(function (e) {
        jQueryin = jQuery(this);
        jQueryin.next().html(jQueryin.val());
        jQuery(".upload-resume .select-resume span").text(jQueryin.val());
    });


    jQuery(window).on("scroll",function(){
        var innerbannerMargin=jQuery("header.top-bar").outerHeight();
        jQuery(".top-fix").css({'top':innerbannerMargin+'px'});

        var scroll = jQuery(window).scrollTop();

         //>=, not <=
        if (scroll >= 200) {
            //clearHeader, not clearheader - caps H
            jQuery(".open-position-buttons").addClass("top-fix");
        }
        else {
            jQuery(".open-position-buttons").removeClass("top-fix");
        }

    });

    /* Leave your CV popup  */
    jQuery(document).on('click','.leave-your-cv',function(){ 

    //console.log(jQuery(this).data('jobtitle')); 

    
    jQuery('#edit-submitted-leave-your-cv-preferred-position').val( jQuery(this).data('jobtitle') ); 

    if( jQuery('#edit-submitted-leave-your-cv-preferred-position').val() == '' ){
      jQuery('#edit-submitted-leave-your-cv-preferred-position').val( 'Preferred Position' ); 
    } 
        
    jQuery('.leave-your-cv-popup-close').show();
    jQuery('.leave-your-cv-form').show();
    jQuery(".popupWrapper, .leave-your-cv-popup,.overlay-pop-up").fadeIn(500);
        jQuery("#edit-submitted-leave-your-cv-upload").attr('class', '');
        jQuery("#edit-submitted-leave-your-cv-upload span").hide();
    });

    

    jQuery(".close-box-inner-page a, .popup-close-btn, .overlay-pop-up ,.popupWrapper").click(function(){
           jQuery(".popupWrapper, .leave-your-cv-popup, .overlay-pop-up").fadeOut(500);
    });


  <?php
  $query_string = array();
  if( isset( $_SERVER['QUERY_STRING'] ) && ( $_SERVER['QUERY_STRING'] != '' ) ){
    $query_string = explode( '=', $_SERVER['QUERY_STRING'] );
  }
  if( count( $query_string ) > 0 ){
  ?>
    var containerOne  = jQuery('body');
      var scrollToOne   = jQuery('#page-focus');

    containerOne.animate({
        scrollTop: scrollToOne.offset().top - containerOne.offset().top + containerOne.scrollTop()
    });
  <?php
  }
  ?>

  jQuery('#edit-reset').click(function(){
    var date = new Date();
    date.setTime(date.getTime() + (60 * 1000));
    jQuery.cookie('show_all', '1', { expires: date });
  });

  if( jQuery.cookie('show_all') ){
    var container = jQuery('body');
      var scrollTo  = jQuery('#page-focus');

    container.animate({
        scrollTop: scrollTo.offset().top - container.offset().top + container.scrollTop()
    });
  }

  jQuery(document).ajaxStart(function() {
    jQuery("#wait").css("display", "block");
    jQuery(".region-career-job-opening-block").css("display", "none");
  }).ajaxComplete(function() {
   jQuery("#wait").css("display", "none");
   jQuery(".region-career-job-opening-block").css("display", "block");

  });


});

</script>


