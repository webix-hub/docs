noFileCache
=============


@short:
	defines whether caching is enabled

@type: boolean
@example:
webix.ui({
	view:"filemanager",
	id: "files",
	noFileCache: true,
	handlers:{
		"branch":"../common/data_branch.php",
		 ...
    }
});

@template:	api_config
@descr:

By default, file data is cached


