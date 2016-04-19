showBatch
=============


@short:
	makes visible those elements which parameter 'batch' is set to the specified name

@params:
- name		string		the batch name

@related:
	desktop/visibility.md
@relatedsample:
	02_toolbar/14_batches.html
@relatedapi:
	api/link/ui.accordion_visiblebatch_config.md
@example:
webix.ui({ view:"toolbar", id:"mybar", visibleBatch:"b2", cols:[ 
	{view:"button",  value:"Save",   batch:"b1"}, 
	{view:"button",  value:"Cancel", batch:"b1"}, 
	{view:"button",  value:"Edit",   batch:"b2"},
	{view:"button",  value:"Back",   batch:"b2"}]
});
...
$$("mybar").showBatch("b1");          
            

@template:	api_method
@defined:	ui.baselayout	
@descr:


