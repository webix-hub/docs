getText
=============


@short: gets actual text value from the control's input
	

@params:

@returns:
- text	string	text displayed in the input field


@example:

$$("mydatepicker").getText();
$$("mycolorpicker").getText();

@template:	api_method

@relatedapi:
	api/link/ui.datepicker_getvalue.md
	
@descr:

To get the control's value you should use the api/link/ui.datepicker_getvalue.md method. 

In case you don't have a api/ui.datepicker_stringresult_config.md property in the control's configuration, the api/link/ui.datepicker_getvalue.md method will return raw unformatted value. 

