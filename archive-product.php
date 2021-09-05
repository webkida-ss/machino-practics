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
				<section class="section archive-product">
					<h3 class="section__title">商品一覧</h3>
					<div class="archive-product__container">
						<?php if (have_posts()) : ?>
							<ul class="archive-product__list">
								<?php
								while (have_posts()) : the_post();
									get_template_part('src-php/20_component/06_product/_product-item');
								endwhile;
								?>
							</ul>
						<?php endif; ?>
						<div class="archive-product__navi"><?php wp_pagenavi(); ?></div>
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