Angular Controllers and Data Loading
====================================

Since Angular controllers are heart of any Angular-based application, Webix-Angular integration preserves controller functionality.  

As in Angular, controller directives are included into the app as an attribute of any tag. 

~~~html
<html ng-app="webixApp"> <!--Angular App initialized-->
 <body ng-controller="webixTestController"> <!--Angular controller-->
  <div webix-ui view="datatable" webix-data="records" select="row"> <!--Webix App-->
  	...<!--datatable config-->
  </div>
 </body>
</html>
~~~

##Loading data via Controller

Scope valiables are accessed by standard pattern exept for data loading. To populate the datatable with data from controller **$scope**, use **webix-data** directive. 
It is used in a div that initiates this datatable. 

The code below gets *$scope.records* and parses them into the datatable:

~~~html
<div webix-ui view="datatable" webix-data="records"	> ...</div>
~~~

Filtering and sorting options can be used as well:

~~~html
<input ng-model="query" ... />
<select ng-model = "orderProp">...</select>

<div webix-ui view="datatable" webix-data="records|filter:query|orderBy:orderProp"> 
...
</div>
~~~

{{snippet
Controller code
}}
~~~js
var app = angular.module('webixApp', [ "webix" ]);

app.controller("webixTestController", function($scope){
  $scope.records = [
  	{ id:1, title:"The Shawshank Redemption", year:1994, votes:678790, rating:9.2, rank:1},
	{ id:2, title:"The Godfather", year:1972, votes:511495, rating:9.2, rank:2},
	...
  ];
  
  $scope.addRecord = function(){
  	$scope.records.push({
  		title:"New Record",
  		rating:999,
  		votes:0,
  		year:2013
  	});
  };
~~~

{{sample 33_angular/02_grid.html}}

As you might have already noticed in the code above, all data manipulations with datatable data are done by **changing scope dataset**. In HTML, the **addRecords()** function is called by an **ng-click** directive:

~~~js
<body ng-controller="webixTestController"> <!--Angular controller-->
  <div webix-ui view="datatable" webix-data="records" select="row"> <!--Webix App-->
  	...<!--datatable config-->
  </div>
  <button ng-click="addRecord()">Add Row</button>
~~~

Datatable data will be updated the moment **$scope.records** is changed, which is ensured by Angular binding philosophy.

##Using Component methods via Controller

To comply with Angular concept, **any function** you use with this or that component **should be stored in the app's controller**, even if it is the **component's own method**.

~~~js
<body ng-controller="webixTestController">

	<div style="width:500px; height:200px;">
  	<div webix-ui view="chart" id="mychart" webix-data="lines" type="bar" value="#sales#" borderless="true"></div>
	</div>

	<button ng-click="changeLine('line')">Show Line Chart</button>
</body>
~~~

**ChangeLine()** controller function [redefines](desktop/redefinition.md) the [chart](desktop/chart.md) by setting another [type](desktop/chart_types.md) for it:

{{snippet
Controller Code
}}
~~~js
  $scope.lines = [
  	//chart dataset
  	{ id:1, sales:20, year:"02"},
    { id:2, sales:55, year:"03"},
	...
  ];

  $scope.changeLine = function(type){
  	//methods are applied to the chart by its ID
  	$$("mychart").define("type", type); 
  	$$("mychart").render();
  };
~~~

{{sample 33_angular/03_chart.html }}






