waitData
=============

@short:  eventual result of an asynchronous operation ('promise' object) for the loaded data
	

@type: promise

@example:

var grid = webix.ui({
	view:"datatable", //any data object
    url:"data.php",
});

grid.waitData.then(function(){
    //when we have data - do some actions
});

@related:
	helpers/ajax_operations.md#promiseapiforajaxrequests
	desktop/data_loading.md#promiseapiindataloading
@template:	api_config
@descr:

The ultimate advantage of [Promise objects](http://promisesaplus.com/) is that they allow treating the result of asynchronous operations without callbacks.


