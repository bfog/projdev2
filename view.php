<?php include("include/menu.inc");?>

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
			   <h1>View Items</h1>
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
			 <div class="col-lg-3">
			   <div class="row">
				  <label for="Category">Category:</label>
			   </div>
			   <div class="row">
				  <input type="radio" name="Category" id="Medicine" value="Medicine" data-ng-model="Category">
				  <label for="Medicine">Medicine</label>
			   </div>
			   <div class="row">
				  <input type="radio" name="Category" id="Health Care" value="Health Care" data-ng-model="Category">
				  <label for="Health Care">Health Care</label>
			   </div>
			   <div class="row">
				  <input type="radio" name="Category" id="Accessories" value="Accessories" data-ng-model="Category">
				  <label for="Accessories">Accessories</label>
			   </div>
			   <div class="row">
				  <input type="radio" name="Category" id="All" value="	" data-ng-model="Category">
				  <label for="All">All</label>
			   </div>
			</div>
		 </div>
		 <div class="row">
			<div class="table-responsive">
			   <table class="table table-striped table-hover">
				  <thead>
					 <th scope="col" id="Name">Name</th>
					 <th scope="col" id="ID">ID</th>
					 <th scope="col" id="Category">Category</th>
					 <th scope="col" id="Stock">Stock</th>
					 <th scope="col" id="Price">Price</th>
					 <th scope="col" id="Edit"></th>
					 <th scope="col" id="Delete"></th>
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
						<td headers="Category">
						   <div ng-hide="x.edit">{{x.category}}</div>
						   <div ng-show="x.edit">
							  <select data-ng-model="x.category">
								 <option value="Medicine">Medicine</option>
								 <option value="Health Care">Health Care</option>
								 <option value="Accessories">Accessories</option>
							  </select>
						   </div>
						</td>
						<td headers="Stock">
						   <div ng-hide="x.edit">{{x.stock}}</div>
						   <div ng-show="x.edit">
							  <input type="text" data-ng-model="x.stock" placeholder="x.stock">
						   </div>
						</td>
						<td headers="Price">
						   <div ng-hide="x.edit">{{x.price}}</div>
						   <div ng-show="x.edit">
							  <input type="text" data-ng-model="x.price" placeholder="x.price">
						   </div>
						</td>
						<td>
							<div ng-hide="x.edit"><button type="button" ng-click="editData(x)" class="btn btn-dark btn-md">Edit</button></div>
							<div ng-show="x.edit"><button type="submit" class="btn btn-dark btn-md">Submit</button></div>
						</td>
						 <td>
							<div ng-show="x.edit"><button type="button" class="btn btn-dark btn-md">Delete</button></div>
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
