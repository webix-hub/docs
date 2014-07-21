sync
=============



@short:
	allows you to sync two copy of data (all or just a part of it) from one DataCollection to another

@params:
- source		object		the object that the method is assigned to
- filter		function		the filtering function
- silent		bool		if you set the parameter to <i>true</i>, the object won't be repainted after synchronization

@example:

//full copy
$$('list').data.sync(data);
			
//partial copy			
$$('dview').data.sync(data, function(){
	this.filter(function(data){
	return data.year > 1994;
	});
}); 

@relatedapi:
	api/datastore_filter.md
	api/datastore_silent.md
    api/datastore_unsync.md
    
@related:
	desktop/data_binding.md
    desktop/nonui_objects.md
@relatedsample:
	80_docs/nonui.html
    80_docs/getpopup.html


@template:	api_method
@defined:	DataStore	
@descr:


