SpreadSheet User Guide
====================

SpreadSheet widget has a very rich UI structure. This guide is intended for providing you with useful tips on customizing the default user interface 
according to your needs and requirements.

Customizing the Toolbar structure
------------------------------------

The Toolbar's specificity is that it can include only one row of buttons. Buttons can be united into blocks according to their functionality.

##Buttons

###Defining Buttons Position

The arrangement of buttons blocks in the toolbar is specified by the *buttons* property. 
It presents a hash of data, where the key is the name of a block of buttons
and the value is an array of buttons names.

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

You can add a new block with the necessary name or add a block without any name. In this case the block name should start with the “$” sign.

###Setting the Block Title

You can specify the title of the buttons block in the Spreadsheet locale (the locale.js file)


###Creating Named Buttons

To add a new named button, you need to put an object with button's configuration (including its name) into the corresponding block of the “buttons” object:

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

(image)

###Creating Icon Buttons

Icon buttons in SpreadSheet have some settings that we recommend to define in order to achieve the best user experience:

- use the Button control with the “htmlbutton” type
- set the width equal to 40px
- use *webix_ssheet_button_icon* as a part of the icon element classname
- use simple icons with transparent background and #787878 color code as a background image

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

(image)

###Grouping Buttons

If you want to show many buttons in Toolbar and their number doesn't fit its size, you can group them.
For this purpose, add an icon button and attach a popup it. This popup will contain all groups of operations.

(image)

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

##Popups

###Attaching Popup to Named Buttons

(image)

A popup can be attached to a button with the help of the "popup" property. 
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

###Styling Icons in Popups

The style of icons used in popups should be consistent with other icons in the toolbar. To implement it, follow the tips below:

- use *webix_ssheet_button_icon* as a part of the icon element classname
- use simple icons with transparent background and #787878 color code as a background image

(see Creating Icon Buttons?)

###Attaching Popup to Icon Buttons

To create a popup with icons, use the “datasuggest” view and put the “ssheet-icons” view in its body:

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

The “ssheet-icons” is a Dataview-based view. So, you can set the layout for icons using the *xCount* and *yCount* properties of DataView.

The “css” property in data items defines the CSS rule where you can define the background-image:

~~~css
.bar_chart{
   background: url("images/bar-chart.svg");
}
~~~

###List Popups

To create a list popup, use the “ssheet-suggest” view. This view is based on the ContextMenu view. Therefore, it supports sub-popups and line separators:

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

(image)

Follow the tips below to set form controls inside of the popup properly:

- use only the bottom border
- set placeholders
- apply “webix_ssheet_suggest” CSS and set padding:0 for a suggest of a form control
- use the “ssheet-colorpicker” view as a color selector 

You can use the “ssheet-form-popup” view instead of “popup” to apply correct borders for all controls 
in this popup and the “ssheet-form-suggest” one for control suggests:

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

##Dialogs

(image)

Form controls in a SpreadSheet dialog should follow the same rules as popup controls do. 
We recommend to use the “ssheet-dialog” view to create dialog instead of the “window” one.

*“ssheet-dialog”* applies styling for the header and adds three buttons: the Hide icon at the top and two buttons (Cancel and Save) at the bottom. 

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

###Dialog title

To define the tile of the dialog, use the “head” property.

###The Hide icon settings

The background of this icon is defined by the “webix_ssheet_hide_icon” css. 

~~~css
.webix_ssheet_hide_icon{
   background: url("images/edit.svg");
}
~~~

The dialog fires the “onHideClick” event on the icon click. If its handler returns *false*, the dialog won’t be hidden:

~~~js
on:{
   onHideClick: function(){
       // click happened 
       return false;
   }
}
~~~

###The Cancel and Save buttons

The *Cancel* and *Save* buttons are added for dialogs automatically. Set the “buttons” property to *false*, if you don’t want to show them:

~~~js
view: "ssheet-dialog",
buttons: false,
…
~~~

The buttons titles are specified in the spreadsheet locale:

~~~js
webix.i18n.spreadsheet.labels.cancel = “Cancel”;
webix.i18n.spreadsheet.labels.save = "Save";
~~~

The dialog fires the following events on a button click: *onCancelClick* and *onSaveClick*. 
On clicking these buttons the dialog closes. If an event handler returns *false*, the dialog won’t be hidden.

###DataTable 

Besides form controls you can add any views into the dialog.
And, if you want to embed a datatable, we recommend you to choose the “ssheet-dialog-table” view to apply the appropriate styling.

(image)
