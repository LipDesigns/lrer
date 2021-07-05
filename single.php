<?php get_header();?>

<div class="top-orange-box"></div>

<main id="singlearticle">

<!-- BOUCLE SINGLE ARTCILE -->
<article>
    <button class="back-to-blog"><a href="<?php echo get_permalink(12) ?>">« Retour à la page  des articles</a></button>
    <!-- CONTENT ARTICLE -->
    <h2 class="has-text-align-center"itemprop="headline">
        <?php the_title(); ?>
    </h2>
    
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        
        <span id="content">
            <?php the_content(); ?>            
        </span>
        <?php endwhile; ?>
        <?php endif; ?>

        <div class="pagination">
        <div class="prev">
            <?php previous_post_link('%link', '« Article Précedent'); ?>
        </div>
        <div class="next">
            <?php next_post_link('%link', 'Article Suivant »'); ?>
        </div>
    </div>
        
</article>

</main>

<?php get_footer();?>