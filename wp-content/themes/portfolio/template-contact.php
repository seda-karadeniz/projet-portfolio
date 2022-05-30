<?php /* Template Name: Contact page template */ ?>
<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <main class="layout contact" itemscope itemtype="https://schema.org/Person">
        <h2 class="contact__title title"><?= get_the_title(); ?></h2>
        <div class="contact__grid">
            <aside class="contact__info">
                <div class="contact__info-num">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27.001" height="27.05" viewBox="0 0 27.001 27.05">
                        <path id="Icon_feather-phone" data-name="Icon feather-phone" d="M27.167,21v3.62a2.413,2.413,0,0,1-2.631,2.413,23.881,23.881,0,0,1-10.414-3.7,23.531,23.531,0,0,1-7.24-7.24,23.881,23.881,0,0,1-3.7-10.462A2.413,2.413,0,0,1,5.579,3H9.2a2.413,2.413,0,0,1,2.413,2.076,15.494,15.494,0,0,0,.845,3.391,2.413,2.413,0,0,1-.543,2.546l-1.533,1.533a19.307,19.307,0,0,0,7.24,7.24l1.533-1.533A2.413,2.413,0,0,1,21.7,17.71a15.494,15.494,0,0,0,3.391.845A2.413,2.413,0,0,1,27.167,21Z" transform="translate(-1.667 -1.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                    </svg>

                    <a href="tel:<?= get_field('telephone'); ?>" class="num" itemprop="telephone"><?= get_field('telephone'); ?></a>
                </div>
                <div class="contact__info-email">
                    <svg xmlns="http://www.w3.org/2000/svg" width="29.227" height="23" viewBox="0 0 29.227 23">
                        <g id="Icon_feather-mail" data-name="Icon feather-mail" transform="translate(-0.887 -4.5)">
                            <path id="Tracé_9" data-name="Tracé 9" d="M5.5,6h20A2.507,2.507,0,0,1,28,8.5v15A2.507,2.507,0,0,1,25.5,26H5.5A2.507,2.507,0,0,1,3,23.5V8.5A2.507,2.507,0,0,1,5.5,6Z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                            <path id="Tracé_10" data-name="Tracé 10" d="M28,9,15.5,19.5,3,9" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                        </g>
                    </svg>

                    <a href="mailto:<?= get_field('email'); ?>" class="mail" itemprop="email"><?= get_field('email'); ?></a>
                </div>
                <div class="contact__rs">
                    <!-- dribbble-->

                    <a href="https://dribbble.com/sedaKaradeniz" itemprop="sameAs">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34.875" height="34.875" viewBox="0 0 34.875 34.875">
                            <path id="Icon_awesome-dribbble" data-name="Icon awesome-dribbble" d="M18,.563A17.438,17.438,0,1,0,35.438,18,17.457,17.457,0,0,0,18,.563ZM29.529,8.6a14.823,14.823,0,0,1,3.363,9.278A34.807,34.807,0,0,0,22.521,17.4c-.4-.987-.786-1.856-1.309-2.926A19.84,19.84,0,0,0,29.529,8.6ZM27.873,6.881c-.268.382-2.51,3.4-7.806,5.38A79.5,79.5,0,0,0,14.51,3.542,14.856,14.856,0,0,1,27.873,6.881ZM11.668,4.544a95.036,95.036,0,0,1,5.522,8.614A55.556,55.556,0,0,1,3.42,14.972,14.949,14.949,0,0,1,11.668,4.544ZM3.106,18.023c0-.152,0-.3.008-.455a54.942,54.942,0,0,0,15.307-2.12c.426.834.834,1.682,1.208,2.528A23.07,23.07,0,0,0,6.935,27.981,14.835,14.835,0,0,1,3.106,18.023Zm5.752,11.75c1.556-3.18,5.778-7.286,11.783-9.334a61.911,61.911,0,0,1,3.177,11.295,14.864,14.864,0,0,1-14.96-1.96Zm17.464.6a64.285,64.285,0,0,0-2.893-10.62,21.861,21.861,0,0,1,9.278.637,14.92,14.92,0,0,1-6.384,9.983Z" transform="translate(-0.563 -0.563)" fill="#fff"/>
                        </svg>
                    </a>



                    <a href="https://github.com/seda-karadeniz" itemprop="sameAs">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32.569" height="34.618" viewBox="0 0 32.569 34.618">
                            <path id="Icon_feather-github" data-name="Icon feather-github" d="M13.5,28.5C6,30.75,6,24.75,3,24m21,9V27.195a5.055,5.055,0,0,0-1.41-3.915c4.71-.525,9.66-2.31,9.66-10.5A8.159,8.159,0,0,0,30,7.156,7.6,7.6,0,0,0,29.865,1.5S28.095.975,24,3.72a20.07,20.07,0,0,0-10.5,0C9.4.975,7.635,1.5,7.635,1.5A7.6,7.6,0,0,0,7.5,7.155a8.16,8.16,0,0,0-2.25,5.67c0,8.13,4.95,9.915,9.66,10.5A5.055,5.055,0,0,0,13.5,27.2V33" transform="translate(-1.181 0.118)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                        </svg>
                    </a>

                    <!-- github-->


                    <!--instagram-->

                    <a href="https://www.instagram.com/sda_krdnz" itemprop="sameAs">
                        <svg xmlns="http://www.w3.org/2000/svg" width="31.518" height="31.511" viewBox="0 0 31.518 31.511">
                            <path id="Icon_awesome-instagram" data-name="Icon awesome-instagram" d="M15.757,9.914a8.079,8.079,0,1,0,8.079,8.079A8.066,8.066,0,0,0,15.757,9.914Zm0,13.331a5.252,5.252,0,1,1,5.252-5.252,5.262,5.262,0,0,1-5.252,5.252ZM26.051,9.584A1.884,1.884,0,1,1,24.166,7.7,1.88,1.88,0,0,1,26.051,9.584ZM31.4,11.5a9.325,9.325,0,0,0-2.545-6.6,9.387,9.387,0,0,0-6.6-2.545c-2.6-.148-10.4-.148-13,0a9.373,9.373,0,0,0-6.6,2.538,9.356,9.356,0,0,0-2.545,6.6c-.148,2.6-.148,10.4,0,13a9.325,9.325,0,0,0,2.545,6.6,9.4,9.4,0,0,0,6.6,2.545c2.6.148,10.4.148,13,0a9.325,9.325,0,0,0,6.6-2.545,9.387,9.387,0,0,0,2.545-6.6c.148-2.6.148-10.392,0-12.994ZM28.041,27.281a5.318,5.318,0,0,1-3,3c-2.074.823-7,.633-9.288.633s-7.221.183-9.288-.633a5.318,5.318,0,0,1-3-3c-.823-2.074-.633-7-.633-9.288s-.183-7.221.633-9.288a5.318,5.318,0,0,1,3-3c2.074-.823,7-.633,9.288-.633s7.221-.183,9.288.633a5.318,5.318,0,0,1,3,3c.823,2.074.633,7,.633,9.288S28.863,25.214,28.041,27.281Z" transform="translate(0.005 -2.238)" fill="#fff"/>
                        </svg>
                    </a>



                    <!-- linledn-->

                    <a href="https://www.linkedin.com/in/seda-karadeniz-0a92251ba/" itemprop="sameAs">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32.5" height="31" viewBox="0 0 32.5 31">
                            <g id="Icon_feather-linkedin" data-name="Icon feather-linkedin" transform="translate(-1.75 -1.75)">
                                <path id="Tracé_6" data-name="Tracé 6" d="M24,12a9,9,0,0,1,9,9V31.5H27V21a3,3,0,0,0-6,0V31.5H15V21a9,9,0,0,1,9-9Z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"/>
                                <path id="Tracé_7" data-name="Tracé 7" d="M3,13.5H9v18H3Z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"/>
                                <path id="Tracé_8" data-name="Tracé 8" d="M9,6A3,3,0,1,1,6,3,3,3,0,0,1,9,6Z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"/>
                            </g>
                        </svg>
                    </a>


                </div>
            </aside>

            <section>
                <?php if(! isset($_SESSION['contact_form_feedback']) || ! $_SESSION['contact_form_feedback']['success']) : ?>
                    <form action="<?= get_home_url(); ?>/wp-admin/admin-post.php" method="POST" class="contact__form form" id="contact">
                        <?php if(isset($_SESSION['contact_form_feedback'])) : ?>
                            <p class="message"><?= __('Oups ! Il y a des erreurs dans le formulaire', 'dw'); ?></p>
                        <?php endif; ?>
                        <div class="form__field">
                            <label for="firstname" class="form__label"><?= __('Votre prénom', 'dw'); ?></label>
                            <input type="text" name="firstname" id="firstname" class="form__input" placeholder="John" value="<?= dw_get_contact_field_value('firstname'); ?>">
                            <?= dw_get_contact_field_error('firstname'); ?>
                        </div>
                        <div class="form__field">
                            <label for="lastname" class="form__label"><?= __('Votre nom', 'dw'); ?></label>
                            <input type="text" name="lastname" id="lastname" class="form__input" placeholder="Doe" value="<?= dw_get_contact_field_value('lastname'); ?>">
                            <?= dw_get_contact_field_error('lastname'); ?>
                        </div>
                        <div class="form__field">
                            <label for="email" class="form__label"><?= __('Votre adresse e-mail', 'dw'); ?></label>
                            <input type="email" name="email" id="email" class="form__input" placeholder="John@Doe.com" value="<?= dw_get_contact_field_value('email'); ?>">
                            <?= dw_get_contact_field_error('email'); ?>
                        </div>
                        <div class="form__field">
                            <label for="message" class="form__label"><?= __('Votre message', 'dw'); ?></label>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Bonjour Seda, ..." class="form__input"><?= dw_get_contact_field_value('message'); ?></textarea>
                            <?= dw_get_contact_field_error('message'); ?>
                        </div>
                        <div class="form__field">
                            <label for="rules" class="form__checkbox">
                                <input type="checkbox" name="rules" id="rules" value="1" />
                                <span class="form__checklabel"><?= str_replace(':conditions', '<a href="#" class="condition">' . __('conditions générales d\'utilisation', 'dw') . '</a>', __('J\'accepte les :conditions', 'dw')); ?></span>
                            </label>
                            <?= dw_get_contact_field_error('rules'); ?>
                        </div>
                        <div class="form__actions">
                            <?php wp_nonce_field('nonce_submit_contact'); ?>
                            <input type="hidden" name="action" value="submit_contact_form" />
                            <button class="form__button btn" type="submit"><span>--</span><?= __('Envoyer','dw'); ?><span>--</span></button>
                        </div>
                    </form>
                <?php else : ?>
                    <p id="contact" class="message-envoi btn"><?= __('Merci ! Votre message a bien été envoyé.','dw'); ?></p>
                    <?php unset($_SESSION['contact_form_feedback']); endif; ?>
            </section>
        </div>

    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>