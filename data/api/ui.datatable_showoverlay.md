showOverlay
=============


@short: shows the overlay message over the body of DataTable
	

@params:
- message		string		the text or html string which will be shown as the overlay message


@example:
view:"datatable",
on:{
        onBeforeLoad:function(){
            this.showOverlay("Loading...");  
        }
}

@template:	api_method
@defined:	ui.datatable	

@relatedapi:
	api/ui.datatable_hideoverlay.md
@relatedsample:
	15_datatable/01_loading/05_load_message.html 
	15_datatable/01_loading/06_nodata_message.html 
@related:
	desktop/data_loading.md

@descr:

Good for "Loading" and "No data" notifications. 

Can be styled with the help of the **webix_datatable_overlay** css class


@seolinktop: [javascript dashboard framework](https://webix.com)
@seolink: [datatable](https://webix.com/widget/datatable/)