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

<!-- DELIVERY MODEL PAGE -->

<script>
    var base_url = '<?php echo $base_url; ?>';
</script>

<script type="text/javascript" src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/js/delivery-model/printscreen/js/html2canvas.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/js/delivery-model/printscreen/js/jquery.plugin.html2canvas.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/js/delivery-model/validate.js"></script>

<!-- top bar open here -->
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
                            <button type="button" class="navbar-toggle"
                            data-toggle="collapse" data-target=".navbar-collapse">
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
                            <?php print render($page['tb_mega_menu']); ?>
                        </div>
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

<section class="wrapper about-us-wrapper">

    <div class="container">




        <div class="row placeholder-new delivery-model-main">

            <div class="col-md-4 col-sm-6 delivery">
                <div class="delivery-box">
                    <img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/complete-delivery.png" alt="complate delivery" >
                    <div class="content-box">
                        <h1>complete delivery</h1>
                        <p>
                            A remote team from Bridge delivers to you based on the agreed deliverables. As a client,  you would provide Bridge with the product knowledge.
                        </p>
                        <a href="#complete-delivery-model-notdraggable" id="view-complete-delivery-model">View details</a>
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
                        <a href="#resource-team-model-notdraggable" id="view-resource-team-model">View details</a>
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
                        <a href="#resource-model-notdraggable" id="view-resource-model">View details</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="clear"></div>

    </div>

    <div class="delivery-section">
        <div class="delivery-section-outer">


            <div class="container" id="complete-delivery-model-notdraggable">

                <div class="row delivery-models-content model-two" >
                    <div class="inner-head">
                        <div class="delivery_tooltip"> 
                            <span class="tooltip-item">
                                <img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-icon.png" alt="Complete Delivery" />
                            </span>                        
                        </div>
                        <h2>Complete Delivery Model</h2>
                    </div>

                    <div class="complete-delivery-model delivery-model" id="complete-delivery-model-box-notdraggable">
                        <div class="row">
                            <div class="col-md-12 how-it-box">
                                <div class="outer-box">
                                    <div class="mid-box">
                                        <div class="heading-bar">
                                            <div class="heading1">Client</div>
                                        </div>
                                        <div class="box1">
                                            <div style="border: 1px solid #ffffff; ">
                                                <div class="col-box">
                                                    <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/po-large.png);">&nbsp;</span>
                                                    <div class="title-text">Product Owner</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box2">
                                            <h3>Requires from Client</h3>
                                            <div class="model-permissions blue-tick">
                                                <span>Product knowledge</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mid-box">

                                        <div class="heading-bar heading-border">
                                            <div class="heading1">Bridge</div>
                                        </div>
                                        <div class="box1">
                                            <div  style="border: 1px solid #ffffff;">
                                                <div class="col-box pm">
                                                    <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/pm-large.png);">&nbsp;</span>
                                                    <div class="title-text">Project Manager</div>
                                                </div>
                                                <div class="col-box qa" >
                                                    <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/qa-large.png);">&nbsp;</span>
                                                    <div class="title-text">Quality Assurance</div>
                                                </div>
                                                <div class="col-box arch" >
                                                    <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/ar-large.png);">&nbsp;</span>
                                                    <div class="title-text">Technical Architecture</div>
                                                </div>
                                                <div>
                                                    <div class="col-box test">
                                                        <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/te-large.png);">&nbsp;</span>
                                                        <div class="title-text">Testing</div>
                                                    </div>
                                                    <div class="col-box dev">
                                                        <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/de-large.png);">&nbsp;</span>
                                                        <div class="title-text">Development</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box2" >
                                            <h3>Provided by Bridge</h3>
                                            <div class="model-permissions yellow-tick" >
                                                <span>Scope Management</span>
                                                <span>Strong project management</span>
                                                <span>Strong Cooperation</span>
                                            </div>
                                            <div class="model-permissions violet-tick" >
                                                <span>Quality Analysis</span>
                                            </div>
                                            <div class="model-permissions orange-tick" >
                                                <span>Specification and design</span>
                                                <span>Technology Expertise</span>
                                            </div>
                                            <div class="model-permissions double-tick" >
                                                <span>Qualified People, Execution Power</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-describe">
                                    <div class="icons">
                                        <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/po-small.png" > Product Owner</p>
                                    </div>
                                    <div class="icons">
                                        <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/pm-small.png" > Project Manager</p>
                                    </div>
                                    <div class="icons">
                                        <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/qa-small.png"> Quality Assurance</p>
                                    </div>
                                    <div class="icons">
                                        <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/ar-small.png"> Technical Architecture</p>
                                    </div>
                                    <div class="icons">
                                        <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/te-small.png"> Testing</p>
                                    </div>
                                    <div class="icons">
                                        <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/de-small.png"> Development</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="align_center">


                    <button class="button btn-3 btn-3e" id="complete-delivery-model-draggable-event">
                        <a href="#complete-delivery-model-draggable">Click to Customise Complete Delivery Model </a>
                        <i class="fa fa-chevron-right"></i>
                    </button>


                    <button class="button btn-3 btn-3e" onclick="complete_delivery_model_notdraggable_capture();">
                        Discuss Complete Delivery Model with Bridge
                        <i class="fa fa-chevron-right"></i>
                    </button>
                </div>



            </div>

            <div class="container customise-margin" id="complete-delivery-model-draggable">

                <div class="row delivery-models-content model-two" id="id-complete-delivery-model">
                    <div class="inner-head">
                        <div class="delivery_tooltip"> <span class="tooltip-item">
                            <img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-icon.png" alt="Complete Delivery" />
                        </span>
                        <div class="tooltip-content">Drag and Drop roles to customize the model</div>
                    </div>
                    <h2>Customise Complete Delivery Model</h2>
                </div>

                <div class="complete-delivery-model delivery-model" id="complete-delivery-model-box-draggable">
                    <div class="row">
                        <div class="col-md-12 how-it-box">
                            <div class="outer-box">
                                <div class="mid-box">
                                    <div class="heading-bar">
                                        <div class="heading1">Client</div>
                                    </div>
                                    <div class="box1">
                                        <div id="complete-delivery-model-div-one" ondrop="drop(event)" ondragover="allowDrop(event)" style="border: 1px solid #ffffff; ">
                                            <div class="col-box" id="cdm-po" draggable="false" ondragstart="drag(event)">
                                                <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/po-large.png);">&nbsp;</span>
                                                <div class="title-text">Product Owner</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box2" id="complete-delivery-model-div-one-feature">
                                        <h3>Requires from Client</h3>
                                        <div class="model-permissions blue-tick" id="cdm-po-feature">
                                            <span>Product knowledge</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mid-box">

                                    <div class="heading-bar heading-border">
                                        <div class="heading1">Bridge</div>
                                    </div>
                                    <div class="box1">
                                        <div id="complete-delivery-model-div-two" ondrop="drop(event)" ondragover="allowDrop(event)" style="border: 1px solid #ffffff;">
                                            <div class="col-box pm" id="cdm-pm" draggable="true" ondragstart="drag(event)">
                                                <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/pm-large.png);">&nbsp;</span>
                                                <div class="title-text">Project Manager</div>
                                            </div>
                                            <div class="col-box qa" id="cdm-qa" draggable="true" ondragstart="drag(event)">
                                                <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/qa-large.png);">&nbsp;</span>
                                                <div class="title-text">Quality Assurance</div>
                                            </div>
                                            <div class="col-box arch" id="cdm-ar" draggable="true" ondragstart="drag(event)">
                                                <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/ar-large.png);">&nbsp;</span>
                                                <div class="title-text">Technical Architecture</div>
                                            </div>
                                            <div id="cdm-te-de" draggable="false" ondragstart="drag(event)">
                                                <div class="col-box test">
                                                    <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/te-large.png);">&nbsp;</span>
                                                    <div class="title-text">Testing</div>
                                                </div>
                                                <div class="col-box dev">
                                                    <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/de-large.png);">&nbsp;</span>
                                                    <div class="title-text">Development</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box2" id="complete-delivery-model-div-two-feature">
                                        <h3>Provided by Bridge</h3>
                                        <div class="model-permissions yellow-tick" id="cdm-pm-feature">
                                            <span>Scope Management</span>
                                            <span>Strong project management</span>
                                            <span>Strong Cooperation</span>
                                        </div>
                                        <div class="model-permissions violet-tick" id="cdm-qa-feature">
                                            <span>Quality Analysis</span>
                                        </div>
                                        <div class="model-permissions orange-tick" id="cdm-ar-feature">
                                            <span>Specification and design</span>
                                            <span>Technology Expertise</span>
                                        </div>
                                        <div class="model-permissions double-tick" id="cdm-te-de-feature">
                                            <span>Qualified People, Execution Power</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-describe">
                                <div class="icons">
                                    <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/po-small.png" > Product Owner</p>
                                </div>
                                <div class="icons">
                                    <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/pm-small.png" > Project Manager</p>
                                </div>
                                <div class="icons">
                                    <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/qa-small.png"> Quality Assurance</p>
                                </div>
                                <div class="icons">
                                    <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/ar-small.png"> Technical Architecture</p>
                                </div>
                                <div class="icons">
                                    <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/te-small.png"> Testing</p>
                                </div>
                                <div class="icons">
                                    <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/de-small.png"> Development</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 


            <div class="align_center">
                <button class="button btn-3 btn-3e" id="complete-delivery-model-draggable-event-close">
                    Close
                    <i class="fa fa-chevron-right"></i>
                </button>
                <button class="button btn-3 btn-3e" onclick="complete_delivery_model_draggable_capture();">
                    Discuss this custom delivery model with Bridge
                    <i class="fa fa-chevron-right"></i>
                </button>
            </div>
        </div>

        <!--  Complete Delivery Model End-->

        <!--  Resource Team Model Start-->

        <div class="container" id="resource-team-model-notdraggable">

            <div class="row delivery-models-content model-two" id="id-resource-team-model-notdraggable">
                <div class="inner-head">

                    <div class="delivery_tooltip">  
                        <span class="tooltip-item">
                            <img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/resource-team-icon.png" alt="Resource Team" />
                        </span>                        
                    </div>



                    <h2>Resource Team Model</h2>
                </div>

                <div class="resource-team-model delivery-model" id="resource-team-model-box-notdraggable">
                    <div class="row">
                        <div class="col-md-12 how-it-box">
                            <div class="outer-box">
                                <div class="mid-box">
                                    <div class="heading-bar">
                                        <div class="heading1">Client</div>
                                    </div>
                                    <div class="box1">
                                        <div  style="border: 1px solid #ffffff; ">
                                            <div class="col-box"  style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/po-large.png);">
                                                <div class="title-text">Product Owner</div>
                                            </div>
                                            <div class="col-box pm" >
                                                <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/pm-large.png);">&nbsp;</span>
                                                <div class="title-text">Project Manager</div>
                                            </div>
                                            <div class="col-box qa" >
                                                <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/qa-large.png);">&nbsp;</span>
                                                <div class="title-text">Quality Assurance</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box2">
                                        <h3>Requires from Client</h3>
                                        <div class="model-permissions blue-tick" >
                                            <span>Product knowledge</span>
                                        </div>
                                        <div class="model-permissions yellow-tick" >
                                            <span>Scope Management</span>

                                            <span>Strong project management</span>
                                            <span>Strong Cooperation</span>
                                        </div>
                                        <div class="model-permissions violet-tick" >
                                            <span>Quality Analysis</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mid-box">

                                    <div class="heading-bar heading-border">
                                        <div class="heading1">Bridge</div>
                                    </div>
                                    <div class="box1">
                                        <div style="border: 1px solid #ffffff;">
                                            <div class="col-box arch"  >
                                                <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/ar-large.png);">&nbsp;</span>
                                                <div class="title-text">Technical Architecture</div>
                                            </div>
                                            <div>
                                                <div class="col-box test">
                                                    <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/te-large.png);">&nbsp;</span>
                                                    <div class="title-text">Testing</div>
                                                </div>
                                                <div class="col-box dev">
                                                    <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/de-large.png);">&nbsp;</span>
                                                    <div class="title-text">Development</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box2" >
                                        <h3>Provided by Bridge</h3>
                                        <div class="model-permissions orange-tick" >
                                            <span>Specification and design</span>
                                            <span>Technology Expertise</span>
                                        </div>
                                        <div class="model-permissions double-tick" >
                                            <span>Qualified People, Execution Power</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-describe">
                                <div class="icons">
                                    <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/po-small.png" > Product Owner</p>
                                </div>
                                <div class="icons">
                                    <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/pm-small.png" > Project Manager</p>
                                </div>
                                <div class="icons">
                                    <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/qa-small.png"> Quality Assurance</p>
                                </div>
                                <div class="icons">
                                    <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/ar-small.png"> Technical Architecture</p>
                                </div>
                                <div class="icons">
                                    <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/te-small.png"> Testing</p>
                                </div>
                                <div class="icons">
                                    <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/de-small.png"> Development</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="align_center">
                <a href="#resource-team-model-draggable"><button class="button btn-3 btn-3e" id="resource-team-model-draggable-event">
                    Click to Customise Resource Team Model
                    <i class="fa fa-chevron-right"></i>
                </button>
            </a>

            <button class="button btn-3 btn-3e" onclick="resource_team_model_notdraggable_capture();">
                Discuss Resource Team Model with Bridge
                <i class="fa fa-chevron-right"></i>
            </button></div>
        </div>



        <div class="container customise-margin" id="resource-team-model-draggable">

            <div class="row delivery-models-content model-two" id="id-resource-team-model">
                <div class="inner-head">

                    <div class="delivery_tooltip">  <span class="tooltip-item">
                        <img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/resource-team-icon.png" alt="Resource Team" />
                    </span>
                    <div class="tooltip-content">Drag and Drop roles to customize the model</div>
                </div>
                <h2>Customise Resource Team Model</h2>
            </div>

            <div class="resource-team-model delivery-model" id="resource-team-model-box-draggable">
                <div class="row">
                    <div class="col-md-12 how-it-box">
                        <div class="outer-box">
                            <div class="mid-box">
                                <div class="heading-bar">
                                    <div class="heading1">Client</div>
                                </div>
                                <div class="box1">
                                    <div id="resource-team-model-div-one" ondrop="drop(event)" ondragover="allowDrop(event)" style="border: 1px solid #ffffff; ">
                                        <div class="col-box" id="rtm-po" draggable="false" ondragstart="drag(event)" style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/po-large.png);">
                                            <div class="title-text">Product Owner</div>
                                        </div>
                                        <div class="col-box pm" id="rtm-pm" draggable="true" ondragstart="drag(event)">
                                            <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/pm-large.png);">&nbsp;</span>
                                            <div class="title-text">Project Manager</div>
                                        </div>
                                        <div class="col-box qa" id="rtm-qa" draggable="true" ondragstart="drag(event)">
                                            <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/qa-large.png);">&nbsp;</span>
                                            <div class="title-text">Quality Assurance</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box2" id="resource-team-model-div-one-feature">
                                    <h3>Requires from Client</h3>
                                    <div class="model-permissions blue-tick" id="rtm-po-feature">
                                        <span>Product knowledge</span>
                                    </div>
                                    <div class="model-permissions yellow-tick" id="rtm-pm-feature">
                                        <span>Scope Management</span>

                                        <span>Strong project management</span>
                                        <span>Strong Cooperation</span>
                                    </div>
                                    <div class="model-permissions violet-tick" id="rtm-qa-feature">
                                        <span>Quality Analysis</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mid-box">

                                <div class="heading-bar heading-border">
                                    <div class="heading1">Bridge</div>
                                </div>
                                <div class="box1">
                                    <div id="resource-team-model-div-two" ondrop="drop(event)" ondragover="allowDrop(event)" style="border: 1px solid #ffffff;">
                                        <div class="col-box arch" id="rtm-ar" draggable="true" ondragstart="drag(event)">
                                            <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/ar-large.png);">&nbsp;</span>
                                            <div class="title-text">Technical Architecture</div>
                                        </div>
                                        <div id="rtm-te-de" draggable="false" ondragstart="drag(event)">
                                            <div class="col-box test">
                                                <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/te-large.png);">&nbsp;</span>
                                                <div class="title-text">Testing</div>
                                            </div>
                                            <div class="col-box dev">
                                                <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/de-large.png);">&nbsp;</span>
                                                <div class="title-text">Development</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box2" id="resource-team-model-div-two-feature">
                                    <h3>Provided by Bridge</h3>
                                    <div class="model-permissions orange-tick" id="rtm-ar-feature">
                                        <span>Specification and design</span>
                                        <span>Technology Expertise</span>
                                    </div>
                                    <div class="model-permissions double-tick" id="rtm-te-de-feature">
                                        <span>Qualified People, Execution Power</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="icon-describe">
                            <div class="icons">
                                <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/po-small.png" > Product Owner</p>
                            </div>
                            <div class="icons">
                                <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/pm-small.png" > Project Manager</p>
                            </div>
                            <div class="icons">
                                <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/qa-small.png"> Quality Assurance</p>
                            </div>
                            <div class="icons">
                                <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/ar-small.png"> Technical Architecture</p>
                            </div>
                            <div class="icons">
                                <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/te-small.png"> Testing</p>
                            </div>
                            <div class="icons">
                                <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/de-small.png"> Development</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="align_center">
            <button class="button btn-3 btn-3e" id="resource-team-model-draggable-event-close">
                Close
                <i class="fa fa-chevron-right"></i>
            </button>

            <button class="button btn-3 btn-3e" onclick="resource_team_model_draggable_capture();">
                Discuss this custom delivery model with Bridge
                <i class="fa fa-chevron-right"></i>
            </button>

        </div>
    </div>



    <!--  Resource Team Model End-->
    <!--  Resource  Model Start-->
    <div class="container" id="resource-model-notdraggable">
        <div class="row delivery-models-content model-two" id="id-resource-model-notdraggable">
            <div class="inner-head">

                <div class="delivery_tooltip">  
                    <span class="tooltip-item">
                        <img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/resource-model-icon.png" alt="Resource-icon" />
                    </span>                        
                </div>


                <h2>Resource Model</h2>
            </div>
            <div class="resource-model delivery-model" id="resource-model-box-notdraggable">
                <div class="row">
                    <div class="col-md-12 how-it-box">
                        <div class="outer-box">
                            <div class="mid-box">
                                <div class="heading-bar heading-border">
                                    <div class="heading1">Client</div>
                                </div>
                                <div class="box1">
                                    <div  style="border: 1px solid #ffffff; ">
                                        <div class="col-box" style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/po-large.png);">
                                            <div class="title-text">Product Owner</div>
                                        </div>
                                        <div class="col-box pm" >
                                            <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/pm-large.png);">&nbsp;</span>
                                            <div class="title-text">Project Manager</div>
                                        </div>

                                        <div class="col-box qa" >
                                            <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/qa-large.png);">&nbsp;</span>
                                            <div class="title-text">Quality Assurance</div>
                                        </div>
                                        <div class="col-box arch" >
                                            <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/ar-large.png);">&nbsp;</span>
                                            <div class="title-text">Technical Architecture</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box2" id="resource-model-div-one-feature">
                                    <h3>Requires from Client</h3>
                                    <div class="model-permissions blue-tick" >
                                        <span>Product knowledge</span>
                                    </div>
                                    <div class="model-permissions yellow-tick" >
                                        <span>Scope Management</span>

                                        <span>Strong project management</span>
                                        <span>Strong Cooperation</span>
                                    </div>
                                    <div class="model-permissions violet-tick" >
                                        <span>Quality Analysis</span>
                                    </div>
                                    <div class="model-permissions orange-tick" >
                                        <span>Specification and design</span>
                                        <span>Technology Expertise</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mid-box">

                                <div class="heading-bar">
                                    <div class="heading1">Bridge</div>
                                </div>
                                <div class="box1">
                                    <div  style="border: 1px solid #ffffff;">                                            
                                        <div>
                                            <div class="col-box test"> <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/te-large.png);">&nbsp;</span>
                                                <div class="title-text">Testing</div></div>
                                                <div class="col-box dev"> <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/de-large.png);">&nbsp;</span>
                                                    <div class="title-text">Development</div></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box2" >
                                            <h3>Provided by Bridge</h3>
                                            <div class="model-permissions double-tick" >
                                                <span>Qualified People, Execution Power</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-describe">
                                    <div class="icons">
                                        <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/po-small.png" > Product Owner</p>
                                    </div>
                                    <div class="icons">
                                        <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/pm-small.png" > Project Manager</p>
                                    </div>
                                    <div class="icons">
                                        <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/qa-small.png"> Quality Assurance</p>
                                    </div>
                                    <div class="icons">
                                        <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/ar-small.png"> Technical Architecture</p>
                                    </div>
                                    <div class="icons">
                                        <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/te-small.png"> Testing</p>
                                    </div>
                                    <div class="icons">
                                        <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/de-small.png"> Development</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="align_center">
                    <a href="#resource-model-draggable"><button class="button btn-3 btn-3e" id="resource-model-draggable-event">
                        Click to Customise Resource Model 
                        <i class="fa fa-chevron-right"></i>
                    </button>
                </a>
                <button class="button btn-3 btn-3e" onclick="resource_model_notdraggable_capture();">
                    Discuss Resource Model with Bridge
                    <i class="fa fa-chevron-right"></i>
                </button>
            </div>
        </div>

        <div class="container customise-margin" id="resource-model-draggable">
            <div class="row delivery-models-content model-two" id="id-resource-model">
                <div class="inner-head">

                    <div class="delivery_tooltip">  <span class="tooltip-item">
                        <img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/resource-model-icon.png" alt="Resource-icon" />
                    </span>
                    <div class="tooltip-content">Drag and Drop roles to customize the model</div>
                </div>


                <h2>Customise Resource Model</h2>
            </div>
            <div class="resource-model delivery-model" id="resource-model-box-draggable">
                <div class="row">
                    <div class="col-md-12 how-it-box">
                        <div class="outer-box">
                            <div class="mid-box">
                                <div class="heading-bar heading-border">
                                    <div class="heading1">Client</div>
                                </div>
                                <div class="box1">
                                    <div id="resource-model-div-one" ondrop="drop(event)" ondragover="allowDrop(event)" style="border: 1px solid #ffffff; ">
                                        <div class="col-box" id="rm-po" draggable="false" ondragstart="drag(event)" style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/po-large.png);">
                                            <div class="title-text">Product Owner</div>
                                        </div>
                                        <div class="col-box pm" id="rm-pm" draggable="true" ondragstart="drag(event)">
                                            <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/pm-large.png);">&nbsp;</span>
                                            <div class="title-text">Project Manager</div>
                                        </div>

                                        <div class="col-box qa" id="rm-qa" draggable="true" ondragstart="drag(event)">
                                            <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/qa-large.png);">&nbsp;</span>
                                            <div class="title-text">Quality Assurance</div>
                                        </div>
                                        <div class="col-box arch" id="rm-ar" draggable="true" ondragstart="drag(event)">
                                            <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/ar-large.png);">&nbsp;</span>
                                            <div class="title-text">Technical Architecture</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box2" id="resource-model-div-one-feature">
                                    <h3>Requires from Client</h3>
                                    <div class="model-permissions blue-tick" id="rm-po-feature">
                                        <span>Product knowledge</span>
                                    </div>
                                    <div class="model-permissions yellow-tick" id="rm-pm-feature">
                                        <span>Scope Management</span>

                                        <span>Strong project management</span>
                                        <span>Strong Cooperation</span>
                                    </div>
                                    <div class="model-permissions violet-tick" id="rm-qa-feature">
                                        <span>Quality Analysis</span>
                                    </div>
                                    <div class="model-permissions orange-tick" id="rm-ar-feature">
                                        <span>Specification and design</span>
                                        <span>Technology Expertise</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mid-box">

                                <div class="heading-bar">
                                    <div class="heading1">Bridge</div>
                                </div>
                                <div class="box1">
                                    <div id="resource-model-div-two" ondrop="drop(event)" ondragover="allowDrop(event)" style="border: 1px solid #ffffff;">
                                        <!-- <div id="drag2" draggable="true" ondragstart="drag(event)" ondrop="drop(event)"  class="green">gg</div> -->
                                        <div id="rm-te-de" draggable="false" ondragstart="drag(event)" >
                                            <div class="col-box test"> <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/te-large.png);">&nbsp;</span>
                                                <div class="title-text">Testing</div></div>
                                                <div class="col-box dev"> <span style="background-image: url(<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/de-large.png);">&nbsp;</span>
                                                    <div class="title-text">Development</div></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box2" id="resource-model-div-two-feature">
                                            <h3>Provided by Bridge</h3>
                                            <div class="model-permissions double-tick" id="rm-te-de-feature">
                                                <span>Qualified People, Execution Power</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-describe">
                                    <div class="icons">
                                        <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/po-small.png" > Product Owner</p>
                                    </div>
                                    <div class="icons">
                                        <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/pm-small.png" > Project Manager</p>
                                    </div>
                                    <div class="icons">
                                        <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/qa-small.png"> Quality Assurance</p>
                                    </div>
                                    <div class="icons">
                                        <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/ar-small.png"> Technical Architecture</p>
                                    </div>
                                    <div class="icons">
                                        <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/te-small.png"> Testing</p>
                                    </div>
                                    <div class="icons">
                                        <p><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/delivery-model-images/de-small.png"> Development</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="align_center">

                    <button class="button btn-3 btn-3e" id="resource-model-draggable-event-close">
                        Close
                        <i class="fa fa-chevron-right"></i>
                    </button>

                    <button class="button btn-3 btn-3e" onclick="resource_model_draggable_capture();">
                        Discuss this custom delivery model with Bridge
                        <i class="fa fa-chevron-right"></i>
                    </button>


                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</section>

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

<!-- Complete delivery model popup open  -->

<div class="download-ebook complete-delivery-model-popup">
    <div class="title-bar">
        <div class="col-md-12">
            <h3 id="complete-delivery-notdraggable-title" >Discuss Complete Delivery Model with Bridge</h3>
            <h3 id="complete-delivery-draggable-title" >Discuss Customised Complete Delivery Model with Bridge</h3>
        </div>
    </div>
    <div class="book-content">
        <div class="col-md-12">
            <form accept-charset="UTF-8" id="complete-delivery-model-form" method="post" action="<?php echo $base_url; ?>/send-delivery-models/send-delivery-models.php" enctype="multipart/form-data" class="webform-client-form">
                <input type="hidden" name="complete-delivery-model-image-val" id="complete-delivery-model-image-val" value="" />
                <input type="hidden" name="complete-delivery-model-type" id="complete-delivery-model-type" value="" />
                <div class="popup-container">
                    <div class="model-name">
                        <input class="form-control form-text required" type="text" id="complete-delivery-model-name" name="complete-delivery-model-name" value="Your Name" size="60" maxlength="128" />
                    </div>
                    <div class="model-email">
                        <input class="form-control form-text required" type="text" id="complete-delivery-model-email" name="complete-delivery-model-email" value="Your Email" size="60" maxlength="128" />
                    </div>
                    <div class="model-email">
                        <button class="btn btn-default form-submit" id="complete-delivery-model-button" name="complete-delivery-model-button" value="Submit own model" type="button">Contact Us</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <span class="popup-close-btn">X</span>
</div>

<!-- Complete delivery model popup close  -->

<!-- Resource team model popup open  -->

<div class="download-ebook resource-team-model-popup">
    <div class="title-bar">
        <div class="col-md-12">
            <h3 id="resource-team-model-notdraggable-title" > Discuss Resource Team Model with Bridge</h3>
            <h3 id="resource-team-model-draggable-title" >Discuss Customised Resource Team Model with Bridge</h3>

        </div>
    </div>
    <div class="book-content">
        <div class="col-md-12">
            <form accept-charset="UTF-8" id="resource-team-model-form" method="post" action="<?php echo $base_url; ?>/send-delivery-models/send-delivery-models.php" enctype="multipart/form-data" class="webform-client-form">
                <input type="hidden" name="resource-team-model-image-val" id="resource-team-model-image-val" value="" />
                <input type="hidden" name="resource-team-model-type" id="resource-team-model-type" value="" />
                <div class="popup-container">
                    <div class="model-name">
                        <input class="form-control form-text required" type="text" id="resource-team-model-name" name="resource-team-model-name" value="Your Name" size="60" maxlength="128" />
                    </div>
                    <div class="model-email">
                        <input class="form-control form-text required" type="text" id="resource-team-model-email" name="resource-team-model-email" value="Your Email" size="60" maxlength="128" />
                    </div>
                    <div class="model-email">
                        <button class="btn btn-default form-submit" id="resource-team-model-button" name="resource-team-model-button" value="Submit own model" type="button">Contact Us</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <span class="popup-close-btn">X</span>
</div>

<!-- Resource team model popup close  -->

<!-- Resource model popup open  -->

<div class="download-ebook resource-model-popup">
    <div class="title-bar">
        <div class="col-md-12">
            <h3 id="resource-model-notdraggable-title" > Discuss Resource Model with Bridge</h3>
            <h3 id="resource-model-draggable-title" >Discuss Customised Resource Model with Bridge</h3>

        </div>
    </div>
    <div class="book-content">
        <div class="col-md-12">
            <form accept-charset="UTF-8" id="resource-model-form" method="post" action="<?php echo $base_url; ?>/send-delivery-models/send-delivery-models.php" enctype="multipart/form-data" class="webform-client-form">
                <input type="hidden" name="resource-model-image-val" id="resource-model-image-val" value="" />
                <input type="hidden" name="resource-model-type" id="resource-model-type" value="" />
                <div class="popup-container">
                    <div class="model-name">
                        <input class="form-control form-text required" type="text" id="resource-model-name" name="resource-model-name" value="Your Name" size="60" maxlength="128" />
                    </div>
                    <div class="model-email">
                        <input class="form-control form-text required" type="text" id="resource-model-email" name="resource-model-email" value="Your Email" size="60" maxlength="128" />
                    </div>
                    <div class="model-email">
                        <button class="btn btn-default form-submit" id="resource-model-button" name="resource-model-button" value="Submit own model" type="button">Contact Us</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <span class="popup-close-btn">X</span>
