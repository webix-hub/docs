Localizing Scheduler
=============

Basic principles
--------------------

The mobile version as well as the desktop one allows you to adapt the scheduler to a particular language and a region.

<u><b>To localize the scheduler to some language you should know the following</b></u>: <br>
All locale's parameters for the mobile version are contained in the **scheduler.locale.labels** object
and to redefine the parameters you should 'rewrite' this object.

For 'rewriting' you should use the technique below:

~~~js
scheduler.locale.labels = labels;
~~~

where **labels** is any object variable that contains the redefined parameters.

~~~js
var labels = { 
	icon_today : "...",
	... 
}
~~~

{{note
In order to localize dates (week days and months) you should follow the instruction given in the article desktop/localization.md.
}}



Localization params for scheduler
-------------------------------------------

The table below presents all localization parameters available for the mobile version of the scheduler.

~~~js
scheduler.locale.labels = {
	list_tab: "List",
	day_tab: "Day",
	month_tab: "Month",
	icon_today: "Today",
	icon_save: "Save",
	icon_done: "Done",
	icon_delete: "Delete event",
	icon_cancel: "Cancel",
	icon_edit: "Edit",
	icon_back: "Back",
	icon_close: "Close form",
	icon_yes: "Yes",
	icon_no: "No",
	confirm_closing: "Your changes will be lost, are your sure ?",
	confirm_deleting: "The event will be deleted permanently, are you sure?",
	label_event: "Event", 
	label_start: "Start",
	label_end: "End",
	label_details: "Notes",
	label_from: "from",
	label_to: "to",
	label_allday: "All day",
	label_time: "Time"
};
~~~


{{sample
04_customization/04_locale.html
}}

Recurring events
-----------------

Recurring events use the same technique, but take another locale object - **scheduler.locale.labels.recurring**.

Localization parameters for recurring events:

~~~js
scheduler.locale.labels.recurring = {
	none: "Never",
	daily: "Daily",
	day: "day(s)",
	every: "Every",
	weekly: "Weekly",
	week: "week(s) on",
	each: "Each",
	on_day: "on the",
	monthly: "Monthly",
	month: "month(s)",
	month_day: "on what day of the month",
	week_day: "on what day of the week",
	yearly: "Yearly",
	year: "year(s) in",
	counters: ["the first","the second","the third", "the fourth", "the fifth"],
	never: "Never",
	repeat: "Repeat",
	end_repeat: "End repeat",
	endless_repeat: "Endless repeat",
	end_repeat_label: "Repeat will end by"
};
~~~
