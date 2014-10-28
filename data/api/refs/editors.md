editors 
=============


{{memo Set of editing tools. }}

Editors are used for components in editable state. They define an editing pattern, whether it is text input, two-value choice, date and color selection.

~~~js
webix.ui({
 	view:"datatable",
    ..config..
    editable:true,
    editor:"text"
})
~~~
Editor type depends on data you'd like to edit. 

For more details check [Data Editors](desktop/editing.md)





<div class='h2'>Other</div>


{{api
- api/editors_$popup_other.md - set of configuration options for popup editors
- api/editors_checkbox_other.md - a checkbox editor for a two-value choice
- api/editors_color_other.md - a popup editor for hex code values. Allows for picking a color from the colorboard.
- api/editors_combo_other.md - a popup list with predefined select options.
- api/editors_date_other.md - edits dates with the help of a popup calendar.
- api/editors_inline-checkbox_other.md - a customizable checkbox editor
- api/editors_inline-text_other.md - a customizable text editor
- api/editors_multiselect_other.md - a popup list of predefined values with multiple-choice ability
- api/editors_password_other.md - text editor for passwords
- api/editors_popup_other.md - a popup text editor for long texts
- api/editors_richselect_other.md - a popup list of predefined select options
- api/editors_select_other.md - a drowdown list of predefined values based on HTML select
- api/editors_text_other.md - a standard editor for editing text data
}}


@index:
- api/refs/editors_others.md

