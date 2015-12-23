@link: api/selectionmodel_multiselect_config.md

@type: boolean, string

@descr:

In the multiselect mode api allows marking multiple elements as selected at the same time.

If a component supports direct selection, it may be possible to use Ctrl-click 
and Shift-click to select multiple elements at once. 


Possible values are:

- state	- (true/false) enables/disables multiselection
- "level" - (string) allows selection only on the same level
- "touch" - (string) sets the "touch" mode of multiselection
(the first click on an element selects it, the second one removes selection)

@relatedsample:

17_datatree/04_api/04_multi_select.html