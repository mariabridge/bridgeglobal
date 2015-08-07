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
<?php
global $user;

$GLOBALS['conf']['cache'] = FALSE; /* disable this page's page caching */

// 	$user_fields = user_load($user->uid);
// 	$loged_user_name	= $user_fields->name;
// 	$loged_user_email 	= $user_fields->mail;
?>

<!-- SELECTED TEAM MEMBERS PAGE -->

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

	<!--Content open here-->

	<section class="buttons-wrapp developer-links delivery-model-buttons" id="developer-links">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<ul class="developer-menu">
						<!-- <li><a href="javascript: history.back(1);" class="back">Back</a></li> -->
						<li><a href="<?php echo $base_url;?>/build-my-team" class="back">Back</a></li>
					</ul>

					<?php
					$developer_ids_array = array();

					if( isset( $_COOKIE['teamMember'] ) ) {
						$developer_ids_array = json_decode($_COOKIE['teamMember']);
					}

					if( count( $developer_ids_array ) > 0 ){
						?>
						<a id="checkout-team-members" href="javascript:void(0);" class="checkout-members-link">Checkout <span id='developer-count'></span></a>
						<?php
					}
					?>
					<span id="progress" class="progress-checkout"></span>
				</div>
			</div>
		</div>
	</section>

	<section class="team-listing-wrapp">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">

					<div id="developer-list" class="demo">

						<?php

						$developer_details_array = array();

						if( count( $developer_ids_array ) > 0 ){

							foreach ( $developer_ids_array as $key => $value ){

								$requestUrl = 'http://ekipa.co/api/getMydeveloper/user/' . $value;

								$response = file_get_contents ( $requestUrl );

								$result_developer = drupal_json_decode ( $response );

								$preview 			= $result_developer['preview'][0];
								$strength 			= $result_developer['Strength'];
								$job_history 		= $result_developer['Jobhistory'];
								$skills 			= $result_developer['Programming'];
								$operating_systems	= $result_developer['Operating'];
								$databases 			= $result_developer['Db'];
								$projects 			= $result_developer['Project'];
								$accomplishment 	= $result_developer['Accomplishments'];
								$education 			= $result_developer['Education'];
								$languages 			= $result_developer['Language'];
								$hobbies 			= $result_developer['Hobbies'];
								$area_of_interest 	= $result_developer['areaofinterest'];

								$developer_details_array[$value][]['name']			= $preview['name'];
								$developer_details_array[$value][]['job_position'] 	= $preview['job_position'];

								?>
								<div class="developer-repeat" id='developer-<?php echo $preview['id'];?>' >
									<div class="row">
										<div class="col-xs-4 col-md-2 dev-image">
											<img src="http://ekipa.co/uploads/profile_images/<?php echo $preview['user_image_name'];?>" alt="<?php echo $preview['name'];?>" >
										</div>
										<div class="col-xs-8 col-md-10 dev-details">
											<h1><a class="view-details" href="<?php echo $base_url;?>/developer?id=<?php echo $value;?>"><?php echo $preview['name'];?></a></h1>
											<h2><?php echo $preview['job_position'];?></h2>
											<p>
												<?php
												$string = $preview['intro_aboutme'];
												echo  (strlen( $string ) > 100) ? substr( $string,0,160 ).'...' : $string;
												?>
											</p>
											<p class="skillset">
												<?php
												$skill_count = 0;
												foreach ( $skills as $skill_key => $skill_value ){
													if( $skill_count < 5 ){
														?>
														<span class="skill"><?php echo str_replace("'", '', $skill_value['program_name']);?></span>
														<?php
													}
													$skill_count++;
												}
												?>
												<span class="more-skill">
													<?php if ( $user->uid == 0 ) { }?>
													<!-- <a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a> -->
													<a class="view-details" href="<?php echo $base_url;?>/developer?id=<?php echo $value;?>">Full profile</a>
												</span>
											</p>
											<div class="clearfix"></div>
											<a class="remove-from-team" href="javascript:void(0);" value="<?php echo $value.'|'.$preview['id'];?>" class="add-to-team">Remove From Team</a>

										</div>


									</div>
								</div>
								<?php
							}
						}else{
							?>
							<div class="ckeckout-list-empty">Your checkout list is empty!!!</div>
							<?php
						}
						?>

						<div id="developer-list-empty" class="ckeckout-list-empty">Your checkout list is empty!!!</div>

					</div>

				</div>
			</div>
		</div>
	</section>

	<!--Content end here-->



	
</section>
<section class="wrapper" id="footer">
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

<!-- Checkout open -->
<div class="overlay-pop-up"></div>
<div class="download-ebook checkout">
	
		<div class="book-content  clearfix checkout-form">
			<h2>Checkout Form</h2>
			<form name="frmCheckout" id="frmCheckout" enctype="multipart/form-data" accept-charset="UTF-8" method="post">
				<div class="form-item webform-component webform-component-textfield">
					<input class="form-control form-text required" type="text" id="edit-submitted-checkout-your-name" name="checkout_your_name" value="Your Name" size="60" maxlength="128">
				</div>
				<div class="form-item webform-component webform-component-textfield">
					<input class="form-control form-text required" type="text" id="edit-submitted-checkout-email-address" name="checkout_email_address" value="Email Address" size="60" maxlength="128">
				</div>
				<div class="form-item webform-component webform-component-textfield">
					<input class="form-control form-text required" type="text" id="edit-submitted-checkout-phone-number" name="checkout_phone_number" value="Phone Number" size="60" maxlength="128">
				</div>
				<button class="btn btn-primary form-submit" id="frmCheckoutSubmit" name="frmCheckoutSubmit" value="Submit" type="submit">Checkout</button>
			</form>
		</div>
	
	<div class="close-box-inner-page close-checkout">
		<a href="javascript:void(0);">Close</a>
	</div>
	<span class="popup-close-btn">X</span>
</div>
<!-- Checkout close -->
<div class="popupWrapper">
<div class="checkout-success-message"></div>
</div>


