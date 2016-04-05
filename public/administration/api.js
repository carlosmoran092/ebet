$(function() {

	var server = 'http://test.dev/settings/api/';

	$('.deleteService').click(function(event) {	
		var val = $(this).prop('value');
		console.log(val);
	$.get(server+'delete_service/'+val, function(data,status){elementoEliminado();/*alert("Data: " + data + "\nStatus: " + status);*/});	
	getService();	
});

	function getService () {
	$.get(server+'get_services_documents', function(data,status){/*alert("Data: " + data + "\nStatus: " + status);*/ });	
}

// $('#saveService').click(function(event) {
// 	new_data  = [];
// 	item_rate = new Object();
// 	item_rate.title =  $('#title-service').prop('value');
// 	item_rate.rate  =  parseFloat( $('#rate-service').val());
// 	new_data.push(item_rate);	
	
// 	json_new_data = JSON.stringify(new_data);
// 	console.log(json_new_data);
// 	$.ajax({
// 		url: server+'store_service',
// 		type: "post",
// 		data: {json_new_data},
// 		success: function(data){
// 			console.log(data);
// 		}
// 	});     

// });


// 		SAVE AJAX        <----


$(function(){

    $.ajaxSetup({
         headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
});

	$('#InputSaveService').click(function(event) {
		event.preventDefault();

		var formId = '#SaveService';

		$.ajax({
			url: $(formId).attr('action'),
			type: $(formId).attr('method'),
			data: $(formId).serialize(),
			dataType: 'html',
			success: function(result){
				if ($(formId).find("input:first-child").attr('value') == 'PUT') {
					var $jsonObject = jQuery.parseJSON(result);
	                                $(location).attr('href',$jsonObject.url);
				}
				else{
					$(formId)[0].reset();
					console.log(result);
				}
			},
			error: function(){
				console.log('Error');
			}
		});
	});

}); 


//		END SAVE AJAX    <---



	// Mensajes
	function elementoEliminado () {
		swal("Good job!", "You clicked the button!", "success"); 
	}
	

});