</div>

<!-- Resource model popup close  -->


<div class="overlay-pop-up"></div>

<script>

/* jQuery('.placeholder-new a').click(function (e) {
e.preventDefault();
var position = jQuery(this).attr('href');
jQuery('html, body').animate({scrollTop: jQuery(position).offset().top - 100}, 800);
});*/

function allowDrop(ev) {
//console.log(ev.id);
ev.preventDefault();
}

function drag(ev) {

    var role_id     = ev.target.id;
    var role_featur_id  = role_id+'-feature';

    ev.dataTransfer.setData("text", role_id);

    ev.dataTransfer.setData("feature", role_featur_id);

}

function drop(ev) {

    ev.preventDefault();

    var data      = ev.dataTransfer.getData("text");

    var feature_data  = ev.dataTransfer.getData("feature");

    var drop_feature = ev.target.id+'-feature';

    console.log(drop_feature);


    if( document.getElementById(data) ){
        ev.target.appendChild(document.getElementById(data));
    }
    if( document.getElementById(feature_data) ){
        jQuery('#'+drop_feature).append( document.getElementById(feature_data) );
    }

}


jQuery("#complete-delivery-model-draggable").hide();
jQuery("#resource-team-model-draggable").hide();
jQuery("#resource-team-model-notdraggable").hide();
jQuery("#resource-model-draggable").hide();
jQuery("#resource-model-notdraggable").hide();
jQuery("#resource-model-draggable").hide();

