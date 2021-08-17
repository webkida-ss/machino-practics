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
				<section class="section page-sitemap">
					<h3 class="section__title"><?php the_title(); ?></h3>
					<div class="page-sitemap__content">
						<ul class="page-sitemap__list">
							<li class="page-sitemap__item"><a href="<?php echo esc_url(home_url()) ?>">街之接骨院</a></li>
							<li class="page-sitemap__item"><a href="<?php echo esc_url(home_url() . '/news') ?>">お知らせ</a></li>
							<li class="page-sitemap__item"><a href="<?php echo esc_url(home_url() . '/menu') ?>">メニュー</a></li>
							<li class="page-sitemap__item"><a href="<?php echo esc_url(home_url() . '/introduction') ?>">店舗紹介</a></li>
							<li class="page-sitemap__item"><a href="<?php echo esc_url(home_url() . '/qa') ?>">Q&A</a></li>
							<li class="page-sitemap__item"><a href="<?php echo esc_url(home_url() . '/contact') ?>">お問い合わせ</a></li>
						</ul>
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