Event Handling With Angular
===================

To understand Webix **event handling concept** consult the [corresponding documentation article](desktop/event_handling.md).

Angular JS offer a number of directives to catch on-page events (ngClick, ngChange, ngKeyPress, ngMouseMove) and all of them can be successfully used in Angular-Webix
integrated applications. 

~~~js
<button ng-click="changeLine('line')">Show Line Chart</button>
~~~

{{sample 33_angular/03_chart.html }}

At the same time, Webix library offers a set component-specific events such as **onItemClick**, **onSelectChange**, **onAfterTabClick**, etc that cannot be handled by Angular means. 

###webix-event Directive

All Webix events can be handled with a special **webix-event** directive that calls a **scope function** to perform a desired action:

~~~html
<body ng-controller="webixTestController">

<div webix-ui view="cols" type="space">
  <!--datatable column-->-	
  <div view="datatable" webix-data="records" 
  		webix-event="onItemClick = showDetails(id, details)" select="row">
    <!--datatable columns-->
  </div>
  <!-- template column -->
  <div>
  	Selected ID: { { selectedId } }
  </div>
</div>

</body>
~~~

In the code above, an api/link/ui.datatable_onitemclick_event.md datatable event is handled with **showDetails()** scope function to show an ID of any selected item in a template as  *\{\{ selectedId \}\}*. 

###Event Handler in Controller

{{snippet
App's Controller
}}
~~~js
var app = angular.module('webixApp', [ "webix" ]);

app.controller("webixTestController", function($scope){
  $scope.records = [ ..datatable data..];

  $scope.showDetails = function(id, details){
  	$scope.selectedId = id.row; //setting value for selectedId
  	$scope.$digest();
  }
});
~~~

{{sample 33_angular/04_events.html }}

Note that the function called by *webix-event* directive is limited to have only **two parameters**:

- **ID** of an item in question (sent by Webix event); 
- **event details** that encompass all params sent by Webix event. 

For instance, [datatable](datatable/index.md) specific api/link/ui.datatable_onitemclick_event.md event has three params - *item info object (id, row, column)*, *native event object* and and *target HTML element*:

{{snippet
Webix Event Handling Pattern
}}
~~~js
grid.attachEvent("onItemClick", function(id, event, node){
    //... some code here ... 
});
~~~

Handled by Angular, **event object** and **target element** are passed in **details** together with item info:

~~~js
app.controller("webixTestController", function($scope){
 $scope.showDetails = function(id, details){
  	$scope.selectedId = id.row; 
    /*or you can get ID as*/  
    $scope.selectedId = details[0].row; 
    
    $scope.eventType = details[1].target.getAttribue("class");
    $scope.nativeElement = details[2].tagName;
    
  	$scope.$digest();
  }
}
~~~

Note that **HTML objects** (event, element) are not processed by Angular and the object itself will come as if empty. Nevertheless, you can still retrieve all of its properties:

~~~js
$scope.showDetails = function(id, details){
	$scope.eventType = details[1]; //returns {}
    $scope.nativeElement = details[2] //returns {}
    
   	$scope.eventType = details[1].type; //returns "click"
    $scope.nativeElement = details[2].tagName; //returns "DIV"
}
~~~

###Handling of Multiple Events per Component

**Webix-event** directive allows attaching any number of events at a time:

~~~html
<div view="datatable" webix-data="records"  
webix-event="onItemClick = show1(id, details); onAfterSort = show2(id, details);">
    <!--datatable columns-->
</div>
~~~

Accordingly, you need to specify scope functions to handle each event (or a common function for the attached events):

~~~js
app.controller("webixTestController", function($scope){
  $scope.show1 = function(id, details){
  	...
  };

  $scope.show2 = function(id, details){
    ...
  };
}
~~~

Study the sample to see how it works:

{{sample 33_angular/04_events.html}}


