function openWell(well) {
	$(".well-submenu").each(

	function () {
		if ($(this).attr("id") === well) {
			$(this).slideDown(500);
		} else {
			$(this).slideUp(200);
		}
	});
}

function closeWell(well) {
	$(".well-submenu").each(

	function () {
		if ($(this).attr("id") === well) {
			$(this).slideUp(500);
		}
	});
}
