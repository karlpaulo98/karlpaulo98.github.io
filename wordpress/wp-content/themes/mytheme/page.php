<?php

  get_header();

  if(have_posts()):
    while(have_posts()): the_post();


?>

  <!--This is the main body of the page-->
   

    <!--The content of the page-->
    <p><?php the_content(); ?><p>
  <!--This is the main body of the page-->

<?php endwhile;
  else:
    echo '<p>No content found</p>';
  endif;

  get_footer();
?>
