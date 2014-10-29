Sizing Elements
==================

You can easily configure the sizes of the scheduler's elements.

To set the desired option, just write it as it's stated in this documentation. <br>
Beware! Configuration options should go before the code line with scheduler initialization.

~~~js
scheduler.xy.confirm_height = 300;
scheduler.xy.confirm_width = 300;
//configuration options should go before the scheduler constructor
webix.ui({
	view: "scheduler",
	id: "scheduler"
});
$$("scheduler").load("../scheduler/mobile.xml","scheduler");
~~~

Dimension configuration
------------------------

- **scheduler.xy.confirm_height** - (number) the height of the confirm window (231 by default)
- **scheduler.xy.confirm_width** - (number) the width of the confirm window (250 by default)
- **scheduler.xy.scale_width** - (number) the total width of the hour and minute columns in the 'day' view. The width is divided equally between the columns (40 by default)
- **scheduler.xy.min_event_height** - (number) the minimal event's height in the 'Day' view
- **scheduler.xy.scale_height** - (number) the height of a row in the 'Day' view (20 by default)
- **scheduler.xy.day_tab** - (number) the width of the 'Day' tab in the bottom tabbar (60 by default)
- **scheduler.xy.week_tab** - (number) the width of the 'Week' tab in the bottom tabbar (60 by default)
- **scheduler.xy.month_tab** - (number) the width of the 'Month' tab in the bottom tabbar (68 by default)
- **scheduler.xy.icon_today** - (number) the width of the 'Today' button in the bottom tabbar (55 by default)
- **scheduler.xy.icon_save** - (number) the width of the 'Save' button (90 by default)
- **scheduler.xy.icon_cancel** - (number) the width of the 'Cancel' button (80 by default)
- **scheduler.xy.icon_done** - (number) the width of the 'Done' button (90 by default)
- **scheduler.xy.icon_edit** - (number) the width of the 'Edit' button (90 by default)
- **scheduler.xy.icon_back** - (number) the width of the 'Back' button (70 by default)
- **scheduler.xy.list_header_height** - (number) the height of a grey header with date in the 'Week' view (50 by default)
- **scheduler.xy.list_height** - (number) the height of a row in the 'Week' view (50 by default)
- **scheduler.xy.month_list_height** - (number) the height of a row in the 'month' view (50 by default)
- **scheduler.xy.all_day** - the width of the "All day" label in the "Edit" form

###**"Day" view**

<img src="mobile_scheduler/size_day_view.png"/>

###**"Week" view**

<img src="mobile_scheduler/size_week_view.png"/>

###**"Month" view**

<img src="mobile_scheduler/size_month_view.png"/>

### **Start(end) date edit form**

<img src="mobile_scheduler/size_date_edit_form.png"/>

###**"Edit" form**

<img src="mobile_scheduler/size_details_form.png"/>

###**"Selected event" view**

<img src="mobile_scheduler/size_event_preview.png"/>