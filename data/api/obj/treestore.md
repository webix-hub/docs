
{{memo Hierarchical store.}}

Can't be initialized directly; must be extended from [DataStore](api/datastore.md).

~~~js
var store = new webix.DataStore();
webix.extend(store, webix.TreeStore, true);
~~~