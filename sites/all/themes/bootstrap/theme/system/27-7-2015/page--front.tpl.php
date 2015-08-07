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
<?php
global $base_url;
?>

<!-- HOME PAGE -->

<!-- top bar open here -->


<link href="<?php echo $base_url; ?>/sites/all/themes/bootstrap/css/slider.css" rel="stylesheet">

<section class="wrapper">
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
                                <?php print render($page['tb_left_mega_menu']); ?> 
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <!--Header section end here-->
    </section>

    <!-- top bar ends here -->

    <!--Banner section open here-->
    <section class="banner-slider">
        <div class="banner-outer">
            <div class="cycle-slideshow" data-cycle-fx="scrollHorz"
                 data-cycle-slides="> div" data-cycle-timeout="4000"
                 data-cycle-pause-on-hover="true" data-cycle-prev=".prevControl"
                 data-cycle-next=".nextControl">
                <div class="slide-rep slide-1">
                    <div class="container">
                        <div class="col-xs-12">
                            <h2 class="team-head">
                                Get the <span>best IT teams</span><br />to work on your<br />projects!
                            </h2>
                            <span class="banner-btn-blue button btn-3 btn-3e"><a href="<?php echo $base_url; ?>/delivery-models">Delivery Models</a> <i class="fa fa-chevron-right"></i></span>
                        </div>
                    </div>
                    
                </div>
                <div class="slide-rep slide-2">
                    <div class="container">
                        <div class="col-xs-12">
                            <h2 class="team-head">
                                Contact our <span>Solution Architects</span><br />about your
                                requirement.
                            </h2>
                            <!-- <div class="clearfix"> -->
                                <span class="banner-btn-blue button btn-3 btn-3e book-a-call"><a href="javascript:void(0);">Book a Call</a> <i class="fa fa-chevron-right"></i></span>
                           <!--  </div> -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span class="prevControl"></span> <span class="nextControl"></span>
        <div class="outerlay"></div>
        <div class="span12 down-arrow-cnt">
            <span class="top-arrow"><a href="#top-head">&nbsp;</a>
            </span>
        </div>
    </section>
    <!--Banner section end here-->
</section>
            <!-- <a class="twitter-timeline"  href="https://twitter.com/Bridge_Tweed" data-widget-id="371963055183118336">Tweets by @Bridge_Tweed</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
           -->
