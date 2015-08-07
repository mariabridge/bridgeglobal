<?php
/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or
 *   'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see bootstrap_preprocess_html()
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head profile="<?php print $grddl_profile; ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php global $base_url; ?>
<script src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="http://bridge-global.com/sites/all/themes/bootstrap/js/jquery.ui.touch-punch.min.js"></script>
<!--<script type="text/javascript" src="<?php //echo $base_url; ?>/sites/all/themes/bootstrap/js/delivery-model/delivery.js"></script>-->
<?php print $scripts; ?>

<script type="text/javascript" src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/js/cycle2.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/js/jquery.maximage.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/js/owl.carousel.js"></script>

<script>
jQuery(document).ready(function(){
	jQuery('.tb-megamenu-button').addClass('collapsed');
});
</script>


<link href="<?php echo $base_url; ?>/sites/all/themes/bootstrap/css/font-style.css" rel="stylesheet">
<?php
global $user;
if (!in_array('administrator', array_values($user->roles))) {
    ?>
<style>
    #user-login-section .alert-danger{
        display: none;
    }
    #user-login-section .submitted{
        display: none;
    }
    #user-login-section ul.links.list-inline {
        display: none;
    }
    #user-login-section .field-name-field-job-preference{
        display: none;
    }
    #user-login-section h1.page-header{
        font-size: 30px;
    }
    .field-name-field-job-title{
        display: none;
    }
    
    .field-name-field-job-title p, .field-name-field-job-description p, .field-name-field-job-profile p{
        font-size: 14px;
    }
    
    .field-name-field-job-profile .field-items .field-item.even p strong{
        color: #333 !important;
    }
    .field-name-field-job-profile .field-items .field-item ul{
        margin-left: 20px;
    }
    .field-name-field-job-profile .field-items .field-item ul li{
        background: url("<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/list.png") no-repeat left 8px;
        list-style: none;
        padding-left: 10px;
    }
   .field-name-field-job-profile .field-items .field-item ul li ul{
       margin-top: 15px;
   }
    .field-name-field-job-profile .field-label, .field-name-field-job-description .field-label{
        color: #333;
        font-weight: bold;
    }
    .field-name-field-job-description .field-label, .field-name-field-job-profile .field-label, .field-name-field-job-openings .field-label, .field-name-field-job-category .field-label, 
    .field-name-field-job-office .field-label, .field-name-field-job-contact .field-label, .field-name-field-job-preference  .field-label
    {
          margin: 20px 0;
    }
    .field-name-field-job-openings, .field-name-field-job-office{
       display: inline-block;
       width: 25%;
    }
    .field-name-field-job-category, .field-name-field-job-contact{
       display: inline-block;
       width: 75%;
    }
    .field-name-field-job-openings, .field-name-field-job-office, .field-name-field-job-category, .field-name-field-job-contact{
        margin: 10px 0;
    }
    
    
    .field-name-field-job-openings .field-label, .field-name-field-job-openings .field-items, .field-name-field-job-category .field-label,  .field-name-field-job-category .field-items,  
    .field-name-field-job-office .field-label,  .field-name-field-job-office .field-items, .field-name-field-job-contact .field-label, .field-name-field-job-contact .field-items{
        display: table-cell;
    }
    .field-name-field-job-openings .field-items, .field-name-field-job-category .field-items, .field-name-field-job-office .field-items, .field-name-field-job-contact .field-items{
        padding: 0 5px;
    }
    .field-name-field-job-openings .field-label, .field-name-field-job-category .field-label, .field-name-field-job-office .field-label, .field-name-field-job-contact .field-label{
        width: 130px;
    }
    
    @media (max-width: 768px){
       .field-name-field-job-openings, .field-name-field-job-office{
       display: inline-block;
       width: 100%;
    }
    
    }
    
    
    
    
</style>
    <?php
    }
?>

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
<?php
//session_start();
 $servername=$_SERVER['SERVER_NAME'];
//echo "HTTP_REFERER".$_SERVER['HTTP_REFERER'];
if ( $parts = parse_url($_SERVER['HTTP_REFERER']) ) {
    $hostname=$parts[ "host" ];
}


//echo $_SERVER["HTTP_REFERER"];
if ( !isset( $_SESSION["origURL"] ) ){
    $_SESSION["origURL"] = $_SERVER["HTTP_REFERER"];
  }
if($hostname!=$servername)
{
  session_unset($_SESSION["origURL"]);
  session_start();
  $_SESSION["origURL"] = $_SERVER["HTTP_REFERER"];
}

?>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
 
  <input type="hidden" id="reference" value="<?php echo $_SESSION["origURL"];?>">
   <div class="download-ebook leave-your-cv-popup" style="display:none">
    <div class="book-content  clearfix leave-your-cv-form">
       <?php
$block = module_invoke('webform', 'block_view', 'client-block-132');
print render($block['content']);
?>
     </div>
  <div class="close-box-inner-page leave-your-cv-popup-close">
    <a href="javascript:void(0);">Close</a>
  </div>
    <span class="popup-close-btn">X</span>
</div>
  
</body>
<!-- begin olark code -->
  <script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
  f[z]=function(){
  (a.s=a.s||[]).push(arguments)};var a=f[z]._={
  },q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
  f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
  0:+new Date};a.P=function(u){
  a.p[u]=new Date-a.p[0]};function s(){
  a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
  hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
  return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
  b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
  b.contentWindow[g].open()}catch(w){
  c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
  var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
  b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
  loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
  /* custom configuration goes here (www.olark.com/documentation) */
  olark.identify('8729-917-10-7058');/*]]>*/</script><noscript></noscript>
  <!-- <a href="https://www.olark.com/site/8729-917-10-7058/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a> -->
<!-- end olark code -->


<style type="text/css">
#hblink99{display:none !important;}
</style> 
</html>
