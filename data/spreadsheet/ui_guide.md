User Interface Guidelines
====================

The SpreadSheet widget has a very rich UI structure. This guide is intended for providing you with useful tips on customizing the default user interface 
according to your needs and requirements.

The Toolbar Structure
------------------------------------

The SpreadSheet toolbar contains blocks of buttons grouped according to their functionality.
The arrangement of buttons blocks in the toolbar is specified in the [*"buttons"* collection](spreadsheet/ui_guide.md#customizingthebuttonscollection). 

The Toolbar's specificity is that it can include only one row of buttons. 
However, there is also a way to customize the Toolbar so that it would have a multi-row structure. 
In this case the [*"toolbar"* collection](spreadsheet/ui_guide.md#customizingthetoolbarcollection) should be used.

Let's consider the structure of both the *buttons* collection and the *toolbar* one in detail.

##Customizing the "buttons" collection

###Defining Buttons Position


It contains a hash of data, where the key is the name of a block of buttons
and the value is an array of buttons' names.

There are four blocks of buttons on the toolbar by default:

- “undo” -  Undo/Redo
- “font” - all operations related to font and color manipulations
- “align” - align operations including cell span and text wrap
- “format” - number format settings

~~~js
webix.ui({
   view:"spreadsheet",
   buttons: {
       "undo": ["undo","redo"],
       "font": ["font-family","font-size","font-weight","font-style",
   			"text-decoration","color","background","borders"],
       "align": ["text-align","vertical-align","wrap","span"],
       "format": ["format"]
   }
});
~~~

You can add a new block with the necessary name or without any name. In the latter case the block name should start with the “$” sign.

You can specify the title of the buttons block in the [Spreadsheet locale](spreadsheet/localization.md).

To define a preset button in the toolbar, you need to use just its name. You can also add a custom button: a text button, an icon button, a selector, etc.


###Creating Text Buttons

<img src="spreadsheet/text_buttons.png">

To add a new text button, you need to put an object with the button's configuration (including its name) into the corresponding block set in the *buttons* property:

~~~js
webix.ui({
   view:"spreadsheet",
   buttons: {
       "undo": ["undo","redo"],
 		...
       "My Block": [
           {   view: "button", name: "a", width: 40, label: "New button" }, 
           ...
       ]
    }
});
~~~

{{sample 65_spreadsheet/08_ui/01_text_buttons.html}}

###Creating Icon Buttons

<img src="spreadsheet/icon_buttons.png">

For icon buttons in SpreadSheet we recommend to define the following settings in order to fit the general SpreadSheet appearance:

- use the Button control with the "htmlbutton" type
- set the width equal to 40px
- use *"webix_ssheet_button_icon"* as a part of the icon element classname
- as a *background-image* use simple icons with transparent background and the #787878 color

For example, you can specify icon buttons in the following way:

~~~js
webix.ui({
   view:"spreadsheet",
   buttons: {
       "undo": ["undo","redo"],
       ...
       "Insert": [
        {
           view: "button", type:"htmlbutton", name: "insert-image", width: 40,
           label: "<span class='webix_ssheet_button_icon icon_image'></span>",
           tooltip: "Insert image", click: insertImage
         }
       ]
   }
});
~~~

{{sample 65_spreadsheet/08_ui/02_buttons_icon.html}}

###Grouping Buttons

If you want to show too many buttons and their number exceeds the Toolbar's width, you can group them.
For this purpose, add an icon button and attach a popup to it. This popup will contain all buttons of the group.

<img src="spreadsheet/group_button.png">

Use the code below to create such a structure:

~~~js
webix.ui({
   view:"spreadsheet",
   buttons: {
       "undo": ["undo","redo"],
       ...
       "$other": [
          {},
          {
            view: "button",  type:"htmlbutton", name: "a", width: 40,
            label: "<span class='webix_ssheet_button_icon icon_other'></span>",
            tooltip: "Other options", popup: $$("mypopup")
          }
       ]
   }
});
~~~

{{sample 65_spreadsheet/08_ui/03_buttons_additional.html}}

##Popups

###Styling Icons in Popups

The style of icons used in popups should be consistent with other icons' style in the toolbar. To achieve this, follow the tips below:

- use *"webix_ssheet_button_icon"* as a part of the icon element classname
- as a *background-image* use simple icons with transparent background and the #787878 color

###Popup with Named Buttons

<img src="spreadsheet/popup.png">

A popup can be attached to a button with the help of the *popup* property. 
You need just to set this property in the button's configuration.

~~~js
webix.ui({
   view:"spreadsheet",
   buttons: {
       ...
       "$other": [
           { view: "button", popup: $$("mypopup"),...}
       ]
   }
});
~~~

It's also possible to call the *show()* method and pass the DOM element of a button to show the popup, like this:

~~~js
$$("mypopup").show($$("mybutton").$view);
~~~

{{sample 65_spreadsheet/08_ui/03_buttons_additional.html}}

###Popup with Icon Buttons

<img src="spreadsheet/icons_popup.png">

To create a popup with icons, use the *datasuggest* view and put the *"ssheet-icons"* view in its body:

~~~js
webix.ui({
   id: "mypopup",
   view: "datasuggest",
   body:{
       view: "ssheet-icons",
       xCount:3,
       yCount:1,
       tooltip: {
           template: "#title#"
       }
   },
   data: [
       {id: "insert_image", css: "bar_chart", title: "Bar"},
       {id: "insert_chart", css: "line_chart",  title: "Line"},
       {id: "insert_column", css: "pie_chart", title: "Pie"}
   ]
});
~~~

The *“ssheet-icons”* is a Dataview-based view. So, you can set the layout for icons using the *xCount* and *yCount* properties of DataView.

The *css* property in data items defines the CSS rule where you can define the background image:

~~~css
.bar_chart{
   background: url("images/bar-chart.svg");
}
~~~

{{sample 65_spreadsheet/08_ui/04_icons_popup.html}}

###List Popups

To create a list popup, use the *“ssheet-suggest”* view. This view is based on the ContextMenu view. Therefore, it supports sub-popups and line separators:

~~~js
webix.ui({
   id: "mypopup",
   view: "ssheet-suggest",
   template: "<span class='webix_ssheet_button_icon #icon#'></span> #value#",
   data:[
       { id: "insert_image", icon: "image", value: "Insert image"},
       { id: "insert_chart", icon: "chart",  value: "Insert chart"},
       { $template: "Separator" },
       { id: "insert_column", icon: "column", value: "Insert column"},
       { id: "insert_row", icon: "row",  value: "Insert row"}
   ]
});
~~~

###Form Popups

<img src="spreadsheet/form_popup.png">

You can also create a form popup and attach it to a Spreadsheet button.

Follow the tips below to set form controls inside of the popup properly:

- use only the bottom border
- set placeholders
- apply *"webix_ssheet_suggest"* CSS and set padding to 0 for a suggest of a form control
- use the *"ssheet-colorpicker"* view as a color selector 

To apply correct borders for all controls in this popup, 
you can use the *“ssheet-form-popup”* view instead of “popup” and the *"ssheet-form-suggest"* one for the control's suggests:

~~~js
webix.ui({
   id: "mypopup",
   view: "ssheet-form-popup",
   body: {
       view: "form",
       borderless: true,
       elements:[
          	{view: "text", placeholder: "Name",...},
    		{view: "richselect", label: "Type", placeholder: "Select", suggest:{
               view:  "ssheet-form-suggest",
               data:["Area","Bar","Line"]
           	}},
     		{view: "ssheet-colorpicker", label: "Color"}
      ]
   }
});
~~~

{{sample 65_spreadsheet/08_ui/05_editors_popup.html}}

##Dialogs

Form controls in a SpreadSheet dialog follow the same rules as popup controls do. 
We recommend to use the *"ssheet-dialog"* view to create a dialog instead of the *window* one.

The *"ssheet-dialog"* view applies styling for the header and adds three buttons: the *Close* icon at the top and two buttons (*Cancel* and *Save*) at the bottom. 

To define the title of the dialog, use the *head* property.

<img src="spreadsheet/dialog.png">


~~~js
webix.ui({
   id: "mydialog",
   view: "ssheet-dialog",
   head: "Editor",
   body: {
       view: "form",
       elements:[
           ...
       ]
   }
});
~~~

{{sample 65_spreadsheet/08_ui/06_dialogs.html}}


###The Close icon settings

The background of this icon is defined by the *“webix_ssheet_hide_icon”* CSS. 

~~~css
.webix_ssheet_hide_icon{
   background: url("images/edit.svg");
}
~~~

The dialog fires the *onHideClick* event on the icon click:

~~~js
on:{
   onHideClick: function(){
       // click happened 
       this.hide();
   }
}
~~~

###The Cancel and Save buttons

The *Cancel* and *Save* buttons are added for dialogs automatically. Set the *buttons* property to *false*, if you don’t want to show them:

~~~js
view: "ssheet-dialog",
buttons: false,
…
~~~

The buttons' titles are specified in the SpreadSheet locale:

~~~js
webix.i18n.spreadsheet.labels.cancel = "Cancel";
webix.i18n.spreadsheet.labels.save = "Save";
~~~

The dialog fires the following events on a button click: *onCancelClick* and *onSaveClick*.

###DataTable 

Besides form controls you can add any views into the dialog, e.g. a datatable.
In this case we recommend you to choose the *"ssheet-dialog-table"* view to apply the appropriate styling.

<img src="spreadsheet/datatable_dialog.png">

~~~js
webix.ui({
	id: "mydialog",
	view: "ssheet-dialog",
	head: "Editor",
	body: {
		cols:[
			{
				view: "ssheet-table", autowidth: true, autoheight:1,autoConfig:true,
				data:[
					{id: 1, name: "Range1", range: "A3:C8"},
					{id: 2, name: "Range2", range: "D3:F8"}
				]
			},
			{
				view: "form",
				elements:[
					...
		]}
    ]}
});
~~~

{{sample 65_spreadsheet/08_ui/07_complex_dialog.html}}

Customizing the "toolbar" collection
--------------------------

Let's suppose that you've got a large set of buttons you want to place on the Toolbar and additional buttons with popups are not enough.
You may also want to build your own powerful spreadsheet and go beyond the possibilities of the default SpreadSheet configuration.

To help you implement all your best ideas, we added the possibility to create a custom Toolbar. Unlike the default configuration, a custom toolbar is defined
through the "toolbar" collection and allows specifying the width and height of buttons, setting margins and paddings and set separators between the blocks of buttons.

<img src="spreadsheet/custom_toolbar.png">

Pay attention that buttons in the "toolbar" collection should follow the same rules 
as in the [*"buttons"* collection](spreadsheet/ui_guide.md#customizingthebuttonscollection).


The key points of the custom toolbar are the following:

- the Toolbar elements are placed into the *toolbar* object
- Toolbar has the [Layout](desktop/layout.md) structure and the buttons' arrangement is defined by columns and rows (it allows making more than one row of buttons)
- a button extending a preset button should include the *$button* property with the button's name as a value
- the buttons' offsets can be set and managed using the *padding* and *margin* properties
- the labels of the buttons' blocks are defined by the *ssheet-bar-title* view with the help of templates
- the default sizes of buttons and templates can be changed using the *width* and *height* properties
- a separator between views can also be added using the *ssheet-separator* view


~~~js
 toolbar: [
 	{
    	rows:[
          {
            margin: 2,
            cols: [
            	{$button: "undo"},
                {$button: "redo"}
          	]
          },
          {},
          {template: "Undo/Redo", view: "ssheet-bar-title", height: 24}
    	]
    },
    {view: "ssheet-separator"},
    {
        rows:[
           {
             margin: 2,
             cols:[
             	{$button: "font-family", width: 167},
                {$button: "font-size", width: 90}
             ]
           },
           ...
    	]
    },
    ...
]
~~~

{{sample 65_spreadsheet/03_customization/07_custom_toolbar.html}}

###Full Code for Toolbar elements

The full code for all toolbar elements is given [in a separate article](spreadsheet/all_toolbar_elements.md).

@index: 
- spreadsheet/all_toolbar_elements.md