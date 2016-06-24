DragItem 
=============


{{memo Interface which adds ability to drag items for components with datastore inside. }}





<div class='h2'>Events</div>


{{api
- api/dragitem_onafterdrop_event.md - fires after drag-n-drop was finished
- api/dragitem_onbeforedrag_event.md - fires before the mouse button is pressed and the cursor is moved over a draggable item
- api/dragitem_onbeforedragin_event.md - fires before a dragged element is moved over the droppable area
- api/dragitem_onbeforedrop_event.md - fires before a dragged element is released over the droppable area
- api/dragitem_onbeforedropout_event.md - fires before a dragged element is released over the droppable area
- api/dragitem_ondragout_event.md - fires when a dragged element is moved outside of the droppable area
}}


<div class='h2'>Properties</div>

{{api
- api/dragitem_drag_config.md - enables or disables drag-and-drop
- api/dragitem_dragscroll_config.md - enables autoscroll of component during drag-n-drop
}}





<div class='h2'>Other</div>


{{api
- api/dragitem_$drag_other.md - method called when drag operation initiated
- api/dragitem_$draghtml_other.md - defines how dragged item will look
- api/dragitem_$dragin_other.md - method called when item moved on possible drop landing during dnd
- api/dragitem_$dragmark_other.md - method called during dnd when some item in the component need to be marked as active drop target
- api/dragitem_$dragout_other.md - method called when item moved out of possible drop landing during dnd
- api/dragitem_$drop_other.md - method called when item dragged and dropped on valid target
- api/dragitem_$dropallow_other.md - can be redefined, if you need custom drop rules
}}


@index:
- api/refs/dragitem_props.md
- api/refs/dragitem_events.md
- api/refs/dragitem_others.md

