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

<!-- BRIDGE INDEPENDENT VALIDATION AND TESTING SERVICES TEAM PAGE -->

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
            <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/testing-team/logo.png" alt="teams">
          </div>
          <div class="col-md-8 team-works">
            <p>
              <b>Number of Projects completed:</b> 15+<br>
              <br> <b>Business Focus:</b> Finance, E-Commerce, Insurance, CRM Domain<br>
              <br> <b>Technology Focus:</b> Selenium, Jmeter, QTP, Load Runner, SOAPUI, Sql<br>
              <br> <b>Software Process:</b> SCRUM, Agile<br>
              <br> <b>Team Spoken Languages:</b> English, Malayalam<br>
              <br> <b>Team Strength:</b> Senior Team Members, Experience in Big scale projects, Can work independently, Deliver on Time
            </p>
          </div>


          <div class="col-md-12 team-members">
            <div class="row">
              <h1>Team Members</h1>

              <div class="owl-carousel">
                <div class="col-sm-12 col-md-12 teams-rep">
                  <div class="team-detail">
                    <div class="team-image">
                      <h1>Saji Xavier</h1>
                      <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/testing-team/saji.jpg" alt="team">
                    </div>
                    <div class="team-works">
                      <h2>Automation Test Lead</h2>
                      <p>
                        <b>Technology:</b> Automation Testing (QTP), Selenium, jmeter, JIRA, Load Runner, SOAPUI <br>
                        <br> <b>Level:</b> Senior<br>
                        <!-- <br> <b>Joined Team:</b> 2013<br> -->
                        <br> <b>Strength:</b> Professional,Project Management,Excellent Communication,Proficient in automated tools,Extensive Experience in Functional Testing, Integration Testing, Regression Testing, GUI Testing, Black Box Testing, User Acceptance Testing and Database Testing.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-12 col-md-12 teams-rep">
                  <div class="team-detail">
                    <div class="team-image">
                      <h1>Prasanth G</h1>
                      <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/testing-team/prasanth.jpg" alt="team">
                    </div>
                    <div class="team-works">
                      <h2>Test Engineer</h2>
                      <p>
                        <b>Technology:</b> Selenium, jmeter, JIRA, Apache JMeter, Java <br>
                        <br> <b>Level:</b> Medior<br>
                        <!-- <br> <b>Joined Team:</b> 2013<br> -->
                        <br> <b>Strength:</b>  Good Communication Skills, Effective in Time Management, Proactive
                      </p>
                    </div>
                  </div>
                </div>

                <!-- <div class="col-sm-12 col-md-12 teams-rep">
                  <div class="team-detail">
                    <div class="team-image">
                      <h1>Anju Michael</h1>
                      <img src="<?php //echo $base_url;?>/sites/default/files/staffing-teams/testing-team/anju.jpg" alt="team">
                    </div>
                    <div class="team-works">
                      <h2>Junior Test Engineer</h2>
                      <p>
                        <b>Technology:</b> QA tester, c++, c, oracle<br>
                        <br> <b>Level:</b> Junior<br>
                        <br> <b>Strength:</b> Proactive, Hardworking,Motivated, Experience in functional testing,Usability testing,Regression testing
                      </p>
                    </div>
                  </div>
                </div> -->

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
                  <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/testing-team/Promeritum.Se.png" alt="Promeritum.Se">
                </div>
                <div class="col-sm-9 col-md-7">
                  <h2>Promeritum.Se</h2>
                  <h3>Project Description :</h3>
                  <p>Promeritum is an independent financial services that will help you find the best solution to your debt situation. Using this, takes about the same time as applying for a loan from a bank, but instead you get answers from our business partners. Additionally, the service is completely free.</p>
                  <h3>Features:</h3>
                  <p>
                  <ul>
                    <li>Compatibility on different devices - Compatibility Testing</li>
                    <li>User friendly Layouts & design - Usability Testing</li>
                    <li>Security</li>
                    <li>Strong Database Support</li>
                    <li>Online Analysis</li>
                    <li>Online Communication</li>
                    <li>Service Gateway</li>
                    <li>High User Interaction</li>
                    <li>Multi Lingual Support</li>
                    <li>SEO</li>
                  </ul>
                  </p>
                  <h3>Technologies</h3>
                  <p>Jmeter, selenium, SQLmap, MONyog, JIRA, Automated Regression Suites, Functionality Testing</p>
                  <!-- <a href="#" class="link hyper-link">View Online</a> -->
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-3 col-md-5">
                  <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/testing-team/Promeritum.fi.png" alt="Promeritum.fi">
                </div>
                <div class="col-sm-9 col-md-7">
                  <h2>Promeritum.fi</h2>
                  <h3>Project Description :</h3>
                  <p>Promeritum is a new financial service that will help you compare and find the best loan options for your money. Promeritum stands with more than 10 years experience in credit intermediation and related services. With our experience and expertise will provide you with the best possible assistance based on your needs and your situation.</p>
                  <h3>Features:</h3>
                  <p>
                  <ul>
                    <li>Compatibility on different devices - Compatibility Testing</li>
                    <li>User friendly Layouts & design - Usability Testing</li>
                    <li>Security</li>
                    <li>Strong Database Support</li>
                    <li>Online Analysis</li>
                    <li>Online Communication</li>
                    <li>Service Gateway</li>
                    <li>High User Interaction</li>
                    <li>Multi Lingual Support</li>
                    <li>SEO</li>
                  </ul>
                  </p>
                  <h3>Technologies</h3>
                  <p>Jmeter, selenium, SQLmap, MONyog, JIRA, Automated Regression Suites, Functionality Testing</p>
                  <!-- <a href="#" class="link hyper-link">View Online</a> -->
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-3 col-md-5">
                  <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/testing-team/mcm-plus-catalog-viewer.png" alt="MCM Plus Catalog Viewer">
                </div>
                <div class="col-sm-9 col-md-7">
                  <h2>MCM Plus Catalog Viewer</h2>
                  <h3>Project Description :</h3>
                  <p>MCM PLUS CATALOG VIEWER" developed in iOS. It's an application for viewing the pdf files being saved in the official server of PENTAIR and also needs to reflect the changes that are being made in the server. This application is developed for PENTAIR.</p>
                  <h3>Features:</h3>
                  <p>
                  <ul>
                    <li>Application platform is in iOS</li>
                    <li>Simple functionality</li>
                    <li>User friendly Design</li>
                    <li>Fast loading pages</li>
                    <li>Quick Transactions</li>
                    <li>Response Time</li>
                  </ul>
                  </p>
                  <h3>Technologies</h3>
                  <p>Manual Testing</p>
                  <!-- <a href="#" class="link hyper-link">View Online</a> -->
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-3 col-md-5">
                  <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/testing-team/tomkabinet.png" alt="Tomkabinet">
                </div>
                <div class="col-sm-9 col-md-7">
                  <h2>Tomkabinet</h2>
                  <h3>Project Description :</h3>
                  <p>"TOMKABINET.nl" is a website for selling second hand e-books. It's an intermediary between seller and buyer of e-books.You sell an e-book through tomkabinet.nl than Tom so the condition is that you have your own copy of this e-book instantly knew. As far as technically possible, Tom checked this. You can sell an e-book therefore not twice through the site. Tom validation scans used to keep e-books with viruses. And own watermarks to prevent users from accessing their e-books on the Internet illegal items.</p>
                  <h3>Features:</h3>
                  <p>
                  <ul>
                    <li>Intermediary Between Buyer And Seller Of E-Books
                    <li>Service Oriented Website</li>
                    <li>Provide Security By Watermarking</li>
                    <li>Online Service Providers</li>
                    <li>User Friendliness</li>
                    <li>Database Optimization</li>
                  </ul>
                  </p>
                  <h3>Technologies</h3>
                  <p>Jmeter, WaptPro</p>
                  <!-- <a href="#" class="link hyper-link">View Online</a> -->
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
                //jQuery("body").css({ overflow: 'hidden' });

    jQuery("#edit-submitted-discuss-with-bridge-team option").filter(function() {
      return jQuery(this).text() == 'Independent Validation and Testing Services';
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
