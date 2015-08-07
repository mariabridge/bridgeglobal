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

<!-- BUILD MY TEAM PAGE -->

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

<!-- Content open here -->

<section class="buttons-wrapp developer-links">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <a id="selected-team-members" href="javascript:void(0);" class="added-members-link">Selected Team Members <span id='developer-count'></span></a>
      </div>
    </div>
  </div>
</section>

<section class="team-listing-wrapp">
  <div class="container">
    <div class="row">

      <div class="col-sm-7 col-md-8 col-lg-9">
        <div id="progress"></div>
        <div class="clearfix"></div>

        <div id="developer-empty-message"></div>

        <div id="developer-list" class="demo">

          <?php

          $all_data_array = array();

          $requestUrl = 'http://ekipa.co/api/GetDevelopersCvs/user/MQ';
          $response = file_get_contents($requestUrl);

          $result_developers = drupal_json_decode( $response );

          $indian_developers    = array();
          $european_developers  = array();

          foreach ( $result_developers as $key => $value ){
            if( $value['country'] == 103 ){
              $indian_developers[] = $value;/* fetch indian developers */
            }else{
              $european_developers[] = $value;/* fetch european developers */
            }
          }

              //shuffle($european_developers); /* shuffle developers each refresh */

          $european_developer_count = 0;

          foreach ( $european_developers as $key => $value ){

            if( $european_developer_count < 2 ){

              $skills_developer = explode(',', $value['program_name'] );

              ?>
              <div class="developer-repeat">
                <div class="row">
                  <div class="col-xs-4 col-md-3 dev-image">
                    <img src="http://ekipa.co/uploads/profile_images/<?php echo $value['intro_image_name'];?>" alt="<?php echo $value['name'];?>" >
                  </div>
                  <div class="col-xs-8 col-md-9 dev-details">
                    <h1><a class="view-details" href="<?php echo $base_url;?>/developer?id=<?php echo $value['id'];?>"><?php echo $value['name'];?></a></h1>
                    <a href="javascript:void(0);" value="<?php echo $value['id'];?>" class="add-to-team">Add to Team</a>
                    <h2><?php echo $value['job_position'];?></h2>
                    <p>
                      <?php
                      $string = $value['intro_aboutme'];
                      echo  (strlen( $string ) > 100) ? substr( $string,0,160 ).'...' : $string;
                      ?>
                    </p>
                    <p class="skillset">
                      <?php
                      $skill_count = 0;
                      foreach ( $skills_developer as $skill_key => $skill_value ){
                        if( $skill_count < 5 ){
                          ?>
                          <span class="skill"><?php echo str_replace("'", '', $skill_value);?></span>
                          <?php
                        }
                        $skill_count++;
                      }
                      ?>

                      <span class="more-skill">
                        <?php if ( $user->uid == 0 ) {} ?>
                        <!-- <a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a> -->
                        <a class="view-details" href="<?php echo $base_url;?>/developer?id=<?php echo $value['id'];?>">Full profile</a>
                      </span>
                    </p>
                  </div>
                </div>
              </div>
              <?php
            }
            $european_developer_count++;
          }


                            //shuffle($indian_developers); /* shuffle developers each refresh */

          $indian_developer_count = 0;

          foreach ( $indian_developers as $key => $value ){

            if( $indian_developer_count < 4 ){

              $skills_developer = explode(',', $value['program_name'] );

              ?>
              <div class="developer-repeat">
                <div class="row">
                  <div class="col-xs-4 col-md-3 dev-image">
                    <img src="http://ekipa.co/uploads/profile_images/<?php echo $value['intro_image_name'];?>" alt="<?php echo $value['name'];?>" >
                  </div>
                  <div class="col-xs-8 col-md-9 dev-details">
                    <h1><a class="view-details" href="<?php echo $base_url;?>/developer?id=<?php echo $value['id'];?>"><?php echo $value['name'];?></a></h1>
                    <a href="javascript:void(0);" value="<?php echo $value['id'];?>" class="add-to-team">Add to Team</a>
                    <h2><?php echo $value['job_position'];?></h2>
                    <p>
                      <?php
                      $string = $value['intro_aboutme'];
                      echo  (strlen( $string ) > 100) ? substr( $string,0,160 ).'...' : $string;
                      ?>
                    </p>
                    <p class="skillset">
                      <?php
                      $skill_count = 0;
                      foreach ( $skills_developer as $skill_key => $skill_value ){
                        if( $skill_count < 5 ){
                          ?>
                          <span class="skill"><?php echo str_replace("'", '', $skill_value);?></span>
                          <?php
                        }
                        $skill_count++;
                      }
                      ?>

                      <span class="more-skill">
                        <?php if ( $user->uid == 0 ) {} ?>
                        <!-- <a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a> -->
                        <a class="view-details" href="<?php echo $base_url;?>/developer?id=<?php echo $value['id'];?>">Full profile</a>
                      </span>
                    </p>
                  </div>
                </div>
              </div>
              <?php
            }
            $indian_developer_count++;
          }
          ?>

        </div>

        <div id="bridge-pagination"></div>

        <?php if ( $user->uid == 0 ) { ?>
                    <!-- <div class="view-more-developers">
                                <a href="javascript:void(0);" class="link">To create your Team, Log In</a>
                              </div> -->
                              <?php } ?>

                            </div>


                            <div class="col-sm-5 col-md-4 col-lg-3">
                              <div class="filter-box">



                                <div class="col-md-12 filter-rep bg-color">
                                  <div class="search-bar">
                                    <form id="text-search-form">
                                      <input id="text-search" type="text" placeholder="Search by keywords ...">
                                      <button id="search-button" type="submit" class="search-button">Go</button>
                                    </form>
                                    <button id="reset-button" type="button" class="reset-button">Reset</button>
                                  </div>
                                </div>
                                <div class="col-md-12 filter-rep">
                                  <h1>Advanced search filter</h1>
                                  <h2>Skills</h2>
                                  <div class="check-box-wrapp">
                                    <?php

									

                                    	$skills 			= array();
                                    	$skills_request_url = 'http://ekipa.co/api/GetAllReviewedSkills/user/c2tpbGxz';
							          	$skills_response 	= file_get_contents($skills_request_url);
							          	$result_skills		= drupal_json_decode( $skills_response );

							          	foreach ($result_skills as $key => $value) {
							          		$skills['skill_'.$key] = trim( $value['skills_value'] ); 
							          	}						          	
									