jQuery("#view-complete-delivery-model").click(function(){ 
    jQuery("#complete-delivery-model-notdraggable").show();
    var complete_delivery_model = jQuery('.delivery-section').offset().top - jQuery('.header').height() - 15;
    console.log(complete_delivery_model);
    jQuery("html, body").animate({"scrollTop": complete_delivery_model + "px"},500);
    jQuery("#resource-team-model-notdraggable").hide();
    jQuery("#resource-team-model-draggable").hide();
    jQuery("#resource-model-notdraggable").hide();
    jQuery("#resource-model-draggable").hide();
}); 

jQuery("#view-resource-team-model").click(function(){  
    /* jQuery("#resource-team-model-notdraggable").show();*/
    var resource_team_model = jQuery('.delivery-section').offset().top - jQuery('.header').height() - 15;
    console.log(resource_team_model);
    jQuery("html, body").animate({"scrollTop": resource_team_model + "px"},500);
    jQuery("#resource-team-model-notdraggable").show();
    jQuery("#complete-delivery-model-draggable").hide();
    jQuery("#complete-delivery-model-notdraggable").hide();
    jQuery("#resource-model-draggable").hide();
    jQuery("#resource-model-notdraggable").hide();
});

jQuery("#view-resource-model").click(function(){ 
    jQuery("#resource-model-notdraggable").show();
    var resource_model = jQuery('.delivery-section').offset().top - jQuery('.header').height() - 15;
    console.log(resource_model);
    jQuery("html, body").animate({"scrollTop": resource_model + "px"},500);
    jQuery("#complete-delivery-model-notdraggable").hide();
    jQuery("#complete-delivery-model-draggable").hide();
    jQuery("#resource-team-model-draggable").hide();
    jQuery("#resource-team-model-notdraggable").hide();

}); 






/** complete delivery model **/

jQuery("#complete-delivery-model-draggable-event").click(function(){

    jQuery("#complete-delivery-model-draggable").show();
}); 

jQuery("#complete-delivery-model-draggable-event-close").click(function(){
    jQuery("#complete-delivery-model-draggable").hide();
}); 
function complete_delivery_model_notdraggable_capture() {

    console.log("1");

    jQuery("#complete-delivery-draggable-title").css('display','none');
    jQuery("#complete-delivery-notdraggable-title").css('display','block');
    jQuery("#complete-delivery-model-type").val('notdraggable');
    jQuery('#complete-delivery-model-box-notdraggable').html2canvas({
        onrendered: function (canvas) {
            jQuery("#complete-delivery-model-image-val").val(canvas.toDataURL("image/png"));
            jQuery(".complete-delivery-model-popup, .overlay-pop-up").fadeIn(500);
            jQuery(".complete-delivery-model-popup .close-box-inner-page a, .popup-close-btn,.overlay-pop-up").click(function () {
                jQuery(".complete-delivery-model-popup, .overlay-pop-up").fadeOut(500);
            });

        }
    });
}

function complete_delivery_model_draggable_capture() {

    console.log("11");
    jQuery("#complete-delivery-model-type").val('draggable');
    jQuery("#complete-delivery-notdraggable-title").css('display','none');
    jQuery("#complete-delivery-draggable-title").css('display','block');
    jQuery('#complete-delivery-model-box-draggable').html2canvas({
        onrendered: function (canvas) {
            jQuery("#complete-delivery-model-image-val").val(canvas.toDataURL("image/png"));
            jQuery(".complete-delivery-model-popup, .overlay-pop-up").fadeIn(500);
            jQuery(".complete-delivery-model-popup .close-box-inner-page a, .popup-close-btn,.overlay-pop-up").click(function () {
                jQuery(".complete-delivery-model-popup, .overlay-pop-up").fadeOut(500);
            });

        }
    });
}
/** complete delivery model **/

/** resource team model **/ 

jQuery("#resource-team-model-draggable-event").click(function(){
    jQuery("#resource-team-model-draggable").show();
}); 

jQuery("#resource-team-model-draggable-event-close").click(function(){
    jQuery("#resource-team-model-draggable").hide();
}); 
function resource_team_model_notdraggable_capture() {

    console.log("2");
    jQuery("#resource-team-model-draggable-title").css('display','none');
    jQuery("#resource-team-model-notdraggable-title").css('display','block');
    jQuery("#resource-team-model-type").val('notdraggable');

    jQuery('#resource-team-model-box-notdraggable').html2canvas({
        onrendered: function (canvas) {
            jQuery("#resource-team-model-image-val").val(canvas.toDataURL("image/png"));
            jQuery(".resource-team-model-popup, .overlay-pop-up").fadeIn(500);
            jQuery(".resource-team-model-popup .close-box-inner-page a, .popup-close-btn,.overlay-pop-up").click(function () {
                jQuery(".resource-team-model-popup, .overlay-pop-up").fadeOut(500);
            });
        }
    });
}

function resource_team_model_draggable_capture() {

    console.log("22");
    jQuery("#resource-team-model-type").val('draggable');
    jQuery("#resource-team-model-notdraggable-title").css('display','none');
    jQuery("#resource-team-model-draggable-title").css('display','block');

    jQuery('#resource-team-model-box-draggable').html2canvas({
        onrendered: function (canvas) {

            jQuery("#resource-team-model-image-val").val(canvas.toDataURL("image/png"));
            jQuery(".resource-team-model-popup, .overlay-pop-up").fadeIn(500);
            jQuery(".resource-team-model-popup .close-box-inner-page a, .popup-close-btn,.overlay-pop-up").click(function () {
                jQuery(".resource-team-model-popup, .overlay-pop-up").fadeOut(500);
            });
        }
    });
}

/** resource team model **/

/** resource  model **/

jQuery("#resource-model-draggable-event").click(function(){
    jQuery("#resource-model-draggable").show();
}); 

jQuery("#resource-model-draggable-event-close").click(function(){
    jQuery("#resource-model-draggable").hide();
}); 

function resource_model_notdraggable_capture() {

    console.log("3");
    jQuery("#resource-model-draggable-title").css('display','none');
    jQuery("#resource-model-notdraggable-title").css('display','block');
    jQuery("#resource-model-type").val('notdraggable');

    jQuery('#resource-model-box-notdraggable').html2canvas({
        onrendered: function (canvas) {
            jQuery("#resource-model-image-val").val(canvas.toDataURL("image/png"));
            jQuery(".resource-model-popup, .overlay-pop-up").fadeIn(500);
            jQuery(".resource-model-popup .close-box-inner-page a, .popup-close-btn,.overlay-pop-up").click(function () {
                jQuery(".resource-model-popup, .overlay-pop-up").fadeOut(500);
            });
        }
    });
}

function resource_model_draggable_capture() {

    console.log("33");
    jQuery("#resource-model-notdraggable-title").css('display','none');
    jQuery("#resource-model-draggable-title").css('display','block');
    jQuery("#resource-model-type").val('draggable');

    jQuery('#resource-model-box-draggable').html2canvas({
        onrendered: function (canvas) {
            jQuery("#resource-model-image-val").val(canvas.toDataURL("image/png"));
            jQuery(".resource-model-popup, .overlay-pop-up").fadeIn(500);
            jQuery(".resource-model-popup .close-box-inner-page a, .popup-close-btn,.overlay-pop-up").click(function () {
                jQuery(".resource-model-popup, .overlay-pop-up").fadeOut(500);
            });
        }
    });
}

