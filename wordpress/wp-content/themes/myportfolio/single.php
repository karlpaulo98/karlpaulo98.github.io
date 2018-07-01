<?php
	//functioanlity start
	if(have_posts()):
		while(have_posts()): the_post();

	get_header();
?>

	
	<h2>Single.php</h2>
	<!--This is the main body-->
	<article class="post">
		<h2><?php the_title(); ?></h2>
	    <p><?php the_content(); ?></p>
	</article>


	



<?php endwhile;
	else:
		echo '<p>No content found</p>';
	endif;

	//functioanlity end
	get_footer();
?>