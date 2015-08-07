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

<!-- ABOUT US PAGE -->

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
<!--         <li><b><i class="fa fa-phone"></i> +91 (0) 48 44 05 24 72</b></li>
 -->      </ul>
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

<section class="wrapper about-us-wrapper">
  <div class="container">
   <div class="row about-content">


    <div class="inner-head">
     <span><img
      src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/history-icon.png"
      alt="history-icon" /></span>
      <h2>Our history</h2>
    </div>
    <p>Bridge Global is an international company with a strong foundation
     in Dutch clay. Hugo started Bridge in 2005 and over the years have
     turned it into a people oriented and thriving IT company. He got
     his idea for the Bridge logo from a drawbridge in Netherlands. The
     symbol represented his idea of connecting people , connecting
     countries. Building bridges between people and IT. Bridge has its offices spread over Europe in Netherlands, United States, Sweden and Germany. Our development hubs are located in India and Ukraine with over 100 employees.
   </p>
 </div>
</div>
<div class="value-section" id="core-values">
  <div class="container">
   <div class="inner-head">
     <span><img
      src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/corevalue-icon.png"
      alt="corevalue-icon" class="core-margin" /></span>
      <h2>Our Core Values</h2>
    </div>
    <div class="core-value-outer">

      <div class="col-md-12 core-values">
       <h2>Core Values</h2>
       <ul>
        <li class="c1">
          <i class="fa fa-question"></i>
        <div class="value-content">
          <h3>HELP</h3>
          <p>Together we can</p>
        </div>
      </li>
      <li class="c2">
        <i class="fa fa-lightbulb-o"></i>
      <div class="value-content">
        <h3>Entrepreneurship</h3>
        <p>Every day we do things a little better</p>
      </div>
    </li>
    <li class="c3">
      <i class="fa fa-users"></i>
    <div class="value-content">
      <h3>Integrity</h3>
      <p>Our word is our Bond</p>
    </div>
  </li>
  <li class="c4">
    <i class="fa fa-bullseye"></i>
  <div class="value-content">
    <h3>Openness</h3>
    <p>We are open - we speak our minds and listen</p>
  </div>
</li>
<li class="c5">
  <i class="fa fa-thumbs-o-up"></i>
<div class="value-content">
  <h3>Appreciation</h3>
  <p>A pat on the back is better than a kick in the butt</p>
</div>
</li>
<li class="c6">
  <i class="fa fa-smile-o"></i>
<div class="value-content">
  <h3>Joy</h3>
  <p>Pleasure and laughter, success comes after</p>
</div>
</li>
</ul>

<div class="circle-core-values"></div>

</div>
<div class="clear"></div>
</div>
</div>
</div>
<div class="container">
 <div class="row about-content bottom-about-margin">
  <div class="inner-head">
   <span><img
    src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/helping-icon.png"
    alt="helping-icon" /></span>
    <h2>Helping comes first</h2>
  </div>
  <p>At Bridge helping comes first. We want to make Bridge Global 
   reliable, comfortable and profitable for any organization. We
   achieve this with our personal touch and selecting the right people
   for you.</p>

   <p>We feel grateful if we can give personal as well as financial
     meaning to the work we do. To our clients, to our employees, but
     also to various non-profit organizations who need it most. Hereby
     we focus mostly on reducing poverty, starting in the countries
     where we have our offices. We believe that education is a right for
     all and we know that education is the way-out of poverty. We have
     therefore committed ourselves to supporting a group of
     school-children in our home town in India with school supplies and
     books. To make sure that this is not just a one-off aid, we also
     decided that for every new developer that starts working for us we
     add an additional child to this support program.</p>
     <p>This is just one recent example of a support we provide locally
       and we are more than happy to inform you about the other support
       programs we are funding.</p>

     </div>
   </div>

 </section>

 <!--Expert section end here-->

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
<script>
  jQuery(document).ready(function(){
   var vars = [], hash;
   var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('#');

   for(var i = 0; i < hashes.length; i++) {
    hash = hashes[i].split('=');
    if( hash[0] ){
     if( hash[0] == 'core-values' ){
       var core_value = jQuery('#core-values').offset().top - jQuery('.header').height()-15;
       jQuery("html, body").animate({"scrollTop":core_value+"px"});
       console.log("corevalues");
       $('li[class=tb-megamenu-item level-2 mega][data-id="705"]').addClass('active');

     }

   }
 }

 
});
</script>