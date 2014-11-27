$(function() {
	$(".show_address_block").on('click', function() {
		$(".address_block_hidden:lt(6)").removeClass("address_block_hidden");
		if ( $(".address_block_hidden").size() === 0 ) {
			$(this).hide();
		}
	});

	$(".show_works_button").on('click', function() {
		$(".works_row_hidden:lt(1)").removeClass("works_row_hidden");
		if ( $(".works_row_hidden").size() === 0 ) {
			$(this).hide();
		}
	});
});
