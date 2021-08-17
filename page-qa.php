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
				<section class="section page-qa">
					<h3 class="section__title"><?php the_title(); ?></h3>
					<div class="page-qa__content">
						<dl class="page-qa__list">
							<div class="page-qa__item">
								<dt class="page-qa__item--head js-accordion">質問1</dt>
								<dd class="page-qa__item--body">
									解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。
									解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。
									解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。
								</dd>
							</div>
							<div class="page-qa__item">
								<dt class="page-qa__item--head js-accordion">質問2</dt>
								<dd class="page-qa__item--body">
									解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。
									解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。
									解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。
								</dd>
							</div>
							<div class="page-qa__item">
								<dt class="page-qa__item--head js-accordion">質問3</dt>
								<dd class="page-qa__item--body">
									解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。
									解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。
									解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。
								</dd>
							</div>
							<div class="page-qa__item">
								<dt class="page-qa__item--head js-accordion">質問4</dt>
								<dd class="page-qa__item--body">
									解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。
									解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。
									解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。
								</dd>
							</div>
							<div class="page-qa__item">
								<dt class="page-qa__item--head js-accordion">質問5</dt>
								<dd class="page-qa__item--body">
									解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。
									解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。
									解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。
								</dd>
							</div>
						</dl>


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