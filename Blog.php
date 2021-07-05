<?php get_header();
//Template Name: Blog
?>

<section id="titre-blog">

    <?php the_content(); ?>

</section>

<main class="blog">

    <?php 
// the query to set the posts per page to 3
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array('posts_per_page' => 6, 'paged' => $paged );
query_posts($args); ?>
    <!-- the loop -->
    <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
    <article>
        <?php the_post_thumbnail( 'medium-thumbnail'); ?>
        <div class="extrait">
        <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
            <span><?php the_excerpt(); ?>
        </span>
        
        <a class="see-more" href="<?php the_permalink() ?>"><button>Voir plus</button></a>
        </div>

    </article>
    <?php endwhile; ?>

</main>
<!-- pagination -->
<div class="pagination-btns">
    <div class="next-posts-btn">
        <?php next_posts_link(); ?>
    </div>
    <div class="prev-posts-btn">
        <?php previous_posts_link(); ?>
    </div>
</div>
<?php else : ?>
<!-- No posts found -->
<?php endif; ?>

<?php get_footer(); ?>