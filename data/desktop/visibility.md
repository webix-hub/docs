Managing Visibility of Components
========================================

By default, all ui-related components except for [window](desktop/window.md) and [popup](desktop/popup.md) are visible on the page after their initialization. 

##Show() and Hide() methods

To show and hide any component in layout you should call **show()** and **hide()** methods respectively:

~~~js
$$("my_window").show();
$$("my_button").hide();
~~~
{{note
The alternative to the **hide()** is a **hidden:true** parameter that is included into the component constructor. The component can be shown later with the **show()** method. 
}}

When manipulating visibility of components it seems useful to know whether the component is visible on the page at the moment. This can be checked 
with the help of **isVisible()** method that return true or false depending on the component's state.

~~~js
$$("my_window").isVisible();
~~~

##Manipulating Visibility of Control Groups

<img src="desktop/batches.png"/>

At the same time the library allows grouping controls and changing their visibility in groups. It's useful when you want to define different button sets
for different states of the application.


To show and hide groups of elements you make use of the **batch** property and associated with it **showBatch()** method.

**Batch** groups elements by one and the same value that is as well assigned to each of the needed controls.There can be as many batches as you wish
depending on the quantity of the manipulated controls. 

One of the batches(groups) is shown initially. It is defined by **visibleBatch** property. 

###Take following steps to use this functionality

####1 . Include batch property into desired controls.

~~~js
webix.ui({
	view:"toolbar", visibleBatch:"1", // batch "1" is visible initially
	cols:[ 
    	//various controls
		{view:"button", value:"first", batch:"batch 1", align: "left"},
		{view:"button", batch:"batch 2", ... }, 
		{view:"button", batch:"batch 3", ... }, 
		{ ....}
	]
});
~~~

####2 . Assign the function to change visibility of controls to a suitable control. 

Here radio options coincide with batch values from the code above:

~~~js
//changing radio buttons triggers the function execution
{ view:"radio", id:"rad", label: "select", click:"change_batch", 
	options:[
		"batch 1",
        "batch 2", 
        "batch 3"
	]
} 
~~~
####3 . Write the function to show the controls with the chosen batch value. 

~~~js
function change_batch(){
	var mode = $$("rad").getValue(); // returns "batch 1", etc.
	$$("mybar").showBatch(mode); //the value is passed into the function
}
~~~

{{editor http://webix.com/snippet/2a603696	Hiding and Showing Groups of Controls }}

@complexity:1
