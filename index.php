<?php get_header(); ?>
  
  <!-- My Content -->
  <div class="row">

    <!-- My Posts -->
    <div class="post-content">

      <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post();
          get_template_part( 'content', get_post_format() );
        endwhile; endif; 
      ?>

    </div>

  </div>

<?php get_footer(); ?>