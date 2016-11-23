<?php get_header();?>
<!-- MAIN -->
<main> 
	<?php 
		if (have_posts()):
			while(have_posts()):
				the_post();
	 ?>
	<!-- ARTICLE -->
	<div class="single-article-title">
		<div class="container clearfix">
			<span class="single-article-title">
				<?php the_title(); ?>
			</span>
			<div class="single-article-textbox">
				<span class="single-article-text clearfix">
					<img src="<?php the_post_thumbnail_url(); ?>" class="single-article-pic">
					<?php the_content(); ?>
				</span>
			</div>
		</div>
	</div>
	<?php 
			endwhile;
		endif;
	 ?>
</main>
<!-- END OF MAIN -->
<?php get_footer(); ?>