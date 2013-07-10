clipbuffer 
=============

{{memo Interface for clipboard. }}

Because browsers doesn't allow direct comunication with clipboard, lib creates hidden textarea which always hold text for copy (ctr-c) operation. So you can't set text directly to clipboard but you can place it ready for ctrl-c operation. 



Methods
-------

{{links
- api/clipbuffer_destructor.md - destroys the clipbuffer, cleanin dom
- api/clipbuffer_focus.md - moves focus to the clipboard buffer
- api/clipbuffer_init.md - inits clipboard buffer
- api/clipbuffer_set.md - sets new value for clipboard buffer
}}




@index:
- api/refs/clipbuffer_methods.md

