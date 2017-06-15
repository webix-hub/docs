Icon
===============

##API Reference

- [Methods, properties and events](api/refs/ui.icon.md)
- [Shared functionality](desktop/controls_guide.md)

##Overview

UI-related icon is a button-like borderless clickable control with an icon on it.

<img src="desktop/icons.png"/>

##Initialization

~~~js
{ view:"icon", icon:"envelope", align:"left"}
~~~

####Main properties

- **icon** (string) - icon name. Icons and their names are listed on the [Font Awesome](http://fortawesome.github.io/Font-Awesome/).

Icons in Webix can: 

- form a separate **component** (as described above);
- indicate a **button type**;
- be defined via a **CSS class**. 

Read more about icons within Webix views in the [dedicated chapter of the documentation](desktop/icon_types.md).

@metadescr: Learn how to increase the usability of your app using the clickable icon control with neat view. The page describes the initialization process and main properties.
@doctitle: The Icon control documentation: overview and initialization. 