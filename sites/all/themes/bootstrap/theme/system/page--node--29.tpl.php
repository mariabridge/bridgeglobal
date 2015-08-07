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

<!-- RECRUITMENT KIT PAGE -->

<link rel="stylesheet" href="<?php echo $base_url;?>/sites/all/themes/bootstrap/css/recruitment-kit/reveal.css">
<link rel="stylesheet" href="<?php echo $base_url;?>/sites/all/themes/bootstrap/css/recruitment-kit/theme/default.css" id="theme">
<link rel="stylesheet" href="<?php echo $base_url;?>/sites/all/themes/bootstrap/lib/recruitment-kit/css/zenburn.css">

<!-- If the query includes 'print-pdf', include the PDF print sheet -->
<script>
if (window.location.search.match(/print-pdf/gi)) {
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = '<?php echo $base_url;?>/sites/all/themes/bootstrap/css/recruitment-kit/print/pdf.css';
    document.getElementsByTagName('head')[0].appendChild(link);
}
</script>
<!--[if lt IE 9]>
    <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/lib/recruitment-kit/js/html5shiv.js"></script>
<![endif]-->



<div class="copy-logo">
    <img alt="" src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/recruitment-kit/copyRight.jpg">
    Copyright <?php echo date('Y'); ?> All rights reserved </br> Bridge Global
</div>


