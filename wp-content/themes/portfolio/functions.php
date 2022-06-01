<?php
// require_once(__DIR__ . '/Menus/PrimaryMenuWalker.php');
require_once(__DIR__ . '/Menus/PrimaryMenuItem.php');

require_once(__DIR__ . '/Forms/BaseFormController.php');
require_once(__DIR__ . '/Forms/ContactFormController.php');
require_once(__DIR__ . '/Forms/Sanitizers/BaseSanitizer.php');
require_once(__DIR__ . '/Forms/Sanitizers/TextSanitizer.php');
require_once(__DIR__ . '/Forms/Sanitizers/EmailSanitizer.php');
require_once(__DIR__ . '/Forms/Validators/BaseValidator.php');
require_once(__DIR__ . '/Forms/Validators/RequiredValidator.php');
require_once(__DIR__ . '/Forms/Validators/EmailValidator.php');
require_once(__DIR__ . '/Forms/Validators/AcceptedValidator.php');
// Désactiver l'éditeur Gutenberg de Wordpress
add_filter('use_block_editor_for_post', '__return_false');

add_action('init', 'dw_init_php_session', 1);

function dw_init_php_session()
{
    if(! session_id()) {
        session_start();
    }
}


// Activer les images pour les posts
add_theme_support('post-thumbnails');

// Enregistrer un "type de ressource" (custom post type) pour les voyages
register_post_type('project', [
    'label' => 'Projets',
    'labels' => [
        'name' => 'Projets',
        'singular_name' => 'Projet',
    ],
    'description' => 'La ressource qui permet de gérer les projets réalisés',
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-book',
    'supports' => ['title','editor' ,'thumbnail'],
    'rewrite' => ['slug', 'projets'],
]);

register_post_type('message', [
    'label' => 'Messages de contact',
    'labels' => [
        'name' => 'Messages de contact',
        'singular_name' => 'Message de contact',
    ],
    'description' => 'Les messages envoyés par les utilisateurs via le formulaire de contact.',
    'public' => false,
    'show_ui' => true,
    'menu_position' => 15,
    'menu_icon' => 'dashicons-buddicons-pm',
    'capabilities' => [
        'create_posts' => false,
    ],
    'map_meta_cap' => true,
]);


function dw_get_projects($count=20)
{
    // 1on instancie l'objet wp_query

    $projects = new WP_Query([
        'post_type' => 'project',
        'posts_per_page' => $count,
        'order' => 'DESC',
    ]);
    return $projects;
}
//enregistrer les menu de nav

register_nav_menu('primary', 'Emplacement de la navigation principale');

// definition de la fonction retournant un menu de navigation sous  forme d'un tableau de liens de niveau 0
function dw_get_menu_items($location)
{
    $items = [];

    // Récupérer le menu qui correspond à l'emplacement souhaité
    $locations = get_nav_menu_locations();

    if(! ($locations[$location] ?? false)) {
        return $items;
    }

    $menu = $locations[$location];

    // Récupérer tous les éléments du menu en question
    $posts = wp_get_nav_menu_items($menu);

    // Traiter chaque élément de menu pour le transformer en objet
    foreach($posts as $post) {
        // Créer une instance d'un objet personnalisé à partir de $post
        $item = new PrimaryMenuItem($post);

        // Ajouter cette instance soit à $items (s'il s'agit d'un élément de niveau 0), soit en tant que sous-élément d'un item déjà existant.

        $items[] = $item;


    }

    // Retourner les éléments de menu de niveau 0
    return $items;
}

function dw_mix($path)
{
    $path = '/' . ltrim($path, '/');

    // Checker si le fichier demandé existe bien, sinon retourner NULL
    if(! realpath(__DIR__ . '/public' . $path)) {
        return;
    }

    // Check si le fichier mix-manifest existe bien, sinon retourner le fichier sans cache-bursting
    if(! ($manifest = realpath(__DIR__ . '/public/mix-manifest.json'))) {
        return get_stylesheet_directory_uri() . '/public' . $path;
    }

    // Ouvrir le fichier mix-manifest et lire le JSON
    $manifest = json_decode(file_get_contents($manifest), true);

    // Check si le fichier demandé est bien présent dans le mix manifest, sinon retourner le fichier sans cache-bursting
    if(! array_key_exists($path, $manifest)) {
        return get_stylesheet_directory_uri() . '/public' . $path;
    }

    // C'est OK, on génère l'URL vers la ressource sur base du nom de fichier avec cache-bursting.
    return get_stylesheet_directory_uri() . '/public' . $manifest[$path];
}

