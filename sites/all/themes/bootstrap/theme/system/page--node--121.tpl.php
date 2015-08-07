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

<!-- Bridge Magento Team PAGE -->
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


<section class="buttons-wrapp delivery-model-buttons">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <a href="javascript:void(0);" class="link discuss-team">Discuss this team with Bridge</a>
      </div>
    </div>
  </div>
</section>


<section class="team-listing-wrapp">
  <div class="container">
    <div class="row">

      <div class="col-md-4">
        <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/magento-team/logo.png" alt="teams">
      </div>
      <div class="col-md-8 team-works">
        <p>
          <b>Number of Projects completed:</b> 10+<br>
          <br> <b>Business Focus:</b> E-Commerce<br>
          <br> <b>Technology Focus:</b> Magento, PHP, Ajax, Jquery, Prototype js, CSS, Wordpress, HTML, phpBB<br>
          <br> <b>Software Process:</b> SCRUM, Agile<br>
          <br> <b>Team Spoken Languages:</b> English, Malayalam<br>
          <br> <b>Team Strength:</b> Senior team members, experienced in big scale projects, can work completely independent, architect included.
        </p>
      </div>


      <div class="col-md-12 team-members">
        <div class="row">
          <h1>Team Members</h1>

          <div class="owl-carousel">
            <div class="col-sm-12 col-md-12 teams-rep">
              <div class="team-detail">
                <div class="team-image">
                  <h1>Sandra Thomas</h1>
                  <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/magento-team/sandra.jpg" alt="team">
                </div>
                <div class="team-works">
                  <h2>Senior Magento Developer</h2>
                  <p>
                    <b>Technology:</b> Magento, PHP, Ajax, HTML, Jquery, Zencart, Joomla, Linux <br>
                    <br> <b>Level:</b> Senior<br>
                    <!-- <br> <b>Joined Team:</b> 2013<br> -->
                    <br> <b>Strength:</b> Project management, Estimation, Customer-focused, Enthusiastic, Professional, communication, Quick Learner, On-time completion.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-sm-12 col-md-12 teams-rep">
              <div class="team-detail">
                <div class="team-image">
                  <h1>Jitesh M G</h1>
                  <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/magento-team/jitesh.jpg" alt="team">
                </div>
                <div class="team-works">
                  <h2>PHP Programmer</h2>
                  <p>
                    <b>Technology:</b> PHP, Magento, Jquery, Perl, Ajax, JavaScript, CodeIgniter, Yii, Zend, mongoDb <br>
                    <br> <b>Level:</b> Medior <br>
                    <!-- <br> <b>Joined Team:</b> 2013<br> -->
                    <br> <b>Strength:</b> Strong communicator, Results-driven, Team management, Motivated, Willing to accept challenges, Time management.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-sm-12 col-md-12 teams-rep">
              <div class="team-detail">
                <div class="team-image">
                  <h1>Akhil</h1>
                  <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/magento-team/akhil.jpg" alt="team">
                </div>
                <div class="team-works">
                  <h2>Junior PHP programmer </h2>
                  <p>
                    <b>Technology:</b> PHP, Magento, MySQL<br>
                    <br> <b>Level:</b> Junior<br>
                    <!-- <br> <b>Joined Team:</b> 2013<br> -->
                    <br> <b>Strength:</b> Well focussed, Good interpretation, Dedicated, Excellent analytical and problem-solving skill, Quick Learner.
                  </p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="project-wrapp">
  <div class="container">
    <div class="row">

      <h1>Projects</h1>

      <div class="owl-carousel-projects">

        <div class="col-md-12">
          <div class="row">
            <div class="col-sm-3 col-md-5">
              <a href="https://www.novashops.com/" target="_blank"><img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/magento-team/novashop.jpg" alt="Novashops"></a>
            </div>
            <div class="col-sm-9 col-md-7">
              <h2>Novashops</h2>
              <h3>Project Description :</h3>
              <p>This is a multi store online shopping cart customized from magento. The websites focus on selling health products which helps persons to acquire a fit body. The blog, forum, varnish cache and onestepcheckout make it a perfect shopping cart.We have different stores integrated in this magento installation which are listed below:
                <ul>
                  <li><a href="https://www.novashops.de" target="_blank">https://www.novashops.de</a></li>
                  <li><a href="http://www.proteine-dieet.eu/shop" target="_blank">http://www.proteine-dieet.eu/shop</a></li>
                  <li><a href="http://forum.novashops.com" target="_blank">http://forum.novashops.com</a></li>
                  <li><a href="http://www.novashops.com/dieet" target="_blank">http://www.novashops.com/dieet</a></li>
                </ul>
              </p>
              <h3>Features:</h3>
              <p>
                <ul>
                  <li>Responsive theme</li>
                  <li>Product Ribbon</li>
                  <li>Abandoned cart alert</li>
                  <li>Onestepcheckout</li>
                  <li>Autocomplete search</li>
                  <li>Varnish cache</li>
                  <li>Scheduled tasks</li>
                  <li>Forum</li>
                  <li>Blog</li>
                  <li>Live chat</li>
                </ul>
              </p>
              <h3>Technologies</h3>
              <p>Magento, PHP, Ajax, Jquery, Wordpress, HTML, Prototype js, PHPBB</p>
              <a href="http://www.novashops.com/shop" target="_blank" class="link hyper-link">View Online</a>
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="row">
            <div class="col-sm-3 col-md-5">
             <a href="http://www.ursnauer.ch" target="_blank">
              <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/magento-team/UrsNauer.jpg" alt="UrsNauer">
              </a>
            </div>
            <div class="col-sm-9 col-md-7">
              <h2>UrsNauer</h2>
              <h3>Project Description :</h3>
              <p>An online shopping site which is selling beauty and cosmetics products. It is a multi functionality shopping cart. We have done a special type of cart functionality in this. From the home page, there is a display of their featured products, we can drag and drop items to the side cart. On checkout if the cart value is above a certain limit, the user will be eligible for free gift products. For selecting the gift products a separate cart can be used. Here also we have implemented the drag and drop functionality. This feature and the overall look and feel of the website is awesome. </p>
                  <!-- <h3>Features:</h3>
                  <p></p> -->
                  <h3>Technologies</h3>
                  <p>Magento, PHP</p>
                  <a href="http://www.ursnauer.ch" target="_blank" class="link hyper-link">View Online</a>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-3 col-md-5">
                  <a href="http://www.magentocommerce.com/magento-connect/bridge-batch-code.html" target="_blank">
                  <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/magento-team/batch-code.png" alt="Bridge Batch Code">
                  </a>
                </div>
                <div class="col-sm-9 col-md-7">
                  <h2>Bridge Batch Code</h2>
                  <h3>Project Description :</h3>
                  <p>This is a magento extension to create batch code for product and search all customers and guests who have purchased product with given batch code. The module searches all orders in which a particular batch code involves.</p>
                  <h3>Features:</h3>
                  <p>
                    <ul>
                      <li>Add batch code to each product</li>
                      <li>Set priority to batches for shipment</li>
                      <li>Get separate report for customers and guests</li>
                      <li>Order report for each batch code</li>
                    </ul>
                  </p>
                  <h3>Technologies</h3>
                  <p>Magento, PHP, Ajax, JQuery, Prototype js, CSS, HTML</p>
                  <a href="http://www.magentocommerce.com/magento-connect/bridge-batch-code.html" target="_blank" class="link hyper-link">View Online</a>
                </div>
              </div>
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


