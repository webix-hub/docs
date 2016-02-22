$onLoad
=============

@short:
	the handler that is used in SpreadSheet instead of the standard data driver

@type:function

@example:
$onLoad(obj) {
	if (obj.excel) obj = this._excel_to_data(obj);

	var rows = Math.max(this.config.rowCount, obj.data.length);
	var cols = obj.data[0] ? Math.max(this.config.columnCount, obj.data[0].length) : this.config.columnCount;

	if (rows != this.config.rowCount || cols != this.config.columnCount) {
		this.config.rowCount = rows;
		this.config.columnCount = cols;
		tbl.reset(this);
	}

	this.callEvent("onDataParse", [obj]);
	this._table.refresh();
}

@template:	api_config
@descr:


