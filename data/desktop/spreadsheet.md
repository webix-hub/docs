SpreadSheet
=============

Webix SpreadSheet is a component intended for creating tables with structures of different complexity.

Webix SpreadSheet represents a web-tool for making tables online and keeping all the data locally. Thus, all the information in your reports and accouts will be kept secure and always at hand.
The ready document can be exported into an Excel, as well as you can import an Excel document into SpreadSheet.

The component includes all the necessary functionality for handy work with data presented in the tabular form. You can edit and format the content of cells, resize cells,
apply diverse styles, fonts and borders' types, align text and merge cells in rows and columns. Mathematical functions are also included. The component can be localized according to the rules
of various languages.

<br>

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/spreadsheet_front.png">

Creating SpreadSheet on the Page
---------------------------------

###Files to include

You need to include the following files in the head section of your document:

~~~html
<script src="codebase/webix.js" type="text/javascript"></script>
<script src="codebase/spreadsheet.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="codebase/webix.css">
<link rel="stylesheet" type="text/css" href="codebase/spreadsheet.css">
~~~

###Initialization

To initialize SpreadSheet and load it with data, use the code as in:

~~~js
webix.ready(function(){
	webix.ui({
		view:"spreadsheet",
		data: base_data,
		math:true
	});
});
~~~

Loading and Saving Data
-------------------------

~~~js
var base_data = {
  "styles": [
    ["wss1",";;center;;;;;;;;;"],
    ["wss2",";#6E6EFF;center;;;;;;;;;"],
    ["wss3","#FFFFFF;#6E6EFF;center;;;;;;;;;"],
    ["wss4","#FFFFFF;#6E6EFF;center;;;;;bold;;;;"],
    ["wss5","#FFFFFF;#6E6EFF;center;;;;;normal;;;;"],
    ["wss6","#000000;;;;;;;;;;;"],
    ["wss7","#000000;#00004C;;;;;;;;;;"],
    ["wss8","#000000;#FFFFFF;left;'PT Sans', Tahoma;15px;;;;top;;0-0-0-0,;"],
    ["wss9",";;right;;;;;;;;;"],
    ["wss10","#000;#fff;center;'PT Sans', Tahoma;15px;;;bold;top;;0-0-0-0,;"],
    ["wss11",";;right;;;;;bold;;;;"],
    ["wss12","#818181;#fff;center;'PT Sans', Tahoma;15px;;;bold;top;;0-0-0-0,;"],
    ["wss13","#818181;;right;;;;;bold;;;;"],
    ["wss14","#000000;#FFFFFF;center;'PT Sans', Tahoma;15px;;;;top;;0-0-0-0,;"],
    ["wss15","#000000;#FFFFFF;right;'PT Sans', Tahoma;15px;;;;top;;0-0-0-0,;"],
    ["wss16","#000;#fff;right;'PT Sans', Tahoma;15px;;;;top;;0-0-0-0,;"],
    ["wss17","#000000;#FFFFFF;right;'PT Sans', Tahoma;15px;;;;top;;0-0-0-0,;price"],
    ["wss18","#000;#fff;right;'PT Sans', Tahoma;15px;;;;top;;0-0-0-0,;price"],
    ["wss19","#000;#fff;right;'PT Sans', Tahoma;15px;;;;top;;0-0-0-0,;-1"],
    ["wss20","#818181;#EAEAEA;center;'PT Sans', Tahoma;15px;;;bold;top;;0-0-0-0,;"],
    ["wss21","#000000;#EAEAEA;left;'PT Sans', Tahoma;15px;;;;top;;0-0-0-0,;"],
    ["wss22",";#EAEAEA;;;;;;;;;;"],
    ["wss23","#000000;#EAEAEA;center;'PT Sans', Tahoma;15px;;;;top;;0-0-0-0,;"],
    ["wss24",";#EAEAEA;center;;;;;;;;;"]
  ],
  "sizes": [
    [0,1,125],
    [0,3,158],
    [0,4,137]
  ],
  "data": [
    [1,1,"Report - July 2016","wss5"],
    [1,2,"","wss5"],
    [1,3,"","wss5"],
    [2,1,"Region","wss20"],
    [2,2,"Country","wss20"],
    [2,3,"Sales - Group A","wss12"],
    [2,4,"Sales - Group A","wss12"],
    [2,5,"Total","wss13"],
    [3,1,"Europe","wss23"],
    [3,2,"Germany","wss23"],
    [3,3,"188400","wss17"],
    [3,4,"52000","wss18"],
    [3,5,"=C3+D3","wss19"],
    [4,1,"Europe","wss24"],
    [4,2,"France","wss24"],
    [4,3,"192200","wss18"],
    [4,4,"12000","wss18"],
    [4,5,"=C4+D4","wss19"],
    [5,1,"Europe","wss24"],
    [5,2,"Poland","wss24"],
    [5,3,"68900","wss18"],
    [5,4,"8000","wss18"],
    [5,5,"=C5+D5","wss19"],
    [6,1,"Asia","wss24"],
    [6,2,"Japan","wss24"],
    [6,3,"140000","wss18"],
    [6,4,"14000","wss18"],
    [6,5,"=C6+D6","wss19"],
    [7,1,"Asia","wss24"],
    [7,2,"China","wss24"],
    [7,3,"50000","wss18"],
    [7,4,"4800","wss18"],
    [7,5,"=C7+D7","wss19"]
  ],
  "spans": [
    [1,1,5,1]
  ]
};
~~~