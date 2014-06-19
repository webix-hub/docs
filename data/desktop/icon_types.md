Icons with UI Components
=================

Icons can be nested into all components and their items. You can put icon on the [toolbar](desktop/toolbar.md) in form of [buttons](desktop/controls.md#button), decorate [tabbar tabs](desktop/controls.md#tabbar), 
[accordion](desktop/accordion.md) panes as well as [list](desktop/list.md) and [dataview](desktop/dataview.md) items with them, etc. 

Icons can be initialized in three ways: 

- as **separate views**;
- as **button types**;
- as **CSS classes**.

Icons are taken from the [Font Awesome](http://fortawesome.github.io/Font-Awesome/) collection. There you can find plenty of icons to your choice and pick their names to insert them in your apps. 

{{sample 16_skins/03_icons.html }}

##View Icon

<img src="desktop/icons.png" />

UI-related icon looks like a button with a border. Text label for this icon type is not supposed. 

~~~js
{ view:"icon", icon:"mail"},
{ view:"icon", icon:"users"}
~~~

The value for an **icon** property is the name of the needed icon. 

##Button with an Icon

<table class="list" cellspacing="0" cellpadding="5" border="0">
	<caption class="caption">
		<strong>Table 1 </strong>
		Icon types
	</caption>
	<tbody>
	<tr>
		<td> <code> type:"icon" </code> </td>
		<td style="text-align:center;"><img src="desktop/type_icon.png"/></td>
	</tr>
	<tr>
		<td> <code> type:"iconTop" </code> </td>
		<td style="text-align:center;"><img src="desktop/type_iconTop.png"/></td>
	</tr>
	<tr>
		<td> <code> type:"iconButton" </code> </td>
		<td style="text-align:center;"><img src="desktop/type_iconButton.png"/></td>
	</tr>
	<tr>
		<td> <code> type:"iconButtonTop" </code> </td>
		<td style="text-align:center;"><img src="desktop/type_iconButtonTop.png"/></td>
	</tr>
	</tbody>
</table>


~~~js
{ view:"button", type:"icon", icon:"mail", label:"Mail", width:80 }
~~~

- **type** - the property that turns a standard button into an icon button: 
	- **icon** - an icon button without a distinct border;
    - **iconTop** - an big borderless icon button with a text label below an icon;
    - **iconButton** - a small icon button with a label right of the icon;
    - **iconButtonTop** - a big icon button with a label below the icon;
- **icon** - name of an icon (looks for it on Entypo);
- **label** - text label for an icon button;
- **width** - width of a button with label and icon. 

##'webix-icon' CSS Class

This method of icon initialization fits the components and items that don't normally take buttons - [tabs](desktop/controls.md#tabbar) (they are buttons themselves), [panes](desktop/accordion.md), [list](desktop/list.md) 
and [dataview](desktop/dataview.md) items, [datatable](datatable/index.md) cells.
In this case, icon are not buttons and perform a decorative function. 

<img src="desktop/icon_css_pane.png">

CSS class is called 'webix-icon icon-**mail**' with the icon name being part of it. 

###Throught css property: 

{{snippet
Multiview tabs
}}
~~~js
{ view:"tabbar", options:[
			{ value:"mail",  label:"Mail", css:"webix_icon icon-mail"},
			{ value:"users", label:"Users", css:"webix_icon icon-users"},
			{ value:"cog", 	 label:"cog" , css:"webix_icon icon-cog"}
           ]
~~~


###With the help of inline styling:

Inline styling is enables with the help of a **span** tag. 

{{snippet
AccordionItem pane with an icon
}}
~~~js
{ header:"<span class='webix_icon icon-mail'></span>Mail"
~~~

{{snippet
List item with an icon
}}
~~~js
template:"<span class='webix_icon icon-#icon#'></span> #name# "
~~~

Here the icon's name is in hash signs since it comes from the dataset, e.g. in JSON it looks like 

~~~js
var data=[
	{id:1, name:"item1", icon:"mail"},
    {id:2, name:"item2", icon:"users"}]
~~~

##Changing Default Icons

Default [FontAwesome icons](http://fortawesome.github.io/Font-Awesome/icons/) that are used for various controls can be changed to custom ones in several ways.

###Setting Other FontAwesome Icon

If you'd like to use another icon from FontAwesome collection instead of the default one, specify its name as value of **icon** property:

~~~js
{view:"richselect", label: 'Other FontAwesome Icon', value:1, options:options, icon:"caret-down"}
~~~

As a result, the default [richselect]((desktop/controls.md#richselect)) icon, "fa-angle-down", is replaced with the one you've set. 

###Setting a Custom Icon

To set a custom icon that you can provide as a background-image, write the new CSS rule that redefines the default one. Nothing is changed in the control configuration: 

~~~js
{view:"combo", label: 'Fruit', options:[...] } 
~~~

As with richselect, [combo](desktop/controls.md#combo) control uses "fa-angle-down" icon which CSS should be modified:

~~~js
.webix_input_icon.fa-angle-down:before{
    content:""; /*removes FontAwesome icon */
    background-image: url("search.png");
    width:20px;
    height:20px;
    display:block;
}
~~~

{{sample 13_form/01_controls/16_combo_css.html}}

If you want to style one combo on the page while leaving another one unchanged, define a separate **css** class for the one in question: 

~~~js
{view:"combo", label: 'Fruit', options:[...], css:"custom" } 
~~~

Then the necessary CSS will look like this:

~~~css
.custom .webix_input_icon.fa-angle-down:before{...}
~~~

**Component styling** is described in detail in the [corresponding article](desktop/styling.md) of the documentation.

@complexity:2