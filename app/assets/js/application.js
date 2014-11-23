$(function() {
	$(".show_address_block")[0].onclick = function() {
		$(".address_block_hidden:lt(6)").removeClass("address_block_hidden");
		if ( $(".address_block_hidden").size() === 0 ) {
			$(this).hide();
		}
	}
});
