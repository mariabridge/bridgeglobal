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

<!-- EBOOKS PAGE -->
<style type="text/css">
  .modal.in {
    -webkit-transform: translateZ(0);
            transform: translateZ(0);
}
</style>
<!-- top bar open here -->

<section class="wrapper about-us-wrapper">

<section class="main-wrapper inner-page">

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

<!-- Header section close -->

<section class="inner-banner sub-banner">
<?php print render($page['inner_banner_content']); ?>  
</section>

<section class="about-content-wrapp ebook-text-content">
<div class="container">
<div class="row">
<div class="col-md-12 e-book-main">
<div class="col-md-12 main-content-ebook">
<h1>What Everybody Ought to Know about Setting Up and Managing
Offshore/Nearshore Software Development Teams Successfully</h1>             
</div>
</div>
</div>
</div>
</section>


<section class="ebook-down-all">
<div class="container">
<div class="row">
<div class="col-md-12 offer-wrapp">
<a href="javascript:void(0);" class="download-all">Download all eBooks </a>
</div>
</div>
</div>
</section>


<section id="download"
class="sec-div-full about-content-wrapp delivery-model">
<div class="container">
<div class="row">
<div class="col-md-12 books-wrapp">
<h1>
<span>Download eBooks for FREE</span>
</h1>

<div class="row">

<!-- eBook1 open  -->
<div class="col-md-4 col-sm-6">
<div class="book-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/book1.jpg"
alt="How to get prepared  for managing a remote team">
<div class="rating">
<span class="btn-add-to-cart"></span>
</div>
<div class="down-book">
<?php print render($page['ebook_how_to_not_screw_webform']); ?>
</div>
</div>
</div>

<!-- Ebook2  -->
<div class="col-md-4 col-sm-6">
<div class="book-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/book2.jpg"
alt="How to not screw up when managaing a remote team">
<div class="rating">
<span class="btn-add-to-cart"> </span>
</div>
<div class="down-book">
<?php print render($page['ebook_how_to_get_prepared_webform']); ?>
</div>
</div>
</div>


<!-- Ebook3  -->
<div class="col-md-4 col-sm-6">
<div class="book-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/book3.jpg"
alt="How to organize offshore and nearshore collaboration">
<div class="rating">
<span class="btn-add-to-cart"></span>
</div>
<div class="down-book">
<?php print render($page['ebook_how_to_organize_webform']); ?>
</div>
</div>
</div>

<!-- eBook4  -->
<div class="col-md-4 col-sm-6">
<div class="book-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/book4.jpg"
alt="How to overcome cultural differences when managing offshore or nearshore teams">
<div class="rating">
<span class="btn-add-to-cart"></span>
</div>

<div class="down-book">
<?php print render($page['ebook_how_to_overcome_webform']); ?>
</div>
</div>
</div>

<!-- eBook5  -->
<div class="col-md-4 col-sm-6">
<div class="book-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/book5.jpg"
alt="How to communicate effectively with a remote team">
<div class="rating">
<span class="btn-add-to-cart"></span>
</div>

<div class="down-book">
<?php print render($page['ebook_how_to_communicate_webform']); ?>
</div>
</div>
</div>

<!-- eBook6  -->
<div class="col-md-4 col-sm-6">
<div class="book-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/book6.jpg"
alt="How to communicate effectively with a remote team">
<div class="rating">
<span class="btn-add-to-cart"></span>
</div>

<div class="down-book">
<?php print render($page['ebook_how_to_manage_webform']); ?>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</section>


<section id="authors" class="sec-div-full about-content-wrapp delivery-model">
<div class="container">
<div class="row">
<div class="col-md-12 authors-wrapp">
<h1>
<span>Authors</span>
</h1>
<div class="row">
<div id="owl-demo" class="owl-carousel">
<div class="col-md-12">
<div class="col-md-12 authors-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Hugo.jpg"
alt="Hugo Messer">
<h1>Hugo Messer</h1>
<p>Hugo Messer has been building and managing teams around the
world since 2005. His passion is to enable people that are
spread across cultures, geographies, and time zones to
collaborate.</p>
<a href="#" data-toggle="modal" data-target="#Hugo">read more
....</a>
<div class="col-md-12 social-bar clearfix">
<a href="https://www.facebook.com/hugo.messer?fref=ts"
target="_blank"><i class="fa fa-facebook"></i></a> <a
href="https://www.linkedin.com/in/hugomesser"
target="_blank"><i class="fa fa-linkedin"></i></a> <a
href="https://twitter.com/hugomesser" target="_blank"><i
class="fa fa-twitter"></i></a>
</div>
</div>
</div>
<div class="col-md-12">
<div class="col-md-12 authors-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Zhenya.jpg"
alt="Zhenya Rozinskiy">
<h1>Zhenya Rozinskiy</h1>
<p>ZhenyaRozinskiy has over 20 years of experience in the
software development industry. During this time, Zhenya has
had numerous opportunities to help grow and make</p>
<a href="#" data-toggle="modal" data-target="#zhenya">read
more ....</a>
<div class="col-md-12 social-bar clearfix">
<a href="https://www.facebook.com/zrozinskiy" target="_blank"><i
class="fa fa-facebook"></i></a> <a
href="http://www.linkedin.com/in/rozinskiy" target="_blank"><i
class="fa fa-linkedin"></i></a> <a
href="https://twitter.com/zrozinskiy" target="_blank"><i
class="fa fa-twitter"></i></a> <a
href="https://plus.google.com/+ZhenyaRozinskiy/posts"
target="_blank"><i class="fa fa-google-plus"></i></a>

