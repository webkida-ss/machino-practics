<nav class="inner nav">
	<ul class="nav__list">
		<li class="nav__item">
			<a href="<?php echo esc_url(home_url()); ?>">
				<strong>トップページ</strong>
				<span>Top</span>
			</a>
		</li>
		<li class="nav__item">
			<a href="<?php echo esc_url(home_url() . '/news'); ?>">
				<strong>お知らせ</strong>
				<span>News</span>
			</a>
		</li>
		<li class="nav__item">
			<a href="<?php echo esc_url(home_url() . '/menu'); ?>">
				<strong>メニュー</strong>
				<span>Menu</span>
			</a>
		</li>
		<li class="nav__item">
			<a href="<?php echo esc_url(home_url() . '/introduction'); ?>">
				<strong>店舗紹介</strong>
				<span>Introduction</span>
			</a>
		</li>
		<li class="nav__item">
			<a href="<?php echo esc_url(home_url() . '/qa'); ?>">
				<strong>Q&A</strong>
				<span>Q&A</span>
			</a>
		</li>
		<li class="nav__item">
			<a href="<?php echo esc_url(home_url() . '/contact'); ?>">
				<strong>お問い合わせ</strong>
				<span>Contact</span>
			</a>
		</li>
	</ul>

	<!-- ハードコーディング -->
	<?php
	// wp_nav_menu(
	// 	array(
	// 		'depth' => 0, // メニュー階層
	// 		'theme_location' => 'nav', // ナビゲーションメニューを表示
	// 		'container' => 'nav', // ラップをnav指定
	// 		// 'menu_class' => 'nav__list', // ulに付与するクラスじゃない。。
	// 	)
	// );
	?>
</nav>