foreach ( $skills as $key => $value ){
  $all_data_array[] = strtolower($value);
  ?>
  <span>
    <input id="skills_<?php echo $key;?>" type="checkbox" name="teams_skills" multiple="multiple"  value="<?php echo $value;?>">
    <label for="<?php echo $value;?>"><?php echo $value;?></label>
  </span>
  <?php
}
?>
</div>
</div>

<div class="col-md-12 filter-rep bg-color">
  <h2>Years of Experience</h2>
  <div class="filter-experience">

    <select id="yoe" name="teams[totalYearsOfExperience]">
      <option value="Select" selected="selected">Select</option>
      <?php
      for( $i = 0; $i < 30; $i++ ){
        $all_data_array[] = $i;
        ?>
        <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php
      }
      ?>
    </select>
  </div>
</div>

<div class="col-md-12 filter-rep">

  <h2>Operating Systems</h2>
  <div class="check-box-wrapp">
    <?php

    $operating_systems				= array();
	$operating_systems_request_url 	= 'http://ekipa.co/api/GetAllReviewedSkills/user/b3M=';
  	$operating_systems_response 	= file_get_contents($operating_systems_request_url);
  	$result_operating_systems		= drupal_json_decode( $operating_systems_response );

  	foreach ($result_operating_systems as $key => $value) {
  		$operating_systems['os_'.$key] = trim( $value['ostype_name'] ); 
  	}

    foreach ( $operating_systems as $key => $value ){
      $all_data_array[] = strtolower($value);
      ?>
      <span>
        <input id="os_<?php echo $key;?>" type="checkbox" name="teams_os" multiple="multiple" value="<?php echo $value;?>">
        <label for="<?php echo $value;?>"><?php echo $value;?></label>
      </span>
      <?php
    }
    ?>
  </div>
</div>


<div class="col-md-12 filter-rep">

  <h2>Database Management Systems</h2>
  <div class="check-box-wrapp">
    <?php

    $db_management_systems				= array();
	$db_management_systems_request_url 	= 'http://ekipa.co/api/GetAllReviewedSkills/user/ZGI=';
  	$db_management_systems_response 	= file_get_contents($db_management_systems_request_url);
  	$result_db_management_systems		= drupal_json_decode( $db_management_systems_response );

  	foreach ($result_db_management_systems as $key => $value) {
  		$db_management_systems['db_'.$key] = trim( $value['dbtype_name'] ); 
  	}
    

    foreach ( $db_management_systems as $key => $value ){

      $all_data_array[] = strtolower($value);
      ?>
      <span>
        <input id="db_<?php echo $key;?>" type="checkbox" name="teams_db" multiple="multiple"  value="<?php echo $value;?>">
        <label for="<?php echo $value;?>"><?php echo $value;?></label>
      </span>
      <?php
    }
    ?>
  </div>
</div>

<div class="col-md-12 filter-rep">

  <h2>Country of Residence</h2>
  <div class="check-box-wrapp">
    <?php

    $country_of_residence = Array(
      "cr_103" => "India",
      "cr_167" => "Oman",
      "cr_233" => "Ukraine",
      "cr_177" => "Poland",
      "cr_83"  => "Germany",
      "cr_21"  => "Belarus",
      "cr_183" => "Russian Federation",
      "cr_216" => "Switzerland"
      );

    foreach ( $country_of_residence as $key => $value ){

      $all_data_array[] = strtolower($value);

      $explode_key = explode('_', $key);

      ?>
      <span>
        <input id="residence_<?php echo $explode_key[1];?>" type="checkbox" name="teams_residence" multiple="multiple" value="<?php echo $explode_key[1];?>">
        <label for="<?php echo $key;?>"><?php echo $value;?></label>
      </span>
      <?php
    }
    ?>
  </div>