</div>
</div>
</div>
<div class="col-md-12">
<div class="col-md-12 authors-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/erick.jpg"
alt="Erik Joustra">
<h1>Erik Joustra</h1>
<p>Erik Joustra is a Senior Manager with broad experience in
different fields of the ICT Landscape. Since 1988, he works
in the industry and has been on 'both sides of the table'.
The highlight of his career</p>
<a href="#" data-toggle="modal" data-target="#Erik">read more
....</a>
<div class="col-md-12 social-bar clearfix">
<a href="https://www.linkedin.com/in/erikjoustrawat"
target="_blank"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
<div class="col-md-12">
<div class="col-md-12 authors-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/katie.jpg"
alt="Katie Gove">
<h1>Katie Gove</h1>
<p>Katie Gove has more than 20 years experience in strategy,
innovation, and change primarily focused on innovative
partnering, outsourcing, knowledge management, and creative
networks.</p>
<a href="#" data-toggle="modal" data-target="#Katie">read more
....</a>
<div class="col-md-12 social-bar clearfix">
<a href="https://www.linkedin.com/pub/katie-gove/0/14b/683"
target="_blank"><i class="fa fa-linkedin"></i></a> <a
href="https://twitter.com/katiegove" target="_blank"><i
class="fa fa-twitter"></i></a> <a
href="https://plus.google.com/+KatieGove/posts "
target="_blank"><i class="fa fa-google-plus"></i></a>
</div>
</div>
</div>
<div class="col-md-12">
<div class="col-md-12 authors-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/nataly.jpg"
alt="Nataly Veremeeva">
<h1>Nataly Veremeeva</h1>
<p>Nataly Veremeeva - An active individual with passion for IT
and making the world a better, closer, and friendlier place.
Her degrees and experiences cover international management</p>
<a href="#" data-toggle="modal" data-target="#Nataly">read
more ....</a>
<div class="col-md-12 social-bar clearfix">
<a href="https://www.facebook.com/nataly.veremeeva"
target="_blank"><i class="fa fa-facebook"></i></a> <a
href="https://www.linkedin.com/in/natalyveremeeva"
target="_blank"><i class="fa fa-linkedin"></i></a> <a
href="https://twitter.com/NatalyVeremeeva" target="_blank"><i
class="fa fa-twitter"></i></a> <a
href="https://plus.google.com/114585655477416767702/posts"
target="_blank"><i class="fa fa-google-plus"></i></a>
</div>
</div>
</div>
<div class="col-md-12">
<div class="col-md-12 authors-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/patrik.jpg"
alt="Patrick Van Dun">
<h1>Patrick Van Dun</h1>
<p>Patrick Van Dun worked in Europe (Belgium, The Netherlands,
Spain) and Asia (Nepal,Philippines) for global technology
driven companies such as media groups, ICT, BPO,
IToutsourcing,</p>
<a href="#" data-toggle="modal" data-target="#patrik">read
more ....</a>
<div class="col-md-12 social-bar clearfix">
<a href="https://www.linkedin.com/in/patrickvandun"
target="_blank"><i class="fa fa-linkedin"></i></a> <a
href="https://twitter.com/patrickvandun" target="_blank"><i
class="fa fa-twitter"></i></a> <a
href="https://plus.google.com/101815393438686212256/posts"
target="_blank"><i class="fa fa-google-plus"></i></a>

</div>
</div>
</div>
<div class="col-md-12">
<div class="col-md-12 authors-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/amanda.jpg"
alt="Amanda Crouch">
<h1>Amanda Crouch</h1>
<p>Amanda Crouch is considered a leading expert in the
collaboration and partnering field and advises both private
and public sector organizations to enable their critical
business relationships</p>
<a href="#" data-toggle="modal" data-target="#amanda">read
more ....</a>
<div class="col-md-12 social-bar clearfix">
<a
href="https://www.linkedin.com/pub/amanda-crouch/2/21b/723"
target="_blank"><i class="fa fa-linkedin"></i></a>
</li>
</div>
</div>
</div>
<div class="col-md-12">
<div class="col-md-12 authors-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/ove.jpg"
alt="Ove Holmberg">
<h1>Ove Holmberg</h1>
<p>Ove has more than 25 years of experience from IT related
assignments and projects in various roles such as project
manager, agile coach and system developer. Through his
career, he have</p>
<a href="#" data-toggle="modal" data-target="#ove">read more
....</a>
<div class="col-md-12 social-bar clearfix">
<a href="http://se.linkedin.com/in/ovehol" target="_blank"><i
class="fa fa-linkedin"></i></a> <a
href="https://twitter.com/ovehol" target="_blank"><i
class="fa fa-twitter"></i></a> <a
href="https://plus.google.com/+OveHolmberg/posts"
target="_blank"><i class="fa fa-google-plus"></i></a>
</div>
</div>
</div>
<div class="col-md-12">
<div class="col-md-12 authors-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/andreas.jpg"
alt="Andreas Brilling">
<h1>Andreas Brilling</h1>
<p>Andreas Brilling is an Engagement Manager at Capgemini,
based in Stuttgart. He has more than 20 years' experience in
software development projects in various international
settings.</p>
<a href="#" data-toggle="modal" data-target="#Andreas">read
more ....</a>
<div class="col-md-12 social-bar clearfix">
<a
href="https://www.linkedin.com/pub/andreas-brilling/83/5b/a7a/en"
target="_blank"><i class="fa fa-linkedin"></i></a> <a
href="https://twitter.com/AndreasBrilling" target="_blank"><i
class="fa fa-twitter"></i></a> <a
href=" https://plus.google.com/104218332915897678937/posts"
target="_blank"><i class="fa fa-google-plus"></i></a>
</div>
</div>
</div>
<div class="col-md-12">
<div class="col-md-12 authors-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/darel.jpg"
alt="Darel Cullen">
<h1>Darel Cullen</h1>
<p>Darel has a long and broad experience of the software
industry in many different industry sectors including
nuclear, space, air traffic control, and industrial. He
currently serves as</p>
<a href="#" data-toggle="modal" data-target="#darel">read more
....</a>
<div class="col-md-12 social-bar clearfix">
<a
href=" https://www.linkedin.com/pub/darel-cullen/0/245/924"
target="_blank"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
<div class="col-md-12">
<div class="col-md-12 authors-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Abhilash.jpg"
alt="Abhilash Chandran">
<h1>Abhilash Chandran</h1>
<p>AbhilashChandran is an Agile Software Development Manager,
coach, and practitioner employed with Xerox Corporation. He
is also an active software engineer and actively leads teams</p>
<a href="#" data-toggle="modal" data-target="#Abhilash">read
more ....</a>
<div class="col-md-12 social-bar clearfix">
<a
href="https://www.facebook.com/c.abhilash?ref=br_rs&fref=browse_search"
target="_blank"><i class="fa fa-facebook"></i></a>
<a href="https://twitter.com/cabhilash" target="_blank"><i
class="fa fa-twitter"></i></a>
 <!-- <a