<div class="reveal">

            <!-- Any section element inside of this container is displayed as a slide -->
            <div class="slides">
                <section>
                    <div class="logo"><img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/recruitment-kit/bridge_logo.png" alt="Bridge Logo"></div>
                    <h1>RECRUITMENT KIT</h1>
                    <div class="cycle-outer">
                        
                   
                    <div class="life-cycle"></div>
                    <div class="life-text"><h2>Basic Employee <br>Lifecycle</h2></div>
                    
                    </div>

                </section>

                <section>
                    <section class="recruitment1">
                        <h1>RECRUITMENT</h1>
                        <h3>1. Recruitment Steps</h3>
                        <ul class="steps">
                            <li>
                                Prepare Scorecard
                            </li>
                            <li>
                                Create a vacancy/Job profile
                                <ul>
                                    <li>Fancy job title</li>
                                    <li>Job description & Responsibilities </li>
                                    <li>Job Requirements</li>
                                    <li>The team</li>
                                    <li>The company</li>
                                    <li>Employee benefits</li>
                                    <li>Contact details</li>

                                </ul>
                            </li>
                            <li>
                                Sourcing system
                                <ul>
                                    <li>Employee Reference</li>
                                    <li>Mass mailer from search portal</li>
                                    <li>Job posting in search portal</li>
                                    <li>Head hunting / Candidate reference</li>
                                    <li>Post on career page in Bridge website</li>
                                    <li>Post on Facebook, Linkedin, Stackoverflow</li>
                                    <li>Share the profile with employees and ask them to share/post in their network</li>
                                    <li>External Recruiters: Contact Consultancies, Suppliers, Agencies</li>

                                </ul>
                            </li>

                        </ul>




                    </section>


                </section>

                <section>

                    <section>

                        <h3>2. Recruitment Cycle</h3>
                        <ul class="rsteps">
                            <li>Initial Screening by HR - Telephonic</li>
                            <li>Top - grading</li>
                            <li>Bridge CV Format</li>
                            <li>Analytical/Technical Test</li>
                            <li>Technical Interview</li>
                            <li>Management Interview - Competencies (Role-based and Culture/Core values-based)</li>
                            <li>Selection - Giving offer</li>
                            <li>Hire</li>

                        </ul>

                        

                    </section>

                    <section>
                        <h2>1. Initial Screening</h2>
                        <p>Why? The screening process is done initially by the HR to evaluate the following:</p>
                        <ul class="decimal">
                            <li>Job Experience</li>
                            <li>Career goals</li>
                            <li>Professional strengths</li>
                            <li>Communication</li>
                            <li>Determine if  candidate is really fit for the role and our company</li>

                        </ul>
                        <p style="padding-top:20px;">The hiring process is done using '<b>Top grading</b>' method.</p>
                        <img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/recruitment-kit/initial.png" alt="screening" >

                        

                    </section>

                    <section class="grading">
                        <h2>2. Top-grading</h2>
                        <p>Why? To identify and select potential A-players </p>
                        <p>WHO IS AN A PLAYER ?</p>
                        <ul class="steps">
                            <li>Ambitious to learn and grow</li>
                            <li>Takes ownership of his/her work</li>
                            <li>Thinks along with the client and participates in discussions pro-actively</li>
                            <li>Makes a strong effort to find out solutions using all available resources</li>
                            <li>Has a good presence of mind and is a good decision maker</li>
                            <li>Is updated on latest concepts in the field</li>
                            <li>Exhibits high dynamism and a 'can do' attitude</li>
                            <li>Can share ideas in a clear manner</li>
                            <li>Is a people builder</li>
                            <li>Recognizes own weaknesses along with strengths</li>
                            <li>An active listener</li>
                            <li>Remains passionate and motivated</li> 
                            <li>Remains focused under pressure</li>



                        </ul>


                        

                    </section>

                    <section>
                        <h2>3. Bridge CV format</h2>
                        <p>The candidate has to enter their career details in our database - Bridge Teams (<a href="http://bridge-teams.com" target="blank">http://bridge-teams.com/</a>). This is the CV with which we communicate 
                            with the clients. Scheduling interview is done through this portal. The technical interview report and the management 
                            feedback for the particular candidate is monitored here, which makes it easy for the clients to get a clear overview about the proposed developer.</p>
                        <img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/recruitment-kit/cv.jpg" alt="cv" >
                        

                    </section>

                    <section>
                        <h2>4. Analytical Test</h2>
                        <p>The Candidate is given a real time project Requirement for Analysis. <br>
This will be a project which is already analyzed and developed inhouse. The technical team expects all possible questions and clarifications from the candidate. The duration for this test is 30 minutes and the candidate can jot down 
his understanding and clarifications if any, of the requirement.
</p>
                        <img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/recruitment-kit/test.png" alt="test" >
                        

                    </section>

                    <section>
                        <h2>5. Technical Interview</h2>
                        <p>The technical interview is done by a panel that comprises of the respective technology lead and the process manager. 
                            This process involves a detailed study about the candidate's experience, depth of knowledge, attitude and principles. This round will also involve a coding test or review of previous code.<br>
                            <br>
                            Candidates who fare well in this round are qualified for the final round. 
                        </p>
                        <img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/recruitment-kit/interview.png" alt="test" >
                        

                    </section>

                    <section>
                        <h2>6. Management Round</h2>
                        <p>With the feedback acquired from the previous rounds, the panel that comprises of the top management will then assess the candidate and decide if the candidate is an A player. <br>
                            The assessment is made based on a list of competencies, both Role-based and Company values-based, defined for each role.
                        </p>
                        <img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/recruitment-kit/guaranteed.png" alt="guaranteed" >
                        

                    </section>

                    <section>
                        <h2>7. Selection</h2>
                        <ul class="decimal">

                            <li>Reference & Background checks</li>
                            <li>Confirm the Notice period/ Date of joining</li>
                            <li>Job Offer</li>

                        </ul>
                        <p><img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/recruitment-kit/selection-new.jpg" alt="selection" ></p>

                        

                    </section>

                    <section>
                        <h2>8. Hire</h2>
                        <ul class="decimal">
                            <li>Sign the employment agreement and other relevant documents.</li>
                            <li>Checklist of documents - education certificates, experience letters, Identification proof,address proofs</li>



                        </ul>
                        <p><img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/recruitment-kit/sign.png" alt="sign" ></p>



                    </section>




                </section>


                <section>
                    <section class="onboard">
                        <h1>Onboarding</h1>
                        <ul class="decimal">
                            <li>Why? </li>
                            <li>This is done to ensure:  
                                <ul>

                                    <li>Smooth On-boarding</li>
                                    <li>Maximize success in job</li>
                                    <li>Make candidates happy <br>and comfortable</li>

                                </ul>
                            </li>
                            <li>Welcome Note</li>
                            <li>HR orientation:
                                <ul>
                                    <li>About the company, mission,values, <br>people, process and policies</li>
                                    <li>Job Profile: Roles and Responsibilities</li>
                                    <li>Evaluation process</li>

                                </ul>
                            </li>
                            <li>Technical Induction:
                                <ul>
                                    <li>Job expectation</li>
                                    <li>Work Process</li>
                                    <li>Client introduction</li>

                                </ul>
                            </li>
                        </ul>
                        

                        
                    </section>

                    <section>
                        <h2>Onboarding Rules</h2>
                        <ul class="decimal">
                            <li>Welcome Kit</li>
                            <li>Prepare employment agreement, salary account and other relevant docs</li>
                            <li>Setup workstation</li>
                            <li>Create company email id and skype address</li>
                            <li>Introduce the department heads</li>
                            <li>Introduce to colleagues</li>
                            <li>Access to Project Management Tool (PMT)</li>
                            <li>Profile and theme picture on Bridge website.</li>
                            <li>Email the Leave policy and the company assigned holiday list</li>
                            <li>Assign a mentor and make plan for each week</li>
                            <li>Strict Evaluation/Feedback during probation period - 90 days</li>

                        </ul>
                        <p>
                            <img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/recruitment-kit/onboarding.png" alt="on board" >
                        </p>
                    </section>



                </section>


                <section>

                    <section>
                        <h1>DEVELOPMENT & RETENTION</h1>
                        <h2>1. Development</h2>
                        <p>The following Grid shows the how the organizations can use succession    planning process to evaluate Employee and groom them for future     Leadership roles.</p>
                        <img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/recruitment-kit/development.jpg" alt="development" >

                        
                    </section>

                    <section>
                        <h2>2. Retention</h2>
                        <ul class="decimal">
                            <li>Employee-friendly policies</li>
                            <li>Quarterly Personal Development Meeting to motivate and improve the Employee performance</li>
                            <li>Regular Technical training - On the job and Off the job</li>
                            <li>Happiness survey - To identify why people love their job & company</li>
                            <li>Open-door policy: Encourages employees to speak frankly with the managers.</li>
                            <li>Regular coaching by senior/mentor</li>
                            <li>Sessions /R&D meeting to communicate company's mission, future development and core values</li>
                            <li>Awards & Events - 'Star performer of the quarter', Quarterly trip, Outdoor sports and Indoor games.</li>
                            <li>Appreciation - For their contribution to company's success, initiatives.</li>
                            <li>Salary - Follow a transparent appraisal process.</li>

                        </ul>
                        <p>
                            <img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/recruitment-kit/training.png" alt="trainign" >
                        </p>
                        
                    </section>

                </section>

                <section>
                    <h1>FEEDBACK & EVALUATION</h1>
                    <ul class="decimal">
                        <li>Frequent evaluations:
                            <ul>
                                <li>One-to-one meeting with HR & Process Manager to measure performance.</li>
                                <li>Monthly client evaluation in PMT.</li>
                                <li>Monthly mentor-mentee evaluation in PMT.</li>

                            </ul>
                        </li>
                        <li>Give open feedback</li>
                        <li>Confirm observations and agreements in writing. </li>
                    </ul>
                    <p><img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/images/recruitment-kit/feed-avg.png" alt="feedback" ></p>
                </section>

                <section>
                    <h1>EXIT FORMALITIES</h1>
                    <ul class="decimal">
                        <li>Who's leaving? Inform the respective client, team and the managers.</li>
                        <li>Mention the reason for leaving - Personal reasons or company decides to discontinue the services</li>
                        <li>HR should accept the resignation of an employee in writing.</li>
                        <li>Serve notice period: 1 month for junior/medior and 2 months for seniors.</li>
                        <li>Find immediate replacement or transfer work to the next person in-charge.</li>
                        <li>Knowledge transfer</li>
                        <li>On the employees' last day of employment, the HR must:
                            <ul>
                                <li>Handover the relieving order and experience letter, after getting the 'No objection' consent from all departments.</li>
                                <li>Collect all company property including ID card, business card, library books, Office keys, Equipments (laptop,mobile devices,etc).</li>
                                <li>Deactivate company email , Skype and PMT.</li>
                                <li>Update HR records and remove access from all docs shared (via google, shared network)</li>
                                <li>Ensure the status in FB, linked in and other social media are updated and company details are removed.</li>
                            </ul>
                        </li>
                        <li>Thank the colleague for their contribution to the company success.</li>

                    </ul>
                </section>

            </div>

        </div>


<script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/lib/recruitment-kit/js/head.min.js"></script>
<script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/js/recruitment-kit/reveal.js"></script>

<script>
//Full list of configuration options available here:
//https://github.com/hakimel/reveal.js#configuration
Reveal.initialize({
     controls: true,
     progress: true,
     history: true,
     center: true,
     theme: Reveal.getQueryHash().theme, // available themes are in /css/theme
     transition: Reveal.getQueryHash().transition || 'default', // default/cube/page/concave/zoom/linear/fade/none

     // Parallax scrolling
     // parallaxBackgroundImage: 'https://s3.amazonaws.com/hakim-static/reveal-js/reveal-parallax-1.jpg',
     // parallaxBackgroundSize: '2100px 900px',

     // Optional libraries used to extend on reveal.js
     dependencies: [
         {src: '<?php echo $base_url;?>/sites/all/themes/bootstrap/lib/recruitment-kit/js/classList.js', condition: function() {
                 return !document.body.classList;
             }},
         {src: '<?php echo $base_url;?>/sites/all/themes/bootstrap/plugin/recruitment-kit/markdown/marked.js', condition: function() {
                 return !!document.querySelector('[data-markdown]');
             }},
         {src: '<?php echo $base_url;?>/sites/all/themes/bootstrap/plugin/recruitment-kit/markdown/markdown.js', condition: function() {
                 return !!document.querySelector('[data-markdown]');
             }},
         {src: '<?php echo $base_url;?>/sites/all/themes/bootstrap/plugin/recruitment-kit/highlight/highlight.js', async: true, callback: function() {
                 hljs.initHighlightingOnLoad();
             }},
         {src: '<?php echo $base_url;?>/sites/all/themes/bootstrap/plugin/recruitment-kit/zoom-js/zoom.js', async: true, condition: function() {
                 return !!document.body.classList;
             }},
         {src: '<?php echo $base_url;?>/sites/all/themes/bootstrap/plugin/recruitment-kit/notes/notes.js', async: true, condition: function() {
                 return !!document.body.classList;
             }}
     ]
});

</script>
<script type="text/javascript" src="<?php echo $base_url;?>/sites/all/themes/bootstrap/plugin/recruitment-kit/highlight/highlight.js"></script>
<script type="text/javascript" src="<?php echo $base_url;?>/sites/all/themes/bootstrap/plugin/recruitment-kit/zoom-js/zoom.js"></script>
<script type="text/javascript" src="<?php echo $base_url;?>/sites/all/themes/bootstrap/plugin/recruitment-kit/notes/notes.js"></script>
