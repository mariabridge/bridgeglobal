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

<!-- CONTACT US PAGE -->

<!-- top bar open here -->

<script src="http://maps.googleapis.com/maps/api/js?sensor=false&region=IN" type="text/javascript"></script>
<style>
    
    .tooltip{
        right:25% !important;
    }
</style>
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

  <section class="about-content-wrapp contact-wrapp">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="contact-welcome-text">
              <?php print render($page['contact_request_for_service']); ?>
            </div>
          </div>
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <div class="contact-form-box">
              <?php print render($page['contact_left']); ?>
            </div>
          </div>
        </div>
      </div>  

  </section>

  <section class="map-wrapp">
      <div class="map-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h1>Where We Are</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="map">
        <!-- map area open -->
        <div id="map" style="width: 100%; height: 700px;"></div>

        <!-- map area close -->

        <script type="text/javascript">
          var locations = [
                           ['<div style="height:auto;width:200px;"><div class="address-map">Bridge Germany</b>     <br />      In de Tarpen 48,      <br/>       DE-22848 Norderstedt, Germany     </div>    <div class="map-mail"><a href="mailto:info@bridge-outsourcing.de">info@bridge-outsourcing.de</a></div>    <div class="map-numbers">       +49 (0) 40 21 10 76 99<br/>+49 (0) 16 09 62 92 67 9     </div></div>', 53.665079, 9.981202,  4],
                           ['<div style="height:auto;width:200px;"><div class="address-map">Bridge Sweden</b>      <br />      Styrmansgatan 16,     <br/>       553 12 J&ouml;nk&ouml;ping,<br/> Sweden  </div>    <div class="map-mail"><a href="mailto:info@bridge-outsourcing.se">info@bridge-outsourcing.se</a></div>    <div class="map-numbers">       +46 (0) 70 61 49 45 6     </div></div>', 57.792378, 14.144130, 5],
                           ['<div style="height:auto;width:200px;"><div class="address-map">Bridge Ukraine</b>( Kiev ) <br />      21, Moskovskiy ave,     <br/>       Kiev, <br /> Ukraine             </div>    <div class="map-mail"><a href="mailto:info@bridge-ukraine.com.ua">info@bridge-ukraine.com.ua</a></div>    <div class="map-numbers">       +38 (0) 50 50 38 94 0     </div></div>', 50.489583, 30.492988, 3],
                           ['<div style="height:auto;width:200px;"><div class="address-map">Bridge Outsourcing B.V.</b>  <br />      Evert v/d Beekstraat 310, <br/>       1118 CX Schiphol<br/>The Netherlands  </div>    <div class="map-mail"><a href="mailto:info@bridge-global.com">info@bridge-global.com</a></div>    <div class="map-numbers">       +31 (0) 20 22 21 72 9<br/><br/>       Chamber of Commerce: <br/>37 14 46 27     </div></div>', 52.304475, 4.749358,  2],
                           ['<div style="height:auto;width:200px;"><div class="address-map">Bridge India</b>       <br />      TR 40/653, Krishnapriya,  <br />      Automobile Road,<br />Mamangalam,<br />Kochi - 682025, <br/> India </div> <div class="map-mail"><a href="mailto:info@bridge-india.in">info@bridge-india.in</a></div>    <div class="map-numbers">  HR     : +91 484 4052472 <br>Sales : + 91 484 4000902    </div></div>', 10.006519, 76.302660, 1]
                         ];


                 var image = '<?php echo $base_url;?>/sites/all/themes/bootstrap/images/map-pointer.png';

                 var map = new google.maps.Map(document.getElementById('map'), {
                   zoom: 3,
                   center: new google.maps.LatLng(42.135408, 24.745290),
                   disableDefaultUI:true,
                   mapTypeId: google.maps.MapTypeId.ROADMAP,
                   scrollwheel: false,
                   panControl: false,

                 });

                 var infowindow = new google.maps.InfoWindow();

                 var marker, i;

                 for (i = 0; i < locations.length; i++) {
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        map: map,
                        icon:image
                    });

                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                      return function() {
                          infowindow.setContent(locations[i][0]);
                          infowindow.open(map, marker);
                          jQuery(".gm-style-iw").next().children("img").css({"maxWidth":"none"});
                        }
                    })(marker, i));
                 }
           </script>
      </div>
    </section>

    <section class="our-locations-wrapp">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <address id="netherlands-address">
              <h1>Bridge Netherlands</h1>
              <p>
                Evert v/d Beekstraat 310 <br>1118 CX Schiphol<br>The Netherlands<br> <a
                  href="mailto:info@bridge-global.com">info@bridge-global.com</a><br>
                +31 (0) 20 22 21 72 9<br> Chamber of Commerce: 37 14 46 27
              </p>
            </address>
          </div>


          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <address id="germany-address">
              <h1>Bridge Germany</h1>
              <p>
                Langenharmer Weg 223-225<br>DE-22844 Norderstedt<br>Germany </br> +49 (0) 1 60 96 29 26 79
              </p>
            </address>
            <address id="india-address">              
              <h1>Bridge India</h1>
              <p> 
                TR 40/653, Krishnapriya<br>Automobile Road, Mamangalam<br>Kochi - 682025<br>India<br><!--  +91 (0) 48 44 05 24 72 -->
                HR    : +91 484 4052472 <br>
                Sales : + 91 484 4000902
              </p>
            </address>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <address id="sweden-address">
              <h1>Bridge Sweden</h1>
              <p>
                Styrmansgatan 16<br>553 12 Jönköping<br>Sweden<br> +46 (0) 70 61 49 45 6
              </p>
            </address>
            <address id="ukraine-address">
              <h1>Bridge Ukraine</h1>
              <p>
                21, Moskovskiy ave<br>Kiev<br>Ukraine<br> +38 (0) 50 50 38 94 0
              </p>
            </address>
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

<div class="overlay-pop-up"></div>
<div class="popupWrapper">
<div class="contact-us-success-message"></div>
</div>

<script>
jQuery(document).ready(function(){

  jQuery("body").css({ overflow: 'auto' });

  jQuery('.menu').addClass( "navigation" );
  jQuery('.views-field-description').addClass('clearfix');
   // Helper function to Fill and Center the HTML5 Video
    jQuery('video, object').maximage('maxcover');

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