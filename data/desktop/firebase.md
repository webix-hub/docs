Firebase Integration
====================

The Webix library allows using Webix components with [FireBase](https://firebase.google.com/).

{{note The sources for integration of Webix with FireBase are not included into the Webix library package. 
You can take them from [the GitHub repository](https://github.com/webix-hub/webix-firebase)}}

Note on FireBase-based Apps
-----------------------------

According to the Firebase site:

When data changes, apps built with Firebase update instantly across every device - web or mobile.

Firebase-powered apps work offline. Data is synchronized instantly when your app regains connectivity.

How to Use Webix with FireBase
-------------

###Step 1. Include Webix and Firebase files on the page

~~~html
<!-- Webix -->
<script type="text/javascript" src="http://cdn.webix.com/edge/webix.js"></script>
<link rel="stylesheet" type="text/css" href="http://cdn.webix.com/edge/webix.css">
<!-- Webix-Firebase adapter -->
<script type="text/javascript" src="../codebase/webix-firebase.js"></script>
<!-- FireBase -->
<script src="https://www.gstatic.com/firebasejs/3.6.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/3.6.2/firebase-database.js"></script>
~~~

###Step 2. Create main FireBase connection

~~~js
firebase.initializeApp({
  databaseURL: "https://webix-demo.firebaseio.com/"
});

// create FireBase connection, and assign it to Webix
webix.firebase = firebase.database();
~~~


###Step 3. Initialize Webix component

Use *firebase->{reference}* as data URL

~~~js
webix.ui({
	id:"dtable",
	view:"datatable",
	editable:true, editaction:"dblclick",
	columns:[{
		id:"name", editor:"text", fillspace:1
	},{
		id:"author", editor:"text", fillspace:1
	}],

	//load data from /books
	url: "firebase->books",
	//save data to /books
	save:"firebase->books"
}
~~~

Adding the "url" property will enable data loading and automatic updates of component when data changes in the FireBase.

Adding the "save" property ensures that all changes in the datatable will be saved to the Firebase.

Using FireBase References
----------------------

Instead of using text URL, you can use FireBase references directly:

~~~js
firebase.initializeApp({
	databaseURL: "https://webix-demo.firebaseio.com/"
});
var db = firebase.database();
var proxy = webix.proxy("firebase", db.ref("books"));

webix.ui({
	view:"list",
	url: proxy,
	save: proxy
}
~~~

Dynamic Data Loading
----------------------

You can use the "load" command to (re)load data in the component.

~~~js
$$("dtable").load("firebase->books");
~~~

or

~~~js
$$("dtable").load( webix.proxy("firebase", ref);
~~~

Sync API
-----------

Webix components have native api/link/ui.proto_sync.md API to [sync data between components](desktop/data_binding.md#syncingdataoftwocomponents). 
The same API can be used with FireBase:

~~~js
firebase.initializeApp({
	databaseURL: "https://webix-demo.firebaseio.com/"
});
webix.firebase = firebase.database();
var ref = webix.firebase.ref("books");

$$("dtable").sync(ref);
~~~


Working with Forms and Templates
-----------------------------

Similar to data views, you can use the "load" and "save" API while working with Forms:

~~~js
//form
$$("form").load("books/4");
...
$$("form").save();

//template
$$("template").load("books/4")
~~~

In some cases, it makes sense not to load data directly, but to bind form (template) to some other view or data collection:

~~~js
var data = new webix.DataCollection({
	url:"firebase->books",
	save:"firebase->books"
})
form.bind(data);
data.waitData.then(function(){
	//you need to use setCursor API to load some record from collection into a form
	data.setCursor("4");
})
~~~

or, the same for the datatable:

~~~js
webix.ui({
	view:"datatable", autoConfig:true, id:"d1", select:true,
	url:"firebase->books",
	save:"firebase->books"
});
form.bind("d1"); //selected row will be shown in a form
~~~

Related Samples
---------------

- [Firebase and Webix Datatable - saving and loading by URL](http://webix-hub.github.io/webix-firebase/samples/01_datatable_url.html)
- [Firebase and Webix Datatable - saving and loading by reference](http://webix-hub.github.io/webix-firebase/samples/02_datatable_ref.html)
- [Firebase and Webix Datatable - syncing with FireBase](http://webix-hub.github.io/webix-firebase/samples/03_datatable_sync.html)
- [Different components, data syncing](http://webix-hub.github.io/webix-firebase/samples/04_other_components.html)
- [Webix Kanban with FireBase backend](http://webix-hub.github.io/webix-firebase/samples/05_kanban.html)

You can [find more samples on GitHub](https://github.com/webix-hub/webix-firebase/tree/master/samples)