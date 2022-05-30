<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <main class="layout singleProject">
        <h2 class="singleProject__title title"><?= get_the_title(); ?></h2>
        <div class="singleProject__wrapper">

            <div class="singleProject__content">
                <p class="singleProject__desc"><?= get_field('big_description'); ?></p>
                <p class="singleProject__tech"><?= get_field('used_technology'); ?></p>
            </div>
            <figure class="singleProject__fig">
                <?= get_the_post_thumbnail(null, 'medium_large', ['class' => 'singleProject__thumb']); ?>
            </figure>
        </div>

        <?php
        $url = get_field('url');
        if( $url ): ?>
            <a class="singleProject__project-btn btn" href="<?php echo esc_url( $url ); ?>"><span>--</span>Voir le site<span>--</span></a>
        <?php endif; ?>

        <div class="singleProject__img">
            <figure class="singleProject__img1">
                <?php
                $image = get_field('image');
                $size = 'medium'; // (thumbnail, medium, large, full or custom size)
                if( $image ) {
                    echo wp_get_attachment_image( $image, $size );
                } ?>
            </figure>

            <figure class="singleProject__img2">
                <?php
                $image = get_field('image2');
                $size = 'medium'; // (thumbnail, medium, large, full or custom size)
                if( $image ) {
                    echo wp_get_attachment_image( $image, $size );
                } ?>
            </figure>
            <figure class="singleProject__img3">
                <?php
                $image = get_field('image3');
                $size = 'medium'; // (thumbnail, medium, large, full or custom size)
                if( $image ) {
                    echo wp_get_attachment_image( $image, $size );
                } ?>
            </figure>
        </div>

        <a href="projets" class="singleProject__btn btn"><span>--</span>Retour vers la liste des projets<span>--</span></a>

    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>