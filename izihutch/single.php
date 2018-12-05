<?php get_header() ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article>


                <h2 class="titleArticle"><?php the_title(); ?></h2>
                
                <p id="author">Auteur : <strong><a href="<?= get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' )); ?>"><?php the_author(); ?></a></strong></p>
                <time id="publishDate" datetime="<?php the_date('Y-m-d'); ?>">Date de publication : le <?= get_the_date(); ?></time>

                <!-- Récupération des catégories -->
                <p id="categories">Catégories : 
                
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

        </article>

<?php endwhile; endif; ?>

        

<?php get_footer() ?>