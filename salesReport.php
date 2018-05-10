<?php include 'include/menu.inc' ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   <title>Product</title>
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
</head>
<body>
   <br>
   <div ng-app="myApp" ng-controller="myCtrl">
     <div class="container">
        <div class="row">
          <div class="col-md-12">
             <h1>Sales Report</h1>
          </div>
        </div>
        <div class="row">
           <div class="col-md-6">
              <div ng-repeat="x in categoriesToFiler() | filter:categories">
                 <h5>{{x.category}}</h5>
                 <ol>
                    <li ng-repeat="item in productArray| filter:{category: x.category} | unique: 'name'">
                       <span ng-hide="checkItem(item)">{{item.name}}</span>
                       <span ng-init="total = calculateTotal(item)" class="float-right">{{total}}</span>
                    </li>
                 </ol>
              </div>
              <p class="float-right">Total Sales: {{totalSales}}<p>
           </div>
           <div class="col-md-6">
              <fusioncharts
                  width="600"
                  height="400"
                  type="column2d"
                  dataSource="{{myDataSource}}" >
              </fusioncharts>
           </div>
        </div>
      </div>
   </div>


   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
   <script src="Framework/js/fusioncharts.js"></script>
   <script src="Framework/js/angular.min.js"></script>
   <script src="Framework/js/angular-fusioncharts.min.js"></script>
   <script src="script/salesReport.js"></script>
</body>
</html>
