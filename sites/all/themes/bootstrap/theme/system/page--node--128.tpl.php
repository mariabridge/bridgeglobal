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

<!-- BRIDGE .NET CMS TEAM PAGE -->

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
            <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/net-cms-team/logo.png" alt="teams">
          </div>
          <div class="col-md-8 team-works">
            <p>
              <b>Number of Projects completed:</b> 20+<br>
              <br> <b>Business Focus:</b> Media & Entertainment, CRM Domain<br>
              <br> <b>Technology Focus:</b> ASP.Net, C#.net, IOS, WebAPI, JavaScript, HTML 5<br>
              <br> <b>Software Process:</b> SCRUM, Agile<br>
              <br> <b>Team Spoken Languages:</b> English, Malayalam<br>
              <br> <b>Team Strength:</b>  Senior team members, experienced in big scale projects, can work completely independent, architect included.</p>
          </div>


          <div class="col-md-12 team-members">
            <div class="row">
              <h1>Team Members</h1>

              <div class="owl-carousel">
                <div class="col-sm-12 col-md-12 teams-rep">
                  <div class="team-detail">
                    <div class="team-image">
                      <h1>Sukesh Chand</h1>
                      <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/net-cms-team/sukesh.jpg" alt="team">
                    </div>
                    <div class="team-works">
                      <h2>.Net Programmer</h2>
                      <p>
                        <b>Technology:</b> .Net<br>
                        <br> <b>Level:</b> Senior<br>
                        <!-- <br> <b>Joined Team:</b> 2013<br> -->
                        <br> <b>Strength:</b> Excellent Problem Solver, Keen learner, Specialist in Programming tools and Core Libraries,Well organised,Positive thinker.</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-12 col-md-12 teams-rep">
                  <div class="team-detail">
                    <div class="team-image">
                      <h1>Jinesh V</h1>
                      <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/net-cms-team/jinesh.jpg" alt="team">
                    </div>
                    <div class="team-works">
                      <h2>.Net Programmer</h2>
                      <p>
                        <b>Technology:</b> .Net<br>
                        <br> <b>Level:</b> Senior<br>
                        <!-- <br> <b>Joined Team:</b> 2013<br> -->
                        <br> <b>Strength:</b>  Enthusiastic, Prioritizing the tasks, Quick Learner, Troubleshooting skills, innovative and creative solutions to problems.</p>
                    </div>
                  </div>
                </div>
              

                <div class="col-sm-12 col-md-12 teams-rep">
                  <div class="team-detail">
                    <div class="team-image">
                      <h1>Sijith Chandran</h1>
                      <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/net-cms-team/sijith.jpg" alt="team">
                    </div>
                    <div class="team-works">
                      <h2>UI/UX Designer</h2>
                      <p>
                        <b>Technology:</b> HTML 5, CSS3<br>
                        <br> <b>Level:</b> Medior <br>
                        <!-- <br> <b>Joined Team:</b> 2013<br> -->
                        <br> <b>Strength:</b> Skillful designer,Innovative, Dedicated team Player, Perfectionist, Effective communication. </p>
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
                 <a href="http://www.euromaster.se" target="_blank">
                  <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/net-cms-team/spot-on.png" alt="SPOT-ON">
                  </a>
                </div>
                <div class="col-sm-9 col-md-7">
                  <h2>SPOT-ON</h2>
                  <h3>Project Description :</h3>
                  <p>Spot on solutions are a group of consultants with two things in mind, Customers' profitability and job satisfaction. Their recipe is simple - a careful selection process and senior staff with relevant experience who are given the opportunity to knowledge development and knowledge transfer.</p>
                  <p>The customer is an e-commerce company who sells the widest range of tires, rims and accessories. This project is built using Litium Studio E-commerce package. To filter these products, according to the need, we have implemented several ways to search the products.</p>
                  <h3>Features:</h3>
                  <p>
                  <ul>
                    <li>Responsive Design</li>
                    <li>Payment gateway facility</li>
                    <li>Search products with ease</li>
                    <li>Different authenticated access</li>
                    <li>Administration portal management</li>
                    <li>Seasonal offerings</li>
                    <li>Promotions and customer exclusive offers</li>
                  </ul>
                  </p>
                  <h3>Technologies</h3>
                  <p>ASP.Net, SQL Server 2000, 2005, 2008, JQuery, Adobe Photoshop, EntityFrameWork</p>
                  <a href="http://www.euromaster.se" target="_blank"class="link hyper-link">View Online</a>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-3 col-md-5">
                  <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/net-cms-team/psk.png" alt="PSK">
                </div>
                <div class="col-sm-9 col-md-7">
                  <h2>PSK</h2>
                  <h3>Project Description :</h3>
                  <p>The web portal manages huge amount of data that has to be displayed in the form a tabular format/grid. The main challenge in this project was to load 50,000+ records in the client side, so that the load from the server is nullified. Loading these many records on the client side gave an excellent user experience because searching, sorting and other features will be very fast. The main challenge was in a technical perspective to load all the data into the browser without hanging it. We had to make sure all latest browser versions support it and behave it in a consistent manner. The traditional grid system failed here because it could not handle the large amount of data.</p>
                  <p>We used a grid system called SLICKGRID. We were able to load millions of records without any performance degradation. The grid system now has filters, sorting, Google Map integration and export to excel options. Export to excel feature works on the client side !</p>
                  <h3>Features:</h3>
                  <p>
                  <ul>
                    <li>Can load millions of records on the client side -- asynchronously</li>
                    <li>High performance</li>
                    <li>Excel like filters</li>
                    <li>Sorting</li>
                    <li>Google maps integrated</li>
                    <li>Tooltip facility</li>
                    <li>Select rows and export to excel (client side)</li>
                    <li>Highly customizable</li>
                  </ul>
                  </p>
                  <h3>Technologies</h3>
                  <p>IBM lotus domino, JavaScript, SlickGrid, require js, ExcelBuilder.js, Tooltip.js</p>
                  <!-- <a href="http://flyafrica.com" target="_blank" class="link hyper-link">View Online</a> -->
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
    jQuery(".discuss-team-popup, .popupWrapper,.overlay-pop-up").fadeIn(500);
                //jQuery("body").css({ overflow: 'hidden' });

    jQuery("#edit-submitted-discuss-with-bridge-team option").filter(function() {
      return jQuery(this).text() == 'Bridge .Net CMS Team';
    }).prop('selected', true);

  });

  jQuery(".close-box-inner-page a, .popup-close-btn ,.overlay-pop-up").click(function(){
    jQuery(".discuss-team-popup, .popupWrapper,.overlay-pop-up").fadeOut(500);
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
