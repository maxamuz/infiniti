<?php

/**
 * Infiniti functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Infiniti
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function infiniti_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Infiniti, use a find and replace
		* to change 'infiniti' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('infiniti', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'infiniti'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'infiniti_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'infiniti_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function infiniti_content_width()
{
	$GLOBALS['content_width'] = apply_filters('infiniti_content_width', 640);
}
add_action('after_setup_theme', 'infiniti_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function infiniti_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'infiniti'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'infiniti'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'infiniti_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function infiniti_scripts()
{
	wp_enqueue_style('infiniti-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_enqueue_style('infiniti-main-style', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style('infiniti-media-style', get_template_directory_uri() . '/css/media.css');
	wp_style_add_data('infiniti-style', 'rtl', 'replace');

	wp_enqueue_script('infiniti-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('infiniti-js', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'infiniti_scripts');



function infiniti_get_copyright()
{
	return get_option('infiniti_copyright_text', '© ' . date('Y') . ' Infiniti Market. Все права защищены.');
}

function infiniti_get_map_link()
{
	return get_option('infiniti_map_link', '');
}

if (file_exists(get_template_directory() . '/cmb2/init.php')) {
	require_once get_template_directory() . '/cmb2/init.php';
}


/**
 * Регистрация метабокса для FAQ
 */
add_action('cmb2_admin_init', 'infiniti_faq_metabox');

function infiniti_faq_metabox()
{
	// Создаем метабокс только для страницы с шаблоном Infiniti
	$cmb = new_cmb2_box(array(
		'id'           => 'infiniti_faq_metabox',
		'title'        => __('FAQ по ремонту Infiniti', 'infiniti'),
		'object_types' => array('page'), // Показывать на страницах
		'show_on'      => array(
			'key'   => 'page-template',
			'value' => 'page-infiniti.php', // Только для шаблона Infiniti
		),
		'context'      => 'normal',
		'priority'     => 'high',
	));

	// Создаем группу для повторяющихся вопросов-ответов

	// === ПЕРВАЯ ГРУППА (верхняя) - FAQ TOP ===
	$cmb_top = new_cmb2_box(array(
		'id'           => 'infiniti_faq_top_metabox',
		'title'        => __('FAQ TOP - Преимущества', 'infiniti'),
		'object_types' => array('page'),
		'show_on'      => array(
			'key'   => 'page-template',
			'value' => 'page-infiniti.php', // Только для шаблона Infiniti
		),
		'context'      => 'normal',
		'priority'     => 'high', // Высокий приоритет - будет выше
	));

	// Группа повторяющихся полей для FAQ TOP
	$top_group_field_id = $cmb_top->add_field(array(
		'id'         => 'infiniti_faq_top_group',
		'type'       => 'group',
		'repeatable' => true,
		'options'    => array(
			'group_title'   => __('Преимущество {#}', 'infiniti'),
			'add_button'    => __('Добавить преимущество', 'infiniti'),
			'remove_button' => __('Удалить', 'infiniti'),
			'sortable'      => true,
		),
	));

	// Поле вопроса для TOP группы
	$cmb_top->add_group_field($top_group_field_id, array(
		'name'       => __('Заголовок', 'infiniti'),
		'id'         => 'question',
		'type'       => 'text',
		'desc'       => __('Введите заголовок преимущества', 'infiniti'),
		'attributes' => array(
			'placeholder' => 'Например: Один автосервис для всех ваших машин',
		),
	));

	// Поле ответа для TOP группы
	$cmb_top->add_group_field($top_group_field_id, array(
		'name'       => __('Описание', 'infiniti'),
		'id'         => 'answer',
		'type'       => 'textarea',
		'desc'       => __('Введите описание преимущества', 'infiniti'),
		'attributes' => array(
			'rows' => 2,
			'style' => 'width:100%;',
			'placeholder' => 'Например: Вам не нужно держать в телефоне 5 разных СТО — мы закрываем все типы работ по большинству марок.',
		),
	));

	$group_field_id = $cmb->add_field(array(
		'id'         => 'infiniti_faq_group',
		'type'       => 'group',
		'repeatable' => true, // Включаем повторение
		'options'    => array(
			'group_title'   => __('Вопрос {#}', 'infiniti'),
			'add_button'    => __('Добавить еще вопрос', 'infiniti'),
			'remove_button' => __('Удалить', 'infiniti'),
			'sortable'      => true, // Можно менять порядок
		),
	));

	// Добавляем поле "Вопрос" внутрь группы
	$cmb->add_group_field($group_field_id, array(
		'name' => __('Вопрос', 'infiniti'),
		'id'   => 'question',
		'type' => 'text',
		'desc' => __('Введите вопрос', 'infiniti'),
		'attributes' => array(
			'style' => 'width:80%;',
		),
	));

	// Добавляем поле "Ответ" внутрь группы
	$cmb->add_group_field($group_field_id, array(
		'name' => __('Ответ', 'infiniti'),
		'id'   => 'answer',
		'type' => 'textarea',
		'attributes' => array(
			'rows' => 2,
			'style' => 'width:80%;',
		),
	));
}



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/woocommerce.php';
}
