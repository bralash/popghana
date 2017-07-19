jQuery(document).ready(function($) {
	$mm = $('#mm'),
	$ba = $('#ba'),
	$cash = $('#cash');
	$mm.on('click', function() {
		$('div.ba').removeClass('show');
		$('div.mm').addClass('show');
	});

	$ba.on('click', function() {
		$('div.mm').removeClass('show');
		$('div.ba').addClass('show');
	});

	$cash.on('click', function() {
		$('div.options').removeClass('show');
	});
});