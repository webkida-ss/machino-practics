jQuery(function () {

	/*********************************************
	 * WOW初期化
	 *********************************************/
	new WOW().init();

	/*********************************************
	 * スムーススクロール
	 *********************************************/
	jQuery('a[href^="#"]').click(function () {
		let header = jQuery('.header').innerHeight();
		let speed = 500;
		let id = jQuery(this).attr("href"); // 遷移先ID（href属性）
		let target = jQuery("#" == id ? "html" : id); // #のみだhtmlタグ（トップ）に戻る
		let position = jQuery(target).offset().top - header; // 固定ヘッダー分引く
		// ヘッダーがfixedでない場合
		if (jQuery(".header").css("position") !== "fixed") {
			position = jQuery(target).offset().top;
		}
		if (position < 0) {
			position = 0;
		}
		jQuery("html, body").animate({
				scrollTop: position
			},
			speed
		);
		return false;
	});

	/*********************************************
	 * フローティングアイテム
	 *********************************************/
	jQuery(window).on("scroll", function () {
		if (jQuery(this).scrollTop() > 200) {
			jQuery('.util__floating').addClass('is-show');
		} else {
			jQuery('.util__floating').removeClass('is-show');
		}
	});

	/*********************************************
	 * ドロワー
	 * jQuery
	 *********************************************/
	let drawerBtn = jQuery("#js-drawer");
	drawerBtn.on("click", function (e) {
		e.preventDefault();
		let targetClass = jQuery(this).attr("data-target");
		jQuery("." + targetClass).toggleClass("is-checked"); // for-drawerクラスがついてる要素をトグルでis-checked
		return false;
	});
	// リンク選択時にドロワーを閉じる
	jQuery('.js-drawer-item').on('click', function (e) {
		let targetClass = drawerBtn.attr("data-target");
		jQuery("." + targetClass).removeClass('is-checked');
	});
	jQuery(window).resize(function () {
		if (jQuery(window).width() > 559) {
			let targetClass = drawerBtn.attr("data-target");
			jQuery("." + targetClass).removeClass('is-checked');
		}
	});

	/*********************************************
	 * アコーディオン
	 * jQuery
	 *********************************************/
	jQuery('.js-accordion').click(function () {
		// anwserの表示制御
		jQuery(this).children('.').next().slideToggle();
		// 直下のquestion-textの表示制御
		jQuery(this).find('.').toggleClass('is-open');
	});
})