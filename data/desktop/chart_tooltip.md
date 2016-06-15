Chart Tooltip
=============

Tooltip is a graphical UI element that becomes visible when a user places a mouse pointer over the predefined area. 
It presents a popup that gives additional information on a user request. 

<img src="desktop/chart_tooltip.png" />

Tooltip helps interpret chart values, giving precise numbers for [bars](desktop/chart_types.md#bar) as well as points in [line](desktop/chart_types.md#line), [area](desktop/chart_types.md#area), 
[scatter](desktop/chart_types.md#scatter) and [radar](desktop/chart_types.md#radar) charts. 
Tooltip isn't normally used with [pie](desktop/chart_types.md#pie) charts as its values are written on pie pieces. 

Chart tooltips are displayed in squares and include value of the the element you've places a cursor over. 



{{note
Useful tip - define **eventRadius** for chart with a tooltip **bigger** than an item radius. 
}}

In essence, tooltip works under [Event Handling](desktop/event_handling.md) principles: it appears and disappears on "on MouseOver" and "onMouseOut" events respectively, both of them being attached to an item in the chart. 
Items are usually small and users need to be very precise with cursor pointing. Setting **eventRadius** bigger doesn't change anything in the chart appearance but it simplifies tooltip triggering. 

##Tooltip Values

Tooltip values are defined on the base of datasource values. While the chart represents a numeric graphically, tooltip gives literal explanation of this value. 

Let's take the left chart from above. It shows sales amounts per each year. Years are displayed over a horizontal scale while sales amount defines the height of the point on the vertical scale. 

{{snippet
JSON Data
}}
~~~js
var dataset = [
	{ id:1, sales:20, year:"02"},
	{ id:2, sales:55, year:"03"},
	...];
~~~

Tooltip here takes **#sales#** value and shows the exact sales amount as you place a cursor over the point.
 

~~~js
webix.ui({
	view:"chart",
    type:"line",
   	value:"#sales#", //settings for yAxis
    xAxis:{
            template:"'#year#"}, //settings for xAxis
    ....
	tooltip:{
           template:"#sales#" //tooltip
         }
   	eventRadius: 10 
})
~~~

{{sample 08_chart/05_line_chart/02_style.html }}

Templates may include several properties of one and the same data object. 

If you want to see year - sales tooltip for the chart above, change the tooltip template and include #year# to it: 

~~~js
tooltip:{
           template:"#year# - #sales#" //
         }
~~~

Such tooltips are especially convenient for [Scatter](desktop/chart_types.md#scatter) charts where points aren't connected by lines and it's difficult to read exact value: 


<img src="desktop/scatter_tooltip.png" />

{{sample 08_chart/10_scatter_chart/02_templates.html }}
