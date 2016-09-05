<script>
    jQuery(function($) { 
        /**
        $('.dropdown').hover(function() {
            $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown(); }, 
        function() { $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp(); 
        }); $('.dropdown > a').click(function(){ location.href = this.href; }); 
        */
        var footerTags = $( "#footer" );

  if ( footerTags.parent().is( "a" ) ) {
   // footerTags.unwrap();
  }
        
    
    });
    </script>
    <?php
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    ?>
<div id="website">
<div id="top-section" class="<?php
     if (strpos($url,'alaska') !== false) {
                print"alaska";
            }
     if (strpos($url,'washington-state') !== false) {
                print"washington-state";
            }
            
     if (strpos($url,'inland-empire') !== false) {
                print"inland-empire";
            }       
            
      if(strpos($url,'oregon') !== false){
                print "oregon";
            }      
     
      if(strpos($url,'northwest-office') !== false){
                print "northwest-office";
            }        
     ?>">
    
    <?php if (!empty($site_name)): ?>
        <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
            <?php
            
            
            if (strpos($url,'alaska') !== false) {
                print"Alaska ";
            }
            if (strpos($url,'washington-state') !== false) {
                print"Washington ";
            }
            
            if (strpos($url,'inland-empire') !== false) {
                print"Inland Empire ";
            }
            if(strpos($url,'oregon') !== false){
                print "Oregon";
                   
            }
            if (strpos($url,'northwest-office') !== false) {
                print"Northwest ";
            } 
            ?>
            <?php print $site_name; ?></a>
      <?php endif; ?>
        
    <?php if (!empty($site_slogan)): ?>
      <p class="lead slogan"><?php 
      if (drupal_is_front_page()){print $site_slogan;}
      elseif(strpos($url,'alaska') !== false){
          print "The Last Frontier";
      }  
      elseif(strpos($url,'washington-state') !== false){
          print "The Evergreen State";
      } 
      
      elseif(strpos($url,'inland-empire') !== false){
          print "Inland Northwest";
      } 
      
      elseif(strpos($url,'oregon') !== false){
          print "Pacific Wonderland";
      }
      
      elseif (strpos($url,'northwest-office') !== false) {
                print"Alaska, Washington, Oregon and Inland Empire ";
            } 
            
      else{
          print $site_slogan;
      }      
      ?></p>
    <?php endif; ?>

           
      <div id="custom-search-block" class="col-xs-6 col-md-3">
          <?php
          $block = module_invoke('search', 'block_view', 'search');
          print render($block);
          ?>
          <div id="login-link">
              <?php
              if(!user_is_logged_in()){
                  print "<a href='/user'>Login </a> ";
                  print "<a href='/user/register'>Register</a>";
              }
              ?>
              
          
          </div>
          
           <?php if (!empty($secondary_nav)): ?>
      <div id="secondary-user-menu">
            <?php print render($secondary_nav); ?>
      </div>
             <?php endif; ?>
      </div>
      
<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
  <div class="<?php print $container_class; ?>">
    <div class="navbar-header">
      <?php if ($logo): ?>
        <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

      

      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <?php endif; ?>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse">
        <nav role="navigation">
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
          
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>
  </div>
</header>
      
</div>
<div class="main-container <?php print $container_class; ?>">
   
  <header role="banner" id="page-header">
    
    <?php print render($page['header']); ?>
  </header> <!-- /#page-header -->

  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
        
        
        
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>

    <div id="footer">
<?php if (!empty($page['footer'])): ?>
  <footer class="footer <?php print $container_class; ?>">
    <?php print render($page['footer']); ?>
  </footer>
<?php endif; ?>
    </div>
    
</div>