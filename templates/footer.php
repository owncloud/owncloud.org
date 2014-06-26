<footer class="content-info" role="contentinfo">
<div class="container">   
   <div class="row">
     <div class="col-sm-4">
        <div class="footer-nav">
          <h4>About ownCloud</h4>
          <ul id="menu-about" class="menu">
            <li class="menu-contact"><a href="<?php get_bloginfo('url'); ?>/contact/">People</a></li>
            <li class="menu-history"><a href="<?php get_bloginfo('url'); ?>/history/">History</a></li>
            <li class="menu-security"><a href="<?php get_bloginfo('url'); ?>/security/">Security</a></li>
            <li class="menu-design"><a href="<?php get_bloginfo('url'); ?>/contribute/design/">Design</a></li>
          </ul>
        </div>
     </div>
     <div class="col-sm-4">
        <div class="footer-nav">
          <h4>Resources</h4>
          <ul id="menu-support-and-documentation" class="menu">
            <li class="menu-admin-manual"><a href="<?php echo $DOCUMENTATION_ADMIN; ?>">Admin manual</a></li>
            <li class="menu-user-manual"><a href="<?php echo $DOCUMENTATION_USER; ?>">User manual</a></li>
            <li class="menu-user-manual"><a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>">Developer manual</a></li>
          </ul>
        </div>
     </div> 
     <div class="col-sm-4">
        <div class="footer-nav">
          <h4>Interact</h4>
          <ul id="menu-interact" class="menu">
            <li class="social-icons">
                <a href="https://plus.google.com/102805591550379137055/about"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/googleplus.png"></img></a>
                <a style="margin: 0 10px;" href="https://www.facebook.com/owncloud"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/facebook.png"></img></a>
               <a href="https://twitter.com/ownClouders"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/twitterround.png"></img></a>
            </li>
            <li class="menu-irc-channel"><a href="http://webchat.freenode.net/?channels=owncloud">IRC Channel</a></li>
            <li class="menu-mailing-list"><a href="http://mailman.owncloud.org/mailman/listinfo/user">Mailing List</a></li>
            <li class="menu-bug-tracker"><a href="https://github.com/owncloud/core/issues">Bug Tracker</a></li>
            <li class="menu-forums"><a href="http://forum.owncloud.org/">Forums</a></li>
          </ul>
        </div>
     </div>
   </div>
   <div class="row">
    <div class="col-lg-12 footer-text">
        <p>&copy; <?php echo date('Y'); ?> ownCloud.org</p>
    </div>
  </div>
</div>
</footer>

<?php wp_footer(); ?>
