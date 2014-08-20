each
=============


@short:
	iterates through the collection of data items

@params:
- method		function		a method that needs calling for each data item
* master		object		an object that the method is applied to ("this" by default)
* all		boolean		if true, hidden (as well as hidden by filtering) items are iterated

@example:
template:function(data){
		var names = [];
		if (data.each)
			data.each(function(obj){  names.push(obj.name);});
		return names.join(", ");
}
@related: 
	desktop/data_object.md
@relatedsample:
	21_upload/02_init_template.html
@template:	api_method
@defined:	DataStore	
@descr:



