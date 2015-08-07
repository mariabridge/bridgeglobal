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

<!-- PORTFOLIO PAGE -->


<!--<link rel='stylesheet' id='jquery-ui-smoothness-css'
      href='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.min.css?ver=1.11.2'
      type='text/css' media='all' />
<link rel='stylesheet' id='arconix-faq-css'
      href='http://demo.arconixpc.com/wp-content/plugins/arconix-faq/includes/css/arconix-faq.css?ver=1.5.2'
      type='text/css' media='all' />
<link rel='stylesheet' id='arconix-portfolio-css'
      href='http://demo.arconixpc.com/wp-content/plugins/arconix-portfolio/includes/css/arconix-portfolio.css?ver=1.4.0'
      type='text/css' media='all' />
<link rel='stylesheet' id='twentytwelve-style-css'
      href='http://demo.arconixpc.com/wp-content/themes/twentytwelve/style.css?ver=4.1.1'
      type='text/css' media='all' />-->

      <link href="<?php echo $base_url; ?>/sites/all/themes/bootstrap/css/arconix-portfolio.css" rel="stylesheet">

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
      								<!--  <li><b><i class="fa fa-phone"></i> +91 (0) 48 44 05 24 72</b></li> -->
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
      	<!--Banner section end here-->

      	<section class="wrapper portfolio-outer">

      		<div class="container">
      			<div class="row about-content">

      				<div class="entry-content">

      					<ul class="arconix-portfolio-features">
      						<!--                        <li class='arconix-portfolio-category-title'>Display</li>-->
      						<li class="arconix-portfolio-feature active"><a href="javascript:void(0)" class="all">All</a></li>
      						<li class="arconix-portfolio-feature"><a href="javascript:void(0)" class="web-application">Web Application</a></li>
      						<li class="arconix-portfolio-feature"><a href="javascript:void(0)" class="mobile-development">Mobile Development</a></li>
      						<li class="arconix-portfolio-feature"><a href="javascript:void(0)" class="web-design">Web Design</a></li>
      					</ul>

      					<ul class="arconix-portfolio-grid ch-grid" style="height: 100% !important;width: auto !important; display:none;">

      						<?php

      						/* $nodes =  node_type_get_types(); */

      						$type = 'portfolio';
      						$query = db_select('node', 'n') -> fields('n', array('nid')) -> condition('type', $type) -> condition('status', 1);
      						$nids = $query->execute()->fetchCol();
      						$nodes = node_load_multiple($nids);

      						$portfolio = array();

      						foreach ($nodes as $key => $value ){

      							$portfolio[$value->vid]['field_portfolio_category']		= $value->field_portfolio_category['und'][0]['value'];
      							$portfolio[$value->vid]['field_portfolio_project_name']		= $value->field_portfolio_project_name['und'][0]['value'];
      							$portfolio[$value->vid]['field_portfolio_technologies']		= $value->field_portfolio_technologies['und'][0]['value'];
      							$portfolio[$value->vid]['field_portfolio_url']				= $value->field_portfolio_url['und'][0]['value'];
      							if( isset( $value->field_portfolio_image['und'][0]['filename'] ) && ( $value->field_portfolio_image['und'][0]['filename'] != '' ) ){
      								$portfolio[$value->vid]['field_portfolio_image']	= $base_url.'/sites/default/files/portfolio_images/'.$value->field_portfolio_image['und'][0]['filename'];
      							}else{
      								$portfolio[$value->vid]['field_portfolio_image']	= '';
      							}
      							$portfolio[$value->vid]['field_portfolio_preference']		= $value->field_portfolio_preference['und'][0]['value'];

      						}

      						foreach ( $portfolio as $key => $value ){

      							$category = strtolower( str_replace(" ","-", $value['field_portfolio_category'] ) );

      							$technologies = array_map('trim', explode(",",$value['field_portfolio_technologies'] ) ) ;

      							$technologies_string = ' ';

      							if( count( $technologies ) ){
      								foreach ( $technologies as $tecKey => $tecValue ){
      									$technologies_string = $technologies_string.' '. str_replace(".","", str_replace(" ","-",strtolower( $tecValue ) ) );
      								}
      							}

      							?>

      							<li data-id="id-<?php echo $key;?>" data-type="<?php echo $category.$technologies_string;?>">
      								<div class="ch-item ch-img-1">
      									<img  src="<?php echo $value['field_portfolio_image'];?>" alt="<?php echo $value['field_portfolio_project_name'];?>" title="<?php echo $value['field_portfolio_project_name'];?>" class="attachment-portfolio-thumb wp-post-image" />
      									<div class="ch-info">
                    <!-- 
                      <h3><?php //echo $value['field_portfolio_project_name'];?></h3>
                      <div class="view-more">
                       <a href="<?php //echo $value['field_portfolio_url'];?>" target="_blank">Go to Project</a>
                   -->
                   <?php if($value['field_portfolio_url']) {?>
                   <a target="_blank" href="<?php echo $value['field_portfolio_url'];?>">
                   <?php } ?>
                   	<h3><?php echo $value['field_portfolio_project_name']; ?></h3>
                   	<ul class="technologyUsed">
                   		<li><b>Tools/Technology Used</b></li>
                   		<li><?php echo $value['field_portfolio_technologies']; ?></li>                                                     
                   	</ul>
                    <?php if($value['field_portfolio_url']) {?>
                   </a>
                    <?php } ?>


               </div>
           </div>
       </li>

       <?php
   }
   ?>
