Label
=====================

##API Reference

- [Methods, properties and events](api/refs/ui.label.md)
- [Shared functionality](desktop/controls_guide.md)

##Overview

Ui-related label is a non-scrollable placeholder for plain text. Like other components, it features specific **label** property that sets text value. 

<img src="desktop/label.png"/>

##Initialization

~~~js
{ view:"label", label: "Label", inputWidth:100, align:"center"}
~~~

{{editor http://webix.com/snippet/4cf99378	Attributes}}

####Main properties

- **label** (string) - defines text of the label control;
- **inputWidth** (number) - defines the width of the control;
- **align** (string) - positions the label with relation to the parent view.

Label control can be used to render any user HTML or icons (as well as built-in in Webix FontAwesome icons):

~~~js
{ view:"label", label:"<span class='myCss'>My Label</span>"},
{ view:"label", label:"<span class='webix_icon fa-user'></span> My Label" }
~~~

