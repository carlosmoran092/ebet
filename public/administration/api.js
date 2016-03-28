$(function() {

	var server = 'http://test.dev/settings/api/';

	$('.deleteService').click(function(event) {	
		var val = $(this).prop('value');
		console.log(val);
		$.get(server+'delete_service/'+val, function(data,status){alert("Data: " + data + "\nStatus: " + status);});	
		getService();	
	});

	 function getService () {
		 $.get(server+'get_services_documents', function(data,status){alert("Data: " + data + "\nStatus: " + status);});	
	}

});



