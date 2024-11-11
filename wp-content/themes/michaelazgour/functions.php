<?php

if (!isset($content_width)) {
	$content_width = 1920;
}

if (!function_exists('azgour_setup')) :
	function azgour_setup()
	{

		load_theme_textdomain('azgour', get_template_directory() . '/languages');

		add_theme_support('post-thumbnails');
		add_image_size('img_rotator', 1920, 1200, array('center', 'center'));
		add_image_size('resp_L', 1920, 0, array('center', 'center'));
		add_image_size('resp_M', 960, 0, array('center', 'center'));
		add_image_size('resp_S', 640, 0, array('center', 'center'));
		add_image_size('full_size', 1920, 600, array('center', 'center'));
		add_image_size('full_sizeS', 580, 464, array('center', 'center'));
		add_image_size('full_sizeM', 800, 640, array('center', 'center'));
		add_image_size('standard_thumb', 800, 545, array('center', 'center'));
		add_image_size('module_thumb', 640, 436, array('center', 'center'));
		add_image_size('module_thumb2', 480, 327, array('center', 'center'));
		add_image_size('module_thumb3', 426, 290, array('center', 'center'));
		add_image_size('module_thumb4', 341, 232, array('center', 'center'));
		add_image_size('module_thumb5', 266, 181, array('center', 'center'));
		add_image_size('module_thumb6', 213, 145, array('center', 'center'));
		add_image_size('news_thumb', 1024, 698, array('center', 'center'));
		add_image_size('news_thumb2', 700, 477, array('center', 'center'));
		add_image_size('news_thumb3', 540, 368, array('center', 'center'));
		add_image_size('news_thumb4', 448, 305, array('center', 'center'));

		add_theme_support('title-tag');

		register_nav_menus(array(
			'main' => __('Main Menu', 'azgour'),
		));

		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption'
		));
	}
endif;
add_action('after_setup_theme', 'azgour_setup');

add_role('custom_user', 'Custom User', array(
	'activate_plugins' => false,
	'delete_others_pages' => true,
	'delete_others_posts' => true,
	'delete_pages' => true,
	'delete_posts' => true,
	'delete_private_pages' => true,
	'delete_private_posts' => true,
	'delete_published_pages' => true,
	'delete_published_posts' => true,
	'edit_dashboard' => true,
	'edit_others_pages' => true,
	'edit_others_posts' => true,
	'edit_pages' => true,
	'edit_posts' => true,
	'edit_private_pages' => true,
	'edit_private_posts' => true,
	'edit_published_pages' => true,
	'edit_published_posts' => true,
	'edit_theme_options' => false,
	'export' => true,
	'import' => true,
	'list_users' => true,
	'manage_categories' => true,
	'manage_links' => true,
	'manage_options' => false,
	'moderate_comments' => true,
	'promote_users' => false,
	'publish_pages' => true,
	'publish_posts' => true,
	'read_private_pages' => true,
	'read_private_posts' => true,
	'read' => true,
	'remove_users' => false,
	'switch_themes' => false,
	'upload_files' => true,
	'update_core' => false,
	'update_plugins' => false,
	'update_themes' => false,
	'install_plugins' => false,
	'install_themes' => false,
	'delete_themes' => false,
	'delete_plugins' => false,
	'edit_plugins' => false,
	'edit_themes' => false,
	'edit_files' => true,
	'edit_users' => false,
	'add_users' => false,
	'create_users' => false,
	'delete_users' => false,
	'unfiltered_html' => true,
));

function add_image_sizes()
{
	add_image_size('standard-thumb', 800, 545, TRUE);
}
add_action('init', 'add_image_sizes');

function display_image_sizes($sizes)
{
	$sizes['standard-thumb'] = __('Standard Thumb - 800x545');
	return $sizes;
}
add_filter('image_size_names_choose', 'display_image_sizes');

add_filter('wp_get_attachment_image_attributes', function ($attr) {
	if (isset($attr['sizes'])) unset($attr['sizes']);
	if (isset($attr['srcset'])) unset($attr['srcset']);
	return $attr;
}, PHP_INT_MAX);
add_filter('wp_calculate_image_sizes', '__return_false', PHP_INT_MAX);
add_filter('wp_calculate_image_srcset', '__return_false', PHP_INT_MAX);
remove_filter('the_content', 'wp_make_content_images_responsive');

