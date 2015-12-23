{{memo page navigation control}}

The component makes little sense on its own, but can be used with other data-based components such as DataTable, DataView, List. Not purposed for direct initialization. Check [pager](desktop/paging.md) documentation for more detailed description.

### Constructor

~~~js
webix.ui({
  view:"list",
  template:"#id#. #title#",
  pager:{	
    size:1,
    group:4
  },
  data:[
   	 {"id":1,"title":"Item 1"},
   	 {"id":2,"title":"Item 2"},
   	 {"id":3,"title":"Item 3"},
   	 {"id":4,"title":"Item 4"},
     {"id":5,"title":"Item 5"},
     {"id":6,"title":"Item 6"}, 		
  ]
});
~~~

### Where to start

- [Overview of the Pager Component](desktop/paging.md)
- [Samples](http://docs.webix.com/samples/25_pager/index.html)