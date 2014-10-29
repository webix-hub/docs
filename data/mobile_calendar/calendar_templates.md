Specifying Templates
====================

You can redefine any content in the scheduler in the following way:

~~~js
scheduler.templates.day_event = function(obj,type){
	return obj.text;
}
~~~

There is a set of templates that can be used to change the display of dates and titles.<br>
Beware! The templates' definitions should go before the code line with scheduler initialization.

Below you can find the list of all available templates and their default definitions.


Available templates:

- <a href="#day_event">scheduler.templates.day_event</a>  - specifies an event in the 'Day' view;
- <a href="#day_event_style">scheduler.templates.day_event_style</a>  - specifies a css class for events in the 'Day' view;
- <a href="#multiday_event">scheduler.templates.multi_day_event</a> - the template for events in the multi-day list of the 'Day' view;
- <a href="#multiday_event_style">scheduler.templates.multi_day_event_style</a> - specifies a css class for multi-day events in the "Day" view;
- <a href="#week_title">scheduler.template.week_title</a>  - specifies the title of the 'Week' view;
- <a href="#event_class">scheduler.templates.event_class</a>  - specifies an additional css class that will be applied to the events in the lists of the 'Day','Week' and 'Month' views;
- <a href="#event_date">scheduler.templates.event_date</a>  - the content of day headers in the "Week" view;
- <a href="#event_marker">scheduler.templates.event_marker</a>  - specifies a marker in the "Week" and "Month" views;
- <a href="#event_time">scheduler.templates.event_time</a>  - the content of the time part of event items in the "Week" and "Month" views;
- <a href="#event_title">scheduler.templates.event_title</a>  - specifies the content of an event item in the "Week" view;
- <a href="#month_event_title">scheduler.templates.month_event_title</a>  - specifies the content of an event item in the "Month" view;
- <a href="#calendar_event">scheduler.templates.calendar_event</a> - the template for days with events in the "Month" view;
- <a href="#new_event_data">scheduler.templates.new_event_data</a>  - specifies the default event properties. Used when a user creates new events;
- <a href="#selected_event">scheduler.templates.selected_event</a>  - the template for an event in the "Selected Event" view.

###**"Day" view**

<img src="mobile_scheduler/template_day_view.png"/>

###**"Week" view**

<img src="mobile_scheduler/template_week_view.png"/>

###**"Month" view**

<img src="mobile_scheduler/template_month_view.png"/>

###**"Selected event" view**

<img src="mobile_scheduler/template_event_preview.png"/>


**Related sample**: samples/01_basic/04_templates.html


<h3 id="day_event">scheduler.templates.day_event</h3>

Specifies an event in the 'Day' view.

Parameters:

- obj - the event object
- type - the object that specifies items list presentation. <br> 
For details on the parameter see the API article "api/_type.md"

~~~js
scheduler.templates.day_event = function(obj,type){
	return obj.text;
}
~~~
<h3 id="multiday_event">scheduler.templates.multi_day_event</h3>

The template for events in the multi-day list of the "Day" view.

Parameters:

- obj - the event object
- type - the object that specifies items list presentation. <br> 
For details on the parameter see the API article "api/_type.md"

~~~js
scheduler.templates.multi_day_event = function(obj,type){
	return obj.text;
}
~~~

<h3 id="day_event_style">scheduler.templates.day_event_style</h3>

Specifies a css class for events in the 'Day' view.

Parameters:

- obj - the event object
- type - the object that specifies items list presentation. <br> 
For details on the parameter see the API article "api/_type.md"

~~~js
scheduler.templates.day_event_style = function(obj){
	var style = "";
	if(obj.color){
		var rgb = webix.color.toRgb(obj.color);
		style += ";border-color:"+obj.color+";";
		style += "background-color:rgba("+rgb.toString()+",0.3);";
		var hsv = webix.color.rgbToHsv(rgb[0],rgb[1],rgb[2]);
		hsv[2] /= 1.6;
		var color = "rgb("+webix.color.hsvToRgb(hsv[0],hsv[1],hsv[2])+")";
		style += "color:"+color;
	}
	return style;
};
~~~



