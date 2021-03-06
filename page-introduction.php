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
				<section class="section page-introduction">
					<h3 class="section__title"><?php the_title(); ?></h3>
					<div class="page-introduction__content">
						<div class="page-introduction__img">
							<img src="<?php the_field('introduction_img'); ?>" alt="店舗紹介">
						</div>
						<div class="page-introduction__msg">
							<?php the_field('introduction_msg'); ?>
						</div>
					</div>
				</section>

				<!-- 院長挨拶 -->
				<?php get_template_part('src-php/20_component/04_introduction/_introduction-director'); ?>

				<!-- 店舗概要 -->
				<?php get_template_part('src-php/20_component/04_introduction/_introduction-overview'); ?>

				<!-- アクセス -->
				<?php get_template_part('src-php/20_component/04_introduction/_introduction-access'); ?>

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