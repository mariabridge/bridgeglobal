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
 * - jQuerybase_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - jQuerydirectory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - jQueryis_front: TRUE if the current page is the front page.
 * - jQuerylogged_in: TRUE if the user is registered and signed in.
 * - jQueryis_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - jQueryfront_page: The URL of the front page. Use this instead of jQuerybase_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - jQuerylogo: The path to the logo image, as defined in theme configuration.
 * - jQuerysite_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - jQuerysite_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - jQuerymain_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - jQuerysecondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - jQuerybreadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - jQuerytitle_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - jQuerytitle: The page title, for use in the actual HTML content.
 * - jQuerytitle_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - jQuerymessages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - jQuerytabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - jQueryaction_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - jQueryfeed_icons: A string of all feed icons for the current page.
 * - jQuerynode: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - jQuerypage['help']: Dynamic help text, mostly for admin pages.
 * - jQuerypage['highlighted']: Items for the highlighted content region.
 * - jQuerypage['content']: The main content of the current page.
 * - jQuerypage['sidebar_first']: Items for the first sidebar.
 * - jQuerypage['sidebar_second']: Items for the second sidebar.
 * - jQuerypage['header']: Items for the header region.
 * - jQuerypage['footer']: Items for the footer region.
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

<!-- CULTURE BOOK PAGE -->

<script type="text/javascript" src="<?php echo $base_url;?>/sites/all/themes/bootstrap/js/culture-book/extras/jquery-ui-1.8.20.custom.min.js"></script>
<script type="text/javascript" src="<?php echo $base_url;?>/sites/all/themes/bootstrap/js/culture-book/extras/modernizr.2.5.3.min.js"></script>
<script type="text/javascript" src="<?php echo $base_url;?>/sites/all/themes/bootstrap/js/culture-book/lib/hash.js"></script>



<script>
var path = '<?php echo $base_url;?>';
</script>

<!-- top bar open here -->
<section class="wrapper about-us-wrapper">
	
	<!--Header section end here-->
	<!-- <section class="inner-banner about-banner">
		<h2>Culture Book</h2>
	</section> -->
	<!--Banner section end here-->

	<section class="wrapper about-us-wrapper culture-book">
		<!-- <div class="container">
			<div class="row delivery-models-content">
				<div class="col-md-12 about-banner-cnt">
					<div class="hexagon">
						<img
							src="<?php //echo $base_url;?>/sites/all/themes/bootstrap/images/about-banner-icon.png"
							alt="about-icon" class="about-img" />
					</div>
				</div>
			</div>
		</div> -->


<div id="canvas">
	<div class="zoom-icon zoom-icon-in"></div>
	<div class="magazine-viewport">
		<div class="container">
			<div class="magazine">
				<!-- Next button -->
				<div ignore="1" class="next-button"></div>
				<!-- Previous button -->
				<div ignore="1" class="previous-button"></div>
			</div>
		</div>
		<!-- <div class="bottom">
			<div id="slider-bar" class="turnjs-slider">
				<div id="slider"></div>
			</div>
		</div> -->
	</div>
</div>




	</section>

	<!--Expert section end here-->

	


<script type="text/javascript">

function loadApp() {

 	jQuery('#canvas').fadeIn(1000);

 	var flipbook = jQuery('.magazine');

 	// Check if the CSS was already loaded

	if (flipbook.width()==0 || flipbook.height()==0) {
		setTimeout(loadApp, 10);
		return;
	}

	// Create the flipbook

	flipbook.turn({

			// Magazine width

			width: 1000,

			// Magazine height

			height: 650,

			// Duration in millisecond

			duration: 1000,

			// Enables gradients

			gradients: true,

			// Auto center this flipbook

			autoCenter: true,

			// Elevation from the edge of the flipbook when turning a page

			elevation: 50,

			// The number of pages

			pages: 30,

			// Events

			when: {
				turning: function(event, page, view) {

					var book = jQuery(this),
					currentPage = book.turn('page'),
					pages = book.turn('pages');

					// Update the current URI

					Hash.go('page/' + page).update();

					// Show and hide navigation buttons

					disableControls(page);

				},

				turned: function(event, page, view) {

					disableControls(page);

					jQuery(this).turn('center');

					jQuery('#slider').slider('value', getViewNumber(jQuery(this), page));

					if (page==1) {
						jQuery(this).turn('peel', 'br');
					}

				},

				missing: function (event, pages) {

					// Add pages that aren't in the magazine

					for (var i = 0; i < pages.length; i++)
						addPage(pages[i], jQuery(this));

				}
			}

	});

	// Zoom.js

	jQuery('.magazine-viewport').zoom({
		flipbook: jQuery('.magazine'),

		max: function() {

			return largeMagazineWidth()/jQuery('.magazine').width();

		},

		when: {
			swipeLeft: function() {

				jQuery(this).zoom('flipbook').turn('next');

			},

			swipeRight: function() {

				jQuery(this).zoom('flipbook').turn('previous');

			},

			resize: function(event, scale, page, pageElement) {

				if (scale==1)
					loadSmallPage(page, pageElement);
				else
					loadLargePage(page, pageElement);

			},

			zoomIn: function () {

				jQuery('#slider-bar').hide();
				jQuery('.made').hide();
				jQuery('.magazine').removeClass('animated').addClass('zoom-in');
				jQuery('.zoom-icon').removeClass('zoom-icon-in').addClass('zoom-icon-out');

				if (!window.escTip && !jQuery.isTouch) {
					escTip = true;

					jQuery('<div />', {'class': 'exit-message'}).
						html('<div>Press ESC to exit</div>').
							appendTo(jQuery('body')).
							delay(2000).
							animate({opacity:0}, 500, function() {
								jQuery(this).remove();
							});
				}
			},

			zoomOut: function () {

				jQuery('#slider-bar').fadeIn();
				jQuery('.exit-message').hide();
				jQuery('.made').fadeIn();
				jQuery('.zoom-icon').removeClass('zoom-icon-out').addClass('zoom-icon-in');

				setTimeout(function(){
					jQuery('.magazine').addClass('animated').removeClass('zoom-in');
					resizeViewport();
				}, 0);

			}
		}
	});

	// Zoom event

	if (jQuery.isTouch)
		jQuery('.magazine-viewport').bind('zoom.doubleTap', zoomTo);
	else
		jQuery('.magazine-viewport').bind('zoom.tap', zoomTo);


	// Using arrow keys to turn the page

	jQuery(document).keydown(function(e){

		var previous = 37, next = 39, esc = 27;

		switch (e.keyCode) {
			case previous:

				// left arrow
				jQuery('.magazine').turn('previous');
				e.preventDefault();

			break;
			case next:

				//right arrow
				jQuery('.magazine').turn('next');
				e.preventDefault();

			break;
			case esc:

				jQuery('.magazine-viewport').zoom('zoomOut');
				e.preventDefault();

			break;
		}
	});

	// URIs - Format #/page/1

	Hash.on('^page\/([0-9]*)jQuery', {
		yep: function(path, parts) {
			var page = parts[1];

			if (page!==undefined) {
				if (jQuery('.magazine').turn('is'))
					jQuery('.magazine').turn('page', page);
			}

		},
		nop: function(path) {

			if (jQuery('.magazine').turn('is'))
				jQuery('.magazine').turn('page', 1);
		}
	});


	jQuery(window).resize(function() {
		resizeViewport();
	}).bind('orientationchange', function() {
		resizeViewport();
	});

	// Regions

	if (jQuery.isTouch) {
		jQuery('.magazine').bind('touchstart', regionClick);
	} else {
		jQuery('.magazine').click(regionClick);
	}

	// Events for the next button

	jQuery('.next-button').bind(jQuery.mouseEvents.over, function() {

		jQuery(this).addClass('next-button-hover');

	}).bind(jQuery.mouseEvents.out, function() {

		jQuery(this).removeClass('next-button-hover');

	}).bind(jQuery.mouseEvents.down, function() {

		jQuery(this).addClass('next-button-down');

	}).bind(jQuery.mouseEvents.up, function() {

		jQuery(this).removeClass('next-button-down');

	}).click(function() {

		jQuery('.magazine').turn('next');

	});

	// Events for the next button

	jQuery('.previous-button').bind(jQuery.mouseEvents.over, function() {

		jQuery(this).addClass('previous-button-hover');

	}).bind(jQuery.mouseEvents.out, function() {

		jQuery(this).removeClass('previous-button-hover');

	}).bind(jQuery.mouseEvents.down, function() {

		jQuery(this).addClass('previous-button-down');

	}).bind(jQuery.mouseEvents.up, function() {

		jQuery(this).removeClass('previous-button-down');

	}).click(function() {

		jQuery('.magazine').turn('previous');

	});


	// Slider

	jQuery( "#slider" ).slider({
		min: 1,
		max: numberOfViews(flipbook),

		start: function(event, ui) {

			if (!window._thumbPreview) {
				_thumbPreview = jQuery('<div />', {'class': 'thumbnail'}).html('<div></div>');
				setPreview(ui.value);
				_thumbPreview.appendTo(jQuery(ui.handle));
			} else
				setPreview(ui.value);

			moveBar(false);

		},

		slide: function(event, ui) {

			setPreview(ui.value);

		},

		stop: function() {

			if (window._thumbPreview)
				_thumbPreview.removeClass('show');

			jQuery('.magazine').turn('page', Math.max(1, jQuery(this).slider('value')*2 - 2));

		}
	});

	resizeViewport();

	jQuery('.magazine').addClass('animated');

}

