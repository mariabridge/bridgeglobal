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

<!-- BRIDGE METHOD PAGE -->

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
				<div class="col-md-9 video-width">

					<?php print render($page['bridge_method_content']); ?>
					<div class="method-video-outer">
						<video controls="" id="frag1" width="100%" poster="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/video-cover.jpg" >
							<source src="<?php echo $base_url;?>/sites/default/files/process_video.mp4" type="video/mp4" /> 
								<source src="<?php echo $base_url;?>/sites/default/files/process_video.ogv" type="video/ogv" /> 
									<source src="<?php echo $base_url;?>/sites/default/files/process_video.webm" type="video/webm" /> Your browser does not support the video tag.</video>
					</div>
				</div>
				<div class="col-md-3">
				<ul class="ch-grid-new">
					<li>
						<div class="ch-item-new ch-img-new-1" id="contact-solution-architect-bookcall">
							<div class="ch-info-new">
								<h3>Contact Solution Architect</h3>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item-new ch-img-new-2">
							<a href="<?php echo $base_url;?>/culture-book" target="_blank">
								<div class="ch-info-new">
								<h3>Culture Book</h3>
							</div></a>
						</div>
					</li>
					<li>
						<div class="ch-item-new ch-img-new-3">
								<a href="<?php echo $base_url;?>/recruitment-kit" target="_blank">
									<div class="ch-info-new">
								<h3>Recruitment Kit</h3>
							</div></a>
						</div>
					</li>
				</ul>

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
<div div class="popupWrapper">
	<div class="download-ebook discuss-team-popup">

		<div class="book-content  clearfix discuss-team-form">
			<?php print render($page['discuss_team_with_bridge']); ?>
		</div>

		<div class="close-box-inner-page discuss-team-popup-close">
			<a href="javascript:void(0);">Close</a>
		</div>
		<span class="popup-close-btn">X</span>
	</div>
</div>


<div class="download-ebook book-a-call-form method-popup">
    <div class="book-content">

        <div class="col-md-12">
            <?php print render($page['contact_solution_architect']); ?>

        </div>

    </div>
    <span class="popup-close-btn">X</span>
</div>

<div class="overlay-pop-up"></div>

<script>
    jQuery(document).ready(function () {

        jQuery("#contact-solution-architect-bookcall").click(function () {
            jQuery(".book-a-call-form, .overlay-pop-up").fadeIn(500);
        });

        jQuery(".book-a-call-form .close-box-inner-page a, .popup-close-btn, .overlay-pop-up").click(function () {
            jQuery(".book-a-call-form, .overlay-pop-up").fadeOut(500);
        });
    });
</script>


