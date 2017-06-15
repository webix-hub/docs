@link: api/mouseevents_onitemclick_event.md

@params:
- id		object		row/column of the clicked item
* e		Event		a native event object
* node		HTMLElement		the target HTML element

@example: 
	
grid.attachEvent("onItemClick", function(id, e, node){
    var item = this.getItem(id);
    //... some code here ... 
});

@relatedsample:
	15_datatable/14_events/02_click_css.html
    
@descr:

The **id** parameter has the following structure: 

~~~js
{ row:3, column:"title"}
~~~

It can be passed into a api/link/ui.datatable_getitem.md method anyhway. 

@seolinktop: [js frameworks](https://webix.com)
@seolink: [javascript datatables](https://webix.com/widget/datatable/)