Quick start with DataTable
==============================

This tutorial walks you through creating a basic application containing DataTable.
As you follow the steps, you learn how to initialize DataTable, customize and configure its appearance, load data to it.
The final code of the tutorial can be used as the start point while creating applications using DataTable.

{{sample 15_datatable/98_docs/11_minimal_init.html }}

 
A new HTML file and related code files
---------------------------------------------------
To start, create a new HTML file and include the DataTable code files in it.

Required code files are:

- *webix.css*
- *webix.js*

{{snippet
A basic html page with the included DataTable code files
}}

~~~html
<html>
<head>
	<title>Quick start with DataTable</title>	
    <script src="../codebase/webix.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" href="../codebase/webix.css" type="text/css" charset="utf-8">
</head>
<body>
	<script>
        //here you will place your JavaScript code
	</script>
</body>
</html>
~~~


###Including Webix files via Package Managers

OR, as an **alternative** to downloading, you can install Webix library via such package managers as **NuGet** and **Bower**.

Installing Webix requires by means of these tools requires executing just a line of code inside them (you don't need to download anything):

{{snippet
NuGet
}}
~~~js
nuget install Webix

//If you use Microsoft Visual Studio, execute this from Package Manager Console
install-package Webix
~~~

{{snippet
Bower
}}
~~~js
bower install webix
~~~

Placing DataTable on a page
------------------------------------

On the next step, you should create a *div* container where you then place your DataTable. 

~~~html
<div id="box" style="width:400px;height:200px;"></div>
~~~

Object constructor
---------------------------------
After the place for DataTable has been prepared, move to its initialization.

To create a new DataTable instance you need to use the next constructor:

~~~js
dtable = new webix.ui({ view:"datatable" })
~~~

Let's specify 2 mandatory parameters inside the constructor:

1. [container](api/link/ui.datatable_container_config.md) - the HTML container for DataTable. We created it on the previous step. 
2. [columns](api/ui.datatable_columns_config.md) - the array of objects, each of which specifies an individual column. Each object must at least has the **id** attribute set.

It addition to **id**, we will specify 2 often used column attributes: **header** (the header of a column) and **width** (the width of a column).

{{snippet
Basic DataTable configuration
}}
~~~js
dtable = new webix.ui({
		container:"box",
		view:"datatable",
		columns:[
			{ id:"title",	header:"Film title",   width:200},
			{ id:"year",	header:"Release year", width:80},
			{ id:"votes",	header:"Votes",        width:100}
		]
});
~~~


General settings
-----------------------------------
On the previous step, we have defined primary settings for DataTable. 
For more available configuration, read other articles in this documentation, such as:

- [General columns configuration](datatable/columns_configuration.md) - brief announcement of available column settings; 
- [Selection](datatable/selection.md) - describes different types of selection (cell, column, row etc.) and their use;
- [Sorting](datatable/sorting.md) and [Filtration](datatable/filtering.md) - says about means for sorting and filtering.


Loading data
------------
There are various ways to load data into DataTable (read about them in chapter [Data loading](datatable/loading_data.md)).<br> We will use the easiest of the ways and specify data directly in the constuctor with the help of the
[data](api/link/ui.datatable_data_config.md) parameter:

~~~js
dtable = new webix.ui({
		container:"box",
		view:"datatable",
		columns:[
			{ id:"title",	header:"Film title",    width:200},
			{ id:"year",	header:"Release year" , width:80},
			{ id:"votes",	header:"Votes", 	    width:100}
		],
		data:[
			{ id:1, title:"The Shawshank Redemption", year:1994, votes:678790},
			{ id:2, title:"The Godfather", 			  year:1972, votes:511495}
		]
});
~~~

Congratulations! Now you can run your app and it'll produce DataTable shown at the very beginning.

{{sample 15_datatable/98_docs/11_minimal_init.html }}


What's next
----------------------

What can we suggest you to do next?

- Check the code sample of the mentioned above example (use the link above);
- Read about [possible data formats](datatable/loading_data.md) and how you can [get data from database](desktop/serverside.md);
- Find out about [available columns configuration](datatable/columns_configuration.md);
- Check other [supplied samples]($${sample_http}index.html). 


