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

<!-- UKRAINE MAGENTO TEAM PAGE -->

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
            <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/ukraine-magento-team/logo.png" alt="teams">
          </div>
          <div class="col-md-8 team-works">
            <p>
              <b>Number of Projects completed:</b> 10+<br>
              <br> <b>Business Focus:</b> E-Commerce<br>
              <br> <b>Technology Focus:</b> Magento<br>
              <br> <b>Software Process:</b> SCRUM, Agile<br>
              <br> <b>Team Spoken Languages:</b> English, Russian, Ukrainian<br>
              <br> <b>Team Strength:</b>  Big experience in development of different projects. Big experience in Object-oriented design and development. Big experience of working in projects for international customers in distributed international teams.
            </p>
          </div>


          <div class="col-md-12 team-members">
            <div class="row">
              <h1>Team Members</h1>

              <div class="owl-carousel">
                <div class="col-sm-12 col-md-12 teams-rep">
                  <div class="team-detail">
                    <div class="team-image">
                      <h1>Anton V</h1>
                      <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/ukraine-magento-team/common-avatar.jpg" alt="team">
                    </div>
                    <div class="team-works">
                      <h2>Team leader / Senior developer</h2>
                      <p>
                        <b>Technology:</b> Magento<br>
                        <br> <b>Level:</b> Senior<br>
                        <!-- <br> <b>Joined Team:</b> 2013<br> -->
                        <br> <b>Strength:</b> Have solid experience with various technologies, good problem solver and researcher.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-12 col-md-12 teams-rep">
                  <div class="team-detail">
                    <div class="team-image">
                      <h1>Alexander sh</h1>
                      <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/ukraine-magento-team/common-avatar.jpg" alt="team">
                    </div>
                    <div class="team-works">
                      <h2>Senior developer </h2>
                      <p>
                        <b>Technology:</b> Magento<br>
                        <br> <b>Level:</b> Senior <br>
                        <!-- <br> <b>Joined Team:</b> 2013<br> -->
                        <br> <b>Strength:</b> Diligence, Attentiveness, Responsibility, Analytical approach, Communicative, Friendliness.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-12 col-md-12 teams-rep">
                  <div class="team-detail">
                    <div class="team-image">
                      <h1>Anton K</h1>
                      <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/ukraine-magento-team/common-avatar.jpg" alt="team">
                    </div>
                    <div class="team-works">
                      <h2>Senior developer</h2>
                      <p>
                        <b>Technology:</b> Magento<br>
                        <br> <b>Level:</b> Senior<br>
                        <!-- <br> <b>Joined Team:</b> 2013<br> -->
                        <br> <b>Strength:</b> Responsibility, analytical thinking, logical thinking, self-learning.
                      </p>

                    </div>
                  </div>
                </div>

                <div class="col-sm-12 col-md-12 teams-rep">
                  <div class="team-detail">
                    <div class="team-image">
                      <h1>Olga sh</h1>
                      <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/ukraine-magento-team/common-avatar.jpg" alt="team">
                    </div>
                    <div class="team-works">
                      <h2>Team leader / Senior developer </h2>
                      <p>
                        <b>Technology:</b> Magento<br>
                        <br> <b>Level:</b> Senior<br>
                        <!-- <br> <b>Joined Team:</b> 2013<br> -->
                        <br> <b>Strength:</b> Providing of guidance, instruction and direction to the team for the purpose of achieving a key result. Knowledge of Magento development best practices, extending and customizing of core functionality, creating custom modules, working with SOAP/REST.
                      </p>

                    </div>
                  </div>
                </div>

                <div class="col-sm-12 col-md-12 teams-rep">
                  <div class="team-detail">
                    <div class="team-image">
                      <h1>Andrey T</h1>
                      <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/ukraine-magento-team/common-avatar.jpg" alt="team">
                    </div>
                    <div class="team-works">
                      <h2>Developer</h2>
                      <p>
                        <b>Technology:</b> PHP, Magento, Javascript, XML, JSON <br>
                        <br> <b>Level:</b> Medior<br>
                        <!-- <br> <b>Joined Team:</b> 2013<br> -->
                        <br> <b>Strength:</b>  I have 6 years experience with web development that based on the lamp/lemp stack and include PHP, Python, Magento, HTML, Javascript, CSS, Node.JS, SQL/NoSQL.
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

          <h1>Sample Project</h1>

          <div class="owl-carousel-projects">

            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-3 col-md-5">
                  <a href="http://www.coffeecircle.com" target="_blank">
                  <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/ukraine-magento-team/CoffeCircle.jpg" alt="Novashops">
                  </a>
                </div>
                <div class="col-sm-9 col-md-7">
                  <h2>CoffeCircle (Germany)</h2>
                  <h3>Project Description :</h3>
                  <p>
                  <ul>
                    <li>Updating Magento from v.1.4.0.0. to the latest version with keeping all customers/products/orders/etc, fixing Magento core bugs, improving Magento speed and pages optimization.</li>
                    <li>Writing new Magento extensions: Custom checkout process, Subscriptions management, Custom price rules, Custom delivery workflow and shipping rates, Custom reviews management.</li>
                    <li>Adding new features for managing Customers, Products and Orders.</li>
                    <li>Installing third party extensions and fixing their bugs.</li>
                    <li>Modifying payment gateway modules for correct working with other changes in store.</li>
                    <li>Switching to multistore workflow - one store for Germany and Switzerland with different options, but with one products stock management.</li>
                    <li>Changing built-in frontend functions for redesigned pages.</li>
                  </ul>
                  </p>
                  
                  <h3>Technologies</h3>
                  <p>Magento, PHP</p>
                  <a href="http://www.coffeecircle.com" target="_blank" class="link hyper-link">View Online</a>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-3 col-md-5">
                  <a href="http://www.paillettenshop.de" target="_blank" >
                  <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/ukraine-magento-team/Paillettenshop.jpg" alt="UrsNauer">
                  </a>
                </div>
                <div class="col-sm-9 col-md-7">
                  <h2>Paillettenshop.de</h2>
                  <h3>Project Description :</h3>
                  <p>
                    <ul>
                    <li>Developing new responsive frontend design from scratch.</li>
                    <li>Adding new features for managing Customers, Products and Orders.</li>
                    <li>Installing third party extensions and fixing their bugs.</li>
                    <li>Customizing payment and delivery process.</li>
                    <li>Made Ebay integration.</li>
                    <li>Updating Magento from v.1.7 to v.1.8.1 with keeping all customers/products/orders/etc, pages optimization.</li>
                    <li>Fixing bugs.</li>                   
                  </ul>
                  </p>
                  
                  <h3>Technologies</h3>
                  <p>Magento, PHP</p>
                  <a href="http://www.paillettenshop.de" target="_blank" class="link hyper-link">View Online</a>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-3 col-md-5">
                <a href="http://www.kukimi.de" target="_blank">
                  <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/ukraine-magento-team/kukimi.jpg" alt="Bridge Batch Code">
                 </a>
                </div>
                <div class="col-sm-9 col-md-7">
                  <h2>Kukimi.de</h2>
                  <h3>Project Description :</h3>
                  <p>Made website from scratch. </p>                  
                  <h3>Technologies</h3>
                  <p>Magento, PHP</p>
                  <a href="http://www.kukimi.de" target="_blank" class="link hyper-link">View Online</a>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>
  
    
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
<script>
jQuery(document).ready(function(){
  jQuery('.menu').addClass( "navigation" );
  jQuery('.views-field-description').addClass('clearfix');

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


    /* discuss team with bridge */
  jQuery(".discuss-team").click(function(){
    jQuery('.discuss-team-popup-close').show();
    jQuery('.discuss-team-form').show();
    jQuery(".discuss-team-popup, .popupWrapper, .overlay-pop-up").fadeIn(500);
               // jQuery("body").css({ overflow: 'hidden' });

    jQuery("#edit-submitted-discuss-with-bridge-team option").filter(function() {
      return jQuery(this).text() == 'Ukraine Magento Team';
    }).prop('selected', true);

  });

  jQuery(".close-box-inner-page a, .popup-close-btn, .overlay-pop-up").click(function(){
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
