Styling
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
- **.webix_organogram_level_n** - css rule for the items of the n level
- **.webix_selected** - css rule for the items in selected state

<img src="desktop/organogram_styles.png">


Custom styling
------------------

You can also redefine the default styles or apply your own css rules for chart items. 
There are two ways you can choose from:

1. create new css rule and apply it to the necessary items by means of the **css** parameter
2. use the **css** attribute inside the data source to style a specific item 

To illustrate these ways we will define the **.webix_organogram_item.top** css rule for the item of the 1st level.
For the item of the 2nd level we'll set a specific css rule directly in the data set.
Finally, we'll redefine the **.webix_selected** rule in the &#60;style&#62; block.

~~~js
<style>
	.webix_organogram_item.top{
    	background-color: #ffe0b2;
		border-color: #ffcc80;
	}
    
	.webix_organogram_item.webix_selected{
		background-color: #2196f3;
		border-color: #2196f3;
	}
</style>

<script>
orgChart = new webix.ui({
    container:"box",
    view:"organogram",
    data:[
    	{id:"root", value:"Board of Directors", $css: "top",  data:[
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



