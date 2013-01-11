// Open a target well
$('.btn-open-well').click( function() {
	$('#' + $(this).data('openref')).slideDown(250);
});

// Close a target well
$('.btn-close-well').click( function() {
	$('#' + $(this).data('closeref')).slideUp(250);
});
