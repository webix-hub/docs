Custom X-Axis Formation
=============

Sometimes you need to create a detailed scale, especially when you work with dates. 

<img src="desktop/custom_x_axis.png"/>

{{sample 08_chart/06_bar_chart/13_custom_axis.html }}

Here you work with dates and sales per date stored in JSON dataset. Note that dates are stored as strings. 

~~~js
var dates_dataset = [
	{ id:1, sales:20, date:"05.01.2012", color: "#ee4339"},
	{ id:2, sales:55, date:"10.01.2012", color: "#ee9336"},
	{ id:3, sales:40, date:"15.01.2012", color: "#eed236"},
	...]
~~~

Sales are represented by y-Axis values, while dates form the **timeline** on the x-Axis, each unit representing a day of month. The quantity of unit per month 
should be equal to the real quantity of days in this or that month, which isn't a static value. 

In this case, the looks of the X-axis is totally customized features several object and function properties, namely **template, lineColor, value** and **units**. 


###Units

The object properties set the first and the last unit for the scale as well as sets a step between neighbouring units. 

~~~js
units:{
       start:new Date(2012,0,1), //starting from January, the 1sr
       end:new Date(2012,1,29), //finishing on February, the 29th
       next:function(d){
             return  webix.Date.add(d, 1, "day", true); 
            }
~~~

Step is set by the [add function](api/date_add.md) that takes **date object**, **number of units** to add and **unit name** as parameters. 

###Template

Template defines text label for an axis. Normal chart scale features one label below an axis, but here we need to underwrite each month of the timeline. 

The function below allows placing the right label under the 15th day of each month:

~~~js
 template:function(obj){
                return obj.$unit.getDate()==15?webix.Date.dateToStr("%F")(obj.$unit):""
            },
~~~

The function gets day number from the Date object of each unit. If it equals to 15, the date is parsed to string and formatted to output the full name of the month. Otherwise, the unit receives no label. 

###LineColor

Line color within x-Axis object defines the color of vertical scale units. In this case we need that a line for the first day of February is darker than the others. 

~~~js
 lineColor:function(obj){
                return obj.$unit.valueOf() == (new Date(2012,1,1)).valueOf()?"#737373":"#cfcfcf"
            }
~~~

The function defines the value of each unit. If is equals fo the February, the 1st, it return dark grey (#737373). Otherwise, the color is light grey. 

###Value

Values are not displayed right in the chart, yet shown with a help of the [tooltip](desktop/chart_tooltip.md). Here we can set an approproate formatting method for 

Date string is taken from the dataset (obj.date) and turned to date object formatted under the *"day number-month number-full year"* pattern. 
~~~js
  value:function(obj){
                console.log(webix.Date.strToDate("%d.%m.%Y")(obj.date)) 
                return webix.Date.strToDate("%d.%m.%Y")(obj.date);
            },
~~~