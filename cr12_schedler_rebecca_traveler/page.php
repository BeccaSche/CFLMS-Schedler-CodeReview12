<?php get_header(); ?>

 <div class="container my-4">

    <h1 class="orange">Hello from the page</h1>
   
       <?php if(have_posts()) : ?> 
        <?php while(have_posts()) : the_post(); ?> 

       <?php the_title(); ?> 
       
       <?php the_content(); ?><!--retrieves content-->

       <?php endwhile; ?><!--end the while loop-->

       <?php else :?> <!-- if no posts are found then: -->

       <p>No posts found</p>  <!-- no posts found displayed -->
       <?php endif; ?> <!-- end if -->
  </div>

  <?php get_footer(); ?>
