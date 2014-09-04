Scroll Control
=============

Webix provides extensive scrolling management tools. 

- Firstly, Webix components are supplied with **vertical** and **horizontal scrollbars** that can be shown and hidden programmatically;
- Secondly, scrolling in the application can be controlled with the help of **common methods** and **properties**;
- Thirdly, Webix library features a separate component called **[scrollview](desktop/scrollview.md)**, a container view with scrollbars for placing any content there (plain text, HTML, Webix views);

{{note
By default, Webix uses **native** browser scrollbars. In **Webix Pro** edition custom [Webix-made scrollbars](#webixcustomscroll) are available.
}}

##Tuning Scrolling

By default, component features vertical scrolling. It can be modified via the dedicated **scroll** property that may take the following values: 

- "x" - sets a horizontal scrollbar;
- "y" - sets vertical scrollbar (default);
- "xy" - sets both horizontal and vertical scrollbars;
- false - defines non-scrollbale component. 

~~~js
webix.ui({
	view:"list",
    id:"mylist",
    scroll:"x", //"y", "xy", false
    ..//config
});
~~~

Some components feature such properties as **scrollX** and **scrollY** that take boolean values to enable/disable the specified scrolling direction, so check a component's [API Reference](api/toc/ui.md).

##Scrolling and Dynamic Loading

With dynamic loading, only part of the stored records are loaded into the component during init. 
Each time you scroll down/up the component, a data request is sent to server to load the next portion of data. 

Read more about [dynamic loading](desktop/dynamic_loading.md).

##Scrolling to a definite position in the view

If the dataset if too long (e.g. a collection of verses) it seems nice to have an ability to scroll to a definite poem automatically with a
click of a button.

Here you have several possibilities: 

1 . Make use of the component's **scrollTo(x,y)** method: 

The function is called from a scrollview object and takes horizontal and vertical position of the necessary line into it. If you state this position as button's ID, the function will look like this: 

~~~js
function scroll(id){
	id=this.config.id * 1; //gets ID of the clicked button 
	$$("verses").scrollTo(0, id); //scrolls through the view with the specified ID 
}
~~~

Scroll position can be calculated during development state with the **getScrollState()** method that returns an object with X and Y parameters. 

You can as well as set **time** for the **scrollTo()** function to perform. 

~~~js
webix.ui({
    view:"mylist",
    scrollSpeed:"100ms",
    ...
})
~~~

2 .Scrolling via **focusing** on the necessary **view** withtin the scrollview.

Here the button's ID should be connected to the ID of the row in the scrollview:

~~~js
{ view:"button", value: '..', id: '1', click:"scroll"},
{ view:"button", value: '..', id: '2', click:"scroll"},
~~~

Then the **showView()** set focus to the scrollview item with the corresponding **ID**. 

~~~js
webix.ui({
	view:"scrollview", 
    id:"verses", 
    body:{
       rows:[
           { id:"verse_1", template:".."},
           { id:"verse_2", template:".."},
           { id:"verse_3", template:".."}
       ]
});
                        
 function scroll(id){
            $$("verses").showView("verse_"+id);
        }
~~~

{{sample 04_template/10_scrollview.html}}

3 . Make the view **show the definite item** specified by its ID: 

~~~js
$$("mylist").showItem(5); // the list should be scrollable
~~~

{{sample 05_list/08_xlist.html}}

Within [datatable](datatable/index.md) scrolling via showing includes the following methods:

- **showItem**(*rowId*) - scrolls to a definite row indicated by its ID;
- **showItemByIndex**(*rowIndex*) - scrolls to a definite row dfined by data item index in the datasource;
- **showCell**(*rowID, cellID*) - scrolls to a definite cell (both vertical and horizontal scrolling modes work).

##Defining scroll position

Scroll state is defined as the combination of a **top** and **left scroll position** (how much is the component scrolled from its top and left border). 
In case you have either a horizontal or vertical scrollbar, the scroll state includes only one value - X or Y respectively. 

Scroll position can be derived with the **getScrollState()** method to learn the current values: 

~~~js
var scPos = $$("mylist").getScrollState(); // returns data as ({x:30,y:200})
var posx = scPos.x; // 30
var posy = scPos.y; // 200
~~~

##Webix Custom Scroll

{{note
The feature is available in **Webix Pro** edition only.
}}

Webix offers custom scrollbars to replace native browser ones. The advantages are as follows: 

- semi-transparent thin grey bars feature neat design;
- the bars are initially and hidden appear only when scrolling movement is detected on the page (provided scrolling is enabled). 

<img src="desktop/customscroll.png"/>

{{sample 60_pro/03_api/01_customscroll.html}}

The feature is provided in a separate **CustomScroll** module and the file should be included before use: 

{{snippet
Including CustomScroll in addition to Webix
}}
~~~html
<!--provide relative path as in your machine-->
<script src="codebase/ui/customscroll.js" type="text/javascript" charset="utf-8">
</script>
~~~

In addition, you need to **enable the CustomScroll** for your application. Make sure you wrap everything into a **webix.ready()** function that is executed after page loading:

~~~js
webix.ready(function(){
	//enabling CustomScroll
	if (!webix.env.touch && webix.ui.scrollSize)
   		webix.CustomScroll.init();
        
    //your webix app
    webix.ui({
    	...
    });
});
~~~

@complexity:2

