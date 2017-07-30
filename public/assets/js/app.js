$(document).ready(function() {
	var userCode = $('#code');
	  userCode.on('keyup', function(e) {
	  	if($(this).val().length > 3) {
	  		uri = '/user/' + $(this).val();
		    $.ajax({
		    	url: uri,
		    	dataType: 'json',
		    	success:  function(data) {
		  			$('.details').show('slow');
		    		for(var i = 0; i < data.length; ++i) {
		    			var status = data[i]['status'];
		    			if(status == '3') {
		    				$('h6#status b').html('Admin');
		    			}else if(status == '0') {
		    				$('h6#status b').html('Inactive');
		    			} else if(status == '1') {
		    				$('h6#status b').html('Active');
		    			}
		    			$('h6#username b').html(data[i]['username']);
		    			$('h6#fullname b').html(data[i]['surname'] + ', ' + data[i]['other_names']);
		    			$('h6#contact b').html(data[i]['contact']);
		    		}
		    	}
		    });
	  	}
	  	
	  });
});