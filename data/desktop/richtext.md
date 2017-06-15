RichText
==========

##API Reference

- [Methods, properties and events](api/refs/ui.richtext.md) 
- [Shared functionality](desktop/controls_guide.md)

##Overview

Webix RichText control presents a handy WYSIWYG editor for entering, editing and formatting text.

<img src="desktop/richtext.png">

##Initialization

To initialize a RichText control, you need to apply the configuration below:

~~~js
webix.ui({
    view: "richtext",
    id: "richtext1",
    label: "My Label",
    labelPosition: "top",
    value: "Some text"
});
~~~

{{sample 13_form/01_controls/23_richtext.html}}

**Main properties**

- **label** (string) - text label of a control. It can be customized by:
	- **labelAlign** (string) - defines alignment of the label towards its container. Possible values are "left" and "right". Anyway, it's placed to the left of the control;
	- **labelWidth** (number) - sets the width of the label container. 80 by default;
	- **labelPosition** (string) - defines the label position relative to the input field. There are two possible values: "left" (the default one) and "top".
- **value** (string) - the initial value for the RichText field.

@metadescr: Learn the basics of the RichText widget usage. Use it to create neat and lightweight online WYSIWYG text editors with minimal effort.
@doctitle: The RichText control documentation: overview and initialization.