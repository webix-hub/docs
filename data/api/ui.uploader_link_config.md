link
=============

@short: sets the component to display values of the files chosen for upload
	
@type: string
@example:
webix.ui({
	view:"form", 
    rows:[
        {  
        	view:"uploader", 
        	value:"Upload file",
        	link:"mylist", //ID of the linked list 
        	upload:"php/upload.php"
        }, 
        {
        	view:"list",  
        	id:"mylist", 
        	type:"uploader" //defines config of each list item
        }
    ]
});

@template:	api_config
@related:
	desktop/file_upload.md
	desktop/progress_bar.md
@relatedsample:
	21_upload/01_init_list.html

@descr:

The component should have appropriate configuration to display file properties. In case of **list**, just define a **built-in "uploader" 
type** for it, which includes the needed template, upload state vizualization, remove icon and click behavior. 

You can as well create a **custom type** by extending any component that can display data with necessary properties: 

###A custom type includes: 

- **template** (string) - set elements to display 
		- file properties: (*name, id, size, sizetext, type, status*);
		- icons;
- **percent** (function) - function to display different icons for different upload statuses; 
- **removeIcon** (function)  - fucntion that sets a removeIcon as CSS class;
- **on_click** - click behavior of the list item;
- **status** (object ) -  hash of properties to define messages for upload statuses:

~~~js
webix.type(webix.ui.list, {
	name:"custom_name",
	template:"#name#  {common.removeIcon()}{common.percent()}\
				\<div style='float:right'>#sizetext#</div>",
	percent:function(obj){...},
	removeIcon:function(obj){...},
	on_click:{...}
	status:function(f){
		var messages = {
			server: "Done",
			error: "Error",
			client: "Ready",
			transfer:  f.percent+"%"
		};
		return messages[f.status]

	}
});
~~~

{{note
Don't forget to set your custom type for the linked list. 
}}
~~~js
webix.ui({
	view:"list",
	type:"custom type"
	...
});
~~~


{{sample 21_upload/06_progress_bar.html}}

More about [type implementation](desktop/type.md). 


