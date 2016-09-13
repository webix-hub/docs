Form Controls
=============

Webix delivers a variety of controls that can be placed in the form. 
These controls can be used for entering text, selecting an option, date or color, switching between multiview cells, etc.

<img style="display:block; margin-left:auto;margin-right:auto;"  src="desktop/form_controls.png"/>

##List of Controls

**Main controls** (can be used standalone):

- [Button](desktop/button.md)
- [Checkbox](desktop/checkbox.md)
- [Colorpicker](desktop/colorpicker.md)
- [Combo](desktop/combo.md)
- [Counter](desktop/counter.md)
- [Datepicker](desktop/datepicker.md)
- [Daterangepicker](desktop/daterangepicker.md)
- [Daterangesuggest](desktop/daterangesuggest.md)
- [Fieldset](desktop/fieldset.md)
- [Icon](desktop/icon.md)
- [Label](desktop/label.md)
- [Multicombo](desktop/multicombo.md)
- [Multiselect](desktop/multiselect.md)
- [Multitext](desktop/multitext.md)
- [Radio](desktop/radio.md)
- [RangeSlider](desktop/rangeslider.md)
- [Richselect](desktop/richselect.md)
- [Search](desktop/search.md)
- [Select](desktop/select.md)
- [Segmented](desktop/segmented.md)
- [Slider](desktop/slider.md)
- [Tabbar](desktop/tabbar.md)
- [Text](desktop/text.md)
- [Textarea](desktop/textarea.md)
- [Toggle](desktop/toggle.md)

**Helper controls** (are used to build other controls, can be configured within them to add extra customization):

- [Suggest](desktop/suggest.md) - a popup with options for select controls. May include: 
	- [list](desktop/list.md) - select options for combo, richselect and multiselect;
	- [colorboard](desktop/colorboard.md) - a color palette for colorpicker;
	- [calendar](desktop/calendar.md) - date selector for datepicker.
 
Suggest has several variations to serve the needs of various controls:

- *[Gridsuggest](desktop/gridsuggest.md)*,
- *[Datasuggest](desktop/datasuggest.md)*,
- *[Checksuggest](desktop/suggest.md#advancedsuggestlists)*, 
- *[Multisuggest](desktop/suggest.md#advancedsuggestlists)*.  

##Shared Functionality 

Form controls have much in common, namely: 

- feature **name** property to indicate data name within form values;
- have **label**, **value**, **width/inputWidth** and **height/inputHeight** properties;
- can be **hidden** and **shown**;
- feature **getValue()** and **setValue()**;
- ..etc.

For further details check the desktop/controls_guide.md article.

##Samples 

- [Form Controls](http://docs.webix.com/samples/13_form/01_controls/index.html)

@index:
  - desktop/button.md
  - desktop/checkbox.md
  - desktop/colorpicker.md
  - desktop/combo.md
  - desktop/counter.md
  - desktop/datepicker.md
  - desktop/daterangepicker.md
  - desktop/daterangesuggest.md
  - desktop/fieldset.md
  - desktop/icon.md
  - desktop/label.md
  - desktop/multicombo.md
  - desktop/multiselect.md
  - desktop/multitext.md
  - desktop/radio.md
  - desktop/rangeslider.md
  - desktop/richselect.md
  - desktop/search.md
  - desktop/select.md
  - desktop/segmented.md
  - desktop/slider.md  
  - desktop/suggest.md
  - desktop/tabbar.md
  - desktop/text.md
  - desktop/textarea.md
  - desktop/toggle.md