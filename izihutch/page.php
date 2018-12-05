<?php get_header() ?>

        <article>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


                <h2 class="titleArticle"><?php the_title(); ?></h2> 
                
                <?php
                    $categories = get_the_category();
        
                    foreach ($categories as $currentCategory):
        
                    $currentCategoryLink = get_category_link($currentCategory->term_id);
                ?>

                    <span class="category"><a href="<?= $currentCategoryLink; ?>" class="post__category post__category--color-team"><?= $currentCategory->name; ?></a><span>
                
                <?php
                endforeach;
                ?>
                </p>
                <!-- Fin récupération des catégories -->

                <p id="contentPost"><?php the_content(); ?></p>

                <!-- Commentaires -->
                <?php
                // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) : comments_template();
                    endif;
                ?>

<?php endwhile; endif; ?>

        </article>

<?php get_footer() ?>