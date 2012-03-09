<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="entry">
<h2><span><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></span><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<?php the_content('Read the rest of this entry &raquo;'); ?>

<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>


			<div class="comment"><a href="<?php comments_link(); ?>">Comments (<?php comments_number('0','1','%'); ?>)</a> | <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Permalink</a><?php edit_post_link('Edit', ' | ', ''); ?></div>
		</div>

<?php comments_template(); ?>
		<?php endwhile; else : ?>

		<h1>Not Found</h1>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>
          
<?php get_footer(); ?>