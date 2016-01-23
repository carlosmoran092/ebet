(function(){
	var app = angular.module('langApp', ['ui.bootstrap']);

 app.controller('langController', ['$scope','$http', function($scope,$http){
 	
     $http.get('/JS/languages.json').success(function (data) {
        $scope.datos = data;
    });
     $scope.selects = selects;

 	
 }]);

})();


var selects = [];

$("html").on('click', '.trw-lang', function(event) {
	
	var  id = $(this).attr('id');
	var img = $(this).attr('img');		
	var title = $(this).attr('tit');	
	
/* Comparar*/
	
		active = $(this).attr('check');

		if(active=="false"){		    
			$(this).addClass('select-lang');			
			$(this).attr('check', 'true');
			selects.push({ 'title':''+title+'', 'name': ''+id+'', 'image': ''+img+'' });
		}else{			
			$(this).attr('check', 'false');
			$(this).removeClass('select-lang');
			jQuery.map(selects, function(obj) {				
			      if(obj.image === img){
                  console.log ("en el if "+img); 
                  var index = selects.indexOf(obj);
                  delete selects[index];
              }
              });	
		}
	

});