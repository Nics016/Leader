<?php 
get_header();
?>

<?php 
if (is_category('Архив')):
?>

<!-- MAIN -->
<main> 
	<?php 
		// запрашиваем категорию "Архив""
		$catt = get_category($cat);
		// getting Fields
		$archive_title = get_field("archive_title", $catt);
		$archive_video_link = get_field("archive_video_link", $catt);
		$archive_photos = get_field("archive_photos", $catt);
	 ?>
	<!-- ARTICLE -->
	<div class="article">
		<div class="container clearfix">
			<div class="article-info">
				<span class="article-info-title">
					<?= $archive_title ?>
				</span>
				<span class="article-info-text">
					<?php echo category_description(); ?>
				</span>
			</div>

			<div class="article-right">
				<div class="article-right-video clearfix">
					<iframe class="youtube" width="720" height="480" src="<?= $archive_video_link ?>" frameborder="0" allowfullscreen></iframe>
				</div>

				<div class="article-right-photos clearfix">
				<?php 
					// отображаем фотки
					if ($archive_photos):
					foreach($archive_photos as $photo):
				 ?>
					<a class="article-right-photos-element" href="#">
						<img src="<?= $photo['url'] ?>" class="article-right-photos-element-pic">
					</a>
				<?php 
					endforeach;
					endif;
				 ?>
				</div>
			</div>
		</div>
	</div>
	<!-- END OF ARTICLE -->

	<!-- CATEGORIES -->
	<div class="categories">
		<div class="container clearfix">
		<?php 
			if (have_posts()):
				while (have_posts()):
					the_post();
		 ?>
			<a class="categories-element" href="<?php the_permalink(); ?>">
				<img src="<?php the_post_thumbnail_url(); ?>" class="categories-element-pic">
			</a>
		<?php 
				endwhile;
			endif;
		 ?>
		</div>
	</div>
	<!-- END OF CATEGORIES -->
</main>
<!-- END OF MAIN -->
<?php 
endif; 
get_footer();
?>
