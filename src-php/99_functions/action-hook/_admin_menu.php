<?php

/************************************************************************
 * 管理メニュー修正
 * https://qiita.com/konweb/items/5483efbe87087eff5cc8
 * https://hirashimatakumi.com/blog/3916.html
 ************************************************************************/

add_action('admin_menu', function () {
	// global $menu;
	// unset($menu[5]);  // 投稿
	// remove_menu_page( 'edit.php' );// 投稿
});

// https://yuki.world/wp-category-required/#t_functionsphp
// カスタム投稿タイプ"news"編集画面のデフォルトカテゴリ選択メタボックスを非表示
// function faq_category_meta_box_remove()
// {
// 	$id = 'news_categorydiv';
// 	$post_type = 'news';
// 	$position = 'side';
// 	remove_meta_box($id, $post_type, $position);
// }
// add_action('admin_menu', 'faq_category_meta_box_remove');
