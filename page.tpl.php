<?php
?>
  <?php print render($page['header']); ?>

<body>
	<div id="Wrapper">
    	<div id="Container">
        	
            
        <?php if ($logo || $site_title): ?>
          <?php if ($title): ?>
            <div id="branding"><strong><a href="<?php print $front_page ?>">
            <?php if ($logo): ?>
              <img src="<?php print $logo ?>" alt="<?php print $site_name_and_slogan ?>" title="<?php print $site_name_and_slogan ?>" id="logo" />
            <?php endif; ?>
            <?php print $site_html ?>
            </a></strong></div>
          <?php else: /* Use h1 when the content title is empty */ ?>
            <h1 id="branding"><a href="<?php print $front_page ?>">
            <?php if ($logo): ?>
              <img src="<?php print $logo ?>" alt="<?php print $site_name_and_slogan ?>" title="<?php print $site_name_and_slogan ?>" id="logo" />
            <?php endif; ?>
            <?php print $site_html ?>
            </a></h1>
        <?php endif; ?>
        <?php endif; ?>
            
        	<header id="MainHeader">
            	<nav id="MainNav">
                
                 <?php if ($main_nav): print $main_nav; endif; ?>
                      
                	
                </nav>
                <div>
                
                 <?php print render($page['search']); ?>
                	
                </div>
            </header>
            <section id="HomeBanner">
            
             <?php print render($page['slideshow']); ?>
            	
            </section>
            <section id="OurServices">
            	<ul>
                	<li id="PortalService">
                    	 <?php print render($page['topbar_first']); ?>
                    </li>
                	<li id="DrupalService">
                    	 <?php print render($page['topbar_second']); ?>
                    </li>
                	<li id="OpenERPService">
                    	 <?php print render($page['topbar_third']); ?>
                    </li>
                	<li id="WebDesignService">
                    	 <?php print render($page['topbar_fourth']); ?>
                    </li>
                </ul>
            </section>
            <section id="Touch1Article">
            	<div id="GlobalImage">
                	 <?php print render($page['sidebar_first']); ?>
                </div>
                <article id="WebsiteAsAService">
                	  <?php print render($page['breadcrumb']); ?>
                       <?php print render($page['title']); ?>
                        <?php print render($page['title_suffix']); ?>
                         <?php print render($page['messages']); ?>
                          <?php print render($page['tabs']); ?>
                           <?php print render($page['action_links']); ?>
					 <?php print render($page['content']); ?>
                </article>
                <div id="GetStartedContainer">
                	
                        	 <?php print render($page['sidebar_last']); ?>
                        
                </div>
            </section>
        </div>
        <footer id="MainFooter">
        	<div>
            	<div>
                	<nav>
                    	 <?php print render($page['footer_menu']); ?>
                    </nav>
                    <small>
                    	<p>
                         <?php print render($page['footer']); ?>
                        </p>
                    </small>
                </div>
                <div>
                	<p>Connect with us:</p>
                    <div id="Twitter"> <?php print render($page['twitter_block']); ?></div>
                    <div id="Facebook">
                     <?php print render($page['facebook_block']); ?>
                    </div>
                    <div id="Linkedin">
                     <?php print render($page['linkedin_block']); ?>
                    </div>
                    <div id="Email">
                     <?php print render($page['email_block']); ?>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
