<!doctype html>
<html class="no-js">
    
    <head>
        <meta charset="utf-8">
        <title>Alex Smiley - Web Designer</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="//ajax.googleapis.com" rel="dns-prefetch">
        <link href="assets/css/style.min.css" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700%7CRoboto:400,700,300%7CShare' rel='stylesheet'
        type='text/css'>
        <script src="assets/components/modernizr/modernizr.js"></script>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
    </head>
    
    <body id="page">
        <!-- ######## Animated fixed header ########## -->
        <header class="header" role="banner" data-smooth-scrolling="off" data-start="
        height:75vh;
        min-height: 64px;
        box-shadow: 0px 1px 3px rgba(0, 0, 0, 0);" data-73p-start="
        height:0vh;
        min-height:64px;
        box-shadow:0px 3px 6px rgba(0, 0, 0, 0.16);">
            <div class="overlay" data-start="
          background-color:rgba(0,173,239,1);" data-60p="
          background-color:rgba(0,154,213,1);">
                <div class="container">
                    <!-- ######## Personal logo ########## -->
                    <div class="logo">
                        <a href="#">
                        <h1 data-start="font-size:5rem; color:rgba(255,255,255,1);" 
                            data-30p="color:rgba(255,255,255,0);"
                            data-58p="color:rgba(0,135,187,0);"
                            data-68p="font-size:2rem; color:rgba(0,135,187,1);">
                a.Smiley</h1>
                    </a>
                    </div>
                    <!-- ######## Additional header text ########## -->
                    <div class="logo-caption" data-start="
              opacity:1;
              padding-left:0rem;
              display:table-cell" data-50p="
              opacity:0;
              padding-left:20rem;
              display:none;">
                        <p>Web Developer
                            <br />Information Architect</p>
                    </div>
                </div>
            </div>
            <!-- ######## Gooey Navigation Menu ########## -->
            <nav class="menu" style="filter:url('#shadowed-goo')");>
                <div class="container">
                    <input type="checkbox" class="menu-open" name="menu-open" id="menu-open">
                    <label class="menu-open-button" for="menu-open">
                        <span class="hamburger hamburger-1"></span>
                        <span class="hamburger hamburger-2"></span>
                        <span class="hamburger hamburger-3"></span>
                    </label>
                    <a href="#contact" class="menu-item"> <i class="fa fa-envelope"></i></a>
                    <a href="#work" class="menu-item"> <i class="fa fa-photo"></i> </a>
                    <a href="#bio" class="menu-item"> <i class="fa fa-user"></i> </a>
                </div>
            </nav>
        </header>
        <!-- ####### Start Content ####### -->
        <main class="main content" role="main" id="skrollr-body" >
            <!-- ###### About me ####### -->
            <section class="headline" data-menu-offset="-40" id="bio">
                <div class="container clear" >
                    <div class="bio-blurb">
                        <h2>Building innovative,
                            <br />interactive web experiences...</h2>
                        <p>is my passion. My name is Alex Smiley, and I'm a front-end devloper and information architect. I use my years of experience
                            in digital marketing and freelance web design to bring brands to life on the web.</p>
                        <p>My real world experience is complimented by recently acquired Masters of Information Science which has given me an opportunity
                            to expand my knowledge into areas such as social media mining, information visualization, machine learning, and information
                            architecture.</p>
                    </div>
                </div>
                <div class="container clear about">
                    <div class="stats card">
                        <div class="selfie">
                            <img src="assets/img/self-portrait-cartoon.png" alt="self-portrait">
                        </div>
                        <dl>
                            <dt>Name:</dt>
                            <dd>Alex Smiley</dd>
                            <dt>Occupation:</dt>
                            <dd>Web Designer</dd>
                            <dt>Hobbies:</dt>
                            <dd>Cooking and coding</dd>
                            <dt>Favorite color:</dt>
                            <dd class="color">#C0CA33</dd>
                        </dl>
                        <div class="listening">
                            <div>
                                <i class="fa fa-headphones"></i>
                                <ul>
                                     <?php 
                                        
                                        // Username and API key 
                                        $user_name="recursivision" ; 
                                        $api_key="d3db18c21d6828d6def966819ca11b0d" ; 
                                        
                                        if ($user_name && $api_key) { 
                                        
                                        // Retrieve a json document containing recent tracks 
                                        $recent_tracks=json_decode(file_get_contents("http://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=$user_name&api_key=$api_key&format=json"), true); 
                                        
                                        $latest_track=$recent_tracks['recenttracks']['track'][0]['name']; 
                                        $latest_artist=$recent_tracks['recenttracks']['track'][0]['artist']['#text']; 
                                        $track_url=$recent_tracks['recenttracks']['track'][0]['url']; 
                                        
                                        echo "<li class='track'>Track:&nbsp;"; 
                                        if(isset($latest_track) && !empty($latest_track)) { 
                                            echo "<a href='$track_url'>$latest_track</a>"; 
                                        } else { 
                                            echo "N/A"; 
                                        } echo "</li>"; 
                                        
                                        echo "<li class='artist'>Artist:&nbsp;"; 
                                        if(isset($latest_artist) && !empty($latest_artist)) { 
                                            echo "$latest_artist"; 
                                        } else { 
                                            echo "N/A"; 
                                        } 
                                        
                                        echo "</li>"; } 
                                        
                                   ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- ##### Skill Bars ##### -->
                    <div class="skills">
                        <ul>
                            <li>
                                <div class="skill-outer">
                                    <div class="web">
                                        <span>HTML/CSS</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="skill-outer">
                                    <div class="ux">
                                        <span>UX Design</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="skill-outer">
                                    <div class="ia">
                                        <span>Information Architecture</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="skill-outer">
                                    <div class="py">
                                        <span>Python</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="skill-outer">
                                    <div class="jscript">
                                        <span>JavaScript</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="skill-outer">
                                    <div class="phps">
                                        <span>PHP</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="skill-outer">
                                    <div class="xmls">
                                        <span>XML/XSLT</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- #### Recent Work ##### -->
            <section class="work" id="work" data-menu-offset="-10">
                <div class="container">
                    <div class="gallery clear">
                        <h2>Recent Work</h2>
                        <!-- ###### Gallery Buttons ####### -->
                        <ul>
                            <li class="gallery-banner galleryBanner_open">
                                <img src="assets/img/nearby-thumb.jpg" alt="near.by geolocation search" />
                                <span>near.by</span>
                            </li>
                            <li class="gallery-button gallery1_open">
                                <img src="assets/img/greenit-small.jpg" alt="GreenIT Logo" />
                                <span>Green IT</span>
                            </li>
                            <li class="gallery-button gallery2_open">
                                <img src="assets/img/aidsiv-small.png" alt="AIDS Visualization" />
                                <span>AIDS Poster Data Visualization</span>
                            </li>
                            <li class="gallery-button gallery3_open">
                                <img src="assets/img/feast-small.png" alt="Feast logo" />
                                <span>Feast</span>
                            </li>
                            <li class="gallery-button gallery4_open">
                                <img src="assets/img/rcd-small.png" alt="Red Carpet Day Logo" />
                                <span>Red Carpet Days</span>
                            </li>
                            <li class="gallery-button gallery5_open">
                                <img src="assets/img/mozilla-badges.png" alt="Mozilla Badges" />
                                <span>Mozilla Badges</span>
                            </li>
                            <li class="gallery-button gallery6_open">
                                <img src="assets/img/ia-small.png" alt="Site Map" />
                                <span>Information Architecture Analysis</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- ######## Gallery Popups ######### -->
            <div id="galleryBanner" class="project_description">
                <div class="popup_row">
                    <img class="popup_image" src="assets/img/nearby-popup.jpg" alt="near.by geolocation search" />
                </div>
                <div class="popup_text">
                    <h3>near.by</h3>
                    <p>
                        <span class="tags">Skills:&nbsp;</span>Web development, information architecture, AJAX, JQuery, responsive web design, CSS transforms.</p>
                </div>
                <div class="popup_buttons">
                    <div class="popup_back galleryBanner_close">
                        <i class="fa fa-chevron-left"></i>
                    </div>
                    <a href="http://ella.ils.indiana.edu/~davsmile/javascript/final.html" class="popup_more-info">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div>
            <div id="gallery1" class="project_description">
                <div class="popup_row">
                    <img class="popup_image" src="assets/img/green-it_popup.png" alt="Green IT Website" />
                </div>
                <div class="popup_text">
                    <h3>Green IT</h3>
                    <p>
                        <span class="tags">Skills:&nbsp;</span>Web development, information architecture, PHP, XSLT, responsive web design, Cascade Server, user documentation.</p>
                </div>
                <div class="popup_buttons">
                    <div class="popup_back gallery1_close">
                        <i class="fa fa-chevron-left"></i>
                    </div>
                    <a href="http://greenit.iu.edu/" class="popup_more-info">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div>
            <div id="gallery2" class="project_description">
                <div class="popup_row">
                    <img class="popup_image" src="assets/img/viral-network_popup.jpg" alt="A Viral Network - AIDS in the Media Visualization"
                    />
                </div>
                <div class="popup_text">
                    <h3>Viral Network</h3>
                    <p>
                        <span class="tags">Skills:&nbsp;</span>Information visualization, Python, JSON, Sigma.js, Gephi, Tableau.</p>
                </div>
                <div class="popup_buttons">
                    <div class="popup_back gallery2_close">
                        <i class="fa fa-chevron-left"></i>
                    </div>
                    <a href="https://s3-us-west-2.amazonaws.com/asmiley.me/aids-posters/index.html " class="popup_more-info">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div>
            <div id="gallery3" class="project_description">
                <div class="popup_row">
                    <img class="popup_image" src="assets/img/feast_popup.jpg" alt="Feast Restaurant and Catering Website" />
                </div>
                <div class="popup_text">
                    <h3>Feast</h3>
                    <p>
                        <span class="tags">Skills:&nbsp;</span>Responsive web design, information architecture, WordPress, mobile-first, Sass.</p>
                </div>
                <div class="popup_buttons">
                    <div class="popup_back gallery3_close">
                        <i class="fa fa-chevron-left"></i>
                    </div>
                    <a href="https://dl.dropboxusercontent.com/u/95292310/Feast/index.html" class="popup_more-info">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div>
            <div id="gallery4" class="project_description">
                <div class="popup_row">
                    <img class="popup_image" src="assets/img/rcd_popup.jpg" alt="IU Red Carpet Days Informational and Promotional Material"
                    />
                </div>
                <div class="popup_text">
                    <h3>Red Carpet Days</h3>
                    <p>
                        <span class="tags">Skills:&nbsp;</span>Graphic design, print, visual identity, copywriting, marketing, Adobe InDesign, Photoshop.</p>
                </div>
                <div class="popup_buttons">
                    <div class="popup_back gallery4_close">
                        <i class="fa fa-chevron-left"></i>
                    </div>
                    <a href="https://drive.google.com/file/d/0B4kbLvDh3nRNcHVzcm93NVZFdUU/view?usp=sharing" class="popup_more-info">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div>
            <div id="gallery5" class="project_description">
                <div class="popup_row">
                    <img class="popup_image" src="assets/img/mozilla-badge_popup.png" alt="Mozilla Open Badges Designs" />
                </div>
                <div class="popup_text">
                    <h3>Mozilla Open Badges</h3>
                    <p>
                        <span class="tags">Skills:&nbsp;</span>Graphic design, digital design, open badges, Adobe Illustrator, Photoshop.</p>
                </div>
                <div class="popup_buttons">
                    <div class="popup_back gallery5_close">
                        <i class="fa fa-chevron-left"></i>
                    </div>
                    <a href="https://blog.mozilla.org/creative/2013/03/08/a-chat-with-david-smiley-mozilla-design-contributor/" class="popup_more-info">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div>
            <div id="gallery6" class="project_description">
                <div class="popup_row">
                    <img class="popup_image" src="assets/img/ia_popup.jpg" alt="Information Architecture Analysis Document" />
                </div>
                <div class="popup_text">
                    <h3>Information Architecture</h3>
                    <p>
                        <span class="tags">Skills:&nbsp;</span>Information architecture, card sorting, personas, user requirements documentation, site maps, wireframing, prototyping.</p>
                </div>
                <div class="popup_buttons">
                    <div class="popup_back gallery6_close">
                        <i class="fa fa-chevron-left"></i>
                    </div>
                    <a href="https://dl.dropboxusercontent.com/u/95292310/Portfolio-Images/info-architecture-project.pdf" class="popup_more-info">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div>
            <!-- ####### Contact Form ####### -->
            <section class="contact" id="contact" data-menu-offset="-90">
                <div class="container">
                    <h2>Get in Touch</h2>
                    <p>I'm always looking for fun new projects. Send me a message if you're looking for a passionate freelancer for your next project!</p>
                    <div style="display: block;" class="form-container">
                        <span style="display: none;" class="alert">Fill all the fields!</span>
                        <span style="display: none;" class="alert">Fill all the fields!</span>
                        <form class="form-inner clear" name="contact" action="">
                            <div class="form-left">
                                <div class="label-line checked">
                                    <label class="label transition">Name</label>
                                    <input class="input" id="name" autocomplete="off">
                                    <span class="span"></span>
                                </div>
                                <div class="label-line checked">
                                    <label class="label transition">Mail</label>
                                    <input class="input" id="email" autocomplete="off">
                                    <span class="span"></span>
                                </div>
                                <div class="label-line textarea checked">
                                    <label class="label transition">Text</label>
                                    <textarea class="input" id="message"></textarea>
                                    <span class="span"></span>
                                </div>
                            </div>
                            <div class="form-right transition">
                                <span style="height: 300px; width: 300px; top: -8px; left: -51px;" class="animate"></span>
                                <div style="display: none;" class="message-sent">
                                    <span></span>Message sent</div>
                                <div class="button-overlay"></div>
                                <button class="button">
                                    <i class="fa fa-paper-plane"></i>
                                    <span>Send</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        <footer class="footer" role="contentinfo"></footer>
        <script src="assets/components/jquery/jquery.min.js"></script>
        <!-- Skrollr -->
        <script type="text/javascript" src="assets/js/skrollr.min.js"></script>
        <script type="text/javascript" src="assets/js/skrollr.menu.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.popupoverlay.js"></script>
        <!-- Scripts -->
        <script src="assets/js/scripts.min.js"></script>
       <!-- Google Analytics -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            
              	ga('create', 'UA-59201361-2', 'auto');
              	ga('send', 'pageview');
        </script>
        <!-- ######## SVG Menu Filters -->
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <defs>
            <filter id="shadowed-goo">               
                <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                <feGaussianBlur in="goo" stdDeviation="3" result="shadow" />
                <feColorMatrix in="shadow" mode="matrix" values="0 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 1 -0.2" result="shadow" />
                <feOffset in="shadow" dx="1" dy="1" result="shadow" />
                <feComposite in2="shadow" in="goo" result="goo" />
                <feComposite in2="goo" in="SourceGraphic" result="mix" />
            </filter>
            <filter id="goo">
                <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                <feComposite in2="goo" in="SourceGraphic" result="mix" />
            </filter>
            </defs>
        </svg>
         <script type='text/javascript' id="__bs_script__">//<![CDATA[
        document.write("<script async src='//HOST:3000/browser-sync/browser-sync-client.1.9.2.js'><\/script>".replace(/HOST/g, location.hostname).replace(/PORT/g, location.port));
        //]]></script>
    </body>

</html>