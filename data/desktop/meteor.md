Meteor Integration
====================

The Webix library allows using Webix components with the [Meteor](https://www.meteor.com/) framework.

{{note The sources for integration of Webix with Meteor are not included into the Webix library package. 
You can take them from [the GitHub repository](https://github.com/webix-hub/webix-meteor-data)}}

How to use Webix with Meteor
-----------

###Step 1. Add the Webix package

~~~js
meteor npm i --save webix
meteor npm i --save webix-meteor-data
~~~

###Step 2. Define data collections as usual:

~~~js
Movies = new Mongo.Collection('movies');
~~~

###Step 3. Initialize Webix components 

Using *meteor->{collection}* as the data URL:

~~~js
webix.ui({
  view: 'datatable',
  editable: true, editaction: 'dblclick',
  autoconfig: true,
  // load data from the "movies" collection
  url: 'meteor->books',
  // save data to the 'movies' collection
  save: 'meteor->books'
}
~~~

Adding the *url* property will enable data loading and automatic component updates when data changes 
in the specified [Collection](http://docs.meteor.com/api/collections.html).

The *save* property ensures that all changes in the component will be saved back to the Collection.

Using Cursors
---------------

Instead of using a string for the *url* property, you can use cursors and collections directly.

###Cursor

~~~js
Movies = new Mongo.Collection('movies');
var cursor = Movies.find();

webix.ui({
  view: 'list',
  url: webix.proxy('meteor', cursor)
});
~~~

###Collection

~~~js
Movies = new Mongo.Collection('movies');

webix.ui({
  view: 'list',
  url:  webix.proxy('meteor', Movies),
  save: webix.proxy('meteor', Movies)
});
~~~


###Mixing cursors and collections

~~~js
Movies = new Mongo.Collection('movies');

webix.ui({
  view: 'list',
  url:  webix.proxy('meteor', Movies.find()),
  save: webix.proxy('meteor', Movies)
});
~~~

Dynamic Data Loading
------------------------

You can use the api/atomdataloader_load.md method to (re)load data in the component.

~~~js
$$('datatable').load('meteor->movies');
~~~

or

~~~js
$$('datatable').load( webix.proxy('meteor', Movies.find()) );
~~~

Sync API
------------

Webix components have the api/link/ui.proto_sync.md method to [synchronize data between components](desktop/data_binding.md).
The method can be used with Meteor.

~~~js
Movies = new Mongo.Collection('movies');
$$('details').sync($$('datatable'));
~~~