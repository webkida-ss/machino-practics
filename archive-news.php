<!DOCTYPE html>
<html lang="en">

<head>
	<?php get_header(); ?>
</head>

<body>
	<div class="wrapper">

		<!-------------------------------------------------- 
		- ヘッダー|ナビゲーション|パンくずリスト
		---------------------------------------------------->
		<?php get_template_part('src-php/10_common/_header'); ?>
		<?php get_template_part('src-php/10_common/_nav'); ?>
		<?php get_template_part('src-php/10_common/_breadcrumb'); ?>

		<!-------------------------------------------------- 
		- メイン|サイドバー
		---------------------------------------------------->
		<div class="inner container">
			<!-------------------------- 
			- メイン
			---------------------------->
			<main class="main">

				<!-- 投稿一覧を表示 -->
				<section class="section archive-news">
					<h3 class="section__title">お知らせ：全て</h3>
					<?php
					$args = array(
						'post_type' => 'news',
						'order' => 'DESC',
						'posts_per_page' => 5 // 無制限
					);
					$the_query = get_posts($args); // お知らせアーカイブ取得
					get_template_part('src-php/20_component/02_news/_news-archive', null, $the_query);
					wp_reset_query();
					?>
					<div class="archive-news__navi"><?php wp_pagenavi(); ?></div>
				</section>
			</main>

			<!-------------------------- 
			- サイドバー
			---------------------------->
			<?php get_sidebar(); ?>

		</div><!-- /.container -->

		<!-------------------------------------------------- 
		- フッター
		---------------------------------------------------->
		<?php get_template_part('src-php/10_common/_footer'); ?>
	</div><!-- /.wrapper -->

	<?php get_footer(); ?>
</body>

</html>