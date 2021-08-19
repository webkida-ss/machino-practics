<?php
// 固定ページ：店舗紹介 の情報取得
$post = get_page_by_path('introduction');
$post_id = $post->ID;
?>

<section class="introduction-director">
	<h3 class="section__title">院長挨拶</h3>
	<div class="introduction-director__container">
		<div class="introduction-director__img">
			<img src="<?php the_field('director_img', $post_id); ?>" alt="院長画像">
		</div>
		<div class="introduction-director__msg">
			<?php the_field('director_msg', $post_id); ?>
		</div>
	</div>
	<div class="util__link introduction-director__link">
		<a href="<?php echo esc_url(home_url() . '/introduction'); ?>">
			<span>店舗紹介を見る</span>
			<span>店舗紹介を見る</span>
		</a>
	</div>

</section>