/** resource  model **/

jQuery(document).ready(function () {

    var box1_height = jQuery('.box1').height();
    var box1_width = jQuery('.box1').width();

    var box2_height = jQuery('.box2').height();
    var box2_width = jQuery('.box2').width();

    jQuery('#complete-delivery-model-div-one').css('height', box1_height + 'px');
    jQuery('#complete-delivery-model-div-one').css('width', box1_width + 'px');
    jQuery('#complete-delivery-model-div-two').css('height', box1_height + 'px');
    jQuery('#complete-delivery-model-div-two').css('width', box1_width + 'px');

    jQuery('#resource-team-model-div-one').css('height', box1_height + 'px');
    jQuery('#resource-team-model-div-one').css('width', box1_width + 'px');
    jQuery('#resource-team-model-div-two').css('height', box1_height + 'px');
    jQuery('#resource-team-model-div-two').css('width', box1_width + 'px');

    jQuery('#resource-model-div-one').css('height', box1_height + 'px');
    jQuery('#resource-model-div-one').css('width', box1_width + 'px');
    jQuery('#resource-model-div-two').css('height', box1_height + 'px');
    jQuery('#resource-model-div-two').css('width', box1_width + 'px');


    function addMargin() {
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('#');

        for (var i = 0; i < hashes.length; i++) {
            hash = hashes[i].split('=');
            if (hash[0]) {
                console.log(hash[0]);

                if (hash[0] == 'complete-delivery-model-notdraggable') { 

//var complete_delivery_model = jQuery('#complete-delivery-model-notdraggable').offset().top - jQuery('.header').height() - 15;
//jQuery("html, body").animate({"scrollTop": complete_delivery_model + "px"});
jQuery("#complete-delivery-model-notdraggable").show();
var complete_delivery_model = jQuery('.delivery-section').offset().top - jQuery('.header').height() - 15;
console.log(complete_delivery_model);
jQuery("html, body").animate({"scrollTop": complete_delivery_model + "px"},500);
jQuery("#resource-team-model-notdraggable").hide();
jQuery("#resource-team-model-draggable").hide();
jQuery("#resource-model-notdraggable").hide();
jQuery("#resource-model-draggable").hide();
}

if (hash[0] == 'resource-team-model-notdraggable') {
//var resource_team_model = jQuery('#resource-team-model-notdraggable').offset().top - jQuery('.header').height() - 15;
//jQuery("html, body").animate({"scrollTop": resource_team_model + "px"});
var resource_team_model = jQuery('.delivery-section').offset().top - jQuery('.header').height() - 15;
console.log(resource_team_model);
jQuery("html, body").animate({"scrollTop": resource_team_model + "px"},500);
jQuery("#resource-team-model-notdraggable").show();
jQuery("#complete-delivery-model-draggable").hide();
jQuery("#complete-delivery-model-notdraggable").hide();
jQuery("#resource-model-draggable").hide();
jQuery("#resource-model-notdraggable").hide();
}

if (hash[0] == 'resource-model-notdraggable') {
//var resource_model = jQuery('#resource-model-notdraggable').offset().top - jQuery('.header').height() - 15;
//jQuery("html, body").animate({"scrollTop": resource_model + "px"});
jQuery("#resource-model-notdraggable").show();
var resource_model = jQuery('.delivery-section').offset().top - jQuery('.header').height() - 15;
console.log(resource_model);
jQuery("html, body").animate({"scrollTop": resource_model + "px"},500);
jQuery("#complete-delivery-model-notdraggable").hide();
jQuery("#complete-delivery-model-draggable").hide();
jQuery("#resource-team-model-draggable").hide();
jQuery("#resource-team-model-notdraggable").hide();
}
}
}
}

addMargin();

jQuery('#complete-delivery-model-draggable-event').bind('click', function(){  
    var complete_delivery_model_draggable_event = jQuery('#complete-delivery-model-draggable').offset().top - jQuery('.header').height()-80;
    console.log(complete_delivery_model_draggable_event);
    jQuery("html, body").animate({"scrollTop": complete_delivery_model_draggable_event + "px"});
    //jQuery("html, body").animate({"scrollTop": "1250px"}); 
    
});

jQuery('#resource-team-model-draggable-event').bind('click', function(){  
    var resource_team_model_draggable_event = jQuery('#resource-team-model-draggable').offset().top - jQuery('.header').height() - 80;
    jQuery("html, body").animate({"scrollTop": resource_team_model_draggable_event + "px"});
});

jQuery('#resource-model-draggable-event').bind('click', function(){    
    var resource_model_draggable_event = jQuery('#resource-model-draggable').offset().top - jQuery('.header').height() - 80;
    jQuery("html, body").animate({"scrollTop": resource_model_draggable_event + "px"});
});

jQuery('#resource-model-draggable-event-close').bind('click', function(){
    var resource_model_close = jQuery('#resource-model-notdraggable').offset().top - jQuery('.header').height() - 80;
    jQuery("html, body").animate({"scrollTop": resource_model_close + "px"});
});

jQuery('#resource-team-model-draggable-event-close').bind('click', function(){ 
    var resource_team_model_close = jQuery('#resource-team-model-notdraggable').offset().top - jQuery('.header').height() - 80;
    jQuery("html, body").animate({"scrollTop": resource_team_model_close + "px"});
});

jQuery('#complete-delivery-model-draggable-event-close').bind('click', function(){ 
    var complete_delivery_model_close = jQuery('#complete-delivery-model-notdraggable').offset().top - jQuery('.header').height() - 80;
    jQuery("html, body").animate({"scrollTop": complete_delivery_model_close + "px"});
});

});
</script>


