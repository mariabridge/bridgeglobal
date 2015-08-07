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

<!-- WHAT WE OFFER PAGE -->

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
                                src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/bridge-logo.png"
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
                              <!--   <li><b><i class="fa fa-phone"></i> +91 (0) 48 44 05 24 72</b></li> -->
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
      
<!--        <div class="col-md-12 about-banner-cnt">
            <div class="hexagon">
                <img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/offer-banner-icon.png" alt="about-icon"
                     class="offer-img" />
            </div>
        </div>-->
    </section>
    <!--Banner section end here-->

    <section class="wrapper about-us-wrapper">
        <div class="container">
            <div class="row offer-content">

            </div>
            <div class="row placeholder offer-div">
                <div class="col-md-3 col-sm-6 placeholder">
                    <a href="#web-application" class="greenish">
                       <div class="round-icon">
                         <span class="web-app"></span>
                     </div>
                     <span class="web-link">Web Application</span>
                 </a>
             </div>
             <div class="col-md-3 col-sm-6 placeholder">
               <a href="#mobile-development" class="bluish">
                   <div class="round-icon">
                    <span class="mob-dev"></span>
                </div>
                <span class="web-link mobile-dev-margin">Mobile Development</span>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 placeholder">
            <a href="#design-services" class="greenish">
                <div class="round-icon">
                    <span class="des-ser"></span>
                </div>
                <span class="web-link">Design Services</span>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 placeholder">
            <a href="#qa-services" class="bluish">
                <div class="round-icon">
                    <span class="qa-ser"></span>
                </div>
                <span class="web-link qa-dev-margin">QA Services</span>
                
            </a>
        </div>












    </div>