function azgour_widgets_init()
{
	register_sidebar(array(
		'name'          => __('Footer Contact', 'azgour'),
		'id'            => 'footer-1',
		'description'   => __('Add widgets here to appear in your footer.', 'azgour'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="widget-title">',
		'after_title'   => '</span>',
	));
	register_sidebar(array(
		'name'          => __('Footer Social 1', 'azgour'),
		'id'            => 'footer-21',
		'description'   => __('Add widgets here to appear in your footer.', 'azgour'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="widget-title">',
		'after_title'   => '</span>',
	));
	register_sidebar(array(
		'name'          => __('Footer Social 2', 'azgour'),
		'id'            => 'footer-22',
		'description'   => __('Add widgets here to appear in your footer.', 'azgour'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="widget-title">',
		'after_title'   => '</span>',
	));
	register_sidebar(array(
		'name'          => __('Footer Site Map', 'azgour'),
		'id'            => 'footer-3',
		'description'   => __('Add widgets here to appear in your footer.', 'azgour'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="widget-title">',
		'after_title'   => '</span>',
	));
	register_sidebar(array(
		'name'          => __('Footer Paintings', 'azgour'),
		'id'            => 'footer-4',
		'description'   => __('Add widgets here to appear in your footer.', 'azgour'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="widget-title">',
		'after_title'   => '</span>',
	));
	register_sidebar(array(
		'name'          => __('Footer Newsletter', 'azgour'),
		'id'            => 'footer-5',
		'description'   => __('Add widgets here to appear in your footer.', 'azgour'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="widget-title">',
		'after_title'   => '</span>',
	));
	register_sidebar(array(
		'name'          => __('Contact Form', 'azgour'),
		'id'            => 'contact_form',
		'description'   => __('Add widgets here to appear in your footer.', 'azgour'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	));
	register_sidebar(array(
		'name'          => __('Inquiry Form', 'azgour'),
		'id'            => 'inquiry_form',
		'description'   => __('Add widgets here to appear in your paintings.', 'azgour'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	));
}
add_action('widgets_init', 'azgour_widgets_init');

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css()
{
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wp-block-library-theme');
}
add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css');

add_action('wp_enqueue_scripts', function () {
	if (!is_admin()) {
		wp_deregister_script('wp-embed');
		wp_deregister_script('wp-emoji');
	}
});

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

function azgour_scripts()
{
	wp_enqueue_script('azgour-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array('jquery'), NULL, true);
	wp_enqueue_script('azgour-jquery-ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js', array('jquery'), NULL, true);
	// wp_enqueue_script('azgour-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), NULL, true);
	// wp_enqueue_script('azgour-loaded', 'https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js', array('jquery'), NULL, true);
	// wp_enqueue_script('azgour-masonry', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array('jquery'), NULL, true);
	wp_enqueue_script('azgour-fancy', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js', array('jquery'), NULL, true);
	wp_enqueue_script('azgour-swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array('jquery'), NULL, true);
	wp_enqueue_script('azgour-functions', get_template_directory_uri() . '/js/functions.js', array('jquery'), '2.2.1', true);
	// wp_enqueue_script( 'azgour-mailer', get_template_directory_uri() . '/js/mailer.js', array( 'jquery' ), NULL, true );
}
add_action('wp_enqueue_scripts', 'azgour_scripts');

remove_filter('the_excerpt', 'wpautop');


function load_custom_wp_admin_scripts()
{
	wp_register_script('multi-img', get_template_directory_uri() . '/js/multiImg.js', array('jquery'), NULL);
	wp_enqueue_script('multi-img');
}
add_action('admin_enqueue_scripts', 'load_custom_wp_admin_scripts');

/*  CUSTOM POST TYPE: 'Paintings'  */
function create_paintings()
{

	register_post_type(
		'paintings',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Paintings'),
				'singular_name' => __('Paintings')
			),
			'menu_icon' => 'dashicons-admin-customizer',
			'menu_position' => 5,
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'paintings'),
		)
	);
}
add_action('init', 'create_paintings');

function paintings_post_type()
{

	$labels = array(
		'name'                => _x('Paintings', 'Post Type General Name', 'azgour'),
		'singular_name'       => _x('Paintings', 'Post Type Singular Name', 'azgour'),
		'menu_name'           => __('Paintings', 'azgour'),
		'parent_item_colon'   => __('Parent Paintings', 'azgour'),
		'all_items'           => __('All Paintings', 'azgour'),
		'view_item'           => __('View Paintings', 'azgour'),
		'add_new_item'        => __('Add New Paintings', 'azgour'),
		'add_new'             => __('Add New', 'azgour'),
		'edit_item'           => __('Edit Paintings', 'azgour'),
		'update_item'         => __('Update Paintings', 'azgour'),
		'search_items'        => __('Search Paintings', 'azgour'),
		'not_found'           => __('Not Found', 'azgour'),
		'not_found_in_trash'  => __('Not found in Trash', 'azgour'),
	);

	$args = array(
		'label'               => __('paintings', 'azgour'),
		'description'         => __('Paintings', 'azgour'),
		'labels'              => $labels,
		'supports'            => array('title', 'thumbnail',),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);

	register_post_type('paintings', $args);
}
add_action('init', 'paintings_post_type', 0);

add_action('init', 'my_rem_editor_from_post_type');
function my_rem_editor_from_post_type()
{
	remove_post_type_support('paintings', 'editor');
}

add_action('init', 'create_series_taxonomy', 0);
function create_series_taxonomy()
{

	$labels = array(
		'name' => _x('Series', 'taxonomy general name'),
		'singular_name' => _x('Series', 'taxonomy singular name'),
		'search_items' =>  __('Search Series'),
		'popular_items' => __('Popular Series'),
		'all_items' => __('All Series'),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __('Edit Series'),
		'update_item' => __('Update Series'),
		'add_new_item' => __('Add New Series'),
		'new_item_name' => __('New Series Name'),
		'separate_items_with_commas' => __('Separate Series with commas'),
		'add_or_remove_items' => __('Add or remove Series'),
		'choose_from_most_used' => __('Choose from the most used Series'),
		'menu_name' => __('Series'),
	);

	register_taxonomy('series', 'paintings', array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var' => true,
		'rewrite' => array('slug' => 'series'),
	));
}

add_action('init', 'create_years_taxonomy', 0);
function create_years_taxonomy()
{

	$labels = array(
		'name' => _x('Year', 'taxonomy general name'),
		'singular_name' => _x('Year', 'taxonomy singular name'),
		'search_items' =>  __('Search Years'),
		'popular_items' => __('Popular Years'),
		'all_items' => __('All Years'),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __('Edit Year'),
		'update_item' => __('Update Year'),
		'add_new_item' => __('Add New Year'),
		'new_item_name' => __('New Year Name'),
		'separate_items_with_commas' => __('Separate years with commas'),
		'add_or_remove_items' => __('Add or remove years'),
		'choose_from_most_used' => __('Choose from the most used years'),
		'menu_name' => __('Year'),
	);

	register_taxonomy('years', 'paintings', array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var' => true,
		'rewrite' => array('slug' => 'years'),
	));
}

function paintings_filter_enqueues()
{
	wp_enqueue_script('paintings-filter', get_stylesheet_directory_uri() . '/js/paintings-filter.js', array('jquery'), NULL, true);
	wp_localize_script('paintings-filter', 'paintingsFilterAjax', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'paintings_filter_enqueues');


function years_news_tags_filter()
{
	$tax = 'years';
	$terms = get_terms($tax);
	$count = count($terms);

	if ($count > 0) : ?>
		<ul class="years-tags">
			<?php
			foreach ($terms as $term) {
				$term_link = get_term_link($term);
				echo '<li><a href="' . esc_url($term_link) . '" class="' . $term->slug . '" title="' . $term->slug . '">' . $term->name . '</a></li>';
			} ?>
		</ul>
		<?php endif;
}

add_action('wp_ajax_filter_paintings_by_tax', 'filter_paintings_by_tax');
add_action('wp_ajax_nopriv_filter_paintings_by_tax', 'filter_paintings_by_tax');

function filter_paintings_by_tax()
{


	$jsonYear = stripslashes($_POST['jsonY']);
	$jsonYear = json_decode($jsonYear, TRUE);
	$terms_years = $jsonYear;

	if (!empty($terms_years)) {
		$years = array(
			'taxonomy' => 'years',
			'field' => 'slug',
			'terms' => $terms_years,
		);
	}

	$args = array(
		'post_type' => 'paintings',
		'post_status' => 'publish',
		'posts_per_page' => -1,
		'tax_query' => array(
			$years,
		),
	);

	$query = new WP_Query($args);
	ob_start();
	if ($query->have_posts()) {
		while ($query->have_posts()) : $query->the_post(); ?>
			<?php
			global $paintings_mb;
			$meta1 = get_post_meta(get_the_ID(), $paintings_mb->get_the_id(), TRUE);
			$data = $meta1['title'];
			$description = $meta1['description'];
			$sold = $meta1['is_sold'];
			$not_show = $meta1['not_main'];
			?>
			<?php if (!$not_show) : ?>
				<?php
				global $post;
				$terms = get_the_terms($post->ID, 'series');
				if (!empty($terms)) {
					// get the first term
					$term = array_shift($terms);
					$name = $term->name;
				}
				?>
				<div class="row" data-series="<?php echo $name; ?>">
					<div class="col-xs-16 the-painting hide">
						<?php the_post_thumbnail(); ?>
						<div class="credits">
							<h3><?php the_title(); ?></h3>
							<p class="technique">
								<?php echo $data; ?>
							</p>
							<p class="charis">
								<?php echo $description; ?>
							</p>
							<a href="#" class="more-link" data-title="<?php the_title(); ?>">
								more information
							</a>
							<?php /*
						if($sold){
							?>
								<div class="buttonB sold solded">
									Collected
								</div>
							<?php
						} else {
							?>
								<a href="#" class="buttonB sold" data-title="<?php the_title(); ?>">
									Available: Inquire
								</a>
							<?php
						}
					*/ ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
	<?php endwhile;
	}
	wp_reset_query();
	$content = ob_get_clean();
	echo $content;
	die();
}


include_once 'metaboxes/setup.php';

include_once 'metaboxes/paintings-spec.php';

/**
 * Hide editor on specific pages.
 *
 */
add_action('admin_init', 'hide_editor');
function hide_editor()
{
	$post_id = false;
	if (isset($_GET['post']) && $_GET['post']) {
		$post_id = $_GET['post'];
	}
	if (isset($_POST['post_ID']) && $_POST['post_ID']) {
		$post_id = $_POST['post_ID'];
	}
	if (!$post_id) return;
	$template_file = get_post_meta($post_id, '_wp_page_template', true);
	if ($template_file == 'archive-paintings.php') {
		remove_post_type_support('page', 'editor');
	}
}

/*  CUSTOM POST TYPE: 'public_art'  */
function create_public_art()
{

	register_post_type(
		'public_art',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Public Art'),
				'singular_name' => __('Public Art')
			),
			'menu_icon' => 'dashicons-universal-access-alt',
			'menu_position' => 5,
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'public_art'),
		)
	);
}
add_action('init', 'create_public_art');

function public_art_post_type()
{

	$labels = array(
		'name'                => _x('Public Art', 'Post Type General Name', 'azgour'),
		'singular_name'       => _x('Public Art', 'Post Type Singular Name', 'azgour'),
		'menu_name'           => __('Public Art', 'azgour'),
		'parent_item_colon'   => __('Parent Public Art', 'azgour'),
		'all_items'           => __('All Public Art', 'azgour'),
		'view_item'           => __('View Public Art', 'azgour'),
		'add_new_item'        => __('Add New Public Art', 'azgour'),
		'add_new'             => __('Add New', 'azgour'),
		'edit_item'           => __('Edit Public Art', 'azgour'),
		'update_item'         => __('Update Public Art', 'azgour'),
		'search_items'        => __('Search Public Art', 'azgour'),
		'not_found'           => __('Not Found', 'azgour'),
		'not_found_in_trash'  => __('Not found in Trash', 'azgour'),
	);

	$args = array(
		'label'               => __('public_art', 'azgour'),
		'description'         => __('Public Art', 'azgour'),
		'labels'              => $labels,
		'supports'            => array('title', 'editor', 'thumbnail',),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);

	register_post_type('public_art', $args);
}
add_action('init', 'public_art_post_type', 0);



/*  CUSTOM POST TYPE: 'news_exhibitions'  */
function create_news_exhibitions()
{

	register_post_type(
		'news_exhibitions',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('News&Exhibitions'),
				'singular_name' => __('News&Exhibitions')
			),
			'menu_icon' => 'dashicons-megaphone',
			'menu_position' => 5,
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'news_exhibitions'),
		)
	);
}
add_action('init', 'create_news_exhibitions');

function news_exhibitions_post_type()
{

	$labels = array(
		'name'                => _x('News&Exhibitions', 'Post Type General Name', 'azgour'),
		'singular_name'       => _x('News&Exhibitions', 'Post Type Singular Name', 'azgour'),
		'menu_name'           => __('News&Exhibitions', 'azgour'),
		'parent_item_colon'   => __('Parent News&Exhibitions', 'azgour'),
		'all_items'           => __('All News&Exhibitions', 'azgour'),
		'view_item'           => __('View News&Exhibitions', 'azgour'),
		'add_new_item'        => __('Add New News&Exhibitions', 'azgour'),
		'add_new'             => __('Add New', 'azgour'),
		'edit_item'           => __('Edit News&Exhibitions', 'azgour'),
		'update_item'         => __('Update News&Exhibitions', 'azgour'),
		'search_items'        => __('Search News&Exhibitions', 'azgour'),
		'not_found'           => __('Not Found', 'azgour'),
		'not_found_in_trash'  => __('Not found in Trash', 'azgour'),
	);

	$args = array(
		'label'               => __('news_exhibitions', 'azgour'),
		'description'         => __('News&Exhibitions', 'azgour'),
		'labels'              => $labels,
		'supports'            => array('title', 'editor', 'excerpt', 'thumbnail'),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

	register_post_type('news_exhibitions', $args);
}
add_action('init', 'news_exhibitions_post_type', 0);

add_action('init', 'create_news_taxonomy', 0);
function create_news_taxonomy()
{

	$labels = array(
		'name' => _x('Types', 'taxonomy general name'),
		'singular_name' => _x('Type', 'taxonomy singular name'),
		'search_items' =>  __('Search Types'),
		'popular_items' => __('Popular Types'),
		'all_items' => __('All Types'),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __('Edit Type'),
		'update_item' => __('Update Type'),
		'add_new_item' => __('Add New Type'),
		'new_item_name' => __('New Type Name'),
		'separate_items_with_commas' => __('Separate Type with commas'),
		'add_or_remove_items' => __('Add or remove Type'),
		'choose_from_most_used' => __('Choose from the most used Type'),
		'menu_name' => __('Types'),
	);

	register_taxonomy('types', 'news_exhibitions', array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var' => true,
		'rewrite' => array('slug' => 'types'),
	));
}


/*  CUSTOM POST TYPE: 'Modules'  */
function create_modules()
{

	register_post_type(
		'modules',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Modules'),
				'singular_name' => __('Modules')
			),
			'menu_icon' => 'dashicons-networking',
			'menu_position' => 20,
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'modules'),
		)
	);
}
add_action('init', 'create_modules');

function modules_post_type()
{

	$labels = array(
		'name'                => _x('Modules', 'Post Type General Name', 'azgour'),
		'singular_name'       => _x('Modules', 'Post Type Singular Name', 'azgour'),
		'menu_name'           => __('Modules', 'azgour'),
		'parent_item_colon'   => __('Parent Modules', 'azgour'),
		'all_items'           => __('All Modules', 'azgour'),
		'view_item'           => __('View Modules', 'azgour'),
		'add_new_item'        => __('Add New Modules', 'azgour'),
		'add_new'             => __('Add New', 'azgour'),
		'edit_item'           => __('Edit Modules', 'azgour'),
		'update_item'         => __('Update Modules', 'azgour'),
		'search_items'        => __('Search Modules', 'azgour'),
		'not_found'           => __('Not Found', 'azgour'),
		'not_found_in_trash'  => __('Not found in Trash', 'azgour'),
	);

	$args = array(
		'label'               => __('modules', 'azgour'),
		'description'         => __('Modules', 'azgour'),
		'labels'              => $labels,
		'supports'            => array('title', 'editor', 'thumbnail',),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

	register_post_type('modules', $args);
}
add_action('init', 'modules_post_type', 0);

function custom_menu_page_removing()
{
	remove_menu_page('edit-comments.php');
	remove_menu_page('edit.php');
}
add_action('admin_menu', 'custom_menu_page_removing');

function custom_excerpt_length($length)
{
	return 24;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);
function new_excerpt_more($more)
{
	return '(...)';
}
add_filter('excerpt_more', 'new_excerpt_more');


include_once 'metaboxes/modules_spec.php';

function modules_module()
{
	global $modules_mb;
	$metaM = get_post_meta(get_the_ID(), $modules_mb->get_the_id(), TRUE);
	$module1 = $metaM['module1'];
	$module2 = $metaM['module2'];
	$module3 = $metaM['module3'];
	//var_dump($module1);
	?>
	<?php if ($module1 !== "none" || $module2 !== "none" || $module3 !== "none") : ?>
		<div class="container-full home-page" style="margin-bottom:0; padding-top:0;">
			<div class="row modules">
				<div class="col-s-53 col-xs-16 the-module">
					<?php
					if ($module1 !== "none") {
						$post_m1 = get_post($module1);
						$title_m1 = $post_m1->post_title;
						$text_m1 = $post_m1->post_content;
						$metaL1 = get_post_meta($module1, '_my_module_link', TRUE);
						$metaNT1 = get_post_meta($module1, '_my_is_new_tab', TRUE);
						$thumb_m1 = wp_get_attachment_image_src(get_post_thumbnail_id($post_m1), 'module_thumb');
						$thumb_m12 = wp_get_attachment_image_src(get_post_thumbnail_id($post_m1), 'module_thumb2');
						$thumb_m13 = wp_get_attachment_image_src(get_post_thumbnail_id($post_m1), 'module_thumb3');
						$thumb_m14 = wp_get_attachment_image_src(get_post_thumbnail_id($post_m1), 'module_thumb4');
						$thumb_m15 = wp_get_attachment_image_src(get_post_thumbnail_id($post_m1), 'module_thumb5');
						$thumb_m16 = wp_get_attachment_image_src(get_post_thumbnail_id($post_m1), 'module_thumb6');
					?>
						<picture>
							<source srcset="<?php echo $thumb_m1[0]; ?>" media="(min-width: 1441px)">
							<source srcset="<?php echo $thumb_m12[0]; ?>" media="(min-width: 1281px)">
							<source srcset="<?php echo $thumb_m13[0]; ?>" media="(min-width: 1025px)">
							<source srcset="<?php echo $thumb_m14[0]; ?>" media="(min-width: 801px)">
							<source srcset="<?php echo $thumb_m15[0]; ?>" media="(min-width: 641px)">
							<source srcset="<?php echo $thumb_m16[0]; ?>" media="(min-width: 581px)">
							<source srcset="<?php echo $thumb_m14[0]; ?>" media="(max-width: 340px)">
							<source srcset="<?php echo $thumb_m13[0]; ?>" media="(max-width: 420px)">
							<img src="<?php echo $thumb_m1[0]; ?>">
						</picture>
						<h2><?php echo $title_m1; ?></h2>
						<p><?php echo $text_m1; ?></p>
						<a href="<?php echo $metaL1; ?>" <?php if ($metaNT1) {
																echo 'target="_blank"';
															} ?>></a>
					<?php
					}
					?>
				</div>
				<div class="col-s-53 col-xs-16 the-module">
					<?php
					if ($module2 !== "none") {
						$post_m2 = get_post($module2);
						$title_m2 = $post_m2->post_title;
						$text_m2 = $post_m2->post_content;
						$metaL2 = get_post_meta($module2, '_my_module_link', TRUE);
						$metaNT2 = get_post_meta($module2, '_my_is_new_tab', TRUE);
						$thumb_m2 = wp_get_attachment_image_src(get_post_thumbnail_id($post_m2), 'module_thumb');
						$thumb_m22 = wp_get_attachment_image_src(get_post_thumbnail_id($post_m2), 'module_thumb2');
						$thumb_m23 = wp_get_attachment_image_src(get_post_thumbnail_id($post_m2), 'module_thumb3');
						$thumb_m24 = wp_get_attachment_image_src(get_post_thumbnail_id($post_m2), 'module_thumb4');
						$thumb_m25 = wp_get_attachment_image_src(get_post_thumbnail_id($post_m2), 'module_thumb5');
						$thumb_m26 = wp_get_attachment_image_src(get_post_thumbnail_id($post_m2), 'module_thumb6');
					?>
						<picture>
							<source srcset="<?php echo $thumb_m2[0]; ?>" media="(min-width: 1441px)">
							<source srcset="<?php echo $thumb_m22[0]; ?>" media="(min-width: 1281px)">
							<source srcset="<?php echo $thumb_m23[0]; ?>" media="(min-width: 1025px)">
							<source srcset="<?php echo $thumb_m24[0]; ?>" media="(min-width: 801px)">
							<source srcset="<?php echo $thumb_m25[0]; ?>" media="(min-width: 641px)">
							<source srcset="<?php echo $thumb_m26[0]; ?>" media="(min-width: 581px)">
							<source srcset="<?php echo $thumb_m24[0]; ?>" media="(max-width: 340px)">
							<source srcset="<?php echo $thumb_m23[0]; ?>" media="(max-width: 420px)">
							<img src="<?php echo $thumb_m2[0]; ?>">
						</picture>
						<h2><?php echo $title_m2; ?></h2>
						<p><?php echo $text_m2; ?></p>
						<a href="<?php echo $metaL2; ?>" <?php if ($metaNT2) {
																echo 'target="_blank"';
															} ?>></a>
					<?php
					}
					?>
				</div>
				<div class="col-s-53 col-xs-16 the-module">
					<?php
					if ($module3 !== "none") {
						$post_m3 = get_post($module3);
						$title_m3 = $post_m3->post_title;
						$text_m3 = $post_m3->post_content;
						$metaL3 = get_post_meta($module3, '_my_module_link', TRUE);
						$metaNT3 = get_post_meta($module3, '_my_is_new_tab', TRUE);
						$thumb_m3 = wp_get_attachment_image_src(get_post_thumbnail_id($post_m3), 'module_thumb');
						$thumb_m32 = wp_get_attachment_image_src(get_post_thumbnail_id($post_m3), 'module_thumb2');
						$thumb_m33 = wp_get_attachment_image_src(get_post_thumbnail_id($post_m3), 'module_thumb3');
						$thumb_m34 = wp_get_attachment_image_src(get_post_thumbnail_id($post_m3), 'module_thumb4');
						$thumb_m35 = wp_get_attachment_image_src(get_post_thumbnail_id($post_m3), 'module_thumb5');
						$thumb_m36 = wp_get_attachment_image_src(get_post_thumbnail_id($post_m3), 'module_thumb6');
					?>
						<picture>
							<source srcset="<?php echo $thumb_m3[0]; ?>" media="(min-width: 1441px)">
							<source srcset="<?php echo $thumb_m32[0]; ?>" media="(min-width: 1281px)">
							<source srcset="<?php echo $thumb_m33[0]; ?>" media="(min-width: 1025px)">
							<source srcset="<?php echo $thumb_m34[0]; ?>" media="(min-width: 801px)">
							<source srcset="<?php echo $thumb_m35[0]; ?>" media="(min-width: 641px)">
							<source srcset="<?php echo $thumb_m36[0]; ?>" media="(min-width: 581px)">
							<source srcset="<?php echo $thumb_m34[0]; ?>" media="(max-width: 340px)">
							<source srcset="<?php echo $thumb_m33[0]; ?>" media="(max-width: 420px)">
							<img src="<?php echo $thumb_m3[0]; ?>">
						</picture>
						<h2><?php echo $title_m3; ?></h2>
						<p><?php echo $text_m3; ?></p>
						<a href="<?php echo $metaL3; ?>" <?php if ($metaNT3) {
																echo 'target="_blank"';
															} ?>></a>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	<?php endif;
}


function create_quotes()
{

	register_post_type(
		'quotes',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Quotes'),
				'singular_name' => __('Quotes')
			),
			'menu_icon' => 'dashicons-format-quote',
			'menu_position' => 20,
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'quotes'),
		)
	);
}
add_action('init', 'create_quotes');

