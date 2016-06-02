SpreadSheet User Guide
====================

SpreadSheet widget has a very rich UI structure. This guide is intended for providing you with useful tips on customizing the default user interface 
according to your needs and requirements.

Customizing the Toolbar structure
------------------------------------

The Toolbar's specificity is that it can include only one row of buttons. Buttons can be united into blocks according to their functionality.

The arrangement of buttons in the toolbar is specified by the *buttons* property. 
It presents a hash of data, where the key is the name of a block of buttons
and the value is an array of buttons names.

There are four blocks of buttons on the toolbar by default:

- “undo” -  Undo/Redo
- “font” - all operations related to font and color manipulations
- “align” - align operations including cell span and text wrap
- “format” - number format settings
