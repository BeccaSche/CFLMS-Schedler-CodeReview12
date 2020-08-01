 <?php get_header(); ?>

 <div class="container my-4">

     <?php if(have_posts()) : ?> <!--  If there are posts available  -->

       <?php while(have_posts()) : the_post(); ?> <!-- if there are posts, iterate the posts in the loop
-->
       <h2 class='colorStripe2'><?php the_title(); ?></h2> 

       <?php if(has_post_thumbnail()): ?>
        <?php the_post_thumbnail('large'); ?>
          <?php endif; ?>
       

       <p><?php the_time('F j, Y g:i a'); ?></p><!--retrieves date blog entry was created-->

       <p> <?php the_author(); ?></p><!--retrieves author of blog entry-->
       
       <?php the_content(); ?><!--retrieves content-->

       <div>
        <?php comments_template()
         ?>
         
       </div>

       <?php endwhile; ?><!--end the while loop-->

       <?php else :?> <!-- if no posts are found then: -->

       <p>No posts found</p>  <!-- no posts found displayed -->
       <?php endif; ?> <!-- end if -->
  </div>

  <?php get_footer(); ?>
