sort
=============


@short: sets sorting rule(s) according which items will be sorted within units
	

@type: function
@example:
webix.ui({
	  view:"unitlist", 
      sort:{
          by:"#name#"
      }
});

@template:	api_config
@descr:
The parameter is an object that can contain the following attributes:

- **by** - (*template, function, hash of parameters*) the template for sorted value
- **dir** - (*asc* or *desc*) the sorting direction (optional)
- **as** - (*function* or one of the next values:*'int'*,*'string'*,*'string_strict'*) the type of data sorting (optional)

