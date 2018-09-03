<?php get_header(); ?>
    <div class="content-area">
    <main>
    
    <section class="middle-area">
        <div class="container">
            <div class="row">
                <aside class="sidebar col-md-3">Sidebar</aside>
                <div class="news col-md-9">
                    <?php 
                    // If there are any posts    
                     if( have_posts() ):
                        // if they exist, display em 
                        while( have_posts() ): the_post();   
                    ?>
                    <article>
                        <h2><?php the_title(); ?></h2>
                        <p>Postted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                        <p>Categories: <?php the_category( ' ' ); ?></p>
                        <p><?php the_tags( 'Tags: ', ',' ); ?></p>
                        <p><?php the_content(); ?></p>
                    </article>
                    <?php
                    endwhile;
                    else:
                    ?>
                    <p>There's nothing yet to be displayed</p>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>
    </div>
<?php get_footer(); ?>