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
<link href="<?php echo $base_url; ?>/sites/all/themes/bootstrap/css/banner-tooltip.css" rel="stylesheet">


<!--Header section open here-->
<header class="fixed-header">
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

            <!-- GTranslate: http://gtranslate.net/ -->
<!-- <a href="#" onclick="doGTranslate('en|nl');return false;" title="Dutch" class="gflag nturl" style="background-position:-0px -100px;"><img src="http://joomla-gtranslate.googlecode.com/svn/trunk/mod_gtranslate/tmpl/lang/blank.png" height="16" width="16" alt="Dutch" /></a><a href="#" onclick="doGTranslate('en|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;"><img src="http://joomla-gtranslate.googlecode.com/svn/trunk/mod_gtranslate/tmpl/lang/blank.png" height="16" width="16" alt="English" /></a><a href="#" onclick="doGTranslate('en|de');return false;" title="German" class="gflag nturl" style="background-position:-300px -100px;"><img src="http://joomla-gtranslate.googlecode.com/svn/trunk/mod_gtranslate/tmpl/lang/blank.png" height="16" width="16" alt="German" /></a><a href="#" onclick="doGTranslate('en|sv');return false;" title="Swedish" class="gflag nturl" style="background-position:-700px -200px;"><img src="http://joomla-gtranslate.googlecode.com/svn/trunk/mod_gtranslate/tmpl/lang/blank.png" height="16" width="16" alt="Swedish" /></a>

<style type="text/css">

a.gflag {vertical-align:middle;font-size:16px;padding:1px 0;background-repeat:no-repeat;background-image:url('http://joomla-gtranslate.googlecode.com/svn/trunk/mod_gtranslate/tmpl/lang/16.png');}
a.gflag img {border:0;}
a.gflag:hover {background-image:url('http://joomla-gtranslate.googlecode.com/svn/trunk/mod_gtranslate/tmpl/lang/16a.png');}
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}

</style>

<br /><select onchange="doGTranslate(this);" class="notranslate"><option value="">Select Language</option><option value="en|nl">Dutch</option><option value="en|en">English</option><option value="en|de">German</option><option value="en|sv">Swedish</option></select><div id="google_translate_element2"></div>
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


<script type="text/javascript">
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script>
<script type="text/javascript" src="http://joomla-gtranslate.googlecode.com/svn/trunk/gt_update_notes0.js"></script>
-->
<!-- 
<div class="top-main">
<ul>
<li><b><i class="fa fa-phone"></i> +91 (0) 48 44 05 24 72</b></li>
</ul>
</div> -->
<div class="main-nav inner-menu tb-megamenu">
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
    <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar tb-megamenu-button" type="button">
        <i class="icon-reorder"></i>
    </button>
    <div class="nav-collapse">
        
        <div class="menu-right">
            <?php print render($page['tb_right_mega_menu']); ?>
<!-- <ul>
<li><a href="#"><i class="fa fa-home"></i><span>Home</span></a></li>
<li><a href="#"><i class="fa fa-info-circle"></i><span>About Us</span></a></li>
<li><a href="#"><i class="fa fa-thumbs-o-up"></i><span>What we offer</span></a></li>
<li><a href="#"><i class="fa fa-user"></i><span>Our Clients</span></a></li>
<li><a href="#"><i class="fa fa-line-chart"></i><span>Careers</span></a></li>
<li><a href="#"><i class="fa fa-phone"></i><span>Contact us</span></a></li>                    
</ul> -->
        </div>
            <?php print render($page['tb_mega_menu']); ?> 
</div>
</div>

</div>
</div>
</div>


</header>
<!--Header section end here-->

<!--Banner section open here-->
<section class="banner-slider">
    <div class="banner-outer">
        <div class="container">
            <div class="banner">
                <div class="banner-top">
                    Every <span class="strong">IT</span> Need 
                    Can be <span>Bridged</span>
                </div>
                <button class="banner-video-btn-new video" onclick="videopopup();">See How</button>
                <div class="banner-testimonial">
                    <!--New testimonial -->
                    <?php
                    $type = 'testimonial_slider';
                    $query = db_select('node', 'n') -> fields('n', array('nid')) -> condition('type', $type) -> condition('status', 1)-> orderBy('created', 'DESC');
                    $nids = $query->execute()->fetchCol();
                    $nodes = node_load_multiple($nids);
                    $testimonials_array = array();
//print_r($nodes);
                    ?>

                    <?php $i=0;
                    foreach ($nodes as $key => $value ){
                        if($i%2==0)
                            $level="bottomlevel";
                        else 
                            $level="toplevel";
                        if($i==0)
                            $color="green";
                        elseif($i==1)
                            $color="pink";
                        elseif($i==2)
                            $color="orange";
                        elseif($i==3)
                            $color="blue";
                        elseif($i==4)
                            $color="violet";
                        $testimonials_array[$value->vid]['field_testimonial_company_logo']  = $value->field_testimonial_company_logo['und'][0]['value'];
                        $testimonials_array[$value->vid]['field_testimonial_company_name']  = $value->field_testimonial_company_name['und'][0]['value'];
                        $testimonials_array[$value->vid]['field_testimonial_client_name']  = $value->field_testimonial_client_name['und'][0]['value'];
                        if( isset( $value->field_testimonial_client_image['und'][0]['filename'] ) && ( $value->field_testimonial_client_image['und'][0]['filename'] != '' ) ){
                            $testimonials_array[$value->vid]['field_testimonial_client_image'] = $base_url.'/sites/default/files/testimonial_client_image/'.$value->field_testimonial_client_image['und'][0]['filename'];
                        }else{
                            $testimonials_array[$value->vid]['field_testimonial_client_image'] = '';
                        }
                        $testimonials_array[$value->vid]['field_testimonial_content'] = $value->field_testimonial_content['und'][0]['value'];
                         $clientname=$testimonials_array[$value->vid]['field_testimonial_client_name'];
                          $clientname=explode(",",$clientname);
                         $company=$testimonials_array[$value->vid]['field_testimonial_company_name'];
                         $company=explode(",",$company);
                         $country=$value->field_testimonial_country['und'][0]['value']; ?>
                        <div class="testimonial-box box-<?php echo $level;?>">
                            <a class="testimonial-tooltip testimonial-<?php echo $color?>" href="our-clients#<?php echo $i;?>">
                                <div class="testimonial-img">
                                    <img width="103px" height="103px"  src="<?php echo $testimonials_array[$value->vid]['field_testimonial_client_image']; ?>" alt="BRIDGE" />
                                </div>
                                <div class="testimonial-name">
                                    <?php echo $clientname[0]; ?>
                                    <span>(<?php echo $company[0].", ".$country; ?>)</span>
                                </div>
                                <div class="testimonial-tooltip-content <?php echo $color?>-popup"><span>
                                    <?php $test_content= $testimonials_array[$value->vid]['field_testimonial_content'];
                                    $arr = explode('__BREAK__', wordwrap($test_content, 200, "__BREAK__", true)); 
                                    echo $arr[0]."......";?>
                               </span></div>
                            </a>
                        </div>
                        <?php 
                        $i++;
                    }
                    ?>
                    <!--New testimonial-->
                </div>
            </div>
        </div>

    </div>
    <div class="outerlay"></div>
    <div class="span12 down-arrow-cnt">
        <span class="top-arrow"><a href="#top-head">&nbsp;</a>
        </span>
    </div>
</section>
<!--Banner section end here-->

<!--Content section open here-->

<section class="client-details-wrapper">
    <div class="clientele-outer">
        <div class="container" id="top-head">
            <div class="row">

                <div class="clientele">

                    <div class="col-md-8 clientele-logos">
                        <div class="main-head">
                            Our <span>Clientele</span>

                        </div>
                        <div class="logo-outer">
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
                                <div class="item">
                                    <img
                                    src="<?php echo $base_url; ?>/sites/default/files/home_client_logos/pond.jpg"
                                    alt="pond">
                                </div>
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
                                <div class="item"> 
                                    <img
                                    src="<?php echo $base_url; ?>/sites/default/files/home_client_logos/coffeecircle.jpg"
                                    alt="coffeecircle">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 twitter-feed">
                        <a class="twitter-timeline" data-widget-id="600720083413962752" href="https://twitter.com/TwitterDev" width="100%" height="380">Tweets by @Bridge_Tweed</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                   
                    </div>
                </div>



            </div>
        </div>
        <div class="clear"></div>
    </div>
</section>

<!--Client section end here-->

<!--Popular listing section open here-->

<section class="listing-outer">
    <div class="container">
        <div class="row">
            <h2>Popular Listings</h2>

<?php 
$type = 'popular_listings';
       $query = db_select('node', 'n') -> fields('n', array('nid')) -> condition('type', $type) -> condition('status', 1);
       $nids = $query->execute()->fetchCol();
       $nodes = node_load_multiple($nids);
         $popular_listings_array = array(); ?>
          <?php foreach ($nodes as $key => $value ){
 $popular_listings_array[$value->vid]['body']  = $value->body['und'][0]['value'];
        $popular_listings_array[$value->vid]['field_name']  = $value->field_name['und'][0]['value'];
        $popular_listings_array[$value->vid]['field_list_image']  = $value->field_list_image['und'][0]['filename'];
        $link=$value->field_page_link['und'][0]['value'];
        $content=$popular_listings_array[$value->vid]['body']
    ?>
   <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="popular-list-box">
                    <img src="<?php echo $base_url; ?>/sites/default/files/popular_listings/<?php echo $popular_listings_array[$value->vid]['field_list_image'];?>" alt="culture book" />
                    <h3><?php echo $popular_listings_array[$value->vid]['field_name'];?></h3>
                    <p><?php echo $content;
                    //$con = explode('__BREAK__', wordwrap($content, 100, "__BREAK__", true)); 
                        //echo $con[0]."......"; 

                    ?></p>
                    <a href="<?php echo $base_url; ?>/<?php echo $link; ?>" class="listing-next"><span><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/listing-arrow.png" alt="next arrow" /></a></span>
                </div>
            </div>
  <?php

     
        } ?>
        

            
           
            
        </div>
    </div>
    <div class="outerlay"></div>
