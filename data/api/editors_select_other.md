select
=============


@short: allows for picking up one of the predefined values
	

@type:string

@example:
{ header:"Category", editor:"select", options:["","Thriller", "Crime"],  width:80},

@template:	api_config
@descr:

For better code understanding, select options can be defined in a variable outside the component constructor

~~~js
var sel_options = {
    "1" : "Thriller",
    "2" : "Crime",
    "3" : "Western"
};


{... editor:"select", options:sel_options}
~~~

However, in this case, the necessary data is stored in a dataset in the form of keys ("1", "2", "3") rather than values "Thriller". 

@relatedsample:
	15_datatable/04_editing/04_select.html
@related:
	desktop/editing.md

