	<div class="sidebar">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar") ) : ?>
<h3>Search</h3>
<ul><li>
<?php include (TEMPLATEPATH . "/searchform.php"); ?></li>
</ul>

<h3>Categories</h3>
		<ul>
		<?php wp_list_categories('title_li='); ?>
		</ul>

<h3>Archives</h3>
		<ul>
		<?php wp_get_archives('title_li='); ?>
		</ul>

<?php wp_list_bookmarks('title_before=<h3>&title_after=</h3>&category_before=&category_after='); ?>

<h3>Meta</h3>
		<ul>
		<?php wp_register(); ?>

					<li><?php wp_loginout(); ?></li>

					<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>

					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>

					<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>

					<?php wp_meta(); ?>
		</ul>

<h3>Styles</h3>
		<ul>
			<li><a href="javascript:chooseStyle('none', 60)" checked="checked">1024</a></li>
			<li><a href="javascript:chooseStyle('800-width', 60)">800</a></li>
		</ul>
<?php endif; ?>
	</div>