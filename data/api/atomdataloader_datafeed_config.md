dataFeed
=============


@short:
	the url to the data source that the component will use to reload data from

@type: string
@example:
var myform = new webix.ui ({ 
    container:"box",
    view:"form", 
    ...  
    dataFeed: "data/form.php"
})
myform.bind(mygrid);

@template:	api_config
@defined:	DataLoader	
@relatedapi:
	api/basebind_bind.md
    api/atomrender_sync.md
@related: 
	desktop/binding_details.md
    desktop/data_loading.md
@descr:
The property is used in the 'binding' context. Allows you to reload data in the bound component directly from the server, not from
the master component as expected.

<br>

For example, you have a form bound to a grid. The form displayes details of the record selected 
in the grid.<br>
Let's assume, you select a record: 

- **<i>Default behaviour:</i>**<br>
the form takes record details from the grid (takes data on the client)
- **<i>Using 'dataFeed':</i>**<br>
the form loads record details directly from the server (takes data on the server) 

