<?php

/*   This is registered to the wordpress dashboard

Template Name: Special Template

*/

  get_header();

  if(have_posts()):
    while(have_posts()): the_post();
?>

  <!--This is the main body of the page-->

  <div class="container">
    <article class="post page">
      <h2> <?php  if(is_page('Home')) { ?> Welcome  <?php }?> <?php the_title(); ?>  </h2>
    </article>
  </div>
  <div class="container">
    <!--The content of the page-->
    <p><?php the_content(); ?><p>
  </div>

  <!--This is the main body of the page-->

<?php endwhile;
  else:
    echo '<p>No content found</p>';
  endif;

  get_footer();
?>
