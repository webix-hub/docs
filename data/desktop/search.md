Search
=============================

##API Reference

- [Methods, properties and events](api/refs/ui.search.md)
- [Shared functionality](desktop/controls_guide.md)

##Overview

UI-related search looks like an input [text](desktop/text.md) field with a 'search icon' to indicate that it can be used for filtering data in a data-presenting component to get to the necessary item. 

<img src="desktop/search.png"/>

Filtering function should be written by a developer. See the attached sample for details.

##Initialization

~~~js
{ view:"search", placeholder:"Search..", width: 300 }
~~~

{{sample 02_toolbar/13_search_field.html }}

####Main Properties: 

- **placeholder** (string) - a prompt text displayed in the search field;
- **label** (string) - text label of a control. It can be customized by:
	- **labelAlign** (string) - label alignment towards its container. Possible values are "left" and "right".  In any way, it's placed left to the control; 
    - **labelWidth** (number) - width of the label container.