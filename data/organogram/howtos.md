Organogram General How-Tos
===============

How to create list blocks?
-------------------------

To create a list block, you need to specify the **$type** property with the value "list" in the parent of the items that you want to turn into a list.

In the example below, we will unite the "Base research" and "Collaborative research with industries" items into a list.
For this purpose, we will set the **$type** property with the value "list" in their parent item called "Research".

The same actions will be performed with the "Development" value and its child items.

The code will look like this:

~~~js
var orgChart = new webix.ui({
	container:"testA",
    view:"organogram",
    data: [
    	{id:"1", value:"Center Director", data:[
    		{ id:"1.1", value:"Research &amp; Development", data:[
    			{ id:"1.1.1", value:"Research", $type: "list", data:[
    				{ id:"1.1.1.1", value:"Base research" },
    				{ id:"1.1.1.2", value:"Collaborative research with industries" }
    			]},
    			{ id:"1.1.2", value:"Development", $type: "list", data:[
    				{ id:"1.1.2.1", value:"Faculty development workshops" },
    				{ id:"1.1.2.2", value:"Student development" }
    			]}
    		]},
    		...
    	]}
    ]
});
~~~

{{sample
60_pro/07_organogram/02_list.html
}}



How to add an image into an item?
--------------------------------

To add an image for an item, you should redefine the **template** property:

~~~js
var orgChart = new webix.ui({
    container:"testA",
    view:"organogram",
    template: function(obj){
        var image = obj.img;
       
        if(image){
            html = "<img src='"+image+"' class='photo'>";
        }
        
        return (image||"")+obj.value;
    }
});
~~~

{{sample
60_pro/07_organogram/07_templates.html
}}

How to specify a custom style for items?
------------------------

You can also redefine the default styles or apply your own css rules for chart items.

Use the **$css** property in item data to specify item style in one of the two ways:


1. create new css rule in &#60;style&#62; block and apply it to the necessary items
2. specify css style directly in the item definition 

To illustrate the described techniques, we will define the **.item_top** css rule and apply it to the item of the 1st level.
For the item of the second level we'll set specific css properties directly in the data set.

Finally, we'll redefine the **.webix_selected** rule to change background color of selected items.

~~~js
<style>
    // "top" ccs rule definition
	.item_top{
    	background-color: #ffe0b2;
		border-color: #ffcc80;
	}
    // the style for selected item 
	.webix_selected{
		background-color: #2196f3 !important;
		border-color: #2196f3 !important;
	}
</style>

<script>
orgChart = new webix.ui({
    container:"box",
    view:"organogram",
    data:[
    	{id:"root", value:"Board of Directors", $css: "item_top",  data:[
			{id:"1", value:"Managing Director", 
              $css:{background: "#ffe0b2", "border-color": "#ffcc80"}, data:[
				{id:"1.1", value:"Base Manager"},
				{ id:"1.2", value:"Business Development Manager"}
            	...
			]}
		]}
	]
});
</script>
~~~

{{sample
60_pro/07_organogram/05_style.html
}}

@edition:pro

@spellcheck:Tos