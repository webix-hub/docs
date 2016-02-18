$skin
=============


@short:
	the method which will be called when skin is defined	

@example:

webix.protoUI({
    view:"myview",
    $skin:function(){
         this._settings.height = webix.skin.$active.inputHeight;
    }
}, webix.ui.view);

@template:	api_config
@descr:

Can be used to define custom per-skin logic

Method called only once per component type ( like static constructor ) 

Beware that newly defined method will override the same method of base component. 
