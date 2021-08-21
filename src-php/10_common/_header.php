<!-- ヘッダー-->
<header class="header">
	<!-- ヘッダー上部 -->
	<div class="header__upper">
		<div class="inner header__upper--inner">
			<h1>街之接骨院は東京都新宿区にある整骨院です。ご気軽に相談・診察にお越しください。</h1>
			<div class="header__sitemap"><a href="<?php echo esc_url(home_url() . '/sitemap'); ?>">サイトマップ</a></div>
		</div>
	</div>
	<!-- ヘッダー上部 -->
	<div class="inner header__lower">
		<!-- ロゴ -->
		<h2 class="header__title">
			<a href="<?php echo esc_url(home_url()) ?>">
				<img src="<?php echo esc_url(get_template_directory_uri() . '/dist/img/ロゴ.png'); ?>" alt="ロゴ">
			</a>
		</h2>
		<!-- 内容 -->
		<div class="header__container">
			<!-- インフォメーション -->
			<div class="header__info">
				<div class="header__info--address">東京都新宿区新宿1丁目1−1-1</div>
				<div class="header__info--phone">03-0000-0000</div>
				<div class="header__info--time">9:30〜20:00</div>
				<div class="header__info--holiday">日曜・祝日午後</div>
			</div>
			<!-- 予約 -->
			<div class="header__reserve">
				<a href="<?php echo esc_url(home_url()); ?>">
					<div class="header__reserve--img">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/dist/img/LINE.png'); ?>" alt="LINEロゴ">
					</div>
					<span>LINEでの<br>ご予約・お問い合わせ</span>
			</div>
			</a>
		</div>
	</div>
</header>