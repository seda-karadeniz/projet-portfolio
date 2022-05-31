<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <main class="layout singleProject">
        <div class="wrap-title-svg">
            <div class="title-svg">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="49.497" height="49.497" viewBox="0 0 49.497 49.497">
                    <defs>
                        <filter id="Rectangle_26">
                            <feOffset input="SourceAlpha"/>
                            <feGaussianBlur stdDeviation="3" result="blur"/>
                            <feFlood flood-color="#ffafbd" result="color"/>
                            <feComposite operator="out" in="SourceGraphic" in2="blur"/>
                            <feComposite operator="in" in="color"/>
                            <feComposite operator="in" in2="SourceGraphic"/>
                        </filter>
                    </defs>
                    <g data-type="innerShadowGroup">
                        <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#Rectangle_26)">
                            <rect id="Rectangle_26-2" data-name="Rectangle 26" width="35" height="35" transform="translate(24.75) rotate(45)" fill="#fff"/>
                        </g>
                        <g id="Rectangle_26-3" data-name="Rectangle 26" transform="translate(24.749) rotate(45)" fill="none" stroke="#ffafbd" stroke-width="2">
                            <rect width="35" height="35" stroke="none"/>
                            <rect x="1" y="1" width="33" height="33" fill="none"/>
                        </g>
                    </g>
                    <animateTransform attributeName="transform"
                                      attributeType="XML"
                                      type="rotate"
                                      from="0"
                                      to="360"
                                      dur="10s"
                                      repeatCount="2"/>
                </svg>

            </div>
            <h2 class="singleProject__title title"><?= get_the_title(); ?></h2>

        </div>
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