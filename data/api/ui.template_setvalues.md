setValues
=============


@short:
	sets data hash 

@params:
- obj		object		data object
* update		boolean		if true, updates only changed values while the unchanged ones remain


@example:

$$("template1").setValues({src:"imgs/image002.jpg"});

@template:	api_method
@defined:	ui.template	

@related:
	desktop/template.md
    desktop/html_templates.md
@relatedsample:
	26_carousel/01_init.html
@relatedapi:
	api/ui.template_getvalues.md

@descr:

###Working with template data object

The method only make sence if you use a template with a single data element defined for it. 

For instance, you have a template object with the following configuration: 

~~~js
{
	view:"template", //optional
    id:"template1",
	data:{
    	src:"imgs/image001.jpg", 
    	desrc:"mytown"
    },
    template:function(obj){
		return '<img src="'+obj.src+'"/>';
	}  
}
~~~

Then data from both initially defined and modified data object will be correctly displayed. 

###Manipulating values

The second parameter helps manipulate values set separately. By default, it is false.

Take that we set new value for a **src** property from the template described above.

~~~js
$$("template1").setValues({src:"imgs/image002.jpg"});
~~~

In this case, the value for the **descr** property is lost. To avoid this, set the update parameter to true. Template data will be updated with a new value 
for *src* property while *descr* value remains unchanged.

~~~js
$$('template1').setValues({src:"imgs/image002.jpg"}, true);
~~~