href="http://in.linkedin.com/in/cabhilash" target="_blank"><i
class="fa fa-linkedin"></i></a> -->
</div>
</div>
</div>
<div class="col-md-12">
<div class="col-md-12 authors-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Andy.jpg"
alt="Andy Jordan">
<h1>Andy Jordan</h1>
<p>Andy Jordan is President of Roffensian Consulting Inc., an
Ontario, Canada based management consulting firm with a
strong emphasis on organizational transformation,</p>
<a href="#" data-toggle="modal" data-target="#Andy">read more
....</a>
<div class="col-md-12 social-bar clearfix">
<a href="https://www.linkedin.com/in/andyjordan"
target="_blank"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
<div class="col-md-12">
<div class="col-md-12 authors-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Erwin.jpg"
alt="Erwin de Bont">
<h1>Erwin de Bont</h1>
<p>Erwin de Bont has over 20 years experience in successfully
managing many aspects of the Telecom and ICT Industry. His
cup of tea is realizing strategy. In the past, he has
successfully</p>
<a href="#" data-toggle="modal" data-target="#Erwin">read more
....</a>
<div class="col-md-12 social-bar clearfix">
<!-- <a href="https://www.facebook.com/erwin.debont"
target="_blank"><i class="fa fa-facebook"></i></a>  --><a
href="https://www.linkedin.com/in/edebont" target="_blank"><i
class="fa fa-linkedin"></i></a> <a
href="https://twitter.com/erwindebont" target="_blank"><i
class="fa fa-twitter"></i></a> <a
href="https://plus.google.com/108785930591442189756/posts"
target="_blank"><i class="fa fa-google-plus"></i></a>
</div>
</div>
</div>
<div class="col-md-12">
<div class="col-md-12 authors-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Anuj.jpg"
alt="Anuj Kumar">
<h1>Anuj Kumar</h1>
<p>Anuj works as a Senior Manager with Capgemini India, based
out of Mumbai. He has been working with custom software
development based projects for the past 14 years. Most of his
projects involve</p>
<a href="#" data-toggle="modal" data-target="#Anuj">read more
....</a>
<div class="col-md-12 social-bar clearfix">
<a href="https://www.linkedin.com/pub/anuj-kumar/1/992/582"
target="_blank"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
<div class="col-md-12">
<div class="col-md-12 authors-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Jean.jpg"
alt="Jean-Paul van Wieringhen Borski">
<h1>Jean-Paul van Wieringhen Borski</h1>
<p>With 17 years of experience in IT, Jean-Paul has spent most
of his time in international environments where he managed
several offshore delivery centers.He began his career</p>
<a href="#" data-toggle="modal" data-target="#Jean">read more
....</a>
<div class="col-md-12 social-bar clearfix">
<a href="https://www.linkedin.com/in/wieringhenborski"
target="_blank"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
<div class="col-md-12">
<div class="col-md-12 authors-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Herke.jpg"
alt="Herke Schuffel">
<h1>Herke Schuffel</h1>
<p>Herke has been in IT for almost 20 years now. He has spent
most of this time in IT services, delivering maintenance
support to customers in different branches and with
technologies ranging from</p>
<a href="#" data-toggle="modal" data-target="#Herke">read more
....</a>
<div class="col-md-12 social-bar clearfix">
<a href="https://www.linkedin.com/in/herkeschuffel"
target="_blank"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
<div class="col-md-12">
<div class="col-md-12 authors-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Henk.jpg"
alt="Henk Woolschot">
<h1>Henk Woolschot</h1>
<p>Henk has been an IT expert for 23 years because of his
great professional experiences in the field of outsourcing
and offshoring. Currently, Henk is Engagement Director /
Delivery</p>
<a href="#" data-toggle="modal" data-target="#Henk">read more
....</a>
<div class="col-md-12 social-bar clearfix">
<a href="https://www.linkedin.com/in/hjwoolschot"
target="_blank"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
<div class="col-md-12">
<div class="col-md-12 authors-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Bert.jpg"
alt="Bert van Hijfte">
<h1>Bert van Hijfte</h1>
<p>My first trip to India goes quite a long way back. In 1987,
I travelled to Delhi as a journalist to experience the
country first-hand and come back with some stories on the
Indian economy and the</p>
<a href="#" data-toggle="modal" data-target="#Bert">read more
....</a>
<div class="col-md-12 social-bar clearfix">
<a href="https://www.linkedin.com/in/bertvanhijfte"
target="_blank"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
<div class="col-md-12">
<div class="col-md-12 authors-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Gayle.jpg"
alt="Gayle Cotton">
<h1>Gayle Cotton</h1>
<p>Gayle Cotton is a National Emmy Award Winner and the author
of the best-selling book 'SAY Anything to Anyone, Anywhere! 5
Keys to Successful Cross-Cultural Communication'. She is
President of</p>
<a href="#" data-toggle="modal" data-target="#Gayle">read more
....</a>
<div class="col-md-12 social-bar clearfix">
<a href="https://www.linkedin.com/in/gaylecotton"
target="_blank"><i class="fa fa-linkedin"></i></a> <a
href="https://twitter.com/gaylecotton" target="_blank"><i
class="fa fa-twitter"></i></a> <a
href="https://plus.google.com/102063141434230574739/posts"
target="_blank"><i class="fa fa-google-plus"></i></a>
</div>
</div>
</div>
<div class="col-md-12">
<div class="col-md-12 authors-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Rajiv.jpg"
alt="Rajiv Mathew">
<h1>Rajiv Mathew</h1>
<p>Rajiv Mathew is the head of Marketing at Compassites
Software. He is a hands-on technology marketing &
communications professional with proven expertise in multiple
</p>
<a href="#" data-toggle="modal" data-target="#Rajiv">read more
....</a>
<div class="col-md-12 social-bar clearfix">
<a href="https://www.facebook.com/jivemathew" target="_blank"><i
class="fa fa-facebook"></i></a> <a
href="https://www.linkedin.com/in/rajivmathew"
target="_blank"><i class="fa fa-linkedin"></i></a> <a
href="https://twitter.com/jivemathew" target="_blank"><i
class="fa fa-twitter"></i></a> <a
href="https://plus.google.com/+RajivMathew/posts"
target="_blank"><i class="fa fa-google-plus"></i></a>
</div>
</div>
</div>
<div class="col-md-12">
<div class="col-md-12 authors-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Ged.jpg"
alt="Ged Roberts">
<h1>Ged Roberts</h1>
<p>Ged Roberts is an IT honors graduate of North Staffordshire
Polytechnic. After spending two years working in the UK, he
moved to The Netherlands in 1985. During the last 30+ years,</p>
<a href="#" data-toggle="modal" data-target="#Ged">read more
....</a>
<div class="col-md-12 social-bar clearfix">
<a href="https://www.linkedin.com/in/robertsged"
target="_blank"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
<div class="col-md-12">
<div class="col-md-12 authors-details">
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Jennifer.jpg"
alt="Jennifer Kumar">
<h1>Jennifer Kumar</h1>
<p>Jennifer Kumar is the Managing Director of Authentic
Journeys Consultancy, based in Infopark inKochi, India. With
over 15 years' experience working, living and studying
between the US</p>
<a href="#" data-toggle="modal" data-target="#Jennifer">read
more ....</a>
<div class="col-md-12 social-bar clearfix">
<a href="https://www.facebook.com/jenkumar" target="_blank"><i
class="fa fa-facebook"></i></a> <a
href="https://www.linkedin.com/in/jenniferkumar"
target="_blank"><i class="fa fa-linkedin"></i></a> <a
href="https://plus.google.com/+JenniferKumar/posts"
target="_blank"><i class="fa fa-google-plus"></i></a>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</section>


<section id="ebook-project"
class="sec-div-full about-content-wrapp delivery-model">
<div class="container">
<div class="row">
<div class="col-md-12 e-book-project">
<h1>
<span>eBook Project - The Story</span>
</h1>
<p>
We know from our experience that many people are worried about setting up and managing offshore/nearshore teams successfully. We always get questions about:
</p>
<ul class="ebook-project-section-ul">
<li>How to get prepared for managing a remote team ?</li>
<li>How to organize nearshore and offshore collaboration ?</li>
<li>How to overcome cultural differences when managing offshore/nearshore teams ?</li>
<li>How to communicate effectively with a remote team ?</li>
<li>How to manage people in our remote team ? </li>
</ul>
<p>
When we searched for books about this, most books only described dry theoretical approaches to offshoring/nearshoring. To gather practical experiences and real life stories, Hugo Messer, CEO of Bridge wrote the books as a crowdsourcing project. The authors are people from different parts of the world who have stood with their feet in the mud, people who have torn out their hair because things didn't work as easily as managing people in your own office.
</p>
<p>
Each eBook contains chapters written by 3&#8722;5 authors and each author gives their view on the particular topic. Enjoy reading our eBooks and save yourself from making the same mistakes others made.
</p>
<p>
If you have any questions, feel free to send an email to Hugo Messer &#8722; <a href="mailto:hugo@bridge-global.com">hugo@bridge-global.com</a>

