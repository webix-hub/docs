add
=============

@short:
	adds an item to the store

@params:
- obj		   object		    the item object
* index		 number		the item position


@returns:
- id    id    the item id

@example:
function addData() {
	$$("data").add({
		title: document.getElementById("title").value,
		year: document.getElementById("year").value
	},0)
}




@template:	api_method
@defined:	DataStore	

@related:
	desktop/add_delete.md
    
@relatedapi:
	api/datastore_remove.md
	api/datastore_clearall.md
	api/refs/datastore.md
@relatedsample:
	06_dataview/04_manipulations/01_adding.html

@descr:

Object can contain any properties:

~~~js
$$('mygrid').add({
  some:"some string",
  other:123,
  complex:{
  	contain:"any",
  	content:"inside"
  }
}, 0);
~~~