</ul>
</div>
<div class="clearfix"></div>
</div>
</div>
</section>

<div class="clearfix"></div>


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


<script type='text/javascript' src='<?php echo $base_url; ?>/sites/all/themes/bootstrap/js/portfolio/jquery.quicksand.js?ver=1.4'></script>
<script type='text/javascript' src='<?php echo $base_url; ?>/sites/all/themes/bootstrap/js/portfolio/jquery.easing.1.3.js?ver=1.3'></script>
<script type='text/javascript' src='<?php echo $base_url; ?>/sites/all/themes/bootstrap/js/portfolio/arconix-portfolio.js?ver=1.4.0'></script>

<script>
	jQuery(document).ready(function () {   

		var portfolio_slider_ul_width = jQuery('.entry-content').width();
		jQuery('.arconix-portfolio-grid').css('max-width', portfolio_slider_ul_width+'px');

		var filterPara;
		var containerPara;
		var containerClonePara;
		var filterLinkPara;
		var filteredItemsPara;

		var groupPara = '<?php echo $_SERVER['QUERY_STRING']; ?>';

		function cleanArray(actual){
			var newArray = new Array();
			for(var i = 0; i<actual.length; i++){
				if (actual[i]){
					newArray.push(actual[i]);
				}
			}
			return newArray;
		}

		containerPara = jQuery('ul.arconix-portfolio-grid');
		containerClonePara = containerPara.clone();

		jQuery('.arconix-portfolio-features li').removeClass('active');

		if( groupPara ) {
			filterPara = groupPara;
		} else {
			filterPara = 'all';
		}

		if( groupPara ){      
			jQuery('.arconix-portfolio-grid').css('display','block');
			jQuery('.' + groupPara).parent().addClass('active');    
		} else {
			jQuery('.arconix-portfolio-grid').css('display','none');
		}

		if (filterPara == 'all') {

			jQuery('.arconix-portfolio-grid').css('display','block');

			jQuery('.arconix-portfolio-features li:first-child').addClass('active');
			filteredItemsPara = containerClonePara.find('li');
		} else {

			filteredItemsPara = containerClonePara.find('li[data-type~=' + filterPara + ']');


			/* select title */

			var active_flag 	= 0;

			var active_title 	= '';

			if( ( groupPara != '' ) && ( jQuery('.arconix-portfolio-grid').find('li[data-type~='+groupPara+']') ) ){

				jQuery('.arconix-portfolio-grid').find('li[data-type~='+groupPara+']').each(function( index ) {

					var data_type_string	= jQuery( this ).data('type');
					var data_type_array 	= cleanArray( data_type_string.split(" ") );

					if( active_flag == 0 ){
						active_title 	= data_type_array[0];
						active_flag 	= 1;
					}

				});

				if( ( active_flag == 1 ) && ( active_title != '' ) ){

					jQuery('.arconix-portfolio-features li:first-child').removeClass('active');
					jQuery('.arconix-portfolio-features li:nth-child(2)').removeClass('active');
					jQuery('.arconix-portfolio-features li:nth-child(3)').removeClass('active');
					jQuery('.arconix-portfolio-features li:nth-child(4)').removeClass('active');

					jQuery('.arconix-portfolio-grid').css('display','block');

					if( active_title == 'web-application'){
						active_flag = 0;
						jQuery('.arconix-portfolio-features li:nth-child(2)').addClass('active');
					}
					if( active_title == 'mobile-development'){
						active_flag = 0;
						jQuery('.arconix-portfolio-features li:nth-child(3)').addClass('active');
					}
					if( active_title == 'web-design'){
						active_flag = 0;
						jQuery('.arconix-portfolio-features li:nth-child(4)').addClass('active');
					}
				}
			}
		}

		containerPara.quicksand(filteredItemsPara, {
			// The Duration for animation
			duration: 10,
			// the easing effect when animation
			easing: 'easeInOutQuad',
			// height adjustment becomes dynamic
			adjustHeight: 'dynamic'
		        // Callback function -- put functions here that need to be re-applied after sorting
		        // i.e. some lightbox scripts, tooltips, etc...
		    }, function () {});
	});
</script>
