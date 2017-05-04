icons
=============

@short:
	sets visibility of 'Today/Clear' icons in the DateRange 

@type: 
boolean|object

@default:false

@example:

webix.ui({
	view:"daterange",
	icons:[
		//default "today" icon
		{
			template:function(){
			 return "<span class='webix_cal_icon_today webix_cal_icon'>"
            	+webix.i18n.calendar.today
                +"</span>"
			},
			on_click:{
				"webix_cal_icon_today":function(){
					this.addToRange(new Date());
					this.callEvent("onTodaySet",[this.getValue()]);
				}
			}
		},
		//default "clear" icon
		{
			template:function(){
			return "<span class='webix_cal_icon_clear webix_cal_icon'>"
            	+webix.i18n.calendar.clear
            	+"</span>"
			},
			on_click:{
				"webix_cal_icon_clear":function(){
					this.setValue("");
					this.callEvent("onDateClear", []);
				}
			}
		}
	]	
});	

@relatedapi: api/ui.daterange_button_config.md
@relatedsample:60_pro/14_daterange/02_daterange_icons.html
@template:	api_config
@descr:

###Disabling icons

To hide "Today" and "Clear" icons in the daterange, set the parameter to false:

~~~js
webix.ui({
    view:"daterange",
    icon:false,
    ...
});
~~~

###Object properties

As an object the parameter redefines icons:

~~~js
webix.ui({
  view:"daterange",
  icons:[
   {
	template:function(){
		return "<span class='webix_cal_icon_week webix_cal_icon'>Current week</span>"
	},
	on_click:{
		"webix_cal_icon_week":function(){
			this.setValue({
				start:new Date(),
				end:webix.Date.add(new Date(), 1, "week")
			});
		  }
	   }
    }
  ]
});
~~~