<section class="wrapper">
    <!--Content section open here-->
    <div class="container" id="top-head">
        <div class="row inner-container">
            <div class="top-inner-para">
                <div class="main-head">
                    <div class="heading head-black">
                        <span class="spacer"></span>
                        <h1>Delivery Models</h1>
                        <span class="spacer"></span>
                    </div>
                </div>
                <?php //print render($page['home_bridge_description']);  ?>
                <div class="row placeholder-new delivery-model">

                    <div class="col-md-4 col-sm-6 delivery">
                        <div class="delivery-box">
                            <img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/complete-delivery.png" alt="complate delivery" >
                            <div class="content-box">
                                <h1>complete delivery</h1>
                                <p>
                                    A remote team from Bridge delivers to you based on the agreed deliverables. As a client,  you would provide Bridge with the product knowledge.
                                </p>
                                <a href="<?php echo $base_url; ?>/delivery-models#complete-delivery-model-notdraggable">View details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 delivery">
                        <div class="delivery-box">
                            <img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/resource-delivery.png" alt="complate delivery" >
                            <div class="content-box">
                                <h1>RESOURCE TEAM MODEL</h1>
                                <p>
                                    A development team from Bridge works remotely for you. We provide you the right resources along with guidance on technology
                                </p>
                                <a href="<?php echo $base_url; ?>/delivery-models#resource-team-model-notdraggable">View details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 delivery">
                        <div class="delivery-box">
                            <img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/resourse-model.png" alt="complate delivery" >
                            <div class="content-box">
                                <h1>RESOURCE MODEL</h1>
                                <p>
                                    Qualified people from Bridge working remotely for you.
                                </p>
                                <a href="<?php echo $base_url; ?>/delivery-models#resource-model-notdraggable">View details</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>




    </div>
    <div class="expert-section">

        <div class="expert-top" id="expert">
            <!--            <div class="span12 down-arrow-cnt">
                        <span class="down-arrow grey-arrow"><a href="#expert"><i class="fa fa-angle-down"></i></a></span>
                        </div>-->
            <div class="se-content">
                <div class="expert-content ">
                    <div class="main-head">
                        <div class="heading head-black">
                            <span class="spacer"></span>
                            <h1>Our Expertise</h1>
                            <span class="spacer"></span>
                        </div>
                    </div>
                    <!--Heading end here-->
                    <div id="main">
                        <div class="sponsorListHolder">
                            <div class="sponsor">
                                <div class="sponsorFlip">
                                    <a href="<?php echo $base_url; ?>/portfolio?ios"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/expert/iphone.png" alt="iphone"></a>
                                </div>
                            </div>
                            <div class="sponsor">
                                <div class="sponsorFlip">
                                    <a href="<?php echo $base_url; ?>/portfolio?android"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/expert/android.png" alt="android"></a>
                                </div>
                            </div>

                            <div class="sponsor">
                                <div class="sponsorFlip">
                                    <a href="<?php echo $base_url; ?>/portfolio?aspnet"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/expert/dotnet.png" alt=".net"></a>
                                </div>
                            </div>

                            <div class="sponsor">
                                <div class="sponsorFlip">
                                    <a href="<?php echo $base_url; ?>/portfolio?php"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/expert/php.png" alt="php"></a>
                                </div>
                            </div>

                            <div class="sponsor">
                                <div class="sponsorFlip">
                                    <a href="<?php echo $base_url; ?>/portfolio?rails"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/expert/rails.png" alt="rail"></a>
                                </div>
                            </div>

                            <div class="sponsor">
                                <div class="sponsorFlip">
                                    <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url; ?>/portfolio?sql-server"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/expert/sql-server.png" alt="sql"></a>
                                </div>
                            </div>
                            <div class="sponsor">
                                <div class="sponsorFlip">
                                    <a href="<?php echo $base_url; ?>/portfolio?python"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/expert/python.png" alt="python"></a>
                                </div>
                            </div>
                            <div class="sponsor">
                                <div class="sponsorFlip sponsor-top">
                                    <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url; ?>/portfolio?epi-server"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/expert/episerver.png" alt="episerver"></a>
                                </div>
                            </div>
                            <div class="sponsor">
                                <div class="sponsorFlip">
                                    <a href="<?php echo $base_url; ?>/portfolio?telerik"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/expert/telerik.png" alt="telerik"></a>
                                </div>
                            </div>

                            <div class="sponsor">
                                <div class="sponsorFlip">
                                    <a href="<?php echo $base_url; ?>/portfolio?drupal"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/expert/drupal.png" alt="drupal"></a>
                                </div>
                            </div>
                            <div class="sponsor">
                                <div class="sponsorFlip">
                                    <a href="<?php echo $base_url; ?>/portfolio?wordpress"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/expert/wordpress.png" alt="wordpress"></a>
                                </div>
                            </div>
                            <div class="sponsor">
                                <div class="sponsorFlip">
                                    <a href="<?php echo $base_url; ?>/portfolio?lithium-studio"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/expert/litium-studio.png" alt="litium-studio"></a>
                                </div>
                            </div>
                            <div class="sponsor">
                                <div class="sponsorFlip">
                                    <a href="<?php echo $base_url; ?>/portfolio?blackberry"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/expert/blackberry.png" alt="blackberry"></a>
                                </div>
                            </div>

                            <div class="sponsor">
                                <div class="sponsorFlip">
                                    <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url; ?>/portfolio?beacon"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/expert/beacon.png" alt="beacon"></a>
                                </div>
                            </div>
                            
                             <div class="sponsor">
                                <div class="sponsorFlip">
                                    <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url; ?>/portfolio?coredata"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/expert/coredata.png" alt="coredata"></a>
                                </div>
                            </div>
                             <div class="sponsor">
                                <div class="sponsorFlip">
                                    <a href="<?php echo $base_url; ?>/portfolio?rest"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/expert/rest.png" alt="rest"></a>
                                </div>
                            </div>
                              <div class="sponsor">
                                <div class="sponsorFlip">
                                    <a href="javascript:void(0);" style="cursor:default"><!-- <a href="<?php //echo $base_url; ?>/portfolio?modx"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/expert/modx.png" alt="modx"></a>
                                </div>
                            </div>
                             <div class="sponsor">
                                <div class="sponsorFlip">
                                    <a href="<?php echo $base_url; ?>/portfolio?magento"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/expert/magento.png" alt="magento"></a>
                                </div>
                            </div>
                            <div class="sponsor">
                                <div class="sponsorFlip">
                                    <a href="<?php echo $base_url; ?>/portfolio?css3"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/expert/css3.png" alt="css3"></a>
                                </div>
                            </div>
                            <div class="sponsor">
                                <div class="sponsorFlip">
                                   <a href="javascript:void(0);" style="cursor:default"> <!-- <a href="<?php //echo $base_url; ?>/portfolio?Jmeter"> --><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/expert/jmeter.png" alt="Jmeter"></a>
                                </div>
                            </div>
                                 <div class="sponsor">
                                <div class="sponsorFlip">
                                    <a href="<?php echo $base_url; ?>/portfolio?selenium"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/expert/selenium.png" alt="Selenium"></a>
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            <div class="clear"></div>
                            <div class="button-align">
                                <span class="button btn-3 btn-3e btn-margin-right"><a href="<?php echo $base_url; ?>/what-we-offer">View More</a> <i class="fa fa-chevron-right"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Expert section end here-->

    <section class="client-cases">
        <!--          <div class="span12 down-arrow-cnt">
                      <span class="down-arrow green-arrow" style="top:-20px;"><a href="#case"><i class="fa fa-angle-down"></i></a></span>
                </div>-->
        <div class="container">
            <div class="client-content" id="case">
                <div class="main-head">
                    <div class="heading head-black">
                        <span class="spacer"></span>
                        <h1>Client Cases</h1>
                        <span class="spacer"></span>
                    </div>
                </div>
                <!--Heading end here-->

                <div class="client-case-container">
                   
                            <?php
                            $type = 'client_cases';
                            $query = db_select('node', 'n')->fields('n', array('nid'))->condition('type', $type)->condition('status', 1);
                            $nids = $query->execute()->fetchCol();
                            $nodes = node_load_multiple($nids);

