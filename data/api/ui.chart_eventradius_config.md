eventRadius
=============


@short:sets the radius (in pixels) of the virtual circle which events will fire for items within
	

@type: number
@example:
webix.ui({
	container:"chartDiv",
	view:"chart",
	type:"area",
	xAxis:{
		template:"'#year#"
	},
	eventRadius: 5
})
            
@relatedsample:
	08_chart/07_area_chart/03_series.html
@related: 
	desktop/line_charts.md
    desktop/radar_chart.md
    desktop/scatter_chart.md
@template:	api_config
@descr:
By default, item-related events, such as api/link/ui.chart_onitemclick_event.md, api/link/ui.chart_onmousemove_event.md etc., occur when the user clicks or holds the mouse over the item point.
To increase the area where these events are listened to, you should use **eventRadius**.


Let's take a simple example - a line chart with enabled tooltips.

~~~js
var lineChart =  new WebixChart({
	view:"line",
    ...
    tooltip:{
         template:"itemId=#id#"
    }
});
~~~

<br>

As you probably know, tooltips are displayed/hidden  when the api/link/ui.chart_onmousemove_event.md / api/link/ui.chart_onmouseout_event.md events occur for an item. <br> So, to see the tooltip the user should hold the mouse
over the item point.  

<img src="api/eventRadius_property_01.png"/>

<br>

If you want to give users a bit of freedom and display tooltips not only when the mouse is over the point but also when it's some distance away, you can specify  **eventRadius**:

~~~js
var lineChart =  new WebixChart({
	view:"line",
    ...
    tooltip:{
         template:"itemId=#id#"
    }, 
    eventRadius:10
});
~~~

<br>

<img src="api/eventRadius_property_02.png"/>

@seolinktop: [html5 framework](https://webix.com)
@seolink: [javascript charting](https://webix.com/widget/charts/)