</div>

</div>
</div>
</div>
</div>
</section>

<!-- Content end here -->



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


<script src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/js/underscore-min.js"></script>
<script src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/js/underscore.string.min.js"></script>

<script>
  jQuery(document).ready(function(){

    var all_data_array    = new Array();

    <?php
    foreach ( $all_data_array as $key => $value ){
      ?>
      all_data_array.push('<?php echo $value;?>');
      <?php
    }
    ?>



    var skills_data_array    = new Array();

    <?php
    foreach ( $skills as $key => $value ){
      ?>
      skills_data_array.push('<?php echo $value;?>');   
      <?php
    }
    ?>

    var os_data_array    = new Array();

    <?php
    foreach ( $operating_systems as $key => $value ){
      ?>
      os_data_array.push('<?php echo $value;?>');
      <?php
    }
    ?>


    var db_data_array    = new Array();

    <?php
    foreach ( $db_management_systems as $key => $value ){
      ?>
      db_data_array.push('<?php echo $value;?>');
      <?php
    }
    ?>


    /* add to team open  */

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


    jQuery('#developer-list').on('click','.add-to-team',function(){

      var team      = new Array();
      var team_array    = new Array();
      var developer_id  = jQuery(this).attr('value');

//    console.log(developer_id);

if( jQuery.cookie("teamMember") ){

  var devloper_string = jQuery.cookie("teamMember");
  var devloper_array  = jQuery.parseJSON( devloper_string );

  if( jQuery.inArray( developer_id, devloper_array ) === -1 ){
    team.push( developer_id );
    team_array = jQuery.merge( team, devloper_array );
  }else{
    team_array = devloper_array;
    jQuery( this ).before('<span class="developer-exist">Developer exist in team</span>');
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

    jQuery('#selected-team-members').click(function(){
      if (localStorage.getItem("teamMember") != 'null' ) {
        window.open("<?php echo $base_url;?>/selected-team-members","_self");
      }
    });

    /* add to team close  */


    jQuery('.menu').addClass( "navigation" );
    jQuery('.views-field-description').addClass('clearfix');
   // Helper function to Fill and Center the HTML5 Video
   jQuery('video, object').maximage('maxcover');

   var developer_list_div_empty = 0;
   jQuery('#progress').hide();


   /* SKILLS */

   var skills_string =  new Array();

   var skillsChecked = function() {

   	jQuery('#text-search').val('');

    if( jQuery(this).attr('value') ){

      skills_string =  new Array();

      jQuery("input:checkbox[name=teams_skills]:checked").each(function() {
        skills_string.push(jQuery(this).val());
      });

      filter();

    }

  };

  skillsChecked();


  <?php
  if( count( $skills ) > 0 ){
    foreach ( $skills as $key => $value ){
      ?>
      jQuery( "#skills_<?php echo $key; ?>" ).on( "click", skillsChecked );
      <?php
    }
  }
  ?>


  /* OS */

  var os_string =  new Array();

  var osChecked = function() {

  	jQuery('#text-search').val('');

    if( jQuery(this).attr('value') ){

      os_string =  new Array();

      jQuery("input:checkbox[name=teams_os]:checked").each(function() {
        os_string.push(jQuery(this).val());
      });

      filter();

    }

  };

  osChecked();


  <?php
  if( count( $operating_systems ) > 0 ){
    foreach ( $operating_systems as $key => $value ){
      ?>
      jQuery( "#os_<?php echo $key; ?>" ).on( "click", osChecked );
      <?php
    }
  }
  ?>


  /* DATABASE */

  var db_string =  new Array();

  var dbChecked = function() {

  	jQuery('#text-search').val('');

    if( jQuery(this).attr('value') ){

      db_string =  new Array();

      jQuery("input:checkbox[name=teams_db]:checked").each(function() {
        db_string.push(jQuery(this).val());
      });

      filter();

    }

  };

  dbChecked();

  <?php
  if( count( $db_management_systems ) > 0 ){
    foreach ( $db_management_systems as $key => $value ){
      ?>
      jQuery( "#db_<?php echo $key; ?>" ).on( "click", dbChecked );
      <?php
    }
  }
  ?>

  /* RESIDENCE */

  var residence_string =  new Array();

  var residenceChecked = function() {

  	jQuery('#text-search').val('');

    if( jQuery(this).attr('value') ){

      residence_string =  new Array();

      jQuery("input:checkbox[name=teams_residence]:checked").each(function() {
        residence_string.push(jQuery(this).val());
      });

      filter();
    }

  };

  residenceChecked();

  <?php
  if( count( $country_of_residence ) > 0 ){
    foreach ( $country_of_residence as $key => $value ){
      $explode_key = explode('_', $key);
      ?>
      jQuery( "#residence_<?php echo $explode_key[1]; ?>" ).on( "click", residenceChecked );
      <?php
    }
  }
  ?>


  /* YEAR OF EXPERIENCE */

  var experience_string =  new Array();

  jQuery('#yoe').change( function (){

  	jQuery('#text-search').val('');

    experience_string =  new Array();

    if( jQuery('#yoe').val() != 'Select' ){
      experience_string.push(jQuery(this).val());

      filter();
    }

  });


  /* SEARCH FROM TEXTBOX */

  var test_search_string =  new Array();
  var developer_name_string = new Array();

  jQuery("#text-search-form").submit(function( event ) {
    if( jQuery('#text-search').val() != '' ){

      var value_for_search = jQuery('#text-search').val();

      skills_string   =  new Array();
      os_string       =  new Array();
      db_string       =  new Array();
      experience_string =  new Array();
      residence_string  =  new Array();

      developer_name_string = new Array();

      if( ( Math.floor( value_for_search ) == value_for_search ) && jQuery.isNumeric( value_for_search )){

        experience_string.push( value_for_search );
      }else{
        if( ( value_for_search.toLowerCase() == 'india' ) || ( value_for_search.toLowerCase() == 'oman' ) || ( value_for_search.toLowerCase() == 'ukraine' ) || ( value_for_search.toLowerCase() == 'poland' ) || ( value_for_search.toLowerCase() == 'germany' ) || ( value_for_search.toLowerCase() == 'belarus' ) || ( value_for_search.toLowerCase() == 'russian federation' ) || ( value_for_search.toLowerCase() == 'switzerland' ) ){

          if( value_for_search.toLowerCase() == 'india' ){
            residence_string.push('103');
          }
          if( value_for_search.toLowerCase() == 'oman' ){
            residence_string.push('167');
          }
          if( value_for_search.toLowerCase() == 'ukraine' ){
            residence_string.push('233');
          }
          if( value_for_search.toLowerCase() == 'poland' ){
            residence_string.push('177');
          }
          if( value_for_search.toLowerCase() == 'germany' ){
            residence_string.push('83');
          }
          if( value_for_search.toLowerCase() == 'belarus' ){
            residence_string.push('21');
          }
          if( value_for_search.toLowerCase() == 'russian federation' ){
            residence_string.push('183');
          }
          if( value_for_search.toLowerCase() == 'switzerland' ){
            residence_string.push('216');
          }

        }else{

          var developer_unexist_flag = 0;

			jQuery.each( skills_data_array, function( indexFor, valueFor ) {  


				if( _.string.include( valueFor.toLowerCase(), value_for_search.toLowerCase() ) ){
					skills_string.push( value_for_search );
	             	developer_unexist_flag = 1;
				}

          });

	        jQuery.each( os_data_array , function( indexFor, valueFor ) {  

	        	if( _.string.include( valueFor.toLowerCase(), value_for_search.toLowerCase() ) ){
					os_string.push( value_for_search );
	             	developer_unexist_flag = 1;
				}

	            //if( valueFor.toLowerCase() == value_for_search.toLowerCase() ){}
	        });

	        jQuery.each( db_data_array , function( indexFor, valueFor ) {    

	        	if( _.string.include( valueFor.toLowerCase(), value_for_search.toLowerCase() ) ){
					db_string.push( value_for_search );
	             	developer_unexist_flag = 1;
				}      	
	            //if( valueFor.toLowerCase() == value_for_search.toLowerCase() ){}
	        });


	        if(developer_unexist_flag != 1 ){           
	            developer_name_string.push( value_for_search );        
	        }

        }
      }

      filter();
      return false;
    }
  });



/* RESET PAGE RESULT */

jQuery('#reset-button').click( function (){
  location.reload(true);
});

var total_developer_count = 0;

var filter = function(){

  var list_developers   = '';

  var search_text_flag  = 0;
  var skills_flag     = 0;
  var yoe_flag      = 0;
  var os_flag       = 0;
  var dms_flag      = 0;
  var residence_flag    = 0;

  total_developer_count = 0;

  jQuery('#progress').show();

  var result = '';

  /*   Fetching from JSON   */

  var unsorted_result = <?php echo $response;?>;

  var formatted_skills_string   = skills_string.map(function(value){ return value.toLowerCase(); });
  var formatted_os_string     = os_string.map(function(value){ return value.toLowerCase(); });
  var formatted_db_string     = db_string.map(function(value){ return value.toLowerCase(); });
  var formatted_residence_string  = residence_string.map(function(value){ return value.toLowerCase(); });
  var formatted_experience_string = experience_string.map(function(value){ return value.toLowerCase(); });
  var formatted_developer_name_string = developer_name_string.map(function(value){ return value.toLowerCase(); });

  if( formatted_skills_string.length > 0 ){
    skills_flag     = 1;
  }

  if( formatted_os_string.length > 0 ){
    os_flag       = 1;
  }

  if( formatted_db_string.length > 0 ){
    dms_flag      = 1;
  }

  if( formatted_residence_string.length > 0 ){
    residence_flag    = 1;
  }

  if( formatted_experience_string.length == 1 ){
    yoe_flag      = 1;
  }

  if( formatted_developer_name_string.length == 1 ){
    search_text_flag  = 1;
  }


  /* Filter Logic Open */

  console.log(residence_flag);
  console.log(skills_flag);
  console.log(os_flag);
  console.log(dms_flag);
  console.log(yoe_flag);
  console.log(search_text_flag);

  console.log(residence_string);



  if ((residence_flag == 1) && (skills_flag == 0) && (os_flag == 0) && (dms_flag == 0) && (yoe_flag == 0) && (search_text_flag == 0)) {
    list_developers =  jQuery.map( unsorted_result, function( value, key ){

      /* Skills */
      var skills_json_array       = value['program_name'].split(',');
      var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
      var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



      /* Operating Systems */
      var os_json_array       = value['os_name'].split(',');
      var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
      var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

      /* DataBase */
      var db_json_array       = value['db_name'].split(',');
      var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
      var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

      /* Residence */
      var residence_json_array      = value['country'].split(',');
      var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
      var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

      /* Experience */
      var experience_json_array       = value['header_yoe'].split(',');
      var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
      var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


      /* Developer Name search */
      var developer_name_json_array       = value['name'].split(',');
      var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
      var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

      var skills_intersction_flag = 0;

      jQuery.each( formatted_skills_string, function( index, value ) {
        jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
          if (valueFor.indexOf(value) !== -1){
            skills_intersction_flag = 1;
          }
        });
      });

      var developer_name = '';
      jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
        developer_name = valueFor;
      });


      var filter_developer_name = '';
      jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
        filter_developer_name = valueFor;
      });


      var developer_intersction_flag = 0;

      if( developer_name != '' && filter_developer_name != '' ){

        if(developer_name.indexOf(filter_developer_name) != -1 ){
          console.log(developer_name);
          developer_intersction_flag = 1;
        }
      }
      if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {

        var developer_country = value.country;

        console.log(developer_country);

        if( jQuery.inArray( developer_country, residence_string ) > -1 ){

          var aboutme = value.intro_aboutme;
          var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

          var skill_count = 0;
          var skill_json = value.program_name;
          var skills_developer = skill_json.split(',');
          var skill_list = '';

          jQuery.each( skills_developer, function( index, value ) {
            if( skill_count < 5 ){
              skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
            }
            skill_count = skill_count + 1;
          });

          var full_profile_link = '';

          full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

          <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;

              }
            }
          });
}


if ((residence_flag == 0) && (skills_flag == 1) && (os_flag == 0) && (dms_flag == 0) && (yoe_flag == 0) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((skills_intersction_flag > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 1) && (os_flag == 0) && (dms_flag == 0) && (yoe_flag == 0) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }



    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (skills_intersction_flag > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 0) && (os_flag == 1) && (dms_flag == 0) && (yoe_flag == 0) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 0) && (os_flag == 1) && (dms_flag == 0) && (yoe_flag == 0) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {


      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 1) && (os_flag == 1) && (dms_flag == 0) && (yoe_flag == 0) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((skills_intersction_flag > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 1) && (os_flag == 1) && (dms_flag == 0) && (yoe_flag == 0) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (skills_intersction_flag > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 0) && (os_flag == 0) && (dms_flag == 1) && (yoe_flag == 0) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 0) && (os_flag == 0) && (dms_flag == 1) && (yoe_flag == 0) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 1) && (os_flag == 0) && (dms_flag == 1) && (yoe_flag == 0) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((skills_intersction_flag > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 1) && (os_flag == 0) && (dms_flag == 1) && (yoe_flag == 0) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (skills_intersction_flag > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 0) && (os_flag == 1) && (dms_flag == 1) && (yoe_flag == 0) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 0) && (os_flag == 1) && (dms_flag == 1) && (yoe_flag == 0) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 1) && (os_flag == 1) && (dms_flag == 1) && (yoe_flag == 0) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((skills_intersction_flag > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 1) && (os_flag == 1) && (dms_flag == 1) && (yoe_flag == 0) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (skills_intersction_flag > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 0) && (os_flag == 0) && (dms_flag == 0) && (yoe_flag == 1) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if ( ( ( formatted_experience_string <= experience_formatted_json_value ) ) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 0) && (os_flag == 0) && (dms_flag == 0) && (yoe_flag == 1) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) &&  ( formatted_experience_string <= experience_formatted_json_value ) ) || ((developer_intersction_flag == 1) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 1) && (os_flag == 0) && (dms_flag == 0) && (yoe_flag == 1) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((skills_intersction_flag > 0) && ( formatted_experience_string <= experience_formatted_json_value ) ) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 1) && (os_flag == 0) && (dms_flag == 0) && (yoe_flag == 1) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (skills_intersction_flag > 0) && ( formatted_experience_string <= experience_formatted_json_value ) ) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 0) && (os_flag == 1) && (dms_flag == 0) && (yoe_flag == 1) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && ( formatted_experience_string <= experience_formatted_json_value ) ) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 0) && (os_flag == 1) && (dms_flag == 0) && (yoe_flag == 1) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) &&  ( formatted_experience_string <= experience_formatted_json_value ) ) || ((developer_intersction_flag == 1) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 1) && (os_flag == 1) && (dms_flag == 0) && (yoe_flag == 1) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((skills_intersction_flag > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) &&  ( formatted_experience_string <= experience_formatted_json_value ) ) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 1) && (os_flag == 1) && (dms_flag == 0) && (yoe_flag == 1) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (skills_intersction_flag > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && ( formatted_experience_string <= experience_formatted_json_value ) ) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 0) && (os_flag == 0) && (dms_flag == 1) && (yoe_flag == 1) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && ( formatted_experience_string <= experience_formatted_json_value ) ) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 0) && (os_flag == 0) && (dms_flag == 1) && (yoe_flag == 1) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) &&  ( formatted_experience_string <= experience_formatted_json_value ) ) || ((developer_intersction_flag == 1) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 1) && (os_flag == 0) && (dms_flag == 1) && (yoe_flag == 1) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((skills_intersction_flag > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && ( formatted_experience_string <= experience_formatted_json_value ) ) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 1) && (os_flag == 0) && (dms_flag == 1) && (yoe_flag == 1) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (skills_intersction_flag > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && ( formatted_experience_string <= experience_formatted_json_value ) ) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 0) && (os_flag == 1) && (dms_flag == 1) && (yoe_flag == 1) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && ( formatted_experience_string <= experience_formatted_json_value ) ) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 0) && (os_flag == 1) && (dms_flag == 1) && (yoe_flag == 1) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && ( formatted_experience_string <= experience_formatted_json_value ) ) || ((developer_intersction_flag == 1) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 1) && (os_flag == 1) && (dms_flag == 1) && (yoe_flag == 1) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((skills_intersction_flag > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && ( formatted_experience_string <= experience_formatted_json_value ) ) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 1) && (os_flag == 1) && (dms_flag == 1) && (yoe_flag == 1) && (search_text_flag == 0)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (skills_intersction_flag > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && ( formatted_experience_string <= experience_formatted_json_value ) ) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 0) && (os_flag == 0) && (dms_flag == 0) && (yoe_flag == 0) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 0) && (os_flag == 0) && (dms_flag == 0) && (yoe_flag == 0) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 1) && (os_flag == 0) && (dms_flag == 0) && (yoe_flag == 0) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((skills_intersction_flag > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 1) && (os_flag == 0) && (dms_flag == 0) && (yoe_flag == 0) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (skills_intersction_flag > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 0) && (os_flag == 1) && (dms_flag == 0) && (yoe_flag == 0) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 0) && (os_flag == 1) && (dms_flag == 0) && (yoe_flag == 0) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 1) && (os_flag == 1) && (dms_flag == 0) && (yoe_flag == 0) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((skills_intersction_flag > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 1) && (os_flag == 1) && (dms_flag == 0) && (yoe_flag == 0) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (skills_intersction_flag > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 0) && (os_flag == 0) && (dms_flag == 1) && (yoe_flag == 0) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 0) && (os_flag == 0) && (dms_flag == 1) && (yoe_flag == 0) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 1) && (os_flag == 0) && (dms_flag == 1) && (yoe_flag == 0) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((skills_intersction_flag > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 1) && (os_flag == 0) && (dms_flag == 1) && (yoe_flag == 0) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (skills_intersction_flag > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 0) && (os_flag == 1) && (dms_flag == 1) && (yoe_flag == 0) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 0) && (os_flag == 1) && (dms_flag == 1) && (yoe_flag == 0) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 1) && (os_flag == 1) && (dms_flag == 1) && (yoe_flag == 0) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((skills_intersction_flag > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 1) && (os_flag == 1) && (dms_flag == 1) && (yoe_flag == 0) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = experience_updated_json_string.map(function(value){ return value.toLowerCase(); });


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (skills_intersction_flag > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 0) && (os_flag == 0) && (dms_flag == 0) && (yoe_flag == 1) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if ( ( ( formatted_experience_string <= experience_formatted_json_value ) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0) ) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 0) && (os_flag == 0) && (dms_flag == 0) && (yoe_flag == 1) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && ( formatted_experience_string <= experience_formatted_json_value ) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 1) && (os_flag == 0) && (dms_flag == 0) && (yoe_flag == 1) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((skills_intersction_flag > 0) && ( formatted_experience_string <= experience_formatted_json_value ) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 1) && (os_flag == 0) && (dms_flag == 0) && (yoe_flag == 1) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (skills_intersction_flag > 0) && ( formatted_experience_string <= experience_formatted_json_value ) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 0) && (os_flag == 1) && (dms_flag == 0) && (yoe_flag == 1) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && ( formatted_experience_string <= experience_formatted_json_value ) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 0) && (os_flag == 1) && (dms_flag == 0) && (yoe_flag == 1) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && ( formatted_experience_string <= experience_formatted_json_value ) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 1) && (os_flag == 1) && (dms_flag == 0) && (yoe_flag == 1) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((skills_intersction_flag > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && ( formatted_experience_string <= experience_formatted_json_value ) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 1) && (os_flag == 1) && (dms_flag == 0) && (yoe_flag == 1) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (skills_intersction_flag > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && ( formatted_experience_string <= experience_formatted_json_value ) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 0) && (os_flag == 0) && (dms_flag == 1) && (yoe_flag == 1) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && ( formatted_experience_string <= experience_formatted_json_value ) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 0) && (os_flag == 0) && (dms_flag == 1) && (yoe_flag == 1) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && ( formatted_experience_string <= experience_formatted_json_value ) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 1) && (os_flag == 0) && (dms_flag == 1) && (yoe_flag == 1) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((skills_intersction_flag > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && ( formatted_experience_string <= experience_formatted_json_value ) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 1) && (os_flag == 0) && (dms_flag == 1) && (yoe_flag == 1) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (skills_intersction_flag > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && ( formatted_experience_string <= experience_formatted_json_value ) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 0) && (os_flag == 1) && (dms_flag == 1) && (yoe_flag == 1) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && ( formatted_experience_string <= experience_formatted_json_value ) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (skills_intersction_flag > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 0) && (os_flag == 1) && (dms_flag == 1) && (yoe_flag == 1) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && ( formatted_experience_string <= experience_formatted_json_value ) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (skills_intersction_flag > 0))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}