// 							echo '<pre>';
// 							print_r($nodes);
// die;
                            $client_cases_array = array();

                            $client_cases_counter = 1;

                            foreach ($nodes as $key => $value) {

                                if ($client_cases_counter <= 20) {

                                    $client_cases_array[$value->vid]['field_client_cases_project_title'] = $value->field_client_cases_project_title['und'][0]['value'];
                                    $client_cases_array[$value->vid]['field_client_cases_project_url'] = $value->field_client_cases_project_url['und'][0]['value'];

                                    if( isset( $value->field_cooperation_with_bridge['und'][0]['value'] ) && ( $value->field_cooperation_with_bridge['und'][0]['value'] != '' ) ) {
                                        $client_cases_array[$value->vid]['field_cooperation_with_bridge'] = $value->field_cooperation_with_bridge['und'][0]['value'];
                                    } else {
                                        $client_cases_array[$value->vid]['field_cooperation_with_bridge'] = '';
                                    }
                                    
                                    $client_cases_array[$value->vid]['field_client_cases_image'] = $base_url . '/sites/default/files/client_cases_image/' . $value->field_client_cases_image['und'][0]['filename'];
                                }
                                $client_cases_counter++;
                            }

                            /*
                              $news_and_events_array_reverse = array_reverse( $news_and_events_array );
                             */
                            ?>

                            <div id="owl-demo" class="owl-carousel">
                                <?php
                                foreach ($client_cases_array as $key => $value) {
                                    ?>


                                    <div>
                                     
                                            <div class="col-sm-6 col-md-8 client-case-div">
                                                <h3><?php echo $value['field_client_cases_project_title']; ?></h3>                                                
                                                <?php 
                                                $field_cooperation_with_bridge_string = $value['field_cooperation_with_bridge']; 
                                                //echo $field_cooperation_with_bridge_string; 
												echo  (strlen( $field_cooperation_with_bridge_string ) > 360) ? substr( $field_cooperation_with_bridge_string,0,360 ).'...' : $field_cooperation_with_bridge_string;
					                            ?>
                                            </div>
                                            <div class="col-sm-6 col-sm-offset-0 col-md-4 col-md-offset-0 border-img"><div class="screen-case"><img src="<?php echo $value['field_client_cases_image']; ?>" /></div></div>
                                            <div class="clear"></div>
                                            <div class="button-align case-button-right"> <button class="blue-button button btn-3 btn-3e client-view-more"><a href="javascript:void(0);">View More</a> <i class="fa fa-chevron-right"></i></button></div>
                                      
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>

                     
                 
                </div>
            </div>
        </div>
    </section>


    <!--Client cases section end here-->

    <section class="portfolio-cnt" id="port">
        <!--          <div class="span12 down-arrow-cnt">
                        <span class="down-arrow blue-arrow blue-arrow-margin"><a href="#port"><i class="fa fa-angle-down"></i></a></span>
                   </div>-->
        <div class="portfolio-section">

            <div class="container">

                <div class="main-head">
                    <div class="heading head-black">
                        <span class="spacer"></span>
                        <h1>PORTFOLIO</h1>
                        <span class="spacer"></span>
                    </div>
                </div>
            </div>

            <!--Heading end here-->

            <div class="portfolio-list container-fluid">
                    <div class="ch-grid">
                        <div class="row">
                            <?php
                            $type = 'portfolio';
                            $query = db_select('node', 'n')->fields('n', array('nid'))->condition('type', $type)->condition('status', 1);
                            $nids = $query->execute()->fetchCol();
                            $nodes = node_load_multiple($nids);

                            $portfolio_array = array();

                            $portfolio_counter = 1;

                            foreach ($nodes as $key => $value) {

                                if ($portfolio_counter <= 6) {

                                    $portfolio_array[$value->vid]['field_portfolio_project_name'] = $value->field_portfolio_project_name['und'][0]['value'];
                                    $portfolio_array[$value->vid]['field_portfolio_category'] = strtolower($value->field_portfolio_category['und'][0]['value']);
                                    $portfolio_array[$value->vid]['field_portfolio_image'] = $base_url . '/sites/default/files/portfolio_images/' . $value->field_portfolio_image['und'][0]['filename'];
                                    $portfolio_array[$value->vid]['field_portfolio_technologies'] = $value->field_portfolio_technologies['und'][0]['value'];
                                    $portfolio_array[$value->vid]['field_portfolio_url'] = $value->field_portfolio_url['und'][0]['value'];
                                    $portfolio_array[$value->vid]['field_portfolio_preference'] = $value->field_portfolio_preference['und'][0]['value'];
                                }
                                $portfolio_counter++;
                            }

                            $sorted_portfolio = usort($portfolio_array, function($portfolio_one, $portfolio_two) {
                                return $portfolio_one['field_portfolio_preference'] - $portfolio_two['field_portfolio_preference'];
                            });

                            $portfolio_counter_flag = 1;


                            // echo '<pre>';
                            // print_r($portfolio_array);die;


                            foreach ($portfolio_array as $key => $value) {
                                ?>
                                <div class="col-sm-4 col-md-4 col-lg-2">
                                    <div class="ch-item ch-img-1">
                                        <img src="<?php echo $value['field_portfolio_image']; ?>" />
                                        <div class="ch-info">
                                            <a href="<?php echo $base_url; ?>/portfolio?<?php echo str_replace(' ', '-', $value['field_portfolio_category']); ?>">
                                                <h3><?php echo $value['field_portfolio_project_name']; ?></h3>
                                                <ul class="technologyUsed">
                                                    <li><b>Tools/Technology Used</b></li>
                                                     <li><?php echo $value['field_portfolio_technologies']; ?></li>                                                     
                                                </ul>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            $portfolio_counter_flag++;
                            }
                            ?>
                        </div>
                    </div>
            </div>
        </div>

    </section>

    <!--Portfolio section end here-->

    <section class="client-details">
        <!--         <div class="span12 down-arrow-cnt">
                    <span class="down-arrow grey-arrow"><a href="#project"><i class="fa fa-angle-down"></i></a></span>
                </div>-->

        <!--Heading end here-->

        <div class="client-list" id="project">
            <div class="main-head">
                <div class="heading head-black">
                    <span class="spacer"></span>
                    <div class="centerTxt">
                        OVER 500 PROJECTS <br /> 100 CLIENTS <br/> <b>CUSTOMER SATISFACTION </b><a href="<?php echo $base_url; ?>/bridge-method">8.8</a>
                    </div>
                    <span class="spacer"></span>
                </div>
            </div>
            <div class="container">
                <div id="owl-demo-logos" class="owl-carousel owl-theme">

                   
                    <div class="item">
                        <img
                            src="<?php echo $base_url; ?>/sites/default/files/home_client_logos/kpmg.jpg"
                            alt="kpmg">
                    </div>
                    <div class="item">
                        <img
                            src="<?php echo $base_url; ?>/sites/default/files/home_client_logos/freedom-finance.jpg"
                            alt="freedom-finance">
                    </div>
                   <!--  <div class="item">
                        <img
                            src="<?php //echo $base_url; ?>/sites/default/files/home_client_logos/pond.jpg"
                            alt="pond">
                    </div> -->
                    <div class="item">
                        <img
                            src="<?php echo $base_url; ?>/sites/default/files/home_client_logos/spoton.jpg"
                            alt="spoton">
                    </div>
                    <div class="item">
                        <img
                            src="<?php echo $base_url; ?>/sites/default/files/home_client_logos/laimoon.jpg"
                            alt="laimoon">
                    </div>
                     <div class="item">
                        <img
                            src="<?php echo $base_url; ?>/sites/default/files/home_client_logos/clnt-log-j.png"
                            alt="kntz">
                    </div>
                    <div class="item">
                        <img
                            src="<?php echo $base_url; ?>/sites/default/files/home_client_logos/clnt-log-g.png"
                            alt="rabobank">
                    </div>
                     <div class="item">
                        <img
                            src="<?php echo $base_url; ?>/sites/default/files/home_client_logos/clnt-log-i.png"
                            alt="amstel bier">
                    </div>
                    <div class="item">
                        <img
                            src="<?php echo $base_url; ?>/sites/default/files/home_client_logos/clnt-log-o.png"
                            alt="ezy">
                    </div>
                     <div class="item">
                        <img
                            src="<?php echo $base_url; ?>/sites/default/files/home_client_logos/clnt-log-p.png"
                            alt="sigmax">
                    </div>
                    <div class="item">
                        <img
                            src="<?php echo $base_url; ?>/sites/default/files/home_client_logos/clnt-log-f.png"
                            alt="heineken">
                    </div>
                    
                    <div class="item">
                        <img
                            src="<?php echo $base_url; ?>/sites/default/files/home_client_logos/clnt-log-h.png"
                            alt="vodafone">
                    </div>
                   
                    <div class="item">
                        <img
                            src="<?php echo $base_url; ?>/sites/default/files/home_client_logos/clnt-log-l.png"
                            alt="Triple IT">
                    </div>
                    <div class="item">
                        <img
                            src="<?php echo $base_url; ?>/sites/default/files/home_client_logos/clnt-log-m.png"
                            alt="Triodor">
                    </div>
                    <div class="item">
                        <img
                            src="<?php echo $base_url; ?>/sites/default/files/home_client_logos/clnt-log-n.png"
                            alt="woodwing">
                    </div>
                    
                   
                    <div class="item">
                        <img
                            src="<?php echo $base_url; ?>/sites/default/files/home_client_logos/clnt-log-q.png"
                            alt="your surprise">
                    </div>
                    <div class="item">
                        <img
                            src="<?php echo $base_url; ?>/sites/default/files/home_client_logos/clnt-log-r.png"
                            alt="applift">
                    </div>
                    <div class="item">
                        <img
                            src="<?php echo $base_url; ?>/sites/default/files/home_client_logos/clnt-log-s.png"
                            alt="hotflo">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Client section end here-->

<section class="wrapper footer-section-home">
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

<!-- Book A Call popup open  -->

<div class="download-ebook book-a-call-form">
    <div class="book-content">

        <div class="col-md-12">
            <?php print render($page['bridge_book_a_call']); ?>

        </div>

    </div>
    <span class="popup-close-btn">X</span>
</div>


<!-- Client case popup-->
<!-- <div class="popupWrapper"></div> -->
<div class="download-ebook client-form">
    <div class="book-content">

        <div class="col-md-12">
            <?php print render($page['client_case_webform']); ?>

        </div>

    </div>
    <span class="popup-close-btn">X</span>
</div>


<div class="overlay-pop-up"></div>
<script>
    jQuery(document).ready(function () {

        jQuery(".banner-btn-blue.book-a-call").click(function () {
            jQuery(".book-a-call-form, .overlay-pop-up").fadeIn(500);
        });

        jQuery(".book-a-call-form .close-box-inner-page a, .popup-close-btn, .overlay-pop-up").click(function () {
            jQuery(".book-a-call-form, .overlay-pop-up").fadeOut(500);
        });
    });
</script>
<script>
    jQuery(document).ready(function () {

        jQuery(".blue-button.client-view-more").click(function () {
            jQuery(".client-form, .overlay-pop-up,.popupWrapper").fadeIn(500);
        });

        jQuery(".client-form .close-box-inner-page a, .popup-close-btn, .overlay-pop-up").click(function () {
            jQuery(".client-form, .overlay-pop-up,.popupWrapper").fadeOut(500);
        });
    });
</script>


<!-- Book A Call popup close -->
<script>
    jQuery(document).ready(function () {

        jQuery("#owl-demo-logos").owlCarousel({
            items : 4,
            navigation: true,
            beforeInit: function (elem) {
                //random(elem);
            }
        });
        jQuery("#owl-demo").owlCarousel({

            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            autoPlay: false,
            transitionStyle: false
        });

        function random(owlSelector) {
            owlSelector.children().sort(function () {
                //return Math.round(Math.random()) - 0.5;
            }).each(function () {
                jQuery(this).appendTo(owlSelector);
            });
        }

    });
</script>
