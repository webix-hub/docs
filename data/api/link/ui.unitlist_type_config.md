@link: api/renderstack_type_config.md



@descr:
Attributes of the **type** object:

- **css** - (*string*) the name of a css class that will be applied to component's items (the default name of the applied class is 'default').
- **height** -  (*number*) the height of  an item in the component.
- **templateItem** - (*function, string*) an html template that defines data that will be presented in the component.
- **templateGroup** - (*function, string*) an html template that defines data that will be presented in the group header in the collapsed state.
- **templateBack** - (*function, string*) an html template that defines data that will be presented in the group header in the expanded state.
- **width** -  (*number*) the width of the items list.

<i>As a function,  **templateItem**, **templateGroup** and **templateBack** takes a data item object.</i>