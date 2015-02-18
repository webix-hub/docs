onBeforeInsert
=============

@short: fires before sending data for item insertion

@params:
- id		id		old id of related item
- details	object	object which holds state of data saving

@example: 
	
dp.attachEvent("onBeforeInsert", function(id, details){
    //... some code here ... 
});

@template:	api_event

@relatedapi: api/dataprocessor_onafterinsert_event.md


@descr:

1 . The **id** parameter contains old (clientside) item ID.

2 . The **details** parameter contains data saving details, namely: 

- **data** - data item object;
- **id** - old (clientside) ID;
- **operation** - the type of operation ("insert").
