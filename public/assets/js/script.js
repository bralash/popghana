$(document).ready(function($) {
	var mm = $('#mm'),ba = $('#ba'),cash = $('#cash');
	
	var bankDetails = $('div.ba'),
		mmDetails = $('div.mm');

	var checkPaymentMethod = $('span.check').text();
	console.log(checkPaymentMethod);
	if(checkPaymentMethod == 'Mobile Money') {
		mm.attr('checked', true);
		ba.attr('checked', false);
		cash.attr('checked', false);
	} else if(checkPaymentMethod == 'Bank Account') {
		ba.attr('checked', 'checked');
	} else if(checkPaymentMethod == 'Cash') {
		cash.attr('checked', 'checked');
	}

	function checkRadioSelect(remove,add) {
		remove.removeClass('show');
		add.addClass('show');
	}

	function removeAll(remove, add) {
		remove.removeClass('show');
		add.removeClass('show');
	}

	if(mm.attr('checked') == 'checked') {
		checkRadioSelect(bankDetails, mmDetails);
	}

	if(ba.attr('checked') == 'checked') {
		checkRadioSelect(mmDetails, bankDetails);
	}

	if(cash.attr('checked') == 'checked') {
		removeAll(bankDetails, mmDetails);
	}


	mm.on('change', function(e) {
		checkRadioSelect(bankDetails, mmDetails);
	});

	ba.on('change', function(e) {
		checkRadioSelect(mmDetails, bankDetails);
	});

	cash.on('change', function(e) {
		removeAll(bankDetails, mmDetails);
	});

});