</section>

<!-- Green pannel start here -->

<section class="bottom-green-pannel">
    <div class="container">
        <div class="row">
            <h2>
                Can We Assist You Through Any Possible Means ? 
            </h2>
            <button onclick="showform()">Yes</button>
        </div>
    </div>
</section>


<!-- Footer section strat here -->
<section class="wrapper clear">

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
            <div class="col-md-8"><?php echo "Copyright " . date('Y') . " All rights reserved Bridge India." ?></div>
            <div class="col-md-4">
                <div class="social-media">
                    <?php print render($page['footer_social_media']); ?>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>

</section>
<div title="top of page" class="goto-top"><i class="fa fa-angle-double-up"></i></div>

<!-- Book A Call popup open  -->

<div class="download-ebook">
    <div class="book-content">

        <div class="col-md-12">
            <?php print render($page['bridge_book_a_call']); ?>

        </div>

    </div>
    <span class="popup-close-btn">X</span>
</div>
<div class="overlay-pop-up"></div>
<!-- Popup block for assistance open -->
<div class="download-ebook discuss-new-popup assistance">

    <div class="book-content  clearfix discuss-team-form ">
      <?php print render($page['assistance_form_with_bridge']); ?>
     </div>

  <div class="close-box-inner-page discuss-new-popup-close">
    <a href="javascript:void(0);">Close</a>
  </div>
    <span class="popup-close-btn">X</span>
</div>
<!-- Popup block for video open -->
<div class="download-ebook video-popup" style="display:none;">

    <div class="book-content  clearfix video-form">
      <div class="method-video-outer">
                        <video width="100%" poster="http://bridge-global.com/sites/all/themes/bootstrap/images/video-cover.jpg" id="frag1" controls="">
                            <source type="video/mp4" src="http://bridge-global.com/sites/default/files/process_video.mp4"></source> 
                                <source type="video/ogv" src="http://bridge-global.com/sites/default/files/process_video.ogv"></source> 
                                    <source type="video/webm" src="http://bridge-global.com/sites/default/files/process_video.webm"></source> Your browser does not support the video tag.</video>
                    </div>
     </div>

  <div class="close-box-inner-page video-popup-close">
    <a href="javascript:void(0);">Close</a>
  </div>
    <span class="popup-close-btn">X</span>
</div>
<script>
    jQuery(document).ready(function () {
      
        jQuery(".banner-btn-blue.book-a-call").click(function () {
            jQuery(".download-ebook, .overlay-pop-up").fadeIn(500);
        });

        jQuery(".download-ebook .close-box-inner-page a, .popup-close-btn, .overlay-pop-up").click(function () {
            jQuery(".download-ebook, .overlay-pop-up").fadeOut(500);
          jQuery("#frag1")[0].pause();
        });
    });
</script>

<!-- Book A Call popup close -->
<script>
    jQuery(document).ready(function () {

        jQuery("#owl-demo-logos").owlCarousel({
            navigation: true,
            items : 4,
            beforeInit: function (elem) {
//random(elem);
}
});
        jQuery("#owl-demo").owlCarousel({
navigation: true, // Show next and prev buttons
slideSpeed: 300,
paginationSpeed: 400,
singleItem: true,
autoPlay: true,
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
<!-- Assist Form-->
<script>


     function showform() {
       jQuery('.discuss-new-popup-close').show();
    jQuery('.discuss-team-form').show();
    jQuery(".discuss-new-popup, .popupWrapper, .overlay-pop-up").fadeIn(200);
    jQuery('html, body').animate({ scrollTop: 0 }, 0);

     }
     function videopopup(){
      jQuery('.video-popup-close').show();
    jQuery('.video-form').show();
    jQuery(".video-popup, .popupWrapper, .overlay-pop-up").fadeIn(500);  
     }
   
    // var width = $(window).width(), height = $(window).height();
    // if ((height >= 768)) {
    // alert('Remove my nav!');
    // }
    var width = $(window).width(), height = $(window).height();
if ((height >= 700)) {
//alert('Remove my nav!');
jQuery('.banner-testimonial').css('margin-top', '6%');
} else {
jQuery('.banner-testimonial').css('margin-top', '0');

}

jQuery(window).scroll(function() {
        if(jQuery(window).scrollTop() > 0) {
            jQuery('.clientele').css("margin-top","-30px");
        } else {
           jQuery('.clientele').css("margin-top","0");
        }
    });
   


</script>
