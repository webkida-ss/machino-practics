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