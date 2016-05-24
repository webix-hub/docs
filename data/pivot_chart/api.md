API
=========

### Getting and Setting Configuration Object

~~~js
//get current configuration
var config = $$("pivot").getStructure();

//set configuration
$$("pivot").setStructure(config);
~~~

Format of a **config** object is the same as "structure" parameter of the constructor:

~~~js
var config = {
	groupBy: "year",
	values: [{name:"balance", operation:"sum", color: "#eed236"}],
	filters:[{name:"name", type:"select"}]
}
~~~



### Data export

You can export result to PDF or Excel:

~~~js
$$("pivot").toPDF();
$$("pivot").toExcel();
~~~

###Getting Chart Object

You can access the Chart object by using the next code:

~~~js
var chart = $$("pivot").$$("chart");
~~~

This allows you use any of Chart [events](api/refs/ui.chart_events.md) or [API methods](api/refs/ui.chart_methods.md).
