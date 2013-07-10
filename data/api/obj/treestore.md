
{{memo hierarchical store}}

Can't be initialized directly, need to be created on base of DataStore

~~~js
var store = new webix.DataStore();
webix.extend(store, webix.TreeStore, true);
~~~