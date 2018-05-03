var app = angular.module('myApp',[]);
app.controller('myCtrl', function($scope, $http){
	$scope.productArray = [ {"id":"Null","name":"Skin Cream","category":"Health Care","stock":"100","price":"9.95"},{"id":"Null","name":"Fungal Toe Spray","category":"Health Care","stock":"25","price":"34.95"},{"id":"Null","name":"Toilet Paper","category":"Accessories","stock":"15","price":"9.95"},{"id":"Null","name":"Protein Powder","category":"Accessories","stock":"20","price":"49.95"},{"id":"Null","name":"Swiss Multivitiamin","category":"Medicine","stock":"200","price":"39.95"}];

	$scope.currentEdit = null;
	$scope.list = [];
	$scope.editData= function(array){
		array.edit = true;
		if($scope.currentEdit != null){
			$scope.cancelEdit($scope.currentEdit);
		}
		$scope.currentEdit = array;
	}

	$scope.cancelEdit= function(array){
		array.edit = false;
	}
});