function quotes_post_type()
{

	$labels = array(
		'name'                => _x('Quotes', 'Post Type General Name', 'azgour'),
		'singular_name'       => _x('Quotes', 'Post Type Singular Name', 'azgour'),
		'menu_name'           => __('Quotes', 'azgour'),
		'parent_item_colon'   => __('Parent Quotes', 'azgour'),
		'all_items'           => __('All Quotes', 'azgour'),
		'view_item'           => __('View Quotes', 'azgour'),
		'add_new_item'        => __('Add New Quotes', 'azgour'),
		'add_new'             => __('Add New', 'azgour'),
		'edit_item'           => __('Edit Quotes', 'azgour'),
		'update_item'         => __('Update Quotes', 'azgour'),
		'search_items'        => __('Search Quotes', 'azgour'),
		'not_found'           => __('Not Found', 'azgour'),
		'not_found_in_trash'  => __('Not found in Trash', 'azgour'),
	);

	$args = array(
		'label'               => __('quotes', 'azgour'),
		'description'         => __('Quotes', 'azgour'),
		'labels'              => $labels,
		'supports'            => array('title', 'editor',),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

	register_post_type('quotes', $args);
}
add_action('init', 'quotes_post_type', 0);

include_once 'metaboxes/quotes_spec.php';
include_once 'metaboxes/the_quote_spec.php';

function quotes_module()
{
	global $quotes_mb;
	$metaQ = get_post_meta(get_the_ID(), $quotes_mb->get_the_id(), TRUE);
	$quote = $metaQ['quote'] ?? false;

	if ($quote && $quote !== "none" && $quote !== null && $quote) : ?>
		<div class="container-full home-page" style="margin-bottom:0; padding-top:0;">
			<div class="col-xs-16 the-quote">
				<?php
				$post_Q = get_post($quote);
				$text_Q = $post_Q->post_content;
				?>
				<p><?php echo $text_Q; ?></p>
			</div>
		</div>
<?php endif;
}

/*  CUSTOM POST TYPE: 'Galleries'  */
function create_galleries()
{

	register_post_type(
		'galleries',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Galleries'),
				'singular_name' => __('Galleries')
			),
			'menu_icon' => 'dashicons-format-gallery',
			'menu_position' => 5,
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'galleries'),
		)
	);
}
add_action('init', 'create_galleries');

