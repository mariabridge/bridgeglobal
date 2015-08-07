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

<!-- DEVELOPER PAGE -->

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

  <section class="wrapper about-us-wrapper">
    <section class="buttons-wrapp developer-links">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="developer-menu">
              <li><a id='developer-back' href="<?php echo $_SERVER['HTTP_REFERER']?>" class="back">Back</a>
              </li>
              <li><a id="add-to-team" href="javascript:void(0);" value="<?php echo $_GET ['id'];?>" class="add-to-team">Add to Team</a>
              </li>
            </ul>
            <a id="selected-team-members" href="javascript:void(0);" class="added-members-link">Selected Team Members <span id='developer-count'></span></a>

          </div>
        </div>
      </div>
    </section>
    <section class="team-listing-wrapp">
      <div class="container">
        <div class="row">

          <div class="col-sm-12 col-md-12 col-lg-12">

            <?php

            $requestUrl = 'http://ekipa.co/api/getMydeveloper/user/' . $_GET ['id'];

            $response = file_get_contents ( $requestUrl );

            $result_developer = drupal_json_decode ( $response );

            $preview      = $result_developer['preview'];
            $strength       = $result_developer['Strength'];
            $job_history    = $result_developer['Jobhistory'];
            $skills       = $result_developer['Programming'];
            $operating_systems  = $result_developer['Operating'];
            $databases      = $result_developer['Db'];
            $projects       = $result_developer['Project'];
            $accomplishment   = $result_developer['Accomplishments'];
            $education      = $result_developer['Education'];
            $languages      = $result_developer['Language'];
            $hobbies      = $result_developer['Hobbies'];
            $area_of_interest   = $result_developer['areaofinterest'];

            ?>

            <div class="developer-repeat resume-brief">
              <div class="row">
                <div class="col-xs-4 col-md-3 dev-image">
                  <img src="http://ekipa.co/uploads/profile_images/<?php echo $preview[0]['user_image_name'];?>" alt="<?php echo $preview[1]['name'];?>">
                </div>
                <div class="col-xs-8 col-md-9 dev-details">
                  <h1><?php echo $preview[0]['name'];?></h1>
                  <h2><?php echo $preview[0]['job_position'];?></h2>
                  <p><?php echo $preview[0]['intro_aboutme'];?></p>
                  <p class="skillset">
                    <?php
                    foreach ( $skills as $key => $value ){
                      ?>
                      <span class="skill"> <?php echo $value['program_name'];?> </span>
                      <?php
                    }
                    ?>
                  </p>
                </div>
              </div>
            </div>


            <div class="main-area">
              <div class="col-xs-12 col-sm-6 col-md-6 projects">
                <h1>My Projects</h1>
                <ul>
                  <?php
                  $i = 1;
                  foreach ( $projects as $key => $value ){
                    if( $i <= 3 ){
                      ?>
                      <li>
                        <h2><?php echo $value['project_name'];?></h2>
                        <?php
                        if($value['project_tools'] !='.') { ?>
                           <p>Tools : <?php echo $value['project_tools'];?></p>        
                        <?php }
                        ?>

                      <p>Technologies : <?php echo $value['project_technologies'];?></p>
                      </li>
                      <?php
                    }
                    $i++;
                  }
                  ?>

                </ul>
                <a class='cv-pointer-link' href="javascript:void(0);" id="all-projects">View More Projects</a>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 strength">
                <h1>My Strengths</h1>
                <ul>
                  <?php
                  $i = 1;
                  foreach ( $strength as $key => $value ){
                    if( $i <= 3 ){
                      ?>
                      <li>
                        <p> <?php echo $value['strength_head'];?></p>
                      </li>
                     
                      <li>
                        <p><?php echo $value['strength_data'];?></p>
                      </li>
                      <?php
                    }
                    $i++;
                  }
                  ?>

                </ul>
                <a class='cv-pointer-link' href="javascript:void(0);" id="all-strengths">View More Strength</a>
              </div>
            </div>

            <div class="developer-skills-rep">

              <div class="col-sm-4 col-md-3">
                <h1>Skills</h1>
              </div>
              <?php if($skills || $operating_systems || $databases) {?>
              <div class="col-sm-8 col-md-9">
                <?php if($skills){?>
                <h2>Programming Languages</h2>
                <p>
                  <?php
                  $skills_string = '';
                  foreach ( $skills as $key => $value ){
                    $skills_string = $skills_string . $value['program_name'].', ';
                  }
                  echo substr($skills_string, 0, -2);
                  ?>
                </p>
                   <?php } ?>
                <?php if($operating_systems){?>
                <h2>Operating Systems</h2>
                <p>
                  <?php
                  $os_string = '';
                  foreach ( $operating_systems as $key => $value ){
                    $os_string = $os_string . $value['os_name'].', ';
                  }
                  echo substr($os_string, 0, -2);
                  ?>
                </p>
                 <?php } ?>
                <?php if($databases){?>
                <h2>Databases</h2>
                <p>
                  <?php
                  $db_string = '';
                  foreach ( $databases as $key => $value ){
                    $db_string = $db_string . $value['db_name'].', ';
                  }
                  echo substr($db_string, 0, -2);
                  ?>
                </p>
                <?php } ?>
              </div>
              <?php } ?>
            </div>

            <?php if($projects){?> 
            <div class="developer-skills-rep"><input type="text" id="all-projects-landing" style="width:0px;border:#fff;"/>
              <div class="col-sm-4 col-md-3">
                <h1>Projects</h1>
              </div>
              <div class="col-sm-8 col-md-9">
                <?php
                foreach ( $projects as $key => $value ){

                  $project_link   = '';
                  $project_target = '';
                  if( $value['project_url'] != '' ){
                    $project_link = 'http://'.$value['project_url'];
                    $project_target = ' target="_blank" ';
                  }else{
                    $project_link = 'javascript:void(0);';
                  }
                  ?>
                  <h2><a <?php echo $project_target;?> href="<?php echo $project_link; ?>"><?php echo $value['project_name'];?></a></h2>
                  <p>Description : <?php echo $value['project_desc'];?></p>
                  <p>Responsibilities: <?php echo $value['project_responsibilities'];?></p>
                  <?php if($value['project_tools']!='.'){ ?>
                  <p>Tools : <?php echo $value['project_tools'];?></p>
                  <?php } ?>
                  <p>Technologies : <?php echo $value['project_technologies'];?></p>
                  <div class="project-seperator"></div>
                  <?php
                }
                ?>
              </div>
            </div>
             <?php
                }
              ?>

            <?php if($strength) {
             ?>   
            <div  class="developer-skills-rep"><input type="text" id="all-strengths-landing" style="width:0px;border:#fff;"/>
              <div class="col-sm-4 col-md-3">
                <h1>Strength</h1>
              </div>
              <div class="col-sm-8 col-md-9">
                <ul id="cv-strength-ul" class="strength-bullet">
                  <?php
                  foreach ( $strength as $key => $value ){
                    if($value['strength_head']){
                    ?>
                    <li>
                      <p><?php echo $value['strength_head'];?></p>
                    </li>
                     <?php
                     }
                    ?>
                    <li>
                      <p><?php echo $value['strength_data'];?></p>
                    </li>
                   
                    <?php
                  }
                  ?>
                </ul>
              </div>
            </div>
            <?php
                }
              ?>

             <?php if($education) { ?>  
            <div class="developer-skills-rep">
              <div class="col-sm-4 col-md-3">
                <h1>Educational Qualification</h1>
              </div>
              <div class="col-sm-8 col-md-9">
                <?php
                foreach ( $education as $key => $value ){
                  ?>
                  <h2><?php echo $value['education_name'];?></h2>
                  <p>Institution : <?php echo $value['education_institute'];?></p>
                  <p><?php echo $value['education_yearfrom'] .' -- '. $value['education_yearto'];?></p>
                  <?php
                }
                ?>
              </div>
            </div>
              <?php
                }
              ?>

             <?php if($languages) { ?>    
            <div class="developer-skills-rep">
              <div class="col-sm-4 col-md-3">
                <h1>Languages Known </h1>
              </div>
              <div class="col-sm-8 col-md-9">
                <?php
                foreach ( $languages as $key => $value ){
                  ?>
                  <h2><?php echo ucwords(strtolower($value['lang_name']));?></h2>
                  <?php
                }
                ?>
              </div>
            </div>
              <?php
                }
               ?>

          </div>
        </div>
      </div>
    </section>
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


  jQuery('#developer-back').click(function(){

    var now = new Date();
    var exp = new Date(now.getTime() + 30 *1000);

    jQuery.cookie('developer_back_click', '1', { expires: exp });

  });


  jQuery('.menu').addClass( "navigation" );
  jQuery('.views-field-description').addClass('clearfix');
   // Helper function to Fill and Center the HTML5 Video
    jQuery('video, object').maximage('maxcover');

    var developer_count = function (){

        var developer_count_array = new Array();

      if( jQuery.cookie("teamMember")  !== null ){

      var developer_count_json  = jQuery.cookie("teamMember");
      developer_count_array   = jQuery.parseJSON( developer_count_json );

      if( developer_count_array.length > 0 ){
        jQuery('#developer-count').show();
        jQuery('#developer-count').html('   ' + developer_count_array.length );
      }
    }else{
      jQuery('#developer-count').hide();
    }
  }


    jQuery('#add-to-team').click(function(){

    var team      = new Array();
    var team_array    = new Array();
    var developer_id  = jQuery('#add-to-team').attr('value');

    if( jQuery.cookie("teamMember") ){

      var devloper_string = jQuery.cookie("teamMember");
      var devloper_array  = jQuery.parseJSON( devloper_string );

      if( jQuery.inArray( developer_id, devloper_array ) === -1 ){
        team.push( developer_id );
        team_array = jQuery.merge( team, devloper_array );
      }else{
        team_array = devloper_array;

        jQuery( this ).after('<span class="developer-exist">  Developer exist in team</span>');
        setTimeout(function(){
          jQuery('.developer-exist').remove();
        },2000);
      }

    }else{
      team_array.push( developer_id );
    }

    var developer_list = JSON.stringify( team_array );

    jQuery.cookie("teamMember", developer_list, { expires : 10 });

    developer_count();

  });


  developer_count();

  jQuery('#all-projects').click(function(){

    var window_width    = jQuery(window).width();

    var button_height   = '';
    var offset_strengths= '';
    var scroll_amount = '';

    if( window_width >= 1171 ){

      menu_height   = jQuery('.top-bar').outerHeight();
      button_height   = jQuery('.buttons-wrapp').outerHeight();
      offset_strengths= jQuery('#all-projects-landing').offset().top;

      scroll_amount = offset_strengths - ( menu_height + button_height );

      jQuery('body, html').animate({
        'scrollTop':scroll_amount+'px'
      });

    }else{

      button_height   = jQuery('.buttons-wrapp').outerHeight();
      offset_strengths= jQuery('#all-projects-landing').offset().top;
      scroll_amount = offset_strengths - ( button_height );

      jQuery('body, html').animate({
        'scrollTop':scroll_amount+'px'
      });
    }


  });

  jQuery('#all-strengths').click(function(){

    var window_width    = jQuery(window).width();

    var button_height   = '';
    var offset_strengths= '';
    var scroll_amount = '';

    if( window_width >= 1171 ){

      menu_height   = jQuery('.top-bar').outerHeight();
      button_height   = jQuery('.buttons-wrapp').outerHeight();
      offset_strengths= jQuery('#all-strengths-landing').offset().top;

      scroll_amount = offset_strengths - ( menu_height + button_height );

      jQuery('body, html').animate({
        'scrollTop':scroll_amount+'px'
      });

    }else{

      button_height   = jQuery('.buttons-wrapp').outerHeight();
      offset_strengths= jQuery('#all-strengths-landing').offset().top;
      scroll_amount = offset_strengths - ( button_height );

      jQuery('body, html').animate({
        'scrollTop':scroll_amount+'px'
      });
    }

  });

  jQuery('#selected-team-members').click(function(){
    if (localStorage.getItem("teamMember") != 'null' ) {
      window.open("<?php echo $base_url;?>/selected-team-members","_self");
    }
  });


});

</script>