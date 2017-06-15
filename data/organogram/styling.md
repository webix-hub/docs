Styling Organogram
==========

You can customize any element of Webix Organogram.
All you need to do is to redefine the needed attributes of the related CSS class in the &#60;style&#62; block of your page. The untouched attributes will take default values.

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

- **.webix_organogram** - CSS rule for container of the organizational chart
- **.webix_organogram_item** - CSS rule for all chart items
- **.webix_organogram_level_1** - CSS rule for the items of the first level
- **.webix_organogram_level_2** - CSS rule of the items of the second level
-    ...
- **.webix_organogram_level_[n]** - CSS rule for the items of the N level
- **.webix_organogram_list** - CSS rule for list block
- **.webix_organogram_list_item** - CSS rule for items inside list block
- **.webix_selected** - CSS rule for the items in selected state

<img src="desktop/organogram_styles.png">


Custom styling
------------------

You can also redefine the default styles or apply your own CSS rules for chart items.

Use the **$css** property in item data to specify item style in one of the two ways:


1. create a new CSS rule in &#60;style&#62; block and apply it to the necessary items
2. specify CSS style directly in the item definition 

To illustrate the described techniques, we will define the **.item_top** CSS rule and apply it to the item of the 1st level.
For the item of the second level we'll set specific CSS properties directly in the data set.

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


@seolinktop: [widget library](https://webix.com)
@seolink: [organizational chart maker](https://webix.com/widget/organogram/)