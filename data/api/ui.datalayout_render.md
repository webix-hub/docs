render
=============

@todo: add example!

@short:
	renders the datalayout content
	

@params:



@example:

render:function(){
	var cells = this._collection = [];
	var order = this.data.order;
	var subcount = this._origin_cells.length;

	for (var i = 0; i < order.length; i++) {
		if (subcount)
			for (var j = 0; j < subcount; j++)
				cells.push(webix.copy(this._origin_cells[j]));
			else
				cells.push(this.getItem(order[i]));
	}

	if (!cells.length) cells.push({});

	this.reconstruct();

	var obj, prop, name;
	if (subcount)
	for (var i = 0; i < order.length; i++) {
		prop = this.getItem(order[i]);
			for (var j = 0; j < subcount; j++) {
				var view = this._cells[i*subcount + j];
				name = view._settings.name;
				if (name){
					if (name == "$value")
						obj = prop;
					else
						obj = prop[name];
						if (view.setValues) view.setValues(obj);
						else if (view.setValue) view.setValue(obj);
						else if (view.parse) view.parse(obj);
				}
			}
	}
}

@template:	api_method
@descr:

