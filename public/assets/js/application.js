$(function() {
	
	$(".show_support_block")[0].onclick = function() {
		$(".support_block_hidden:lt(6)").removeClass("support_block_hidden");
		if ( $(".support_block_hidden").size() === 0 ) {
			$(this).hide();
		}
	}
});
