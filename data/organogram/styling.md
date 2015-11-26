Styling Organogram
==========

You can customize any element of Webix Organogram.
All you need to do is to redefine the needed attributes of the related css class in the &#60;style&#62; block of your page. The untouched attributes will take default values.

~~~css
<style>

	.webix_organogram{
		background-color: #2196f3;
	}

</style>
~~~
In the above example we redefined only the background color. All the other attributes defined in the **'.webix_organogram'** class took the default values.


CSS classes and the related elements
--------------------------------------

- **.webix_organogram** - css rule for container of the organizational chart
- **.webix_organogram_item** - css rule for all chart items
- **.webix_organogram_level_1** - css rule for the items of the 1st level
- **.webix_organogram_level_2** - css rule of the items of the 2nd level
-    ...
- **.webix_organogram_level_[n]** - css rule for the items of the n level
- **.webix_organogram_list** - css rule for list block
- **.webix_organogram_list_item** - css rule for items inside list block
- **.webix_selected** - css rule for the items in selected state

<img src="desktop/organogram_styles.png">


Custom styling
------------------

You can also redefine the default styles or apply your own css rules for chart items.

Use the **$css** property in item data to specify item style in one of the two ways:


1. create new css rule in &#60;style&#62; block and apply it to the necessary items
2. specify css style directly in the item definition 

To illustrate the described techniques, we will define the **.item_top** css rule and apply it to the item of the 1st level.
For the item of the 2nd level we'll set specific css properties directly in the data set.

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

You can see the result in the picture below:

<img src="desktop/organogram_custom_style.png">

{{sample
60_pro/07_organogram/05_style.html
}}

@edition:pro