function galleries_post_type()
{

	$labels = array(
		'name'                => _x('Galleries', 'Post Type General Name', 'azgour'),
		'singular_name'       => _x('Galleries', 'Post Type Singular Name', 'azgour'),
		'menu_name'           => __('Galleries', 'azgour'),
		'parent_item_colon'   => __('Parent Galleries', 'azgour'),
		'all_items'           => __('All Galleries', 'azgour'),
		'view_item'           => __('View Galleries', 'azgour'),
		'add_new_item'        => __('Add New Galleries', 'azgour'),
		'add_new'             => __('Add New', 'azgour'),
		'edit_item'           => __('Edit Galleries', 'azgour'),
		'update_item'         => __('Update Galleries', 'azgour'),
		'search_items'        => __('Search Galleries', 'azgour'),
		'not_found'           => __('Not Found', 'azgour'),
		'not_found_in_trash'  => __('Not found in Trash', 'azgour'),
	);

	$args = array(
		'label'               => __('galleries', 'azgour'),
		'description'         => __('Galleries', 'azgour'),
		'labels'              => $labels,
		'supports'            => array('title',),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);

	register_post_type('galleries', $args);
}
add_action('init', 'galleries_post_type', 0);

add_action('init', 'my_rem_editor_from_galleries');
function my_rem_editor_from_galleries()
{
	remove_post_type_support('galleries', 'editor');
}

include_once 'metaboxes/galleries_spec.php';

add_filter('meta_content', 'wptexturize');
add_filter('meta_content', 'convert_smilies');
add_filter('meta_content', 'convert_chars');

//use my override wpautop
if (function_exists('override_wpautop')) {
	add_filter('meta_content', 'override_wpautop');
} else {
	add_filter('meta_content', 'wpautop');
}
add_filter('meta_content', 'shortcode_unautop');
add_filter('meta_content', 'prepend_attachment');



/*  CUSTOM POST TYPE: 'CV'  */
function create_cv()
{

	register_post_type(
		'cv',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('CV'),
				'singular_name' => __('CV')
			),
			'menu_icon' => 'dashicons-id-alt',
			'menu_position' => 5,
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'cv'),
		)
	);
}
add_action('init', 'create_cv');

function cv_post_type()
{

	$labels = array(
		'name'                => _x('CV', 'Post Type General Name', 'azgour'),
		'singular_name'       => _x('CV', 'Post Type Singular Name', 'azgour'),
		'menu_name'           => __('CV', 'azgour'),
		'parent_item_colon'   => __('Parent CV', 'azgour'),
		'all_items'           => __('All CV', 'azgour'),
		'view_item'           => __('View CV', 'azgour'),
		'add_new_item'        => __('Add New CV', 'azgour'),
		'add_new'             => __('Add New', 'azgour'),
		'edit_item'           => __('Edit CV', 'azgour'),
		'update_item'         => __('Update CV', 'azgour'),
		'search_items'        => __('Search CV', 'azgour'),
		'not_found'           => __('Not Found', 'azgour'),
		'not_found_in_trash'  => __('Not found in Trash', 'azgour'),
	);

	$args = array(
		'label'               => __('cv', 'azgour'),
		'description'         => __('CV', 'azgour'),
		'labels'              => $labels,
		'supports'            => array('title', 'editor'),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);

	register_post_type('cv', $args);
}
add_action('init', 'cv_post_type', 0);

include_once 'metaboxes/cv-spec.php';

add_action('admin_init', 'hide_editor_contact');
function hide_editor_contact()
{
	$post_id = false;
	if (isset($_GET['post']) && $_GET['post']) {
		$post_id = $_GET['post'];
	}
	if (isset($_POST['post_ID']) && $_POST['post_ID']) {
		$post_id = $_POST['post_ID'];
	}
	if (!$post_id) return;
	$template_file = get_post_meta($post_id, '_wp_page_template', true);
	if ($template_file == 'contact-page.php') { // the filename of the page template
		remove_post_type_support('page', 'editor');
	}
}

include_once 'metaboxes/contact_spec.php';

include_once 'metaboxes/follow_spec.php';

add_action('admin_init', 'hide_editor_links');
function hide_editor_links()
{
	$post_id = false;
	if (isset($_GET['post']) && $_GET['post']) {
		$post_id = $_GET['post'];
	}
	if (isset($_POST['post_ID']) && $_POST['post_ID']) {
		$post_id = $_POST['post_ID'];
	}
	if (!$post_id) return;
	$template_file = get_post_meta($post_id, '_wp_page_template', true);
	if ($template_file == 'links-page.php') { // the filename of the page template
		remove_post_type_support('page', 'editor');
	}
}

include_once 'metaboxes/links_spec.php';

/*  CUSTOM POST TYPE: 'Testimonials'  */
function create_testimonials()
{

	register_post_type(
		'testimonials',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Testimonials'),
				'singular_name' => __('Testimonials')
			),
			'menu_icon' => 'dashicons-format-chat',
			'menu_position' => 20,
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'testimonials'),
		)
	);
}
add_action('init', 'create_testimonials');

function testimonials_post_type()
{

	$labels = array(
		'name'                => _x('Testimonials', 'Post Type General Name', 'azgour'),
		'singular_name'       => _x('Testimonials', 'Post Type Singular Name', 'azgour'),
		'menu_name'           => __('Testimonials', 'azgour'),
		'parent_item_colon'   => __('Parent Testimonials', 'azgour'),
		'all_items'           => __('All Testimonials', 'azgour'),
		'view_item'           => __('View Testimonials', 'azgour'),
		'add_new_item'        => __('Add New Testimonials', 'azgour'),
		'add_new'             => __('Add New', 'azgour'),
		'edit_item'           => __('Edit Testimonials', 'azgour'),
		'update_item'         => __('Update Testimonials', 'azgour'),
		'search_items'        => __('Search Testimonials', 'azgour'),
		'not_found'           => __('Not Found', 'azgour'),
		'not_found_in_trash'  => __('Not found in Trash', 'azgour'),
	);

	$args = array(
		'label'               => __('testimonials', 'azgour'),
		'description'         => __('Testimonials', 'azgour'),
		'labels'              => $labels,
		'supports'            => array('title', 'editor',),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);

	register_post_type('testimonials', $args);
}
add_action('init', 'testimonials_post_type', 0);

add_action('admin_init', 'hide_editor_testimonials');
function hide_editor_testimonials()
{
	$post_id = false;
	if (isset($_GET['post']) && $_GET['post']) {
		$post_id = $_GET['post'];
	}
	if (isset($_POST['post_ID']) && $_POST['post_ID']) {
		$post_id = $_POST['post_ID'];
	}
	if (!$post_id) return;
	$template_file = get_post_meta($post_id, '_wp_page_template', true);
	if ($template_file == 'testimonials-page.php') { // the filename of the page template
		remove_post_type_support('page', 'editor');
	}
}

include_once 'metaboxes/testimonials_spec.php';

include_once 'metaboxes/testimonials_spec2.php';

include_once 'metaboxes/the_module_spec.php';

include_once 'metaboxes/multi_img_spec.php';

include_once 'metaboxes/rotator_spec.php';

/**
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 * @param string $title Default title text for current view.
 * @param string $sep   Optional separator.
 * @return string Filtered title.
 */
function wpdocs_filter_wp_title($title, $sep)
{
	global $paged, $page, $wp_query;

	$term =	$wp_query->queried_object;
	$name = $term->slug;

	if (is_feed())
		return $title;

	// Add the site name.
	$titleH = get_bloginfo('name');
	$title .= 'AZGOUR';

	// Add the site description for the home/front page.
	$site_description = get_bloginfo('description', 'display');
	if ($site_description && (is_home() || is_front_page()))
		$title = "$titleH $sep $site_description";

	if ($site_description && (is_tax()))
		$title = "$name $sep AZGOUR";
	// Add a page number if necessary.
	if ($paged >= 2 || $page >= 2)
		$title = "$title $sep " . sprintf(__('Page %s', 'azgour'), max($paged, $page));

	return $title;
}
add_filter('wp_title', 'wpdocs_filter_wp_title', 10, 2);



function my_password_form()
{
	global $post;
	$label = 'pwbox-' . (empty($post->ID) ? rand() : $post->ID);
	$o = '<h2>' . __("This page is private, enter the password:") . '</h2><form action="' . esc_url(site_url('wp-login.php?action=postpass', 'login_post')) . '" method="post">
    <label for="' . $label . '">' . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /><input type="submit" name="Submit" value="' . esc_attr__("Submit") . '" />
    </form>
    ';
	return $o;
}
add_filter('the_password_form', 'my_password_form');


// add_filter('the_password_form', 'custom_the_password_form');

// function custom_the_password_form() {
//   $output = 'YOUR CUSTOM FORM AND TEXT HERE';
//   return $output;
// }

function custom_menu_order($menu_ord)
{
	if (!$menu_ord) return true;

	return array(
		'index.php', // Dashboard
		'separator1', // First separator
		'edit.php?post_type=page', // Pages
		'upload.php', // Media
		'separator2', // Second separator
	);
}
add_filter('custom_menu_order', 'custom_menu_order');
add_filter('menu_order', 'custom_menu_order');


add_action('admin_menu', 'add_admin_menu_separator');
function add_admin_menu_separator()
{
	add_menu_page('', '', 'read', 'wp-menu-separator', '', '', '25');
}

function create_showcase()
{

	register_post_type(
		'showcase',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Showcase'),
				'singular_name' => __('Showcase')
			),
			'menu_icon' => 'dashicons-lock',
			'menu_position' => 20,
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'showcase'),
		)
	);
}
add_action('init', 'create_showcase');

function showcase_post_type()
{

	$labels = array(
		'name'                => _x('Showcase', 'Post Type General Name', 'azgour'),
		'singular_name'       => _x('Showcase', 'Post Type Singular Name', 'azgour'),
		'menu_name'           => __('Showcase', 'azgour'),
		'parent_item_colon'   => __('Parent Showcase', 'azgour'),
		'all_items'           => __('All Showcase', 'azgour'),
		'view_item'           => __('View Showcase', 'azgour'),
		'add_new_item'        => __('Add New Showcase', 'azgour'),
		'add_new'             => __('Add New', 'azgour'),
		'edit_item'           => __('Edit Showcase', 'azgour'),
		'update_item'         => __('Update Showcase', 'azgour'),
		'search_items'        => __('Search Showcase', 'azgour'),
		'not_found'           => __('Not Found', 'azgour'),
		'not_found_in_trash'  => __('Not found in Trash', 'azgour'),
	);

	$args = array(
		'label'               => __('showcase', 'azgour'),
		'description'         => __('Showcase', 'azgour'),
		'labels'              => $labels,
		'supports'            => array('title',),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);

	register_post_type('showcase', $args);
}
add_action('init', 'showcase_post_type', 0);

include_once 'metaboxes/showcase_spec.php';

add_action('init', 'my_remove_editor_from_post_type');
function my_remove_editor_from_post_type()
{
	remove_post_type_support('showcase', 'editor');
}

include_once 'metaboxes/cv-main-spec.php';

add_filter('protected_title_format', 'blank');
function blank($title)
{
	return '%s';
}

function get_all_town_posts($query)
{
	if (!is_admin() && $query->is_main_query() && term_exists('years')) {
		$query->set('posts_per_page', '-1');
	}
}
add_action('pre_get_posts', 'get_all_town_posts');



function create_videos()
{

	register_post_type(
		'videos',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Videos'),
				'singular_name' => __('Videos')
			),
			'menu_icon' => 'dashicons-video-alt2',
			'menu_position' => 15,
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'videos'),
		)
	);
}
add_action('init', 'create_videos');

function videos_post_type()
{

	$labels = array(
		'name'                => _x('Videos', 'Post Type General Name', 'azgour'),
		'singular_name'       => _x('Videos', 'Post Type Singular Name', 'azgour'),
		'menu_name'           => __('Videos', 'azgour'),
		'parent_item_colon'   => __('Parent Videos', 'azgour'),
		'all_items'           => __('All Videos', 'azgour'),
		'view_item'           => __('View Videos', 'azgour'),
		'add_new_item'        => __('Add New Videos', 'azgour'),
		'add_new'             => __('Add New', 'azgour'),
		'edit_item'           => __('Edit Videos', 'azgour'),
		'update_item'         => __('Update Videos', 'azgour'),
		'search_items'        => __('Search Videos', 'azgour'),
		'not_found'           => __('Not Found', 'azgour'),
		'not_found_in_trash'  => __('Not found in Trash', 'azgour'),
	);

	$args = array(
		'label'               => __('videos', 'azgour'),
		'description'         => __('Videos', 'azgour'),
		'labels'              => $labels,
		'supports'            => array('title', 'editor'),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);

	register_post_type('videos', $args);
}
add_action('init', 'videos_post_type', 0);
