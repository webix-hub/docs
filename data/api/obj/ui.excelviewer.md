
{{memo a tool for displaying the content of Excel files on the screen}}

Webix Excel Viewer is a handy tool for viewing Excel files. It consists of a toolbar that contains tabs with the sheets names and the viewer itself.

Check desktop/excelviewer.md documentation for a more detailed information.

### Constructor

~~~js
var excelviewer = webix.ui({
    view:"excelviewer", 
    toolbar:"toolbar", 
    excelHeader:true, 
    url:"binary->files/data.xlsx"
}).
~~~

### Where to start

- [Overview of the Excel Viewer Widget](desktop/excelviewer.md)
- [Samples](http://docs.webix.com/samples/60_pro/10_viewers/)