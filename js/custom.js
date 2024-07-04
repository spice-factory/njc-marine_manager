jQuery(document).ready(function ($) {
	{
		/* ==========================================================================
				solution anchor link + story summary anchor link
		========================================================================== */

		$('#page-link a[href*="#"]').click(function () {//全てのページ内リンクに適用させたい場合はa[href*="#"]のみでもOK
			var elmHash = $(this).attr('href'); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
			var pos = $(elmHash).offset().top - 120;//idの上部の距離からHeaderの高さを引いた値を取得
			$('body,html').animate({ scrollTop: pos }, 1000); //取得した位置にスクロール。500の数値が大きくなるほどゆっくりスクロール
			return false;
		});

		$('#toc_container a[href*="#"]').click(function () {//全てのページ内リンクに適用させたい場合はa[href*="#"]のみでもOK
			var elmHash = $(this).attr('href'); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
			var pos = $(elmHash).offset().top - 120;//idの上部の距離からHeaderの高さを引いた値を取得
			$('body,html').animate({ scrollTop: pos }, 1000); //取得した位置にスクロール。500の数値が大きくなるほどゆっくりスクロール
			return false;
		});



		var article_length;
		article_length = $('.articleList-item li').length;
		if (article_length == 2 || article_length == 5 || article_length == 8) {
			$('.articleList-item').css({
				'justifyContent': 'flex-start',
				'gap': '6rem'
			});
		}

	}
});
