<article class="project" >
    <a href="<?= get_the_permalink(); ?>" class="project__link">
        <div class="project__card">
            <figure class="project__fig">
                <?= get_the_post_thumbnail(null, 'medium_large', ['class' => 'project__thumb']); ?>
            </figure>
            <h3 class="project__title"><?= get_the_title(); ?></h3>
            <p class="project__small-desc"><?= get_field('small_description'); ?></p>
            <div class="arrow-left">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25.242" viewBox="0 0 24 25.242" >
                    <g id="Icon_feather-arrow-left" data-name="Icon feather-arrow-left" transform="translate(1.5 2.121)">
                        <path id="Tracé_2" data-name="Tracé 2" d="M7.5,18h21" transform="translate(-7.5 -7.5)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                        <path id="Tracé_3" data-name="Tracé 3" d="M7.5,28.5,18,18,7.5,7.5" transform="translate(3 -7.5)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                    </g>
                </svg>
            </div>


        </div>
    </a>

</article>