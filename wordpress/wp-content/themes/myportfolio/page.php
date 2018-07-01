<?php
	//functioanlity start
	if(have_posts()):
		while(have_posts()): the_post();

	get_header();
?>

	<!--This is the main body-->
	<section id="about">
		<div class="container">
			<h2><?php the_title(); ?></h2>
				<img class="profile-picture" src="<?php echo get_theme_file_uri('/img/karl.jpg'); ?>">
			<p><?php the_content(); ?></p>
			<h3>Services offered: </h3>
			<div class="row">
				<img class="logo-services" src="<?php echo get_theme_file_uri('/img/svg/html5.svg'); ?>" title="HTML5">
				<img class="logo-services" src="<?php echo get_theme_file_uri('/img/svg/css3.svg'); ?>" title="CSS3">
				<img class="logo-services" src="<?php echo get_theme_file_uri('/img/svg/javascript.svg');?>" title="Javascript">
				<img class="logo-services" src="<?php echo get_theme_file_uri('/img/svg/psd.svg'); ?>" title="Photoshop">
			</div>
		</div>
	</section>



	<section id="skills">
		<div class="container-skills">
			<h2>Skills</h2>
			<div class="row">
				<div class="column">
					<img class="icon-skills" src="<?php echo get_theme_file_uri('/img/svg/idea.svg'); ?>">
					<h2>Creative</h2>
					<p><?php the_content();?></p>
				</div>
				<div class="column">
					<img class="icon-skills" src="<?php echo get_theme_file_uri('/img/svg/browser.svg'); ?>">
					<h2>UI/UX</h2>
					<p>I design and implement simple designs that improves user experience.</p>
				</div>
				<div class="column">
					<img class="icon-skills" src="<?php echo get_theme_file_uri('/img/svg/coding.svg'); ?>">
					<h2>Code</h2>
					<p>I code using Html(5) and CSS(3) and javascript.</p>
				</div>
			</div>
		</div>
	</section>
	<!--This is the main body-->




<?php endwhile;
	else:
		echo '<p>No content found</p>';
	endif;
	//functioanlity end

	get_footer();
?>