IFrame
================

##Overview

Ui-related IFrame is a component that helps include an i-frame, or 'inline frame' into the page. Basically, it's a floating frame on the webpage that contains an external web document. The component, 
as a rule, is smaller than the page it's added into, so vertical and horizontal scrollbars appear. 

You can insert more than one IFrame into the view provided that you initialize a switching [control](desktop/controls.md) for them. 

The component inherits from [view](desktop/view.md).

<img style="display:block; margin-left:auto;margin-right:auto;"  src="desktop/iframe.png"/>


##Initialization

~~~js
webix.ui({ 
	view:"iframe", id:"frame-body", src:"data/pageA.html"
});
~~~
{{sample 80_docs/iframe.html}}

- **src** (path) - defines external site url;
- **waitMessage** (boolean) - set "Loading.." message to be displayed on page loading. 

##Working with IFrame

####Data loading

The url to show in the iFrame can be defined 

- as value of the src **property** (shown above);
- as parameter of the **load** method.

~~~js
$$("frame-body").load("http://google.com")
~~~

####Switching between iframes in a single view

Simply put, this is the basics of [multiview](desktop/multiview.md) functionality. 

Make use of any of the **integral buttons** ([segmented](desktop/controls.md#segmented), [tabs](desktop/controls.md#tabs) or [tabbar](desktop/controls.md#tabbar)) to enable switching. The values for button options will be necessary 
URL-s. 

~~~js
{ view:"segmented", id:"control", options:[
	{ id:"data/pageA.html", value:"pageA"},
	{ id:"data/pageB.html", value:"pageB"}
]}
~~~

Then, attach a switching function to the button. The event referring to a tab mouse click is called **"onAfterTabClick"**. 

~~~js
$$("control").attachEvent("onAfterTabClick",function(sid){
	$$('frame-body').define("src", sid);
});
~~~

The event fires on clicking any tab, takes its ID (sid) as parameter and sets the source for external webpage equal to this ID. 

##API Reference

[Methods, properties and events](api/refs/ui.iframe.md)

###Related Articles 

- [Sizing Components](desktop/dimensions.md)
- [Redefinition of Components](desktop/redefinition.md)
- [Event Handling](desktop/event_handling.md)
- [Multiview](desktop/multiview.md)