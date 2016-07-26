onViewInit
=============


@short:
	fires during the initialization of an object with the mode configuration

@params:

- id			string			the view id
- config		object			the object with view configuration

@example:

$$("fmanager").attachEvent("onViewInit": function(id, config){
    // disable multi-selection for "table" and "files" views
    if (id == "table" || id == "files"){
        config.select = true;
    }
});


@template:	api_event
@descr:
@relatedsample:
64_file_manager/03_customization/01_views_configuration.html
