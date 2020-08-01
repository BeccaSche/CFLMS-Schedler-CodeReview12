<?php get_header(); ?>

  <div class="container my-4">

    <h1 class="c1">Staff Adventures:</h1>
      <div class='row d-flex justify-content-between my-4'>
        
        <?php if(have_posts()) : ?> 

        <?php while(have_posts()) : the_post(); ?> 

         <div class='card img-fluid col-12 my-2'>
                    
           <?php if(has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium-large'); ?>
                  <?php endif; ?>
          
            <div class='card-img-overlay p-4' style='width:35rem'>
                <div><small>by <?php the_author(); ?></small></div>
                <h4 class='text-light t1'><?php the_title(); ?></h4>
                <p class='mb-1'><?php the_excerpt(); ?></p>
                <div class='mb-3'><small><?php the_time('F j, Y g:i a'); ?></small></div>
                <a href='<?php the_permalink(); ?>' class='btn btn-light'>Go to Post</a>
            </div>
          </div>

        <?php endwhile; ?>

          <?php else :?>

            <p>No posts found</p>
          <?php endif; ?>  
        </div>
      </div>

        <?php

          if(is_active_sidebar('sidebar')):
            dynamic_sidebar('sidebar');
        endif;  
?>
</div>

<?php get_footer(); ?>

