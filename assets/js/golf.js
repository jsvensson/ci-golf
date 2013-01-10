// Open a target well
$('.btn-open-well').click( function() {
	$('#' + $(this).data('openref')).slideDown(500);
});

// Close a target well
$('.btn-close-well').click( function() {
	$('#' + $(this).data('closeref')).slideUp(500);
});