</div>
<div class="offer-section">
    <div class="container">
        <div class="row development-list" id="web-application">
            <div class="inner-head">
                <span><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/web-icon.png" alt="web-icon" /></span>
                <h2>Web Application Development</h2>
            </div>

            <div class="dev-detail">

                <h3>Custom Software Development</h3>
                <p>Attain your business goals by collaborating with our team of
                    efficient developers , using both open source and closed source
                    technologies.</p>
                    <div class="softwares">
                        <a href="<?php echo $base_url;?>/portfolio?aspnet"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/net.jpg" alt=".net" /></a>
                        <a href="<?php echo $base_url;?>/portfolio?php"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/php.jpg" alt="php" /></a>
                        <a href="<?php echo $base_url;?>/portfolio?rails"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/rails.jpg" alt="rails" /></a>
                        <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?csharp"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/c.jpg" alt="c#" /></a>
                        <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?csharpnet"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/c.net.jpg" alt="c# net" /></a>
                        <a href="<?php echo $base_url;?>/portfolio?vbnet"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/vb.net.jpg" alt="vb" /></a>
                        <a href="<?php echo $base_url;?>/portfolio?aspnet"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/asp.net.jpg" alt="asp" /></a>
                        <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?visual-studio"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/visual-studio.jpg" alt="visual-studio" /></a>
                        <a href="<?php echo $base_url;?>/portfolio?tdd"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/tdd.jpg" alt="TDD" /></a>
                        <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?crm"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/crm.jpg" alt="crm" /></a>
                        <a href="<?php echo $base_url;?>/portfolio?sql"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/sql.jpg" alt="sql" /></a>
                        <a href="<?php echo $base_url;?>/portfolio?telerik"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/telerik.jpg" alt="telerik" /></a>
                        <a href="<?php echo $base_url;?>/portfolio?zend"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/zend.jpg" alt="zend" /></a>
                        <a href="<?php echo $base_url;?>/portfolio?cakephp"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/cake-php.jpg" alt="cake-php" /></a>
                        <a href="<?php echo $base_url;?>/portfolio?laravel"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/laravel.jpg" alt="laravel-php" /></a>
                        <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?yii"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/yii.jpg" alt="yii" /></a>
                        <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?codeigniter"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/code-igniter.jpg" alt="code-igniter" /></a>
                    </div>
                    <div class="seperator">
                        <img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/seperator.png " />
                    </div>

                    <h3>Web Content Management System</h3>
                    <p>Update your own content , at your own pace.</p>
                    <div class="softwares">
                        <a href="<?php echo $base_url;?>/portfolio?drupal"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/drupal.jpg" alt="drupal" /></a>
                        <a href="<?php echo $base_url;?>/portfolio?wordpress"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/wordpress.jpg" alt="wordpress" /></a>
                        <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?joomla"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/joomla.jpg" alt="joomla" /></a>
                        <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?modex"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/modex.jpg" alt="modex" /></a>
                        <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?croogo"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/croogo.jpg" alt="croogo" /></a>
                        <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?umbraco"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/umbraco.jpg" alt="umbraco" /></a>
                        <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?n2"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/n2.jpg" alt="n2" /></a>
                        <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?episerver"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/episerver.jpg" alt="episerver" /></a>
                        <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?litium"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/litium.jpg" alt="litium" /></a>
                    </div>
                    <div class="seperator">
                        <img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/seperator.png " />
                    </div>

                    <h3>Ecommerce</h3>
                    <p>Selling online made easy for you!</p>
                    <div class="softwares">
                        <a href="<?php echo $base_url;?>/portfolio?magento"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/majentho.jpg" alt="magento" /></a>
                        <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?zencart"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/zencart.jpg" alt="zencart" /></a>
                        <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?xt-commerce"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/xt-commerce.jpg" alt="xt-commerce" /></a>
                        <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?opencart"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/opencart.jpg" alt="opencart" /></a>
                    </div>

                </div>

                <div class="inner-head" id="mobile-development">
                    <span><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/mobile-icon.jpg" alt="mobile-icon" /></span>
                    <h2>Mobile Development Services</h2>
                </div>
                <p class="innerhead-para">Get in touch with our mobile team to make
                    your business relevant to customers on-the-go.</p>

                    <div class="dev-detail">
                        <div class="softwares">
                            <a href="<?php echo $base_url;?>/portfolio?ios"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/ios.jpg" alt="ios" /></a>
                            <a href="<?php echo $base_url;?>/portfolio?android"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/android.jpg" alt="android" /></a>
                            <a href="javascript:void(0);" style="cursor:default"><!--  <a href="<?php //echo $base_url;?>/portfolio?windows"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/windows.jpg" alt="windows" /></a>
                            <a href="<?php echo $base_url;?>/portfolio?blackberry"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/blackberry.jpg" alt="blackberry" /></a>
                            <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?hybrid"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/hybrid.jpg" alt="Hybrid Apps" /></a>
                            <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?phonegap"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/phonegap.jpg" alt="phonegap" /></a>
                            <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?beacon"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/beacon.jpg" alt="beacon management" /></a>
                            <a href="<?php echo $base_url;?>/portfolio?core-data"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/core-data.jpg" alt="core-data" /></a>
                            <a href="<?php echo $base_url;?>/portfolio?rest"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/rest.jpg" alt="rest" /></a>
                            <a href="<?php echo $base_url;?>/portfolio?eclipse"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/eclipse.jpg" alt="eclipse" /></a>
                            <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?x-code"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/x-code.jpg" alt="x-code" /></a>
                            <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?sqlite"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/sqlite.jpg" alt="sqlite" /></a>
                        </div>
                    </div>
                    <div class="inner-head" id="design-services">
                        <span><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/design-icon.png" alt="design-icon" /></span>
                        <h2>Design Services</h2>
                    </div>
                    <p class="innerhead-para">Our creative team helps your business
                        attain a compelling visual identity.</p>

                        <div class="dev-detail box effect2">
                            <div class="softwares">
                                <a href="<?php echo $base_url;?>/portfolio?photoshop"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/ps.jpg" alt="photoshop" /></a>
                                <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?illustrator"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/ai.jpg" alt="illustrator" /></a>
                                <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?indisign"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/id.jpg" alt="indisign" /></a>
                                <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?firework"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/fw.jpg" alt="firework" /></a>
                                <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?after-effect"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/ae.jpg" alt="after effect" /></a>
                                <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?premier"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/pr.jpg" alt="premier" /></a>
                                <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?maya"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/maya.jpg" alt="maya" /></a>
                                <a href="<?php echo $base_url;?>/portfolio?less"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/less.jpg" alt="less" /></a>
                                <a href="<?php echo $base_url;?>/portfolio?css"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/css.jpg" alt="css" /></a>
                                <a href="<?php echo $base_url;?>/portfolio?html"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/html.jpg" alt="html" /></a>
                                <a href="<?php echo $base_url;?>/portfolio?css"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/js.jpg" alt="js" /></a>
                                <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url;?>/portfolio?logo-design"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/logo.jpg" alt="logo design" /></a>
                            </div>
                        </div>

                        <div class="inner-head" id="qa-services">
                            <span><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/qa-icon.png" alt="qa-icon" /></span>
                            <h2>QA services</h2>
                        </div>
                        <p class="innerhead-para">Your business has no room for error. Join
                            hands with our QA experts and deliver the quality that your end
                            users deserve.</p>

                            <div class="dev-detail">

                                <h3>Testing Services</h3>
                                <div class="softwares testing">
                                 <a href="javascript:void(0);"><span>Functional Testing</span></a>
                                 <a href="javascript:void(0);"><span>Security Testing and Validation</span></a>
                                 <a href="javascript:void(0);"><span>SOA and Middleware Testing</span></a>
                                 <a href="javascript:void(0);"><span>Usability and Accessibility Testing</span></a>
                                 <a href="javascript:void(0);"><span>Communication Services Testing and Validation</span></a>
                                 <a href="javascript:void(0);"><span>Consulting Services</span></a>
                                 <a href="javascript:void(0);"><span>Data Warehouse Testing</span></a>
                                 <a href="javascript:void(0);"><span>Regression testing Services</span></a>
                                 <a href="javascript:void(0);"><span>Test Data Management Services</span></a>
                                 <a href="javascript:void(0);"><span>Performance Testing</span></a>
                                 <a href="javascript:void(0);"><span>Test Environment Management Services</span></a>
                                 <a href="javascript:void(0);"><span>ERP Testing</span></a>
                                 <a href="javascript:void(0);"><span>Test automation Services</span></a>

                             </div>
                             <div class="seperator">
                                <img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/seperator.png " />
                            </div>
                            <h3>Automated Testing Tools</h3>
                            <div class="softwares pointer">
                             <a href="javascript:void(0);"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/selenium.jpg" alt="Selenium" /></a>
                             <a href="javascript:void(0);"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/jmeter.jpg" alt="JMeter" /></a>
                             <a href="javascript:void(0);"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/qtp.jpg" alt="QTP" /></a>
                             <a href="javascript:void(0);"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/loadrunner.jpg" alt="Load Runner" /></a>
                             <a href="javascript:void(0);"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/soapui.jpg" alt="Soap UI" /></a>
                             <a href="javascript:void(0);"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/waptpro.jpg" alt="Wapt Pro" /></a>
                             <a href="javascript:void(0);"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/vega.jpg" alt="Vega" /></a>
                             <a href="javascript:void(0);"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/sqlmap.jpg" alt="SQLmap" /></a>
                             <a href="javascript:void(0);"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/monyog.jpg" alt="MONyog" /></a>
                             <a href="javascript:void(0);"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/jira.jpg" alt="JIRA" /></a>
                         </div>

                     </div>
                 </div>
             </div>
         </div>


         <!--offer section end here-->

         <!--Expert section end here-->

         <section class="wrapper">
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
                    <div class="col-md-3 col-xs-6 col-sm-3 footer-list visible-contact">
                        <?php print render($page['footer_menu_block_contact']); ?>

                    </div>
                </div>
            </footer>
            <div class="copy">
                <div class="container copy-right">
                    <?php echo "Copyright " . date('Y') . " All rights reserved Bridge Global." ?>
                    <div class="social-media">
                       <?php print render($page['footer_social_media']); ?>
                   </div>
                   <div class="clear"></div>
               </div>
           </div>

           <!--Footer section end here-->
       </section>
       <div title="top of page" class="goto-top"><i class="fa fa-angle-double-up"></i></div>
   </section>
   <script>

    jQuery('.placeholder a').click(function (e) {
        e.preventDefault();
        var position = jQuery(this).attr('href');
        jQuery('html, body').animate({scrollTop: jQuery(position).offset().top - 80}, 800);
    });

    jQuery(document).ready(function(){

        var page_flag = 0;


        function what_we_offer_landing(id){

           page_flag = 1;

           if( id == 'web-application' ){
              var web_application = jQuery('#web-application').offset().top - jQuery('.header').height()-15;
              jQuery("html, body").animate({"scrollTop":web_application+"px"});
          }
          if( id == 'mobile-development' ){
              var mobile_development = jQuery('#mobile-development').offset().top - jQuery('.header').height()-15;
              jQuery("html, body").animate({"scrollTop":mobile_development+"px"});
          }
          if( id == 'design-services' ){
              var design_services = jQuery('#design-services').offset().top - jQuery('.header').height()-15;
              jQuery("html, body").animate({"scrollTop":design_services+"px"});
          }
          if( id == 'qa-services' ){
             var qa_services = jQuery('#qa-services').offset().top - jQuery('.header').height()-15;
             jQuery("html, body").animate({"scrollTop":qa_services+"px"});
         }

     }


     jQuery('.web-appication-menu-id').click(function(){
      what_we_offer_landing('web-application');
  });

     jQuery('.mobile-development-menu-id').click(function(){
      what_we_offer_landing('mobile-development');
  });

     jQuery('.design-services-menu-id').click(function(){
      what_we_offer_landing('design-services');
  });

     jQuery('.qa-services-menu-id').click(function(){
      what_we_offer_landing('qa-services');
  });



     function what_we_offer_landing_common(){

       var vars = [], hash;
       var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('#');

       for(var i = 0; i < hashes.length; i++) {
        hash = hashes[i].split('=');
        if( hash[0] ){
           if( hash[0] == 'web-application' ){
               var web_application = jQuery('#web-application').offset().top - jQuery('.header').height()-15;
               jQuery("html, body").animate({"scrollTop":web_application+"px"});
           }
           if( hash[0] == 'mobile-development' ){
               var mobile_development = jQuery('#mobile-development').offset().top - jQuery('.header').height()-15;
               jQuery("html, body").animate({"scrollTop":mobile_development+"px"});
           }
           if( hash[0] == 'design-services' ){
               var design_services = jQuery('#design-services').offset().top - jQuery('.header').height()-15;
               jQuery("html, body").animate({"scrollTop":design_services+"px"});
           }
           if( hash[0] == 'qa-services' ){

             console.log(qa_services);

             var qa_services = jQuery('#qa-services').offset().top - jQuery('.header').height()-15;
             jQuery("html, body").animate({"scrollTop":qa_services+"px"});
         }
     }
 }

}

if( page_flag == 0 ){
   what_we_offer_landing_common();
}

});


</script>