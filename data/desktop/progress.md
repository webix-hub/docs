Setting Progress Bar and Overlay Messages
=====================

Webix allows visualizing the application workflow by adding the following elements to its components:

- progress bar;
- progress icon; 
- overlay box with or without message;

Setting Progress Bar/Icon
-------------------

Progress bar and icon are provided by Webix **Progress Bar** module  that can be easily mixed into any component including [layouts](desktop/building_app_architecture.md). 

~~~js
webix.extend($$("view_id"), webix.ProgressBar);
~~~

Since now, the component with *"vew_id"* ID features two methods: 

- [showProgress](api/progressbar_showprogress.md)(config) - shows the progress bar/icon according to the passed configuration, or [default one](api/progressbar_showprogress.md#details) 
if the configuration is not provided;
- [hideProgress](api/progressbar_hideprogress.md) - hides progress bar/icon that was shown by the above mentioned method.

**Configuration** (progress_config) for a progress bar/icon includes:

- **type** (string) - type of a progress element:
	- "top" - progress bar at the top of the view;
    - "bottom" - progress bar at the bottom of the view;
    - "icon" - progress icon at the center of the view;
- **icon** (string) - icon name (only if *type:"icon"* is set). Icon names can be checked at [FontAwesome](http://fortawesome.github.io/Font-Awesome/icons/));
- **delay** (number) - life time in milliseconds of the progress bar, after which it is hidden (if **hide** parameter is enabled);
- **hide** (boolean) - specifies whether a progress bar/icon should be hidden after its life time. 
- **position** (number) - an optional parameter, true only for the progress bar. Specifies the position of a progress mark on a bar. Varies from 0 to 1. 

###Progress Bar for the Data Component

<img src="desktop/progress_bar.png"/>

{{snippet
Progress Bar
}}
~~~js
//initializing the component
webix.ui({
	view:"datatable", id:"data", ..
});

//adding progress bar functionality to it
webix.extend($$("data"), webix.ProgressBar);

...
//using the functionality
$$("data").showProgress({
	type:"bottom",
	delay:3000,
	hide:true
});
~~~

{{sample 19_api/04_progress_data.html}}

###Progress Icon for Layout

<img src="desktop/progress_icon.png"/>

{{snippet
Progress Icon
}}
~~~js
//initializing the layout
webix.ui({
	id:"app", rows:[
    	..app config..
    ]
});

//adding progress bar functionality to it
webix.extend($$("app"), webix.ProgressBar);

...
//using the functionality
$$("app").showProgress({
   type:"icon",
   delay:3000
});
~~~

Additionally, an app can be [disabled](desktop/disabling.md) for the time being. 

{{sample 19_api/05_progress_app.html}}

Setting Overlay Boxes to Components
-----------------

<img src="desktop/list_overlay.png">

{{sample 05_list/07_empty_list.html}}

Overlay box is provided by Webix [OverlayBox](api/refs/overlaybox.md) module and allows creating placeholders for data components. 

The module needs to be included into the component: 

~~~js
webix.extend($$("list1"), webix.OverlayBox);
~~~

After that the following methods become accessible from the component:

- **showOverlay**(text) - shows overlay box with the defined text or HTML;
- **hideOverlay()** - hides the overlay box;

A blue bar with **webix_loading_overlay** CSS class will be shown. To get rid of it, or set another loading image, redefine this class. 

{{snippet
List with 'no data' message
}}
~~~js
webix.ui({
	view:"list", 
    url:"...",
	ready:function(){
		if (!this.count()){ //if no data is available
			webix.extend(this, webix.OverlayBox);
			this.showOverlay("<div style='...'>There is no data</div>");
		}
    }
});
~~~

{{sample 05_list/07_empty_list.html}}

###Component-specific support of overlay boxes

Webix [datatable](datatable/index.md) features [prebuilt overlay support](datatable/loading_data.md#loadingscreen).

##Related Articles

- [Component Copying and Extending](desktop/extend.md). 

@seodescr:

- See more information about Webix [javascript framework](https://webix.com) there.

@metadescr: Learn how to inform a user that your app is still working during the data loading process with the help of progress bar, progress icon or overlay message boxes.
@doctitle: Visualizing the app workflow: progress bar, progress image, etc.

