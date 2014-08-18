count
=============



@short:
	returns the count of items in the table



@returns:
- count	number	the count of items 

@example:
dtable= webix.ui({
        view:"datatable",
        ...
})

var items=dtable.count(); 
@related:
	desktop/data_object.md
@relatedsample:
	05_list/07_empty_list.html
@template:	api_method
@defined:	DataStore	
@descr:

The method can be used set the component behavior in case no data is loaded into it:

~~~js
webix.ui({
  view:"list", 
  ready:function(){
	if (!this.count()){ //if there are no data items
	  webix.extend(this, webix.OverlayBox);
	  this.showOverlay("<div style='margin:75px; font-size:20px;'>There's no data</div>");
	}
  }
});
~~~


