<?php
  // import WP header
  require('./wp-custom-page.php');
  echo nicolariusHeader("Home");
?>


<div id="wrapper">
	<div id="homepromo">
		<a href="http://shop.nicolarius.co.uk/"><img src="http://nicolarius.co.uk/homepage_images/home_promo.jpg" alt="Vintage tapestry cushions now available in the shop" /></a>
	</div>
	

	
	<div id="contentpromo">
		<h1 class="hompagesectiontitle">
			<a href="http://www.nicolarius.co.uk/blog/">Blog</a>
		</h1>
		<a href="http://www.nicolarius.co.uk/blog/"><img src="http://nicolarius.co.uk/homepage_images/blog_promo.jpg" alt="Read the blog" /></a>
		<p>Keep up to date and read all about my projects on the blog.</p><br /><a href="http://www.nicolarius.co.uk/blog/">Read the blog</a>
	</div>
	
	<div id="contentpromo">
		<h1 class="hompagesectiontitle">
			<a href="http://nicolarius.tumblr.com/">Tumblr</a>
		</h1>
		<a href="http://nicolarius.tumblr.com/"><img src="http://nicolarius.co.uk/homepage_images/tumblr_promo.jpg" alt="Look at Tumblr" /></a>
		<p>Beautiful places and things that inspire me.</p><br /><a href="http://nicolarius.tumblr.com/">Look at Tumblr</a>
	</div>
	
	<div id="contentpromo">
		<h1 class="hompagesectiontitle">
			<a href="http://shop.nicolarius.co.uk/">Shop</a>
		</h1>
		<a href="http://shop.nicolarius.co.uk/"><img src="http://nicolarius.co.uk/homepage_images/shop_promo.jpg" alt="Visit the shop" /></a>
		<p>Buy lovely handmade items for sale in my shop.</p><br /><a href="http://shop.nicolarius.co.uk/">Visit the shop</a>
	</div>
	
</div>



<?php
  // import WP footer
  echo nicolariusFooter();
?>