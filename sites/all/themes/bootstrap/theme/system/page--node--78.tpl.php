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

<!-- HIRE EXPERIENCED DEVELOPERS PAGE -->

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


	<section class="team-listing-wrapp">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-12 col-lg-12">
						<div class="row">

                                    <div class="col-sm-4 col-md-4 teams-rep">
                                        <div class="team-detail">
                                            <div class="team-image">
                                                <h1>Bridge Mobile App Team</h1>
                                                <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/mobile-team/bridge-mobile-team.jpg" alt="team" >
                                            </div>
                                            <div class="team-works">
                                                <h2>Travel Industry, Retail, Airlines Industry </h2>
                                                <p>
                                                    <b>Number of Projects completed:</b> 50+<br><br>

                                                    <b>Technology Focus:</b> IOS, Android, PHP<br><br>

                                                    <b>Software Process:</b> SCRUM, Agile
                                                </p>
                                                <a href="<?php echo $base_url;?>/bridge-mobile-app-team" class="view-more">View more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-4 teams-rep">
                                        <div class="team-detail">
                                            <div class="team-image">
                                                <h1>Bridge Ukraine Magento Team</h1>
                                                <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/ukraine-magento-team/ukraine-magento-team.jpg" alt="team" >
                                            </div>
                                            <div class="team-works">
                                                <h2>E-Commerce</h2>
                                                <p>
                                                    <b>Number of Projects completed:</b> 10+<br><br>

                                                    <b>Technology Focus:</b> Magento<br><br>

                                                    <b>Software Process:</b> SCRUM, Agile
                                                </p>
                                                <a href="<?php echo $base_url;?>/ukraine-magento-team" class="view-more">View more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-4 teams-rep">
                                        <div class="team-detail">
                                            <div class="team-image">
                                                <h1>Bridge Magento Team</h1>
                                                <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/magento-team/bridge-magento-team.jpg" alt="team" >
                                            </div>
                                            <div class="team-works">
                                                <h2>E-Commerce</h2>
                                                <p>
                                                    <b>Number of Projects completed:</b> 10+<br><br>

                                                    <b>Technology Focus:</b> Magento, PHP, Ajax, Jquery, Prototype js, CSS, Wordpress, HTML, phpBB <br><br>

                                                    <b>Software Process:</b> SCRUM, Agile
                                                </p>
                                                <a href="<?php echo $base_url;?>/bridge-magento-team" class="view-more">View more</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row">

                                    <div class="col-sm-4 col-md-4 teams-rep">
                                        <div class="team-detail">
                                            <div class="team-image">
                                                <h1>Bridge .Net Web Team </h1>
                                                <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/net-web-team/bridge-net-web-team.jpg" alt="team" >
                                            </div>
                                            <div class="team-works">
                                                <h2>Travel Industry, Tourism, CRM Domain, Airlines Industry </h2>
                                                <p>
                                                    <b>Number of Projects completed:</b> 30+<br><br>

                                                    <b>Technology Focus:</b>ASP.NET, C#.net, VB.Net, WebAPI, JavaScript, HTML, Jquery, CSS, Telerik Programming, WPF, Entity Framework <br><br>

                                                    <b>Software Process:</b> SCRUM, Agile
                                                </p>
                                                <a href="<?php echo $base_url;?>/bridge-net-web-team" class="view-more">View more</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-md-4 teams-rep">
                                        <div class="team-detail">
                                            <div class="team-image">
                                                <h1>Bridge PHP team</h1>
                                                <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/php-team/bridge-php-team.jpg" alt="team" >
                                            </div>
                                            <div class="team-works">
                                                <h2>Healthcare, Travel Industry, E-Commerce </h2>
                                                <p>
                                                    <b>Number of Projects completed:</b> 20+<br><br>

                                                    <b>Technology Focus:</b> PHP, JavaScript, Angularjs, JQuery, MySQL, Laravel, Amazoneaws,node.js, Bootstrap, mongoDb, Yii, Croogo, Joomla, HTML 5, Linux<br><br>

                                                    <b>Software Process:</b> SCRUM, Agile
                                                </p>
                                                <a href="<?php echo $base_url;?>/bridge-php-team" class="view-more">View more</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-4 col-md-4 teams-rep">
                                        <div class="team-detail">
                                            <div class="team-image">
                                                <h1>Bridge .Net CMS Team</h1>
                                                <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/net-cms-team/bridge-net-cms-team.jpg" alt="team" >
                                            </div>
                                            <div class="team-works">
                                                <h2> Media & Entertainment, CRM Domain </h2>
                                                <p>
                                                    <b>Number of Projects completed:</b> 20+<br><br>

                                                    <b>Technology Focus:</b> ASP.Net, C#.net, IOS, WebAPI, JavaScript, HTML 5 <br><br>

                                                    <b>Software Process:</b> SCRUM, Agile
                                                </p>
                                                <a href="<?php echo $base_url;?>/bridge-net-cms-team" class="view-more">View more</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <div class="col-sm-4 col-md-4 teams-rep">
                                        <div class="team-detail">
                                            <div class="team-image">
                                                <h1>Independent Validation and Testing services</h1>
                                                <img src="<?php echo $base_url;?>/sites/default/files/staffing-teams/testing-team/bridge-testing-team.jpg" alt="team" >
                                            </div>
                                            <div class="team-works">
                                                <h2>Finance, E-Commerce, Insurance, CRM Domain</h2>
                                                <p>
                                                    <b>Number of Projects completed:</b> 15+<br><br>

                                                    <b>Technology Focus:</b>Selenium, Jmeter, QTP, Load Runner, SOAPUI, Sql<br><br>

                                                    <b>Software Process:</b> SCRUM
                                                </p>
                                                <a href="<?php echo $base_url;?>/bridge-testing-team" class="view-more">View more</a>
                                            </div>
                                        </div>
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
<script>
	jQuery(document).ready(function(){
		var vars = [], hash;
		var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('#');

		for(var i = 0; i < hashes.length; i++) {
			hash = hashes[i].split('=');
			if( hash[0] ){
				if( hash[0] == 'core-value' ){
					var core_value = jQuery('#core-value').offset().top - jQuery('.header').height()-15;
					jQuery("html, body").animate({"scrollTop":core_value+"px"});
				}

			}
		}
	});
</script>