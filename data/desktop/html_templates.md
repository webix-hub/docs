Data Templates
=================
Here we speak about the ways of presenting data inside the component after [data loading](desktop/data_loading.md).

After the data is loaded to the component it is stored in the `data` object and the component searches for the right value to display. So what is the **object value** for each data item?

Data Item Value
-----------------

All supported data types may contain **more than one value per item** e.g. each item of a filmset may contain not only a film's title but also its rank, production year, and number of votes. 

Still, different components have different possibilities and requirements:

- Components with **single-value items**: [list](desktop/list.md) and its variants ([grouplist](desktop/grouplist.md), [unitlist](desktop/unitlist.md) and [x-list](desktop/xlist.md)), 
[dataview](desktop/dataview.md) and [tree](datatree/index.md). Each of their items takes one value by default. 
- Components with **multiple-value items**: [datatable](datatable/index.md) and [treetable](desktop/treetable.md). They take as many items as many columns are defined. 
- [Chart](desktop/chart.md) requires a **pair of values**  - one for each exle.

####Item Value can be defined by: 

- **JSON property/XML tag value**

~~~js
//JSON
[ {id:1, value:"3", title:"" }, {id:2, value:"2", title:""} ]

//XML
<data><item value='3' other:""/><item value='2' other:""/></data>
~~~

{{sample 17_datatree/01_loading/01_json_data.html}}

Such definition would suit single-value components. If a data item has other properties, their values won't be shown unless you define a template.

- **data template** that performs two tasks
	- main - defines which item property (-ies) should be treated as **value** to display;
    - adds formatting to this value.
    
Templates can be defined for any component you wish.  

Templates can set one or several properties as the value to display:

~~~js
webix.ui({
    view: "list",
    template: "#title#"
}); // this list will show 'titles'

webix.ui({
    view: "list",
    template: "#value#.#title#"
}); // this list will show 'values' and 'titles' 
~~~

{{sample 05_list/01_list.html }}

- [datatable](datatable/index.md) and [treetable](desktop/treetable.md) **column ID** that act as templates for cells.

~~~js
view: "datatable",
columns: [
    { id: "id", header: "...", width: 50}, // 1st col displays item 'IDs'
    { id: "title" }, // 2nd col displays item 'titles'
    { id: "value" }  // 3rd col displays item 'values'
]   
~~~

Column IDs perform the main template function - they set the value to display. To add extra words or formatting to the
displayed values, you can define a template for the column. 

~~~js
{ id: "title", template: "The title is <b>#title#</b>!" }
~~~

###Template for CSV and JSArray

CSV and JSArray data types have no tags or properties. 

~~~js
//CSV 
'3,4 \n 2,6 \n 5, 9'

//JSarray
[
	[3, 4],[2, 6],[5, 9]
]
~~~

The elements are defined by their position in the CSV string or JSArray - data0, data1, data3

~~~js
//list template
template:"#data0#.#data1#" 

//datatable columns

columns: [
    { id: "data0" },
    { id: "data1" }
];
~~~

{{sample 15_datatable/01_loading/01_inline_data.html}}

{{note
As far as you've noticed, only **JSON** and **XML** data can be displayed without refering to template, since only they can directly set **value.** 
Moreover, this can be applied only to components with **single-value items**. 
}}

### Chart exception

[Chart](desktop/chart.md) requires two values per item - one for each axis.

- **Y-axle value** is defined by the **value** property that can be additionally amended within the `yAxis` object property.
- **X-axis value** is defined by the template within the `xAxis` object property.

