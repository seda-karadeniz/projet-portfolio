<?php /* Template Name: About page template */ ?>
<?php get_header(); ?>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <main class="layout about">
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

                </svg>

            </div>
            <h2 class="about__title title">&Agrave; propos de moi</h2>

        </div>
        <div class="about__wrapper">
            <div class="about__content">
                <?php the_content(); ?>
            </div>
            <div class="about__image">
                <?= get_the_post_thumbnail(null, 'medium_large', ['class' => 'about__thumb']); ?>
            </div>
        </div>

        <a href="projets" class="about__projects-btn btn"><span>--</span>Voir tous mes projets<span>--</span></a>

    </main>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>
