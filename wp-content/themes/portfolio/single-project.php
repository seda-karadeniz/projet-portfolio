<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <main class="layout singleProject">
        <h2 class="singleProject__title"><?= get_the_title(); ?></h2>
        <figure class="singleProject__fig">
            <?= get_the_post_thumbnail(null, 'medium_large', ['class' => 'singleProject__thumb']); ?>
        </figure>
        <div class="singleProject__content">
            <p class="singleProject__desc"><?= get_field('big_description'); ?></p>
            <p class="singleProject__tech"><?= get_field('used_technology'); ?></p>

        </div>



       <div class="singleProject__img1">
           <?php
           $image = get_field('image');
           $size = 'medium'; // (thumbnail, medium, large, full or custom size)
           if( $image ) {
               echo wp_get_attachment_image( $image, $size );
           } ?>
       </div>

        <div class="singleProject__img2">
            <?php
            $image = get_field('image2');
            $size = 'medium'; // (thumbnail, medium, large, full or custom size)
            if( $image ) {
                echo wp_get_attachment_image( $image, $size );
            } ?>
        </div>
        <a href="projets">Retour vers la liste des projets</a>

    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>