</p>
</div>
</div>
</div>
</section>

<!-- author details box contents -->
<!-- zhenya open -->

<div class="modal fade" id="zhenya" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal">
<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
</button>
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Zhenya.jpg"
alt="pic">
<h1>Zhenya Rozinskiy</h1>
<p>ZhenyaRozinskiy has over 20 years of experience in the software
development industry. During this time, Zhenya has had numerous
opportunities to help grow and make many companies of different
sizes and different maturity levels successful. His experience
includes delivering shrink-wrapped software, enterprise
solutions, custom product implementations, and high-availability,
high-traffic eCommerce sites. After first getting into
outsourcing and offshoring development models and failing, Zhenya
made it his personal challenge to find a way to make outsourcing
work. Now, 16 years later and after successfully launching
offshoring teams in almost every continent, Zhenya has acquired a
unique know-how for successful software development outsourcing.
By combining his years of experience working with people and
building effective teams with his practical approach to
outsourcing, Zhenya has become a recognized thought leader in all
areas of establishing and growing responsive engineering
organizations.</p>
<div class="social-bar">
<a href="https://www.facebook.com/zrozinskiy" target="_blank"><i
class="fa fa-facebook"></i></a> <a
href="https://twitter.com/zrozinskiy" target="_blank"><i
class="fa fa-twitter"></i></a> <a
href="http://www.linkedin.com/in/rozinskiy" target="_blank"><i
class="fa fa-linkedin"></i></a> <a
href="https://plus.google.com/+ZhenyaRozinskiy/posts"
target="_blank"><i class="fa fa-google-plus"></i></a>
</div>
</div>
</div>
</div>
</div>

<!-- zhenya close -->

<!-- erick open -->

<div class="modal fade" id="Erik" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal">
<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
</button>
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/erick.jpg"
alt="author1">
<h1>Erik Joustra</h1>
<p>
Erik Joustra is a Senior Manager with broad experience in
different fields of the ICT Landscape. Since 1988, he works in
the industry and has been on 'both sides of the table'. The
highlight of his career is building, restructuring, and fine
tuning of different organizational departments and divisions
around outsourcing. In the past, he has worked for CapGemini,
Atos Origin, and Ordina, setting up units and divisions for
executing large outsourcing projects and maintenance contracts.
In between these roles, he was the CIO of Casema (from 2000 to
2003) where he set up a new IT Department in a fast-growing and
changing market. After his time at Ordina, Erik advised several
companies on issues around their outsourcing contracts, both for
suppliers and customers. Currently, Erik Joustra works at the
Indian company Tech Mahindra and is responsible for building the
Dutch Delivery Centre of Tech Mahindra.<br> <br> Tech Mahindra<br>
<br> Tech Mahindra is part of the USD 16.2 billion Mahindra Group
and is a leading global systems integrator and business
transformation consulting organization, focused primarily on the
telecommunications industry. In 2013, the Mahindra Group received
the Financial Times 'Boldness in Business' Award in the 'Emerging
Markets' category. Their solutions portfolio includes Consulting,
Application Development & Management, Network Services, Solution
Integration, Product Engineering, Infrastructure Managed
Services, Remote Infrastructure Management and BPO Services, and
Consulting. With an array of service offerings for TSPs, TEMs,
and ISVs, Tech Mahindra is a chosen transformation partner for
several leading wireline, wireless, and broadband operators in
Europe, Asia- Pacific, and North America. Tech Mahindra has a
global footprint through operations in more than 31 countries
with 17 sales offices and 15 delivery centers. Assessed at SEI
CMMi Level 5, Tech Mahindra's track record for value delivery is
supported by over 47,400 professionals who provide a unique blend
of culture, domain expertise, and in-depth technology skill sets.
</p>
<div class="social-bar">
<a href="https://www.linkedin.com/in/erikjoustrawat"
target="_blank"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
</div>
</div>

<!-- erick close -->

<!-- katie open -->

<div class="modal fade" id="Katie" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal">
<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
</button>
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/katie.jpg"
alt="author1">
<h1>Katie Gove</h1>
<p>Katie Gove has more than 20 years experience in strategy,
innovation, and change primarily focused on innovative
partnering, outsourcing, knowledge management, and creative
networks. Katie is based in Denmark and works internationally,
primarily in Europe and North America. Her industry experience
ranges from consumer products to pharmaceuticals to technology.
Katie is Managing Director at Trellis. Trellis delivers strategic
and operational services that help its clients to achieve better
outcomes in outsourcing and partnering. Clients are typically
engaged in knowledge-intensive outsourcing, i.e. outsourcing to
build and/or deliver products and/or services. As such, most
clients come from product development or R&D organizations.</p>
<div class="social-bar">
<a href="https://www.linkedin.com/pub/katie-gove/0/14b/683"
target="_blank"><i class="fa fa-linkedin"></i></a> <a
href="https://twitter.com/katiegove" target="_blank"><i
class="fa fa-twitter"></i></a> <a
href="https://plus.google.com/+KatieGove/posts " target="_blank"><i
class="fa fa-google-plus"></i></a>
</div>
</div>
</div>
</div>
</div>

<!-- katie close -->

<!-- nataly open -->

<div class="modal fade" id="Nataly" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal">
<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
</button>
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/nataly.jpg"
alt="author1">
<h1>Nataly Veremeeva</h1>
<p>Nataly Veremeeva - An active individual with passion for IT and
making the world a better, closer, and friendlier place. Her
degrees and experiences cover international management as well as
language and culture. IT outsourcing with its mix of cultures,
management challenges, and practically infinite possibilities for
international collaboration excites and inspires her. Having
worked in IT outsourcing for more than 7 years (since 2005),
Nataly knows the risks, problems, advantages, strengths, and
weaknesses of outsourcing, and what it takes to make it a
success. And she is happy to share them. About Intercomputer
Global Services Intercomputer GS is a European software
development team provider and system integrator with development
offices in Germany and Ukraine. Intercomputer GS operates in:</p>
<h2>Document Management Systems and Solutions</h2>
<p>Working with big enterprises and SMEs, implementing ECM systems
such as Documentum, SharePoint, Alfresco, and others mostly for
enterprises from financial sector and industries.</p>
<h2>ODC Centers</h2>
<p>Creating software development teams on a range of technologies,
such as SharePoint, Documentum, .NET, Java, C/C++, and embedded
development mostly for software companies that wish to extend
their capabilities and increase their competitiveness in a
challenging market such as IT.</p>
<h2>QA Lab</h2>
<p>Testing our own and our client's products to increase quality
and profit. Intercomputer enjoys an excellent reputation since
its start in 1999. It is a partner of EMC, Microsoft, ABBYY,
Oracle, VMware, IBM, and Intel. It is ISO certified and has
established good processes. The company has European and US
clients on a wide range of services, providing them with European
quality and Eastern European prices.</p>
<div class="social-bar">
<a href="https://www.facebook.com/nataly.veremeeva"
target="_blank"><i class="fa fa-facebook"></i></a> <a
href="https://www.linkedin.com/in/natalyveremeeva"
target="_blank"><i class="fa fa-linkedin"></i></a> <a
href="https://twitter.com/NatalyVeremeeva" target="_blank"><i
class="fa fa-twitter"></i></a> <a
href="https://plus.google.com/114585655477416767702/posts"
target="_blank"><i class="fa fa-google-plus"></i></a>
</div>
</div>
</div>
</div>
</div>

<!-- nataly close -->

<div class="modal fade" id="patrik" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal">
<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
</button>
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/patrik.jpg"
alt="author1">
<h1>Patrick Van Dun</h1>
<p>
Patrick Van Dun worked in Europe (Belgium, The Netherlands,
Spain) and Asia (Nepal,Philippines) for global technology driven
companies such as media groups, ICT, BPO, IT outsourcing, legal
data entry and translation services.<br> <br> In 2005, while
working remotely with programmers in India, Patrick had his first
offshore outsourcing challenge. Later on he reorganized a
Belgian-Nepali IT Outsourcing company in Kathmandu as first
foreign manager sent to the Nepali office. After this assignment
he started his own IT Outsourcing Company in Nepal where he lived
and worked for 5 years.<br> <br> The Philippines provided a new
challenge; Patrick managed and grew a data entry/enrichment and
translation company. He expanded the team from 27 to 330 people
in less than 6 months. Middle management grew from 3-20 people.
Patrick gained management experience in telemarketing, business
development, HR, project management based on Prince2/PMBOK,
e-commerce, e-marketing, software & website development,
data-entry/enrichment, translations localization and legal data
(patents, trademarks). At this moment he is studying Mandarin in
China to broaden future business and offshore outsourcing
opportunities. He loves languages and speaks Dutch, English,
French, German and Spanish, has notions of Brazilian Portuguese.<br>
<br> His personal drive, language studies in China, Spain,
France, Ireland, Italy, Guatemala, Brazil and work experience
around the world made him a flexible no-nonsense manager for
positions at all levels.
</p>
<div class="social-bar">
<a href="https://www.linkedin.com/in/patrickvandun"
target="_blank"><i class="fa fa-linkedin"></i></a> <a
href="https://twitter.com/patrickvandun" target="_blank"><i
class="fa fa-twitter"></i></a> <a
href="https://plus.google.com/101815393438686212256/posts"
target="_blank"><i class="fa fa-google-plus"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="amanda" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal">
<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
</button>
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/amanda.jpg"
alt="author1">
<h1>Amanda Crouch</h1>
<p>
Amanda Crouch is considered a leading expert in the collaboration
and partnering field and advises both private and public sector
organizations to enable their critical business relationships in
reaching their full potential. She has extensive knowledge on how
to effect cultural change to enable collaboration both within
organizations and with their business partners.<br> <br> Amanda
has over 20years experience in leading worldwide research
programmes and management consulting. She has worked with many
leading IT supplier companies and client organizations in
building and implementing effective business-led IT strategies.
In particular, she has experience in identifying the impact of
change programmes on individuals and teams and leading them
through the change process. <br> <br> Alongside her successful
consulting career, Amanda has also created and managed a range of
senior management education and development programmes focused on
the areas of ITManagement, Leadership, and Skills for research
organizations such as Gartner, Forrester, and the UK Government.<br>
<br> Amanda also founded the Global Business Partnership
Alliance, which focused on enabling organizations to develop
effective vital business relationships. GBPA is a research-led
organization that specializes in best practices for building
collaboration and retaining successful business engagements.<br>
<br> Before launching GBPA, Amanda undertook in-depth research
work into the key enablers and obstacles to partnership success
across 100 organizations worldwide. This has given her unique
knowledge and insight into the challenges organizations face in
establishing effective collaborations.
</p>
<div class="social-bar">
<a href="https://www.linkedin.com/pub/amanda-crouch/2/21b/723"
target="_blank"><i class="fa fa-linkedin"></i></a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="ove" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal">
<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
</button>
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/ove.jpg"
alt="author1">
<h1>Ove Holmberg</h1>
<p>
Ove has more than 25 years of experience from IT related
assignments and projects in various roles such as project
manager, agile coach and system developer. Through his career, he
have been active in a wide variety of industries with a slight
focus gambling/betting, banking and insurance. Some companies he
has worked for, for more than six months are: Trygghetsradet,
SAS, Folksam, TryggHansa, Betsson, Unibet, Telia, ICA, ICA
Banken, Banctec, Bonnier, Cloud Nine, Posten, G4S and TUI.<br>
Distributed projects and Agile PMO setups are Ove's specialities.
This dimension to the project adds problems and possibilities
that he find challenging and exciting.<br> In 2003 he
introduced the (until then unknown) term Agile for the Swedish
IT-market.Since then he is an active Agile evangelist and mentor.
For him it means to boost the team and involve the business and
users in the project even more to get an early ROI.<br>
Agile coaching, stabile deliveries and team building is Ove's
craftsmanship. With his genuine experience from several software
development projects, he give the project a good start and a
handrail with his experience and best practices.
</p>
<div class="social-bar">
<a href="http://se.linkedin.com/in/ovehol" target="_blank"><i
class="fa fa-linkedin"></i></a> <a
href="https://twitter.com/ovehol" target="_blank"><i
class="fa fa-twitter"></i></a> <a
href="https://plus.google.com/+OveHolmberg/posts"
target="_blank"><i class="fa fa-google-plus"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="Andreas" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal">
<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
</button>
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/andreas.jpg"
alt="author1">
<h1>Andreas Brilling</h1>
<p>Andreas Brilling is an Engagement Manager at Capgemini, based
in Stuttgart. He has more than 20 years' experience in software
development projects in various international settings. Andreas
has worked 12 years for Hewlett Packard and Agilent Technologies
before he joined Capgemini. He has worked in and has led
multinational teams in Germany, US, as well as in Australia. He
has been responsible for the first major offshore project of
Capgemini, Germany by utilizing Capgemini's extensive Indian
workforce. Later he has used his experiences to broaden Capgemini
Germany's offshore capabilities in custom software development.
In that responsibility, he has been an important driver for the
creation of the OCSD (Offshore Custom Solution Development)
methodology, which enhances Capgemini Germany's development
method to meet the challenges of offshore delivery. He has
coached many project managers to offshore delivery success and
has built together with his team the Capgemini internal training
"One Team Offshore Training" and delivered it numerous times both
to German employees as well as German-Indian mixed teams.</p>
<div class="social-bar">
<a
href="https://www.linkedin.com/pub/andreas-brilling/83/5b/a7a/en"
target="_blank"><i class="fa fa-linkedin"></i></a> <a
href="https://twitter.com/AndreasBrilling" target="_blank"><i
class="fa fa-twitter"></i></a> <a
href=" https://plus.google.com/104218332915897678937/posts"
target="_blank"><i class="fa fa-google-plus"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="darel" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal">
<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
</button>
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/darel.jpg"
alt="author1">
<h1>Darel Cullen</h1>
<p>Darel has a long and broad experience of the software industry
in many different industry sectors including nuclear, space, air
traffic control, and industrial. He currently serves as Director
of R&D at Volvohandelns Utvecklings in Gothenburg, Sweden, a
company that develops software for the automotive industry. For
many years, Darel has been responsible for global software
development. He enjoys bridging cultures and creating effective
software teams.</p>
<div class="social-bar">
<a href=" https://www.linkedin.com/pub/darel-cullen/0/245/924"
target="_blank"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="Abhilash" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal">
<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
</button>
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Abhilash.jpg"
alt="author1">
<h1>Abhilash Chandran</h1>
<p>
Abhilash Chandran is an Agile Software Development Manager,
coach, and practitioner employed with Xerox Corporation. He is
also an active software engineer and actively leads teams through
software development projects. He specializes in coaching teams
using eXtreme Programming (XP), SCRUM, and Lean software
development practices and techniques. His passion is to help
people and teams discover the magic of Agile - continuous
improvement and waste reduction.<br> <br> He is an expert in
Agile Project Management, Implementing Lean Software development
practices like TDD, BDD,ATDD, Pair Programming, Clean Code, Agile
Product Management, and Agile coaching (coaching teams and groups
on Agile Methodologies - Scrum, Kanban, XP, Scaled Agile, etc.).
</p>
<div class="social-bar">
<a
href="https://www.facebook.com/c.abhilash?ref=br_rs&fref=browse_search"
target="_blank"><i class="fa fa-facebook"></i></a> 
<a href="https://twitter.com/cabhilash" target="_blank"><i
class="fa fa-twitter"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="Andy" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal">
<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
</button>
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Andy.jpg"
alt="author1">
<h1>Andy Jordan</h1>
<p>Andy Jordan is President of Roffensian Consulting Inc., an
Ontario, Canada based management consulting firm with a strong
emphasis on organizational transformation, portfolio management,
and PMOs. Andy has a track record of success in managing business
critical projects, programs, and portfolios in Europe and North
America in industries as diverse as investment banking, software
development, call centers, telecommunications, and corporate
education. Andy is an in-demand speaker and moderator who
delivers thought provoking content in an engaging and
entertaining style, and is also an instructor in project
management related disciplines. He always strives to provide
thought provoking presentations that drive his audience to
challenge accepted norms while providing actionable content that
can be applied in the real world. Andy's first full length book
'Risk Management for Project Driven Organizations' is now
available.</p>
<div class="social-bar">
<a href="https://www.linkedin.com/in/andyjordan" target="_blank"><i
class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="Erwin" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal">
<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
</button>
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Erwin.jpg"
alt="author1">
<h1>Erwin de Bont</h1>
<p>Erwin de Bont has over 20 years experience in successfully
managing many aspects of the Telecom and ICT Industry. His cup of
tea is realizing strategy. In the past, he has successfully
played operational and commercial leadership roles at board
levels (Consulting, Application Management & Outsourcing) of
companies such as Stork, CSC, Royal Burger Group and KPN. Erwin
also started and built from scratch the national mobile telecom
support organization for security services like police, fire
departments, and transformed different ICT organizations and ICT
environments as CIO. Because of his result-driven,
multi-disciplinary approach with a commercial touch, he closed
many multi-million deals and managed multiple large outsourcing
programs. During all his engagements, outsourcing or insourcing
played an important role. He has built up a track record of
outsourced and offshore engagements which are recognized both
nationally and internationally. This track record demonstrates
excellence from the suppliers' point of view as well as in
representing the customer organization. Erwin's outsourcing
experience covers multiple business areas (ICT, HR, finance,
sales, delivery, program management, logistics, and production).</p>
<div class="social-bar">
<!-- <a href="https://www.facebook.com/erwin.debont" target="_blank"><i
class="fa fa-facebook"></i></a> --> <a
href="https://www.linkedin.com/in/edebont" target="_blank"><i
class="fa fa-linkedin"></i></a> <a
href="https://twitter.com/erwindebont" target="_blank"><i
class="fa fa-twitter"></i></a> <a
href="https://plus.google.com/108785930591442189756/posts"
target="_blank"><i class="fa fa-google-plus"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="Anuj" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal">
<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
</button>
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Anuj.jpg"
alt="author1">
<h1>Anuj Kumar</h1>
<p>Anuj works as a Senior Manager with Capgemini India, based out
of Mumbai. He has been working with custom software development
based projects for the past 14 years. Most of his projects
involve multi-shore teams. He has been associated with Capgemini
India for the past 10 years. Prior to Capgemini, he has worked
with NIIT Technologies. He has a wide range of experience working
with clients across different sectors such as Finance,
Telecommunication, and Automotive from countries such as USA,
Germany, Netherlands and Norway.</p>
<div class="social-bar">
<a href="https://www.linkedin.com/pub/anuj-kumar/1/992/582"
target="_blank"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="Jean" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal">
<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
</button>
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Jean.jpg"
alt="author1">
<h1>Jean-Paul van Wieringhen Borski</h1>
<p>
With 17 years of experience in IT, Jean-Paul has spent most of
his time in international environments where he managed several
offshore delivery centers. He began his career as a software
developer at AND (Automotive Navigation Data). For AND and Closed
Cap, he worked and lived in India (Pune and Gurgaon). Currently,
Jean-Paul works at Ordina in different roles but is always
related to Application Outsourcing in combination with near- and
offshore.<br> <br> He developed an ICT Global Sourcing course for
Ordina employees and its customers.<br> <br> Currently, he works
in the Business Development department of Ordina as Product
Manager, Application Outsourcing and Alliance Manager, Near- and
Offshore.<br> <br> Jean-Paul loves to travel in India, enjoying
the people, the colorful land, and of course the food!
</p>
<div class="social-bar">
<a href="https://www.linkedin.com/in/wieringhenborski"
target="_blank"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="Herke" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal">
<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
</button>
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Herke.jpg"
alt="author1">
<h1>Herke Schuffel</h1>
<p>Herke has been in IT for almost 20 years now. He has spent most
of this time in IT services, delivering maintenance support to
customers in different branches and with technologies ranging
from COBOL to modern open source technology. He is currently
responsible for a business unit delivering application support on
custom-built software in these technologies. In this role, he
works with extended Resource Teams in Serbia and Ukraine.</p>
<div class="social-bar">
<a href="https://www.linkedin.com/in/herkeschuffel"
target="_blank"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="Henk" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal">
<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
</button>
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Henk.jpg"
alt="author1">
<h1>Henk Woolschot</h1>
<p>
Henk has been an IT expert for 23 years because of his great
professional experiences in the field of outsourcing and
offshoring. <br> <br> Currently, Henk is Engagement Director /
Delivery Head for Insurance HCL Technologies Continental Europe.<br>
<br> He is specialized in global delivery management,
outsourcing, and offshoring of application services and
infrastructure services. Since 1995, Henk has gathered a lot of
practical experience in setting up centers for Application
Services (development, testing, maintenance, renewal,
replatforming) /Application Packaging and Infrastructure Services
offshore (India, South Africa), as well as nearshore
(Romania,Hungary). Henk has worked with many Indian vendors in
different business / engagement models. Not only does he know the
customer side, but also the 'back-office factories'.
</p>
<div class="social-bar">
<a href="https://www.linkedin.com/in/hjwoolschot" target="_blank"><i
class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="Bert" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal">
<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
</button>
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Bert.jpg"
alt="author1">
<h1>Bert van Hijfte</h1>
<p>My first trip to India goes quite a long way back. In 1987, I
travelled to Delhi as a journalist to experience the country
first-hand and come back with some stories on the Indian economy
and the TATA Group in particular. Crisscrossing Rajasthan,
visiting the Rambagh Palace in Jaipur, The Lake Palace hotel in
Udaipur, and finishing at the TajMahal Palace hotel in Mumbai -
this was quite an introduction to the country. All this resulted
in an extensive introduction for the Dutch into The Indian Hotels
Company (IHCL) and its subsidiaries, collectively known as Taj
Hotels Resorts and Palaces. From then on many more visits and
publications followed for, among others, De Volkskrant, Het
Parool, and several weeklies and travel magazines. Studying the
country, I soon realized that more could be done to promote this
complex and fascinating country and 'sell' it in The Netherlands.
Reform of the economy made it clear that India was an economic
power in the making that would make its presence felt in the 21st
century.</p>
<div class="social-bar">
<a href="https://www.linkedin.com/in/bertvanhijfte"
target="_blank"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="Gayle" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal">
<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
</button>
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Gayle.jpg"
alt="author1">
<h1>Gayle Cotton</h1>
<p>Gayle Cotton is a National Emmy Award Winner and the author of
the best-selling book 'SAY Anything to Anyone, Anywhere! 5 Keys
to Successful Cross-Cultural Communication'. She is President of
Circles Of Excellence for Corporate Education and a
distinguished, highly sought after speaker. She has made keynote
presentations for over 50 Fortune 500 companies and has been a
guest on NBC News, Good Morning America, PM Magazine, PM
Northwest, Pacific Report and PBS. Gayle was the first American
to be accepted as a member of the 'European Marketing and Sales
Experts' and is a Certified Expert in the 'Executive Foundation
for International Communication'. She is a Global Resource for
Young Presidents' Organization (YPO), World Presidents'
Organization (WPO), Chief Executives Organization (CEO), and
Entrepreneurs' Organization (EO).</p>
<p>An internationally recognized authority on cross-cultural
communication, Gayle travels worldwide educating, entertaining 
and inspiring others with her fresh and unique approach. Giving
new meaning to the concept of creativity and productivity, she is
on the leading edge of business communication. She offers
customized keynote presentations and training or coaching on the
topics of Cross-Cultural Communication, Customer Service,
Diversity, Interpersonal Communication, Management & Leadership,
Presentation Skills, Sales & Negotiations, Stress Management,
Team Building and Time Management. For more information, please
visit www.GayleCotton.com</p>
<h3>Gayle's Highlights:</h3>
<ul class="ebook-ul">
<li>A National Emmy Award Winner For Educational Programs</li>
<li>Author of 'SAY Anything to Anyone, Anywhere! 5 Keys to
Cross-cultural Communication'</li>
<li>Founder and President of Circles Of Excellence - Dallas, TX,
and Geneva, Switzerland</li>
<li>First American to be accepted as a member of the 'European
Marketing and Sales Experts'</li>
<li>A Certified Expert in the 'Executive Foundation For
International Communication'</li>
<li>A Professional Speaker with the National Speakers Association
and Global Speakers Federation </li>
<li>Certified Executive Coach with the International Coach
Foundation</li>
</ul>
<div class="social-bar">
<a href="https://www.linkedin.com/in/gaylecotton" target="_blank"><i
class="fa fa-linkedin"></i></a> <a
href="https://twitter.com/gaylecotton" target="_blank"><i
class="fa fa-twitter"></i></a> <a
href="https://plus.google.com/102063141434230574739/posts"
target="_blank"><i class="fa fa-google-plus"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="Rajiv" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal">
<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
</button>
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Rajiv.jpg"
alt="author1">
<h1>Rajiv Mathew</h1>
<p>
Rajiv Mathew is the head of Marketing at Compassites Software. He
is a hands-on technology marketing & communications professional
with proven expertise in multiple facets of the
marketing spectrum. He loves branding and has been in love with it
from school days!<br> <br> Over the years, he has worked on
numerous marketing initiatives including marketing
communications, online marketing, recruitment marketing, internal
communications, public relations, events, collateral design,
sales enablement, social media strategy & brand management. Prior
to joining Compassites he worked at ThoughtWorksInc as a
marketing & communications specialist, where he was exposed to
many aspects of technology marketing. Prior to that, he was a
sales consultant at Oracle, where he sold database products into
the North America market.
</p>
<div class="social-bar">
<a href="https://www.facebook.com/jivemathew" target="_blank"><i
class="fa fa-facebook"></i></a> <a
href="https://www.linkedin.com/in/rajivmathew" target="_blank"><i
class="fa fa-linkedin"></i></a> <a
href="https://twitter.com/jivemathew" target="_blank"><i
class="fa fa-twitter"></i></a> <a
href="https://plus.google.com/+RajivMathew/posts"
target="_blank"><i class="fa fa-google-plus"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="Ged" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal">
<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
</button>
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Ged.jpg"
alt="author1">
<h1>Ged Roberts</h1>
<p>Ged Roberts is an IT honors graduate of North Staffordshire
Polytechnic. After spending two years working in the UK, he moved
to The Netherlands in 1985. During the last 30+ years, Ged has
worked for a number of internationally focused companies managing
and delivering software services across Europe, America and Asia
Pacific. His experience encompasses both service providers and
clients. Ged's knowledge spans diverse sectors such as downstream
oil and gas operations, telecommunications providers in both
fixed and mobile domains, retail credit management, and more
recently, high tech services. Ged, who specializes in large scale
operations and systems integration, is currently responsible for
ensuring delivery excellence for a unit within a major Indian IT
services company.</p>
<div class="social-bar">
<a href="https://www.linkedin.com/in/robertsged" target="_blank"><i
class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="Jennifer" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal">
<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
</button>
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Jennifer.jpg"
alt="author1">
<h1>Jennifer Kumar</h1>
<p>
Jennifer Kumar is the Managing Director of Authentic Journeys
Consultancy, based in Infopark in Kochi, India. With over 15
years' experience working, living and studying between the US and
India,she provides a unique perspective to bridging the cultural
gaps that exist in teaching, training and working between the
countries.<br> <br> Authentic Journeys Consultancy has a track
record of working with professionals operating within
all outsourcing models - onsite, offsite, offshore and hybrid in a
range of business verticals including software, IT, financial and
health care. Regardless of working with small to medium size
enterprises (SMEs) and startups or large multinational
corporations (MNCs), outcomes in corporate coaching focus on
building effective, harmonious and productive global teams
predominantly with Indian and native English speaking Western
counterparts.<br> <br> To learn more about Authentic Journeys
Consultancy, visit the website at <a
href="http://authenticjourneys.info/" target="_blank">http://authenticjourneys.info/</a>
</p>
<div class="social-bar">
<a href="https://www.facebook.com/jenkumar" target="_blank"><i
class="fa fa-facebook"></i></a> <a
href="https://www.linkedin.com/in/jenniferkumar" target="_blank"><i
class="fa fa-linkedin"></i></a> <a
href="https://plus.google.com/+JenniferKumar/posts"
target="_blank"><i class="fa fa-google-plus"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="Hugo" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal">
<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
</button>
<img
src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/Hugo.jpg"
alt="author1">
<h1>Hugo Messer</h1>
<p>
Hugo Messer has been building and managing teams around the world
since 2005. His passion is to enable people that are spread
across cultures, geographies, and time zones to collaborate.
Whether it's offshoring or nearshoring, he knows what it takes to
make a global collaboration work. To know more about Hugo, check
out his website <a href="http://www.hugomesser.com"
target="_blank">http://www.hugomesser.com</a>. You can also
read the blog or watch videos at youtube.
</p>
<h2>About Bridge Global</h2>
<p>
Bridge Global offers western software companies an
opportunity to work with IT talents from their offices in India
and Ukraine. The personal support, offered from the European
offices in the Netherlands, Germany, Switzerland, Sweden, and
Denmark, makes it easier for clients to manage their colleagues
from a distance. Since there is both an offshore and a nearshore
office, chances are high that Bridge has the talented IT employee
you are looking for. If not, the perfect candidate will be found
for you. Website: <a href="http://bridge-global.com/hire-experienced-developers"
target="_blank">http://bridge-global.com/hire-experienced-developers</a>
</p>
<div class="social-bar">
<a href="https://www.facebook.com/hugo.messer?fref=ts"
target="_blank"><i class="fa fa-facebook"></i></a> <a
href="https://www.linkedin.com/in/hugomesser" target="_blank"><i
class="fa fa-linkedin"></i></a> <a
href="https://twitter.com/hugomesser" target="_blank"><i
class="fa fa-twitter"></i></a>
</div>
</div>
</div>
</div>
</div>



