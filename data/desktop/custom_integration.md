DIY - Custom Integration Pattern
==========================

Webix offers a number of ready-made solutions that integrate it with other Javascript libraries and frameworks. 

- integration with structural frameworks [BackBoneJS](desktop/backbone.md) and [Angular JS](desktop/angular.md);
- integration with popular [text editors](desktop/text_editors.md);
- intergation with [charts](desktop/chart_integration.md) and [planning tools](desktop/scheduler.md).

However, it's not possible to provide support for all the libraries or tools that exist in big quantities on the Web. If you haven't found the needed solution among built-in ones,
you can write **your own integration pattern**. Webix offers rather an elegant way to do this. 

The main thing here is to create a new Webix component that will display the needed tool on the page.

~~~js
webix.protoUI({
    name:"myCustomName",
    $init:function(config){..},
    ..//other methods
}, webix.ui.view);
~~~

This prototype component should inherit from [view](desktop/view.md), a base class for all the ui-related components. A pure view doesn't contain any into and acts as a placeholder for the real component.

It can have any number of properties and methods with two of them being mandatory:

- **name** - property that defines view name you will use during initialization;
- **$init**(config) - function that is executed on component initialization. It's argument is the component's configuration object.

The following code will then instantiate the above-created object and display it on the page: 

~~~js
webix.ui({
	view:"myCustomName",
    ..//config
});
~~~

To learn more about how to **create a custom object in Webix**, go to the [corresponding documentation article](desktop/custom_component.md).

####HipChat Integration

Let's take a [HipChat](https://www.hipchat.com), a  popular professional chat solution that has lately got an apportunity to work on the web. 

<img src="desktop/hipchat.png"/>

{{snippet
Prototype Component
}}
~~~js
webix.protoUI({
    name:"hipchat",
    $init:function(config){
        //configuration params
        var params = [
            "anonymous=true",
            "minimal=true",
            "timezone="+config.timezone,
            "welcome_msg="+(config.welcome_msg||"Welcome to Webix Hub Chat")
        ];
        //building full url
        var url=config.url+(config.url.indexOf("?")>0?"&":"?")+params.join("&");
        if (url.indexOf("https://") !== 0)
            url = "https://" + url;

        //loading the hipchat
        var html="<iframe src='"+ url+"'frameborder='0' width='100%' height='100%'>
        			</iframe>";
        this.$view.innerHTML = html;	                       
    },
}, webix.ui.view);
~~~

Initializing HipChat on a page:

~~~js
webix.ui({
    view:"hipchat",  url: "YOUR_GUEST_ACCESS_URL", timezone: "PST"
});
~~~

You get the URL value through Hipchat client when you share the room access.

Related Sample: <a href="http://webix-hub.github.io/components/hipchat/sample.html">HipChat Integration</a>

@index:

