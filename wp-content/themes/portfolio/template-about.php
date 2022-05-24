<?php /* Template Name: About page template */ ?>
<?php get_header(); ?>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <main class="layout about">
        <h2 class="about__title">&Agrave; propos de moi</h2>
        <div class="about__content">
            <?php the_content(); ?>
        </div>
        <div class="about__image">
            <?= get_the_post_thumbnail(null, 'medium_large', ['class' => 'about__thumb']); ?>
        </div>
        <a href="projets">Voir tous mes projets</a>

    </main>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>