/*

add_action('admin_post_submit_contact_form', 'dw_handle_submit_contact_form');

function dw_handle_submit_contact_form()
{
    if(! dw_verify_contact_form_nonce()) {
        // C'est pas OK.
        // TODO : afficher un message d'erreur "unauthorized"
        return;
    }

    $data = dw_sanitize_contact_form_data();

    if($errors = dw_validate_contact_form_data($data)) {
        $_SESSION['feedback_contact_form'] = [
            'success' => false,
            'data' => $data,
            'errors' => $errors,
        ];

        return wp_redirect($_POST['_wp_http_referer']);
    }

    // Stocker en base de données
    $id = wp_insert_post([
        'post_type' => 'message',
        'post_title' => 'Message de ' . $data['firstname'] . ' ' . $data['lastname'],
        'post_content' => $data['message'],
        'post_status' => 'publish',
    ]);

    // Envoyer un mail
    $content = 'Bonjour, un nouveau message de contact a été envoyé.<br />';
    $content .= 'Pour le visualiser : ' . get_edit_post_link($id);

    wp_mail(get_bloginfo('admin_email'), 'Nouveau message', $content);

    // Tout est OK, afficher le feedback positif
    $_SESSION['feedback_contact_form'] = [
        'success' => true,
    ];

    return wp_redirect($_POST['_wp_http_referer']);
}

function dw_verify_contact_form_nonce()
{
    $nonce = $_POST['_wpnonce'];

    return wp_verify_nonce($nonce, 'nonce_check_contact_form');
}

function dw_sanitize_contact_form_data()
{
    return [
        'firstname' => sanitize_text_field($_POST['firstname'] ?? null),
        'lastname' => sanitize_text_field($_POST['lastname'] ?? null),
        'email' => sanitize_email($_POST['email'] ?? null),
        'phone' => sanitize_text_field($_POST['phone'] ?? null),
        'message' => sanitize_text_field($_POST['message'] ?? null),
        'rules' => $_POST['rules'] ?? null
    ];
}

function dw_validate_contact_form_data($data)
{
    $errors = [];

    $required = ['firstname','lastname','email','message'];
    $email = ['email'];
    $accepted = ['rules'];

    foreach($data as $key => $value) {
        if(in_array($key, $required) && ! $value) {
            $errors[$key] = 'ce champs est obligatoire';
            continue;
        }

        if(in_array($key, $email) && ! filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $errors[$key] = 'email';
            continue;
        }

        if(in_array($key, $accepted) && $value !== '1') {
            $errors[$key] = 'accepter les conditions générales d&rsquo;utilisation';
            continue;
        }
    }

    return $errors ?: false;
}

function dw_get_contact_field_value($field)
{
    if(! isset($_SESSION['feedback_contact_form'])) {
        return '';
    }

    return $_SESSION['feedback_contact_form']['data'][$field] ?? '';
}

function dw_get_contact_field_error($field)
{
    if(! isset($_SESSION['feedback_contact_form'])) {
        return '';
    }

    if(! isset($_SESSION['feedback_contact_form']['errors'][$field])) {
        return '';
    }

    return '<p class="form__error">Problème : ' . $_SESSION['feedback_contact_form']['errors'][$field] . '</p>';
}*/


add_action('admin_post_submit_contact_form', 'dw_handle_submit_contact_form');

function dw_handle_submit_contact_form()
{

    $form = new ContactFormController($_POST);
}

function dw_get_contact_field_value($field)
{
    if(! isset($_SESSION['contact_form_feedback'])) {
        return '';
    }

    return $_SESSION['contact_form_feedback']['data'][$field] ?? '';
}

function dw_get_contact_field_error($field)
{
    if(! isset($_SESSION['contact_form_feedback'])) {
        return '';
    }

    if(! ($_SESSION['contact_form_feedback']['errors'][$field] ?? null)) {
        return '';
    }

    return '<p class="form__error">'. $_SESSION['contact_form_feedback']['errors'][$field]. '</p>';
}