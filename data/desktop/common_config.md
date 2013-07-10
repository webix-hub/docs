Common Configuration for Form and Toolbar Controls
=============

UI-related [Toolbar](desktop/toolbar.md) and [Form](desktop/form.md) are specific components since they don't mean much as they are yet act as containers for [controls](desktop/controls.md) like buttons and icons, input fields 
and selection controls. 

All the controls are included in a toolbar and form as an array of rows/columns or elements respectively. Each control has its own configuration. However, sometimes some properties like width/height, label alignment
and label position coincide, which is done to achieve the uniformity of the component's look-and-feel. 

To avoid multiple repetition of one and the same property for controls belonging to one and the same toolbar you can make use of the **elementsConfig** property. Included into a form or toolbar it sets common configuration for 
all its children (controls). 

{{snippet
Form Configuration
}}
~~~js
webix.ui({
view:"form", 
	elements: [//..elenemts 
		]
	elementsConfig:{
		labelPosition:"top",
		on:{ onchange:function(newv, oldv){  
				webix.message("Value changed from: "+oldv+" to: "+newv);
			})
   })
~~~

{{sample 13_form/02_api/08_common_config.html }}

All the controls in this form with have the label on their top and respond to data alteration in input fields. 

{{snippet
Toolbar Configuration
}}
~~~js
webix.ui({
view:"toolbar",
		elements: [
				{ view:"button"},
                { view:"segmented", options:[...]},
                { view:"text"}, 
                { view:"select", options:[...]}
                ],
        elementsConfig:{
				width: 150,
				height: 30,
				value:"edit"}
})
~~~

{{sample 02_toolbar/15_common_config.html }}

No matter how different the controls on the toolbar are, they  will all get the same height and width as well as the same "edit" value. 




