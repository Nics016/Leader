<?php 

/*
Template Name Posts:О проекте
*/

get_header();

if ( have_posts() ):
	while ( have_posts() ): 
		the_post();

?>
<!-- MAIN -->
<main>
	<!-- PROJECT -->
	<?php 
	$president_avatar = get_field("president_avatar");
	$president_avatar = $president_avatar["url"];

	$president_name = get_field("president_name");
	?>
	<div class="project">
		<div class="container">
			<span class="project-title">О проекте</span>
			<div class="project-info-container">
				<div class="project-info clearfix">
					<span class="project-info-pic">	
						<img src="<?= $president_avatar ?>" alt="">
					</span>
					<span class="project-info-text">
						<?php the_content(); ?>
					</span>
				</div>
				<span class="project-info-subtext clearfix">
					<span class="project-info-subtext-text"> 
						Президент Фонда : <?= $president_name ?> 
					</span>
				</span>
				<div class="project-faces clearfix">
				<?php
				if ( have_rows("project_curators") ):
					$i = 0;

					while( have_rows("project_curators") ):
						the_row();
						$avatar = get_sub_field("curator_avatar");
						$avatar = $avatar["url"];
				?>
					<a href="#" class="project-faces-element" data-event="showModal" data-modal="<?= $i ?>">
						<img src="<?= $avatar ?>" alt="">
					</a>
				<?php
					$i++;
					endwhile;
				endif;
				?>
				</div>
			</div>
		</div>
	</div>
	<!-- END OF PROJECT -->

	<!-- VIDEO -->
	<?php
	$video_link = get_field("video_link");
	$video_title = get_field("video_title");
	$video_description = get_field("video_description");
	?>
	<div class="video">
		<div class="container clearfix">
			<iframe class="youtube" width="700" height="450" src="<?= $video_link ?>" frameborder="0" allowfullscreen></iframe> 
			<div class="video-info">
				<span class="video-info-title">
					<?= $video_title ?>
				</span>
				<span class="video-info-text">
					<?= $video_description ?>
				</span>
			</div>
		</div>
	</div>
	<!-- END OF VIDEO -->

	<!-- CHILDREN -->
	<div class="children">
		
	</div>
	<!-- END OF CHILDREN -->
</main>
<!-- END OF MAIN -->

<div id="modal">
	
	<?php
	if ( have_rows("project_curators") ):
		$i = 0;

		while( have_rows("project_curators") ):
			the_row();

			$avatar = get_sub_field("curator_avatar");
			$avatar = $avatar["url"];

			$title = get_sub_field("curator_title");
			$about = get_sub_field("curator_about");
			$phone = get_sub_field("curator_phone");
			$email = get_sub_field("curator_email");
	?>

	<div class="modal-container" data-modal-id="<?= $i ?>">
		
		<div class="modal-content">

			<div class="modal-director-container clearfix">
				
				<div class="modal-director-avatar">
					<img src="<?= $avatar ?>" alt="">
				</div>

				<div class="modal-director-meta">
					
					<div class="modal-director-title-container clearfix">
						
						<span class="modal-director-title">
							<?= $title ?>
						</span>
					
						<span class="modal-close"></span>

					</div>

					<div class="modal-director-text-container">
						<span class="modal-director-text">
							<?= $about ?>
						</span>
					</div>

				</div>
	
			</div>
			
		</div>	

		<div class="modal-director-contacts-container clearfix">
				
			<div class="modal-director-phone">
				<i class="phone-icon"></i>
				<span class="modal-contacts-text"><?= $phone ?></span>
			</div>

			<div class="modal-director-email">
				<i class="email-icon"></i>
				<span class="modal-contacts-text"><?= $email ?></span>
			</div>

		</div>

	</div>
	<?php
		$i++;
		endwhile;
	endif;
	?>

</div>
<?php 

endwhile;
endif;
get_footer(); 
?>