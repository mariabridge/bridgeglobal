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

<!-- CLIENTS PAGE -->

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

<section class="about-content-wrapp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="display-content">
          <?php print render($page['our_client_top_content']); ?>
        </div>
        <div class="client-logos">

          <div class="view view-our-customers view-id-our_customers view-display-id-page view-dom-id-8826f4de16ec8238f078944c39a46c09">
            <div class="view-content">
              <div class="views-row views-row-1 views-row-odd views-row-first">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.frieslandcampinainstitute.nl/nl" target="_blank" title="Friesland Campina Institute"><img src="http://bridge-global.com/sites/default/files/client_log_images/yoki.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-2 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://in.msn.com/" target="_blank" title="MSN Messenger"><img src="http://bridge-global.com/sites/default/files/client_log_images/msn.png" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-3 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.jnj.com" target="_blank" title="jonson and johnson"><img src="http://bridge-global.com/sites/default/files/client_log_images/johnson1.png" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-4 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.abp.nl/" target="_blank" title="ABP"><img src="http://bridge-global.com/sites/default/files/client_log_images/abp.png" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-5 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.dunloptires.com/en-US/tires-home" target="_blank" title="Dunlop"><img src="http://bridge-global.com/sites/default/files/client_log_images/dunlop1.png" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-6 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.heineken.com/" target="_blank" title="Heineken"><img src="http://bridge-global.com/sites/default/files/client_log_images/heineken1_0.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-7 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="https://www.rabobank.com/en/group/index.html" target="_blank" title="Rabo Bank"><img src="http://bridge-global.com/sites/default/files/client_log_images/Rabobank1_0.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-8 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="https://www.vodafone.in" target="_blank" title="Vodafone"><img src="http://bridge-global.com/sites/default/files/client_log_images/vodaphone1.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-9 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.amstel.com/" target="_blank" title="Amstel"><img src="http://bridge-global.com/sites/default/files/client_log_images/amstel2.png" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-10 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.kentz.com/" target="_blank" title="Kentz"><img src="http://bridge-global.com/sites/default/files/client_log_images/kentz-logo_0_0.png" width="143" height="83" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-11 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="https://www.freedomfinance.se" target="_blank" title="Freedom Finance"><img src="http://bridge-global.com/sites/default/files/client_log_images/freedomFinance_0.png" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-12 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="https://www.triple-it.nl/" target="_blank" title="Ttriple IT"><img src="http://bridge-global.com/sites/default/files/client_log_images/tripleIT.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-13 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.triodor.nl/" target="_blank" title="Triodor"><img src="http://bridge-global.com/sites/default/files/client_log_images/triodor1.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-14 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.woodwing.com/" target="_blank" title="Woodwing"><img src="http://bridge-global.com/sites/default/files/client_log_images/woodwing.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-15 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.ezy.se/" target="_blank" title="Ezy"><img src="http://bridge-global.com/sites/default/files/client_log_images/ezy.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-16 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.yoursurprise.com/" target="_blank" title="Your surprise"><img src="http://bridge-global.com/sites/default/files/client_log_images/yoursuprise1.png" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-17 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.applift.com/" target="_blank" title="AppLift"><img src="http://bridge-global.com/sites/default/files/client_log_images/applift.png" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-18 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.hotflo.net/" target="_blank" title="Hotflo"><img src="http://bridge-global.com/sites/default/files/client_log_images/hotflo.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-19 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="https://www.youtube.com/watch?v=yJRFPXLRV9U&amp;feature=relmfu" target="_blank" title="Synetic"><img src="http://bridge-global.com/sites/default/files/client_log_images/synetic_1.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-20 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.sigmax.nl/" target="_blank" title="Sigmax"><img src="http://bridge-global.com/sites/default/files/client_log_images/sigmax_0.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-21 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="https://www.youtube.com/watch?v=L3zjnjCGbHI&amp;list=PL9ED0E2E2CABCAE16&amp;index=1&amp;feature=plcp" target="_blank" title="Fantastiskt"><img src="http://bridge-global.com/sites/default/files/client_log_images/fantastiskt.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-22 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.mediavault.se/" target="_blank" title="Media vault"><img src="http://bridge-global.com/sites/default/files/client_log_images/media-vault.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-23 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://psksyd.com/" target="_blank" title="PSK"><img src="http://bridge-global.com/sites/default/files/client_log_images/psk-syd.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-24 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://fitness4.me/" target="_blank" title="Fitness4me"><img src="http://bridge-global.com/sites/default/files/client_log_images/fitness4me.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-25 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.novashops.com/shop" target="_blank" title="Nova Shop"><img src="http://bridge-global.com/sites/default/files/client_log_images/novashops1.png" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-26 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://insm.se/" target="_blank" title="Instro Media"><img src="http://bridge-global.com/sites/default/files/client_log_images/instromedia.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-27 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.ironshark.de/" target="_blank" title="Iron Shark"><img src="http://bridge-global.com/sites/default/files/client_log_images/ironshark.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-28 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://spotonsolutions.se/" target="_blank" title="Spot on solutions"><img src="http://bridge-global.com/sites/default/files/client_log_images/spot-on-solutions.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-29 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.wecross.nl/" target="_blank" title="Wecross"><img src="http://bridge-global.com/sites/default/files/client_log_images/logo-we-cross1.png" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-30 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.acretia.nl/" target="_blank" title="Acretia Media &amp; Creatie"><img src="http://bridge-global.com/sites/default/files/client_log_images/acretia.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-31 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.refa.nl/" target="_blank" title="IsMedia"><img src="http://bridge-global.com/sites/default/files/client_log_images/refa-logoNew.png" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-32 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.intelliweb.se/" target="_blank" title="Intelliweb"><img src="http://bridge-global.com/sites/default/files/client_log_images/Intelliweb.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-33 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="https://www.auddly.com/" target="_blank" title="Auddly"><img src="http://bridge-global.com/sites/default/files/client_log_images/auddly-logo.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-34 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://mypengomobile.com/" target="_blank" title="Mypengomobile"><img src="http://bridge-global.com/sites/default/files/client_log_images/mypengo.png" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-35 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.aanbodpagina.nl/" target="_blank" title="Aanbodpagina"><img src="http://bridge-global.com/sites/default/files/client_log_images/aanbondpagina.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-36 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.katsafados.com/" target="_blank" title="GKkatsafados"><img src="http://bridge-global.com/sites/default/files/client_log_images/GKkatsafados.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-37 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.digitaslbi.com/nl/" target="_blank" title="Flashfabriek"><img src="http://bridge-global.com/sites/default/files/client_log_images/flashfabriek.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-38 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.imageform.se/" target="_blank" title="Image &amp; Form"><img src="http://bridge-global.com/sites/default/files/client_log_images/ImageForm.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-39 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.infine.nl/" target="_blank" title="Infine Software"><img src="http://bridge-global.com/sites/default/files/client_log_images/infine.png" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-40 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.coffeecircle.com/" target="_blank" title="Coffeecircle"><img src="http://bridge-global.com/sites/default/files/client_log_images/coffeecircle.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-41 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.esas.org/" target="_blank" title="esas"><img src="http://bridge-global.com/sites/default/files/client_log_images/esas.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-42 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.idotmedia.nl/" target="_blank" title="Idot media"><img src="http://bridge-global.com/sites/default/files/client_log_images/idotmaxx.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-43 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="https://www.nationalebeeldbank.nl/" target="_blank" title="Nationalebeeld bank"><img src="http://bridge-global.com/sites/default/files/client_log_images/nationalebeeldbank1.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-44 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.chikado.nl/" target="_blank" title="Chikado"><img src="http://bridge-global.com/sites/default/files/client_log_images/chikado.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-45 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://bureau.donald.eu/" target="_blank" title="Bureau Donald"><img src="http://bridge-global.com/sites/default/files/client_log_images/bureaudonald.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-46 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.go4web.ch/de" target="_blank" title="go 4 web"><img src="http://bridge-global.com/sites/default/files/client_log_images/go4web.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-47 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.shopit.se/" target="_blank" title="Shopit"><img src="http://bridge-global.com/sites/default/files/client_log_images/shopit.png" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-48 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://mopinion.nl/" target="_blank" title="Mopinion"><img src="http://bridge-global.com/sites/default/files/client_log_images/mopinion.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-49 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.co-rotterdam.nl/" target="_blank" title="Centrum Orthopedie Rotterdam"><img src="http://bridge-global.com/sites/default/files/client_log_images/centrumorthopedierotterdam.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-50 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://zingfood.nl/" target="_blank" title="Zingfood"><img src="http://bridge-global.com/sites/default/files/client_log_images/zingfood.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-51 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.c-k.nl/" target="_blank" title="CK Interactive"><img src="http://bridge-global.com/sites/default/files/client_log_images/CKinterctive.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-52 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://koopplein.nl/" target="_blank" title="Koopplein"><img src="http://bridge-global.com/sites/default/files/client_log_images/kopplein.png" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-53 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.centroid.nl/" target="_blank" title="Centroid"><img src="http://bridge-global.com/sites/default/files/client_log_images/centroidmedia.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-54 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.uniqify.com/" target="_blank" title="Uniqify"><img src="http://bridge-global.com/sites/default/files/client_log_images/uniqify.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-55 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.dutchbrandcompany.nl/#/home" target="_blank" title="Ductch Brand"><img src="http://bridge-global.com/sites/default/files/client_log_images/dutchbrand.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-56 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.multimove.nl/" target="_blank" title="Multimove"><img src="http://bridge-global.com/sites/default/files/client_log_images/multomove.png" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-57 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.metalradar.com/" target="_blank" title="Metal Radar"><img src="http://bridge-global.com/sites/default/files/client_log_images/metalradar1.png" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-58 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.wk.com/" target="_blank" title="WK Amsterdam"><img src="http://bridge-global.com/sites/default/files/client_log_images/wkamsterdam.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-59 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.wikinggruppen.com/" target="_blank" title="Wikinggruppen"><img src="http://bridge-global.com/sites/default/files/client_log_images/wikinggruppen.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-60 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.blackboard.se/" target="_blank" title="Black Board"><img src="http://bridge-global.com/sites/default/files/client_log_images/blackboard.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-61 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.zappaevent.se/foretag_och_event/" target="_blank" title="Zappa Event"><img src="http://bridge-global.com/sites/default/files/client_log_images/zappaevent.png" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-62 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.wag.nl/" target="_blank" title="WAG"><img src="http://bridge-global.com/sites/default/files/client_log_images/wag.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-63 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.tentoday.com/" target="_blank" title="Tentoday"><img src="http://bridge-global.com/sites/default/files/client_log_images/tentoday.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-64 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.brandbase.nl/" target="_blank" title="BrandBase"><img src="http://bridge-global.com/sites/default/files/client_log_images/brandbase.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-65 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.raadhuis.com/" target="_blank" title="Raadhuis"><img src="http://bridge-global.com/sites/default/files/client_log_images/raadhuis.png" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-66 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://theamazingsociety.se/" target="_blank" title="Amazing society"><img src="http://bridge-global.com/sites/default/files/client_log_images/amazingsociety.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-67 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="javascript:void(0);"  title="Visco Design"><img src="http://bridge-global.com/sites/default/files/client_log_images/visco-design.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-68 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.picadia.com/" target="_blank" title="Picadia"><img src="http://bridge-global.com/sites/default/files/client_log_images/picadia.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-69 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.baakbeeld.nl/" target="_blank" title="Baakbeeld"><img src="http://bridge-global.com/sites/default/files/client_log_images/baakbeeld.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-70 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.sitedirect.se/" target="_blank" title="Sitedirect"><img src="http://bridge-global.com/sites/default/files/client_log_images/sitedirect.png" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-71 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.bureaublanco.nl/nl/home" target="_blank" title="Bureau Blanco"><img src="http://bridge-global.com/sites/default/files/client_log_images/bureaublanco.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-72 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.tieranzeiger24.de/" target="_blank" title="Tieranzeiger24"><img src="http://bridge-global.com/sites/default/files/client_log_images/Tieranzeiger24.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-73 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.raphaelsaxer.com/" target="_blank" title="Raphaelsaxer"><img src="http://bridge-global.com/sites/default/files/client_log_images/raphaelsaxer.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-74 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.ahead.de.com/" target="_blank" title="Ahead"><img src="http://bridge-global.com/sites/default/files/client_log_images/ahead.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-75 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.abovomedia.nl/" target="_blank" title="Abovo Media"><img src="http://bridge-global.com/sites/default/files/client_log_images/AbovoMedia_0.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-76 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.kizzle.net/" target="_blank" title="Kizzle"><img src="http://bridge-global.com/sites/default/files/client_log_images/kizzle.png" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-77 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.brasco.nl/" target="_blank" title="Brasco"><img src="http://bridge-global.com/sites/default/files/client_log_images/brasco.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-78 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.technodesignip.com/index.asp" target="_blank" title="Techno design ip"><img src="http://bridge-global.com/sites/default/files/client_log_images/technodesignip.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-79 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://project23.nl/" target="_blank" title="Project23"><img src="http://bridge-global.com/sites/default/files/client_log_images/project23.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-80 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.yachtfocus.com/" target="_blank" title="Yachtfocus"><img src="http://bridge-global.com/sites/default/files/client_log_images/Yachtfocus.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-81 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="javascript:void(0);"  title="eState" style="cursor:initial;"><img src="http://bridge-global.com/sites/default/files/client_log_images/estate.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-82 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.blueprintautomation.com/site/us/home.html" target="_blank" title="Blueprint Automation"><img src="http://bridge-global.com/sites/default/files/client_log_images/blueprint.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-83 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.nulive.nl/" target="_blank" title="Nulive"><img src="http://bridge-global.com/sites/default/files/client_log_images/nulive.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-84 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.etopia.nl/" target="_blank" title="etopia"><img src="http://bridge-global.com/sites/default/files/client_log_images/etopia.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-85 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.budgetphone.nl/" target="_blank" title="Budget Phone"><img src="http://bridge-global.com/sites/default/files/client_log_images/budgetphone.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-86 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://mysports.tv/" target="_blank" title="Mysports"><img src="http://bridge-global.com/sites/default/files/client_log_images/mysports.png" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-87 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://blogmij.nl/" target="_blank" title="Blogmij"><img src="http://bridge-global.com/sites/default/files/client_log_images/blogmij.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-88 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://legawear.com/" target="_blank" title="Lega Wear"><img src="http://bridge-global.com/sites/default/files/client_log_images/legawear.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-89 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.marsmedia.nl/" target="_blank" title="Mars media"><img src="http://bridge-global.com/sites/default/files/client_log_images/marsmedia.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-90 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://sping.nl/" target="_blank" title="Sping"><img src="http://bridge-global.com/sites/default/files/client_log_images/sping.png" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-91 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.biqini.nl/" target="_blank" title="Biqini"><img src="http://bridge-global.com/sites/default/files/client_log_images/biqini.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-92 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="javascript:void(0);"  title="Studioviv"><img src="http://bridge-global.com/sites/default/files/client_log_images/studioviv.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-93 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.kwakernaak.nl/" target="_blank" title="Kwakernaak"><img src="http://bridge-global.com/sites/default/files/client_log_images/kwakernaak.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-94 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.7write.com" target="_blank" title="7Write"><img src="http://bridge-global.com/sites/default/files/client_log_images/7write1.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-95 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.angelverhuizingen.nl/" target="_blank" title="Angel verhuizingen"><img src="http://bridge-global.com/sites/default/files/client_log_images/angelverhuizingen_0.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-96 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.adfactor.nl/" target="_blank" title="Spinning Web"><img src="http://bridge-global.com/sites/default/files/client_log_images/spinningweb.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-97 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.ks-media.de/" target="_blank" title="KS Media"><img src="http://bridge-global.com/sites/default/files/client_log_images/ksdesign.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-98 views-row-even">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.dvbmedia.nl/" target="_blank" title="DVB Media"><img src="http://bridge-global.com/sites/default/files/client_log_images/dvbmedia1.png" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-99 views-row-odd">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://www.adfactor.nl/" target="_blank" title="Ad Factor"><img src="http://bridge-global.com/sites/default/files/client_log_images/adfactor.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="views-row views-row-100 views-row-even views-row-last">
                <div>
                  <div>
                    <div class="clnt-logo">
                      <a href="http://kamedia.se/" target="_blank" title="KaMedia"><img src="http://bridge-global.com/sites/default/files/client_log_images/kamedia.jpg" width="148" height="68" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php //print render($page['our_client_logos']); ?>
        </div>
        <div class="clearfix"></div>
        <div class="client-logo-load-more">
          <a href="javascript:void(0);" class="load-more-link"><h2>Load More</h2></a>
        </div>
      </div>
          <!-- <div class="col-md-12 text-center">
            <div class="client-go-to-link">
              <a class="link" href="<?php //echo $base_url;?>/services">Go To Services</a>
            </div>
          </div> -->
        </div>
      </div>
    </section>

    <section class="bridgys-testimonial" id="testimonial">
      <div class="container">
        <div class="row">
          <div class="col-md-12 testimonilas">
            <h2>What Clients Say</h2>
            <div class="testimonial-content">
              <?php print render($page['testimonial_slider_content']); ?>
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
  <script>
    jQuery(document).ready(function(){ 

      jQuery('.menu').addClass( "navigation" );
      jQuery('.views-field-description').addClass('clearfix');
   // Helper function to Fill and Center the HTML5 Video
   jQuery('video, object').maximage('maxcover');


   jQuery('.load-more-link').click(function(){
    var logo_content_height = jQuery(".view-our-customers .view-content").height();

    jQuery('.view-our-customers').animate({'height':logo_content_height+'px'},{'duration': 2000});

    jQuery('.client-logo-load-more').css('display','none');
  });
 });
  </script>