<h3 id="multiday_event_style">scheduler.templates.multi_day_event_style</h3>

Specifies a css class for multi-day events in the "Day" view

Parameters:

- obj - the event object
- type - the object that specifies items list presentation. <br> 
For details on the parameter see the API article "api/_type.md"

~~~js
scheduler.templates.multi_day_event_style = function(obj){
	var style = "";
	if(obj.color){
		var rgb = webix.color.toRgb(obj.color);
		style += ";background-color:rgba("+rgb.toString()+",0.3);";
		var hsv = webix.color.rgbToHsv(rgb[0],rgb[1],rgb[2]);
		hsv[2] /= 1.6;
		var color = "rgb("+webix.color.hsvToRgb(hsv[0],hsv[1],hsv[2])+")";
		style += "color:"+color;
	}
	return style;
};
~~~

<h3 id="week_title">scheduler.templates.week_title</h3>

Specifies the title of the "Week" view.

Parameters:

- date - Date object (selected date).<br>
For details on the parameter see the API article "api/_type.md"

~~~js
scheduler.templates.week_title = function(date){
	var start = webix.Date.weekStart(date);
	var end = webix.Date.add(start,6,"day",true);
    var format = webix.i18n.headerWeekFormatStr;
	return format(start)+"&nbsp;-&nbsp;"+format(end);
};
~~~

<h3 id="event_class">scheduler.templates.event_class</h3>

Specifies an additional css class that will be applied to events in the lists of the 'Week' and 'Month' views.

Parameters:

- obj - the event object
- type - the object that specifies items list presentation.<br> 
For details on the parameter see the API article "api/_type.md"

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
  return (webix.Date.datePart(obj.start_date).valueOf()==
  		webix.Date.datePart(new Date()).valueOf())?"today":""
}
~~~

<h3 id="event_date">scheduler.templates.event_date</h3>

Specifies the content of day headers in the "Week" view

Parameters:

- date - the date which needs to be formatted

~~~js
scheduler.templates.event_date = function(value){
	var date = webix.Date.datePart(new Date(value));
    var today = webix.Date.datePart(new Date());
	var className = ((date.valueOf() == today.valueOf())?" today":"");
    date = webix.i18n.weekDateFormatStr(date);
	return "<span class='webix_unit_header_inner"+className+"'>"+date+"</span>";
};
~~~


<h3 id="event_marker">scheduler.templates.event_marker</h3>

Specifies a marker in the 'Week' and 'Month' views.

Parameters:

- obj - the event object
- type - the object that specifies items list presentation. 

For details on the parameter see the API article "api/_type.md"

~~~js
scheduler.templates.event_marker = function(obj,type){
	var style = "";
	if(obj.color){
		var rgb = webix.color.toRgb(obj.color);
		style += ";border-color:"+obj.color+";";
		style += "background-color:rgba("+rgb.toString()+",0.9);";
	}
	return "<div class='webix_event_marker' ><div style='"+style+"'></div></div>";
};
~~~

<h3 id="event_time">scheduler.templates.event_time</h3>

The content of the time part of event items in the "Week" and "Month" views.

Parameters:

- obj - an event object

~~~js
scheduler.templates.event_time = function(obj){
	var start = obj.start_date,
		end = obj.end_date,
		start0 = webix.Date.datePart(start,true).valueOf(),
		end0 = webix.Date.datePart(end,true).valueOf();
        
	if( start0 == start.valueOf() && end0 == end.valueOf())
		return scheduler.locale.labels.label_allday;
	else
		return webix.i18n.timeFormatStr(start);
};
~~~

<h3 id="event_title">scheduler.templates.event_title</h3>

Specifies the content of an event item in the 'Week' view.

Parameters:

- obj - the event object
- type - the object that specifies items list presentation.

For details on the parameter see the API article "api/_type.md"

~~~js
scheduler.templates.event_title = function(obj,type){
    var className, html, time;
    
	time = scheduler.templates.event_time(obj);
	html = "<div class='webix_event_time'>"+time+"</div>";
	html += type.marker(obj,type);
	html += "<div class='webix_event_text'>"+obj.text+"</div>";
    className = scheduler.templates.event_class(obj,type);
	return "<div class='webix_event_overall "+className+"'>"+html+"</div>";
};
~~~

<h3 id="month_event_title">scheduler.templates.month_event_title</h3>

Specifies the content of an event item in the "Month" view

Parameters:

- obj - the event object
- type - the object that specifies items list presentation.<br>
For details on the parameter see the API article "api/_type.md"

~~~js
scheduler.templates.month_event_title = function(obj,type){
	var className, html, time;
    
	time = scheduler.templates.event_time(obj);
	html = "<div class='webix_event_time'>"+time+"</div>";
	html += type.marker(obj,type);
	html += "<div class='webix_event_text'>"+obj.text+"</div>";
    className = scheduler.templates.event_class(obj,type);
	return "<div class='webix_event_overall "+className+"'>"+html+"</div>";
};
~~~
<h3 id="calendar_event">scheduler.templates.calendar_event</h3>

The template for days with events in the 'Month' view.

Parameters:

- date - the date which needs to be formatted

~~~js
scheduler.templates.calendar_event = function(day){
  var html = "<div class='webix_cal_day_event'>"+day.getDate()+"</div>";
  html += "<div class='webix_cal_event_marker'></div>";
  return html;
};
~~~

<h3 id="new_event_data">scheduler.templates.new_event_data</h3>

Specifies the default event properties. Used when a user creates new events.


~~~js
scheduler.templates.new_event_data= function(){
	var hours = (webix.Date.add(new Date(),1,"hour",true)).getHours();
    //coreData refers to the currently selected date
	var start = webix.Date.copy(this.coreData.getValue());
	start.setHours(hours);
    var end = webix.Date.add(start,1,"hour",true);
    return {start_date:start,end_date:end};
};
~~~

<h3 id="selected_event">scheduler.templates.selected_event</h3>

The template for an event in the "Selected Event" view.

Parameters:

- obj - the event object

~~~js
scheduler.templates.selected_event : function(obj){
	var html = "", fts="", fte="", from, to, labels;
	var start = obj.start_date,
		end = obj.end_date,
		start0 = webix.Date.datePart(start,true),
        end0 = webix.Date.datePart(end,true);
	
	if(!start) return html;
	html = "<div  class='selected_event "+scheduler.templates.event_class(obj)+"'>";
	html += "<div class='event_title'>"+obj.text+"</div>";
		
    labels = scheduler.locale.labels;
    from = labels.label_from;
    to = labels.label_to;
    
	if(start0.valueOf() == end0.valueOf()){
		var fd = webix.i18n.dateFormatStr(start);
		fts = webix.i18n.timeFormatStr(start);
		fte = webix.i18n.timeFormatStr(end);
		html += "<div class='event_text'>"+fd+"</div>";
		html += "<div class='event_text'>"+from+" "+fts+" "+to+" "+fte+"</div>";
	}
	else{
		var fds = webix.i18n.longDateFormatStr(start);
		var fde = webix.i18n.longDateFormatStr(end);
		/*if not "all-day" event*/
		if(!(start0.valueOf() == start.valueOf() && end0.valueOf() == end.valueOf())){
			fts = webix.i18n.timeFormatStr(start)+" ";
			fte = webix.i18n.timeFormatStr(end)+" ";
		}
		html += "<div class='event_text'>"+from+" "+fts+fds+"</div>";
		html += "<div class='event_text'>"+to+" "+fte+fde+"</div>";
	}
	if(obj.details&&obj.details !== ""){
		html += "<div class='event_title'>"+labels.label_details+"</div>";
		html += "<div class='event_text'>"+obj.details+"</div>";
	}
	html += "</div>";
	return html;
};
~~~