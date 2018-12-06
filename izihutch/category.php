<?php get_header() ?>

<div id="mainContent">

        <h2><?php single_tag_title('Catégorie : '); ?></h2>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article>

                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

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

                        <p id="contentPost"><?php the_excerpt(); ?></p>

                        <p><a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a></p>

                </article>
        <?php endwhile; endif; ?>

</div>

<?php get_footer() ?>