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

		<!-- トップ -->
		<section class="top">
			<div class="top-img">
				<!-- <img src="<?php echo esc_url(get_template_directory_uri() . '/dist/img/接骨院1.jpg'); ?>" alt="トップ画像"> -->
			</div>
		</section>

		<!-------------------------------------------------- 
		- メイン|サイドバー
		---------------------------------------------------->
		<div class="inner container">
			<!-------------------------- 
			- メイン
			---------------------------->
			<main class="main">
				<!-- 診療時間：テーブル形式で表示 -->
				<section class="section top-time">
					<h3 class="section__title">診療時間</h3>
					<!-- タイムテーブル -->
					<div class="top-time__table">
						<table>
							<tbody>
								<tr>
									<th></th>
									<th>月</th>
									<th>火</th>
									<th>水</th>
									<th>木</th>
									<th>金</th>
									<th>土</th>
									<th>日</th>
									<th>祝</th>
								</tr>
								<tr>
									<td>午前　9:30～13:00</td>
									<td>●</td>
									<td>●</td>
									<td>●</td>
									<td>●</td>
									<td>●</td>
									<td>●</td>
									<td>●</td>
									<td>●</td>
								</tr>
								<tr>
									<td>午後　15:30～20:00</td>
									<td>●</td>
									<td>●</td>
									<td>●</td>
									<td>●</td>
									<td>●</td>
									<td>●</td>
									<td>●</td>
									<td>●</td>
								</tr>
							</tbody>
						</table>
						<div class="top-time__table--message">
							※ 保険証のご持参願います。
						</div>
					</div>
				</section>

				<!-- メッセージ -->
				<section class="section top-msg">
					<div class="top-msg__title">
						<h3>こんなお悩みはありませんか？</h3>
					</div>
					<ul class="top-msg__list">
						<li class="top-msg__item">お悩み1お悩み1お悩み1お悩み1お悩み1お悩み1お悩み1お悩み1お悩み1お悩み1お悩み1お悩み1</li>
						<li class="top-msg__item">お悩み2お悩み2お悩み2お悩み2お悩み2お悩み2お悩み2お悩み2お悩み2お悩み2お悩み2お悩み2</li>
						<li class="top-msg__item">お悩み3お悩み3お悩み3お悩み3お悩み3お悩み3お悩み3お悩み3お悩み3お悩み3お悩み3お悩み3</li>
						<li class="top-msg__item">お悩み4お悩み4お悩み4お悩み4お悩み4お悩み4お悩み4お悩み4お悩み4お悩み4お悩み4お悩み4</li>
						<li class="top-msg__item">お悩み5お悩み5お悩み5お悩み5お悩み5お悩み5お悩み5お悩み5お悩み5お悩み5お悩み5お悩み5</li>
						<li class="top-msg__item">お悩み6お悩み6お悩み6お悩み6お悩み6お悩み6お悩み6お悩み6お悩み6お悩み6お悩み6お悩み6</li>
						<li class="top-msg__item">お悩み7お悩み7お悩み7お悩み7お悩み7お悩み7お悩み7お悩み7お悩み7お悩み7お悩み7お悩み7</li>
					</ul>
				</section>

				<!-- 院長挨拶：院長紹介・店舗紹介と同様の内容を表示 -->
				<section class="section top-greeting">
					<h3 class="section__title">院長挨拶</h3>
				</section>

				<!-- 特徴 -->
				<section class="section top-feature">
					<h3 class="section__title">当院の特徴</h3>
				</section>

				<!-- お客様の声：登録した分だけ表示 -->
				<section class="section top-cutomer-boice">
					<h3 class="section__title">お客様の声</h3>
				</section>

				<!-- よくある質問：質問の内よく聞かれるものを5件抜粋 -->
				<section class="section top-qa">
					<h3 class="section__title">よくある質問</h3>

				</section>

				<!-- お知らせ：最新の5件を取得 -->
				<section class="section top-news">
					<h3 class="section__title">お知らせ：重要！</h3>
					<div class="top-news__content">
						<?php
						$args = array(
							'post_type' => 'news', // 投稿タイプ：お知らせ
							'order' => 'DESC',
							'tax_query' => array( // タクソノミー指定
								array(
									'taxonomy' => 'news_kind', // お知らせ種別
									'field' => 'slug',
									'terms' => 'important' // 重要
								)
							)
						);
						$the_query = get_posts($args); // お知らせアーカイブ取得
						if ($the_query) :
						?>
							<ul class="top-news__list">
								<?php
								foreach ($the_query as $post) : setup_postdata($post);
									get_template_part('src-php/20_component/02_news/_news-item');
								endforeach;
								?>
							</ul>
						<?php
						endif;
						wp_reset_query();
						?>
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