processResult
=============


@short: process data saving results
	

@params:
- data	object	response data objects

@example:

webix.ajax("save.php", data, function(text, data, loader){
     ...
     dp.processResult({
         id:"123",
         status:"update"
     });
});

@template:	api_method
@descr:

Can be used for custom data saving logic. After applying custom saving logic, it possible to call processResult to finish updating process. 

The data object can have next parameters:

- **id** - ID of item;
- **newId** - new ID ( in case of insert operation it is expected that server side will generate new ID ); 
- **status** - result of operation ("update", "insert", "delete", "error", "invalid").