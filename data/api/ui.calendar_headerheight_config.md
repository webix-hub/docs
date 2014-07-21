headerHeight
=============

@short: total height of the area not taken by calendar body

@type: number
@example:
{ view:"calendar", headerHeight:100 }

@relatedapi:
	- api/ui.calendar_headerheight_config.md
@related:
	- desktop/calendar.md
@template:	api_config
@descr:

By default the free area is **70px** regardless of calendar dimensions. The rest of the space is taken by month title, [week header](api/ui.calendar_weekheader_config.md) and [timepicker](api/ui.calendar_timepicker_config.md) (if any). 

If you increase parameter value, calendar body (the area with dates) shrinks and free space appears at the **bottom** of calendar area. Then, you are free to change the height of any calendar element with the help of CSS classes:

- *webix_cal_month* - month title area;
- webix_cal_header - week header area; 

..or special properties: 

- [timepickerHeight](api/ui.calendar_headerheight_config.md) - height of timepicker area


