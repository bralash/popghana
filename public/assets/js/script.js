$(document).ready(function($) {
	var mm = $('#mm'),ba = $('#ba'),cash = $('#cash');
	
	var bankDetails = $('div.ba'),
		mmDetails = $('div.mm');

	function checkRadioSelect($radio,$remove,$add) {
		$remove.removeClass('show');
		$add.addClass('show');
	}

	function removeAll($remove, $add) {
		$remove.removeClass('show');
		$add.removeClass('show');
	}

	if(mm.attr('checked','checked')) {
		checkRadioSelect($(this), bankDetails, mmDetails);
	} else if(ba.attr('checked','checked')) {
		checkRadioSelect($(this), mmDetails, bankDetails);
	} else {
		removeAll(bankDetails, mmDetails);
	}


	mm.on('change', function(e) {
		checkRadioSelect($(this), bankDetails, mmDetails);
	});

	ba.on('change', function(e) {
		checkRadioSelect($(this), mmDetails, bankDetails);
	});

	cash.on('change', function(e) {
		removeAll(bankDetails, mmDetails);
	});

	cash.on('change', function(e) {
		removeAll(bankDetails, mmDetails);
	});


});