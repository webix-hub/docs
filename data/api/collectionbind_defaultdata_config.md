defaultData
=============


@short: the property stores data which is displayed in the child when no records are selected in the  master.
	

@type: object
@example:
$$('mylist').define ("defaultData",{name:"New contact", gender:"Male", age:"18"});

@template:	api_config
@relatedapi:
	api/link/ui.list_bind.md
    api/link/ui.list_define.md
@related:
	desktop/binding_details.md
@relatedsample:
	98_docs/default_data.html
@descr:
The property can be used to prevent the child from 'undefined' values.

<b>For example, you have the following structure on the page:</b>

<img src="api/defaultData_01.png"></img>

~~~js
webix.ui({
	container:"box",
	cols:[
	{   
    	view:"list", 
    	id:"myList",
        url:"data.json",
        select:true,
        template:"#rank#. #title# </div>"
	},
	{
		view:"template", 
        id:"myTemplate",
		template:"Title #title#<hr> Year #year#<hr> Votes #votes#"
    }]
});

$$('myTemplate').bind($$('myList'));
~~~
<br>

<b>Initially, when no items are selected in the list, it looks like this:</b>

<img src="api/defaultData_02.png"></img>

<br>
But once you add the following command:


~~~js
$$('myList').define ("defaultData",{title:"", year:"", votes:""});
~~~

{{note
You must call api/link/ui.list_define.md before calling the api/link/ui.list_bind.md method. Otherwise, the provided default values won't be applied.
}}

<br>
<b>The app will start look like this:</b>

<img src="api/defaultData_03.png"></img>