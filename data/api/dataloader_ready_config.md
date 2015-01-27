ready
=====


@short: event handler called just after the component has been completely initialized
	

@type:  function
@example:
webix.ui({
  view: "tree",
  ready: function() {
    ...  // called after the component has been initialized
  },
});

@template:	api_config
@relatedsample:
	05_list/07_empty_list.html
@related: 
	desktop/event_handling.md
    tutorials/start_coding.md
	
@descr:

The `ready` event handler will be called only once. Dynamic data loading won't trigger the handler. This is a good place for post-initialization code.

The example below shows the succession of event handler calls (first `data`, then `ready`) and demonstrates
how to set the URL of a component without triggering data loading.

~~~js
webix.ui({
  view: "tree",
  data: function () {
    webix.message("data");  // displayed first
    return [
      { id: "1", value: "Branch", webix_kids: true }
    ]
  }(),
  ready: function() {
  	// displayed second
    webix.message("ready");  
    // set the DataStore URL without triggering data loading
    this.data.url = "data/data_dyn.php";  
  },
});
~~~

The line `this.data` points to a [TreeStore](api/refs/treestore.md) object, which was parsed from the inline `data` property passed to the Tree constructor.