</section>

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

</section>



<!-- book my copy open -->

<div class="download-ebook all-ebook-download-popup">

<div class="book-content  clearfix all-ebook-download-form">
<?php print render($page['all_ebook_download']); ?>
</div>

<div class="close-box-inner-page close-all-ebook-download">
<a href="javascript:void(0);">Close</a>
</div>
<span class="popup-close-btn">X</span>
</div>
<div class="overlay-pop-up"></div>
<!-- book my copy close -->


<!-- book my copy open -->
<div class="popupWrapper">
<div class="download-ebook book-my-copy-popup">
<div class="form-container">
<div class="book-content  clearfix book-my-copy-form">
<?php print render($page['ebook_book_my_copy']); ?>
</div>
</div>
<div class="close-box-inner-page close-book-my-copy">
<a href="javascript:void(0);">Close</a>
</div>
<span class="popup-close-btn">X</span>
</div>
</div>
<!-- book my copy close -->

<!-- Popup block for all inner pages open -->

<!-- Popup block for all inner pages close -->
<script>
jQuery(document).ready(function(){
jQuery('a').click(function() {
   var toggle_val=jQuery(this).data('toggle');
    if(toggle_val=='modal'){
     jQuery(".modal").css("overflow-y", "scroll"); 
     jQuery(".modal").css("position", "fixed"); 
    }

  });
});
</script>