<script>
	jQuery(document).ready(function(){
		jQuery('.menu').addClass( "navigation" );
		jQuery('.views-field-description').addClass('clearfix');
	 // Helper function to Fill and Center the HTML5 Video
	 jQuery('video, object').maximage('maxcover');

	 jQuery('#developer-list-empty').hide();

	 jQuery('.remove-from-team').click(function(){

	 	var developer_id 	= jQuery(this).attr('value').split('|');

	 	if( jQuery.cookie("teamMember") ){

	 		var team 			= new Array();
	 		var team_array 		= new Array();

	 		var developer_string	= jQuery.cookie("teamMember");
	 		var developer_array	= jQuery.parseJSON( developer_string );

	 		if( jQuery.inArray( developer_id[0], developer_array ) > -1 ){
	 			developer_array = jQuery.grep( developer_array, function(value) {
	 				return value != developer_id[0];
	 			});

	 			team_array = developer_array ;

	 			jQuery('#developer-'+developer_id[1]).css('display','none');
	 		}

	 	}else{
			//jQuery.cookie('teamMember', null, { path: '/' });
		}

		if( team_array.length == 0 ){
			jQuery('#checkout-team-members').css('display', 'none');
			jQuery('#developer-list-empty').show();
		}

		var developer_list = JSON.stringify( team_array );

		jQuery.cookie("teamMember", developer_list, { expires : 10 });

	});

	 /* checkout open */
	 jQuery('#checkout-team-members').click(function(){
	 	jQuery('.close-checkout').show();
	 	jQuery('.checkout-form').show();
	 	jQuery('.checkout, .overlay-pop-up').fadeIn(500);

	 });
	 jQuery('.close-checkout a, .popup-close-btn ,.overlay-pop-up').click(function(){
	 	jQuery('.checkout, .overlay-pop-up').fadeOut(500);
	 });



	 jQuery('#edit-submitted-checkout-your-name').val('Your Name');
	 jQuery('#edit-submitted-checkout-email-address').val('Email Address');

	 jQuery('#edit-submitted-checkout-your-name').focus(function(){
	 	if(jQuery('#edit-submitted-checkout-your-name').val() == 'Your Name' ) {
	 		jQuery('#edit-submitted-checkout-your-name').val('');
	 	}
	 });

	 jQuery('#edit-submitted-checkout-your-name').blur(function(){
	 	if( jQuery.trim( jQuery('#edit-submitted-checkout-your-name').val() ) == '' ) {
	 		jQuery('#edit-submitted-checkout-your-name').val('Your Name');
	 	}
	 });

	 jQuery('#edit-submitted-checkout-email-address').focus(function(){
	 	if(jQuery('#edit-submitted-checkout-email-address').val() == 'Email Address' ) {
	 		jQuery('#edit-submitted-checkout-email-address').val('');
	 	}
	 });

	 jQuery('#edit-submitted-checkout-email-address').click(function(){
	 	if(jQuery('#edit-submitted-checkout-email-address').val() == 'Please fill a valid Email Address' ) {
	 		jQuery('#edit-submitted-checkout-email-address').val('');
	 	}
	 });

	 jQuery('#edit-submitted-checkout-email-address').blur(function(){
	 	if(jQuery('#edit-submitted-checkout-email-address').val() == '' ) {
	 		jQuery('#edit-submitted-checkout-email-address').val('Email Address');
	 	}
	 });

	 jQuery('#edit-submitted-checkout-phone-number').focus(function(){
	 	if(jQuery('#edit-submitted-checkout-phone-number').val() == 'Phone Number'  ) {
	 		jQuery('#edit-submitted-checkout-phone-number').val('');
	 	}
	 });

	 jQuery('#edit-submitted-checkout-phone-number').blur(function(){
	 	if( jQuery('#edit-submitted-checkout-phone-number').val() == '' ) {
	 		jQuery('#edit-submitted-checkout-phone-number').val('Phone Number');
	 	}
	 });



	 /* checkout close */

	 var developer_checkout = function (){

	 	jQuery('.close-checkout').hide();
	 	jQuery('.checkout-form').hide();

	 	var bookCallMessage='<div class="bookCallMessage" style="text-align:center; padding-bottom:40px;"><h2>Thank you</h2><h3 style="text-align:center;font: 400 15px \'Open Sans\', sans-serif; color: #999;">A Bridge representative will contact you soon.</h3></div>';

	 	jQuery(bookCallMessage).appendTo(".checkout");

	 	setTimeout(function(){
	 		window.open("<?php echo $base_url;?>/build-my-team","_self");
	 	},1000);

	 }

	 jQuery('#frmCheckout').submit(function(){
	 	if( jQuery.cookie("teamMember") ){

	 		if(jQuery('#edit-submitted-checkout-your-name').val() == 'Your Name' || jQuery.trim( jQuery('#edit-submitted-checkout-your-name').val() ) == '') {
	 			jQuery('#edit-submitted-checkout-your-name').focus();
	 			return false;
	 		}else if(jQuery('#edit-submitted-checkout-email-address').val() == 'Email Address' || jQuery.trim( jQuery('#edit-submitted-checkout-email-address').val() ) == ''  ) {
	 			jQuery('#edit-submitted-checkout-email-address').focus();
	 			return false; 
	 		}else if(!jQuery.isNumeric(jQuery('#edit-submitted-checkout-phone-number').val() )) {
        jQuery('#edit-submitted-checkout-phone-number').focus();
        return false; 
      }
      else{

	 			var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	 			if (! filter.test( ( jQuery('#edit-submitted-checkout-email-address').val() ) ) ) {
	 				jQuery('#edit-submitted-checkout-email-address').val('Please fill a valid Email Address');
	 				return false;
	 			}else{

	 				/*  */

	 				var developer_checkout_string	= jQuery.cookie("teamMember");
	 				var developer_checkout_array	= jQuery.parseJSON( developer_checkout_string );

	 				if( developer_checkout_array.length > 0 ){

	 					var loged_user_name		= jQuery('#edit-submitted-checkout-your-name').val();
	 					var loged_user_email	= jQuery('#edit-submitted-checkout-email-address').val();
	 					var loged_user_phone	= jQuery('#edit-submitted-checkout-phone-number').val();
	 					var cookie_developers	= '<?php echo json_encode( $developer_details_array );?>';

	 					jQuery('#progress').show();
	 					
	 					jQuery.ajax({
	 						type: "POST",
	 						url: "<?php echo $base_url;?>/selected-teams-checkout/checkout.php",
	 						data: { developer_checkout_array: developer_checkout_string, loged_user_name: loged_user_name, loged_user_email: loged_user_email, loged_user_phone: loged_user_phone, cookie_developers: cookie_developers },
	 						async: false
	 					}).done(function( data ) {
	 						if( data == 'success' ){
	 							jQuery('#progress').hide();
	 							if( jQuery.cookie("teamMember") ){
	 								jQuery.cookie('teamMember', null, { path: '/' });
	 								developer_checkout();
	 							}
	 						}
	 					});


	 				}

	 				/*  */
            jQuery('.overlay-pop-up').show();
          jQuery('.checkout-success-message').show();
          jQuery('.checkout').hide();
          
          
          jQuery(".checkout-success-message, .popupWrapper").fadeIn(500);
          jQuery("body").css({ overflow: 'hidden' });

          var successMessage='<h2>Thank you for contacting us</h2><h3>A Bridge representative will contact you soon.</h2>'; 
          
          jQuery('.checkout-success-message').html( successMessage );
          setTimeout(function(){
            return true;
          },1000);

	 			}
	 		}
	 	}
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