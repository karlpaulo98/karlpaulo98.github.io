<?php
	//functioanlity start
	if(have_posts()):
		while(have_posts()): the_post();

	get_header();
?>

	
<!--This is the main body-->

	<section id="skills">
		<div class="container-skills">
			<h2>skills</h2>
			<div class="row">
				<div class="column">
					<img class="icon-skills" src="<?php echo get_theme_file_uri('/img/svg/idea.svg'); ?>">
					<h2>Creative</h2>
					<p>I love creating designs and pages come to life.</p>
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




<div class="container">
	<div class="row">
		<div class="column">
			<h2><?php the_title(); ?></h2>
  			<p><?php the_content(); ?></p>
		</div>
		<div class="column">
			<h2><?php the_title(); ?></h2>
  			<p><?php the_content(); ?></p>
		</div>
		<div class="column">
			<h2><?php the_title(); ?></h2>
  			<p><?php the_content(); ?></p>
		</div>
	</div>
</div>






<?php endwhile;
	else:
		echo '<p>No content found</p>';
	endif;
	//functioanlity end

	get_footer();
?>