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

                                    $skills = Array(
                                      "skill_0" => "Javascript",
                                      "skill_1" => "HTML",
                                      "skill_2" => "PHP",
                                      "skill_3" => "JQuery",
                                      "skill_4" => "CSS",
                                      "skill_5" => "Ajax",
                                      "skill_6" => "ASP.Net",
                                      "skill_7" => "Java",
                                      "skill_8" => "XML",
                                      "skill_9" => "C#",
                                      "skill_10" => "CodeIgniter",
                                      "skill_11" => "HTML 5",
                                      "skill_12" => "Wordpress",
                                      "skill_13" => "JSON",
                                      "skill_14" => "C++",
                                      "skill_15" => "Mysql",
                                      "skill_16" => "Android",
                                      "skill_17" => "GIT",
                                      "skill_18" => "Zend",
                                      "skill_19" => "VB.Net",
                                      "skill_20" => "MVC",
                                      "skill_21" => "SQL",
                                      "skill_22" => "Drupal",
                                      "skill_23" => "C#.net",
                                      "skill_24" => "Magento",
                                      "skill_25" => "CSS3",
                                      "skill_26" => "Yii",
                                      "skill_27" => "Joomla",
                                      "skill_28" => "SVN",
                                      "skill_29" => "Visual Studio",
                                      "skill_30" => "Bootstrap",
                                      "skill_31" => "Photoshop",
                                      "skill_32" => "Webservices",
                                      "skill_33" => "Iphone",
                                      "skill_34" => "ASP.Net MVC",
                                      "skill_35" => "CakePHP",
                                      "skill_36" => ".net",
                                      "skill_37" => "Python",
                                      "skill_38" => "javaScript,Jquery, Ajax",
                                      "skill_39" => "ADO.NET",
                                      "skill_40" => "C",
                                      "skill_41" => "Hibernate",
                                      "skill_42" => "WCF",
                                      "skill_43" => "Angularjs",
                                      "skill_44" => "JIRA",
                                      "skill_45" => "JSP",
                                      "skill_46" => "Spring",
                                      "skill_47" => "node.js",
                                      "skill_48" => "Smarty",
                                      "skill_49" => "EntityFrameWork",
                                      "skill_50" => "mongoDb",
                                      "skill_51" => "Facebook API",
                                      "skill_52" => "Opencart",
                                      "skill_53" => "Ruby on Rails",
                                      "skill_54" => "Django",
                                      "skill_55" => "Objective C",
                                      "skill_56" => "HTML, CSS, XML",
                                      "skill_57" => "Perl",
                                      "skill_58" => "Prestashop",
                                      "skill_59" => "Responsive Design",
                                      "skill_60" => "Ruby",
                                      "skill_61" => "Silverlight",
                                      "skill_62" => "Core java",
                                      "skill_63" => "SSRS",
                                      "skill_64" => "Subversion",
                                      "skill_65" => "SOAP",
                                      "skill_66" => "Symfony",
                                      "skill_67" => "WPF",
                                      "skill_68" => "XSLT",
                                      "skill_69" => "Android SDK",
                                      "skill_70" => "ASP",
                                      "skill_71" => "J2EE",
                                      "skill_72" => "Manual Testing",
                                      "skill_73" => "Javascript, XML, JSON",
                                      "skill_74" => "LINQ",
                                      "skill_75" => "Netbeans",
                                      "skill_76" => "REST",
                                      "skill_77" => "Selenium",
                                      "skill_78" => "Servlets",
                                      "skill_79" => "Symphony",
                                      "skill_80" => "VB",
                                      "skill_81" => "Adobe Photoshop",
                                      "skill_82" => "Backbone.js",
                                      "skill_83" => "Crystal Reporting",
                                      "skill_84" => "Dreamweaver",
                                      "skill_85" => "IOS",
                                      "skill_86" => "Ms SQL",
                                      "skill_87" => "Symfony 2",
                                      "skill_88" => "Twitter bootstrap",
                                      "skill_89" => "Visual Basic",
                                      "skill_90" => "Adobe Dreamweaver",
                                      "skill_91" => "Apache",
                                      "skill_92" => "Delphi",
                                      "skill_93" => "Doctrine",
                                      "skill_94" => "EJB",
                                      "skill_95" => "FireBug",
                                      "skill_96" => "LAMP",
                                      "skill_97" => "PayPal API",
                                      "skill_98" => "SharePoint 2010",
                                      "skill_99" => "Struts",
                                      "skill_100" => "TFS",
                                      "skill_101" => "Typo3",
                                      "skill_102" => "UML",
                                      "skill_103" => "VB 6",
                                      "skill_104" => "XAML",
                                      "skill_105" => ".Net Framework",
                                      "skill_106" => "BlackBerry",
                                      "skill_107" => "Corel Draw",
                                      "skill_108" => "Eclipse",
                                      "skill_109" => "Flash",
                                      "skill_110" => "FTP",
                                      "skill_111" => "Google Analytics",
                                      "skill_112" => "jQuery mobile",
                                      "skill_113" => "Laravel",
                                      "skill_114" => "Microsoft SQL Server",
                                      "skill_115" => "QA tester",
                                      "skill_116" => "Redmine",
                                      "skill_117" => "SEO Programming",
                                      "skill_118" => "SSIS",
                                      "skill_119" => "Tomcat",
                                      "skill_120" => "XML parsing",
                                      "skill_121" => "Adobe Flash",
                                      "skill_122" => "Adobe Illustrator",
                                      "skill_123" => "Core Data",
                                      "skill_124" => "Database",
                                      "skill_125" => "Facebook Applications",
                                      "skill_126" => "Google APIs",
                                      "skill_127" => "Illustrator & InDesign",
                                      "skill_128" => "Linux/Ubuntu",
                                      "skill_129" => "ROR",
                                      "skill_130" => "SharePoint",
                                      "skill_131" => "SQL Server 2000, 2005,2008",
                                      "skill_132" => "Telerik Controls",
                                      "skill_133" => "VB script",
                                      "skill_134" => "ActionScript 2.0",
                                      "skill_135" => "Adobe Premier Pro",
                                      "skill_136" => "Apache Tomcat",
                                      "skill_137" => "Apple Push Notification service",
                                      "skill_138" => "CVS",
                                      "skill_139" => "DHTML",
                                      "skill_140" => "Dojo",
                                      "skill_141" => "Google App Engine",
                                      "skill_142" => "Illustrator",
                                      "skill_143" => "iOS SDK",
                                      "skill_144" => "J2ME",
                                      "skill_145" => "Java Android",
                                      "skill_146" => "JBoss",
                                      "skill_147" => "JDBC",
                                      "skill_148" => "JPA",
                                      "skill_149" => "jQuery UI",
                                      "skill_150" => "Js",
                                      "skill_151" => "jsf",
                                      "skill_152" => "Media Framework",
                                      "skill_153" => "NUnit",
                                      "skill_154" => "Objective-C",
                                      "skill_155" => "OOP",
                                      "skill_156" => "Pascal",
                                      "skill_157" => "Phonegap",
                                      "skill_158" => "PHP (Joomla / WordPress/Avactis)",
                                      "skill_159" => "Postgre SQL",
                                      "skill_160" => "Propel",
                                      "skill_161" => "QTP",
                                      "skill_162" => "SCADA",
                                      "skill_163" => "SharePoint 2007",
                                      "skill_164" => "SOAPUI",
                                      "skill_165" => "Twitter API",
                                      "skill_166" => "Ubuntu",
                                      "skill_167" => "Unity3d",
                                      "skill_168" => "WAMP",
                                      "skill_169" => "XML/XSLT",
                                      "skill_170" => "Quality Center 9.0",
                                      "skill_171" => "Adobe After Effects",
                                      "skill_172" => "Amazon S3",
                                      "skill_173" => "Apache Ant",
                                      "skill_174" => "Apache JMeter",
                                      "skill_175" => "Apache Solr",
                                      "skill_176" => "Artisteer",
                                      "skill_177" => "Assembler",
                                      "skill_178" => "Autodesk Maya",
                                      "skill_179" => "C++/CLI",
                                      "skill_180" => "CMS",
                                      "skill_181" => "Cordys BOP",
                                      "skill_182" => "Curl",
                                      "skill_183" => "eclipseLink",
                                      "skill_184" => "eCommerce",
                                      "skill_185" => "Enterprise Java",
                                      "skill_186" => "Express",
                                      "skill_187" => "express js",
                                      "skill_188" => "Ext JS",
                                      "skill_189" => "Facebook SDK/Graph API",
                                      "skill_190" => "Fireworks",
                                      "skill_191" => "Flex",
                                      "skill_192" => "Fuse ESB",
                                      "skill_193" => "GEO location API",
                                      "skill_194" => "GIS",
                                      "skill_195" => "GitHub",
                                      "skill_196" => "Google Maps API",
                                      "skill_197" => "Google Maps SDK",
                                      "skill_198" => "HP ALM",
                                      "skill_199" => "Illusrator CS5",
                                      "skill_200" => "Java SE",
                                      "skill_201" => "jmeter",
                                      "skill_202" => "JSP/SERVLETS",
                                      "skill_203" => "Kohana",
                                      "skill_204" => "LINQ/ Lambda expression",
                                      "skill_205" => "Lotus Notes Domino",
                                      "skill_206" => "Mantis",
                                      "skill_207" => "MATLAB",
                                      "skill_208" => "Maven",
                                      "skill_209" => "Mercurial",
                                      "skill_210" => "Meteor Js",
                                      "skill_211" => "MS Visual Studio",
                                      "skill_212" => "MVC2",
                                      "skill_213" => "MVC3",
                                      "skill_214" => "MVC4",
                                      "skill_215" => "MySQL 5",
                                      "skill_216" => "N-Hibernate",
                                      "skill_217" => "NHibernate",
                                      "skill_218" => "ObjectiveÂ­c",
                                      "skill_219" => "OSCommerce",
                                      "skill_220" => "PCRE",
                                      "skill_221" => "PHPBB",
                                      "skill_222" => "prototype",
                                      "skill_223" => "require js",
                                      "skill_224" => "sails js",
                                      "skill_225" => "Selenium Browser Automation",
                                      "skill_226" => "SharePoint 2013",
                                      "skill_227" => "SharePoint Designer",
                                      "skill_228" => "Spring 3.0",
                                      "skill_229" => "Sublime",
                                      "skill_230" => "swing",
                                      "skill_231" => "Symfony2",
                                      "skill_232" => "TDD",
                                      "skill_233" => "Tortoise SVN",
                                      "skill_234" => "Twig",
                                      "skill_235" => "Unix/Shell",
                                      "skill_236" => "VC++",
                                      "skill_237" => "w3c",
                                      "skill_238" => "webservice/WCF",
                                      "skill_239" => "WinAPI",
                                      "skill_240" => "Windows 8 Store",
                                      "skill_241" => "Windows Forms",
                                      "skill_242" => "Winforms",
                                      "skill_243" => "Wowza live streaming",
                                      "skill_244" => "xCode",
                                      "skill_245" => "XHTML/CSS",
                                      "skill_246" => "Xmanager",
                                      "skill_247" => "xpath",
                                      "skill_248" => "Zencart",
                                      "skill_249" => "Zend2",
                                      "skill_250" => "skill_3ds Max",
                                      "skill_251" => "ActionScript 3",
                                      "skill_252" => "Active Directory",
                                      "skill_253" => "Adobe Director",
                                      "skill_254" => "Adobe Flash Professional CS6",
                                      "skill_255" => "Amazon search API",
                                      "skill_256" => "Amazone Web Services",
                                      "skill_257" => "AmfPHP",
                                      "skill_258" => "Android NDK",
                                      "skill_259" => "Apache Lucene",
                                      "skill_260" => "Apache Tiles",
                                      "skill_261" => "Apache Struts",
                                      "skill_262" => "Aptana Studio",
                                      "skill_263" => "AQtime",
                                      "skill_264" => "ASM",
                                      "skill_265" => "Asterisk EPBX",
                                      "skill_266" => "Aura",
                                      "skill_267" => "AWS SDK",
                                      "skill_268" => "Azure Cloud Services",
                                      "skill_269" => "Bash scripting",
                                      "skill_270" => "Blackberry SDK",
                                      "skill_271" => "BootMetro",
                                      "skill_272" => "Borland C++",
                                      "skill_273" => "Box2D",
                                      "skill_274" => "CCNNA",
                                      "skill_275" => "Cisco WebEx",
                                      "skill_276" => "CMSMS",
                                      "skill_277" => "Cocos2d /cocos2d x",
                                      "skill_278" => "CoffeeScript",
                                      "skill_279" => "Collabion Charts",
                                      "skill_280" => "Compact Framework",
                                      "skill_281" => "Concrete5",
                                      "skill_282" => "Convas",
                                      "skill_283" => "Cordys BPM",
                                      "skill_284" => "Cordys Process factory(CPF)",
                                      "skill_285" => "CPP",
                                      "skill_286" => "CRM 5.0",
                                      "skill_287" => "Croogo",
                                      "skill_288" => "Dev Express Controls",
                                      "skill_289" => "DevExpress",
                                      "skill_290" => "DLE CMS (DataLife engine, v.8.3)",
                                      "skill_291" => "dotTrace",
                                      "skill_292" => "EJB1-2",
                                      "skill_293" => "Enterprice Library",
                                      "skill_294" => "EPiServer CMS",
                                      "skill_295" => "EurekaLog",
                                      "skill_296" => "Expression Engine",
                                      "skill_297" => "Facelets",
                                      "skill_298" => "Firebird",
                                      "skill_299" => "FIST",
                                      "skill_300" => "Flash CS5",
                                      "skill_301" => "flask",
                                      "skill_302" => "FPDF",
                                      "skill_303" => "Framework(Spring3)",
                                      "skill_304" => "FXCope",
                                      "skill_305" => "Google cloud messaging",
                                      "skill_306" => "Handlebars.js",
                                      "skill_307" => "Hibernate 4.1",
                                      "skill_308" => "Html/XHtml",
                                      "skill_309" => "HTTP/FTP",
                                      "skill_310" => "IBM lotus domino",
                                      "skill_311" => "InfoPath 2010",
                                      "skill_312" => "Infragistics controls",
                                      "skill_313" => "Infusion Soft",
                                      "skill_314" => "Internet Information Services (IIS)",
                                      "skill_315" => "iPad SDK",
                                      "skill_316" => "IPP library",
                                      "skill_317" => "IronSpeed",
                                      "skill_318" => "Java Blackberry",
                                      "skill_319" => "Java Core",
                                      "skill_320" => "Java Servlets",
                                      "skill_321" => "Java Swing",
                                      "skill_322" => "Java Web Server",
                                      "skill_323" => "Java-applets",
                                      "skill_324" => "JAX-WS",
                                      "skill_325" => "JAXB",
                                      "skill_326" => "JAXP",
                                      "skill_327" => "Jersey",
                                      "skill_328" => "JMS",
                                      "skill_329" => "JScript",
                                      "skill_330" => "JSTL",
                                      "skill_331" => "Kanbanize",
                                      "skill_332" => "Kendo ui",
                                      "skill_333" => "KnockoutJs",
                                      "skill_334" => "Kohana 2 framework",
                                      "skill_335" => "Kohana 3.2",
                                      "skill_336" => "Load Runner",
                                      "skill_337" => "Log4Net",
                                      "skill_338" => "LotusScript",
                                      "skill_339" => "Max site CMS",
                                      "skill_340" => "MCSE",
                                      "skill_341" => "Microsoft Dynamics NAV",
                                      "skill_342" => "Mobile Applications",
                                      "skill_343" => "ModelMaker CodeExplorer",
                                      "skill_344" => "Modx CMF",
                                      "skill_345" => "mootools",
                                      "skill_346" => "MOSS 2007",
                                      "skill_347" => "MS Visual Basic",
                                      "skill_348" => "MS Visual C",
                                      "skill_349" => "NestedSets",
                                      "skill_350" => "NHibernate EF",
                                      "skill_351" => "OOD/OOP",
                                      "skill_352" => "OpenGL",
                                      "skill_353" => "Pentaho",
                                      "skill_354" => "Perfecto",
                                      "skill_355" => "Photoshop CS5",
                                      "skill_356" => "Pivotal Tracker",
                                      "skill_357" => "Pixologic ZBrush",
                                      "skill_358" => "PL/SQL",
                                      "skill_359" => "Prototype js",
                                      "skill_360" => "pyside",
                                      "skill_361" => "Razor",
                                      "skill_362" => "RDLC",
                                      "skill_363" => "Red5",
                                      "skill_364" => "Reports-BIRT",
                                      "skill_365" => "Resharper",
                                      "skill_366" => "RMI",
                                      "skill_367" => "Robotium",
                                      "skill_368" => "SAP",
                                      "skill_369" => "Sass",
                                      "skill_370" => "Selenium IDE",
                                      "skill_371" => "Shell Script",
                                      "skill_372" => "Shiva 3d",
                                      "skill_373" => "Silverlight MVVM",
                                      "skill_374" => "SOA",
                                      "skill_375" => "Social Engine",
                                      "skill_376" => "socket.io",
                                      "skill_377" => "Spatial Data",
                                      "skill_378" => "Spring security",
                                      "skill_379" => "SQL Alchemy",
                                      "skill_380" => "Sql Server 2005,2008R2",
                                      "skill_381" => "SSL",
                                      "skill_382" => "SSRS Reporting",
                                      "skill_383" => "StaX",
                                      "skill_384" => "Struts 2",
                                      "skill_385" => "SUP Sybase Unwired Platfrom",
                                      "skill_386" => "TCP/IP",
                                      "skill_387" => "three js",
                                      "skill_388" => "Titan",
                                      "skill_389" => "Titanium",
                                      "skill_390" => "Titanium Appcelerator",
                                      "skill_391" => "UBERCART + API",
                                      "skill_392" => "Umbraco",
                                      "skill_393" => "Unit Testing",
                                      "skill_394" => "VMWare",
                                      "skill_395" => "VSS",
                                      "skill_396" => "WinCVS",
                                      "skill_397" => "Windows Phone",
                                      "skill_398" => "Windows Phone 7 and 8",
                                      "skill_399" => "WSS",
                                      "skill_400" => "XML SCHEMA",
                                      "skill_401" => "XML-RPC",
                                      "skill_402" => "XSL",
                                      "skill_403" => "Zend Framework 2",
                                      "skill_404" => "Selenium"
                                      );

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

    $operating_systems = Array(
      "os_0" => "Linux",
      "os_2" => "Mac Os",
      "os_3" => "Ubuntu",
      "os_4" => "Windows",
      );

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

    $db_management_systems = Array(
      "db_0" => "SQL Server",
      "db_1" => "MongoDB",
      "db_2" => "MSAccess",
      "db_3" => "MSSql",
      "db_4" => "MySql",
      "db_5" => "NoSql",
      "db_6" => "Oracle 11g",
      "db_7" => "PostgresSQL",
      "db_8" => "Sqllite"
      );

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

          jQuery.each( all_data_array, function( indexFor, valueFor ) {

            if( valueFor == value_for_search ){
              developer_unexist_flag = 1;
            }

          });

          if(developer_unexist_flag == 1 ){

            skills_string.push( value_for_search );
            os_string.push( value_for_search );
            db_string.push( value_for_search );

          }else{

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
    if (((_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {
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
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {

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
    if (((skills_intersction_flag > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {
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
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (skills_intersction_flag > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {

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
    if (((_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {
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
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {

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
    if (((skills_intersction_flag > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {
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
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (skills_intersction_flag > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {

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
    if (((_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {
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
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {

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
    if (((skills_intersction_flag > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {
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
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (skills_intersction_flag > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {

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
    if (((_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {
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
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {

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
    if (((skills_intersction_flag > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {
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
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (skills_intersction_flag > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0))) {

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
    if (((_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0))) {
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
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0))) {

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
    if (((skills_intersction_flag > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0))) {
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
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (skills_intersction_flag > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0))) {

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
    if (((_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0))) {
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
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0))) {

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
    if (((skills_intersction_flag > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0))) {
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
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (skills_intersction_flag > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0))) {

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
    if (((_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0))) {
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
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (skills_intersction_flag > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0))) {

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
    if (((skills_intersction_flag > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0))) {
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
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (skills_intersction_flag > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0))) {

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
    if (((_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) || (skills_intersction_flag > 0))) {
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
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (skills_intersction_flag > 0))) {

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
    if (((skills_intersction_flag > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1) || (_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0))) {
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
    if (((_ . intersection ( formatted_residence_string, residence_formatted_json_value ) . length > 0) && (skills_intersction_flag > 0) && (_ . intersection ( formatted_os_string, os_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_db_string, db_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_experience_string, experience_formatted_json_value ) . length > 0) && (_ . intersection ( formatted_developer_name_string, developer_name_formatted_json_value ) . length > 0)) || ((developer_intersction_flag == 1))) {

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
