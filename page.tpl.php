<?php
?>
 <?php print render($page['header']); ?>

	<div id="Wrapper">
    	<div id="Container">
        	<div id="header">
        <div id="logo-floater">
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
        </div>

       
      </div>
        	<header id="MainHeader">
            	<nav id="MainNav">
                	 <?php if ($primary_nav): print $primary_nav; endif; ?>
        <?php if ($secondary_nav): print $secondary_nav; endif; ?>
                </nav>
                <div>
                	<form method="get" id="SiteSearch">
                    	<div>
                        	<input type="search" placeholder="search..." name="SiteSearch" />
                            <input type="submit" name="SearchButton" />
                        </div>
                    </form>
                </div>
            </header>
            <?php if ($page['site_slideshow']): ?>
            <section id="HomeBanner">
            	<?php print render($page['sidebar_second']); ?>
                
            </section>
             <?php endif; ?>
            
            <?php if ($page['top_first']): ?>
            <section id="OurServices">
            				 
        <div id="sidebar-first" class="sidebar">
				<?php print render($page['top_first']); ?>
                </div>
      <?php endif; ?>
      
       <?php if ($page['top_second']): ?>
        <div id="sidebar-second" class="sidebar">
				<?php print render($page['top_second']); ?>
                </div>
      <?php endif; ?>
                
                 <?php if ($page['top_third']): ?>
        <div id="sidebar-third" class="sidebar">
				<?php print render($page['top_third']); ?>
                </div>
      <?php endif; ?>
                
                
            </section>
            <section id="Touch1Article">
            
             <?php if ($page['sidebar_first']): ?>
        <div id="sidebar-first" class="sidebar">
          <?php print render($page['sidebar_first']); ?>
        </div>
        <div id="GlobalImage"></div>
        
      <?php endif; ?>
            	
          <article id="WebsiteAsAService">
                	<?php print $breadcrumb; ?>
          <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
          <a id="main-content"></a>
          <?php if ($tabs): ?><div id="tabs-wrapper" class="clearfix"><?php endif; ?>
          <?php print render($title_prefix); ?>
          <?php if ($title): ?>
            <h1<?php print $tabs ? ' class="with-tabs"' : '' ?>><?php print $title ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php if ($tabs): ?><?php print render($tabs); ?></div><?php endif; ?>
          <?php print render($tabs2); ?>
          <?php print $messages; ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
          <div class="clearfix">
            <?php print render($page['content']); ?>
                    
                </article>
               
                	 <?php if ($page['sidebar_second']): ?>
        <div id="sidebar-second" class="sidebar">
          <?php print render($page['sidebar_second']); ?>
        </div> <div id="GetStartedContainer"></div>
      <?php endif; ?>
                </div>
            </section>
        
        <footer id="MainFooter">
        	<div>
            	<div>
                	<nav>
                    	<?php print render($page['footer']); ?>
                    </nav>
                    <small>
                    	
                    </small>
                </div>
                <?php print render($page['social']); ?>
            </div>
        </footer>
    </div>

