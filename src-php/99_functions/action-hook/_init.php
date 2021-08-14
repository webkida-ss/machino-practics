<?php

// カスタムメニュー機能を有効化
add_action('admin_menu', function () {
	register_nav_menus(
		array(
			'nav' => 'ナビゲーションメニュー',
			'drawer' => 'ドロワーメニュー',
		)
	);
});
