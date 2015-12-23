escape
=============



@short: escapes data

@params:
- value		string	initial value


@returns:
- value		string	escaped value
	

@example:

var text = dp.escape("some <?> data");


@template:	api_method
@defined:	DataProcessor	

@relatedapi:
	api/dataprocessor_escape_config.md
@descr:

By default the function uses UTF-8 escaping. If a [custom escaping function](api/dataprocessor_escape_config.md) is defined for the dataprocessor, it will be called instead. 


