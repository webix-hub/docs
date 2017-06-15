onBeforeRender
=============


@short: occurs immediately before the component has been rendered

@params:
- data	   object		the DataStore object that the chart gets data from


@example: 
some.attachEvent("onBeforeRender", function(){
    //... some code here ... 
});

@related:
	desktop/view.md
@relatedapi:
	api/ui.chart_onafterrender_event.md

@template:	api_event
@descr:
Returning *false* from the event handler will block further processing.



@seolinktop: [web control library](https://webix.com)
@seolink: [javascript graph library](https://webix.com/widget/charts/)