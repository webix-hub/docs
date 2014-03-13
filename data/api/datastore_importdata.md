importData
=============



@short: import data from different datastore
	

@params:
- source      view      view from which data need to be taken

@example:

$$("listB").data.importData($$("listA"));


@template:	api_method
@descr:

Similar to "sync" command, but makes one time import only. 
Changes in the listA data after command call will not be reflected in the listB

