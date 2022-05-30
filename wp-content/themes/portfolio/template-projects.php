<?php /* Template Name: Projects page template*/?>
<?php get_header();?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="layout projects">
        <h2 class="templateProjects__title title"> <?= get_the_title(); ?></h2>
        <section class="projects" id="projects">
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