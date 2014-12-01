$(function() {
  if ($(".support_block_hidden").size() < 1) {
    $(".show_support_block").hide();
  }
	$(".show_support_block").on('click', function() {
		$(".support_block_hidden:lt(6)").removeClass("support_block_hidden");
		if ( $(".support_block_hidden").size() === 0 ) {
			$(this).hide();
		}
	});

  if ($(".works_row_hidden").size() < 1) {
    $(".show_works_button").hide();
  }
	$(".show_works_button").on('click', function() {
		$(".works_row_hidden:lt(1)").removeClass("works_row_hidden");
		if ( $(".works_row_hidden").size() === 0 ) {
			$(this).hide();
		}
	});
});

$(document).ready(function () {
	$('.main-menu').on('click', 'a', function (e) {
		var parents = $(this).parents('li');
		var li = $(this).closest('li.dropdown');
		var another_items = $('.main-menu li').not(parents);
		another_items.find('a').removeClass('active');
		another_items.find('a').removeClass('active-parent');
		if ($(this).hasClass('dropdown-toggle') || $(this).closest('li').find('ul').length == 0) {
			$(this).addClass('active-parent');
			var current = $(this).next();
			if (current.is(':visible')) {
				li.find("ul.dropdown-menu").slideUp('fast');
				li.find("ul.dropdown-menu a").removeClass('active')
			}
			else {
				another_items.find("ul.dropdown-menu").slideUp('fast');
				current.slideDown('fast');
			}
		}
		else {
			if (li.find('a.dropdown-toggle').hasClass('active-parent')) {
				var pre = $(this).closest('ul.dropdown-menu');
				pre.find("li.dropdown").not($(this).closest('li')).find('ul.dropdown-menu').slideUp('fast');
			}
		}
		if ($(this).hasClass('active') == false) {
			$(this).parents("ul.dropdown-menu").find('a').removeClass('active');
			$(this).addClass('active')
		}
		if ($(this).hasClass('ajax-link')) {
			e.preventDefault();
			if ($(this).hasClass('add-full')) {
				$('#content').addClass('full-content');
			}
			else {
				$('#content').removeClass('full-content');
			}
			var url = $(this).attr('href');
			window.location.hash = url;
			LoadAjaxContent(url);
		}
		if ($(this).attr('href') == '#') {
			e.preventDefault();
		}
	});
});


