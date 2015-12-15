
{{memo a borderless empty view}}

The component has a pure API and only used to fill a layout cell if it's supposed to be empty. Can be initialized by the simple {} construction. Check [view](desktop/view.md) documentation for more detailed description.

### Constructor

~~~js
webix.ui({
    view:"toolbar", cols:[
        {view:"button", value:"but1"},
        {},
        {view:"button", value:"but2"}
    ]
});
~~~
