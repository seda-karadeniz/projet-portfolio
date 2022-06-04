<?php /* Template Name: Projects page template*/?>
<?php get_header();?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="layout projects">
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
            <h2 class="templateProjects__title title" role="heading" aria-level="2" > <?= get_the_title(); ?></h2>
        </div>

        <section class="projects" id="projects">
            <h3 class="hidden" role="heading" aria-level="3" >Mes projets</h3>
            <div class="projects__wrapper">
                <?php
                if(($projects = dw_get_projects())->have_posts()): while($projects->have_posts()): $projects->the_post();
                    include(__DIR__ . '/partials/project.php');
                endwhile;endif;?>
            </div>
        </section>

    </main>
<?php endwhile; endif;?>
<?php get_footer();?>