markInvalid
=============

@short: marks a form control invalid
	

@params:

- name		string		value of "name" parameter of the desired input	
* state		boolean, string		removes invalid mark; sets invalidMessage 


@example:

$$("myform").markInvalid("login", "Login must not be empty");

@template:	api_method
@relatedapi:
	api/ui.text_invalidmessage_config.md
@descr:

"State" parameter is optional. It may define: 

- (boolean) - whether to apply invalid marking or remove it (if false). True by default;
- (string)  - text of [invalidMassage](api/ui.text_invalidmessage_config.md) parameter 
of the input. If such parameter already exists, this method will redefine it.

