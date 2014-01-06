template
=============

@short:
	the component template

@type: string,function

@example:

{view:"template", type:"header", template:"This is a List Header"}
~~~
1 . Above is the common **text template** for [template](desktop/template.md) component:

2 . **Data template** for data-containing components:

~~~js
{view:"list", 
 data:"data.xml",
 template:"#id#.#title#",
 ..list config
 }
 // the list will show ID and title of each data item from the specified datasource
~~~

3 . **Function template** (takes data object and function parameter):

~~~js
template:function(obj){
            return "<div class='overall'><div class='rank'>"+obj.rank+".</div>
                <div class='title'>"+obj.title+"</div>
                </div>"
                }
//the list will show rank and title of each item styled with specified CSS
 
@template:	api_config

@related: 
	desktop/template.md
    desktop/html_templates.md
@relatedsample: 
	06_dataview/02_templates/01_jshtml.html
    06_dataview/02_templates/02_js.html
    80_docs/header_templates.html
@relatedapi:
    api/atomrender_template_config.md
@defined:	AtomRender	
@descr:

You can define the look-and-feel of your component/control with the help of a **template** property.

~~~js
//template for the password field
webix.ui({
	view:"input", 
    ...
    template:function(config){ return (config.label + "&nbsp" || "label") + 
"<input type='password' maxlength=" + (config.maxLength || 30) + " style='width:" + 
(config.inputWidth || 100) + "px'>" + (config.value || "") + "</input>" }
~~~

As a parameter, the function takes the configuration object of the component.

Use the property ONLY if you need to provide some custom behaviour and **be very careful** since once you have
set the property, the default processing will be cancelled and you will need to provide all
behaviour and appearance by yourself.

The process of creating custom components is described [here](desktop/custom_component.md). 

