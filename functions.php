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


