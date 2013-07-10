focus
=============



@short: sets focus into the necessary component
	

@params:
- item		string		ID or name of the form element 

@example:
//htmlform
<input type="button" value="Focus author" onclick="focus_form('author');" /> 
<input type="button" value="Focus genre" onclick="focus_form('genre');" />
 
            ...
function focus_form(item) {
                if (!item)
                    $$('htmlform1').focus();
                else
                    $$('htmlform1').focus(item);
            }

@template:	api_method
@descr: 
If applied with no parameter, the function sets focus on the whole component. 

@related:
	desktop/uimanager.md


