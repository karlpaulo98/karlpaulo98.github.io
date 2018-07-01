<?php
  if(have_posts()):
    while(have_posts()): the_post();

    get_header();
?>

  <!--This is the main body of the page-->
    <article class="post page">
      <h2> <?php  if(is_page('Home')) { ?> Welcome  <?php }?> <?php the_title(); ?>  </h2>


    </article>

    <!--The content of the page-->
    <p><?php the_content(); ?><p>
  <!--This is the main body of the page-->

<?php endwhile;
  else:
    echo '<p>No content found</p>';
  endif;

  get_footer();
?>
