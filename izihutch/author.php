<?php get_header() ?>

<h2>Auteur : <?php the_author(); ?></h2>

        <div id="mainContent">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article>

                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                
                <p id="author">Auteur : <strong><?php the_author(); ?></strong></p>
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