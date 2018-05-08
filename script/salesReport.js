var app = angular.module('myApp',["ng-fusioncharts"]);
app.filter('unique', function() {
	return function(collection, keyname) {
		var output = [],keys = [];
		angular.forEach(collection, function(item) {
			var key = item[keyname];
			if(keys.indexOf(key) === -1) {
				keys.push(key);
				output.push(item);
			}
		});
		return output;
	};
});
app.controller('myCtrl', function($scope){
	$scope.productArray = [ {"id":"Null","name":"Skin Cream","category":"Health Care","stock":"100","price":"9.95"}, {"id":"Null","name":"Skin Cream","category":"Health Care","stock":"100","price":"9.95"},{"id":"Null","name":"Fungal Toe Spray","category":"Health Care","stock":"25","price":"34.95"},{"id":"Null","name":"Toilet Paper","category":"Accessories","stock":"15","price":"9.95"},{"id":"Null","name":"Protein Powder","category":"Accessories","stock":"20","price":"49.95"},{"id":"Null","name":"Swiss Multivitiamin","category":"Medicine","stock":"200","price":"39.95"}];

	$scope.myDataSource = {
		chart: {
			caption: "Harry's SuperMart",
			subCaption: "Top 5 stores in last month by revenue",
		},
		data:[{
			label: "Bakersfield Central",
			value: "880000"
		},
		{
			label: "Garden Groove harbour",
			value: "730000"
		},
		{
			label: "Los Angeles Topanga",
			value: "590000"
		},
		{
			label: "Compton-Rancho Dom",
			value: "520000"
		},
		{
			label: "Daly City Serramonte",
			value: "330000"
		}]
	};

	$scope.totalSales = 0;
	$scope.listOfCategories = [];
	$scope.test = [];

	$scope.calculateTotal = function(array){
		var total = 0;
		for(var i = 0; i < $scope.productArray.length; i++){
			if(array.name == $scope.productArray[i].name){
				$scope.totalSales += $scope.productArray[i].price * $scope.productArray[i].stock;
				total += $scope.productArray[i].price * $scope.productArray[i].stock;
			}
		}
		return Math.floor(total);
	}


	$scope.categoriesToFiler = function(){
		$scope.listOfCategories = [];
		return $scope.productArray;
	}

	$scope.categories = function(item){
		$scope.categoryIsNew = $scope.listOfCategories.indexOf(item.category) == -1;
		if($scope.categoryIsNew){
			$scope.listOfCategories.push(item.category);
		}
		return $scope.categoryIsNew;
	}
});
