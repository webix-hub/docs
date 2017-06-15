
{{memo a widget with rich selection possibilities for moving items between two lists }}

The Double List widget is based on Webix Layout. It includes two lists that contain sets of data items. Customizable buttons placed between the lists allow the user to select items in one list and drag-n-drop them to the other one.

Check desktop/double_list.md documentation for more details.


###Constructor 

~~~js
var double_list = webix.ui({
    view:"dbllist", 
    value:"1,2",
    data:[
        {id:"1", value:"Guest"},
        {id:"2", value:"Member"},
        {id:"3", value:"Moderator"}
    ]
});
~~~

### Where to start

- [Overview of the Double List Widget](desktop/double_list.md)
- [Samples](http://docs.webix.com/samples/05_list/18_dbllist.html)


@seolinktop: [widget library](https://webix.com)
@seolink: [object list javascript](https://webix.com/widget/list/)