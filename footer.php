	<div class="clear50">&nbsp;</div>
	<div class="footer">
			<div class="footnav"><a class="first" href="<?php echo get_option('home'); ?>" title="Your blog initials can go here">JL</a>

<?php
$pages = wp_list_pages('depth=1&title_li=&echo=0');
		$pages2 = preg_split('/(<li[^>]*>)/' ,$pages);
foreach($pages2 as $var){
echo str_replace('</li>', '', $var);
}
		?></div>
			<div class="footnav">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer") ) : ?>
				<div class="linksleft">
					<h3>Recent Updates</h3>
					<?php wp_get_archives('title_li=&type=postbypost&limit=4'); ?>
					</ul>
				</div>
				<div class="linksleft">
					<h3>Monthly</h3>
					<ul>
						<?php wp_get_archives('title_li=&limit=4'); ?>
					</ul>
				</div>
				<div class="linksleft">
					<h3>Weekly</h3>
					<ul>
						<?php wp_get_archives('title_li=&type=weekly&limit=3'); ?>
					</ul>
				</div>
				<div class="linksleft">
					<h3>Daily</h3>
					<ul>
						<?php wp_get_archives('title_li=&type=daily&limit=4'); ?>
					</ul>
				</div>
<?php endif; ?>
				<div class="clearer">&nbsp;</div>
			</div>
			<p>&copy; <?php echo date('Y');?> <?php bloginfo('name'); ?> | <a href="http://www.themelab.com/2008/04/25/just-lucid-free-wordpress-theme-54/" title="Just Lucid WordPress Theme">Just Lucid</a> theme by <a href="http://demusdesign.com">DemusDesign</a>, <a href="http://www.themelab.com" title="Free WordPress Themes at Theme Lab">Theme Lab</a> | Powered by <a href="http://wordpress.org">WordPress</a> </p>
	</div>
</div>
</div>
	
<?php wp_footer(); ?>
</body>
</html>