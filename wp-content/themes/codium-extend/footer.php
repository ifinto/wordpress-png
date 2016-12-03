<div id="footer" class="footer">
  <div class="container">
	  <div class="row">
		  <div class="col-sm-6">
			  <p>
			  	<a href="/" class="logo-footer"><img src="<?php bloginfo('template_directory'); ?>/images/logo-main.png" alt=""></a>
			  </p>

			  <p class="copyright">
				  Copyright 2016
				  All rights reserved.
			  </p>

			  <p class="social-links">
				  <a href="#" target="_blank">Facebook</a> ·
				  <a href="#" target="_blank">Twitter</a> ·
				  <a href="#">Sign up to our newsletter</a>
			  </p>
		  </div>

		  <div class="col-sm-3">
			  <ul>
				  <li><a href="/contribute">Become a contributor</a></li>
				  <li><a href="/custom-icon-design">Custom icon design</a></li>
				  <li><a href="/api-solution">API</a></li>
				  <li><a href="/tags">Tags</a></li>
				  <li><a href="/free_icons">Free icons</a></li>
			  </ul>
		  </div>

		  <div class="col-sm-3">
			  <ul>
				  <li><a href="http://support.iconfinder.com/">Help &amp; support</a></li>
				  <li><a href="/about">About Iconfinder</a></li>
				  <li><a href="http://blog.iconfinder.com/">Blog</a></li>
				  <li><a href="/about/jobs">Jobs</a></li>
				  <li><a href="/about/termsofservice">Terms of service</a></li>
				  <li><a href="/about/privacypolicy">Privacy policy</a></li>
			  </ul>
		  </div>
	  </div>
  </div>


  

</div>

<div id="accessmobile" class="mobileon">

	<?php wp_nav_menu(array('link_before' => '<img src="/wp-content/themes/codium-extend/images/arrow.png">', 'container_class' => 'menu-header', 'theme_location' => 'primary-menu',)); ?>			

</div><!--  #accessmobile -->	

<div class="clear"></div>

<?php wp_footer() ?>


</body>

</html>