</section>
<!-- Popup block for discuss team with bridge open -->
<div class="download-ebook discuss-team-popup">

    <div class="book-content  clearfix discuss-team-form">
      <?php print render($page['discuss_team_with_bridge']); ?>
     </div>

  <div class="close-box-inner-page discuss-team-popup-close">
    <a href="javascript:void(0);">Close</a>
  </div>
    <span class="popup-close-btn">X</span>
</div>
<div class="overlay-pop-up"></div>
<!-- Popup block for discuss team with bridge open -->
<!-- Popup block for all inner pages open -->

<!-- Popup block for all inner pages close -->

<script>
jQuery(document).ready(function(){
  jQuery('.menu').addClass( "navigation" );
  jQuery('.views-field-description').addClass('clearfix');
   // Helper function to Fill and Center the HTML5 Video
    jQuery('video, object').maximage('maxcover');

    var owl = jQuery(".owl-carousel");

    owl.owlCarousel({
        navigation:true,
        autoHeight : true,
        paginationSpeed : 1000,

    items : 3, //10 items above 1000px browser width
    itemsDesktop : [1000,3], //5 items between 1000px and 901px
    itemsDesktopSmall : [900,2], // 3 items betweem 900px and 601px
    itemsTablet: [600,1], //2 items between 600 and 0;
    itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option

    });

    var owl = jQuery(".owl-carousel-projects");

    owl.owlCarousel({
        navigation:true,
        autoHeight : true,
        paginationSpeed : 1000,

    items : 1, //10 items above 1000px browser width
    itemsDesktop : [1000,1], //5 items between 1000px and 901px
    itemsDesktopSmall : [900,1], // 3 items betweem 900px and 601px
    itemsTablet: [600,1], //2 items between 600 and 0;
    itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option

    });

   // jQuery(window).on("scroll",function(){
//
//
//        var scroll = jQuery(window).scrollTop();
//
//         //>=, not <=
//        if (scroll >= 200) {
//            //clearHeader, not clearheader - caps H
//            jQuery(".delivery-model-buttons").addClass("top-fix");
//        }
//        else {
//            jQuery(".delivery-model-buttons").removeClass("top-fix");
//        }
//
//    });


    /* discuss team with bridge */
  jQuery(".discuss-team").click(function(){
    jQuery('.discuss-team-popup-close').show();
    jQuery('.discuss-team-form').show();
    jQuery(".discuss-team-popup, .popupWrapper, .overlay-pop-up").fadeIn(500);
                //jQuery("body").css({ overflow: 'hidden' });

    jQuery("#edit-submitted-discuss-with-bridge-team option").filter(function() {
        return jQuery(this).text() == 'Bridge Magento Team';
    }).prop('selected', true);

  });

  jQuery(".close-box-inner-page a, .popup-close-btn ,.overlay-pop-up").click(function(){
    jQuery(".discuss-team-popup, .popupWrapper, .overlay-pop-up").fadeOut(500);
                jQuery("body").css({ overflow: 'auto' });
  });


});
jQuery(window).on("scroll",function(){
        var scroll = jQuery(window).scrollTop();
        if (scroll >= 100) {
            jQuery(".team-banner").addClass("top-fix-header");
        }
        else {
            jQuery(".team-banner").removeClass("top-fix-header");
        }

    });
</script>
