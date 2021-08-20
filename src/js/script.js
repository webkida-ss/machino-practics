jQuery(function () {


	/*********************************************
	 * 1文字ずつ表示
	 * jQuery
	 *********************************************/
	let topTitle = jQuery(".top__title");

	// スペースで区切りして1文字ずつspanで囲む
	let newTopTitleHtml = "";
	let topTitleHtml = topTitle.html();
	let text = jQuery.trim(topTitleHtml);
	text.split("").forEach(function (c) {
		newTopTitleHtml += '<span>' + c + '</span>';
	});

	// spanで囲んだテキスト群をHTMLに戻す
	topTitle.html(newTopTitleHtml);

	// 1文字ずつ表示
	let textIndex = 0;
	let speed = 100; // 1文字を表示する間隔
	setInterval(function () { // setInterval：特定の間隔で処理を実行
		topTitle.find('span').eq(textIndex).css({
			opacity: 1
		});
		textIndex++
	}, speed);

	/*********************************************
	 * アコーディオン
	 * jQuery
	 *********************************************/
	jQuery('.js-accordion').click(function () {

		// 解答結果の表示
		jQuery(this).next().slideToggle(); // display: none;を制御

		// ヘッドの表示制御
		jQuery(this).toggleClass('is-open');
	});
})