if ((residence_flag == 0) && (skills_flag == 1) && (os_flag == 1) && (dms_flag == 1) && (yoe_flag == 1) && (search_text_flag == 1)) {
  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((skills_intersction_flag > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && ( formatted_experience_string <= experience_formatted_json_value ) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0))) {
      var aboutme = value.intro_aboutme;
      var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

      var skill_count = 0;
      var skill_json = value.program_name;
      var skills_developer = skill_json.split(',');
      var skill_list = '';

      jQuery.each( skills_developer, function( index, value ) {
        if( skill_count < 5 ){
          skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
        }
        skill_count = skill_count + 1;
      });

      var full_profile_link = '';

      full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

      <?php if ( $user->uid == 0 ) { ?>
          //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
          <?php }else{ ?>
            //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
            <?php }?>

            var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

            result = result + new_developer_list;
            total_developer_count = total_developer_count + 1;
          }
        });
}

if ((residence_flag == 1) && (skills_flag == 1) && (os_flag == 1) && (dms_flag == 1) && (yoe_flag == 1) && (search_text_flag == 1)) {

  list_developers =  jQuery.map( unsorted_result, function( value, key ){

    /* Skills */
    var skills_json_array       = value['program_name'].split(',');
    var skills_updated_json_string  = skills_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var skills_formatted_json_value = skills_updated_json_string.map(function(value){ return value.toLowerCase(); });



    /* Operating Systems */
    var os_json_array       = value['os_name'].split(',');
    var os_updated_json_string  = os_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var os_formatted_json_value = os_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* DataBase */
    var db_json_array       = value['db_name'].split(',');
    var db_updated_json_string  = db_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var db_formatted_json_value = db_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Residence */
    var residence_json_array      = value['country'].split(',');
    var residence_updated_json_string   = residence_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var residence_formatted_json_value  = residence_updated_json_string.map(function(value){ return value.toLowerCase(); });

    /* Experience */
    var experience_json_array       = value['header_yoe'].split(',');
    var experience_updated_json_string  = experience_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var experience_formatted_json_value = parseInt( experience_updated_json_string.map(function(value){ return value.toLowerCase(); }) );


    /* Developer Name search */
    var developer_name_json_array       = value['name'].split(',');
    var developer_name_updated_json_string  = developer_name_json_array.map(function(value){ return value.replace(/\'/g,''); });
    var developer_name_formatted_json_value = developer_name_updated_json_string.map(function(value){ return value.toLowerCase(); });

    var skills_intersction_flag = 0;

    jQuery.each( formatted_skills_string, function( index, value ) {
      jQuery.each( skills_formatted_json_value, function( indexFor, valueFor ) {
        if (valueFor.indexOf(value) !== -1){
          skills_intersction_flag = 1;
        }
      });
    });

    var developer_name = '';
    jQuery.each( developer_name_formatted_json_value, function( indexFor, valueFor ) {
      developer_name = valueFor;
    });


    var filter_developer_name = '';
    jQuery.each( formatted_developer_name_string, function( indexFor, valueFor ) {
      filter_developer_name = valueFor;
    });


    var developer_intersction_flag = 0;

    if( developer_name != '' && filter_developer_name != '' ){

      if(developer_name.indexOf(filter_developer_name) != -1 ){
        console.log(developer_name);
        developer_intersction_flag = 1;
      }
    }
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (skills_intersction_flag > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && ( formatted_experience_string <= experience_formatted_json_value ) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1))) {

      var developer_country = value.country;

      if( jQuery.inArray( developer_country, residence_string ) > -1 ){
        var aboutme = value.intro_aboutme;
        var intro_aboutme = ( aboutme.length > 100) ? aboutme.substring(0, 160) + "..." : aboutme;

        var skill_count = 0;
        var skill_json = value.program_name;
        var skills_developer = skill_json.split(',');
        var skill_list = '';

        jQuery.each( skills_developer, function( index, value ) {
          if( skill_count < 5 ){
            skill_list = skill_list+'<span class="skill">'+value.replace(/\'/g,"")+'</span>';
          }
          skill_count = skill_count + 1;
        });

        var full_profile_link = '';

        full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';

        <?php if ( $user->uid == 0 ) { ?>
              //full_profile_link = '<a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/login">Full profile</a>';
              <?php }else{ ?>
                //full_profile_link = '<a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">Full profile</a>';
                <?php }?>

                var new_developer_list = '<div class="developer-repeat"><div class="row"><div class="col-xs-4 col-md-3 dev-image"><img src="http://ekipa.co/uploads/profile_images/'+value.intro_image_name+'"></div><div class="col-xs-8 col-md-9 dev-details"><h1><a class="view-details" href="<?php echo $base_url;?>/developer?id='+value.id+'">'+value.name+'</a></h1><a href="javascript:void(0);" value="'+value.id+'" class="add-to-team">Add to Team</a><h2>'+value.job_position+'</h2><p>'+intro_aboutme+'</p><p class="skillset">'+skill_list+'<span class="more-skill">'+full_profile_link+'</span></p></div></div></div>';

                result = result + new_developer_list;
                total_developer_count = total_developer_count + 1;
              }
            }
          });
}



/* Filter Logic Close */








jQuery('#developer-list').empty();

jQuery('#progress').hide();

if( result != '' ){

  jQuery('#developer-empty-message').html('');

  jQuery('#developer-list').append(result);


}else{
  jQuery('#developer-empty-message').html('');
  jQuery('#developer-empty-message').append('<div class="developer-repeat"  style="border-bottom:none !important;"><div class="row"><div class="col-sm-7 col-md-8 col-lg-9 text-center"><h2>No result found with your searching criteria!!!</h2></div></div></div>');
}

if( total_developer_count != 0 ){

  var developer_per_page_count = 0;

  if( total_developer_count > 0 ){

  //        console.log(total_developer_count);

  developer_per_page_count = Math.ceil( total_developer_count / 6 );
}

console.log(developer_per_page_count);

jQuery("#bridge-pagination").paginate({

  count     : developer_per_page_count,
  start     : 1,
  display     : 7,
  border          : true,
  border_color      : '#fff',
  text_color        : '#fff',
  background_color      : '#82c549',
  border_hover_color    : '#ccc',
  text_hover_color      : '#fff',
  background_hover_color  : '#64AD25',
  images          : false,
  mouse         : 'press',
  onChange          : function(page){
    jQuery('._current','#developer-list').removeClass('_current').hide();
    jQuery('#p'+page).addClass('_current').show();
  }
});



jQuery('.jPag-sprevious').css('display','none');
jQuery('.jPag-snext').css('display','none');

}


var divs = jQuery("#developer-list > div");
for(var i = 0; i < divs.length; i+=6) {
  divs.slice(i, i+6).wrapAll("<div class='bridge-dev-loop'></div>");
}


var items=jQuery(".bridge-dev-loop");
jQuery.each(items,function (index,item) {
  var n = index+1;
  jQuery(this).attr( "id","p"+ n);
  jQuery(this).css('display','none');
});

jQuery("#developer-list").children(":first").css('display','block');
jQuery("#developer-list").children(":first").addClass('_current');


if ( jQuery('#developer-list').text().length == 0 ) {
  jQuery('#bridge-pagination').css('display','none');
}else{
  jQuery('#bridge-pagination').css('display','block');
}

}

});


jQuery(window).on("scroll",function(){
  var innerbannerMargin=jQuery("header.top-bar.menu-fix").outerHeight();
  jQuery(".developer-link-fix").css({'top':innerbannerMargin+'px'});

  var scroll = jQuery(window).scrollTop();

         //>=, not <=
         if (scroll >= 200) {
            //clearHeader, not clearheader - caps H
            jQuery(".developer-links").addClass("developer-link-fix");
          }
          else {
            jQuery(".developer-links").removeClass("developer-link-fix");
          }

        });

</script>

<script src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/js/jquery.paginate.js"></script>
