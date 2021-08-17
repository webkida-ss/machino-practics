<?php

/************************************************************************
 * ファイル取込み
 ************************************************************************/

// アクションフック
get_template_part('src-php/99_functions/action-hook/_admin_menu');
get_template_part('src-php/99_functions/action-hook/_after_setup_theme');
get_template_part('src-php/99_functions/action-hook/_init');
get_template_part('src-php/99_functions/action-hook/_widgets_init');
get_template_part('src-php/99_functions/action-hook/_wp_enqueue_scripts');

// その他
get_template_part('src-php/99_functions/_filter-hook'); // フィルターフック
get_template_part('src-php/99_functions/_short-code'); // ショートコード
get_template_part('src-php/99_functions/_user-define'); // ユーザ定義関数

// function mvwpform_autop_filter()
// {
// 	if (class_exists('MW_WP_Form_Admin')) {
// 		$mw_wp_form_admin = new MW_WP_Form_Admin();
// 		$forms = $mw_wp_form_admin->get_forms();
// 		foreach ($forms as $form) {
// 			add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
// 		}
// 	}
// }
// mvwpform_autop_filter();
