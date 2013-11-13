Chart Integration
========================

{{note js files for those components can be taken from [https://github.com/webix-hub/components](https://github.com/webix-hub/components) }}

Except for built-in [charts](desktop/chart.md), the webix UI library offers a possibility to integrate third party charts into your app design. 

- Bubble Chart from <a href="http://d3js.org/">D3 JS Library</a>
- Dot Chart from <a href="http://raphaeljs.com/">Raphael JavaScript Library</a>

##D3 Bubble  Chart

<img src="desktop/bubble_chart.png"/>

{{sample 32_thirdparty/06_d3.html}}

Bubble chart encodes data in the area of circles that pack hundreds of values into a small space. It looks like a bundle of multicolored baloons. 

####Component Initialization

~~~js
webix.ui({
	view:"d3-chart", 
	url:"...",
	ready:function(){...};
    })
~~~

- **url** - specifies data source for the chart;
- **ready** - function that is executed when the component is fully loaded. It contains the chart's source code available on D3 JS library site. 

##Raphael Dot Chart

<img src="desktop/dot_chart.png"/>

{{sample 32_thirdparty/07_raphael.html}}

Dot chart also encodes data in the area of circles, but displays them in shape of points on the coordinate system. 

####Component Initialization

~~~js
webix.ui({
	view:"raphael-chart", 
	url:"...",
	ready:function(){...};
   })
~~~

- **url** - specifies data source for the chart;
- **ready** - function that is triggered when the component is fully loaded. It contains the chart's source code available on Raphael library site. 


@complexity:2