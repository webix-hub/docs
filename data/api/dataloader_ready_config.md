ready
=====


@short: Event handler called just after the component has been completely initialized.
	

@type:  function
@example:
webix.ui({
  view: "tree",
  data: function () {
    webix.message("data");  // displayed first
    return [
      { id: "1", value: "Branch", webix_kids: true }
    ]
  }(),
  ready: function() {
    webix.message("ready");  // displayed second
    this.data.url = "data/data_dyn.php";  // set the DataStore URL without triggering data loading
  },
});

@template:	api_config
@relatedsample:
	05_list/07_empty_list.html
@related: 
	desktop/event_handling.md
    tutorials/start_coding.md
	
@descr:

* The `ready` event handled will be called only once. Dynamic data loading won't trigger the handler.
* This is a good place for post-initialization code.
* `this.data` above points to a [DataStore](api/refs/datastore.md) object, not to the Tree's inline data property.
