Sizing Elements
==================

In the scheduler you are allowed to configure formats (used in dates) and sizes of the elements.

To set the desired option, just write it as it's stated in this documentation. Beware! Configuration options should go before the code line with scheduler initialization.

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
- **scheduler.xy.scale_width** - (number) the total width of the hour and minute columns in the 'day' view. The width is divided equally between the columns (45 by default)
- **scheduler.xy.scale_height** - (number) the width of a row in the 'day' view (15 by default)
- **scheduler.xy.list_tab** - (number) the width of the 'List' tab in the bottom tabbar (54 by default)
- **scheduler.xy.day_tab** - (number) the width of the 'Day' tab in the bottom tabbar (54 by default)
- **scheduler.xy.month_tab** - (number) the width of the 'Month' tab in the bottom tabbar (68 by default)
- **scheduler.xy.icon_today** - (number) the width of the 'Today' button in the bottom tabbar (72 by default)
- **scheduler.xy.icon_save** - (number) the width of the 'Save' button (100 by default)
- **scheduler.xy.icon_cancel** - (number) the width of the 'Cancel' button (100 by default)
- **scheduler.xy.icon_done** - (number) the width of the 'Done' button (100 by default)
- **scheduler.xy.icon_edit** - (number) the width of the 'Edit' button (100 by default)
- **scheduler.xy.icon_back** - (number) the width of the 'Back' button (100 by default)
- **scheduler.xy.list_height** - (number) the height of a row in the 'list' view (42 by default)
- **scheduler.xy.month_list_height** - (number) the height of a row in the 'month' view (42 by default)

(6 images)