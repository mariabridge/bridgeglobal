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

<!-- BRIDGE MOBILE APP TEAM PAGE -->

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
            <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/mobile-team/logo.png" alt="teams">
          </div>
          <div class="col-md-8 team-works">
            <p>
              <b>Number of Projects completed:</b> 50+<br>
              <br> <b>Business Focus:</b> Travel Industry, Retail, Airlines Industry<br>
              <br> <b>Technology Focus:</b> IOS, Android, PHP<br>
              <br> <b>Software Process:</b> SCRUM, Agile<br>
              <br> <b>Team Spoken Languages:</b> English, Malayalam<br>
              <br> <b>Team Strength:</b>  Self managed Scrum Team, Allround in many mobile technologies</p>
          </div>


          <div class="col-md-12 team-members">
            <div class="row">
              <h1>Team Members</h1>

              <div class="owl-carousel">
                <div class="col-sm-12 col-md-12 teams-rep">
                  <div class="team-detail">
                    <div class="team-image">
                      <h1>Safil Sunny</h1>
                      <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/mobile-team/safil.jpg" alt="team">
                    </div>
                    <div class="team-works">
                      <h2>Mobile Architect </h2>
                      <p>
                        <b>Technology:</b> IOS, Android<br>
                        <br> <b>Level:</b> Senior<br>
                        <!-- <br> <b>Joined Team:</b> 2013<br> -->
                        <br> <b>Strength:</b> Architecture, Certified Scrum Master, Team Coaching/Mentor, Out of the box solutions, Remote communication, hungry to learn mobile technologies.</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-12 col-md-12 teams-rep">
                  <div class="team-detail">
                    <div class="team-image">
                      <h1>Sandeep M R</h1>
                      <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/mobile-team/sandeep.jpg" alt="team">
                    </div>
                    <div class="team-works">
                      <h2>Junior Android programmer </h2>
                      <p>
                        <b>Technology:</b> Android<br>
                        <br> <b>Level:</b> Medior <br>
                        <!-- <br> <b>Joined Team:</b> 2013<br> -->
                        <br> <b>Strength:</b>   Android native app programming, prioritizing the tasks, eager to learning new technologies, likes to accept challenges, a go-getter.</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-12 col-md-12 teams-rep">
                  <div class="team-detail">
                    <div class="team-image">
                      <h1>Sinson Antony</h1>
                      <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/mobile-team/sinson.jpg" alt="team">
                    </div>
                    <div class="team-works">
                      <h2>Junior IOS programmer</h2>
                      <p>
                        <b>Technology:</b> IOS<br>
                        <br> <b>Level:</b> Medior <br>
                        <!-- <br> <b>Joined Team:</b> 2013<br> -->
                        <br> <b>Strength:</b>   IOS native app programming, Self motivated, willingness to learn more, high level of adaptability, recognized for work ethics, thoroughness and commitment to corporate goals.</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-12 col-md-12 teams-rep">
                  <div class="team-detail">
                    <div class="team-image">
                      <h1>Neethu G K</h1>
                      <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/mobile-team/neethu.jpg" alt="team">
                    </div>
                    <div class="team-works">
                      <h2>Junior Android programmer</h2>
                      <p>
                        <b>Technology:</b> Android<br>
                        <br> <b>Level:</b> Junior<br>
                        <!-- <br> <b>Joined Team:</b> 2013<br> -->
                        <br> <b>Strength:</b>   I find the prospect of being an Engineer,I would find my ability both stimulated and toned by working as an Android developer.Working on both Tablet and Mobile applications,UI development,Api calls ,gaming applications.</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-12 col-md-12 teams-rep">
                  <div class="team-detail">
                    <div class="team-image">
                      <h1>Aby Mathew</h1>
                      <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/mobile-team/aby.jpg" alt="team">
                    </div>
                    <div class="team-works">
                      <h2>Junior IOS programmer</h2>
                      <p>
                        <b>Technology:</b> IOS<br>
                        <br> <b>Level:</b> Medior<br>
                        <!-- <br> <b>Joined Team:</b> 2013<br> -->
                        <br> <b>Strength:</b>   iOS app programming,Happy to work with new technologies , Passionate in mobile programming.</p>
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
                  <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/mobile-team/Huggybird.jpg" alt="Huggybird">
                </div>
                <div class="col-sm-9 col-md-7">
                  <h2>Huggybird</h2>
                  <h3>Project Description :</h3>
                  <p>The fourth Dutch Huggybird book -Huggybird AND THE MAGIC MAGIC BALLS 'was written by Olivia Lewis . The world of color , candy and magic balls are the key containing a clear message : Be happy with who you are and what you do !</p>
                  <h3>In The Media :</h3>
                  <p>The book is seen a lot in the media, including : LIFE4YOU , RTL coffee time , MAX STUDIO LIVE , RTL BOULEVARD , SBS SHOWNEWS etc</p>
                  <h3>Synopsis :</h3>
                  <p> Huggybird is busy with spring cleaning of his bedroom when he suddenly hears sounds from his dream coffin . When he opens the box he sees a huge pot with magic balls . There hang a note to the pot . He reads : " Delicious magic balls ! Do not touch ! " Secretly he still takes a toverbal.Maar as the jawbreaker changes color , changes Huggybird too and he is a different animal</p>
                  <h3>Interactive :</h3>
                  <p>For Read by Olivia Lewis - Easy and kid friendly menu - Colorful drawings full of humor - Equipped with animation and sound - Play himself into the story , with your own name * * Reading is off.</p>
                  <h3>Huggybird Online :</h3>
                  <p>
                  <ul>
                    <li><a href="http://www.facebook.com/huggybird" target="_blank" >Huggybird : Facebook</a></li>
                    <li><a href="http://www.twitter.com/huggybird" target="_blank" >Huggybird : Twitter</a></li>
                    <li><a href="http://www.huggybird.nl" target="_blank" >Shop Huggybird's several nice items</a></li>
                  </ul>
                  </p>
                  <h3>Technologies</h3>
                  <p>Objective C, HTML 5, JavaScript, PHP</p>
                  <!-- <a href="http://www.euromaster.se" target="_blank"class="link hyper-link">View Online</a> -->
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-3 col-md-5">
                  <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/mobile-team/fly-mango.jpg" alt="FlyMango">
                </div>
                <div class="col-sm-9 col-md-7">
                  <h2>FlyMango</h2>
                  <h3>Project Description :</h3>
                  <p>This is an airline booking application only designed for Mango airline. It is powered by Radixx and it has a strong backend CMS system to mange the contents in the application.</p>
                  <p>Major Functionalities include Booking engine , credit card scanning, Listing the airports, managing the checkin, Managing the passbook. </p>
                  <h3>Technologies</h3>
                  <p>IOS, Android, Blackberry, C, C++, Java, Objective C, HTML 5, C#.net</p>
                  <!-- <a href="http://flyafrica.com" target="_blank" class="link hyper-link">View Online</a> -->
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-3 col-md-5">
                  <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/mobile-team/eldo-led.jpg" alt="ELDO LED">
                </div>
                <div class="col-sm-9 col-md-7">
                  <h2>ELDO LED</h2>
                  <h3>Project Description :</h3>
                  <p>EldoLed is an ipad application which is used to display the catalogs, pdf files in good manner. It has a powerful backend system to manage the content of the ipad application. This ipad application has a complete offline support too.</p>
                  <p>Major Functionalities include Listing the Products, showing the product details. Offline support.</p>
                  <h3>Technologies</h3>
                  <p>iPad SDK, Objective C, PHP</p>
                  <!-- <a href="http://flyafrica.com" target="_blank" class="link hyper-link">View Online</a> -->
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-3 col-md-5">
                  <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/mobile-team/Buzzoek.jpg" alt="Buzzoek">
                </div>
                <div class="col-sm-9 col-md-7">
                  <h2>Buzzoek</h2>
                  <h3>Project Description :</h3>
                  <p>Buzzoek is a loyalty program, which has an ability to communicate with the NFC modules and iBeacons. It has a powerful backend system to add the content to the app. Also this app has a complete offline support too.</p>
                  <p>Major Functionalities include Listing new offers, communicating with the beacons and NFS systems, showing the shops near to the users. </p>
                  <h3>Technologies</h3>
                  <p>IOS, Android, iBeacon Technology and NFC, HTML 5, PHP</p>
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
      return jQuery(this).text() == 'Bridge Mobile App Team';
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
