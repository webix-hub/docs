dataFeed
=============


@short:
	the URL that the component will use to reload data during binding

@type: string, function
@example:
var myform = new webix.ui({
    container: "box",
    view: "form",
    ...  
    dataFeed: "data/form.php"
});
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

###Using during binding 

In the related sample the property is used in the 'binding' context. This allows you to reload data in the bound component directly from the server, not from the master component as expected.

For example, you have a form bound to a grid. The form displays details of the record selected in the grid.
Let's assume you select a record. What happens with the slave component?

- **Default behaviour:** the form takes record details from the grid (the data is on the client);
- **Using "dataFeed":** the form loads record details directly from the server (data comes from the server).

###Using dataFeed for Forms and Collections

The logic of "dataFeed" behaviour is the same for forms and collections (i.e. data components), yet the difference lies in the 
parameters for the URL that is formed to send requests to server:

Let's assume that dataFeed is "data/form.php":

- for **forms** the request URL looks like: "data/form.php?action=get&id=" + obj.id
- for **data** components the request URL is as follows: "data/form.php?filter[id]=" + obj.id

where **obj** is the selected data item in the master component.

###Datafeed as function

Datafeed can be also defined as a function that reloads data for the component.

In the code below, the [suggest](desktop/suggest.md) component linked to an input reloads data based on the current input value:

~~~js
webix.ui({
	view: "suggest",
	keyPressTimeout: "1000",
	input: $$("text_search"),
	body: {
   		dataFeed: function (text) {
        	this.clearAll();
        	this.load("data/search/" + text);
    	}
	}
});
~~~
