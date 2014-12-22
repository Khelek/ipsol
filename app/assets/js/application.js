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


  $('ul.tabs').delegate('li:not(.current)', 'click', function() {
    $(this).addClass('current').siblings().removeClass('current')
      .parents('div.section').find('div.box').hide().eq($(this).index()).fadeIn(150);
  });
});
