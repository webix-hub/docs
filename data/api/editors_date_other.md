date
=============


@short: edits dates with the help of a popup calendar. 
	

@type:string 

@example:
//for a datatble column
{id:"startdate", editor:"date",	header:"Start date", width:120}

@template:	api_config
@descr:

The calendar is shown automatically as soon as you trigger item editing. This is a default calendar. To change its properties you should configure your popup. 

~~~js
webix.editors.$popup = {
  date:{
     view:"popup",
     body:{ 
     	view:"calendar", 
        timepicker:true, 
        weekNumber:true, 
        width: 220, 
        height:200
     }
  }
};
~~~

**Timepicker** allows selecting time in addition to dates.

For more info on Calendar check the [dedicated article](desktop/calendar.md). 

@relatedsample:
	80_docs/editors.html
@related:
	desktop/editing.md