<?php 

function codex_custom_init() {
	$labelsHistoria = array(
		'name' => _x('Histórias', 'nome plural do tipo de post'),
		'singular_name' => _x('História', 'nome singular do tipo de post'),
		'add_new' => _x('Adicionar História', 'História'),
		'add_new_item' => __('Adicionar História'),
		'edit_item' => __('Editar História'),
		'new_item' => __('Nova História'),
		'all_items' => __('Todas as Histórias'),
		'view_item' => __('Ver História'),
		'search_items' => __('Procurar por História'),
		'not_found' =>  __('Nenhuma História foi encontrada'),
		'not_found_in_trash' => __('Não há Histórias na lixeira'), 
		'parent_item_colon' => '',
		'menu_name' => 'Histórias'

	);
	$argsHistorias = array(
		'labels' => $labelsHistoria,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array( 'title', 'thumbnail' ),
		'taxonomies' => array('category')
	); 
	register_post_type('historia',$argsHistorias);

}
add_action( 'init', 'codex_custom_init' );

/**
 * Remove the slug from published post permalinks. Only affect our CPT though.
 */
function vipx_remove_cpt_slug( $post_link, $post, $leavename ) {
 
    if ( ! in_array( $post->post_type, array( 'historia' ) ) || 'publish' != $post->post_status )
        return $post_link;

    $post_link = str_replace( '/' . $post->post_type . '/', '/' .'galeria-de-historias' . '/', $post_link );	
 
    return $post_link;
}
add_filter( 'post_type_link', 'vipx_remove_cpt_slug', 10, 3 );

/**
 * Some hackery to have WordPress match postname to any of our public post types
 * All of our public post types can have /post-name/ as the slug, so they better be unique across all posts
 * Typically core only accounts for posts and pages where the slug is /post-name/
 */
function vipx_parse_request_tricksy( $query ) {
 
    // Only noop the main query
    if ( ! $query->is_main_query() )
        return;
 
    // Only noop our very specific rewrite rule match
    if ( 2 != count( $query->query )
        || ! isset( $query->query['page'] ) )
        return;
 
    // 'name' will be set if post permalinks are just post_name, otherwise the page rule will match
    if ( ! empty( $query->query['name'] ) )
        $query->set( 'post_type', array( 'post', 'historia', 'page' ) );
}
add_action( 'pre_get_posts', 'vipx_parse_request_tricksy' );