// Zoom icon

 jQuery('.zoom-icon').bind('mouseover', function() {

 	if (jQuery(this).hasClass('zoom-icon-in'))
 		jQuery(this).addClass('zoom-icon-in-hover');

 	if (jQuery(this).hasClass('zoom-icon-out'))
 		jQuery(this).addClass('zoom-icon-out-hover');

 }).bind('mouseout', function() {

 	 if (jQuery(this).hasClass('zoom-icon-in'))
 		jQuery(this).removeClass('zoom-icon-in-hover');

 	if (jQuery(this).hasClass('zoom-icon-out'))
 		jQuery(this).removeClass('zoom-icon-out-hover');

 }).bind('click', function() {

 	if (jQuery(this).hasClass('zoom-icon-in'))
 		jQuery('.magazine-viewport').zoom('zoomIn');
 	else if (jQuery(this).hasClass('zoom-icon-out'))
		jQuery('.magazine-viewport').zoom('zoomOut');

 });

 jQuery('#canvas').hide();


// Load the HTML4 version if there's not CSS transform

 yepnope({
		test : Modernizr.csstransforms,
		yep: ['<?php echo $base_url;?>/sites/all/themes/bootstrap/js/culture-book/lib/turn.min.js'],
		nope: ['<?php echo $base_url;?>/sites/all/themes/bootstrap/js/culture-book/lib/turn.html4.min.js', '<?php echo $base_url;?>/sites/all/themes/bootstrap/css/culture-book/jquery.ui.html4.css'],
		both: ['<?php echo $base_url;?>/sites/all/themes/bootstrap/js/culture-book/lib/zoom.min.js', '<?php echo $base_url;?>/sites/all/themes/bootstrap/css/culture-book/jquery.ui.css', '<?php echo $base_url;?>/sites/all/themes/bootstrap/js/culture-book/magazine.js', '<?php echo $base_url;?>/sites/all/themes/bootstrap/css/culture-book/magazine.css'],
		complete: loadApp
	});

</script>