<script>
jQuery(document).ready(function(){
jQuery('.menu').addClass( "navigation" );
jQuery('.views-field-description').addClass('clearfix');
// Helper function to Fill and Center the HTML5 Video
jQuery('video, object').maximage('maxcover');


/* all ebook download pop up open */
jQuery('.download-all').click(function(){
console.log("OOOOO");
jQuery('.close-all-ebook-download').show();
jQuery('.all-ebook-download-form').show();
jQuery('.all-ebook-download-popup, .all-ebook-download-wrapper, .overlay-pop-up').fadeIn(500);
//jQuery("body").css({ overflow: 'hidden' });
});

jQuery('.close-all-ebook-download a,.popup-close-btn ,.overlay-pop-up').click(function(){
jQuery('.all-ebook-download-popup, .all-ebook-download-wrapper, .overlay-pop-up').fadeOut(500);
jQuery("body").css({ overflow: 'auto' });
});
/* all ebook download pop up close */


/* book my copy pop up open */
jQuery('.book-my-copy-link').click(function(){
jQuery('.close-book-my-copy').show();
jQuery('.book-my-copy-form').show();
jQuery('.book-my-copy-popup, .popupWrapper').fadeIn(500);
jQuery("body").css({ overflow: 'hidden' });
});

jQuery('.close-book-my-copy a,.popup-close-btn').click(function(){
jQuery('.book-my-copy-popup, .popupWrapper').fadeOut(500);
jQuery("body").css({ overflow: 'auto' });
});
/* book my copy pop up close */



/* eBook */

/* Tab Index For Aweber start */


jQuery('#awf_field-67723897').attr('tabindex', -1);
jQuery('#awf_field-67723898').attr('tabindex', -1);

jQuery('#awf_field-67723897').attr('tabindex', 1);
jQuery('#awf_field-67723898').attr('tabindex', 1);

jQuery('#awf_field-67723928').attr('tabindex', -1);
jQuery('#awf_field-67723929').attr('tabindex', -1);

jQuery('#awf_field-67723928').attr('tabindex', 1);
jQuery('#awf_field-67723929').attr('tabindex', 1);

jQuery('#awf_field-67723931').attr('tabindex', -1);
jQuery('#awf_field-67723932').attr('tabindex', -1);

jQuery('#awf_field-67723931').attr('tabindex', 1);
jQuery('#awf_field-67723932').attr('tabindex', 1);

jQuery('#awf_field-67724597').attr('tabindex', -1);
jQuery('#awf_field-67724598').attr('tabindex', -1);

jQuery('#awf_field-67724597').attr('tabindex', 1);
jQuery('#awf_field-67724598').attr('tabindex', 1);

/* Tab Index For Aweber start */



/* mathew's code start */

var owl = jQuery("#owl-demo");

owl.owlCarousel({
navigation:true,
autoHeight : true,
paginationSpeed : 1000,

items : 4, //10 items above 1000px browser width
itemsDesktop : [1000,4], //5 items between 1000px and 901px
itemsDesktopSmall : [900,2], // 3 items betweem 900px and 601px
itemsTablet: [600,1], //2 items between 600 and 0;
itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option

});

var owl = jQuery("#owl-demo1");

owl.owlCarousel({
navigation:true,
autoHeight : true,
paginationSpeed : 1000,
pagination : true,
items : 1, //10 items above 1000px browser width
itemsDesktop : [1000,1], //5 items between 1000px and 901px
itemsDesktopSmall : [900,1], // 3 items betweem 900px and 601px
itemsTablet: [600,1], //2 items between 600 and 0;
itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
});

jQuery(".bookMenu > li > a").click(function(e){
var topbarH=jQuery(".top-bar").outerHeight();
var thisId=jQuery(this).attr("href");
var scrollPos=jQuery(thisId).offset().top-topbarH;
jQuery("html, body").animate({ scrollTop: scrollPos+"px" }, 600);
return false;
});

/* mathew's code end */


});
</script>

