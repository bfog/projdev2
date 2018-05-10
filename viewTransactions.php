<?php include("include/menu.inc"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   <title>View</title>
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
</head>
<body>
   <br>
   <div ng-app="myApp" ng-controller="myCtrl">
	  <div class="container">
		 <div class="row">
			<div class="col-md-12">
			   <h1>View Transactions</h1>
			</div>
		 </div>
		 <div class="row">
			<div class="col-md-3">
			   <div class="row">
				  <label for="Name">Name:</label>
			   </div>
			   <div class="row">
				  <input type="text" name="Name" id="Name" data-ng-model="Name">
			   </div>
			</div>
			<div class="col-md-3">
			   <div class="row">
				  <label for="ID">ID:</label>
			   </div>
			   <div class="row">
				  <input type="text" name="ID" id="ID" data-ng-model="ID">
			   </div>
			</div>
		 </div>
		 <div class="row">
			<div class="table-responsive">
			   <table class="table table-striped table-hover">
				  <thead>
					 <th scope="col" id="Name">Name</th>
					 <th scope="col" id="ID">ID</th>
					 <th scope="col" id="Revenue">Revenue</th>
					 <th scope="col" id="Time">Time</th>
				  </thead>
				  <tbody>
					 <tr ng-repeat="x in productArray | orderBy:'name' | filter:{name:Name, id:ID, category:Category}">
						<td headers="Name">
						   <div ng-hide="x.edit">{{x.name}}</div>
						   <div ng-show="x.edit">
							  <input type="text" data-ng-model="x.name" placeholder="x.name">
						   </div>
						</td>
						<td headers="ID">
						   <div ng-hide="x.edit">{{x.id}}</div>
						   <div ng-show="x.edit">
							  <input type="text" data-ng-model="x.id" placeholder="x.id">
						   </div>
						</td>
						<td headers="Revenue">
						   <div ng-hide="x.edit">{{x.revenue}}</div>
						   <div ng-show="x.edit">
							  <input type="number" data-ng-model="x.revenue" placeholder="x.revenue">
						   </div>
						</td>
						<td headers="Time">
						   <div ng-hide="x.edit">{{x.time}}</div>
						   <div ng-show="x.edit">
							  <input type="date" data-ng-model="x.time" placeholder="x.time">
						   </div>
						</td>
					 </tr>
				  </tbody>
			   </table>
			</div>
		 </div>
	  </div>
   </div>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
   <script src="Framework/js/angular.min.js"></script>
   <script src="script/view.js"></script>
</body>
</html>
