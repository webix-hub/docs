
{{memo a panel that contains multiple clickable items}}

Items of the component combine icons with text labels. The component can be used to build a multi-item menu for navigating between views. Check [tabbar](desktop/tabbar.md) documentation for more detailed description.


### Constructor

~~~js
webix.ui({ 
	rows:[
    	{view:"tabbar", id:'tabbar', value:'formView', multiview:true, options: [
      		{ value: 'Form', id: 'formView'},
      		{ value: 'Empty', id: 'emptyView'}
    	]},
    	{
		  cells:[
      		 {id:"formView",template:"Form Content"},
        	 {id:"emptyView", template:"Some content"}
      	]}
    ]
});
~~~

### Where to start

- [Overview of the Tabbar Control](desktop/tabbar.md)
- [Samples](http://docs.webix.com/samples/02_toolbar/02_tabbar.html)

