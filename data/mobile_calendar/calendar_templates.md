Calendar Templates
====================

The mobile scheduler lets you define 10 templates. They can be used to change displaying dates and titles in the scheduler.
Beware, templates' definitions should go before the code line with scheduler initialization.

Below you can find the list of all available templates and their default definitions.

Available templates:

- <a href="#calendar_event">scheduler.templates.calendar_event</a> - the template for days with events in the 'month' view;
- scheduler.templates.day_event - specifies an event in the 'day' view;
- scheduler.templates.event_class - specifies an additional css class that will be applied to the events in the lists of the 'list' and 'month' views;
- scheduler.templates.event_date - converts a date object to string with ”%d.%m.%Y” formatting;
- scheduler.templates.event_marker - specifies a marker in the 'list' and 'month' views;
- scheduler.templates.event_time - converts a date object to string with ”%H:%i” formatting;
- scheduler.templates.event_title - specifies an event in the 'list' view;
- scheduler.templates.month_event_title - specifies an event in the 'month' view;
- scheduler.templates.new_event_data - specifies the default event properties. Used when a user creates new events;
- scheduler.templates.selected_event - the template for an event in the event preview screen.

(4 images)

**Related sample**: samples/01_basic/04_templates.html

<h3 id="calendar_event">scheduler.templates.calendar_event</h3>

The template for days with events in the 'month' view.

Parameters:

- date - the date which needs to be formatted

~~~js
scheduler.templates.calendar_event = function(date){
	return date+"<div class='day_with_events'></div>";
};
~~~

<h3 id="day_event">scheduler.templates.day_event</h3>

Specifies an event in the 'day' view.

Parameters:

- obj - the event object
- type - the object that specifies items list presentation. <br> 
For details on the parameter see the article api/_type.md

~~~js
scheduler.templates.day_event = function(obj,type){
	return obj.text;
}
~~~

<h3 id="event_class">scheduler.templates.event_class</h3>

Specifies an additional css class that will be applied to events in the lists of the 'list' and 'month' views.

Parameters:

- obj - the event object
- type - the object that specifies items list presentation. 
See details on the parameter in the related article api/_type.md

~~~js
//The template doesn't have the default definition.
//Below you can find a usage example that illustrates 
//how to highlight the text of the TODAY's events
<style>
.today .dhx_event_text{
      color:red !important;
}
 
</style>
...
scheduler.templates.event_class =  function(obj, type){
	return (dhx.Date.datePart(obj.start_date).valueOf()==dhx.Date.datePart(new Date()).valueOf())?"today":""
}
~~~

<h3 id="event_date">scheduler.templates.event_date</h3>

Converts a date object to string with ”%d.%m.%Y” formatting.

Parameters:

- date - the date which needs to be formatted

~~~js
scheduler.templates.event_date = function(date){
	return dhx.Date.dateToStr("%d.%m.%Y")(date);
};
~~~


<h3 id="event_marker">scheduler.templates.event_marker</h3>

Specifies a marker in the 'list' and 'month' views.

Parameters:

- obj - the event object
- type - the object that specifies items list presentation. 
See details on the parameter in the related article api/_type.md

~~~js
scheduler.templates.event_marker = function(obj,type){
   	return "<div class='dhx_event_marker' style='"+scheduler.templates.event_color(obj)+"'></div>";
}
~~~

scheduler.templates.event_time

Converts a date object to string with ”%H:%i” formatting.

Parameters:

- obj - an event object

~~~js
scheduler.templates.event_time = function(obj){
	return dhx.Date.dateToStr("%H:%i")(obj.start_date);
};
~~~

scheduler.templates.event_title

Specifies an event in the 'list' view.

Parameters:

- obj - the event object
- type - the object that specifies items list presentation. 
See details about the parameter in the related DHTMLX Touch documentation 'API method:type()'

~~~js
scheduler.templates.event_title = function(obj,type){
	return "<div class='dhx_day_title'>"+scheduler.templates.event_date(obj.start_date)+"</div><div style='margin:10px'><div class='dhx_event_time'>"+scheduler.templates.event_time(obj)+"</div>"+scheduler.templates.event_marker(obj,type)+"<div class='dhx_event_text'>"+obj.text+"</div></div>";
};
~~~

scheduler.templates.month_event_title

Specifies an event in the 'month' view.

Parameters:

- obj - the event object
- type - the object that specifies items list presentation.
See details about the parameter in the related DHTMLX Touch documentation 'API method:type()'

~~~js
scheduler.templates.month_event_title = function(obj,type){
	return scheduler.templates.event_marker(obj,type)+"<div class='dhx_event_time'>"+scheduler.templates.event_time(obj)+"</div><div class='dhx_event_text'>"+obj.text+"</div>";	
}
~~~

scheduler.templates.new_event_data

Specifies the default event properties. Used when a user creates new events.


~~~js
scheduler.templates.new_event_data= function(){
	var hours = (dhx.Date.add(new Date(),1,"hour")).getHours();
	var start = dhx.Date.copy(this.coreData.getValue());//coreData refers to the currently selected date
	start.setHours(hours);
        var end = dhx.Date.add(start,1,"hour");
        return {start_date:start,end_date:end};
};
~~~

scheduler.templates.selected_event

The template for an event in the 'event preview' screen.

Parameters:

- obj - the event object

~~~js
scheduler.templates.selected_event = function(obj){
     var html = "", fts="", fte="";
     var start = obj.start_date;
     var end = obj.end_date;
 
     if(!start) return html;
     html += "<div  class='selected_event "+scheduler.templates.event_class(obj)+"' style='"+(obj.color?"background-color:"+obj.color+";":"")+(obj.fontColor||obj.textColor?"color:"+(obj.fontColor||obj.textColor):"")+"'>";
     html += "<div class='event_title'>"+obj.text+"</div>";
 
     if(dhx.Date.datePart(start).valueOf()==dhx.Date.datePart(end).valueOf()){
         var fd = dhx.i18n.dateFormatStr(start);
         fts = dhx.i18n.timeFormatStr(start);
         fte = dhx.i18n.timeFormatStr(end);
         html += "<div class='event_text'>"+fd+"</div>";
         html += "<div class='event_text'>"+scheduler.locale.labels.label_from+" "+fts+" "+scheduler.locale.labels.label_to+" "+fte+"</div>";
     }
     else{
         var fds = dhx.i18n.longDateFormatStr(start);
         var fde = dhx.i18n.longDateFormatStr(end);
         /*if not "all-day" event*/
         if(!(dhx.Date.datePart(start).valueOf()==start.valueOf()&&dhx.Date.datePart(end).valueOf()==end.valueOf())){
             fts = dhx.i18n.timeFormatStr(start)+" ";
             fte = dhx.i18n.timeFormatStr(end)+" ";
         }
         html += "<div class='event_text'>"+scheduler.locale.labels.label_from+" "+fts+fds+"</div>";
         html += "<div class='event_text'>"+scheduler.locale.labels.label_to+" "+fte+fde+"</div>";
     }
     if(obj.details&&obj.details!==""){
         html += "<div class='event_title'>"+scheduler.locale.labels.label_details+"</div>";
         html += "<div class='event_text'>"+obj.details+"</div>";
     }
     html += "</div>";
     return html;
};
~~~