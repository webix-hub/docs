Chart Integration
========================

{{note JS files for these components aren't included into the lib package and should be taken from [https://github.com/webix-hub/components](https://github.com/webix-hub/components) }}

Except for built-in [charts](desktop/chart.md), Webix offers a possibility to integrate with third-party charts of the following libraries:

- <a href="http://d3js.org/">D3 JS Library</a>
- <a href="http://justgage.com/">JustGage Javascript Plugin</a>
- <a href="http://raphaeljs.com/">Raphael JavaScript Library</a>
- <a href="http://sigmajs.org/">SigmaJS Library</a>
- <a href="http://www.fusioncharts.com/">FusionCharts Library</a>

Note that third-party scripts are included to documentation samples in another way, but you should follow the linking pattern described below. 

##D3 Charts

D3 charts helps manipulate documents based on data and offers powerful visualization tools and a data-driven approach to DOM manipulation. 

One of its implementations, **Bubble chart**, displays data in the area of circles that pack hundreds of values into a small space. It looks like a bundle of multicolored balloons. 

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

##JustGage Gauges

JustGage JS is a handy JavaScript plugin for generating and animating nice gauges. It is based on Rapha&euml;l library for vector drawing. 

<img src="desktop/justgage.png">

**Related Sample:** <a href="http://webix-hub.github.io/components/justgage/sample.html">JustGage Chart</a>

####Component Initialization

Firstly, you should include JustGage JS file from the package into your document in addition to Webix files:

~~~html
<script type="text/javascript" src="./justgage.js"></script>
<!-- Raphael JS will be autoloaded -->
~~~

And then initialize the view:

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

- Full list of a **JustGage gauge object properties** can be found on their site. 

##Rapha&euml;l Charts

Rapha&euml;l JS library offers a number of visualization tools that help working with with vector graphics on the web.

For instance, its dot chart encodes data in the area of circles placed on the coordinate system. 

<img src="desktop/dot_chart.png"/>

{{sample 32_thirdparty/07_raphael.html}}

####Component Initialization

Firstly, you should include Rapha&euml;l JS file from the package into your document in addition to Webix files:

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
- **ready** - function that is triggered when the component is fully loaded. It contains the chart's source code available on the Rapha&euml;l library site. 

##Sigma Charts

Sigma is JS library that aids in drawing graphs using the HTML canvas element. It offers several graph types.  

<img src="desktop/sigma.png">

{{sample 32_thirdparty/05_sigma.html}}

####Component Initialization

Firstly, you should include Sigma JS files from the package into your document in addition to Webix files:

~~~html
<script type="text/javascript" src="./sigma.js"></script>
~~~

And then initialize the view:

~~~js
//path from which extra libraries are autoloaded
webix.codebase = "./";

webix.ui({
	view:"sigma-chart", 
	url:"./data/les_miserables.gexf"
});
~~~

- **URL** property specifies a path to a data file or script that will generate data. 

The look-and-feel of a Sigma chart is defined by a currently used **plugin**. By default, Webix-integrated Sigma chart uses FishEye plugin described in a tutorial on [Sigma JS site](http://sigmajs.org). At the same time, you can 
easily change the plugin within the component source code in a private **_after_render()** function:

~~~js
_render_once:function(){
	webix.require([
		"sigma/sigma.js", //sigma lib file 
		"sigma/plugins/sigma.parseGexf.js", //GEXF extension
		"sigma/plugins/sigma.fisheye.js" //plugin
   ],function(first_init){ ...}); //chart initializing
}
~~~

In our [Github package](https://github.com/webix-hub/components/tree/master/sigma) you'll also find **forceAtlas2** Sigma plugin as well as you can write your own one and place it to the plugin folder 
and include into the **sigma-chart** Webix component in the way described above. 

In addition, the support for GEXF data is provided by default.

FusionCharts
--------------

FusionCharts is a JavaScript library that provides a wide range of charting solutions for web and mobile applications.

<img src="desktop/fusioncharts.png">

**Related Sample:** <a link="http://webix-hub.github.io/components/fusion/sample.html">FusionChart</a>

####Component Initialization

Firstly, you should include Sigma JS files from the package into your document in addition to Webix files:

~~~html
<script type="text/javascript" src="./fusion.js"></script>
~~~

And then initialize the view:

~~~js
//path from which extra libraries are autoloaded
webix.codebase = "./";

webix.ui({
	view:"fusion-chart", 
	config: {
     // chart config
    }
});
~~~

- **config** - specifies the chart configuration. The available configuration parameters can be found on the FusionCharts site.

@complexity:2

@spellcheck: GEXF, Rapha, euml