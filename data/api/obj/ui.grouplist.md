
{{memo a vertical list of items grouped into sections by some category}}

The component provides navigation within the list and between the sections. 
Support for various data template formats, sorting and filtering features. Check [grouplist](desktop/grouplist.md) documentation for more detailed description.

### Constructor

~~~js
var grouplist = webix.ui({
  view:"grouplist",
  scroll:false,
  data:[
    {id:"root", value:"Films data", open:true, data:[
      { id:"1", open:true, value:"The Shawshank Redemption", data:[
        { id:"1.1", value:"Part 1" },
        { id:"1.2", value:"Part 2"}
      ]}
    ]}
  ]
});
~~~

### Where to start

- [Overview of the Grouplist Widget](desktop/grouplist.md)
- [Samples](http://docs.webix.com/samples/05_list/index.html)