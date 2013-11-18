Changing View Visibility
=====================

{{note
From the very beginning it should be said that **Webix views can't be hidden** and **shown back** with Angular **ngShow** and **ngHide** directives that can still be used to manupulate visibility of pure HTML elements.
}}

Let's remind us what are **Webix views**. They are created with the help of **webix.ui()** constructor that is called by **webix-ui** directive. 

~~~html
<body ng-app="Webix App">
	<div style="width:800px;"></div> <!--standard HTML element-->
    <div webix-ui type="wide">
    	<!-- all divs inside this and including this are parsed as Webix views-->
    </div>
</body>
~~~

To show and hide Webix Views a special **webix-show** directive should be used. Remember that all divs without *view* attribute are parsed as Webix [templates](desktop/template.md). Views are initially **hidden**.

~~~html
<div webix-ui type="wide">
	<div width="200" webix-show="showLeft">Left</div>
</div>
~~~

The **webix-show** directive declares a variable which value (boolean) can be afterwards changed on some event. Here button click is used: 

~~~html 
<!-- showing view -->
<button ng-click="showLeft=true">Show Left</button>

<!-- hiding view -->
<button ng-click="showLeft=false">Hide Left</button>
~~~

{{sample 33_angular/05_show.html}}

