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
				<!-- メニュー -->
				<section class="section page-menu">
					<h3 class="section__title"><?php the_title(); ?></h3>
					<div class="page-menu__container">
						<?php if (have_rows('menu_list')) : ?>
							<?php while (have_rows('menu_list')) : the_row(); ?>
								<div class="page-menu__item">
									<div class="page-menu__item--img">
										<img src="<?php the_sub_field('menu_list_img'); ?>" alt="メニュー画像">
									</div>
									<div class="page-menu__item--content">
										<p class="page-menu__item--title"><?php the_sub_field('menu_list_title'); ?></p>
										<p class="page-menu__item--desc"><?php the_sub_field('menu_list_desc'); ?></p>
										<ul class="page-menu__item--cource">
											<li class="page-menu__item--cource-item">
												<dt>40分</dt>
												<dd><?php echo number_format(get_sub_field('menu_list_cource_40')); ?></dd>
											</li>
											<li class="page-menu__item--cource-item">
												<dt>60分</dd>
												<dd><?php echo number_format(get_sub_field('menu_list_cource_60')); ?></dd>
											</li>
											<li class="page-menu__item--cource-item">
												<dt>80分</dt>
												<dd><?php echo number_format(get_sub_field('menu_list_cource_80')); ?></dd>
											</li>
										</ul>
									</div><!-- /.page-menu__item--content -->
								</div><!-- /.page-menu__item -->
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</section>

				<!-- オプション -->
				<?php get_template_part('src-php/20_component/05_menu/_menu-option'); ?>

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