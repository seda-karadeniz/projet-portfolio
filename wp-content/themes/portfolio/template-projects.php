<?php /* Template Name: Projects page template*/?>
<?php get_header();?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="layout contact">
        <h2 class="contact__title"> <?= get_the_title(); ?></h2>
        <section class="projects" id="projects">
            <h2 class="projects__title title"> Quelques projets</h2>
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