Styling Mobile Scheduler
======================

To customize some element of the scheduler you should redefine the needed attributes of the related css class in the &#60;style&#62; block of your page.
The untouched attributes will take default values.


~~~html
<!DOCTYPE HTML>
<html>
 	<head>
		<link 
    	 	rel="stylesheet" 
    	  	href="../../codebase/dhxscheduler_mobile.css" 
          	type="text/css" 
          	media="screen" 
          	charset="utf-8"
    	>
		<script 
        	src="../../codebase/dhxscheduler_mobile.js" 
            type="text/javascript" 
            charset="utf-8">
        </script>
        <style>
          .dhx_schedulerbar{
	      background:#6699FF !important;
          }
       </style>
  	</head>
  	<body>
 
   ....
</html>
~~~

In the above example we redefined only the background color. All the other attributes defined in the **'.dhx_schedulerbar'** class took the default values.

**Related sample**: samples/01_basic/09_custom_style.html

CSS classes and the related elements
-----------------------------------

###Bottom Toolbar

- **.dhx_schedulerbar**	- the toolbar
- **.dhx_el_button input**	- the 'Today' button
- **.dhx_el_button.add input** - the '+' (add) button
- **.dhx_schedulerbar .dhx_el_segmented** - the tabbar
- **.dhx_schedulerbar .dhx_el_segmented .segment_0** - the first tab
- **.dhx_schedulerbar .dhx_el_segmented .selected.segment_0** - the first tab in the selected state
- **.dhx_schedulerbar .dhx_el_segmented .segment_1** - the second tab
- **.dhx_schedulerbar .dhx_el_segmented .selected.segment_1** - the second tab in the selected state
- **.dhx_schedulerbar .dhx_el_segmented .segment_N** - the last tab
- **.dhx_schedulerbar .dhx_el_segmented .selected.segment_N** - the last tab in the selected state

(image)

###'List' view

- **.dhx_list_events_item** -	the items
- **.dhx_list_events_item .dhx_day_title** - the colored label with the date of an event
- **.dhx_list_events_item .dhx_event_time** - the container with the time of an event
- **.dhx_list_events_item .dhx_event_marker** - the round marker displaying before the text of an event
- **.dhx_list_events_item .dhx_event_text** - the container with the text of an event

(image)


###'Day' view

- **.dhx_dayevents_event_item**	- the container with an event
- **.dhx_topbar** -	the top toolbar
- **.dhx_dayevents_scale_item** - a single row ( including hours' and minutes' cells)
- **.dhx_dayevents_scale_top** - the top part of an item of the scale
- **.dhx_dayevents_scale_bottom** - the bottom part of an item of the scale
- **.dhx_dayevents_scale_hour** - the container for hours
- **.dhx_dayevents_scale_minute** - the container for minutes
- **.dhx_cal_prev_button div** - the 'previous' icon on the top toolbar
- **.dhx_cal_next_button div** - the 'next' icon on the top toolbar
- **.dhx_el_label** - the container with the date on the toolbar
- **.dhx_dayevents_scale_event** - a single row ( without hours and minutes cells)

(image)

###'Month' view
- **.dhx_cal_day_num** - the cell with a day
- **.dhx_cal_month** - the top toolbar
- **.dhx_cal_day_num.dhx_cal_selected_day**	- the container with the selected day
- **.dhx_cal_day_num.dhx_cal_current_day**	- the container with the current date
- **.dhx_cal_day_num.dhx_cal_current_day.dhx_cal_selected_day** - the container with the current date in the selected state
- **.dhx_cal_day_num .day_with_events**	 - the days that have assigned events
- **.dhx_cal_day_num.dhx_cal_selected_day .day_with_events** -	the days that have assigned events in the selected state
- **.dhx_cal_prev_button div** - the 'previous' icon on the top toolbar
- **.dhx_cal_next_button div**	- the 'next' icon on the top toolbar
- **.dhx_list_day_events_item** - the items of the list
- **.dhx_list_day_events_item .dhx_event_time**	- the time of an event
- **.dhx_list_day_events_item .dhx_event_marker** - the round marker of an item
- **.dhx_list_day_events_item .dhx_event_text** - the text of an event

(image)

###Events preview screen

- **.selected_event**	- the container with an event
- **.selected_event .event_title**	- the title of an event
- **.selected_event .event_text** - the description of an event
- **.dhx_topbar**	- the top toolbar
- **.dhx_el_button input**	- the 'Edit' button
- **.dhx_el_button.cancel input**	- the 'Back' button
- **.dhx_el_formbutton.delete input**	- the 'Delete' button

(image)

###Details form

- **.dhx_topbar**	- the top toolbar
- **.dhx_el_button input**	- the 'Save' button
- **.dhx_el_button.cancel input**	- the 'Cancel' button
- **.dhx_el_box**	- the style of the element container
- **.dhx_el_box label**	- the style of labels of fields (ex. “Event”,”Start”,”End”)
- **.dhx_el_box .dhx_inp_text**	 - the style of the text in inputs
- **.invalid.dhx_el_box**	- the style of a div with invalid data (highlighted border by default)
- **.invalid .dhx_inp_text** - the style of an input with invalid data (highlighted text by default)
- **.dhx_inp_toggle_left_on**	 - the style of the left('Time') part of the toggle in the active state
- **.dhx_inp_toggle_left_off**	 - the style of the left('Time) part of the toggle in the inactive state
- **.dhx_inp_toggle_right_on**	 - the style of the right('All day') part of the toggle in the active state
- **.dhx_inp_toggle_right_off**	 - the style of the right('All day') part of the toggle in the inactive state
- **.dhx_el_textarea textarea**	 - the textarea style (the “Notes” field)

(image)

###Start(end) date edit form

- **.dhx_topbar**	- the top toolbar
- **.dhx_el_label**	- the container with the date on the toolbar
- **.dhx_el_button input**	- the 'Done' button
- **.dhx_el_button.cancel input**	- the 'Cancel' button
- **.dhx_cal_day_num**	- the cell with a day
- **.dhx_cal_month**	- the toolbar with the current month
- **.dhx_cal_day_num.dhx_cal_selected_day**	- the container with the selected day
- **.dhx_cal_day_num.dhx_cal_current_day**	- the container with the current date
- **.dhx_cal_day_num.dhx_cal_current_day.dhx_cal_selected_day**	- the container with the current date in the selected state
- **.dhx_cal_prev_button div**	- the 'previous' icon on the top toolbar
- **.dhx_cal_next_button div**	- the 'next' icon on the top toolbar
- **.dhx_cal_time_select**	- the toolbar with the time controls
- **.dhx_cal_time_select .dhx_hour_select**	- the control for setting hours
- **.dhx_cal_time_select .dhx_minute_select** - the control for setting minutes

(image)

###Confirm window
- **.dhx_el_bigroundbutton input**	- the cancel button
- **.dhx_el_bigbutton input**	- the confirm button

(image)