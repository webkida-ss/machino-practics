<footer class="footer">
	<div class="footer__upper">
		<div class="footer__upper--img">
			<a href="<?php echo esc_url(home_url()) ?>">
				<img src="<?php echo esc_url(get_template_directory_uri() . '/dist/img/ロゴ-透明.png'); ?>" alt="ロゴ">
			</a>
		</div>
		<ul class="inner footer__upper--list">
			<li><a href="<?php echo esc_url(home_url()); ?>">トップページ</a></li>
			<li><a href="<?php echo esc_url(home_url() . '/news'); ?>">お知らせ</a></li>
			<li><a href="<?php echo esc_url(home_url() . '/menu'); ?>">メニュー</a></li>
			<li><a href="<?php echo esc_url(home_url() . '/introduction'); ?>">店舗紹介</a></li>
			<li><a href="<?php echo esc_url(home_url() . '/qa'); ?>">Q&A</a></li>
			<li><a href="<?php echo esc_url(home_url() . '/contact'); ?>">お問い合わせ</a></li>
		</ul>
	</div>
	<div class="footer__lower">
		<p class="footer__copy-right">
			© 2021 街之接骨院
		</p>
	</div>
</footer>