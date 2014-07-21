Changing Structure of Mobile Scheduler
=========================================


The mobile scheduler has a multiview-based architecture. 
For details see the related article of documentation - desktop/building_app_architecture.md.

{{note
Please remember that you can customize just toolbars of the scheduler.
}}

So in this article we will concentrate on toolbars. Below you can find all the available toolbars and their default definitions.

For detailed information on toolbar see the appropriate article of Webix documentation - desktop/toolbar.md.

Multiview
-------------

The main **multiview** of the scheduler contains 3 views:

- **Event preview screen**;
- **Details form**;
- **Start(end) date edit form**;
- Sub-multiview (supplemented by the bottom toolbar):
	- **List** (doesn't contain any toolbars);
	- **Day**;
	- **Month**.
    
    
###Day view

(image)


In the “Day” view, the toolbar contains navigation buttons and the label displaying the selected date.

~~~js
scheduler.config.day_toolbar = [
	{view:'label', id:"prev", align:"left",   
      label:"<div class='dhx_cal_prev_button'><div></div></div>"},
	{view:'label', id:"date", align:"center", width:200},
	{view:'label', id:"next", align:"right",  
      label:"<div class='dhx_cal_next_button'><div></div></div>"}
];
~~~

###Month view

(image??)

In the “Month” view the toolbar is a part of calendar integrated to the view (not an individual component). 
So if you want to customize this toolbar, please, refer to the related desktop/calendar.md documentation.

###Event preview screen

(image)

Here, the toolbar contains 2 buttons: “Back” and “Edit” (the buttons are hidden in the [read-only mode](mobile_calendar/modes.md)).

~~~js
scheduler.config.selected_toolbar = [
	{view:'button', inputWidth:scheduler.xy.icon_back, id:"back", align:"left",  
     label:scheduler.locale.labels.icon_back, css:"cancel"},
	{view:'button', inputWidth:scheduler.xy.icon_edit, id:"edit", align:"right", 
     label:scheduler.locale.labels.icon_edit}
];
~~~

###Start(end) date edit form


The toolbar contains 2 buttons: “Cancel” and “Done” and the label displaying which date is edited: **start** or **end** 
(the view is hidden in the [read-only mode](mobile_calendar/modes.md)).

~~~js
scheduler.config.date_toolbar = [
	{view:'button', id:"cancel_date", align:"left",  width:90, label:"Cancel", 
      css:"cancel"},
    {view:'label',  id:"datetype",    align:"center"},
    {view:'button', id:"done",        align:"right", width:90, label:"Done"}
];
~~~

###Details form

(image)

The toolbar of the details form has 2 buttons: “Cancel” and “Save”.

~~~js
scheduler.config.form_toolbar = [
	{view:'button', inputWidth:scheduler.xy.icon_cancel, id:"cancel", align:"left",  
      label:scheduler.locale.labels.icon_cancel, css:"cancel"},
	{view:'button', inputWidth:scheduler.xy.icon_save,   id:"save",   align:"right", 
      label:scheduler.locale.labels.icon_save}
];
~~~

Main bottom toolbar
----------------------

(image)

The main scheduler toolbar contains 3 controls:

- “Today” button
- tabbar with the “List”, “Day” and “Month” tabs
- “Add” button

~~~js
scheduler.config.bottom_toolbar = [
	{view:"button",id:"today",label:scheduler.locale.labels.icon_today,align:"left",
      inputWidth:scheduler.xy.icon_today, width:scheduler.xy.icon_today+6},
 	{view:"segmented", id:"buttons", selected:"list", align:"center", 
      multiview:true, options:[
		{value:"list",  label:scheduler.locale.labels.list_tab,  
          width:scheduler.xy.list_tab},
		{value:"day",   label:scheduler.locale.labels.day_tab,   
          width:scheduler.xy.day_tab},
    	{value:"month", label:scheduler.locale.labels.month_tab, 
          width:scheduler.xy.month_tab}
     ]},
	{view:"button",css:"add",id:"add", align:"right",label:"&nbsp;+&nbsp;",width:50,
       inputWidth:42,},
	{view:"label", label:"",inputWidth:42,width:50, batch:"readonly"}
];
~~~

Adding new elements to the toolbar and event handling
------------------------------------------------------

If you want to add some custom button to one of the mentioned toolbars, you need to redefine the structure of that toolbar. 
Clicks on the default buttons are handled automatically. But for new buttons you should define the “click” event handlers.

Let's assume you want to add a new button to **Event Preview screen** - 'Location'.

(image)

The definition of your new toolbar can be the following:

~~~js
scheduler.config.selected_toolbar = [
	{view:'button',inputWidth:90,css:"cancel",id:"back",align:"left",label:"Back"},
	{view:'button',inputWidth:90,width:100,id:"location",align:"right",
      label:"Location",click:"showLocation"}, //the new button
	{view:'button',inputWidth:70,width:70, id:"edit", align:"right", label:"Edit"}
];
~~~

To show the event location on a button click, you need to define some handler function, for example, as follows:

~~~js
function showLocation(){
	var eventId = $$("scheduler").getCursor();
	var location = $$("scheduler").item(eventId).location;
	webix.alert(location);
}
~~~

In the function you could be confused by the method api/collectionbind_getcursor.md. 
This method is a part of 'binding' functionality that's used by the scheduler. 
You can read about the mentioned functionality in the related Webix documentation - 'Binding'.

**Related sample**: samples/01_basic/06_custom_form.html

Accessing elements of the scheduler
------------------------------------

The scheduler includes different components: lists, toolbars, a form, etc. To access any of them you can use the **$$(schedulerId).$$(componentId)** construction.

The ids of the toolbars' buttons can be found above, in the toolbars' descriptions. And here are the ids of components from the multiview of the scheduler:

- 'event' - the 'Event preview screen' view
	- 'eventBar' - the top toolbar
	- 'eventTemplate' - the template with the data of an event
- 'form' - the 'Details form' view
	- 'editBar' - the toolbar
	- 'editForm' - the form with the details of an event
- 'tabViews' - the sub-multiview containing **List**, **Day** and **Month** views
	- 'bottomBar' - the bottom toolbar
	- 'list' - the 'List' view
	- 'day' - the 'Day' view
		- 'dayBar' - the top toolbar
		- 'dayList' - the list with events
	- 'month' - the 'Month' view
		- 'calendar' - the calendar
		- 'calendarDayEvents' - the list with events of the selected day


For example, if you want to show the 'Month' view initially, you need to call the [show()](api/link/ui.calendar_show.md) method for the 'month' view and select 
the 'month' button of the tabbar control on the bottom toolbar:

~~~js
$$('scheduler').$$('month').show();
$$('scheduler').$$('buttons').setValue('month');
~~~

- where 'month' and 'buttons' are the ids of the appropriate components of the scheduler.

For the details on the mentioned components you can read the article desktop/components.md.

A custom view
-----------------

It's possible to add a custom view to the main multiview of the scheduler. All you need to do is to add view configuration to the **scheduler.config.views** array. 
Beware, view configuration should go before the code line with scheduler initialization.

For example, if you'd like to add a view that will contain a google map, it can be done as follows:

~~~js
scheduler.config.views.push({
	view:"googlemap",
	id:"mymap"	
});
~~~

Related sample: samples/01_basic/11_custom_view.html

@complexity:3