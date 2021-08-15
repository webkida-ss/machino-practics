<?php

/**
 * ウィジェットの登録
 */
add_action(
	'widgets_init',
	function () {
		register_sidebar(
			array(
				'name' => 'サイドバー', // 表示するエリア名
				'id' => 'sidebar', // id
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget' => '</section>',
				'before_title' => '<h3 class="sidebar-title">',
				'after_title' => '</h3>',
			)
		);
	}
);
