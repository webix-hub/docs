toggle
=============



@short:
	swiches between states of the control ('checked' to 'unchecked' and vice-versa)

@example:
webix.ui({
    container:"box",
    cols:[
        { view:"form", elements:[
            { view:"checkbox", id:"ch1", label:"Block pop-up windows"},
            { view:"checkbox", id:"ch2", label:"Load images automatically"},
            { view:"checkbox", id:"ch3", label:"Enable JavaScript"} 
        ]}
    ]
});
 
$$('ch1').toggle(); //checks the checkbox
$$('ch1').toggle(); //unchecks the checkbox


@template:	api_method
@defined:	ui.checkbox	
@descr:


