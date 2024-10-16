<?php get_header(); ?> 
<!-- Includes the header.php template -->

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h2><?php the_title(); ?></h2> 
            <!-- Outputs the post title -->

            <p><?php the_content(); ?></p> 
            <!-- Outputs the full post content -->
        </article>
    <?php endwhile; else : ?>
        <p><?php _e('Sorry, no posts found.', 'kelvin-portfolio'); ?></p> 
        <!-- Displays this message if no posts are found -->
    <?php endif; ?>
</main>

<?php get_footer(); ?> 
<!-- Includes the footer.php template -->
