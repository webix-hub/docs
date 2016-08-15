Dynamic Loading 
===================

By default, Scheduler loads all data at once.

It may cause some problems when you are using big event collections.
In such situations you may use the dynamic loading mode and load data by parts. Date range depends on the chosen mode of loading.

To enable the dynamic loading, you should call the **setLoadMode** method before data loading:

~~~js
scheduler.setLoadMode("month");

// load data
scheduler.load("some.php",)
~~~
As a parameter, the method takes the loading mode that defines the size of the data to load - **month** or **year**.
For example, if you set the 'year' mode, the scheduler will request data just for the selected year and load remaining ones on demand.

The generated requests look like:

~~~php
some.php?from=DATEHERE&to=DATEHERE
~~~

- where **DATEHERE** - a valid date value in the format defined by the configuration property **scheduler.config.dyn_load_date** ("%Y-%m-%d").

If you are using desktop/dataconnector.md at the server side, you don't need to do any additional server-side operations to parse the data:

~~~js
scheduler.setLoadMode("month");
// if you are using Scheduler Connector, 
// you need to set the second parameter in "load" method
scheduler.load("some.php","scheduler")
~~~

{{sample 62_scheduler/03_data/03_dynamic_loading.html}}