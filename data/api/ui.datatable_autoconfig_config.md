autoConfig
=============


@short: datatable adjust configuration to the data
	

@type: boolean
@example:
webix.ui({
  view:"datatable",
  autoConfig:true,
  url:"data.php"
});


@template:	api_config
@descr:

Configuration of columns will be based on data ( columns will be created for each properties of first object in collection )  
Headers of columns are based on property names in dataset  


