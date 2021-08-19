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
					<h3 class="section__title">お知らせ</h3>
					<div class="archive-news__container">
						<?php if (have_posts()) : ?>
							<ul class="archive-news__list">
								<?php
								while (have_posts()) : the_post();
									get_template_part('src-php/20_component/02_news/_news-item');
								endwhile;
								?>
							</ul>
						<?php endif; ?>
						<div class="archive-news__navi"><?php wp_pagenavi(); ?></div>
					</div>
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