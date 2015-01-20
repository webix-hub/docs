icons
=============

@short:
	sets an array of icons in the calendar or hides them

@type: 

boolean, object

@example:

webix.ui({
    view:"calendar",
	icons: [
   		{
        	template: function(){
            	return "<span class='webix_cal_icon_today webix_cal_icon'>"
                	+webix.i18n.calendar.today
                	+"</span>";
        	},
        	on_click:{
            	"webix_cal_icon_today": function(){
                	this.setValue(new Date());
                	this.callEvent("onTodaySet",[this.getSelectedDate()]);
            	}
        	}
    	},
    	{
        	template: function(){
            	return "<span class='webix_cal_icon_clear webix_cal_icon'>"
                	+webix.i18n.calendar.clear
                		+"</span>";
        	},
        	on_click:{
            	"webix_cal_icon_clear": function(){
                	this.setValue("");
                	this.callEvent("onDateClear",[this.getSelectedDate()]);
            	}       
        	}
    	}
	]
});

@template:	api_config
@descr:

###Disabling icons

To hide "Today" and "Clear" icons in the calendar, set the parameter to false:

~~~js
webix.ui({
    view:"calendar",
    icon:false,
    ...
});
~~~

###Object properties

As an object the parameter redefines buttons:

~~~js
webix.ui({
	view: "calendar",
	icons: [
		template: function(){
			return "<span class='my_button'>My Button</span>";
		},
		on_click:{
			"my_button": function(){
				alert("Button is clicked")
			}
		}
	]
});
~~~