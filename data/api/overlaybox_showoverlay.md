showOverlay
=============


@short:
	shows overlay box over the component
    
@example:
webix.ui({
	view:"datatable",
  	on:{
		onXLS:function(){
			this.showOverlay("Loading...");
		}
    }
});

@template:	api_method
@related:
	desktop/data_loading.md#interactionwithusersduringloadingoverlayboxes
    datatable/loading_data.md#loadingscreen
@relatedsample: 
	15_datatable/01_loading/05_load_message.html
    15_datatable/01_loading/06_nodata_message.html
@relatedapi:
	api/overlaybox_showoverlay.md
@defined:	OverlayBox	
@descr:


