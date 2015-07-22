EditAbility 
=============


{{memo Implement common edit interactions. }}




<div class='h2'>Methods</div>

{{api
- api/editability_edit.md - enables the edit mode for the specified item
- api/editability_editcancel.md - cancels the edit mode and closes all opened editors. The component is still editable
- api/editability_editnext.md - closes the current editor and opens one in the next cell of the row
- api/editability_editstop.md - stops the edit mode and closes all opened editors. The component is still editable
- api/editability_focuseditor.md - moves focus to the active editor
- api/editability_geteditstate.md - returns info about active editor object
- api/editability_geteditor.md - returns editor object
- api/editability_geteditorvalue.md - returns the value of the active (currently open) editor
- api/editability_validateeditor.md - validates data in currently active editor
}}


<div class='h2'>Events</div>


{{api
- api/editability_onaftereditstart_event.md - fires after edit operation was initiated, editor opened and ready for input
- api/editability_onaftereditstop_event.md - fires after edit operation finished
- api/editability_onbeforeeditstart_event.md - fires before edit operation is initiated
- api/editability_onbeforeeditstop_event.md - fires before stop edit command is received
- api/editability_onliveedit_event.md - occurs when data was changed in the editor
}}


<div class='h2'>Properties</div>

{{api
- api/editability_editvalue_config.md - defines which data item is editable (in case of several data item in the cell/line)
- api/editability_editable_config.md - allows/denies editing in the view
- api/editability_editaction_config.md - defines the action on which editors will be opened
- api/editability_editor_config.md - sets editor types for component items
- api/editability_form_config.md - linked form
}}





@index:
- api/refs/editability_methods.md
- api/refs/editability_props.md
- api/refs/editability_events.md