~~~js
webix.ui({
   view:"chart",
   value:"#data0#", //in case of CSV or JSArray
   xAxis:{
       template:"#data1#"
   },
   yAxis:{
       template:function(obj){
             return (obj%20?"":obj
    }
});
~~~

In case of template function (described below) value is referred to as **obj** instead of standard obj.value (obj.title, obj.data0). 

{{sample 08_chart/01_initialization/03_load_csv.html}}

Template Contents
-------------------

The whole template comes in quotation marks and includes: 

- **JSON keys / XML tags** from the initial dataset, surrounded by hash signs;
- **HTML tags** and **CSS selectors** (optional, adds styling);
- **plain text**.

###Template Sample

~~~js
template: "<span style='classname'>#title#</span>. Shot in #year#. Ranked #rank#."
~~~

*Title*, *year* and *rank* signify repeated values from the dataset. All the titles will be styled with the help of the *.classname* CSS class. 'Shot in' and 'Ranked' are plain text to be shown to the user.

Optionally, you can define the **template for data copied to clipboard**. If not specified, data will be taken according to the above-mentioned template.

~~~js
templateCopy: "#rank#.#title#"
~~~

In this case, only the `rank` and `title` values are copied. 

{{note
**Grouplist** has its own templating pattern. Look into the [related article](desktop/grouplist.md) for details.
}}

###The item in the intial dataset looks like this:

~~~js
//JSON
{ title: "My film", year: 1994, rank: 7 }

//XML
<item>
	<title>My film</title>
	<year>1994</year>
	<rank>7</rank>
</item>
~~~
Inside the component it looks like this: **<i>My film.</i> Shot in 1998. Ranked 7.**

{{note
Don't confuse template property with the [template](desktop/template.md) component.
}}

##Template Types

Templates can be defined in five very flexible ways:

* as HTML strings within JavaScript objects
* by creating named templates
* by extracting them from an HTML container
* by retrieving them from an external file
* as a function returning a string

Templates are included into Webix components as well as into some of their properties that take objects as values. 

- [Tooltip implementation](desktop/tooltip.md)
- [Type implementation](desktop/type.md)

###HTML inside JavaScript

{{snippet
JSON data in the dataview
}}

~~~js
var big_film_set = [
    { id: 1, title: "The Shawshank Redemption",
      year: 1994, votes: "67,879",
      rating: "9.2", rank: 1
    },
    { ...}
];

webix.ui({       
  view: "dataview",
  template: "<div class='rank'>#rank#.</div><div class='title'>#title#</div>"
});
~~~

{{sample 06_dataview/02_templates/01_jshtml.html}}

###Named Template

Templates may be included inside the **type** parameter. Type applies to each item rather then the whole component. 

1 . First you should create a type with the `webix.type` constructor. It is created for the specified UI component: 

~~~js
webix.type(webix.ui.dataview, {
    name: "typeA",
    template: "<div class=''>#rank#.</div>"+
            "<div class='title'>#title#</div>"+
            "<div class='year'>#year# year</div>"
});
~~~ 
2 . Then you specify the name of that type as value of `type` property for this component:
~~~js
webix.ui({       
    view: "dataview",
    type: "typeA",  // name of the webix.type object created in the first step
    ...
});
~~~

{{sample 06_dataview/02_templates/05_named.html }}

See the corresponding article to learn more about [type implementation](desktop/type.md).

###HTML Container with Data Template

The template may be defined inside an **html-container** and referred by its id:

~~~html
<textarea id="template_container" rows="5" cols="60" style="margin-left:20px">
   <div class='overall'>
        <div class='rank'>#rank#.</div>
        <div class='title'>#title#</div>
        <div class='year'>#year#</div>
   </div>
</textarea>
    
<script>
webix.ui({       
    view: "dataview",
    // lookup the textarea by id and fetch its contents
    template: "html->template_container", 
    ...
});
<script>
~~~

{{sample 06_dataview/02_templates/03_html.html }}

###External HTML template

Templates can be defined in external files. The **template** parameter will be a link to this file, prefixed by **http->**:

~~~js
webix.ui({
	view:"dataview",
	template:"http->template.html",
    data:big_film_set
});
~~~

The file contents (an HTML template from the example above):

~~~html
<div class="overall">
    <div class="rank">#rank#.</div>
    <div class="title">#title#</div>
    <div class="year">#year# year</div>
</div>
~~~

Note that these HTTP requestes are not cached. If you use the same template repeatedly, it's better to retrieve it via AJAX and store it in a variable:

~~~js
var objectDetailTemplate = webix.ajax().sync().get('template.html').responseText;
~~~

{{sample 06_dataview/02_templates/04_external.html }}

###Template Function

`template` may as well be **function** that returns the string to render. No #-interpolation will take place in this case; you have to interpolate variables on your own.

~~~js
...
template: function (obj) {
    return "<div class='overall'><div class='rank'>" + obj.rank + ".</div>" +
      "<div class='title'>" + obj.title + "</div>" +
      "<div class='year'>" + obj.year + " year</div> </div>";
}
~~~

{{sample 06_dataview/02_templates/02_js.html}}

- If value is defined by JSON/XML tag **value** - you refer to it as **obj.value.**
- If value is defined by template - you refer to it as **obj.title**, **obj.rank**, **obj.data0** (CSV, JSArray) etc. 


## XSS Safe templates

By default, `#...#` templates placeholders will be replaced with the data value without any processing. If you have HTML data in the data object, it will placed in the template.
In most cases this is an advantage, but sometimes it may be necessary to output such data as text, not a HTML:

- when you have text data with special HTML characters (`<`, `>`, and `&`)
- when you are not sure is the data safe or not (e.g. was entered by the user)

In such cases you can add a `!` after the opening `#`:

~~~js
{
  template: "My #data#" // will output data as HTML content 
},
{
  template: "My #!data#" // will output data as Text content 
},
~~~

@index:
  - desktop/tooltip.md
  - desktop/type.md

@complexity:2
