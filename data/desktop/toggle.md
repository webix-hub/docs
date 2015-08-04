Toggle
==================

##API Reference

- [Methods, properties and events](api/refs/ui.toggle.md) 
- [Controls Common Functionality](desktop/controls_guide.md)


##Overview

A two-state button that can be not only clicked but pressed. Hence, it has two states - pressed and unpressed (initial), 
which makes it resemble [checkbox](desktop/checkbox.md) that also has two states (checked and unchecked). 

<img src="desktop/toggle.png" />

Toggle values can be defined separately for each state. 

##Initialization

~~~js
{ view:"toggle", type:"iconButton", name:"s4", 
	offIcon:"pause",  onIcon:"play",
	offLabel:"Disabled", onLabel:"Enabled" 
}
~~~

{{sample 13_form/01_controls/14_toggle.html }}

####Main properties
 
- **name** (string) - read-only property, defining the toggle's name. It should be unique within a page;
- **label** (string) -  text on the button body, one and the same for pressed and unpressed states;
- **onLabel** (string) - text label on the button in a pressed state;
- **offLabel** (string) -  text label on the button in an unpressed state;
- **icon** (string) - icon for pressed and unpressed toggle states;
- **onIcon** (string) - icon for a pressed toggle;
- **offIcon** (string) - icon for an unpressed toggle.

Icons taken from the [Font Awesome](http://fortawesome.github.io/Font-Awesome/), so pick the necessary icon name at their site. 

##Toggle Types

Toggle type is defined by the **type** property. If it isn't defined, a standard button is displayed. For image toggles there exist the following types: 

- **iconButton** for a standard button with an icon;
- **image** for an image with a left-hand label (if any);
- **imageButton** for a standard button with an image and a left-hand label;
- **imageTop** for a picture and a label below it;
- **imageButtonTop** for a standard button with a picture and a label under the picture;
- **next** for a  button with a right-hand arrow;
- **prev** for a button with a left-handed arrow.

Types coincide with those of a standard [button](desktop/button.md). Check their look and feel in the image below: 

<table class="list" cellspacing="0" cellpadding="5" border="0">
	<tr>
		<td> <code> type:"iconButton" </code> </td>
		<td style="text-align:center;"><img src="desktop/toggleicon.png"/></td>
	</tr>
	<tr>
		<td> <code> type:"image" </code> </td>
		<td style="text-align:center;"><img src="desktop/toggle_image.png"/></td>
	</tr>
	<tr>
		<td> <code> type:"imageButton" </code> </td>
		<td style="text-align:center;"><img src="desktop/toggleimagebut.png"/></td>
	</tr>
	<tr>
		<td> <code> type:"imageTop" </code> </td>
		<td style="text-align:center;"><img src="desktop/toggletop.png"/></td>
	</tr>
	<tr>
		<td> <code> type:"imageButtonTop" </code> </td>
		<td style="text-align:center;"><img src="desktop/togglebuttontop.png"/></td>
	</tr>
</table>

{{sample 13_form/01_controls/14_toggle_images.html}}

