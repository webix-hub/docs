template
=============

@short:
	the component template

@type: string,function

@example:

{ view:"template", type:"header", template:"This is a List Header"}

@descr:

1 . Above is the common **text template** for [template](desktop/template.md) component:

2 . **Data template** for data-containing components:

~~~js
{ view:"list", template:"#id#.#title#" }
 // the list will show ID and title of each data item from the specified datasource
~~~

3 . **Function template** (takes data object and function parameter):

~~~js
{ view:"list", template:function(obj){
    return "<div class='overall'><div class='rank'>"
    	+obj.rank+"</div>"+
        "<div class='title'>"+obj.title+"</div></div>"
}}
//the list will show rank and title of each item styled with specified CSS
~~~

4 . HTML templates defined within an **HTML container**:

~~~js
{ view: "dataview", template:"html->template_container" }
~~~

5 . HTML template defined in the **external file**:

~~~js
{ view:"dataview", template:"http->template.html" }
~~~

6 . Template component can load the external template by Ajax: 

~~~js
{ view:"template", src:"loadtext.php" }
~~~

@template:	api_config

@related: 
	desktop/template.md
    desktop/html_templates.md
@relatedsample: 
	06_dataview/02_templates/01_jshtml.html
    06_dataview/02_templates/02_js.html
    80_docs/template_types.html

@defined:	AtomRender	


