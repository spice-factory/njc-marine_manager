jQuery(document).ready(function ($) {
	{
		var article_length;
		var category = 'all';
		var tag;
		var current_page = 1;
		var max_num_pages = $('.articleList #max_num_pages').val();
		var post_count;

		// console.log(max_num_pages);
		pagination_init_btn();
		if (max_num_pages == 1) {
			$('.magazine-pagination .prev').css('display', 'none');
			$('.magazine-pagination .next').css('display', 'none');
		}

		$('.magazine-pagination .prev').css({
			display: "flex",
			opacity: "0.3",
			pointerEvents: "none",
		});
		$('.magazine-pagination [data-clicked="prev"]').css({
			pointerEvents: "none",
		});

		// Filter by category
		$('.cat').on('click', function (e) {
			e.preventDefault();
			current_page = 1;
			max_num_pages = 1;
			category = $(this).find('a').data('slug');

			$('.cat').removeClass('active');
			$(this).addClass('active');
			$('.next-link').removeClass('reveal').attr('style', '');
			$('.contact').removeClass('fadeUp').attr('style', '');
			$('.headtitle').removeClass('fadeIn').attr('style', '');
			$('.next-link-text h3').removeClass('fadeIn').attr('style', '');
			$('.top-about-text-h2 .ttl').removeClass('slideUp-2').attr('style', '').addClass('is-line');

			$('.magazine-pagination .prev').css({
				display: "flex",
				opacity: "0.3",
				pointerEvents: "none",
			});
			$('.magazine-pagination [data-clicked="prev"]').css({
				pointerEvents: "none",
			});
			$('.magazine-pagination .next').css({
				display: "flex",
				opacity: "1",
				pointerEvents: "auto",
			});
			$('.magazine-pagination [data-clicked="next"]').css({
				pointerEvents: "auto",
			});

			$('.magazine-pagination .prev').css('display', 'none');

			$('.pagination').attr('data-type', 'cat');
			pagination_init_btn();
			$.ajax({
				type: 'POST',
				url: ajax_object.ajax_url,
				dataType: 'json',
				cache: false,
				data: {
					action: 'category_filter',
					category: category,
				},
				success: function (res) {
					post_count = res.post_count;
					max_num_pages = Math.ceil(post_count / 9);

					// console.log("-- cat --");
					// console.log('tag: ' + tag);
					// console.log('current page: ' + current_page);
					// console.log('post count: ' + post_count);
					// console.log('number of pages: ' + max_num_pages);

					$('.magazine-pagination .prev').css({
						display: "flex",
						opacity: "0.3",
						pointerEvents: "none",
					});
					$('.magazine-pagination [data-clicked="prev"]').css({
						pointerEvents: "none",
					});

					$('.magazine-pagination .next').css({
						display: "flex",
						opacity: "1",
						pointerEvents: "auto",
					});
					$('.magazine-pagination [data-clicked="next"]').css({
						pointerEvents: "auto",
					});


					if (max_num_pages == 1) {
						$('.magazine-pagination .prev').css('display', 'none');
						$('.magazine-pagination .next').css('display', 'none');
					}


					$('.articleList-item').html(res.html);
					article_length = $('.articleList-item li').length;
					article_check(article_length);
				},
				error: function (xhr) {
					// console.log(xhr.responseText);
				}
			})
		});


		// Filter by tags
		$('.tag-item').on('click', function (e) {
			e.preventDefault();
			// console.log($(this));
			current_page = 1;
			max_num_pages = 1;
			tag = $(this).find('a').data('tag-slug');
			pagination_init_btn();
			// if (max_num_pages == 1) {
			// 	$('.magazine-pagination .prev').css('display', 'none');
			// 	$('.magazine-pagination .next').css('display', 'none');
			// }

			// 正しい挙動か不明
			$('.cat').removeClass('active');
			$('.catall').addClass('active');
			$('.next-link').removeClass('reveal').attr('style', '');
			$('.contact').removeClass('fadeUp').attr('style', '');
			$('.headtitle').removeClass('fadeIn').attr('style', '');
			$('.next-link-text h3').removeClass('fadeIn').attr('style', '');

			$('.top-about-text-h2 .ttl').removeClass('slideUp-2').attr('style', '').addClass('is-line');
			


			$('.magazine-pagination .prev').css({
				display: "flex",
				opacity: "0.3",
				pointerEvents: "none",
			});
			$('.magazine-pagination [data-clicked="prev"]').css({
				pointerEvents: "none",
			});
			$('.magazine-pagination .next').css({
				display: "flex",
				opacity: "1",
				pointerEvents: "auto",
			});
			$('.magazine-pagination [data-clicked="next"]').css({
				pointerEvents: "auto",
			});

			$('.pagination').attr('data-type', 'tag');
			$.ajax({
				type: 'POST',
				url: ajax_object.ajax_url,
				dataType: 'json',
				cache: false,
				data: {
					action: 'tag_filter',
					tag: tag,
				},
				success: function (res) {
					$('html, body').css('scrollBehavior', 'unset');
					$('html, body').animate({ scrollTop: $('#magazine-list').offset().top - 120 }, 300);

					post_count = res.post_count;
					max_num_pages = Math.ceil(post_count / 9);

					// console.log("-- tag-item --");
					// console.log('current page: ' + current_page);
					// console.log('post count: ' + post_count);
					// console.log('number of pages: ' + max_num_pages);

					if (max_num_pages == 1) {
						$('.magazine-pagination .prev').css('display', 'none');
						$('.magazine-pagination .next').css('display', 'none');
					}

					$('.articleList-item').html(res.html);
					article_length = $('.articleList-item li').length;
					article_check(article_length);
				},
				error: function (xhr) {
					// console.log(xhr.responseText);
				}
			})
		});


		// Filter by tags
		$(document).on('click', '.article-tag a', function (e) {
			e.preventDefault();
			current_page = 1;
			max_num_pages = 1;
			console.log($(this));
			tag = $(this).data('tag-slag');
			console.log(tag);
			pagination_init_btn();
			// if (max_num_pages == 1) {
			// 	$('.magazine-pagination .prev').css('display', 'none');
			// 	$('.magazine-pagination .next').css('display', 'none');
			// }

			$('.magazine-pagination .prev').css({
				display: "flex",
				opacity: "0.3",
				pointerEvents: "none",
			});
			$('.magazine-pagination [data-clicked="prev"]').css({
				pointerEvents: "none",
			});
			$('.pagination').attr('data-type', 'tag');

			// 正しい挙動か不明
			$('.cat').removeClass('active');
			$('.catall').addClass('active');
			$('.next-link').removeClass('reveal').attr('style', '');
			$('.contact').removeClass('fadeUp').attr('style', '');

			$('.headtitle').removeClass('fadeIn').attr('style', '');
			$('.next-link-text h3').removeClass('fadeIn').attr('style', '');

			$('.top-about-text-h2 .ttl').removeClass('slideUp-2').attr('style', '').addClass('is-line');
			
			$.ajax({
				type: 'POST',
				url: ajax_object.ajax_url,
				dataType: 'json',
				cache: false,
				data: {
					action: 'tag_filter',
					tag: tag,
				},
				success: function (res) {
					$('html, body').css('scrollBehavior', 'unset');
					$('html, body').animate({ scrollTop: $('#magazine-list').offset().top - 120 }, 300);

					post_count = res.post_count;
					max_num_pages = Math.ceil(post_count / 9);

					// console.log("-- magazine-tag-link --");
					// console.log('current page: ' + current_page);
					// console.log('post count: ' + post_count);
					// console.log('number of pages: ' + max_num_pages);

					if (max_num_pages == 1) {
						$('.magazine-pagination .prev').css('display', 'none');
						$('.magazine-pagination .next').css('display', 'none');
					}

					$('.articleList-item').html(res.html);
					article_length = $('.articleList-item li').length;
					article_check(article_length);
				},
				error: function (xhr) {
					// console.log(xhr.responseText);
				}
			})
		});


		// Pagination
		var clicked;
		$('.pagination a').click(function (e) {
			e.preventDefault();
			clicked = $(this).data('clicked');

			check_pages(current_page, max_num_pages);

			if (max_num_pages == 1) {
				$('.magazine-pagination .prev').css('display', 'none');
				$('.magazine-pagination .next').css('display', 'none');
			}
			$('.magazine-pagination .prev').css({
				display: "flex",
				display: "flex",
				opacity: "1",
				pointerEvents: "auto",
			});
			$('.magazine-pagination [data-clicked="prev"]').css({
				pointerEvents: "auto",
			});
			$('.magazine-pagination .next').css({
				display: "flex",
				opacity: "1",
				pointerEvents: "auto",
			});
			$('.magazine-pagination [data-clicked="next"]').css({
				pointerEvents: "auto",
			});
			$('.next-link').removeClass('reveal').attr('style', '');
			$('.contact').removeClass('fadeUp').attr('style', '');

			$('.headtitle').removeClass('fadeIn').attr('style', '');
			$('.next-link-text h3').removeClass('fadeIn').attr('style', '');

			$('.top-about-text-h2 .ttl').removeClass('slideUp-2').attr('style', '').addClass('is-line');
			



			if ($('.pagination').attr('data-type') == "tag") {

				$.ajax({
					type: 'POST',
					url: ajax_object.ajax_url,
					dataType: 'json',
					cache: false,
					data: {
						action: 'ajax_pagination',
						category: category,
						tag: tag, //タグ参照の場合paginationの打ち分けが必要な気がする
						page: current_page,
						posts_per_page: '9',
						clicked: clicked,
					},
					success: function (res) {
						$('html, body').css('scrollBehavior', 'unset');
						$('html, body').animate({ scrollTop: $('#magazine-list').offset().top - 120 }, 300);
						$('.articleList-item').html(res.html);

						post_count = res.post_count;
						current_page = res.current_page;
						max_num_pages = Math.ceil(post_count / 9);

						console.log("-- pagination a --");
						console.log('category:' + category);
						console.log('tag:' + tag);
						console.log('current page: ' + current_page);
						console.log('post count: ' + post_count);
						console.log('number of pages: ' + max_num_pages);

						if (res.clicked == 'prev' && current_page == 1) {
							$('.magazine-pagination .prev').css({
								display: "flex",
								opacity: "0.3",
								pointerEvents: "none",
							});
							$('.magazine-pagination [data-clicked="prev"]').css({
								pointerEvents: "none",
							});
						}

						if (res.clicked == 'next' && current_page == max_num_pages) {
							$('.magazine-pagination .next').css({
								display: "flex",
								opacity: "0.3",
								pointerEvents: "none",
							});
							$('.magazine-pagination [data-clicked="next"]').css({
								pointerEvents: "none",
							});
						}
						if (max_num_pages == 1) {
							$('.magazine-pagination .prev').css('display', 'none');
							$('.magazine-pagination .next').css('display', 'none');
						}

						article_length = $('.articleList-item li').length;
						article_check(article_length);
					},
					error: function (xhr) {
						// console.log(xhr.statusText);
						// console.warn(xhr.responseText);
					}
				});
			} else {

				$.ajax({
					type: 'POST',
					url: ajax_object.ajax_url,
					dataType: 'json',
					cache: false,
					data: {
						action: 'ajax_pagination',
						category: category,
						// tag: tag, //タグ参照の場合paginationの打ち分けが必要な気がする
						page: current_page,
						posts_per_page: '9',
						clicked: clicked,
					},
					success: function (res) {
						$('html, body').css('scrollBehavior', 'unset');
						$('html, body').animate({ scrollTop: $('#magazine-list').offset().top - 120 }, 300);
						$('.articleList-item').html(res.html);

						post_count = res.post_count;
						current_page = res.current_page;
						max_num_pages = Math.ceil(post_count / 9);

						console.log("-- pagination a --");
						console.log('category:' + category);
						console.log('tag:' + tag);
						console.log('current page: ' + current_page);
						console.log('post count: ' + post_count);
						console.log('number of pages: ' + max_num_pages);

						if (res.clicked == 'prev' && current_page == 1) {
							$('.magazine-pagination .prev').css({
								display: "flex",
								opacity: "0.3",
								pointerEvents: "none",
							});
							$('.magazine-pagination [data-clicked="prev"]').css({
								pointerEvents: "none",
							});
						}

						if (res.clicked == 'next' && current_page == max_num_pages) {
							$('.magazine-pagination .next').css({
								display: "flex",
								opacity: "0.3",
								pointerEvents: "none",
							});
							$('.magazine-pagination [data-clicked="next"]').css({
								pointerEvents: "none",
							});
						}
						if (max_num_pages == 1) {
							$('.magazine-pagination .prev').css('display', 'none');
							$('.magazine-pagination .next').css('display', 'none');
						}

						article_length = $('.articleList-item li').length;
						article_check(article_length);
					},
					error: function (xhr) {
						// console.log(xhr.statusText);
						// console.warn(xhr.responseText);
					}
				});
			}

			$.ajax({
				type: 'POST',
				url: ajax_object.ajax_url,
				dataType: 'json',
				cache: false,
				data: {
					action: 'ajax_pagination',
					category: category,
					// tag: tag, //タグ参照の場合paginationの打ち分けが必要な気がする
					page: current_page,
					posts_per_page: '9',
					clicked: clicked,
				},
				success: function (res) {
					$('html, body').css('scrollBehavior', 'unset');
					$('html, body').animate({ scrollTop: $('#magazine-list').offset().top - 120 }, 300);
					$('.articleList-item').html(res.html);

					post_count = res.post_count;
					current_page = res.current_page;
					max_num_pages = Math.ceil(post_count / 9);

					console.log("-- pagination a --");
					console.log('category:' + category);
					console.log('tag:' + tag);
					console.log('current page: ' + current_page);
					console.log('post count: ' + post_count);
					console.log('number of pages: ' + max_num_pages);

					if (res.clicked == 'prev' && current_page == 1) {
						$('.magazine-pagination .prev').css({
							display: "flex",
							opacity: "0.3",
							pointerEvents: "none",
						});
						$('.magazine-pagination [data-clicked="prev"]').css({
							pointerEvents: "none",
						});
					}

					if (res.clicked == 'next' && current_page == max_num_pages) {
						$('.magazine-pagination .next').css({
							display: "flex",
							opacity: "0.3",
							pointerEvents: "none",
						});
						$('.magazine-pagination [data-clicked="next"]').css({
							pointerEvents: "none",
						});
					}
					if (max_num_pages == 1) {
						$('.magazine-pagination .prev').css('display', 'none');
						$('.magazine-pagination .next').css('display', 'none');
					}

					article_length = $('.articleList-item li').length;
					article_check(article_length);
				},
				error: function (xhr) {
					// console.log(xhr.statusText);
					// console.warn(xhr.responseText);
				}
			});
		});



		// Filter by tags
		$(window).on('load', function (e) {
			if (location.pathname.match(/magazine/)) {

				if (location.search.match(/\?ajax/)) {
					ajax_slug = location.search.replace("?ajax=", "");
					history.pushState({}, '', location.pathname);
					tag = ajax_slug;



					current_page = 1;
					max_num_pages = 1;
					pagination_init_btn();
					if (max_num_pages == 1) {
						$('.magazine-pagination .prev').css('display', 'none');
						$('.magazine-pagination .next').css('display', 'none');
					}


					$('.magazine-pagination .prev').css({
						display: "flex",
						opacity: "0.3",
						pointerEvents: "none",
					});
					$('.magazine-pagination [data-clicked="prev"]').css({
						pointerEvents: "none",
					});

					$.ajax({
						type: 'POST',
						url: ajax_object.ajax_url,
						dataType: 'json',
						cache: false,
						data: {
							action: 'tag_filter',
							tag: tag,
						},
						success: function (res) {
							$('html, body').css('scrollBehavior', 'unset');
							$('html, body').animate({ scrollTop: $('#magazine-list').offset().top - 120 }, 300);

							post_count = res.post_count;
							max_num_pages = Math.ceil(post_count / 9);

							// console.log("-- top to link --");
							// console.log('current page: ' + current_page);
							// console.log('post count: ' + post_count);
							// console.log('number of pages: ' + max_num_pages);

							if (max_num_pages == 1) {
								$('.magazine-pagination .prev').css('display', 'none');
								$('.magazine-pagination .next').css('display', 'none');
							}

							$('.articleList-item').html(res.html);
							article_length = $('.articleList-item li').length;
							article_check(article_length);
						},
						error: function (xhr) {
							// console.log(xhr.responseText);
						}
					})
				} else {
					current_page = 1;
					max_num_pages = 1;
					category = $(this).find('a').data('slug');

					$(this).addClass('active');



					$('.magazine-pagination .prev').css('display', 'none');



					pagination_init_btn();
					$.ajax({
						type: 'POST',
						url: ajax_object.ajax_url,
						dataType: 'json',
						cache: false,
						data: {
							action: 'category_filter',
							category: category,
						},
						success: function (res) {
							post_count = res.post_count;
							max_num_pages = Math.ceil(post_count / 9);

							// console.log("-- cat2 --");
							// console.log('tag: ' + tag);
							// console.log('current page: ' + current_page);
							// console.log('post count: ' + post_count);
							// console.log('number of pages: ' + max_num_pages);

							$('.magazine-pagination .prev').css({
								display: "flex",
								opacity: "0.3",
								pointerEvents: "none",
							});
							$('.magazine-pagination [data-clicked="prev"]').css({
								pointerEvents: "none",
							});
							if (max_num_pages == 1) {
								$('.magazine-pagination .prev').css('display', 'none');
								$('.magazine-pagination .next').css('display', 'none');
							}

							$('.articleList-item').html(res.html);
							article_length = $('.articleList-item li').length;
							article_check(article_length);
						},
						error: function (xhr) {
							// console.log(xhr.responseText);
						}
					})

				}
			}

		});

		function article_check(article_length) {
			if (article_length == 2 || article_length == 5 || article_length == 8) {
				$('.articleList-item').css({
					'justifyContent': 'flex-start',
					'gap': '6rem'
				});
			}
		}
		function check_pages(current_page, max_num_pages) {
			if (clicked == 'next') {
				if (current_page <= max_num_pages) {
					$('.magazine-pagination .prev').css({
						display: "flex",
						'display': '-webkit-box',
						'display': '-ms-flexbox',
						'display': 'flex',
					});
					$('.magazine-pagination .next').css({
						'display': '-webkit-box',
						'display': '-ms-flexbox',
						'display': 'flex',
					});
				}
				if (current_page == (max_num_pages - 1)) {
					$('.magazine-pagination .next').css('display', 'none');
				}
			} else {
				if (current_page >= 1) {
					$('.magazine-pagination .prev').css({
						display: "flex",
						'display': '-webkit-box',
						'display': '-ms-flexbox',
						'display': 'flex',
					});
					$('.magazine-pagination .next').css({
						'display': '-webkit-box',
						'display': '-ms-flexbox',
						'display': 'flex',
					});
				}
				if (current_page == 1) {
					$('.magazine-pagination .prev').css('display', 'none');
				}
			}
		}

		function pagination_init_btn() {
			$('.magazine-pagination .prev').css('display', 'none');

			$('.magazine-pagination .next').css({
				'display': '-webkit-box',
				'display': '-ms-flexbox',
				'display': 'flex',
			});
		}
	}
});

$(window).on('load', function () {
	setTimeout(function () {
		$('.pickup-contents-text').removeClass('fadeUp');
		$('.pickup-thumb').removeClass('reveal');
		$('.pickup-contents-text').removeAttr("style");
		$('.pickup-thumb').removeAttr("style");
	}, 500);
});