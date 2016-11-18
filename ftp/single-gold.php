<?php
/*
		Template Name Posts: Золотая страница
*/
?>

<?php get_header();?>
<!-- MAIN -->
<main> 
	<div class="slider">
	</div>
	<div class="about">
		<div class="container">
			<?php 
				if (have_posts()):
					while (have_posts()):
						the_post();
			 ?>
			<span class="about-title">Золотая <?php the_title(); ?></span>
			<div class="about-info-container">
				<?php 	the_content(); ?>
			</div>
			<?php 	
				endwhile;
				endif;
			 ?>
		</div>
	</div>
</main>
<!-- END OF MAIN -->
<?php get_footer(); ?>