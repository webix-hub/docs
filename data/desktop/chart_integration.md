Chart Integration
========================

{{note JS files for these components aren't included into the lib package and should be taken from [https://github.com/webix-hub/components](https://github.com/webix-hub/components) }}

Except for built-in [charts](desktop/chart.md), Webix offers a possibility to integrate with third-party charts of the following libraries:

- <a href="http://d3js.org/">D3 JS Library</a>
- <a href="http://justgage.com/">JastGage Javascript Plugin</a>
- <a href="http://raphaeljs.com/">Raphael JavaScript Library</a>
- <a href="http://sigmajs.org/">SigmaJS Library</a>

Note that third-party scripts are included to documentation samples in another way, but you should follow the linking pattern described below. 

##D3 Charts

D3 charts helps manipulate documents based on data and offers powerful visualization tools and a data-driven approach to DOM manipulation. 

One of its implementations, **Bubble chart**, displays data in the area of circles that pack hundreds of values into a small space. It looks like a bundle of multicolored baloons. 

<img src="desktop/bubble_chart.png"/>

{{sample 32_thirdparty/06_d3.html}}

####Component Initialization

Firstly, you should include D3 JS file from the package into your document in addition to Webix files:

~~~html
<script type="text/javascript" src="./d3.js"></script>
~~~

And then init the view:

~~~js
//path from which extra libraries are autoloaded
webix.codebase = "./";

webix.ui({
	view:"d3-chart", 
	url:"...", 
	ready:function(){...}; 
});
~~~

- **url** - specifies data source for the chart (data file or script);
- **ready** - function that is executed when the component is fully loaded. It contains the code of the needed chart (available on their site). 

##Justgage Gauges

JustGage JS is a handy JavaScript plugin for generating and animating nice gauges. It is based on Raphaël library for vector drawing. 

<img src="desktop/justgage.png">

Related Sample: <a href="http://cdns.webix.io/components/justgage/sample.html">JustGage Chart</a>

####Component Initialization

Firstly, you should include JustGage JS file from the package into your document in addition to Webix files:

~~~html
<script type="text/javascript" src="./justgage.js"></script>
<!-- Raphael JS will be autoloaded -->
~~~

And then init the view:

~~~js
//path from which extra libraries are autoloaded
webix.codebase = "./";

webix.ui({
	view:"justgage-chart",
	value:25,
	title:"Positive",
	height:300,
    min: 0,
	max: 100
});
~~~

- Full list of a **Justgage gauge object properties** can be found on their site. 

##Raphael Charts

Raphael JS lib offers a number of viasualization tools that help working with with vector graphics on the web.

For instance, its dot chart encodes data in the area of circles placed on the coordinate system. 

<img src="desktop/dot_chart.png"/>

{{sample 32_thirdparty/07_raphael.html}}

####Component Initialization

Firstly, you should include Raphael JS file from the package into your document in addition to Webix files:

~~~html
<script type="text/javascript" src="./raphael.js"></script>
~~~

And then init the view:

~~~js
//path from which extra libraries are autoloaded
webix.codebase = "./";

webix.ui({
	view:"raphael-chart", 
	url:"...",
	ready:function(){...};
});
~~~

- **url** - specifies data source for the chart (data file or script);
- **ready** - function that is triggered when the component is fully loaded. It contains the chart's source code available on the Raphael library site. 

##Sigma Charts

Sigma is JS library that aids in drawing graphs using the HTML canvas element. It offers several graph types.  

<img src="desktop/sigma.png">

{{sample 32_thirdparty/05_sigma.html}}

####Component Initialization

Firstly, you should include Sigma JS files from the package into your document in addition to Webix files:

~~~html
<script type="text/javascript" src="./sigma.js"></script>
~~~

And then init the view:

~~~js
//path from which extra libraries are autoloaded
webix.codebase = "./";

webix.ui({
	view:"sigma-chart", 
	url:"./data/les_miserables.gexf"
});
~~~

- **URL** property specifies a path to a data file or script that will generate data. 

@complexity:2