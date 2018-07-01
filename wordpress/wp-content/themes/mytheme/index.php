<?php
  if(have_posts()):
    while(have_posts()): the_post();

?>

  <!--This is the main body of the page-->
    <article class="post">
      <h2><a href="<?php the_permalink();?> "> <?php the_title(); ?> </a></h2>
      <p class="post-info"><?php the_time('F j, Y g:i a')?></p>
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
