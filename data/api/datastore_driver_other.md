driver
=============


@short: defines data driver - methods and properties for data parsing
	

@type:object

@example:
$$('mylist').data.driver = webix.DataDriver.xml;
$$('mylist').load("data.xml");
// it is the same as
$$('mylist').load("data.xml","xml");



@relatedapi:api/refs/datadriver.md
@template:	api_config
@related: 
	desktop/data_loading.md
    desktop/data_types.md
@descr:
The property can take one of a predefined set of values.<br> The predefined values are:

1. *xml* (default)
2. *json*
3. *csv*
4. *jsarray*
5. *html*
6. *htmltable*

Or the name of a custom-defined data type:

~~~js
webix.DataDriver.customType={ //customType - the name of the new data type
   ...
}
~~~
~~~js
$$('mylist1').data.driver = webix.DataDriver.customType;
~~~