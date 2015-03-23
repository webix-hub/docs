loadNext
=============

@short:	sends a request to load the specified number of records to the end of the clientside dataset or to the specified position

@params:
- count		number		the number of records fetch 
- start		number		the start position to load data from
- callback	function	the callback function
- url		string		the data url
- now		boolean		specifies whether the incoming data request should be satisfied immediately. If it's set to <i>true</i> the <b>datathrottle</b> property will be ignored.


@related:
	desktop/dynamic_loading.md
@relatedsample:
	15_datatable/16_dyn_loading/06_load_next_replace.html
    15_datatable/16_dyn_loading/02_db_dyn_start.html
@relatedapi:
	api/dataloader_datathrottle_config.md
@example:
//without callback
grida.loadNext(10,0,null,"data/data.php");

//with callback
gridb.loadNext(50,900,function(){
	this.showItem(903);
}, "data/data_dyn.php");

@template:	api_method
@defined:	DataLoader	
@descr:

