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

<!-- BRIDGE .NET WEB TEAM PAGE -->

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
            <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/net-web-team/logo.png" alt="teams">
          </div>
          <div class="col-md-8 team-works">
            <p>
              <b>Number of Projects completed:</b> 30+<br>
              <br> <b>Business Focus:</b> Travel Industry, Tourism, CRM Domain, Airlines Industry<br>
              <br> <b>Technology Focus:</b> ASP.NET, C#.net, VB.Net, WebAPI, JavaScript, HTML, Jquery, CSS, Telerik Programming, WPF, Entity Framework<br>
              <br> <b>Software Process:</b> SCRUM, Agile<br>
              <br> <b>Team Spoken Languages:</b> English, Malayalam<br>
              <br> <b>Team Strength:</b>  Senior team members, experienced in big scale projects, can work completely independent, architect included. Knowledge in ISO standards and Certified SCRUM master included.
            </p>
          </div>


          <div class="col-md-12 team-members">
            <div class="row">
              <h1>Team Members</h1>

              <div class="owl-carousel">
                <div class="col-sm-12 col-md-12 teams-rep">
                  <div class="team-detail">
                    <div class="team-image">
                      <h1>Binu Kumar S</h1>
                      <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/net-web-team/binu.jpg" alt="team">
                    </div>
                    <div class="team-works">
                      <h2>Solution Architect </h2>
                      <p>
                        <b>Technology:</b> .Net<br>
                        <br> <b>Level:</b> Senior<br>
                        <!-- <br> <b>Joined Team:</b> 2013<br> -->
                        <br> <b>Strength:</b> Architectural Solutions, Communication Skill, Effort Estimation, Project & Team Management, Requirement Analysis, Certified Scrum Master, Quality assurance, ISO standards knowledge, Resource scheduling, Onsite support</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-12 col-md-12 teams-rep">
                  <div class="team-detail">
                    <div class="team-image">
                      <h1>Vishnu K J</h1>
                      <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/net-web-team/vishnu.jpg" alt="team">
                    </div>
                    <div class="team-works">
                      <h2>Senior Software Programmer</h2>
                      <p>
                        <b>Technology:</b> .Net<br>
                        <br> <b>Level:</b> Senior<br>
                        <!-- <br> <b>Joined Team:</b> 2013<br> -->
                        <br> <b>Strength:</b> Task Prioritization, Quick Learner, Troubleshooting skills, innovative and creative solutions to problems, Analysis Skills, Technology Adaptation, Communication Efficiency, Multi Domain/ Industry Experience, Time management.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-12 col-md-12 teams-rep">
                  <div class="team-detail">
                    <div class="team-image">
                      <h1>Jithil George</h1>
                      <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/net-web-team/jithil.jpg" alt="team">
                    </div>
                    <div class="team-works">
                      <h2>Software Programmer</h2>
                      <p>
                        <b>Technology:</b> .Net<br>
                        <br> <b>Level:</b> Junior<br>
                        <!-- <br> <b>Joined Team:</b> 2013<br> -->
                        <br> <b>Strength:</b> Hard working, Time management, Team player, Adaption to latest technologies, Presentation skills
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-12 col-md-12 teams-rep">
                  <div class="team-detail">
                    <div class="team-image">
                      <h1>Anoop M</h1>
                      <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/net-web-team/anoop.jpg" alt="team">
                    </div>
                    <div class="team-works">
                      <h2>Project Leader</h2>
                      <p>
                        <b>Technology:</b> .Net<br>
                        <br> <b>Level:</b> Senior<br>
                        <!-- <br> <b>Joined Team:</b> 2013<br> -->
                        <br> <b>Strength:</b> Technology specialist, Dynamic and skilled, Quick Learner, Passionate in .Net development, Excellent communicator, Multinational Company experience in Multiple domains, Handled multiple projects in many industries, Good team manager and player.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-12 col-md-12 teams-rep">
                  <div class="team-detail">
                    <div class="team-image">
                      <h1>Mithun Balan</h1>
                      <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/net-web-team/mithun.jpg" alt="team">
                    </div>
                    <div class="team-works">
                      <h2>Senior Software Programmer</h2>
                      <p>
                        <b>Technology:</b> .Net<br>
                        <br> <b>Level:</b> Senior<br>
                        <!-- <br> <b>Joined Team:</b> 2013<br> -->
                        <br> <b>Strength:</b> Thirst for learning new technologies, Quick learner, Good and active team Player, Flexible with working on any new technology, Tech savvy, Confident.
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
                  <a href="http://www.kentz.com" target="_blank">
                  <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/net-web-team/kentz.png" alt="Kentz">
                  </a>
                </div>
                <div class="col-sm-9 col-md-7">
                  <h2>Kentz</h2>
                  <h3>Project Description :</h3>
                  <p>This project system consists of various huge separate modules like Project Cost Management System (PCMS), Kentz Document Management System (KDMS), Construction and Completion Management System (CCMS) and the Procurement and Material Management System (PAMMS), Safety Security Health & Environment (SSHE), Project Creation Wizard (PCW) etc. All above mentioned project system has been developed from the scratch by the team, including db queries, Telerik reporting, CrUD operations, jQuery based client processing's, vb.net coding etc. All these systems communicate with each other, allowing for integrated co-operation.We developed the wireframes, used collaboration tools like TFS, used Telerikajax based controls, done SQL stored procedure with entity framework support for this data driven application.</p>
                  <h3>Features:</h3>
                  <p>
                  <ul>
                    <li>Cost Capture
                    <li>Sales Capture</li>
                    <li>Invoice Capture</li>
                    <li>Reporting with Export to Pdf, Excel features</li>
                    <li>Wizard based approach for Master data</li>
                    <li>Management Reports</li>
                    <li>Active Directory based authentication</li>
                    <li>Custom workflow rules based behavior</li>
                    <li>Project Setting Up</li>
                    <li>Change Management System</li>
                  </ul>
                  </p>
                  <h3>Technologies</h3>
                  <p>VB.Net, ASP.Net, JQuery, .Net Framework, Sql Server 2005, 2008R2, WPF</p>
                  <a href="http://www.kentz.com" target="_blank" class="link hyper-link">View Online</a>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-3 col-md-5">
                <a href="http://flyafrica.com" target="_blank">
                  <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/net-web-team/fly-africa.png" alt="Fly Africa">
                </a>  
                </div>
                <div class="col-sm-9 col-md-7">
                  <h2>Fly Africa</h2>
                  <h3>Project Description :</h3>
                  <p>Ezy, one of the esteemed customers associated with Bridge for many years, is a pioneer in developing customized and tailor made applications for airline industry mainly in the field of airline reservation. Fly Africa is a new airline which started to fly in July 2014, contacted Ezy for a new website and mobile application equipped with the latest aviation industry standards and booking procedures. </p>
                  <p>Bridge software development team developed a very user-friendly website and mobile application that integrates flight bookings, cancellations, best route selection, simulated seat selection, flight tracking, customized holiday packages and other offers. The website delivered to the customer, can easily be customized by their team itself. Powered by latest technologies and frameworks, Bridge software development team helped our customer Ezy, to reach their milestone and satisfy their customers with a successful product delivery. Many more airline customers requested for the same product and thus we are still having queries for the enhancements and maintenance of the product.</p>
                  <h3>Features:</h3>
                  <p>
                  <ul>
                    <li>Route selection</li>
                    <li>Flight Ticket Booking & Cancellation</li>
                    <li>Add-On services like SMS booking, Extra Luggage, Airport pickup and drop</li>
                    <li>Seat Selection</li>
                    <li>Payment facility (Credit Cards and all other standard payment modes)</li>
                    <li>E-checkin</li>
                    <li>Tour packages and promotions</li>
                    <li>Hotels and Car reservation facility</li>
                    <li>Gift Certificates</li>
                    <li>Flight tracking</li>
                    <li>Multi-Lingual support</li>
                    <li>Social media integration</li>
                    <li>Customizable Widgets </li>
                  </ul>
                  </p>
                  <h3>Technologies</h3>
                  <p>ASP.Net, MVC, N2CMS, SQLserver2012, JQuery, NHibernate, Adobe Photoshop</p>
                  <a href="http://flyafrica.com" target="_blank" class="link hyper-link">View Online</a>
                </div>
              </div>
            </div>



            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-3 col-md-5">
                <a href="http://www.cruisetour.ch/de" target="_blank">
                  <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/net-web-team/Cruisetour.ch.png" alt="Cruisetour.ch">
                 </a>
                </div>
                <div class="col-sm-9 col-md-7">
                  <h2>Cruisetour.ch</h2>
                  <h3>Project Description :</h3>
                  <p>Cruisetour.ch is a online cruise booking system that closely works with a heavily programmed backend services and desktop application. Deck plans, Ship routes, Booking mechnaism, Searching and blocking rooms/ships, google analytics, invoice display are some major functionalities site provides. MSC, Costa, AIDA cruises, Star cruises are some of the major partners that list their services through this web portal</p>
                  <h3>Features:</h3>
                  <p>
                  <ul>
                    <li>Overnight syncing or prices and availability to the system</li>
                    <li>Routes display in google maps</li>
                    <li>Advanced search based on Regions, Countries and Ship suppliers</li>
                    <li>Real data analysis of bookings and search via Google Analytics</li>
                    <li>Desktop application support for Content management </li>
                  </ul>
                  </p>
                  <h3>Technologies</h3>
                  <p>C#.net, ASP.Net, JQuery, Helicon, IIS, SQL Server 2005</p>
                  <a href="http://www.cruisetour.ch/de" target="_blank" class="link hyper-link">View Online</a>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-3 col-md-5">
                  <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/net-web-team/sale-rocket-2-success.png" alt="SalesRocket2Success">
                </div>
                <div class="col-sm-9 col-md-7">
                  <h2>SalesRocket2Success</h2>
                  <h3>Project Description :</h3>
                  <p>A custom CRM web based package, where a company/firm can plan, track, manage, report and act on their day-to-day activities with extreme precision. Competitors strength and weakness can also be logged to track the opportunities in all corners. Rule based alarms and actions can be configured so that system will send out alarms and display in dashboard with top priorities. Every customer/company in the system can have special features, which means this is a kind of SaaS application!</p>
                  <h3>Features:</h3>
                  <p>
                  <ul>
                    <li>Custom CRM package</li>
                    <li>Standalone SQL db's for each customer</li>
                    <li>Variety of custom reports</li>
                    <li>OLAP reports</li>
                    <li>Rules Configured Actions</li>
                    <li>Super admin panel to handle all customers</li>
                    <li>User limit possible</li>
                    <li>Multilingual website</li>
                    <li>Data Export-Import mechanism</li>
                  </ul>
                  </p>
                  <h3>Technologies</h3>
                  <p>ASP.Net, C#.net, javaScript, Jquery, CSS, SQL Server 2005</p>
                  <!-- <a href="http://flyafrica.com" target="_blank" class="link hyper-link">View Online</a> -->
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-3 col-md-5">
                  <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/net-web-team/Centercom.png" alt="Centercom">
                </div>
                <div class="col-sm-9 col-md-7">
                  <h2>Centercom</h2>
                  <h3>Project Description :</h3>
                  <p>Centercom wanted to realize a fashion domain industry portal with administrator end and user's portal. Wizards, forms, reporting grids, date time pickers, and validation plugins were widely used in the process. Common look and feel was important. The most challenging part was to inject the dependencies of classes and models by following MVC architecture. It was important to follow TDD so as to make sure during the enhancements the already developed modules works fine. We followed constructor based dependency injection and thus the TDD was possible too. Followed the agile scrum methodology as development approach with weekly demo to the customer.</p>
                  <h3>Features:</h3>
                  <p>
                  <ul>
                    <li>Fashion Partner management</li>
                    <li>Product Management</li>
                    <li>User Management</li>
                    <li>Reporting - Sorting, Paging, Filtering</li>
                    <li>Jquery driven validations</li>
                    <li>Wizard like form navigations</li>
                    <li>Job Scheduler and Management</li>
                    <li>Roles based Login</li>
                  </ul>
                  </p>
                  <h3>Technologies</h3>
                  <p>ASP.Net, MVC, SQLserver2012, Jquery, EntityFrameWork, TDD</p>
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
    jQuery(".discuss-team-popup, .popupWrapper, .overlay-pop-up").fadeIn(500);
                //jQuery("body").css({ overflow: 'hidden' });

    jQuery("#edit-submitted-discuss-with-bridge-team option").filter(function() {
      return jQuery(this).text() == 'Bridge .Net Web Team';
    }).prop('selected', true);

  });

  jQuery(".close-box-inner-page a, .popup-close-btn,.overlay-pop-up").click(function(){
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
