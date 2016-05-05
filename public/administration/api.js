var server = 'http://test.dev/settings/api/';


$('html').on('click', '.deleteService', function(event) {
	event.preventDefault();
	
	var val = $(this).prop('value');

$.get(server+'delete_service/'+val, function(data,status){elementoEliminado();/*alert("Data: " + data + "\nStatus: " + status);*/});	
all_services ();	

});



$(function() {


	function getService () {
	$.get(server+'get_services_documents', function(data,status){/*alert("Data: " + data + "\nStatus: " + status);*/ });	
}
// 		SAVE AJAX  [Save Service]      
$(function(){
	$('#InputSaveService').click(function(event) {
		$.ajaxSetup({
			headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
		})
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
					Good("Service");
					all_services ();
				}
			},
			error: function(){
				console.log('Error');
			}
		});
	});
}); 


//		END SAVE AJAX    <---




});


function all_services () {
	$.get(server+"get_services_documents", function(data, status){
		var newData = data; 
        //console.log(newData);
        $("#get_services").empty();
        for (var i = 0; i < newData.length; i++) {
       	//console.log(newData[i]);

       	$("#get_services").append('<tr><td>'+newData[i].title+'</td><td>'+newData[i].rates+'</td><td><a id="service_'+newData[i].id+'"  type="button" class="edit_service btn btn-xs btn-default"><i class=" icon-pencil-alt"></i></a><button value="'+newData[i].id+'" type="button" class="btn btn-xs btn-default deleteService"><i class=" icon-trash-8"></i></button></td></tr>');
       	$(".list-table-items").niceScroll();
       };
   });	
}

	// Mensajes
	function elementoEliminado () {
		swal("Good job!", "You clicked the button!", "success"); 
	}

	function Good (item) {
		swal("Good job!", "The "+item+" been registered successfully.", "success"); 
	}

/*
*
* Update Language Service
*
*/

$(function(){
	$('#update').click(function(event) {
		$.ajaxSetup({
			headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
		})
		event.preventDefault();
		var formId = '#edit_lang';
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
					//$(formId)[0].reset();
					console.log(result);
					Good("Service");
					//all_services ();
				}
			},
			error: function(){
				console.log('Error');
			}
		});
	});
}); 


/*
*
* Update Target
*
*/

$(function(){
	$('#save_targets').click(function(event) {
		$.ajaxSetup({
			headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
		})
		event.preventDefault();
		var formId = '#edit_target';
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
					//$(formId)[0].reset();
					console.log(result);
					Good("Service");
					//all_services ();
				}
			},
			error: function(){
				console.log('Error');
			}
		});
	});
}); 