<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h2><?php the_title(); // Displays the post title ?></h2>
    <div class="entry-content">
        <?php the_content(); // Displays the post content ?>
    </div>
</article>
