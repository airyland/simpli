<?php get_header(); ?>
<?php get_sidebar(); ?>

	<?php if (have_posts()) : ?>

		<h1>Search Results</h1>


			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>


<?php while (have_posts()) : the_post(); ?>

		<div class="entry">
<h2><span><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></span><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			
			<div class="comment"><?php the_tags('Tags: ', ', ', '<br />'); ?>Posted in <?php the_category(', ') ?> | <a href="<?php comments_link(); ?>">Comments (<?php comments_number('0','1','%'); ?>)</a><?php edit_post_link('Edit', ' | ', ''); ?></div>
		</div>

<?php comments_template(); ?>
		<?php endwhile; ?>


			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>

	<?php else : ?>

		<h1>No results</h1>
		<p>No posts found. Try a different search?</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>
          
<?php get_footer(); ?>