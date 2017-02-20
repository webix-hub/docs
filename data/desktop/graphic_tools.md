Integration with Graphic Tools
============================

{{note JS files for these components aren't included in the lib package and should be taken from [https://github.com/webix-hub/components](https://github.com/webix-hub/components) }}

Webix library supports integration of popular graphic tools in the application with the help of its own components. For now, the following graphic tools can be included: 

- [Konva](#konvajs);
- [Paper](#paperjs).


To embed any of the tools into your web page, you should link not only to Webix, but also to a **special JavaScript file** from the 
[components folder](https://github.com/webix-hub/components). This file will connect
you to the chosen editor as well load extra required files for it. 

Note that in documentation samples files are linked in another way, but in your apps you should follow the patterns described below.

Konva JS
---------

You can download JS file for the Konva JS tool from [github](https://github.com/webix-hub/components).

Konva is an HTML5 Canvas JavaScript framework that extends the 2D context
by enabling canvas interactivity for desktop and mobile applications.

<a href="https://konvajs.github.io/">Learn more about Konva.js library</a>

<img src="desktop/konvajs.png"/>

Related sample: <a href="http://webix-hub.github.io/components/konva/sample.html">Konva JS graphic tool</a>

####Component Initialization

{{snippet
Link to the library
}}
~~~html
<script type="text/javascript" src="./konva.js"></script>
~~~
{{snippet
JS code
}}
~~~js
//path from which extra libraries are autoloaded
webix.codebase = "./";

webix.ui({
	view:"konva", 
    ready:function(){...};
});
~~~

- **ready** - function that is executed when the component is fully loaded. It contains the necessary shapes and layers configuration (available on their site).

Paper JS
---------

You can download JS file for the Paper JS tool from [github](https://github.com/webix-hub/components).

Paper.js is an open source vector graphics scripting framework that runs on top of the HTML5 Canvas.

<a href="http://paperjs.org/">Learn more about Paper.js library</a>

<img src="desktop/paperjs.png"/>

Related sample: <a href="http://webix-hub.github.io/components/konva/sample.html">Paper JS graphic tool</a>


####Component Initialization

Besides the library itself, you need to link a js file with necessary PaperScript and associate it with a related canvas specified by the *canvas* property.

PaperScript code is loaded using the < script > tag and the type being set to "text/paperscript". The code can either be an external file (src="URL"), or inlined. Read the details in the 
[Paper.js documentation](http://paperjs.org/tutorials/getting-started/working-with-paper-js/).

{{snippet
Link to the library
}}
~~~html
<!-- Load the Paper.js library -->
<script type="text/javascript" src="./paper.js"></script>
<!-- Load external PaperScript and associate it with canvasB -->
<script type="text/paperscript" src="./paperballs.js" canvas="canvasB"></script>
~~~
{{snippet
JS code
}}
~~~js
//path from which extra libraries are autoloaded
webix.codebase = "./";

webix.ui({
	view:"paper", 
    canvas:"canvasB"
});
~~~

- Full list of a **Paper object properties** can be found on their site.