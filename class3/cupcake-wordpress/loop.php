          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article>
          <h1><?php the_title(); ?></h1>
          <time><?php the_time('F jS, Y') ?></time> by <?php the_author(); ?>
          <p><?php the_content(); ?></p>
          </article>
          <?php endwhile; else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>       
