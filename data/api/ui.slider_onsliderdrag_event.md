onSliderDrag
=============


@short: fires when the handle of slider was dragged ( but not released yet )
	

@example: 
$$("my_slider").attachEvent("onSliderDrag", function(){
    webix.message("Dragged to "+this.getValue());
}
	
@relatedsample:
	13_form/05_extras/05_slider_title.html
@related: 
	desktop/form.md
    desktop/controls.md#slider

@template:	api_event
@descr:

